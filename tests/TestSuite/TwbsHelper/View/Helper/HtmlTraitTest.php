<?php

namespace TestSuite\TwbsHelper\View\Helper;

class HtmlTraitTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \TwbsHelper\View\Helper\HtmlTrait
     */
    protected $trait;

    protected function setUp(): void
    {
        $this->trait = $this->getObjectForTrait(\TwbsHelper\View\Helper\HtmlTrait::class);
    }

    public function testAddProperIndentationDoesNotIndentTextarea()
    {
        $content = '<textarea>test content' . PHP_EOL . 'test content</textarea>';
        $result = $this->trait->addProperIndentation($content, true);

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

        $result = $this->trait->addProperIndentation($content, true);

        $expectedContent = PHP_EOL . implode(PHP_EOL, array_map(function ($line) {
            return '    ' . $line;
        }, explode(PHP_EOL, $content))) . PHP_EOL;

        $this->assertSame(
            $expectedContent,
            $result
        );
    }
}
