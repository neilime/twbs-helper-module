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

    public function testInvokeWithWrongArgumentContent() {        
        $this->expectExceptionMessage('Argument "$sContent" expects a string, "array" given');
        $this->helper->__invoke(array());
    }

    public function testInvokeWithWrongArgumentType() {        
        $this->expectExceptionMessage('Argument "$sType" expects a string, "array" given');
        $this->helper->__invoke('test', array('wrong'));
    }

    public function testInvokeWithWrongArgumentPill() {        
        $this->expectExceptionMessage('Argument "$bPill" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', 'wrong');
    }

    public function testInvokeWithWrongArgumentEscape() {        
        $this->expectExceptionMessage('Argument "$bEscape" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', true, array(), 'wrong');
    }

}
