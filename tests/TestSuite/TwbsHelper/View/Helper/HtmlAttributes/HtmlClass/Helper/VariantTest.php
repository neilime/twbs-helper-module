<?php

namespace TestSuite\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

use PHPUnit\Framework\TestCase;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant;
use TwbsHelper\View\HtmlClassAttributeSet;

class VariantTest extends TestCase
{
    /**
     * @var Variant
     */
    protected $helper;

    protected function setUp(): void
    {
        $this->helper = new Variant();
        $this->helper->setHtmlClassHelper(new HtmlClass());
    }

    public function testGetClassesFromOption()
    {
        $this->assertEquals(['btn-light'], $this->helper->getClassesFromOption('light', 'btn'));
    }

    public function testClassesIncludeVariantReturnsTrueWhenClassesHadAVariantClass()
    {
        $classes = new HtmlClassAttributeSet(['btn-light']);
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
