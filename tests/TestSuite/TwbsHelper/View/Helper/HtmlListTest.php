<?php

namespace TestSuite\TwbsHelper\View\Helper;

class HtmlListTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\HtmlList
     */
    protected $helper = 'htmlList';

    public function testInvokeWithoutPredefinedAttributes() {
        $this->assertSame('<ul>' . PHP_EOL . '    <li>test</li>' . PHP_EOL . '</ul>' . PHP_EOL, $this->helper->__invoke(array('test')));
    }

    public function testInvokeWithDirectNestedList() {
        $sExpectedMarkup = '<ul>' . PHP_EOL .
                '    <li>' . PHP_EOL .
                '        <ul>' . PHP_EOL .
                '            <li>test</li>' . PHP_EOL .
                '        </ul>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '</ul>' . PHP_EOL;

        $this->assertSame($sExpectedMarkup, $this->helper->__invoke(array(array('test'))));
    }

    public function testInvokeWithEmptyArgumentItems() {        
        $this->expectExceptionMessage('Argument "$aItems" must not be empty');
        $this->helper->__invoke(array());
    }

    public function testInvokeWithWrongArgumentOrdered() {        
        $this->expectExceptionMessage('Argument "$bOrdered" expects a boolean, "string" given');
        $this->helper->__invoke(array('test'), 'wrong');
    }

    public function testInvokeWithWrongArgumentEscape() {
        $this->expectExceptionMessage('Argument "$bEscape" expects a boolean, "string" given');
        $this->helper->__invoke(array('test'), true, array(), 'wrong');
    }

}
