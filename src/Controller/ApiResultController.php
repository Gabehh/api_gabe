<?php


namespace App\Controller;


use App\Entity\Message;
use App\Entity\Result;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ApiResultController
 *
 * @package App\Controller
 *
 * @Route(
 *     path=ApiResultController::RUTA_API,
 *     name="api_result_"
 * )
 */


class ApiResultController extends AbstractController
{
    public const RUTA_API = '/api/v1/results';

    /** @var EntityManagerInterface $entityManager */
    private $entityManager;

    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }

    /**
     * Summary: Returns all results
     * Notes: Returns all results from the system that the user has access to.
     *
     * @param   Request $request
     * @return  Response
     * @Route(
     *     ".{_format}",
     *     defaults={"_format": null},
     *     requirements={
     *         "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_GET },
     *     name="cget"
     * )
     *
     * @Security(
     *     expression="is_granted('IS_AUTHENTICATED_FULLY')",
     *     statusCode=401,
     *     message="Invalid credentials."
     * )
     */
    public function getResults(Request $request): Response
    {
        /** @var Result[] $result */
        $result = $this->entityManager
            ->getRepository(Result::class)
            ->findAll();
        $format = Utils::getFormat($request);

        // No hay results?
        if (empty($result)) {
            $message = new Message(Response::HTTP_NOT_FOUND, Response::$statusTexts[404]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        return Utils::apiResponse(
            Response::HTTP_OK,
            [ 'results' => $result ],
            $format
        );
    }


    /**
     * POST Result
     *
     * @param Request $request request
     * @return Response
     * @Route(
     *     ".{_format}",
     *     defaults={"_format": null},
     *     requirements={
     *         "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_POST },
     *     name="post"
     * )
     *
     * @Security(
     *     expression="is_granted('IS_AUTHENTICATED_FULLY')",
     *     statusCode=401,
     *     message="Invalid credentials."
     * )
     */
    public function createResult(Request $request): Response
    {
        // Puede crear un result sólo si tiene ROLE_ADMIN
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new HttpException(   // 403
                Response::HTTP_FORBIDDEN,
                "`Forbidden`: you don't have permission to access"
            );
        }


        $data = json_decode(
            $request->getContent(),
            true
        );

        //$body = $request->getContent();
        //$postData = json_decode($body, true);
        $format = Utils::getFormat($request);


        if (!isset($data['result'],$data['userId'],$data['time'])) {
            // 422 - Unprocessable Entity Faltan datos
            $message = new Message(Response::HTTP_UNPROCESSABLE_ENTITY, Response::$statusTexts[422]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        // hay datos -> procesarlos

        $result = new Result(
            $data['result'],
            $data['userId'],
            $data['time']
        );
        // roles
        if (isset($data['comment'])) {
            $result->setComment($data['comment']);
        }

        $this->entityManager->persist($result);
        $this->entityManager->flush();

        return Utils::apiResponse(
            Response::HTTP_CREATED,
            [ 'result' => $result ],
            $format
        );
    }
}