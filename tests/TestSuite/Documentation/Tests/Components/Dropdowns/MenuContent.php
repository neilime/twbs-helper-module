<?php

// Documentation test config file for "Components / Dropdowns / Menu content" part
return [
    'title' => 'Menu content',
    'url' => '%bootstrap-url%/components/dropdowns/#menu-content',
    'tests' => [
        [
            'title' => 'Headers',
            'url' => '%bootstrap-url%/components/dropdowns/#headers',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->dropdown()->renderMenu([
                    'Dropdown header' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HEADER,
                    'Action',
                    'Another action',
                ]);
            },
        ],
        [
            'title' => 'Dividers',
            'url' => '%bootstrap-url%/components/dropdowns/#headers',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->dropdown()->renderMenu([
                    'Action',
                    'Another action',
                    'Something else here',
                    '---',
                    'Separated link',
                ]);
            },
        ],
        [
            'title' => 'Text',
            'url' => '%bootstrap-url%/components/dropdowns/#headers',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->dropdown()->renderMenu([
                    '<p>Some example text that\'s free-flowing within the dropdown menu.</p>',
                    '<p class="mb-0">And this is more example text.</p>',
                ], ['class' => 'p-4 text-muted', 'style' => 'max-width: 200px;']);
            },
        ],
        [
            'title' => 'Forms',
            'url' => '%bootstrap-url%/components/dropdowns/#forms',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                // Create form
                $factory = new \Laminas\Form\Factory();
                $form = $factory->create([
                    'type' => 'form',
                    'name' => 'dropdown',
                    'attributes' => ['class' => 'px-4 py-3'],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => ['label' => 'Email address'],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'exampleDropdownFormEmail1',
                                    'placeholder' => 'email@example.com',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => ['label' => 'Password'],
                                'attributes' => [
                                    'type' => 'password',
                                    'id' => 'exampleDropdownFormPassword1',
                                    'placeholder' => 'Password',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'checkbox',
                                'name' => 'remember_me',
                                'options' => ['label' => 'Remember me', 'use_hidden_element' => false],
                                'attributes' => [
                                    'id' => 'dropdownCheck',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => ['label' => 'Sign in', 'variant' => 'primary'],
                            ],
                        ],
                    ],
                ]);

                echo $view->dropdown()->renderMenu([
                    $form,
                    '---',
                    'New around here? Sign up',
                    'Forgot password?',
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                $form->setAttribute('class', 'dropdown-menu p-4');
                echo $view->form($form);
            },
        ],
    ],
];
