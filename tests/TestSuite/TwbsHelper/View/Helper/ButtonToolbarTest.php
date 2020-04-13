<?php

namespace TestSuite\TwbsHelper\View\Helper;

class ButtonToolbarTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\ButtonToolbar
     */
    protected $helper = 'buttonToolbar';

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
