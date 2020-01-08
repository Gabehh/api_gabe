<?php

namespace App\Tests\Controller;

use Faker\Factory as FakerFactoryAlias;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiResultControllerTest
 *
 * @package App\Tests\Controller
 *
 * @coversDefaultClass \App\Controller\ApiResultController
 */
class ApiResultControllerTest extends BaseTestCase
{
    private const RUTA_API = '/api/v1/results';

    /**
     * Test OPTIONS /result[/resultId] 200 Ok
     *
     * @return void
     * @covers ::optionsAction()
     */
    public function testOptionsResultAction200(): void
    {
        self::$client->request(
            Request::METHOD_OPTIONS,
            self::RUTA_API
        );
        $response = self::$client->getResponse();

        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertNotEmpty($response->headers->get('Allow'));


        self::$client->request(
            Request::METHOD_OPTIONS,
            self::RUTA_API . '/' . self::$faker->numberBetween(1, 100)
        );

        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertNotEmpty($response->headers->get('Allow'));
    }

    /**
     * Test POST /result 201 Created
     *
     * @return array result data
     * @covers ::createResult()
     */
    public function testPostResultAction201(): array
    {
        $p_data = [
            'result' => "10",
            'userId' => "1",
            'comment' => "test",
        ];

        // 201
        $headers = $this->getTokenHeaders();
        self::$client->request(
            Request::METHOD_POST,
            self::RUTA_API,
            [],
            [],
            $headers,
            json_encode($p_data)
        );
        $response = self::$client->getResponse();

        self::assertEquals(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertTrue($response->isSuccessful());
        self::assertJson($response->getContent());
        $results = json_decode($response->getContent(), true);

        self::assertNotEmpty($results['result']['id']);
        self::assertEquals($p_data['userId'], $results['result']['user_id']);

        return $results['result'];
    }


    /**
     * Test GET /result 200 Ok
     *
     * @return void
     * @covers ::getResults()
     * @depends testPostResultAction201
     */
    public function testResultGetAction200(): void
    {
        $headers = $this->getTokenHeaders();
        self::$client->request(Request::METHOD_GET, self::RUTA_API, [], [], $headers);
        $response = self::$client->getResponse();
        self::assertTrue($response->isSuccessful());
        self::assertJson($response->getContent());
        $results = json_decode($response->getContent(), true);
        self::assertArrayHasKey('results', $results);
    }


    /**
     * Test GET /result 200 Ok (XML)
     *
     * @return void
     * @covers ::getResults()
     * @covers \App\Controller\Utils::getFormat()
     * @covers \App\Controller\Utils::apiResponse()
     * @depends testPostResultAction201
     */
    public function testResultGetAction200XML(): void
    {
        $headers = $this->getTokenHeaders();
        self::$client->request(
            Request::METHOD_GET,
            self::RUTA_API . '.xml',
            [],
            [],
            $headers
        );
        $response = self::$client->getResponse();
        self::assertTrue($response->isSuccessful());
        self::assertArrayHasKey('content-type', $response->headers->all());
        self::assertEquals('application/xml', $response->headers->get('content-type'));
    }


    /**
     * Test GET /result/{resultId} 200 Ok
     *
     * @param   array $result result returned by testPostResultAction201()
     * @return  void
     * @covers  ::getResult()
     * @depends testPostResultAction201
     */
    public function testGetResultAction200(array $result): void
    {
        $headers = $this->getTokenHeaders();
        self::$client->request(
            Request::METHOD_GET,
            self::RUTA_API . '/' . $result['id'],
            [],
            [],
            $headers
        );
        $response = self::$client->getResponse();
        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson((string) $response->getContent());
        $result_aux = json_decode((string) $response->getContent(), true);
        self::assertEquals($result['id'], $result_aux['result']['id']);
    }

    /**
     * Test POST /result 400 Bad Request
     *
     * @return  void
     * @covers  ::createResult()
     */
    public function testPostResultAction400(): void
    {
        $headers = $this->getTokenHeaders();

        $p_data = [
            'result' => "10",
            'userId' => "32132131",
            'comment' => "test",
        ];
        self::$client->request(
            Request::METHOD_POST,
            self::RUTA_API,
            [],
            [],
            $headers,
            json_encode($p_data)
        );
        $response = self::$client->getResponse();

        self::assertEquals(Response::HTTP_BAD_REQUEST, $response->getStatusCode());
        $r_body = (string) $response->getContent();
        self::assertJson($r_body);
        self::assertContains('code', $r_body);
        self::assertContains('message', $r_body);
        $r_data = json_decode($r_body, true);
        self::assertEquals(Response::HTTP_BAD_REQUEST, $r_data['message']['code']);
        self::assertEquals(
            Response::$statusTexts[400],
            $r_data['message']['message']
        );
    }


    /**
     * Test PUT /result/{result} 209 Content Returned
     *
     * @param   array $result user returned by testPostResultAction201()
     * @return  array modified user data
     * @covers  ::updateResult()
     * @depends testPostResultAction201
     */
    public function testPutResultAction209(array $result): array
    {
        $headers = $this->getTokenHeaders();
        $p_data = [
            'result' => "102",
            'userId' => "1",
            'comment' => "test2",
        ];

        self::$client->request(
            Request::METHOD_PUT,
            self::RUTA_API . '/' . $result['id'],
            [],
            [],
            $headers,
            json_encode($p_data)
        );
        $response = self::$client->getResponse();

        self::assertEquals(209, $response->getStatusCode());
        self::assertJson((string) $response->getContent());
        $result_aux = json_decode((string) $response->getContent(), true);
        self::assertEquals($result['id'], $result_aux['result']['id']);
        self::assertEquals($p_data['userId'], $result_aux['result']['user_id']);
        return $result;
    }
}