<?php

namespace TestSuite\Documentation\Test\Snapshots\Drivers;

use Documentation\Test\Snapshots\Drivers\HtmlDriver;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;

class HtmlDriverTest extends TestCase
{
    private HtmlDriver $htmlDriver;

    protected function setUp(): void
    {
        parent::setUp();

        $this->htmlDriver = new HtmlDriver();
    }

    public function testSerialize(): void
    {
        $this->assertSame(
            '<p>test</p>',
            $this->htmlDriver->serialize('<p>test</p>')
        );
    }

    public function testMatchesEquivalentVoidElements(): void
    {
        $this->htmlDriver->match(
            '<picture><source srcset="test.svg"></source><img src="test.svg"></picture>',
            '<picture><source srcset="test.svg" /><img src="test.svg"></picture>'
        );
    }

    public function testRejectsDifferentContent(): void
    {
        $this->expectException(ExpectationFailedException::class);

        $this->htmlDriver->match('<p>expected</p>', '<p>actual</p>');
    }
}
