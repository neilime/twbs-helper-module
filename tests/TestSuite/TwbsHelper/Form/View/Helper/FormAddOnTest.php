<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormAddOnTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormAddOn
     */
    protected $formAddOnHelper;

    /**
     * @see \PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp(): void
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formAddOnHelper = $oViewHelperPluginManager
            ->get('formAddOn')
            ->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));
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
            '<div class="input-group">'. PHP_EOL .
            '    <div class="input-group-prepend">'. PHP_EOL .
            '        <div class="input-group-text">'. PHP_EOL .
            '            @'. PHP_EOL .
            '        </div>'. PHP_EOL .
            '    </div>'. PHP_EOL .
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
            '<div class="input-group">'. PHP_EOL .
            '    <div class="input-group-prepend">'. PHP_EOL .
            '        <button type="button" name="add-on" class="btn&#x20;btn-secondary" value="">' .
            'Add-On' .
            '</button>' . PHP_EOL .
            '    </div>' . PHP_EOL .
            '</div>',
            $this->formAddOnHelper->__invoke(new \Laminas\Form\Element\Text(
                'test',
                [
                    'add_on_prepend' => new \Laminas\Form\Element\Button(
                        'add-on',
                        ['label' => 'Add-On']
                    )
                ]
            ))
        );
    }

    public function testRenderAddOnWithWrongTypeAsOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Addon options expects an array or a scalar value, "stdClass" given');
        
        $this->formAddOnHelper->__invoke(new \Laminas\Form\Element\Text(
            'test',
            ['add_on_prepend' => new \stdClass()]
        ));
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

    public function testRenderAddOnWithWrongElementOptionThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            '"element" option expects an instanceof \Laminas\Form\ElementInterface, "stdClass" given'
        );
        
        $this->formAddOnHelper->__invoke(new \Laminas\Form\Element\Text(
            'test',
            ['add_on_prepend' => ['element' => new \stdClass()]]
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
