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
        self::$result = new Result();
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
        $resultNumber = self::$faker->randomDigitNotNull;
        $comment = self::$faker->text;
        $userId = self::$faker->randomDigitNotNull;

        self::$result = new Result();
        self::$result->setResult($resultNumber);
        self::$result->setComment($comment);
        self::$result->setUserId($userId);
        self::assertEquals($resultNumber, self::$result->getResult());
        self::assertEquals($userId, self::$result->getUserId());
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
        $userId = self::$faker->randomDigitNotNull;;
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
        $resultNumber = self::$faker->randomDigitNotNull;
        self::$result->setResult($resultNumber);
        static::assertEquals(
            $resultNumber,
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
        $text = self::$faker->text;
        self::$result->setComment($text);
        self::assertEquals($text,self::$result->getComment());
    }

    /**
     * Implement testGetSetTime().
     *
     * @covers ::getTime()
     * @covers ::setTime()
     * @return void
     * @throws Exception
     */
    public function testGetSetTime(): void
    {
        $date = self::$faker->dateTime;
        self::$result->setTime($date);
        self::assertEquals($date,self::$result->getTime());
    }

}