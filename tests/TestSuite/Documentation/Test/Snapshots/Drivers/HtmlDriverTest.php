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
            '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" ' .
                '"http://www.w3.org/TR/REC-html40/loose.dtd">' . PHP_EOL .
                '<?xml encoding="utf-8" ?><html><body><p>test</p></body></html>' . PHP_EOL,
            $this->htmlDriver->serialize('test')
        );
    }
}
