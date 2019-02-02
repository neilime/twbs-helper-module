<?php

namespace TestSuite\TwbsHelper\View\Helper;

class AlertTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Alert
     */
    protected $helper = 'alert';

    public function testInvokeWithExistingClassAttribute() {
        $this->assertSame(
                '<div class="test-class&#x20;alert&#x20;alert-success" role="alert">' . PHP_EOL . '    content' . PHP_EOL . '</div>', $this->helper->__invoke('content', 'success', false, array('class' => 'test-class'))
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

    public function testInvokeWithWrongArgumentDismissible() {
        $this->expectExceptionMessage('Argument "$bDismissible" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', 'wrong');
    }

    public function testInvokeWithWrongArgumentEscape() {
        $this->expectExceptionMessage('Argument "$bEscape" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', true, array(), 'wrong');
    }

}
