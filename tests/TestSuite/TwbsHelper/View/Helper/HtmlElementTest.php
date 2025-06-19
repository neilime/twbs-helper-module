<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\HtmlElement;

class HtmlElementTest extends AbstractViewHelperTestCase
{
    /**
     * @var HtmlElement
     */
    protected $helper = 'htmlElement';

    public function testInvoke()
    {
        $this->assertSame(
            '<div class="one&#x20;two" style="color&#x3A;&#x20;red&#x3B;&#x20;width&#x3A;&#x20;50&#x25;&#x3B;">'
                . PHP_EOL .
                '    test content' . PHP_EOL .
                '</div>',
            $this->helper->__invoke(
                'div',
                [
                    'class' => 'two one',
                    'style' => 'width: 50%; color: red',
                ],
                'test content'
            )
        );
    }

    public function testAddProperIndentationDoesNotIndentTextarea()
    {
        $content = '<textarea>test content' . PHP_EOL . 'test content</textarea>';
        $result = $this->helper->addProperIndentation($content, true);

        $this->assertSame(
            PHP_EOL . '    <textarea>test content' . PHP_EOL . 'test content</textarea>' . PHP_EOL,
            $result
        );
    }

    public function testAddProperIndentationForNestedFieldset()
    {
        $content = '<form method="post" name="formEditor" class=" layout-form-padding" role="form" id="formEditor">
    <fieldset disabled="disabled" class="form-group">
        <div class="row">
            <legend class="col-form-label">...</legend>
            <fieldset class="w-100">
                <div class="row">
                    <legend class="col-form-label">...</legend>
                    <fieldset class="w-100">
                        <div class="row">
                            <legend class="col-form-label">...</legend>
                            <div class="col-sm-12">
                                <label for="...">...</label>
                                <input type="text" name="..." list="..." class="form-control" ' .
            'value="frei" autocomplete="off">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="w-100">
                        <div class="row">
                            <legend class="col-form-label">...</legend>
                            <div class="col-sm-12">
                                <label for="...">....</label>
                                <input type="text" name="..." list="..." class="form-control" ' .
            'value="frei" autocomplete="off">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </fieldset>
        </div>
    </fieldset>
</form>';

        $result = $this->helper->addProperIndentation($content, true);

        $expectedContent = PHP_EOL . implode(PHP_EOL, array_map(function ($line) {
            return '    ' . $line;
        }, explode(PHP_EOL, $content))) . PHP_EOL;

        $this->assertSame(
            $expectedContent,
            $result
        );
    }
}
