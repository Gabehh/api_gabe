<?php

declare(strict_types=1);

namespace Hateoas\Tests;

use Hateoas\HateoasBuilder;
use Hateoas\Tests\Fixtures\Will;
use Hateoas\UrlGenerator\CallableUrlGenerator;

class HateoasTest extends TestCase
{
    private $hateoas;

    protected function setUp()
    {
        $this->hateoas = HateoasBuilder::create()
            ->setUrlGenerator(null, new CallableUrlGenerator(function ($name, $parameters, $absolute) {
                if ('user_get' === $name) {
                    return sprintf(
                        '%s%s',
                        $absolute ? 'http://example.com' : '',
                        strtr('/users/id', $parameters)
                    );
                }

                if ('post_get' === $name) {
                    return sprintf(
                        '%s%s',
                        $absolute ? 'http://example.com' : '',
                        strtr('/posts/id', $parameters)
                    );
                }

                throw new \RuntimeException('Cannot generate URL');
            }))
            ->build();
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Can not find the relation "unknown-rel" for the "Hateoas\Tests\Fixtures\Will" class
     */
    public function testGetLinkHrefUrlWithUnknownRelThrowsException()
    {
        $this->assertNull($this->hateoas->getLinkHelper()->getLinkHref(new Will(123), 'unknown-rel'));
        $this->assertNull($this->hateoas->getLinkHelper()->getLinkHref(new Will(123), 'unknown-rel', true));
    }

    public function testGetLinkHrefUrl()
    {
        $this->assertEquals('/users/123', $this->hateoas->getLinkHelper()->getLinkHref(new Will(123), 'self'));
        $this->assertEquals('/users/123', $this->hateoas->getLinkHelper()->getLinkHref(new Will(123), 'self', false));
    }

    public function testGetLinkHrefUrlWithAbsoluteTrue()
    {
        $this->assertEquals('http://example.com/users/123', $this->hateoas->getLinkHelper()->getLinkHref(new Will(123), 'self', true));
    }
}
