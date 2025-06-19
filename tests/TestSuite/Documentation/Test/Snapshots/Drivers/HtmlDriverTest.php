<?php

namespace TestSuite\Documentation\Test\Snapshots\Drivers;

use Documentation\Test\Snapshots\Drivers\HtmlDriver;
use PHPUnit\Framework\TestCase;

class HtmlDriverTest extends TestCase
{
    /**
     * @var HtmlDriver
     */
    protected $htmlDriver;

    protected function setUp(): void
    {
        $this->htmlDriver = new HtmlDriver();
    }

    public function testSerialize()
    {
        $this->assertEquals(
            '<p>test</p>',
            $this->htmlDriver->serialize('test')
        );
    }
}
