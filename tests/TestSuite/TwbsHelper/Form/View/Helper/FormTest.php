<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\Form
     */
    protected $formHelper;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    public function setUp(): void
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formHelper = $oViewHelperPluginManager
            ->get('form')
            ->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));
    }

    public function testInvokeWithoutArgumentsReturnSelf()
    {
        $this->assertSame(
            $this->formHelper,
            $this->formHelper->__invoke()
        );
    }

    public function testInitializeAnHorizontalFormClass()
    {

        $horizontalFormClass = new class () extends \Laminas\Form\Form
        {
            public function prepare()
            {
                $this->setName('form');
                $this->setOption('layout', \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL);

                $this->add([
                    'name' => 'email',
                    'options' => [
                        'label' => 'Email',
                        'column' => 'sm-10',
                    ],
                    'attributes' => [
                        'type' => 'email',
                        'id' => 'inputEmail3',
                        'placeholder' => 'Email',
                    ],
                ]);
                parent::prepare();
            }
        };

        $oNewHorizontalForm = new $horizontalFormClass();

        $this->assertEquals(
            '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="form-group&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-sm-2" for="inputEmail3">' .
                'Email' .
                '</label>' . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input name="email" type="email" id="inputEmail3" ' .
                'placeholder="Email" class="form-control" value="">' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>',
            $this->formHelper->__invoke($oNewHorizontalForm)
        );
    }

    public function testRenderFormWithButtonGroup()
    {

        $buttonGroupFormClass = new class () extends \Laminas\Form\Form
        {
            public function prepare()
            {
                $this->setName('form');
                $this->add([
                    'type' => \Laminas\Form\Element\Button::class,
                    'name' => 'button1',
                    'options' => ['label' => 'Button 1', 'row_name' => 'my-button-group', 'column' => 'md-10']
                ]);
                $this->add([
                    'type' => \Laminas\Form\Element\Button::class,
                    'name' => 'button2',
                    'options' => ['label' => 'Button 2', 'row_name' => 'my-button-group', 'column' => 'md-10']
                ]);
                parent::prepare();
            }
        };

        $oNewHorizontalForm = new $buttonGroupFormClass();

        $this->assertEquals(
            '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="btn-group">' . PHP_EOL .
                '        <button type="button" name="button1" class="btn&#x20;btn-secondary" value="">Button 1</button>' . PHP_EOL .
                '        <button type="button" name="button2" class="btn&#x20;btn-secondary" value="">Button 2</button>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>',
            $this->formHelper->__invoke($oNewHorizontalForm)
        );
    }
}
