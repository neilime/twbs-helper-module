<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Text;
use Laminas\Form\Factory;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\Form\View\Helper\FormRow;

class FormRowTest extends AbstractViewHelperTestCase
{
    /**
     * @var FormRow
     */
    protected $helper = 'formRow';

    public function testRenderWithPartial()
    {
        $factory = new Factory();

        $form = $factory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'test',
                    ],
                ],
            ],
        ]);

        $this->assertEquals(
            '{"element":{},"label":null,"labelAttributes":[],"labelPosition":"prepend","renderErrors":true}',
            $this->helper->__invoke(
                element: $form,
                partial: 'test/json'
            )
        );
    }

    public function testWithRowRowSpacingClassDisabled()
    {
        $element = new Text(
            'form',
            [
                'row_class' => 'mb-5',
                'row_spacing_class' => false,
            ]
        );

        $this->assertEquals(
            '<div class="mb-5">' . PHP_EOL .
                '    <input class="form-control" name="form" type="text" value=""/>' . PHP_EOL .
                '</div>',
            $this->helper->__invoke($element)
        );
    }
}
