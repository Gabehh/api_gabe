<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ApiUsersController
 *
 * @package App\Controller
 *
 * @Route(
 *     path=ApiUsersController::RUTA_API,
 *     name="api_users_"
 * )
 */
class ApiUsersController extends AbstractController
{

    public const RUTA_API = '/api/v1/users';

    /** @var EntityManagerInterface $entityManager */
    private $entityManager;

    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }

    /**
     * Summary: Returns all users
     * Notes: Returns all users from the system that the user has access to.
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
    public function cgetAction(Request $request): Response
    {
        /** @var User[] $users */
        $users = $this->entityManager
            ->getRepository(User::class)
            ->findAll();
        $format = Utils::getFormat($request);

        // No hay usuarios?
        if (empty($users)) {
            $message = new Message(Response::HTTP_NOT_FOUND, Response::$statusTexts[404]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        return Utils::apiResponse(
            Response::HTTP_OK,
            [ 'users' => $users ],
            $format
        );
    }

    /**
     * Summary: Returns a user based on a single ID
     * Notes: Returns the user identified by &#x60;userId&#x60;.
     *
     * @param Request $request
     * @param  int $userId User id
     * @return Response
     * @Route(
     *     "/{userId}.{_format}",
     *     defaults={ "_format": null },
     *     requirements={
     *          "userId": "\d+",
     *          "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_GET },
     *     name="get"
     * )
     *
     * @Security(
     *     expression="is_granted('IS_AUTHENTICATED_FULLY')",
     *     statusCode=401,
     *     message="Invalid credentials."
     * )
     */
    public function getAction(Request $request, int $userId): Response
    {
        $user = $this->entityManager
            ->getRepository(User::class)
            ->find($userId);
        $format = Utils::getFormat($request);

        if (empty($user)) {
            $message = new Message(Response::HTTP_NOT_FOUND, Response::$statusTexts[404]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        return Utils::apiResponse(
            Response::HTTP_OK,
            [ 'user' => $user ],
            $format
        );
    }

    /**
     * Summary: Provides the list of HTTP supported methods
     * Notes: Return a &#x60;Allow&#x60; header with a list of HTTP supported methods.
     *
     * @param  int $userId User id
     * @return Response
     * @Route(
     *     "/{userId}.{_format}",
     *     defaults={"userId" = 0, "_format": "json"},
     *     requirements={
     *          "userId": "\d+",
     *         "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_OPTIONS },
     *     name="options"
     * )
     */
    public function optionsAction(int $userId): Response
    {
        $methods = $userId
            ? [ Request::METHOD_GET, Request::METHOD_PUT, Request::METHOD_DELETE ]
            : [ Request::METHOD_GET, Request::METHOD_POST ];

        return new JsonResponse(
            null,
            Response::HTTP_OK,
            [ 'Allow' => implode(', ', $methods) ]
        );
    }

    /**
     * Summary: Deletes a user
     * Notes: Deletes the user identified by &#x60;userId&#x60;.
     *
     * @param   Request $request
     * @param   int $userId User id
     * @return  Response
     * @Route(
     *     "/{userId}.{_format}",
     *     defaults={"_format": null},
     *     requirements={
     *          "userId": "\d+",
     *         "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_DELETE },
     *     name="delete"
     * )
     *
     * @Security(
     *     expression="is_granted('IS_AUTHENTICATED_FULLY')",
     *     statusCode=401,
     *     message="Invalid credentials."
     * )
     */
    public function deleteAction(Request $request, int $userId): Response
    {
        // Puede crear un usuario sólo si tiene ROLE_ADMIN
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new HttpException(   // 403
                Response::HTTP_FORBIDDEN,
                "`Forbidden`: you don't have permission to access"
            );
        }
        $format = Utils::getFormat($request);

        /** @var User $user */
        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneBy([ 'id' => $userId ]);

        if (null === $user) {   // 404 - Not Found
            $message = new Message(Response::HTTP_NOT_FOUND, Response::$statusTexts[404]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        $this->entityManager->remove($user);
        $this->entityManager->flush();

        return new Response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * POST action
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
    public function postAction(Request $request): Response
    {
        // Puede crear un usuario sólo si tiene ROLE_ADMIN
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new HttpException(   // 403
                Response::HTTP_FORBIDDEN,
                "`Forbidden`: you don't have permission to access"
            );
        }
        $body = $request->getContent();
        $postData = json_decode($body, true);
        $format = Utils::getFormat($request);

        if (!isset($postData['email'], $postData['password'])) {
            // 422 - Unprocessable Entity Faltan datos
            $message = new Message(Response::HTTP_UNPROCESSABLE_ENTITY, Response::$statusTexts[422]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        // hay datos -> procesarlos
        $user_exist = $this->entityManager
                ->getRepository(User::class)
                ->findOneBy([ 'email' => $postData['email'] ]);

        if (null !== $user_exist) {    // 400 - Bad Request
            $message = new Message(Response::HTTP_BAD_REQUEST, Response::$statusTexts[400]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        // 201 - Created
        $user = new User(
            $postData['email'],
            $postData['password']
        );
        // roles
        if (isset($postData['roles'])) {
            $user->setRoles($postData['roles']);
        }

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return Utils::apiResponse(
            Response::HTTP_CREATED,
            [ 'user' => $user ],
            $format
        );
    }

    /**
     * Summary: Updates a user
     * Notes: Updates the user identified by &#x60;userId&#x60;.
     *
     * @param   Request $request request
     * @param   int $userId User id
     * @return  Response
     * @Route(
     *     "/{userId}.{_format}",
     *     defaults={"_format": null},
     *     requirements={
     *          "userId": "\d+",
     *         "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_PUT },
     *     name="put"
     * )
     *
     * @Security(
     *     expression="is_granted('IS_AUTHENTICATED_FULLY')",
     *     statusCode=401,
     *     message="Invalid credentials."
     * )
     */
    public function putAction(Request $request, int $userId): Response
    {
        // Puede editar otro usuario diferente sólo si tiene ROLE_ADMIN
        if (($this->getUser()->getId() !== $userId)
            && !$this->isGranted('ROLE_ADMIN')) {
            throw new HttpException(   // 403
                Response::HTTP_FORBIDDEN,
                "`Forbidden`: you don't have permission to access"
            );
        }
        $body = $request->getContent();
        $postData = json_decode($body, true);
        $format = Utils::getFormat($request);

        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneBy([ 'id' => $userId ]);

        if (null === $user) {    // 404 - Not Found
            $message = new Message(Response::HTTP_NOT_FOUND, Response::$statusTexts[404]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        if (isset($postData['email'])) {
            $user_exist = $this->entityManager
                ->getRepository(User::class)
                ->findOneBy([ 'email' => $postData['email'] ]);

            if (null !== $user_exist) {    // 400 - Bad Request
                $message = new Message(Response::HTTP_BAD_REQUEST, Response::$statusTexts[400]);
                return Utils::apiResponse(
                    $message->getCode(),
                    [ 'message' => $message ],
                    $format
                );
            }
            $user->setEmail($postData['email']);
        }

        // password
        if (isset($postData['password'])) {
            $user->setPassword($postData['password']);
        }

        // roles
        if (isset($postData['roles'])) {
            $user->setRoles($postData['roles']);
        }

        $this->entityManager->flush();

        return Utils::apiResponse(
            209,                        // 209 - Content Returned
            [ 'user' => $user ],
            $format
        );
    }
}
