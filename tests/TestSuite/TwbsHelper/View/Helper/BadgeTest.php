<?php

namespace TestSuite\TwbsHelper\View\Helper;

class BadgeTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Badge
     */
    protected $helper = 'badge';

    public function testInvokeWithExistingClassAttribute() {
        $this->assertSame(
                '<span class="test-class&#x20;badge&#x20;badge-success">content</span>', $this->helper->__invoke('content', 'success', false, array('class' => 'test-class'))
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sContent" expects a string, "array" given
     */
    public function testInvokeWithWrongArgumentContent() {
        $this->helper->__invoke(array());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sType" expects a string, "array" given
     */
    public function testInvokeWithWrongArgumentType() {
        $this->helper->__invoke('test', array('wrong'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$bPill" expects a boolean, "string" given
     */
    public function testInvokeWithWrongArgumentPill() {
        $this->helper->__invoke('test', 'test', 'wrong');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$bEscape" expects a boolean, "string" given
     */
    public function testInvokeWithWrongArgumentEscape() {
        $this->helper->__invoke('test', 'test', true, array(), 'wrong');
    }

}
