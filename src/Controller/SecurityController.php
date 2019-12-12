<?php

/**
 * PHP version 7.3
 *
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es/ ETS de Ingeniería de Sistemas Informáticos
 */

namespace App\Controller;

use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationSuccessResponse;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

/**
 * Class SecurityController
 */
class SecurityController extends AbstractController
{
    // Ruta al controlador de seguridad
    public const PATH_LOGIN_CHECK = '/api/v1/login_check';

    /** @var AuthenticationSuccessHandler $successHandler */
    private $successHandler;

    /** @var AuthenticationFailureHandler $failureHandler */
    private $failureHandler;

    /**
     * SecurityController constructor.
     *
     * @param AuthenticationSuccessHandler $successHandler
     * @param AuthenticationFailureHandler $failureHandler
     */
    public function __construct(
        AuthenticationSuccessHandler $successHandler,
        AuthenticationFailureHandler $failureHandler
    ) {
        $this->successHandler = $successHandler;
        $this->failureHandler = $failureHandler;
    }

    /**
     * @Route(
     *     path=SecurityController::PATH_LOGIN_CHECK,
     *     name="app_security_logincheck",
     *     methods={ Request::METHOD_POST }
     * )
     * @param Request $request
     * @return JWTAuthenticationSuccessResponse|Response
     */
    public function logincheckAction(Request $request)
    {
        // Obtención datos: Form | JSON | URLencoded
        $email = '';
        $password = '';
        if ($request->headers->get('content-type') === 'application/x-www-form-urlencoded') {   // Formulario
            $email = $request->get('email');
            $password = $request->get('password');
        } /** @noinspection NotOptimalIfConditionsInspection */
        elseif (($req_data = json_decode($request->getContent(), true)) && (json_last_error() === JSON_ERROR_NONE)) {  // Contenido JSON
            $email = $req_data['email'];
            $password = $req_data['password'];
        } else {    // URL codificado
            foreach (explode('&', $request->getContent()) as $param) {
                $keyValuePair = explode('=', $param, 2);
                if ($keyValuePair[0] === 'email') {
                    $email = urldecode($keyValuePair[1]);
                }
                if ($keyValuePair[0] === 'password') {
                    $password = urldecode($keyValuePair[1]);
                }
            }
        }

        $user = (null !== $email)
            ? $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy([ 'email' => $email ])
            : null;

        return (null === $user || !password_verify($password, $user->getPassword()))
            ? $this->failureHandler->onAuthenticationFailure(
                $request,
                new BadCredentialsException()
            )
            : $this->successHandler->handleAuthenticationSuccess($user);
    }
}
