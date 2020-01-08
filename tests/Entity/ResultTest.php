<?php


namespace App\Tests\Entity;
use App\Entity\Result;
use Exception;
use Faker\Factory as FakerFactoryAlias;
use Faker\Generator as FakerGeneratorAlias;
use PHPUnit\Framework\TestCase;

/**
 * Class UsuarioTest
 *
 * @package App\Tests\Entity
 *
 * @coversDefaultClass \App\Entity\ResultTest
 */
class ResultTest extends TestCase
{
    /**
     * @var Result
     */
    protected static $result;

    /** @var FakerGeneratorAlias $faker */
    private static $faker;

    /**
     * Sets up the fixture.
     * This method is called before a test is executed.
     */
    public static function setUpBeforeClass()
    {
        self::$result = new Result(1, 1);
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
        self::$result = new Result();
        self::$result->setResult(99);
        self::$result->setComment("comentario");
        self::$result->setUserId(2);
        self::assertEquals(99, self::$result->getResult());
        self::assertEquals(2, self::$result->getUserId());
    }

    /**
     * Implement testGetId().
     *
     * @covers ::getId
     * @return void
     */
    public function testGetId(): void
    {
        self::assertEquals(null,self::$result->getId());
    }

    /**
     * Implements testGetSetUserId().
     *
     * @covers ::getUserId()
     * @covers ::setUserId()
     * @throws Exception
     * @return void
     */
    public function testGetSetUser(): void
    {
        $userId = 1;
        self::$result->setUserId($userId);
        static::assertEquals(
            $userId,
            self::$result->getUserId()
        );
    }

    /**
     * Implements testGetSetResult().
     *
     * @covers ::getResult()
     * @covers ::setResult()
     * @return void
     * @throws Exception
     */
    public function testGetSetResult(): void
    {
        self::$result->setResult(99);
        static::assertEquals(
            99,
            self::$result->getResult()
        );
    }

    /**
     * Implement testGetSetComment().
     *
     * @covers ::getComment()
     * @covers ::setComment()
     * @return void
     */
    public function testGetSetComment(): void
    {
        self::assertEmpty(
            self::$result->getComment()
        );
    }

}