<?php

// Documentation test config file for "Forms / Form controls" part
return [
    'title' => 'Form controls',
    'url' => '%bootstrap-url%/forms/form-control',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/forms/form-control/#example',
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
                                'name' => 'textarea',
                                'options' => [
                                    'label' => 'Example textarea',
                                ],
                                'attributes' => [
                                    'type' => 'textarea',
                                    'id' => 'exampleFormControlTextarea1',
                                    'rows' => 3,
                                ],
                            ],
                        ],
                    ],
                ]));
            },
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/forms/form-control/#sizing',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                // Render large input
                $element = $factory->create([
                    'name' => 'lg',
                    'type' => 'text',
                    'options' => ['size' => 'lg'],
                    'attributes' => ['placeholder' => '.form-control-lg', 'aria-label' => '.form-control-lg example'],
                ]);
                echo $view->formElement($element);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render default input
                $element = $factory->create([
                    'name' => 'default',
                    'type' => 'text',
                    'attributes' => ['placeholder' => 'Default input', 'aria-label' => 'default input example'],
                ]);
                echo $view->formElement($element);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render small input
                $element = $factory->create([
                    'name' => 'sm',
                    'type' => 'text',
                    'options' => ['size' => 'sm'],
                    'attributes' => ['placeholder' => '.form-control-sm', 'aria-label' => '.form-control-sm example'],
                ]);
                echo $view->formElement($element);
            },
        ],
        [
            'title' => 'Disabled',
            'url' => '%bootstrap-url%/forms/form-control/#disabled',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Render disabled input
                $factory = new \Laminas\Form\Factory();
                $element = $factory->create([
                    'name' => 'disabled-input',
                    'type' => 'text',
                    'attributes' => [
                        'disabled' => true,
                        'placeholder' => 'Disabled input',
                        'aria-label' => 'Disabled input example',
                    ],
                ]);
                echo $view->formElement($element);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render disabled and readonly input
                $element = $factory->create([
                    'name' => 'disabled-readonly-input',
                    'type' => 'text',
                    'attributes' => [
                        'disabled' => true,
                        'readonly' => true,
                        'value' => 'Disabled readonly input',
                        'aria-label' => 'Disabled input example',
                    ],
                ]);
                echo $view->formElement($element);
            },
        ],
        [
            'title' => 'Readonly',
            'url' => '%bootstrap-url%/forms/form-control/#readonly',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Render element
                $factory = new \Laminas\Form\Factory();
                $element = $factory->create([
                    'name' => 'readonly-input',
                    'type' => 'text',
                    'attributes' => [
                        'readonly' => true,
                        'value' => 'Readonly input here...',
                        'aria-label' => 'readonly input example',
                    ],
                ]);
                echo $view->formElement($element);
            },
        ],
        [
            'title' => 'Readonly plain text',
            'url' => '%bootstrap-url%/forms/#readonly-plain-text',
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
                                    'show_label' => false,
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
                                    'show_label' => false,
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
        [
            'title' => 'File input',
            'url' => '%bootstrap-url%/forms/form-control/#file-input',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();
                // Render inline form
                echo $view->form($factory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'default-file',
                                'options' => [
                                    'label' => 'Default file input example',
                                ],
                                'attributes' => [
                                    'type' => 'file',
                                    'id' => 'formFile',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'file-multiple',
                                'options' => [
                                    'label' => 'Multiple files input example',
                                ],
                                'attributes' => [
                                    'multiple' => true,
                                    'type' => 'file',
                                    'id' => 'formFileMultiple',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'file-disabled',
                                'options' => [
                                    'label' => 'Disabled file input example',
                                ],
                                'attributes' => [
                                    'disabled' => true,
                                    'type' => 'file',
                                    'id' => 'formFileDisabled',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'file-sm',
                                'options' => [
                                    'size' => 'sm',
                                    'label' => 'Small file input example',
                                ],
                                'attributes' => [
                                    'type' => 'file',
                                    'id' => 'formFileSm',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'file-lg',
                                'options' => [
                                    'size' => 'lg',
                                    'label' => 'Large file input example',
                                ],
                                'attributes' => [
                                    'type' => 'file',
                                    'id' => 'formFileLg',
                                ],
                            ],
                        ],
                    ],
                ]));
            },
        ],
    ],
];
