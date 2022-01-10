<?php

// Documentation test config file for "Forms / Overview" part
return [
    'title' => 'Overview',
    'url' => '%bootstrap-url%/forms/overview',
    "tests" => [
        [
            'title' => 'Overview',
            'url' => '%bootstrap-url%/forms/overview/#overview',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->form($factory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => [
                                    'label' => 'Email address',
                                    'help_block' => [
                                        'content' => 'We\'ll never share your email with anyone else.',
                                        'attributes' => ['id' => 'emailHelp'],
                                    ]
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'exampleInputEmail1',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => ['label' => 'Password'],
                                'attributes' => [
                                    'type' => 'password',
                                    'id' => 'exampleInputPassword1',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'checkbox',
                                'name' => 'remember_me',
                                'options' => ['label' => 'Check me out', 'use_hidden_element' => false],
                                'attributes' => [
                                    'id' => 'exampleCheck1',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => ['label' => 'Submit', 'variant' => 'primary'],
                            ],
                        ],
                    ]
                ]));
            },
        ],
        [
            'title' => 'Form text',
            'url' => '%bootstrap-url%/forms/overview/#form-text',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'password',
                    'options' => [
                        'label' => 'Password',
                        'form_group' => false,
                        'help_block' => [
                            'content' => 'Your password must be 8-20 characters long, contain letters and numbers, ' .
                                'and must not contain spaces, special characters, or emoji.',
                            'attributes' => ['id' => 'passwordHelpBlock'],
                        ]
                    ],
                    'attributes' => [
                        'id' => 'inputPassword5',
                        'type' => 'password',
                    ],
                ]));

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Inline text can use any typical inline HTML element
                // (be it a <small>, <span>, or something else)
                // with nothing more than a utility class
                echo $view->form($factory->create([
                    'type' => 'form',
                    'options' => [
                        'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
                    ],
                    'attributes' => [
                        'class' => 'g-3'
                    ],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => [
                                    'label' => 'Password',
                                    'help_block' => [
                                        'content' => 'Must be 8-20 characters long.',
                                        'attributes' => ['id' => 'passwordHelpInline'],
                                    ],
                                ],
                                'attributes' => [
                                    'id' => 'inputPassword6',
                                    'type' => 'password',
                                ],
                            ],
                        ],
                    ],
                ]));
            },
        ],
        [
            'title' => 'Disabled forms',
            'url' => '%bootstrap-url%/forms/overview/#disabled-forms',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->form($factory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [
                                'type' => 'fieldset',
                                'options' => [
                                    'label' => 'Disabled fieldset example',
                                ],
                                'attributes' => [
                                    'disabled' => true,
                                ],
                                'elements' => [
                                    [
                                        'spec' => [
                                            'name' => 'disabled-input',
                                            'options' => ['label' => 'Disabled input'],
                                            'attributes' => [
                                                'type' => 'text',
                                                'id' => 'disabledTextInput',
                                                'placeholder' => 'Disabled input',
                                            ],
                                        ],
                                    ],
                                    [
                                        'spec' => [
                                            'name' => 'disabled-select',
                                            'type' => 'select',
                                            'attributes' => ['id' => 'disabledSelect',],
                                            'options' => [
                                                'label' => 'Disabled select menu',
                                                'empty_option' => 'Disabled select',
                                            ],
                                        ],
                                    ],
                                    [
                                        'spec' => [
                                            'type' => 'checkbox',
                                            'name' => 'disabled-fieldset-check',
                                            'options' => [
                                                'label' => 'Can\'t check this',
                                                'use_hidden_element' => false
                                            ],
                                            'attributes' => [
                                                'id' => 'disabledFieldsetCheck',
                                                'disabled' => true,
                                            ],
                                        ],
                                    ],
                                    [
                                        'spec' => [
                                            'type' => 'submit',
                                            'options' => ['label' => 'Submit', 'variant' => 'primary'],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]));
            },
        ]
    ]
];
