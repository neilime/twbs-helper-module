<?php

namespace TestSuite\TwbsHelper\View\Helper;

class AbbreviationTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Abbreviation
     */
    protected $helper = 'abbreviation';

    public function testInvokeWithInitialismAndExistingClassAttribute() {
        $this->assertSame('<abbr class="test-class&#x20;initialism" title="title">content</abbr>', $this->helper->__invoke('content', 'title', true, array('class' => 'test-class')));
    }

    public function testInvokeWithWrongArgumentContent() {        
        $this->expectExceptionMessage('Argument "$sContent" expects a string, "array" given');
        $this->helper->__invoke(array());
    }

    public function testInvokeWithWrongArgumentTitle() {
        $this->expectExceptionMessage('Argument "$sTitle" expects a string, "array" given');
        $this->helper->__invoke('test', array('wrong'));
    }

    public function testInvokeWithWrongArgumentInitialism() {        
        $this->expectExceptionMessage('Argument "$bInitialism" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', 'wrong');
    }

    public function testInvokeWithWrongArgumentEscape() {
        $this->expectExceptionMessage('Argument "$bEscape" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', true, array(), 'wrong');
    }

}
