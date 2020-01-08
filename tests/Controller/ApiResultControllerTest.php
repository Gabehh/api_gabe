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
    private const RUTA_API_NEW = '/api/v1/results/user';

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
            'result' => self::$faker->randomDigitNotNull,
            'userId' => 2,
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
     * Test POST /result 201 Created
     *
     * @return array result data
     * @covers ::createResult()
     */
    public function testPostResultAction(): array
    {
        $p_data = [
            'result' => self::$faker->randomDigitNotNull,
            'userId' => 1,
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
        self::assertEquals($result['user_id'], $result_aux['result']['user_id']);
    }

    /**
     * Test GET /result/users/{userId} 200 Ok
     * @param   array $result result returned by testPostResultAction201()
     * @return void
     * @covers ::getResultsByUser()
     * @depends testPostResultAction201
     */
    public function testResultGetActionByUser200(array $result): void
    {
        $headers = $this->getTokenHeaders();
        self::$client->request(
            Request::METHOD_GET,
            self::RUTA_API_NEW . '/' . $result['user_id'],
            [],
            [],
            $headers
        );
        $response = self::$client->getResponse();
        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson((string)$response->getContent());
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
            'result' => self::$faker->randomDigitNotNull,
            'userId' => "999",
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
            'result' => self::$faker->randomDigitNotNull,
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

    /**
     * Test PUT /result/{resultId} 400 Bad Request
     *
     * @param   array $result user returned by testPutResultAction209()
     * @return  void
     * @covers  ::updateResult()
     * @depends testPostResultAction201
     */
    public function testPutResultAction400(array $result): void
    {
        $headers = $this->getTokenHeaders();
        // User does not exists
        $p_data = [
            'userId' => ""
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

        self::assertEquals(
            Response::HTTP_BAD_REQUEST,
            $response->getStatusCode()
        );
        $r_body = (string) $response->getContent();
        self::assertJson($r_body);
        self::assertContains('code', $r_body);
        self::assertContains('message', $r_body);
        $r_data = json_decode($r_body, true);
        self::assertEquals(
            Response::HTTP_BAD_REQUEST,
            $r_data['message']['code']
        );
        self::assertEquals(
            Response::$statusTexts[400],
            $r_data['message']['message']
        );
    }


    /**
     * Test DELETE /result/{resultId} 204 No Content
     *
     * @param   array $result user returned by testPostUserAction201()
     * @return  int userId
     * @covers  ::deleteResult()
     * @depends testPostResultAction201
     * @depends testPostResultAction400
     * @depends testGetResultAction200
     * @depends testPutResultAction400
     */
    public function testDeleteResultAction204(array $result): int
    {
        $headers = $this->getTokenHeaders();
        self::$client->request(
            Request::METHOD_DELETE,
            self::RUTA_API . '/' . $result['id'],
            [],
            [],
            $headers
        );
        $response = self::$client->getResponse();

        self::assertEquals(
            Response::HTTP_NO_CONTENT,
            $response->getStatusCode()
        );
        self::assertEmpty((string) $response->getContent());

        return $result['id'];
    }

    /**
     * Test POST /result 422 Unprocessable Entity
     *
     * @covers ::createResult()
     * @param null|string $result
     * @param null|string $userId
     * @dataProvider resultProvider422
     * @return void
     */
    public function testPostResultAction422(?string $result, ?string $userId): void
    {
        $headers = $this->getTokenHeaders();
        $p_data = [
            'result' => $result,
            'userId' => $userId
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

        self::assertEquals(
            Response::HTTP_UNPROCESSABLE_ENTITY,
            $response->getStatusCode()
        );
        $r_body = (string) $response->getContent();
        self::assertJson($r_body);
        self::assertContains('code', $r_body);
        self::assertContains('message', $r_body);
        $r_data = json_decode($r_body, true);
        self::assertEquals(Response::HTTP_UNPROCESSABLE_ENTITY, $r_data['message']['code']);
        self::assertEquals(
            Response::$statusTexts[422],
            $r_data['message']['message']
        );
    }

    /**
     * Result provider (incomplete) -> 422 status code
     *
     * @return array result data
     */
    public function resultProvider422(): array
    {
        $result = "";
        $userId = "";

        return [
            'nulo_01' => [ null,   $userId ],
            'nulo_02' => [ $result, null      ],
            'nulo_03' => [ null,   null      ],
        ];
    }

    public function routeProvider401(): array
    {
        return [
            'cgetAction401'   => [ Request::METHOD_GET,    self::RUTA_API ],
            'getAction401'    => [ Request::METHOD_GET,    self::RUTA_API . '/1' ],
            'postAction401'   => [ Request::METHOD_POST,   self::RUTA_API ],
            'putAction401'    => [ Request::METHOD_PUT,    self::RUTA_API . '/1' ],
            'deleteAction401' => [ Request::METHOD_DELETE, self::RUTA_API . '/1' ],
        ];
    }


    public function routeProvider404(): array
    {
        return [
            'getAction404'    => [ Request::METHOD_GET ],
            'putAction404'    => [ Request::METHOD_PUT ],
            'deleteAction404' => [ Request::METHOD_DELETE ],
        ];
    }

    public function routeProvider403(): array
    {
        return [
            'postAction403'   => [ Request::METHOD_POST,   self::RUTA_API ],
            'putAction403'    => [ Request::METHOD_PUT,    self::RUTA_API . '/1' ],
            'deleteAction403' => [ Request::METHOD_DELETE, self::RUTA_API . '/1' ],
        ];
    }

    /**
     * Test GET    /result 401 UNAUTHORIZED
     * Test POST   /result 401 UNAUTHORIZED
     * Test GET    /result/{resultId} 401 UNAUTHORIZED
     * Test PUT    /result/{resultId} 401 UNAUTHORIZED
     * Test DELETE /result/{resultId} 401 UNAUTHORIZED
     *
     * @param string $method
     * @param string $uri
     * @dataProvider routeProvider401()
     * @return void
     * @covers ::getResults()
     * @covers ::getResult()
     * @covers ::createResult()
     * @covers ::updateResult()
     * @covers ::deleteResult()
     * @covers \App\EventListener\ExceptionListener::onKernelException()
     */
    public function testResultStatus401(string $method, string $uri): void
    {
        self::$client->request(
            $method,
            $uri,
            [],
            [],
            [ 'HTTP_ACCEPT' => 'application/json' ]
        );
        $response = self::$client->getResponse();

        self::assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
        self::assertJson((string) $response->getContent());
        $r_body = (string) $response->getContent();
        self::assertContains('code', $r_body);
        self::assertContains('message', $r_body);
        $r_data = json_decode($r_body, true);
        self::assertSame(Response::HTTP_UNAUTHORIZED, $r_data['message']['code']);
        self::assertSame(
            'Invalid credentials.',
            $r_data['message']['message']
        );
    }


    /**
     * Test GET    /result/{resultId} 404 NOT FOUND
     * Test PUT    /result/{resultId} 404 NOT FOUND
     * Test DELETE /result/{resultId} 404 NOT FOUND
     *
     * @param string $method
     * @param int $resultId result id. returned by testDeleteResultAction204()
     * @dataProvider routeProvider404
     * @return void
     * @covers ::getResult()
     * @covers ::updateResult()
     * @covers ::deleteResult()
     * @depends testDeleteResultAction204
     */
    public function testResultStatus404(string $method, int $resultId): void
    {
        $headers = $this->getTokenHeaders(
            self::$role_admin['email'],
            self::$role_admin['passwd']
        );
        self::$client->request(
            $method,
            self::RUTA_API . '/' . $resultId,
            [],
            [],
            $headers
        );
        $response = self::$client->getResponse();

        self::assertSame(Response::HTTP_NOT_FOUND, $response->getStatusCode());
        $r_body = (string) $response->getContent();
        self::assertContains('code', $r_body);
        self::assertContains('message', $r_body);
        $r_data = json_decode($r_body, true);
        self::assertSame(Response::HTTP_NOT_FOUND, $r_data['message']['code']);
        self::assertSame(Response::$statusTexts[404], $r_data['message']['message']);
    }

    /**
     * Test POST   /result 403 FORBIDDEN
     * Test PUT    /result/{resultId} 403 FORBIDDEN
     * Test DELETE /result/{resultId} 403 FORBIDDEN
     *
     * @param string $method
     * @param string $uri
     * @dataProvider routeProvider403()
     * @return void
     * @covers ::createResult()
     * @covers ::updateResult()
     * @covers ::deleteResult()
     * @covers \App\EventListener\ExceptionListener::onKernelException()
     */
    public function testResultStatus403(string $method, string $uri): void
    {
        $headers = $this->getTokenHeaders(
            self::$role_user['email'],
            self::$role_user['passwd']
        );
        self::$client->request($method, $uri, [], [], $headers);
        $response = self::$client->getResponse();

        self::assertSame(Response::HTTP_FORBIDDEN, $response->getStatusCode());
        self::assertJson((string) $response->getContent());
        $r_body = (string) $response->getContent();
        self::assertContains('code', $r_body);
        self::assertContains('message', $r_body);
        $r_data = json_decode($r_body, true);
        self::assertSame(Response::HTTP_FORBIDDEN, $r_data['message']['code']);
        self::assertSame(
            '`Forbidden`: you don\'t have permission to access',
            $r_data['message']['message']
        );
    }

    /**
     * Test DELETE /result/users/{userId} 204 No Content
     *
     * @param   array $result user returned by testPostUserAction201()
     * @covers  ::deleteResultByUser()
     * @depends testPostResultAction
     */
    public function testDeleteResultByUserAction204(array $result): void
    {
        $headers = $this->getTokenHeaders(
            self::$role_admin['email'],
            self::$role_admin['passwd']
        );
        self::$client->request(
            Request::METHOD_DELETE,
            self::RUTA_API_NEW . '/' . $result['user_id'],
            [],
            [],
            $headers
        );
        $response = self::$client->getResponse();

        self::assertEquals(
            Response::HTTP_NO_CONTENT,
            $response->getStatusCode()
        );
        self::assertEmpty((string) $response->getContent());
    }
}