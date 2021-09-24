<?php

// Documentation test config file for "Components / Input group / Checkboxes and radios" part
return [
    'title' => 'Checkboxes and radios',
    'url' => '%bootstrap-url%/components/input-group/#checkboxes-and-radios',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'checkbox-text',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'checkbox',
                        'options' => [
                            'use_hidden_element' => false,
                        ],
                        'attributes' => [
                            'aria-label' => 'Checkbox for following text input',
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'aria-label' => 'Text input with checkbox',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'radio-text',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'radio',
                        'options' => [
                            'value_options' => [
                                [
                                    'label' => '',
                                    'attributes' => [
                                        'aria-label' => 'Radio button for following text input',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'aria-label' => 'Text input with radio button',
            ],
        ]));
    },
];
