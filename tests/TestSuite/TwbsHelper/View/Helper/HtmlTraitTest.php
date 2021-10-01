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

    public function testAddProperIndentationForNestedFieldset()
    {
        $sContent = '<form method="post" name="formEditor" class=" layout-form-padding" role="form" id="formEditor">
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

        $sResult = $this->trait->addProperIndentation($sContent, true);

        $sExpectedContent = PHP_EOL . implode(PHP_EOL, array_map(function ($sLine) {
            return '    ' . $sLine;
        }, explode(PHP_EOL, $sContent))) . PHP_EOL;

        $this->assertSame(
            $sExpectedContent,
            $sResult
        );
    }
}
