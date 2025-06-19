<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Radio;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormRadio;

class FormRadioTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormRadio
     */
    protected $helper = 'formRadio';

    public function testRenderWithLabel()
    {
        $this->assertEquals(
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
