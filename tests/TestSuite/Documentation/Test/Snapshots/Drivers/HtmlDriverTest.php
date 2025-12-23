<?php

namespace TestSuite\Documentation\Test\Snapshots\Drivers;

use Documentation\Test\Snapshots\Drivers\HtmlDriver;
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
            $this->htmlDriver->serialize('test')
        );
    }
}
