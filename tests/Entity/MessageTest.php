<?php

namespace App\Tests\Entity;

use App\Entity\Message;
use Exception;
use Faker\Factory as FakerFactoryAlias;
use Faker\Generator as FakerGeneratorAlias;
use PHPUnit\Framework\TestCase;

/**
 * Class MessageTest
 *
 * @package App\Tests\Entity
 */
class MessageTest extends TestCase
{

    /**
     * @var Message
     */
    protected static $message;

    /** @var FakerGeneratorAlias $faker */
    private static $faker;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
    public static function setupBeforeClass(): void
    {
        self::$message = new Message();
        self::$faker = FakerFactoryAlias::create('es_ES');
    }

    /**
     * Implement testConstructor
     *
     * @covers \App\Entity\Message::__construct()
     * @return void
     */
    public function testConstructor(): void
    {
        $message = new Message();
        self::assertEquals(0, $message->getCode());
        self::assertEmpty($message->getMessage());
    }

    /**
     * Implement testGetSetCode().
     *
     * @covers \App\Entity\Message::getCode()
     * @covers \App\Entity\Message::setCode()
     * @throws Exception
     * @return void
     */
    public function testGetSetCode(): void
    {
        self::assertEmpty(self::$message->getCode());
        $code = self::$faker->numberBetween(0, 1000);
        self::$message->setCode($code);
        self::assertEquals($code, self::$message->getCode());
    }

    /**
     * Implement testGetSetMessage().
     *
     * @covers \App\Entity\Message::setMessage()
     * @covers \App\Entity\Message::getMessage()
     * @throws Exception
     * @return void
     */
    public function testGetSetMessage(): void
    {
        self::assertEmpty(self::$message->getMessage());
        $msg = self::$faker->slug;
        self::$message->setMessage($msg);
        self::assertEquals($msg, self::$message->getMessage());
    }
}
