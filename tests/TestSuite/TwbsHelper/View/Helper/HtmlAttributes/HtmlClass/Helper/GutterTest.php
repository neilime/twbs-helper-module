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
}
