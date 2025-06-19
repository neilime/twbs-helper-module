<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Radio;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormRowElement;

class FormRowElementTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormRowElement
     */
    protected $helper = 'form_row_element';

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
}
