<?php

// Documentation test config file for "Forms / Input group / Checkboxes and radios" part
return [
    'title' => 'Checkboxes and radios',
    'url' => '%bootstrap-url%/forms/input-group/#checkboxes-and-radios',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->formRow($factory->create([
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

        echo $view->formRow($factory->create([
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
