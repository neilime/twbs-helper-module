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
    protected function setUp(): void
    {
        $viewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formHelper = $viewHelperPluginManager
            ->get('form')
            ->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));
    }

    public function testInvokeWithoutArgumentsReturnSelf()
    {
        $this->assertSame(
            $this->formHelper,
            $this->formHelper->__invoke()
        );
    }

    public function testRenderEmptyForm()
    {
        $form = new \Laminas\Form\Form();

        $this->assertEquals(
            '<form method="POST" role="form"></form>',
            $this->formHelper->__invoke($form)
        );
    }

    public function testInitializeAnHorizontalFormClass()
    {
        $horizontalFormClass = new class () extends \Laminas\Form\Form {
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

        $newHorizontalForm = new $horizontalFormClass();

        $this->assertEquals(
            '<form id="form" method="POST" name="form" role="form">' . PHP_EOL .
                '    <div class="mb-3&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-sm-2" for="inputEmail3">' .
                'Email' .
                '</label>' . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input class="form-control" id="inputEmail3" name="email" placeholder="Email" ' .
                'type="email" value=""/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>',
            $this->formHelper->__invoke($newHorizontalForm)
        );
    }


    public function testRenderSpecWithWrongFormElementThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Invalid spec specified, Laminas\Form\Element does not inherit from Laminas\Form\FormInterface.'
        );

        $this->formHelper->renderSpec(['type' => 'Element']);
    }
}
