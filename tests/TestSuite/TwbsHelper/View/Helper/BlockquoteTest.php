<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\Blockquote;

class BlockquoteTest extends AbstractViewHelperTestCase
{
    /**
     * @var Blockquote
     */
    protected $helper = 'blockquote';

    public function testInvokeWithExistingClassAttributeForContent()
    {
        $this->assertSame(
            // Expected
            '<figure>' . PHP_EOL .
                '    <blockquote class="blockquote">' . PHP_EOL .
                '        <p class="test-class">content</p>' . PHP_EOL .
                '    </blockquote>' . PHP_EOL .
                '    <figcaption class="blockquote-footer">footer</figcaption>' . PHP_EOL .
                '</figure>',
            // Rendering
            $this->helper->__invoke('content', 'footer', [], ['class' => 'test-class'])
        );
    }

    public function testInvokeWithExistingClassAttributeForFooter()
    {
        $this->assertSame(
            // Expected
            '<figure>' . PHP_EOL .
                '    <blockquote class="blockquote">' . PHP_EOL .
                '        <p>content</p>' . PHP_EOL .
                '    </blockquote>' . PHP_EOL .
                '    <figcaption class="blockquote-footer&#x20;test-class">footer</figcaption>' . PHP_EOL .
                '</figure>',
            // Rendering
            $this->helper->__invoke('content', 'footer', [], [], ['class' => 'test-class'])
        );
    }

    public function testInvokeWithEscapedFooter()
    {
        $this->assertSame(
            // Expected
            '<figure>' . PHP_EOL .
                '    <blockquote class="blockquote">' . PHP_EOL .
                '        <p>content</p>' . PHP_EOL .
                '    </blockquote>' . PHP_EOL .
                '    <figcaption class="blockquote-footer">footer &amp; test</figcaption>' . PHP_EOL .
                '</figure>',
            // Rendering
            $this->helper->__invoke('content', 'footer & test')
        );
    }
}
