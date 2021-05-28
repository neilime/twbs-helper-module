<?php

namespace TestSuite\TwbsHelper\View\Helper;

class ButtonGroupTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\ButtonGroup
     */
    protected $helper = 'buttonGroup';

    public function testRenderWithWrongButtonItem()
    {
        $this->expectExceptionMessage(
            'Button expects an instanceof \Laminas\Form\ElementInterface or an array / Traversable, "string" given'
        );
        $this->helper->render(['wrong']);
    }

    public function testGetFormElementHelperLazyLoad()
    {
        $oHelper = new \TwbsHelper\View\Helper\ButtonGroup();
        $this->assertInstanceOf('\TwbsHelper\Form\View\Helper\FormElement', $oHelper->getFormElementHelper());
    }

    public function testInvokeWithColumnOption()
    {
        $this->assertSame(
            '<div class="col-sm-2">' . PHP_EOL .
                '    <div class="btn-group">' . PHP_EOL .
                '        <input name="element" class="form-control" type="text" value=""/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            $this->helper->__invoke([
                ['label' => 'test']
            ], ['column' => 'sm-2'])
        );
    }
}
