<?php

namespace App\Controller;

use App\Entity\Message;
use Hateoas\HateoasBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Trait Utils
 *
 * @package App\Controller
 */
trait Utils
{
    /**
     * Generates a response object with the message and corresponding code
     * (serialized according to $format)
     *
     * @param  int $code HTTP status
     * @param  array|Message $message HTTP message
     * @param  null|string $format Default JSON
     * @return Response Response object
     */
    public static function apiResponse(int $code, $message, ?string $format = 'json'): Response
    {
        $hateoas = HateoasBuilder::create()->build();
        $data = $hateoas->serialize($message, $format);

        $response = new Response($data, $code);
        $response->headers->set('Access-Control-Allow-Origin', '*'); // enable CORS
        switch ($format) {
            case 'xml':
                $response->headers->set('Content-Type', 'application/xml');
                break;
            default:
                $response->headers->set('Content-Type', 'application/json');
        }

        return $response;
    }

    /**
     * Return the request format (xml | json)
     *
     * @param  Request $request
     * @return string (xml | json)
     */
    public static function getFormat(Request $request): string
    {
        $acceptHeader = $request->getAcceptableContentTypes();
        $miFormato = ('application/xml' === $acceptHeader[0])
            ? 'xml'
            : 'json';

        return empty($request->get('_format'))
            ? $miFormato
            : $request->get('_format');
    }
}
