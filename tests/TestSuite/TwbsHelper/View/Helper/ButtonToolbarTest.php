<?php

namespace TestSuite\TwbsHelper\View\Helper;

use Laminas\View\Renderer\PhpRenderer;
use TestSuite\Bootstrap;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormRow;
use TwbsHelper\View\Helper\ButtonGroup;
use TwbsHelper\View\Helper\ButtonToolbar;

class ButtonToolbarTest extends AbstractViewHelperTestCase
{
    /**
     * @var ButtonToolbar
     */
    protected $helper = 'buttonToolbar';

    public function testGetButtonGroupHelperLazyLoad()
    {
        $buttonToolbar = new ButtonToolbar();
        $this->assertInstanceOf(ButtonGroup::class, $buttonToolbar->getButtonGroupHelper());
    }

    public function testGetFormRowHelperLazyLoad()
    {
        $buttonToolbar = new ButtonToolbar();
        $this->assertInstanceOf(
            FormRow::class,
            $buttonToolbar->getFormRowHelper()
        );
    }

    public function testInvalidButtonRendersEmptyString()
    {
        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new PhpRenderer();
        $buttonToolbar = new ButtonToolbar();
        $buttonToolbar->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));

        $output = $buttonToolbar->render([null]);
        $this->assertEquals('<div class="btn-toolbar"></div>', $output);
    }
}
