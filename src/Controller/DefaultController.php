<?php

/**
 * PHP version 7.3
 *
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es/ ETS de Ingeniería de Sistemas Informáticos
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 *
 * @package App\Controller
 */
class DefaultController
{

    /**
     * Redirect home page
     *
     * @return Response
     *
     * @Route(
     *     path="/",
     *     name="homepage"
     * )
     */
    public function homeRedirect(): Response
    {
        return new RedirectResponse(
            '/api-docs/index.html',
            Response::HTTP_MOVED_PERMANENTLY
        );
    }
}
