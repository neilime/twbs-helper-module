<?php

// Documentation test config file for "Components / Forms / Form controls" part
return [
    'title' => 'Form controls',
    'url' => '%bootstrap-url%/components/forms/#form-controls',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'email',
                        'options' => [
                            'label' => 'Email address'
                        ],
                        'attributes' => [
                            'type' => 'email',
                            'id' => 'exampleFormControlInput1',
                            'placeholder' => 'name@example.com',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'select',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Example select',
                            'value_options' => [
                                1 => 1,
                                2 => 2,
                                3 => 3,
                                4 => 4,
                                5 => 5,
                            ],
                        ],
                        'attributes' => [
                            'id' => 'exampleFormControlSelect1',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'multiple_select',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Example multiple select',
                            'value_options' => [
                                1 => 1,
                                2 => 2,
                                3 => 3,
                                4 => 4,
                                5 => 5,
                            ],
                        ],
                        'attributes' => [
                            'id' => 'exampleFormControlSelect2',
                            'multiple' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'textarea',
                        'options' => [
                            'label' => 'Example textarea'
                        ],
                        'attributes' => [
                            'type' => 'textarea',
                            'id' => 'exampleFormControlTextarea1',
                            'rows' => 3,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'file_input',
                        'options' => [
                            'label' => 'Example file input'
                        ],
                        'attributes' => [
                            'type' => 'file',
                            'id' => 'exampleFormControlFile1',
                        ],
                    ],
                ],
            ],
        ]));
    },
    'tests' => [
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/components/forms/#sizing',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                // Render large input
                $element = $factory->create([
                    'name' => 'lg',
                    'type' => 'text',
                    'options' => ['size' => 'lg'],
                    'attributes' => ['placeholder' => '.form-control-lg'],
                ]);
                echo $view->formElement($element) . PHP_EOL . '<br/>' . PHP_EOL;

                // Render default input
                $element = $factory->create([
                    'name' => 'default',
                    'type' => 'text',
                    'attributes' => ['placeholder' => 'Default input'],
                ]);
                echo $view->formElement($element) . PHP_EOL . '<br/>' . PHP_EOL;

                // Render small input
                $element = $factory->create([
                    'name' => 'sm',
                    'type' => 'text',
                    'options' => ['size' => 'sm'],
                    'attributes' => ['placeholder' => '.form-control-sm'],
                ]);
                echo $view->formElement($element) . PHP_EOL . '<br/>' . PHP_EOL;

                // Render large select
                $element = $factory->create([
                    'name' => 'lg',
                    'type' => 'select',
                    'options' => ['size' => 'lg', 'value_options' => ['Large select']],
                    'attributes' => ['placeholder' => '.form-control-lg'],
                ]);
                echo $view->formElement($element) . PHP_EOL . '<br/>' . PHP_EOL;

                // Render default select
                $element = $factory->create([
                    'name' => 'default',
                    'type' => 'select',
                    'options' => ['value_options' => ['Default select']],
                    'attributes' => ['placeholder' => 'Default input'],
                ]);
                echo $view->formElement($element) . PHP_EOL . '<br/>' . PHP_EOL;

                // Render small select
                $element = $factory->create([
                    'name' => 'sm',
                    'type' => 'select',
                    'options' => ['size' => 'sm', 'value_options' => ['Small select']],
                    'attributes' => ['placeholder' => '.form-control-sm'],
                ]);
                echo $view->formElement($element) . PHP_EOL . '<br/>' . PHP_EOL;
            },
        ],
        [
            'title' => 'Readonly',
            'url' => '%bootstrap-url%/components/forms/#readonly',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Render element
                $factory = new \Laminas\Form\Factory();
                $element = $factory->create([
                    'name' => 'readonly-input',
                    'type' => 'text',
                    'attributes' => ['readonly' => true, 'placeholder' => 'Readonly input here...'],
                ]);
                echo $view->formElement($element);
            },
        ],
        [
            'title' => 'Readonly plain text',
            'url' => '%bootstrap-url%/components/forms/#readonly-plain-text',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();
                // Render horizontal form
                $form = $factory->create([
                    'type' => 'form',
                    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => [
                                    'plaintext' => true,
                                    'column' => 'sm-10',
                                    'label' => 'Email',
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'staticEmail',
                                    'value' => 'email@example.com',
                                    'readonly' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => [
                                    'column' => 'sm-10',
                                    'label' => 'Password',
                                ],
                                'attributes' => [
                                    'type' => 'password',
                                    'id' => 'inputPassword',
                                    'placeholder' => 'Password',
                                ],
                            ],
                        ],
                    ],
                ]);

                echo $view->form($form);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render inline form
                echo $view->form($factory->create([
                    'type' => 'form',
                    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => [
                                    'plaintext' => true,
                                    'label' => 'Email',
                                    'row_class' => 'mb-2',
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'staticEmail2',
                                    'value' => 'email@example.com',
                                    'readonly' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => [
                                    'label' => 'Password',
                                    'row_class' => 'mx-sm-3 mb-2',
                                ],
                                'attributes' => [
                                    'type' => 'password',
                                    'id' => 'inputPassword2',
                                    'placeholder' => 'Password',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => ['label' => 'Confirm identity', 'variant' => 'primary'],
                                'attributes' => ['class' => 'mb-2'],
                            ],
                        ],
                    ],
                ]));
            },
        ],
    ],
];
