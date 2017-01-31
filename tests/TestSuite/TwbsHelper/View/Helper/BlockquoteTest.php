<?php

namespace TestSuite\TwbsHelper\View\Helper;

class BlockquoteTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Blockquote
     */
    protected $helper = 'blockquote';

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sContent" expects a string, "array" given
     */
    public function testInvokeWithWrongArgumentContent() {
        $this->helper->__invoke(array());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sFooter" expects a string, "array" given
     */
    public function testInvokeWithWrongArgumentFooter() {
        $this->helper->__invoke('test', array('wrong'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$bEscape" expects a boolean, "string" given
     */
    public function testInvokeWithWrongArgumentEscape() {
        $this->helper->__invoke('test', 'test', array(), array(), array(), 'wrong');
    }

}
