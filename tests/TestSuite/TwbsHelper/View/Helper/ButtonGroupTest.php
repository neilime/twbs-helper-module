<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormButton;
use TwbsHelper\View\Helper\ButtonGroup;

class ButtonGroupTest extends AbstractViewHelperTestCase
{
    /**
     * @var ButtonGroup
     */
    protected $helper = 'buttonGroup';

    public function testRenderWithWrongButtonItem()
    {
        $this->expectExceptionMessage(
            'Button expects an instanceof \Laminas\Form\ElementInterface or an array / Traversable, "string" given'
        );
        $this->helper->render(['wrong']);
    }

    public function testGetFormButtonHelperLazyLoad()
    {
        $buttonGroup = new ButtonGroup();
        $this->assertInstanceOf(FormButton::class, $buttonGroup->getFormButtonHelper());
    }

    public function testInvokeWithColumnOption()
    {
        $this->assertSame(
            '<div class="col-sm-2">' . PHP_EOL .
                '    <div class="btn-group">' . PHP_EOL .
                '        <button class="btn&#x20;btn-secondary" name="element" type="submit" value="">test</button>' .
                PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            $this->helper->__invoke([
                ['options' => ['label' => 'test']],
            ], ['column' => 'sm-2'])
        );
    }
}
