<?php

namespace TestSuite\TwbsHelper\View\Helper;

class FigureTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Figure
     */
    protected $helper = 'figure';

    public function testInvokeWithExistingClassAttribute() {
        $this->assertSame(
                '<figure class="figure&#x20;test-class">' . PHP_EOL . '    <img class="figure-img" src="..."/>' . PHP_EOL . '</figure>', $this->helper->__invoke('...', '', array('class' => 'test-class'))
        );
    }

    public function testInvokeWithExistingImageClassAttribute() {
        $this->assertSame(
                '<figure class="figure">' . PHP_EOL . '    <img class="figure-img&#x20;test-class" src="..."/>' . PHP_EOL . '</figure>', $this->helper->__invoke('...', '', array(), array('class' => 'test-class'))
        );
    }

    public function testInvokeWithWrongArgumentImageSrc() {        
        $this->expectExceptionMessage('Argument "$sImageSrc" expects a string, "array" given');
        $this->helper->__invoke(array());
    }

    public function testInvokeWithWrongArgumentCaption() {
        $this->expectExceptionMessage('Argument "$sCaption" expects a string, "array" given');
        $this->helper->__invoke('test', array('wrong'));
    }

    public function testInvokeWithWrongArgumentEscape() {
        $this->expectExceptionMessage('Argument "$bEscape" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', array(), array(), array(), 'wrong');
    }

}
