<?php


namespace App\Controller;


use App\Entity\Message;
use App\Entity\Result;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
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
    public const RUTA_API = '/api/v1/result';

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

        return Utils::apiResponse(
            Response::HTTP_OK,
            [ 'user' => $result ],
            $format
        );
    }
}