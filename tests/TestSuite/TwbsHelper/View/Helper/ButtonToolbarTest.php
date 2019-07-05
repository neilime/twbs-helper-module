<?php

namespace TestSuite\TwbsHelper\View\Helper;

class ButtonToolbarTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\ButtonToolbar
     */
    protected $helper = 'buttonToolbar';

    public function testRenderWithWrongToolbarItem()
    {
        $this->expectExceptionMessage(
            'TwbsHelper\View\Helper\ButtonToolbar::renderToolbarItem" does not support item of type "string"'
        );
        $this->helper->render(['wrong']);
    }

    public function testGetButtonGroupHelperLazyLoad()
    {

        $oHelper = new \TwbsHelper\View\Helper\ButtonToolbar();
        $this->assertInstanceOf('\TwbsHelper\View\Helper\ButtonGroup', $oHelper->getButtonGroupHelper());
    }

    public function testGetFormElementHelperLazyLoad()
    {
        $oHelper = new \TwbsHelper\View\Helper\ButtonToolbar();
        $this->assertInstanceOf('\TwbsHelper\Form\View\Helper\FormElement', $oHelper->getFormElementHelper());
    }
}
