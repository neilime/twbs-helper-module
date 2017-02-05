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

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$aItems" must not be empty
     */
    public function testInvokeWithEmptyArgumentItems() {
        $this->helper->__invoke(array());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$bOrdered" expects a boolean, "string" given
     */
    public function testInvokeWithWrongArgumentOrdered() {
        $this->helper->__invoke(array('test'), 'wrong');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Argument "$bEscape" expects a boolean, "string" given
     */
    public function testInvokeWithWrongArgumentEscape() {
        $this->helper->__invoke(array('test'), true, array(), 'wrong');
    }

}
