<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Factory;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormRows;

class FormRowsTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormRows
     */
    protected $helper = 'formRows';

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
}
