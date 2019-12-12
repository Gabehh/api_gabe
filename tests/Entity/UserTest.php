<?php

/**
 * PHP version 7.3
 *
 * @category TestEntities
 * @package  App\Tests\Entity
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es/ E.T.S. de Ingeniería de Sistemas Informáticos
 */

namespace App\Tests\Entity;

use App\Entity\User;
use Exception;
use Faker\Factory as FakerFactoryAlias;
use Faker\Generator as FakerGeneratorAlias;
use PHPUnit\Framework\TestCase;

/**
 * Class UsuarioTest
 *
 * @package App\Tests\Entity
 *
 * @coversDefaultClass \App\Entity\User
 */
class UserTest extends TestCase
{

    /**
     * @var User
     */
    protected static $usuario;

    /** @var FakerGeneratorAlias $faker */
    private static $faker;

    /**
     * Sets up the fixture.
     * This method is called before a test is executed.
     */
    public static function setUpBeforeClass()
    {
        self::$usuario = new User('', '');
        self::$faker = FakerFactoryAlias::create('es_ES');
    }

    /**
     * Implement testConstructor().
     *
     * @covers ::__construct()
     * @return void
     */
    public function testConstructor(): void
    {
        $email = self::$faker->email;
        self::$usuario = new User();
        self::$usuario->setEmail($email);
        self::assertEquals(0, self::$usuario->getId());
        self::assertEquals($email, self::$usuario->getEmail());
    }

    /**
     * Implement testGetId().
     *
     * @covers ::getId
     * @return void
     */
    public function testGetId(): void
    {
        self::assertEmpty(self::$usuario->getId());
    }

    /**
     * Implements testGetSetEmail().
     *
     * @covers ::getEmail()
     * @covers ::setEmail()
     * @throws Exception
     * @return void
     */
    public function testGetSetEmail(): void
    {
        $userEmail = self::$faker->email;
        self::$usuario->setEmail($userEmail);
        static::assertEquals(
            $userEmail,
            self::$usuario->getEmail()
        );
    }

    /**
     * Implements testGetSetPassword().
     *
     * @covers ::getPassword()
     * @covers ::setPassword()
     * @return void
     * @throws Exception
     */
    public function testGetSetPassword(): void
    {
        $password = self::$faker->password;
        self::$usuario->setPassword($password);
        self::assertTrue(
            password_verify(
                $password,
                self::$usuario->getPassword()
            )
        );
    }

    /**
     * Implement testGetSetRoles().
     *
     * @covers ::getRoles()
     * @covers ::setRoles()
     * @return void
     */
    public function testGetSetRoles(): void
    {
        self::assertContains(
            'ROLE_USER',
            self::$usuario->getRoles()
        );
        $role = self::$faker->slug;
        self::$usuario->setRoles([ $role ]);
        self::assertContains(
            $role,
            self::$usuario->getRoles()
        );
    }

    /**
     * Implement testGetSalt().
     *
     * @covers ::getSalt()
     * @return void
     */
    public function testGetSalt(): void
    {
        self::assertNull(self::$usuario->getSalt());
    }
}
