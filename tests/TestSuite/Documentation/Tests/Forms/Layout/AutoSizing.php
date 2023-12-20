<?php

// Documentation test config file for "Forms / Layout / Auto-sizing" part
return [
    'title' => 'Auto-sizing',
    'url' => '%bootstrap-url%/forms/layout/#auto-sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'row_class' => 'row gy-2 gx-3 align-items-center',
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'name',
                        'options' => [
                            'label' => 'Name',
                            'show_label' => false,
                            'column' => 'auto',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'autoSizingInput',
                            'placeholder' => 'Jane Doe',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'username',
                        'options' => [
                            'label' => 'Username',
                            'show_label' => false,
                            'column' => 'auto',
                            'add_on_prepend' => '@',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'autoSizingInputGroup',
                            'placeholder' => 'Username',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'preference',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Preference',
                            'show_label' => false,
                            'column' => 'auto',
                            'empty_option' => 'Choose...',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                        ],
                        'attributes' => [
                            'id' => 'autoSizingSelect',
                            'value' => '',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'checkbox',
                        'name' => 'remember_me',
                        'options' => [
                            'label' => 'Remember me',
                            'use_hidden_element' => false,
                            'column' => 'auto',
                        ],
                        'attributes' => [
                            'id' => 'autoSizingCheck',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'variant' => 'primary',
                            'column' => 'auto',
                        ],
                    ],
                ],
            ],
        ]));

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // You can then remix that once again with size-specific column classes.
        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'row_class' => 'row gx-3 gy-2 align-items-center',
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'name',
                        'options' => [
                            'label' => 'Name',
                            'show_label' => false,
                            'column' => 'sm-3',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'specificSizeInputName',
                            'placeholder' => 'Jane Doe',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'username',
                        'options' => [
                            'label' => 'Username',
                            'show_label' => false,
                            'column' => 'sm-3',
                            'add_on_prepend' => '@',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'specificSizeInputGroupUsername',
                            'placeholder' => 'Username',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'preference',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Preference',
                            'show_label' => false,
                            'column' => 'sm-3',
                            'empty_option' => 'Choose...',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                        ],
                        'attributes' => [
                            'id' => 'specificSizeSelect',
                            'value' => '',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'checkbox',
                        'name' => 'remember_me',
                        'options' => [
                            'label' => 'Remember me',
                            'use_hidden_element' => false,
                            'column' => 'auto',
                        ],
                        'attributes' => [
                            'id' => 'autoSizingCheck2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'variant' => 'primary',
                            'column' => 'auto',
                        ],
                    ],
                ],
            ],
        ]));
    },
];
