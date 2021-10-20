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

    public function testInvalidButtonRendersEmptyString()
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $oHelper = new \TwbsHelper\View\Helper\ButtonToolbar();
        $oHelper->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));

        $output = $oHelper->render([null]);
        $this->assertEquals('<div class="btn-toolbar"></div>', $output);
    }
}
