<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Auto-sizing" part
return [
    'title' => 'Auto-sizing',
    'url' => '%bootstrap-url%/components/forms/#auto-sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => [
                'row_class' => 'align-items-center form-row',
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
                            'id' => 'inlineFormInput',
                            'placeholder' => 'Jane Doe',
                            'class' => 'mb-2',
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
                            'input_group_class' => 'mb-2',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInputGroup',
                            'placeholder' => 'Username',
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
                            'form_check_class' => 'mb-2',
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
                        'attributes' => [
                            'class' => 'mb-2',
                        ],
                    ],
                ],
            ],
        ]));

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Remix that once again with size-specific column classes.
        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => [
                'row_class' => 'align-items-center form-row',
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'name',
                        'options' => [
                            'label' => 'Name',
                            'show_label' => false,
                            'column' => 'sm-3',
                            'row_class' => 'my-1',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInput',
                            'placeholder' => 'Jane Doe',
                            'class' => 'mb-2',
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
                            'row_class' => 'my-1',
                            'add_on_prepend' => '@',
                            'input_group_class' => 'mb-2',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInputGroup',
                            'placeholder' => 'Username',
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
                            'row_class' => 'my-1',
                            'form_check_class' => 'mb-2',
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
                            'row_class' => 'my-1',
                        ],
                        'attributes' => [
                            'class' => 'mb-2',
                        ],
                    ],
                ],
            ],
        ]));

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // And of course custom form controls are supported.
        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => [
                'row_class' => 'align-items-center form-row',
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'preference',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Preference',
                            'show_label' => false,
                            'label_attributes' => ['class' => 'mr-sm-2'],
                            'column' => 'sm-3',
                            'row_class' => 'my-1',
                            'empty_option' => 'Choose...',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                            'custom' => true,
                        ],
                        'attributes' => [
                            'id' => 'inlineFormCustomSelect',
                            'class' => 'mr-sm-2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'checkbox',
                        'name' => 'remember_my_preference',
                        'options' => [
                            'label' => 'Remember my preference',
                            'use_hidden_element' => false,
                            'column' => 'auto',
                            'row_class' => 'my-1',
                            'form_check_class' => 'mr-sm-2',
                            'custom' => true,
                        ],
                        'attributes' => [
                            'id' => 'customControlAutosizing',
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
                            'row_class' => 'my-1',
                        ],
                    ],
                ],
            ],
        ]));
    },

];
