<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

class GutterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Gutter
     */
    protected $helper;

    protected function setUp(): void
    {
        $this->helper = new \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Gutter();
        $this->helper->setHtmlClassHelper(new \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass());
    }

    public function testGetClassesFromOptionWith0Value()
    {
        $this->assertEquals(['g-0'], $this->helper->getClassesFromOption(0));
    }

    public function testGetClassesFromOptionWithInvalidTypeOption()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"gutter" option expects an integer, a string or an array, "stdClass" given'
        );

        $this->helper->getClassesFromOption(new \stdClass());
    }

    public function testGetClassesFromOptionWithInvalidArrayOption()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"gutter" array option does accept given keys "invalid", it only accepts "horizontal, vertical"'
        );

        $this->helper->getClassesFromOption(['invalid' => 'option']);
    }

    public function testGetClassesFromOptionWithInvalidStringOption()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"gutter" option "invalid" is not supported. Expects a number between 0 and 5; ' .
                'or a sized (xs,sm,md,lg,xl,xxl) numbered value. Example: "sm-5"'
        );

        $this->helper->getClassesFromOption('invalid');
    }

    public function testGetClassesFromOptionWithInvalidIntOption()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"gutter" option "6" is not supported. Expects a number between 0 and 5; ' .
                'or a sized (xs,sm,md,lg,xl,xxl) numbered value. Example: "sm-5"'
        );

        $this->helper->getClassesFromOption(6);
    }
}
