<?php

/**
 * PHP version 7.3
 *
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es/ ETS de Ingeniería de Sistemas Informáticos
 */

namespace App\EventListener;

use App\Controller\Utils;
use App\Entity\Message;
use Exception;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTDecodeFailureException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

/**
 * Class ExceptionListener
 */
class ExceptionListener
{

    /**
     * @var RequestStack
     */
    private $requestStack;

    /**
     * ExceptionListener constructor.
     *
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @Link https://symfony.com/doc/current/event_dispatcher.html
     *
     * @param   ExceptionEvent $event
     * @return  void
     * @throws  Exception
     */
    public function onKernelException(ExceptionEvent $event): void
    {
        /** @var Request $request */
        $request = $this->requestStack->getCurrentRequest();

        // You get the exception object from the received event
        $exception = $event->getThrowable();

        // HttpExceptionInterface is a special type of exception that
        // holds status code and header details
        if ($exception instanceof HttpExceptionInterface) {
            $message = new Message(
                $exception->getStatusCode(),
                $exception->getMessage()
            );
        } elseif ($exception instanceof JWTDecodeFailureException) {
            $message = new Message(
                Response::HTTP_UNAUTHORIZED,
                Response::$statusTexts[401]
            );
        } else {
            $message = new Message(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                $exception->getMessage()
            );
        }

        // Send the modified response object to the event
        $format = Utils::getFormat($request);
        $response = Utils::apiResponse(
            $message->getCode(),
            [ 'message' => $message ],
            $format
        );
        $event->setResponse($response);
    }
}
