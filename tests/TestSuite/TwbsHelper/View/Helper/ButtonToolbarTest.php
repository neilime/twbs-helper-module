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
        $buttonToolbar = new \TwbsHelper\View\Helper\ButtonToolbar();
        $this->assertInstanceOf(\TwbsHelper\View\Helper\ButtonGroup::class, $buttonToolbar->getButtonGroupHelper());
    }

    public function testGetFormRowHelperLazyLoad()
    {
        $buttonToolbar = new \TwbsHelper\View\Helper\ButtonToolbar();
        $this->assertInstanceOf(
            \TwbsHelper\Form\View\Helper\FormRow::class,
            $buttonToolbar->getFormRowHelper()
        );
    }

    public function testInvalidButtonRendersEmptyString()
    {
        $viewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $buttonToolbar = new \TwbsHelper\View\Helper\ButtonToolbar();
        $buttonToolbar->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));

        $output = $buttonToolbar->render([null]);
        $this->assertEquals('<div class="btn-toolbar"></div>', $output);
    }
}
