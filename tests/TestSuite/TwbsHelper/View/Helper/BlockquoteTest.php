<?php

namespace TestSuite\TwbsHelper\View\Helper;

class BlockquoteTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase {

    /**
     * @var \TwbsHelper\View\Helper\Blockquote
     */
    protected $helper = 'blockquote';

    public function testInvokeWithExistingClassAttributeForContent() {
        $this->assertSame(
                // Expected
                '<blockquote class="blockquote">' . PHP_EOL . '    <p class="test-class&#x20;mb-0">content</p>' . PHP_EOL . '    <footer class="blockquote-footer">footer</footer>' . PHP_EOL . '</blockquote>',
                // Rendering
                $this->helper->__invoke('content', 'footer', array(), array('class' => 'test-class'))
        );
    }

    public function testInvokeWithExistingClassAttributeForFooter() {
        $this->assertSame(
                // Expected
                '<blockquote class="blockquote">' . PHP_EOL . '    <p class="mb-0">content</p>' . PHP_EOL . '    <footer class="test-class&#x20;blockquote-footer">footer</footer>' . PHP_EOL . '</blockquote>',
                // Rendering
                $this->helper->__invoke('content', 'footer', array(), array(), array('class' => 'test-class'))
        );
    }

    public function testInvokeWithEscapedFooter() {
        $this->assertSame(
                // Expected
                '<blockquote class="blockquote">' . PHP_EOL . '    <p class="mb-0">content</p>' . PHP_EOL . '    <footer class="blockquote-footer">footer &amp; test</footer>' . PHP_EOL . '</blockquote>',
                // Rendering
                $this->helper->__invoke('content', 'footer & test')
        );
    }

    public function testInvokeWithWrongArgumentContent() {
        $this->expectExceptionMessage('Argument "$sContent" expects a string, "array" given');
        $this->helper->__invoke(array());
    }

    public function testInvokeWithWrongArgumentFooter() {        
        $this->expectExceptionMessage('Argument "$sFooter" expects a string, "array" given');
        $this->helper->__invoke('test', array('wrong'));
    }

    public function testInvokeWithWrongArgumentEscape() {
        $this->expectExceptionMessage('Argument "$bEscape" expects a boolean, "string" given');
        $this->helper->__invoke('test', 'test', array(), array(), array(), 'wrong');
    }

}
