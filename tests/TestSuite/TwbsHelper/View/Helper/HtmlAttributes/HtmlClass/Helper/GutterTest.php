<?php

namespace TestSuite\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use PHPUnit\Framework\TestCase;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Gutter;
use InvalidArgumentException;
use stdClass;

class GutterTest extends TestCase
{
    /**
     * @var Gutter
     */
    protected $helper;

    protected function setUp(): void
    {
        $this->helper = new Gutter();
        $this->helper->setHtmlClassHelper(new HtmlClass());
    }

    public function testGetClassesFromOptionWith0Value()
    {
        $this->assertEquals(['g-0'], $this->helper->getClassesFromOption(0));
    }

    public function testGetClassesFromOptionWithInvalidTypeOption()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"gutter" option expects an integer, a string or an array, "stdClass" given'
        );

        $this->helper->getClassesFromOption(new stdClass());
    }

    public function testGetClassesFromOptionWithInvalidArrayOption()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"gutter" array option does accept given keys "invalid", it only accepts "horizontal, vertical"'
        );

        $this->helper->getClassesFromOption(['invalid' => 'option']);
    }

    public function testGetClassesFromOptionWithInvalidStringOption()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"gutter" option "invalid" is not supported. Expects a number between 0 and 5; ' .
                'or a sized (xs,sm,md,lg,xl,xxl) numbered value. Example: "sm-5"'
        );

        $this->helper->getClassesFromOption('invalid');
    }

    public function testGetClassesFromOptionWithInvalidIntOption()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"gutter" option "6" is not supported. Expects a number between 0 and 5; ' .
                'or a sized (xs,sm,md,lg,xl,xxl) numbered value. Example: "sm-5"'
        );

        $this->helper->getClassesFromOption(6);
    }
}
