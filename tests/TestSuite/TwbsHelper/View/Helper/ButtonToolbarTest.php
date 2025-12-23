<?php

namespace TestSuite\TwbsHelper\View\Helper;

use InvalidArgumentException;
use Laminas\Form\Element\Button;
use Laminas\View\Renderer\PhpRenderer;
use TestSuite\Bootstrap;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormRow;
use TwbsHelper\View\Helper\ButtonGroup;
use TwbsHelper\View\Helper\ButtonToolbar;
use stdClass;

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

    public function testGetHtmlElementHelperLazyLoad()
    {
        $buttonToolbar = new ButtonToolbar();

        $this->assertInstanceOf(\TwbsHelper\View\Helper\HtmlElement::class, $buttonToolbar->getHtmlElementHelper());
    }

    public function testInvalidToolbarItemTypeThrowsException()
    {
        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new PhpRenderer();
        $buttonToolbar = new ButtonToolbar();
        $buttonToolbar->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Item expects an instanceof \Laminas\Form\ElementInterface or an array, "stdClass" given'
        );

        $buttonToolbar->render([new stdClass()]);
    }

    public function testArrayToolbarItemSpecRendersButtonGroup()
    {
        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new PhpRenderer();
        $buttonToolbar = new ButtonToolbar();
        $buttonToolbar->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));

        $result = $buttonToolbar->render([
            [
                'buttons' => [new Button('save', ['label' => 'Save'])],
                'options' => ['attributes' => ['class' => 'toolbar-group']],
            ],
        ]);

        $this->assertStringContainsString('btn-toolbar', $result);
        $this->assertStringContainsString('toolbar-group', $result);
        $this->assertStringContainsString('Save', $result);
    }
}
