<?php

namespace App\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Message
 *
 * @JMS\XmlRoot(name="message")
 * @JMS\XmlNamespace(uri="http://www.w3.org/2005/Atom", prefix="atom")
 */
class Message
{
    /**
     * Code
     *
     * @var int
     * @JMS\Expose
     */
    private $code;

    /**
     * Message
     *
     * @var string
     * @JMS\Expose
     */
    private $message;

    /**
     * Message constructor.
     *
     * @param int    $code    code
     * @param string|null $message message
     */
    public function __construct(int $code = 0, ?string $message = null)
    {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * Get code
     *
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * Set code
     *
     * @param int $code code
     *
     * @return void
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Set message
     *
     * @param string|null $message message
     *
     * @return void
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
}
