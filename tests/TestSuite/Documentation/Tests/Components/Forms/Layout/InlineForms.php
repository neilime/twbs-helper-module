<?php

// Documentation test config file for "Components / Forms / Layout / Inline forms" part
return [
    'title' => 'Inline forms',
    'url' => '%bootstrap-url%/components/forms/#inline-forms',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'name',
                        'options' => [
                            'label' => 'Name',
                            'form_group' => false,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInputName2',
                            'placeholder' => 'Jane Doe',
                            'class' => 'mb-2 mr-sm-2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'username',
                        'options' => [
                            'label' => 'Username',
                            'show_label' => false,
                            'add_on_prepend' => '@',
                            'input_group_class' => 'mb-2 mr-sm-2',
                            'form_group' => false,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInputGroupUsername2',
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
                            'form_check_class' => 'mb-2 mr-sm-2',
                            'form_group' => false,
                        ],
                        'attributes' => [
                            'id' => 'inlineFormCheck',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'variant' => 'primary',
                        ],
                        'attributes' => [
                            'class' => 'mb-2',
                        ],
                    ],
                ],
            ],
        ]));

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Custom form controls and selects are also supported
        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'preference',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Preference',
                            'show_label' => true,
                            'label_attributes' => ['class' => 'mr-2 my-1'],
                            'row_class' => 'my-1',
                            'empty_option' => 'Choose...',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                            'form_group' => false,
                            'custom' => true,
                        ],
                        'attributes' => [
                            'id' => 'inlineFormCustomSelectPref',
                            'class' => 'mr-sm-2 my-1',
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
                            'form_check_class' => 'mr-sm-2 my-1',
                            'form_group' => false,
                            'custom' => true,
                        ],
                        'attributes' => [
                            'id' => 'customControlInline',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'variant' => 'primary',
                        ],
                        'attributes' => [
                            'class' => 'mb-2',
                        ],
                    ],
                ],
            ],
        ]));
    },
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/FormRow.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/HorizontalForm.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/ColumnSizing.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/AutoSizing.php',
    ],
];
