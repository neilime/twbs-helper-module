<?php

namespace TestSuite\TwbsHelper\View\Helper;

class BadgeTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Badge
     */
    protected $helper = 'badge';

    public function testInvokeWithExistingClassAttribute() {
        $this->assertSame(
                '<span class="badge&#x20;badge-success&#x20;test-class">content</span>', $this->helper->__invoke('content', 'success', 'simple', array('class' => 'test-class'))
        );
    }

    public function testInvokeWithWrongArgumentContent() {        
        $this->expectExceptionMessage('Argument "$sContent" expects a string, "array" given');
        $this->helper->__invoke(array());
    }

    public function testInvokeWithWrongArgumentType() {        
        $this->expectExceptionMessage('Argument "$sVariation" expects a string, "array" given');
        $this->helper->__invoke('test', array('wrong'));
    }

    public function testInvokeWithWrongArgumentPill() {        
        $this->expectExceptionMessage('Argument "$sType" expects a string, "boolean" given');
        $this->helper->__invoke('test', 'test', false);
    }

    public function testInvokeWithWrongArgumentEscape() {        
        $this->expectExceptionMessage('Argument "$bEscape" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', 'pill', array(), 'wrong');
    }

}
