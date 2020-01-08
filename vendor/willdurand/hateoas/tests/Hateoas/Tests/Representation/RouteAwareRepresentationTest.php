<?php

declare(strict_types=1);

namespace Hateoas\Tests\Representation;

use Hateoas\Representation\CollectionRepresentation;
use Hateoas\Representation\RouteAwareRepresentation;

class RouteAwareRepresentationTest extends RepresentationTestCase
{
    public function testSerialize()
    {
        $collection = new RouteAwareRepresentation(
            new CollectionRepresentation(
                [
                    'Adrien',
                    'William',
                ]
            ),
            '/authors',
            ['query' => 'willdurand/Hateoas']
        );

        $this->assertSame(
            <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<result>
  <link rel="self" href="/authors?query=willdurand%2FHateoas"/>
  <entry rel="items">
    <entry><![CDATA[Adrien]]></entry>
    <entry><![CDATA[William]]></entry>
  </entry>
</result>

XML
            ,
            $this->hateoas->serialize($collection, 'xml')
        );
        $this->assertSame(
            <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<result href="/authors?query=willdurand%2FHateoas">
  <resource rel="items"><![CDATA[Adrien]]></resource>
  <resource rel="items"><![CDATA[William]]></resource>
</result>

XML
            ,
            $this->halHateoas->serialize($collection, 'xml')
        );

        $this->assertSame(
            <<<JSON
{
    "_links": {
        "self": {
            "href": "\/authors?query=willdurand%2FHateoas"
        }
    },
    "_embedded": {
        "items": [
            "Adrien",
            "William"
        ]
    }
}
JSON
            ,
            $this->json($this->halHateoas->serialize($collection, 'json'))
        );
    }

    public function testGenerateAbsoluteURIs()
    {
        $collection = new RouteAwareRepresentation(
            new CollectionRepresentation(
                [
                    'Adrien',
                    'William',
                ],
                'authors',
                'users'
            ),
            '/authors',
            ['query' => 'willdurand/Hateoas'],
            true // absolute
        );

        $this->assertSame(
            <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<result>
  <link rel="self" href="http://example.com/authors?query=willdurand%2FHateoas"/>
  <entry rel="items">
    <entry><![CDATA[Adrien]]></entry>
    <entry><![CDATA[William]]></entry>
  </entry>
</result>

XML
            ,
            $this->hateoas->serialize($collection, 'xml')
        );
        $this->assertSame(
            <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<result href="http://example.com/authors?query=willdurand%2FHateoas">
  <resource rel="items"><![CDATA[Adrien]]></resource>
  <resource rel="items"><![CDATA[William]]></resource>
</result>

XML
            ,
            $this->halHateoas->serialize($collection, 'xml')
        );

        $this->assertSame(
            <<<JSON
{
    "_links": {
        "self": {
            "href": "http:\/\/example.com\/authors?query=willdurand%2FHateoas"
        }
    },
    "_embedded": {
        "items": [
            "Adrien",
            "William"
        ]
    }
}
JSON
            ,
            $this->json($this->halHateoas->serialize($collection, 'json'))
        );
    }
}
