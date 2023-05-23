<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormRowTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormRow
     */
    protected $helper = 'formRow';

    public function testInvokeWithoutParamShouldReturnHelper()
    {
        $this->assertSame(
            $this->helper,
            $this->helper->__invoke()
        );
    }

    /**
     * Test add custom class on column container
     */
    public function testAddCustomClassOnColumnContainer()
    {
        $factory = new \Laminas\Form\Factory();

        $form = $factory->create(
            [
                'type'       => 'radio',
                'options'    => [
                    'layout'        => 'inline',
                    'form_group'    => false,
                    'row_class' => 'custom-class',
                    'value_options' => [
                        [
                            'value'      => 'option1',
                            'show_label' => false,
                        ],
                        [
                            'value'      => 'option2',
                            'show_label' => false,
                        ],
                    ],
                ],
            ]
        );

        $this->assertEquals(
            '<div class="col-auto&#x20;custom-class">' . PHP_EOL .
                '    <div class="form-check&#x20;form-check-inline">' . PHP_EOL .
                '        <input class="form-check-input&#x20;position-static" name="radio" ' .
                'type="radio" value="option1"/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="form-check&#x20;form-check-inline">' . PHP_EOL .
                '        <input class="form-check-input&#x20;position-static" name="radio" ' .
                'type="radio" value="option2"/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            $this->helper->__invoke($form)
        );
    }
}
