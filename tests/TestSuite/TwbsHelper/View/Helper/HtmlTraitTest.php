<?php

namespace TestSuite\TwbsHelper\View\Helper;

class HtmlTraitTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \TwbsHelper\View\Helper\HtmlTrait
     */
    protected $trait;

    public function setUp(): void
    {
        $this->trait = $this->getObjectForTrait('\TwbsHelper\View\Helper\HtmlTrait');
    }

    public function testAddProperIndentationDoesNotIndentTextarea()
    {
        $sContent = '<textarea>test content' . PHP_EOL . 'test content</textarea>';
        $sResult = $this->trait->addProperIndentation($sContent, true);

        $this->assertSame(
            PHP_EOL . '    <textarea>test content' . PHP_EOL . 'test content</textarea>' . PHP_EOL,
            $sResult
        );
    }
}
