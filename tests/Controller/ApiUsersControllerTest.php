<?php

namespace App\Tests\Controller;

use Faker\Factory as FakerFactoryAlias;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiUsersControllerTest
 *
 * @package App\Tests\Controller
 *
 * @coversDefaultClass \App\Controller\ApiUsersController
 */
class ApiUsersControllerTest extends BaseTestCase
{
    private const RUTA_API = '/api/v1/users';

    /**
     * Test OPTIONS /users[/userId] 200 Ok
     *
     * @return void
     * @covers ::optionsAction()
     */
    public function testOptionsUserAction200(): void
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
     * Test POST /users 201 Created
     *
     * @return array user data
     * @covers ::postAction()
     */
    public function testPostUserAction201(): array
    {
        $role = self::$faker->word;
        $p_data = [
            'email' => self::$faker->email,
            'password' => self::$faker->password,
            'roles' => [ $role ],
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
        $user = json_decode($response->getContent(), true);
        self::assertNotEmpty($user['user']['id']);
        self::assertEquals($p_data['email'], $user['user']['email']);
        self::assertContains(
            $role,
            $user['user']['roles']
        );

        return $user['user'];
    }

    /**
     * Test GET /users 200 Ok
     *
     * @return void
     * @covers ::cgetAction()
     * @depends testPostUserAction201
     */
    public function testCGetAction200(): void
    {
        $headers = $this->getTokenHeaders();
        self::$client->request(Request::METHOD_GET, self::RUTA_API, [], [], $headers);
        $response = self::$client->getResponse();
        self::assertTrue($response->isSuccessful());
        self::assertJson($response->getContent());
        $users = json_decode($response->getContent(), true);
        self::assertArrayHasKey('users', $users);
    }

    /**
     * Test GET /users 200 Ok (XML)
     *
     * @return void
     * @covers ::cgetAction()
     * @covers \App\Controller\Utils::getFormat()
     * @covers \App\Controller\Utils::apiResponse()
     * @depends testPostUserAction201
     */
    public function testCGetAction200XML(): void
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
     * Test GET /users/{userId} 200 Ok
     *
     * @param   array $user user returned by testPostUserAction201()
     * @return  void
     * @covers  ::getAction()
     * @depends testPostUserAction201
     */
    public function testGetUserAction200(array $user): void
    {
        $headers = $this->getTokenHeaders();
        self::$client->request(
            Request::METHOD_GET,
            self::RUTA_API . '/' . $user['id'],
            [],
            [],
            $headers
        );
        $response = self::$client->getResponse();

        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
        self::assertJson((string) $response->getContent());
        $user_aux = json_decode((string) $response->getContent(), true);
        self::assertEquals($user['id'], $user_aux['user']['id']);
    }

    /**
     * Test POST /users 400 Bad Request
     *
     * @param   array $user user returned by testPostUserAction201()
     * @return  void
     * @covers  ::postAction()
     * @depends testPostUserAction201
     */
    public function testPostUserAction400(array $user): void
    {
        $headers = $this->getTokenHeaders();

        $p_data = [
            'email' => $user['email'], // mismo e-mail
            'password' => self::$faker->password,
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
     * Test PUT /users/{userId} 209 Content Returned
     *
     * @param   array $user user returned by testPostUserAction201()
     * @return  array modified user data
     * @covers  ::putAction()
     * @depends testPostUserAction201
     */
    public function testPutUserAction209(array $user): array
    {
        $headers = $this->getTokenHeaders();
        $role = self::$faker->word;
        $p_data = [
            'email' => self::$faker->email,
            'password' => self::$faker->password,
            'roles' => [ $role ],
        ];

        self::$client->request(
            Request::METHOD_PUT,
            self::RUTA_API . '/' . $user['id'],
            [],
            [],
            $headers,
            json_encode($p_data)
        );
        $response = self::$client->getResponse();

        self::assertEquals(209, $response->getStatusCode());
        self::assertJson((string) $response->getContent());
        $user_aux = json_decode((string) $response->getContent(), true);
        self::assertEquals($user['id'], $user_aux['user']['id']);
        self::assertEquals($p_data['email'], $user_aux['user']['email']);
        self::assertContains(
            $role,
            $user_aux['user']['roles']
        );

        return $user_aux['user'];
    }

    /**
     * Test PUT /users/{userId} 400 Bad Request
     *
     * @param   array $user user returned by testPutUserAction209()
     * @return  void
     * @covers  ::putAction()
     * @depends testPutUserAction209
     */
    public function testPutUserAction400(array $user): void
    {
        $headers = $this->getTokenHeaders();
        // e-mail already exists
        $p_data = [
            'email' => $user['email']
        ];
        self::$client->request(
            Request::METHOD_PUT,
            self::RUTA_API . '/' . $user['id'],
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
     * Test DELETE /users/{userId} 204 No Content
     *
     * @param   array $user user returned by testPostUserAction201()
     * @return  int userId
     * @covers  ::deleteAction()
     * @depends testPostUserAction201
     * @depends testPostUserAction400
     * @depends testGetUserAction200
     * @depends testPutUserAction400
     */
    public function testDeleteUserAction204(array $user): int
    {
        $headers = $this->getTokenHeaders();
        self::$client->request(
            Request::METHOD_DELETE,
            self::RUTA_API . '/' . $user['id'],
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

        return $user['id'];
    }

    /**
     * Test POST /users 422 Unprocessable Entity
     *
     * @covers ::postAction()
     * @param null|string $email
     * @param null|string $password
     * @dataProvider userProvider422
     * @return void
     */
    public function testPostUserAction422(?string $email, ?string $password): void
    {
        $headers = $this->getTokenHeaders();
        $p_data = [
            'email' => $email,
            'password' => $password
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
     * Test GET    /users 401 UNAUTHORIZED
     * Test POST   /users 401 UNAUTHORIZED
     * Test GET    /users/{userId} 401 UNAUTHORIZED
     * Test PUT    /users/{userId} 401 UNAUTHORIZED
     * Test DELETE /users/{userId} 401 UNAUTHORIZED
     *
     * @param string $method
     * @param string $uri
     * @dataProvider routeProvider401()
     * @return void
     * @covers ::cgetAction()
     * @covers ::getAction()
     * @covers ::postAction()
     * @covers ::putAction()
     * @covers ::deleteAction()
     * @covers \App\EventListener\ExceptionListener::onKernelException()
     */
    public function testUserStatus401(string $method, string $uri): void
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
     * Test GET    /users/{userId} 404 NOT FOUND
     * Test PUT    /users/{userId} 404 NOT FOUND
     * Test DELETE /users/{userId} 404 NOT FOUND
     *
     * @param string $method
     * @param int $userId user id. returned by testDeleteUserAction204()
     * @dataProvider routeProvider404
     * @return void
     * @covers ::getAction()
     * @covers ::putAction()
     * @covers ::deleteAction()
     * @depends testDeleteUserAction204
     */
    public function testUserStatus404(string $method, int $userId): void
    {
        $headers = $this->getTokenHeaders(
            self::$role_admin['email'],
            self::$role_admin['passwd']
        );
        self::$client->request(
            $method,
            self::RUTA_API . '/' . $userId,
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
     * Test POST   /users 403 FORBIDDEN
     * Test PUT    /users/{userId} 403 FORBIDDEN
     * Test DELETE /users/{userId} 403 FORBIDDEN
     *
     * @param string $method
     * @param string $uri
     * @dataProvider routeProvider403()
     * @return void
     * @covers ::postAction()
     * @covers ::putAction()
     * @covers ::deleteAction()
     * @covers \App\EventListener\ExceptionListener::onKernelException()
     */
    public function testUserStatus403(string $method, string $uri): void
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
     * *********
     * PROVIDERS
     * *********
     */

    /**
     * User provider (incomplete) -> 422 status code
     *
     * @return array user data
     */
    public function userProvider422(): array
    {
        $faker = FakerFactoryAlias::create('es_ES');
        $email = $faker->email;
        $password = $faker->password;

        return [
            'nulo_01' => [ null,   $password ],
            'nulo_02' => [ $email, null      ],
            'nulo_03' => [ null,   null      ],
        ];
    }

    /**
     * Route provider (expected status: 401 UNAUTHORIZED)
     *
     * @return array [ method, url ]
     */
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

    /**
     * Route provider (expected status 404 NOT FOUND)
     *
     * @return array [ method ]
     */
    public function routeProvider404(): array
    {
        return [
            'getAction404'    => [ Request::METHOD_GET ],
            'putAction404'    => [ Request::METHOD_PUT ],
            'deleteAction404' => [ Request::METHOD_DELETE ],
        ];
    }

    /**
     * Route provider (expected status: 403 FORBIDDEN)
     *
     * @return array [ method, url ]
     */
    public function routeProvider403(): array
    {
        return [
            'postAction403'   => [ Request::METHOD_POST,   self::RUTA_API ],
            'putAction403'    => [ Request::METHOD_PUT,    self::RUTA_API . '/1' ],
            'deleteAction403' => [ Request::METHOD_DELETE, self::RUTA_API . '/1' ],
        ];
    }
}
