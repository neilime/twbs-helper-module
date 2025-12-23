<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Checkbox;
use Laminas\Form\Element\File;
use Laminas\Form\Element\MultiCheckbox;
use Laminas\Form\Element\Radio;
use Laminas\Form\Element\Text;
use InvalidArgumentException;
use ReflectionMethod;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\Form;
use TwbsHelper\Form\View\Helper\FormRowElement;
use DomainException;
use stdClass;

class FormRowElementTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormRowElement
     */
    protected $helper = 'form_row_element';

    private function invokeProtected(string $method, mixed ...$arguments): mixed
    {
        $reflectionMethod = new ReflectionMethod($this->helper, $method);

        return $reflectionMethod->invoke($this->helper, ...$arguments);
    }

    public function testRenderRadioWithLabel()
    {
        $this->assertEquals(
            '<div class="form-label">' . PHP_EOL .
                '    Choose from the list below' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input class="form-check-input" id="radioDefault1" name="test" type="radio" value="option1"/>'
                . PHP_EOL .
                '    <label class="form-check-label" for="radioDefault1">Default radio</label>' . PHP_EOL .
                '</div>',
            $this->helper->render(new Radio(
                'test',
                [
                    'label' => 'Choose from the list below',
                    'form_group' => false,
                    'value_options' => [
                        [
                            'label' => 'Default radio',
                            'value' => 'option1',
                            'attributes' => ['id' => 'radioDefault1'],
                        ],
                    ],
                ]
            ))
        );
    }

    public function testPrepareElementForRenderingAddsValidClassWhenValidFeedbackExists(): void
    {
        $element = new Text('test', ['valid_feedback' => 'Looks good']);

        $this->helper->prepareElementForRendering($element);

        $this->assertStringContainsString('is-valid', (string) $element->getAttribute('class'));
    }

    public function testRenderLayoutContentContainerWrapsInlineNonCheckboxContentInColumn(): void
    {
        $element = new Text('test', [
            'layout' => Form::LAYOUT_INLINE,
            'column' => 'sm-4',
        ]);

        $this->assertSame(
            '<div class="col-sm-4">' . PHP_EOL . '    field' . PHP_EOL . '</div>',
            $this->invokeProtected('renderLayoutContentContainer', $element, 'field')
        );
    }

    public function testGetDefaultLabelPositionUsesMulticheckboxAndCustomFileRules(): void
    {
        $this->assertSame(
            FormRowElement::LABEL_PREPEND,
            $this->invokeProtected('getDefaultLabelPosition', new MultiCheckbox('choices'))
        );

        $this->assertSame(
            FormRowElement::LABEL_APPEND,
            $this->invokeProtected('getDefaultLabelPosition', new File('document', ['custom' => true]))
        );
    }

    public function testRenderHelpBlockInlineWithAttributes(): void
    {
        $element = new Text('test', [
            'layout' => Form::LAYOUT_INLINE,
            'column' => 'sm-4',
            'help_block' => [
                'content' => 'Helpful hint',
                'attributes' => ['data-test' => 'hint'],
            ],
        ]);

        $result = $this->invokeProtected('renderHelpBlock', $element, 'field');

        $this->assertStringContainsString('field', $result);
        $this->assertStringContainsString('col-sm-4', $result);
        $this->assertStringContainsString('data-test="hint"', $result);
        $this->assertStringContainsString('form-text', $result);
        $this->assertStringContainsString('Helpful hint', $result);
    }

    public function testRenderFeedbackUsesTooltipClasses(): void
    {
        $validElement = new Text('test', [
            'valid_feedback' => 'Looks good',
            'tooltip_feedback' => true,
        ]);
        $invalidElement = new Text('test', ['tooltip_feedback' => true]);
        $invalidElement->setMessages(['required' => 'Missing value']);

        $this->assertStringContainsString(
            'valid-tooltip',
            $this->invokeProtected('renderValidFeedback', $validElement, 'field')
        );
        $this->assertStringContainsString(
            'invalid-tooltip',
            $this->invokeProtected('renderErrors', $invalidElement, 'field')
        );
    }

    public function testRenderDedicatedContainerForCustomSwitchCheckboxWithHorizontalColumn(): void
    {
        $element = new Checkbox('agree', [
            'layout' => Form::LAYOUT_HORIZONTAL,
            'column' => 'sm-4',
            'custom' => true,
            'switch' => true,
            'form_check_class' => 'custom-marker',
        ]);

        $result = $this->invokeProtected('renderDedicatedContainerForCheckbox', $element, 'field');

        $this->assertStringContainsString('custom-marker', $result);
        $this->assertStringContainsString('custom-control', $result);
        $this->assertStringContainsString('custom-switch', $result);
        $this->assertStringContainsString('col-sm-4', $result);
        $this->assertStringContainsString('offset-sm-8', $result);
    }

    public function testRenderElementInjectsContentIntoLastMultiCheckboxContainer(): void
    {
        $element = new MultiCheckbox('choices', [
            'value_options' => [
                [
                    'label' => 'Choice A',
                    'value' => 'a',
                ],
            ],
        ]);

        $result = $this->invokeProtected(
            'renderElement',
            $element,
            '<div class="invalid-feedback">Injected feedback</div>'
        );

        $this->assertStringContainsString('Injected feedback', $result);
        $this->assertStringContainsString('Choice A', $result);
    }

    public function testGetElementRenderingOrderThrowsForUnsupportedLayout(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Layout "grid" is not supported');

        $this->invokeProtected('getElementRenderingOrder', new Text('test', ['layout' => 'grid']));
    }

    public function testGetDefaultLabelPositionPrefersExplicitLabelOptionPosition(): void
    {
        $element = new Text('test', [
            'label' => 'Positioned label',
            'label_options' => ['position' => FormRowElement::LABEL_APPEND],
        ]);

        $this->assertSame(
            FormRowElement::LABEL_APPEND,
            $this->invokeProtected('getDefaultLabelPosition', $element, FormRowElement::LABEL_PREPEND)
        );
    }

    public function testRenderMultiCheckboxCommonPartsInjectsFeedbackIntoMarkup(): void
    {
        $element = new MultiCheckbox('choices', [
            'value_options' => [
                ['label' => 'Choice A', 'value' => 'a'],
            ],
            'valid_feedback' => 'Looks good',
        ]);
        $element->setMessages(['required' => 'Missing value']);

        $result = $this->invokeProtected('renderMultiCheckboxCommonParts', $element);

        $this->assertStringContainsString('invalid-feedback', $result);
        $this->assertStringContainsString('valid-feedback', $result);
        $this->assertStringContainsString('Choice A', $result);
    }

    public function testRenderHelpBlockSupportsStringOption(): void
    {
        $element = new Text('test', ['help_block' => 'Plain help']);

        $result = $this->invokeProtected('renderHelpBlock', $element, 'field');

        $this->assertStringContainsString('Plain help', $result);
        $this->assertStringContainsString('form-text', $result);
    }

    public function testRenderHelpBlockRejectsMissingArrayContent(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Option "[help_block][content]" is undefined');

        $element = new Text('test', ['help_block' => ['attributes' => ['data-test' => 'hint']]]);

        $this->invokeProtected('renderHelpBlock', $element, 'field');
    }

    public function testRenderHelpBlockRejectsInvalidContentType(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Option "[help_block][content]" expects a string, "stdClass" given');

        $element = new Text('test', ['help_block' => ['content' => new stdClass()]]);

        $this->invokeProtected('renderHelpBlock', $element, 'field');
    }

    public function testRenderHelpBlockRejectsInvalidOptionType(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Option "help_block" expects a string or an array, "stdClass" given');

        $element = new Text('test', ['help_block' => new stdClass()]);

        $this->invokeProtected('renderHelpBlock', $element, 'field');
    }
}
