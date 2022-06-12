<?php

namespace TestSuite\Documentation\Test\Snapshots\Drivers;

class HtmlDriverTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Documentation\Test\Snapshots\Drivers\HtmlDriver
     */
    protected $htmlDriver;

    protected function setUp(): void
    {
        $this->htmlDriver = new \Documentation\Test\Snapshots\Drivers\HtmlDriver();
    }

    public function testSerialize()
    {
        $this->assertEquals(
            '<p>test</p>',
            $this->htmlDriver->serialize('test')
        );
    }
}
