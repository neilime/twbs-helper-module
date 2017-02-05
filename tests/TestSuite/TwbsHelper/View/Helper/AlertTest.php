<?php

namespace TestSuite\TwbsHelper\View\Helper;

class AlertTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Alert
     */
    protected $helper = 'alert';

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
     * @expectedExceptionMessage Argument "$bDismissible" expects a boolean, "string" given
     */
    public function testInvokeWithWrongArgumentDismissible() {
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
