<?php

namespace TestSuite\TwbsHelper\View\Helper;

class FigureTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Figure
     */
    protected $helper = 'figure';

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sImageSrc" expects a string, "array" given
     */
    public function testInvokeWithWrongArgumentIMageSrc() {
        $this->helper->__invoke(array());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$sCaption" expects a string, "array" given
     */
    public function testInvokeWithWrongArgumentCaption() {
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
