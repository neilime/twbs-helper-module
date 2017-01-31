<?php

namespace TestSuite\TwbsHelper\View\Helper;

class AbbreviationTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Abbreviation
     */
    protected $helper = 'abbreviation';

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sContent" expects a string, "array" given
     */
    public function testInvokeWithWrongArgumentContent() {
        $this->helper->__invoke(array());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sTitle" expects a string, "array" given
     */
    public function testInvokeWithWrongArgumentTitle() {
        $this->helper->__invoke('test', array('wrong'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$bInitialism" expects a boolean, "string" given
     */
    public function testInvokeWithWrongArgumentInitialism() {
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
