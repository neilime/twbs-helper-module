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
                $form,
                null,
                null,
                'test/json'
            )
        );
    }
}
