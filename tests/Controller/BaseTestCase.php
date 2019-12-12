<?php

namespace App\Tests\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;
use Exception;
use Faker\Factory as FakerFactoryAlias;
use Faker\Generator as FakerGeneratorAlias;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BaseTestCase
 *
 * @package App\Tests\Controller
 */
class BaseTestCase extends WebTestCase
{
    /**
     * @var array $headers
     */
    private static $headers;

    /**
     * @var KernelBrowser $client
     */
    protected static $client;

    /** @var FakerGeneratorAlias $faker */
    protected static $faker;

    /** @var array $admin Role User */
    protected static $role_user;

    /** @var array $admin Role Admin */
    protected static $role_admin;

    /**
     * This method is called before the first test of this test class is run.
     *
     * @return void
     */
    public static function setUpBeforeClass(): void
    {
        self::$headers = null;
        self::$client = static::createClient();
        self::$faker = FakerFactoryAlias::create('es_ES');

        // Role user
        self::$role_user['email'] = $_ENV['ROLE_USER_EMAIL'];
        self::$role_user['passwd'] = $_ENV['ROLE_USER_PASSWD'];

        // Role admin
        self::$role_admin['email'] = $_ENV['ADMIN_USER_EMAIL'];
        self::$role_admin['passwd'] = $_ENV['ADMIN_USER_PASSWD'];

        /** @var EntityManagerInterface $e_manager */
        $e_manager = null;

        try { // Regenera las tablas de todas las entidades mapeadas
            $e_manager = self::bootKernel()
                ->getContainer()
                ->get('doctrine')
                ->getManager();

            $metadata = $e_manager
                ->getMetadataFactory()
                ->getAllMetadata();
            $sch_tool = new SchemaTool($e_manager);
            $sch_tool->dropDatabase();
            $sch_tool->updateSchema($metadata, true);
        } catch (Exception $e) {
            fwrite(STDERR, 'EXCEPCIÓN: ' . $e->getCode() . ' - ' . $e->getMessage());
            exit(1);
        }

        // Insertar usuarios (roles admin y user)
        $role_admin = new User(
            self::$role_admin['email'],
            self::$role_admin['passwd'],
            [ 'ROLE_ADMIN' ]
        );
        $role_user = new User(
            self::$role_user['email'],
            self::$role_user['passwd']
        );
        $e_manager->persist($role_admin);
        $e_manager->persist($role_user);
        $e_manager->flush();
    }

    /**
     * Obtiene el JWT directamente de la ruta correspondiente
     * Si recibe como parámetro un nombre de usuario, obtiene un nuevo token
     * Sino, si anteriormente existe el token, lo reenvía
     *
     * @param   null|string  $useremail user email
     * @param   null|string  $password user password
     * @return  array   cabeceras con el token obtenido
     */
    protected function getTokenHeaders(
        ?string $useremail = null,
        ?string $password = null
    ): array {
        if (null === self::$headers || null !== $useremail) {
            $data = [
                'email' => $useremail ?? self::$role_admin['email'],
                'password' => $password ?? self::$role_admin['passwd']
            ];

            self::$client->request(
                Request::METHOD_POST,
                '/api/v1/login_check',
                [ ],
                [ ],
                [ 'CONTENT_TYPE' => 'application/json' ],
                json_encode($data)
            );
            $response = self::$client->getResponse();
            $json_resp = json_decode($response->getContent(), true);
            // (HTTP headers are referenced with a HTTP_ prefix as PHP does)
            self::$headers = [
                'HTTP_ACCEPT'        => 'application/json',
                'HTTP_Authorization' => sprintf('Bearer %s', $json_resp['token']),
            ];
        }

        return self::$headers;
    }
}
