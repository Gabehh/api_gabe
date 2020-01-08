<?php


namespace App\Controller;


use App\Entity\Message;
use App\Entity\Result;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @throws Exception
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

        $format = Utils::getFormat($request);


        if (!isset($data['result'],$data['userId'])) {
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
            ->findOneBy([ 'id' => $data['userId'] ]);

        if (null === $user_exist) {    // 400 - Bad Request
            $message = new Message(Response::HTTP_BAD_REQUEST, Response::$statusTexts[400]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        $result = new Result(
            $data['result'],
            $data['userId'],
            $data['time'] = new \DateTime('now')
        );

        // comment
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

    /**
     * Summary: Returns a result based on a single ID
     * Notes: Returns the result identified by &#x60;resultId&#x60;.
     *
     * @param Request $request
     * @param  int $resultId Result id
     * @return Response
     * @Route(
     *     "/{resultId}.{_format}",
     *     defaults={ "_format": null },
     *     requirements={
     *          "resultId": "\d+",
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
    public function getResult(Request $request, int $resultId): Response
    {
        $result = $this->entityManager
            ->getRepository(Result::class)
            ->find($resultId);
        $format = Utils::getFormat($request);

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
            [ 'result' => $result ],
            $format
        );
    }


    /**
     * Summary: Returns results based on an user id
     * Notes: Returns the result identified by &#x60;userId&#x60;.
     *
     * @param Request $request
     * @param  int $userId User id
     * @return Response
     * @Route(
     *
     *     "/user/{userId}.{_format}",
     *     defaults={ "_format": null },
     *     requirements={
     *          "userId": "\d+",
     *          "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_GET },
     *     name="userget"
     * )
     *
     * @Security(
     *     expression="is_granted('IS_AUTHENTICATED_FULLY')",
     *     statusCode=401,
     *     message="Invalid credentials."
     * )
     */
    public function getResultsByUser(Request $request, int $userId): Response
    {
        $format = Utils::getFormat($request);

        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneBy([ 'id' => $userId ]);

        if (null === $user) {    // 400 - Bad Request
            $message = new Message(Response::HTTP_BAD_REQUEST, Response::$statusTexts[400]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        $result = $this->entityManager
            ->getRepository(Result::class)
            ->findBy([ 'userId' => $userId ]);

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
            [ 'result' => $result ],
            $format
        );
    }


    /**
     * Summary: Updates a result
     * Notes: Updates the result identified by &#x60;resultId&#x60;.
     *
     * @param Request $request request
     * @param int resultId Result id
     * @return  Response
     * @Route(
     *     "/{resultId}.{_format}",
     *     defaults={"_format": null},
     *     requirements={
     *          "resultId": "\d+",
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
     * @throws Exception
     */
    public function updateResult(Request $request, int $resultId): Response
    {
        // Puede editar otro usuario diferente sólo si tiene ROLE_ADMIN
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new HttpException(   // 403
                Response::HTTP_FORBIDDEN,
                "`Forbidden`: you don't have permission to access"
            );
        }

        $body = $request->getContent();
        $postData = json_decode($body, true);
        $format = Utils::getFormat($request);

        $result = $this->entityManager
            ->getRepository(Result::class)
            ->findOneBy([ 'id' => $resultId ]);

        if (null === $result) {    // 404 - Not Found
            $message = new Message(Response::HTTP_NOT_FOUND, Response::$statusTexts[404]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        if (isset($postData['userId'])) {
            $user_exist = $this->entityManager
                ->getRepository(User::class)
                ->findOneBy([ 'id' => $postData['userId'] ]);

            if (null === $user_exist) {    // 400 - Bad Request
                $message = new Message(Response::HTTP_BAD_REQUEST, Response::$statusTexts[400]);
                return Utils::apiResponse(
                    $message->getCode(),
                    [ 'message' => $message ],
                    $format
                );
            }
            $result->setUserId($postData['userId']);
        }

        // result
        if (isset($postData['result'])) {
            $result->setResult($postData['result']);
        }

        // comment
        if (isset($postData['comment'])) {
            $result->setComment($postData['comment']);
        }

        $result->setTime(new \DateTime('now'));

        $this->entityManager->flush();

        return Utils::apiResponse(
            209,                        // 209 - Content Returned
            [ 'result' => $result ],
            $format
        );
    }

    /**
     * Summary: Deletes a result
     * Notes: Deletes the result identified by &#x60;resultId&#x60;.
     *
     * @param   Request $request
     * @param   int $resultId Result id
     * @return  Response
     * @Route(
     *     "/{resultId}.{_format}",
     *     defaults={"_format": null},
     *     requirements={
     *          "resultId": "\d+",
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
    public function deleteResult(Request $request, int $resultId): Response
    {
        // Puede crear un usuario sólo si tiene ROLE_ADMIN
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new HttpException(   // 403
                Response::HTTP_FORBIDDEN,
                "`Forbidden`: you don't have permission to access"
            );
        }
        $format = Utils::getFormat($request);

        /** @var Result $result */
        $result = $this->entityManager
            ->getRepository(Result::class)
            ->findOneBy([ 'id' => $resultId ]);

        if (null === $result) {   // 404 - Not Found
            $message = new Message(Response::HTTP_NOT_FOUND, Response::$statusTexts[404]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        $this->entityManager->remove($result);
        $this->entityManager->flush();

        return new Response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * Summary: Deletes a result by user id
     * Notes: Deletes the result identified by &#x60;userId&#x60;.
     *
     * @param   Request $request
     * @param   int $userId User id
     * @return  Response
     * @Route(
     *     "/user/{userId}.{_format}",
     *     defaults={"_format": null},
     *     requirements={
     *          "userId": "\d+",
     *         "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_DELETE },
     *     name="userdelete"
     * )
     *
     * @Security(
     *     expression="is_granted('IS_AUTHENTICATED_FULLY')",
     *     statusCode=401,
     *     message="Invalid credentials."
     * )
     */
    public function deleteResultByUser(Request $request, int $userId): Response
    {
        // Puede crear un usuario sólo si tiene ROLE_ADMIN
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new HttpException(   // 403
                Response::HTTP_FORBIDDEN,
                "`Forbidden`: you don't have permission to access"
            );
        }

        $format = Utils::getFormat($request);

        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneBy([ 'id' => $userId ]);

        // 400 - Bad Request
        if ($user === null) {
            $message = new Message(Response::HTTP_BAD_REQUEST, Response::$statusTexts[400]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

        $results = $this->entityManager
            ->getRepository(Result::class)
            ->findBy([ 'userId' => $userId ]);

        if (empty($results)) {
            $message = new Message(Response::HTTP_NOT_FOUND, Response::$statusTexts[404]);
            return Utils::apiResponse(
                $message->getCode(),
                [ 'message' => $message ],
                $format
            );
        }

       foreach ($results as $result) {
            $this->entityManager->remove($result);
        }

        $this->entityManager->flush();

        return new Response(null, Response::HTTP_NO_CONTENT);
    }


    /**
     * Summary: Provides the list of HTTP supported methods
     * Notes: Return a &#x60;Allow&#x60; header with a list of HTTP supported methods.
     *
     * @param  int $resultId Result id
     * @return Response
     * @Route(
     *     "/{resultId}.{_format}",
     *     defaults={"resultId" = 0, "_format": "json"},
     *     requirements={
     *          "resultId": "\d+",
     *         "_format": "json|xml"
     *     },
     *     methods={ Request::METHOD_OPTIONS },
     *     name="options"
     * )
     */
    public function optionsAction(int $resultId): Response
    {
        $methods = $resultId
            ? [ Request::METHOD_GET, Request::METHOD_PUT, Request::METHOD_DELETE ]
            : [ Request::METHOD_GET, Request::METHOD_POST ];

        return new JsonResponse(
            null,
            Response::HTTP_OK,
            [ 'Allow' => implode(', ', $methods) ]
        );
    }

}