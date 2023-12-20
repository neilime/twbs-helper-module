<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormAddOnTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormAddOn
     */
    protected $formAddOnHelper;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    protected function setUp(): void
    {
        $viewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formAddOnHelper = $viewHelperPluginManager
            ->get('formAddOn')
            ->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));
    }

    public function testInvokeWithoutArgumentsReturnSelf()
    {
        $this->assertSame(
            $this->formAddOnHelper,
            $this->formAddOnHelper->__invoke()
        );
    }

    public function testInvokeReturnAddOnMarkup()
    {
        $this->assertEquals(
            '<div class="input-group">' . PHP_EOL .
                '    <span class="input-group-text">@</span>' . PHP_EOL .
                '</div>',
            $this->formAddOnHelper->__invoke(new \Laminas\Form\Element\Text(
                'test',
                ['add_on_prepend' => '@']
            ))
        );
    }

    public function testRenderAddOnWithElementInstance()
    {
        $this->assertEquals(
            '<div class="input-group">' . PHP_EOL .
                '    <button class="btn&#x20;btn-secondary" name="add-on" type="button" value="">' .
                'Add-On' .
                '</button>' . PHP_EOL .
                '</div>',
            $this->formAddOnHelper->__invoke(new \Laminas\Form\Element\Text(
                'test',
                [
                    'add_on_prepend' => new \Laminas\Form\Element\Button(
                        'add-on',
                        ['label' => 'Add-On']
                    ),
                ]
            ))
        );
    }

    public function testRenderAddOnWithWrongTextOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"text" option expects a string, "stdClass" given');

        $this->formAddOnHelper->__invoke(new \Laminas\Form\Element\Text(
            'test',
            ['add_on_prepend' => ['text' => new \stdClass()]]
        ));
    }

    public function testRenderAddOnWithWrongLabelOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('"label" option expects a string, "stdClass" given');

        $this->formAddOnHelper->__invoke(new \Laminas\Form\Element\Text(
            'test',
            ['add_on_prepend' => ['label' => new \stdClass()]]
        ));
    }

    public function testRenderAddOnWithWrongContentOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Addon options expects a text or an element to render, none given'
        );

        $this->formAddOnHelper->__invoke(new \Laminas\Form\Element\Text(
            'test',
            ['add_on_prepend' => ['wrong' => new \stdClass()]]
        ));
    }
}
