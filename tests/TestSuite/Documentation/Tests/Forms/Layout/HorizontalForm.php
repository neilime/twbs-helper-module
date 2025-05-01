<?php

// Documentation test config file for "Forms / Layout / Horizontal form" part

return [
    'title' => 'Horizontal form',
    'url' => '%bootstrap-url%/forms/layout/#horizontal-form',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'email',
                        'options' => [
                            'label' => 'Email',
                            'column' => 'sm-10',
                        ],
                        'attributes' => [
                            'type' => 'email',
                            'id' => 'inputEmail3',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'password',
                        'options' => [
                            'label' => 'Password',
                            'column' => 'sm-10',
                        ],
                        'attributes' => [
                            'type' => 'password',
                            'id' => 'inputPassword3',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'fieldset',
                        'options' => [
                            'label' => 'Radios',
                            'label_attributes' => ['class' => 'col-form-label pt-0'],
                            'column' => 'sm-10',
                        ],
                        'elements' => [
                            [
                                'spec' => [
                                    'type' => 'radio',
                                    'name' => 'gridRadios',
                                    'options' => [
                                        'value_options' => [
                                            [
                                                'label' => 'First radio',
                                                'attributes' => ['id' => 'gridRadios1'],
                                                'value' => 'option1',
                                            ],
                                            [
                                                'label' => 'Second radio',
                                                'attributes' => ['id' => 'gridRadios2'],
                                                'value' => 'option2',
                                            ],
                                            [
                                                'label' => 'Third disabled radio',
                                                'disabled' => true,
                                                'attributes' => ['id' => 'gridRadios3'],
                                                'value' => 'option3',
                                            ],
                                        ],
                                    ],
                                    'attributes' => [
                                        'value' => 'option1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'checkbox',
                        'options' => [
                            'label' => 'Example checkbox',
                            'column' => 'sm-10',
                        ],
                        'attributes' => ['id' => 'gridCheck1'],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Sign in',
                            'variant' => 'primary',
                        ],
                    ],
                ],
            ],
        ]));
    },
    'tests' => [
        [
            'title' => 'Horizontal form label sizing',
            'url' => '%bootstrap-url%/forms/layout/#horizontal-form-label-sizing',

            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->form($factory->create([
                    'type' => 'form',
                    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'emailSm',
                                'options' => [
                                    'label' => 'Email',
                                    'column' => 'sm-10',
                                    'size' => 'sm',
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'colFormLabelSm',
                                    'placeholder' => 'col-form-label-sm',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => [
                                    'label' => 'Email',
                                    'column' => 'sm-10',
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'colFormLabel',
                                    'placeholder' => 'col-form-label',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'emailLg',
                                'options' => [
                                    'label' => 'Email',
                                    'column' => 'sm-10',
                                    'size' => 'lg',
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'colFormLabelLg',
                                    'placeholder' => 'col-form-label-lg',
                                ],
                            ],
                        ],
                    ],
                ]));
            },
        ],
    ],
];
