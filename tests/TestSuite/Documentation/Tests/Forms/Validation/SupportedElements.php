<?php

// Documentation test config file for "Forms / Validation / Supported elements" part
return [
    'title' => 'Supported elements',
    'url' => '%bootstrap-url%/forms/validation/#supported-elements',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'textarea',
                        'options' => [
                            'label' => 'Textarea',
                        ],
                        'attributes' => [
                            'type' => 'textarea',
                            'id' => 'validationTextarea',
                            'required' => true,
                            'placeholder' => 'Required example textarea',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'checkbox',
                        'type' => 'checkbox',
                        'options' => [
                            'label' => 'Check this checkbox',
                        ],
                        'attributes' => [
                            'id' => 'validationFormCheck1',
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'radio-stacked',
                        'type' => 'radio',
                        'options' => [
                            'value_options' => [
                                [
                                    'label' => 'Toggle this radio',
                                    'value' => 'option1',
                                    'attributes' => ['id' => 'validationFormCheck2'],
                                ],
                                [
                                    'label' => 'Or toggle this other radio',
                                    'value' => 'option2',
                                    'attributes' => ['id' => 'validationFormCheck3'],
                                ],
                            ],
                        ],
                        'attributes' => [
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'select',
                        'type' => 'select',
                        'options' => [
                            'empty_option' => 'Open this select menu',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                        ],
                        'attributes' => [
                            'aria-label' => 'select example',
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'file',
                        'attributes' => [
                            'type' => 'file',
                            'aria-label' => 'file example',
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'submit',
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit form',
                            'variant' => 'primary',
                        ],
                        'attributes' => [
                            'disabled' => true,
                        ],
                    ],
                ],
            ],
        ])->setMessages([
            'textarea' => ['Please enter a message in the textarea.'],
            'checkbox' => ['Example invalid feedback text'],
            'radio-stacked' => ['More example invalid feedback text'],
            'select' => ['Example invalid select feedback'],
            'file' => ['Example invalid form file feedback'],
        ]));
    }
];
