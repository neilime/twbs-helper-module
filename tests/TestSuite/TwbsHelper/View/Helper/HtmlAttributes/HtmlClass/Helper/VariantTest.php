<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

class VariantTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant
     */
    protected $helper;

    protected function setUp(): void
    {
        $this->helper = new \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant();
        $this->helper->setHtmlClassHelper(new \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass());
    }

    public function testGetClassesFromOption()
    {
        $this->assertEquals(['btn-light'], $this->helper->getClassesFromOption('light', 'btn'));
    }

    public function testClassesIncludeVariantReturnsTrueWhenClassesHadAVariantClass()
    {
        $classes = new \TwbsHelper\View\HtmlClassAttributeSet(['btn-light']);
        $this->assertTrue($this->helper->classesIncludeVariant($classes, 'btn', 'outline'));
    }

    public function testClassesIncludeVariantReturnsTrueWhenClassesHadAPrefixedVariantClass()
    {
        $classes = ['btn-outline-light'];
        $this->assertTrue($this->helper->classesIncludeVariant($classes, 'btn', 'outline'));
    }

    public function testClassesIncludeVariantReturnsTrueWhenClassesDoNotHaveAPrefixedVariantClass()
    {
        $classes = ['btn', 'btn-sm'];
        $this->assertFalse($this->helper->classesIncludeVariant($classes, 'btn', 'outline'));
    }
}
