<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Button;
use Laminas\Form\Element\Text;
use Laminas\Form\Factory;
use Laminas\View\Renderer\PhpRenderer;
use LogicException;
use ReflectionMethod;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\Form;
use TwbsHelper\Form\View\Helper\FormCollection;
use TwbsHelper\Form\View\Helper\FormRow;
use TwbsHelper\Form\View\Helper\FormRows;
use TwbsHelper\View\Helper\ButtonGroup;
use TwbsHelper\View\Helper\HtmlAttributes;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;
use TwbsHelper\View\Helper\HtmlElement;
use ReflectionProperty;
use stdClass;

class FormRowsTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormRows
     */
    protected $helper = 'formRows';

    private function invokeProtected(object $helper, string $method, mixed ...$arguments): mixed
    {
        $reflectionMethod = new ReflectionMethod($helper, $method);

        return $reflectionMethod->invoke($helper, ...$arguments);
    }

    public function testInvokeWithoutParamShouldReturnHelper()
    {
        $this->assertSame(
            $this->helper,
            $this->helper->__invoke()
        );
    }

    public function testRenderButtonGroup()
    {
        $factory = new Factory();

        $form = $factory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'button-1',
                        'type' => 'button',
                        'options' => [
                            'label' => 'Button 1',
                            'row_name' => 'button-group-1',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'button-2',
                        'type' => 'button',
                        'options' => [
                            'label' => 'Button 2',
                            'row_name' => 'button-group-1',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'row_name' => 'button-group-2',
                        ],
                    ],
                ],
            ],
        ]);

        $this->assertEquals(
            '<div class="btn-group&#x20;form-group">' . PHP_EOL .
                '    <button class="btn&#x20;btn-secondary" name="button-1" type="button" value="">Button 1</button>'
                . PHP_EOL .
                '    <button class="btn&#x20;btn-secondary" name="button-2" type="button" value="">Button 2</button>'
                . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group&#x20;form-group">' . PHP_EOL .
                '    <button class="btn&#x20;btn-secondary" name="submit" type="submit" value="">Submit</button>'
                . PHP_EOL .
                '</div>',
            $this->helper->__invoke($form)
        );
    }

    public function testGetElementRowRenderingAddsGutterForColumnElements(): void
    {
        $element = new Text('test', ['column' => 'sm-4']);

        $rowRendering = $this->invokeProtected($this->helper, 'getElementRowRendering', $element, [
            'row_class' => 'row',
            'gutter' => '2',
        ]);

        $this->assertSame('div', $rowRendering['helper_params'][0]);
        $this->assertStringContainsString('row', (string) $rowRendering['helper_params'][1]['class']);
        $this->assertStringContainsString('g-2', (string) $rowRendering['helper_params'][1]['class']);
    }

    public function testRenderElementSkipsEmptyMarkup(): void
    {
        $formRowHelper = $this->createMock(FormRow::class);
        $formRowHelper->method('__invoke')->willReturn('');

        $reflectionProperty = new ReflectionProperty($this->helper, 'formRowHelper');
        $reflectionProperty->setValue($this->helper, $formRowHelper);

        $rowsRendering = ['0_' => ['content' => 'existing']];

        $this->assertSame(
            $rowsRendering,
            $this->invokeProtected(
                $this->helper,
                'renderElement',
                new Text('test'),
                $rowsRendering,
                ['row_class' => 'row', 'gutter' => null]
            )
        );
    }

    public function testRenderButtonGroupUsesRowClassForColumnButtonsOutsideHorizontalLayout(): void
    {
        $result = $this->invokeProtected(
            $this->helper,
            'renderButtonGroup',
            new Button('action', [
                'label' => 'Action',
                'column' => 'sm-4',
                'row_name' => 'actions',
            ]),
            [],
            ['row_class' => 'row', 'gutter' => null]
        );

        $this->assertSame('row', $result['0_actions']['helper_params'][1]['attributes']['class']);
    }

    public function testGenerateRowRenderingKeyIncrementsForUnnamedRows(): void
    {
        $key = $this->invokeProtected(
            $this->helper,
            'generateRowRenderingKey',
            new Text('test'),
            ['0_named' => ['content' => 'first']]
        );

        $this->assertSame('1_', $key);
    }

    public function testHelperFallbacksInstantiateDefaultHelpersWithoutView(): void
    {
        $helper = new FormRows();

        $this->assertInstanceOf(HtmlElement::class, $this->invokeProtected($helper, 'getHtmlElementHelper'));
        $this->assertInstanceOf(HtmlAttributes::class, $this->invokeProtected($helper, 'getHtmlattributesHelper'));
        $this->assertInstanceOf(HtmlClass::class, $this->invokeProtected($helper, 'getHtmlClassHelper'));
        $this->assertInstanceOf(ButtonGroup::class, $this->invokeProtected($helper, 'getButtonGroupHelper'));
    }

    public function testGetFormCollectionHelperThrowsWhenConfiguredHelperIsInvalid(): void
    {
        $helper = new FormRows();
        $helper->setView(new class () extends PhpRenderer {
            public function plugin($name, ?array $options = null): object
            {
                return new stdClass();
            }
        });

        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('FormCollection helper expects an instanceof \\TwbsHelper\\Form\\View\\Helper\\FormCollection, "stdClass" defined');

        $this->invokeProtected($helper, 'getFormCollectionHelper');
    }

    public function testGetFormRowHelperThrowsWhenConfiguredHelperIsInvalid(): void
    {
        $helper = new FormRows();
        $helper->setView(new class () extends PhpRenderer {
            public function plugin($name, ?array $options = null): object
            {
                return new stdClass();
            }
        });

        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('FormCollection helper expects an instanceof \\TwbsHelper\\Form\\View\\Helper\\FormRow, "stdClass" defined');

        $this->invokeProtected($helper, 'getFormRowHelper');
    }
}
