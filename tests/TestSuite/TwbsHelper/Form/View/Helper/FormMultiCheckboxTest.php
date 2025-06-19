<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\MultiCheckbox;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormRadio;

class FormMultiCheckboxTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormRadio
     */
    protected $helper = 'formMultiCheckbox';

    public function testRenderSimpleValues()
    {
        $this->assertEquals(
            '<div class="form-check">' . PHP_EOL .
                '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="0"/>' . PHP_EOL .
                '    <label>First checkbox</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="1"/>' . PHP_EOL .
                '    <label>Second checkbox</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="2"/>' . PHP_EOL .
                '    <label>Third checkbox</label>' . PHP_EOL .
                '</div>',
            $this->helper->render(new MultiCheckbox(
                'test',
                [
                    'label' => 'MultiCheckbox simple values text',
                    'value_options' => [
                        0 => 'First checkbox',
                        1 => 'Second checkbox',
                        2 => 'Third checkbox',
                    ],
                ]
            ))
        );
    }

    public function testRenderHiddenElement()
    {
        $multiCheckbox = new MultiCheckbox(
            'test',
            [
                'label' => 'MultiCheckbox with hidden element',
                'value_options' => [
                    0 => 'First checkbox',
                    1 => 'Second checkbox',
                    2 => 'Third checkbox',
                ],
                'use_hidden_element' => true,
            ]
        );
        $multiCheckbox->setUseHiddenElement(true);
        $this->assertEquals(
            '<input type="hidden" name="test" value=""/>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="0"/>' . PHP_EOL .
                '    <label>First checkbox</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="1"/>' . PHP_EOL .
                '    <label>Second checkbox</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="2"/>' . PHP_EOL .
                '    <label>Third checkbox</label>' . PHP_EOL .
                '</div>',
            $this->helper->render($multiCheckbox)
        );
    }
}
