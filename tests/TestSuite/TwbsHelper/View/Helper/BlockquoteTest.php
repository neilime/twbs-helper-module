<?php

namespace TestSuite\TwbsHelper\View\Helper;

class BlockquoteTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\Blockquote
     */
    protected $helper = 'blockquote';

    public function testInvokeWithExistingClassAttributeForContent()
    {
        $this->assertSame(
            // Expected
            '<blockquote class="blockquote">' . PHP_EOL .
                '    <p class="mb-0&#x20;test-class">content</p>' . PHP_EOL .
                '    <footer class="blockquote-footer">footer</footer>' . PHP_EOL .
                '</blockquote>',
            // Rendering
            $this->helper->__invoke('content', 'footer', [], ['class' => 'test-class'])
        );
    }

    public function testInvokeWithExistingClassAttributeForFooter()
    {
        $this->assertSame(
            // Expected
            '<blockquote class="blockquote">' . PHP_EOL . '    <p class="mb-0">content</p>' . PHP_EOL .
                '    <footer class="blockquote-footer&#x20;test-class">footer</footer>' . PHP_EOL .
                '</blockquote>',
            // Rendering
            $this->helper->__invoke('content', 'footer', [], [], ['class' => 'test-class'])
        );
    }

    public function testInvokeWithEscapedFooter()
    {
        $this->assertSame(
            // Expected
            '<blockquote class="blockquote">' . PHP_EOL . '    <p class="mb-0">content</p>' . PHP_EOL .
                '    <footer class="blockquote-footer">footer &amp; test</footer>' . PHP_EOL .
                '</blockquote>',
            // Rendering
            $this->helper->__invoke('content', 'footer & test')
        );
    }
}
