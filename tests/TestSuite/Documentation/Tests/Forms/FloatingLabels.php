<?php

// Documentation test config file for "Forms / Floating labels" part
return [
    'title' => 'Floating labels',
    'url' => '%bootstrap-url%/forms/floating-labels',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/forms/floating-labels/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'email',
                    'options' => [
                        'label' => 'Email address',
                        'floating_label' => true,
                    ],
                    'attributes' => [
                        'type' => 'email',
                        'id' => 'floatingInput',
                        'placeholder' => 'name@example.com',
                    ],
                ]));

                echo $view->formRow($factory->create([
                    'name' => 'password',
                    'options' => [
                        'label' => 'Password',
                        'floating_label' => true,
                        'row_spacing_class' => false,
                    ],
                    'attributes' => [
                        'type' => 'password',
                        'id' => 'floatingPassword',
                        'placeholder' => 'Password',
                    ],
                ]));

                echo $view->form($factory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'emailWithValue',
                                'options' => [
                                    'label' => 'Input with value',
                                    'floating_label' => true,
                                    'row_spacing_class' => false,
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'floatingInputValue',
                                    'placeholder' => 'name@example.com',
                                    'value' => 'test@example.com',
                                ],
                            ],
                        ],
                    ],
                ]));

                echo $view->form($factory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [

                                'name' => 'invalidEmailWithValue',
                                'options' => [
                                    'label' => 'Invalid input',
                                    'floating_label' => true,
                                    'row_spacing_class' => false,
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'floatingInputInvalid',
                                    'placeholder' => 'name@example.com',
                                    'value' => 'test@example.com',
                                ],
                            ],
                        ],
                    ],
                ])->setMessages(['invalidEmailWithValue' => ['']]));
            },
        ],
        [
            'title' => 'Textareas',
            'url' => '%bootstrap-url%/forms/floating-labels/#textareas',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create(
                    [
                        'name' => 'comments',
                        'options' => [
                            'label' => 'Comments',
                            'floating_label' => true,
                            'row_spacing_class' => false,
                        ],
                        'attributes' => [
                            'type' => 'textarea',
                            'id' => 'floatingTextarea',
                            'placeholder' => 'Leave a comment here',
                        ],
                    ],
                ));

                echo $view->formRow($factory->create([
                    'name' => 'customHeightComments',
                    'options' => [
                        'label' => 'Comments',
                        'floating_label' => true,
                        'row_spacing_class' => false,
                    ],
                    'attributes' => [
                        'type' => 'textarea',
                        'id' => 'floatingTextarea',
                        'placeholder' => 'Leave a comment here',
                        'style' => 'height: 100px',
                    ],
                ]));
            },
        ],
        [
            'title' => 'Selects',
            'url' => '%bootstrap-url%/forms/floating-labels/#selects',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create(
                    [
                        'name' => 'floatingSelect',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Works with selects',
                            'floating_label' => true,
                            'row_spacing_class' => false,
                            'empty_option' => 'Open this select menu',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                        ],
                        'attributes' => [
                            'id' => 'floatingSelect',
                            'aria-label' => 'Floating label select example',
                            'value' => '',
                        ],
                    ],
                ));
            },
        ],
        [
            'title' => 'Layout',
            'url' => '%bootstrap-url%/forms/floating-labels/#layout',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->form($factory->create([
                    'type' => 'form',
                    'options' => [
                        'gutter' => 2,
                    ],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'floatingInputGrid',
                                'options' => [
                                    'column' => 'md',
                                    'label' => 'Email address',
                                    'floating_label' => true,
                                    'row_spacing_class' => false,
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'floatingInputGrid',
                                    'placeholder' => 'name@example.com',
                                    'value' => 'mdo@example.com',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'floatingSelectGrid',
                                'type' => 'select',
                                'options' => [
                                    'column' => 'md',
                                    'label' => 'Works with selects',
                                    'floating_label' => true,
                                    'row_spacing_class' => false,
                                    'empty_option' => 'Open this select menu',
                                    'value_options' => [
                                        1 => 'One',
                                        2 => 'Two',
                                        3 => 'Three',
                                    ],
                                ],
                                'attributes' => [
                                    'id' => 'floatingSelectGrid',
                                    'aria-label' => 'Floating label select example',
                                    'value' => '',
                                ],
                            ],
                        ],
                    ],
                ]));
            },
        ],
    ],
];
