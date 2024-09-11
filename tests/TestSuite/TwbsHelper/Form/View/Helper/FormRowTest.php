<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormRowTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormRow
     */
    protected $helper = 'formRow';

    public function testRenderWithPartial()
    {
        $factory = new \Laminas\Form\Factory();

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
        $element = new \Laminas\Form\Element\Text(
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
