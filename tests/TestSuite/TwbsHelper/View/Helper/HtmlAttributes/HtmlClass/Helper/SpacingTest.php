<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper;

class SpacingTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Spacing
     */
    protected $helper;

    protected function setUp(): void
    {
        $this->helper = new \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Spacing();
        $this->helper->setHtmlClassHelper(new \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass());
    }

    public function testGetClassesFromOptionShouldReturnValidatedClass()
    {

        $validClasses = [
            'm-0',
            'm-3',
            'm-5',
            'm-auto',
            'p-0',
            'px-auto',
        ];

        foreach ($validClasses as $validClass) {
            $this->assertEquals([$validClass], $this->helper->getClassesFromOption($validClass));
        }
    }

    public function testGetClassesFromOptionShouldThrowExceptionForInvalidClass()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"spacing" option "invalid" is invalid. Expects a string like');
        $this->helper->getClassesFromOption('invalid');
    }

    public function testGetClassesFromOptionShouldThrowExceptionForInvalidType()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"spacing" option expects a string, "array" given');
        $this->helper->getClassesFromOption([]);
    }
}
