<?php

// Documentation test config file for "Components / Dropdowns" part
return [
    'title' => 'Dropdowns',
    'url' => '%bootstrap-url%/components/dropdowns/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/components/dropdowns/#examples',
            'tests' => [
                [
                    'title' => 'Single button',
                    'url' => '%bootstrap-url%/components/dropdowns/#single-button',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->formButton([
                            'name' => 'dropdown',
                            'options' => [
                                'label' => 'Dropdown',
                                'dropdown' => ['Action', 'Another action', 'Something else here',],
                            ],
                            'attributes' => ['id' => 'dropdownMenuButton'],
                        ]);


                        echo PHP_EOL . '<br/>' . PHP_EOL;

                        // With <a> elements
                        echo $oView->formButton([
                            'name' => 'dropdown',
                            'options' => [
                                'tag' => 'a',
                                'label' => 'Dropdown',
                                'dropdown' => ['Action', 'Another action', 'Something else here',],
                            ],
                            'attributes' => ['id' => 'dropdownMenuButton'],
                        ]);

                        echo PHP_EOL . '<br/>' . PHP_EOL;

                        // Variations
                        foreach (
                            [
                            'primary', 'secondary', 'success', 'danger',
                            'warning', 'info', 'light', 'dark',
                            ] as $sVariant
                        ) {
                            echo $oView->formButton([
                                'name' => 'dropdown',
                                'options' => [
                                    'variant' => $sVariant,
                                    'label' => 'Dropdown',
                                    'dropdown' => [
                                        'attributes' => ['class' => 'btn-group'],
                                        'items' => [
                                            'Action',
                                            'Another action',
                                            'Something else here',
                                            '---',
                                            'Separated link',
                                        ],
                                    ],
                                ],
                            ]) . PHP_EOL;
                        }
                    },
                ],
                [
                    'title' => 'Split button',
                    'url' => '%bootstrap-url%/components/dropdowns/#split-button',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        foreach (
                            [
                            'primary', 'secondary', 'success', 'danger',
                            'warning', 'info', 'light', 'dark',
                            ] as $sVariant
                        ) {
                            echo $oView->formButton([
                                'name' => 'dropdown',
                                'options' => [
                                    'variant' => $sVariant,
                                    'label' => 'Dropdown',
                                    'dropdown' => [
                                        'split' => 'Toggle Dropdown',
                                        'items' => [
                                            'Action',
                                            'Another action',
                                            'Something else here',
                                            '---',
                                            'Separated link',
                                        ],
                                    ],
                                ],
                            ]) . PHP_EOL;
                        }
                    },
                ],
            ],
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/components/dropdowns/#sizing',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Large button
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Large button',
                        'size' => 'lg',
                        'dropdown' => [
                            'attributes' => ['class' => 'btn-group'],
                            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                        ],
                    ],
                ]) . PHP_EOL;

                // Large split button
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Large button',
                        'size' => 'lg',
                        'dropdown' => [
                            'split' => 'Toggle Dropdown',
                            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br/><br/>' . PHP_EOL;

                // Small button
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Small button',
                        'size' => 'sm',
                        'dropdown' => [
                            'attributes' => ['class' => 'btn-group'],
                            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                        ],
                    ],
                ]) . PHP_EOL;

                // Small split button
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Small button',
                        'size' => 'sm',
                        'dropdown' => [
                            'split' => 'Toggle Dropdown',
                            'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Directions',
            'url' => '%bootstrap-url%/components/dropdowns/#directions',
            'tests' => [
                [
                    'title' => 'Dropup',
                    'url' => '%bootstrap-url%/components/dropdowns/#dropup',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        // Dropup button
                        echo $oView->formButton([
                            'name' => 'dropup',
                            'options' => [
                                'label' => 'Dropup',
                                'size' => 'lg',
                                'dropdown' => [
                                    'direction' => 'up',
                                    'attributes' => ['class' => 'btn-group'],
                                    'items' => [
                                        'Action',
                                        'Another action',
                                        'Something else here',
                                        '---',
                                        'Separated link',
                                    ]
                                ],
                            ],
                        ]) . PHP_EOL;

                        // Dropup split button
                        echo $oView->formButton([
                            'name' => 'split-dropup',
                            'options' => [
                                'label' => 'Split dropup',
                                'size' => 'lg',
                                'dropdown' => [
                                    'direction' => 'up',
                                    'split' => 'Toggle Dropdown',
                                    'items' => [
                                        'Action',
                                        'Another action',
                                        'Something else here',
                                        '---',
                                        'Separated link',
                                    ],
                                ],
                            ],
                        ]);
                    },
                ],
                [
                    'title' => 'Dropright',
                    'url' => '%bootstrap-url%/components/dropdowns/#dropright',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        // Dropright button
                        echo $oView->formButton([
                            'name' => 'dropright',
                            'options' => [
                                'label' => 'Dropright',
                                'size' => 'lg',
                                'dropdown' => [
                                    'direction' => 'right',
                                    'attributes' => ['class' => 'btn-group'],
                                    'items' => [
                                        'Action',
                                        'Another action',
                                        'Something else here',
                                        '---',
                                        'Separated link',
                                    ],
                                ],
                            ],
                        ]) . PHP_EOL;

                        // Dropright split button
                        echo $oView->formButton([
                            'name' => 'split-dropright',
                            'options' => [
                                'label' => 'Split dropright',
                                'size' => 'lg',
                                'dropdown' => [
                                    'direction' => 'right',
                                    'split' => 'Toggle Dropdown',
                                    'items' => [
                                        'Action',
                                        'Another action',
                                        'Something else here',
                                        '---',
                                        'Separated link',
                                    ],
                                ],
                            ],
                        ]);
                    },
                ],
            ],
        ],
        [
            'title' => 'Menu items',
            'url' => '%bootstrap-url%/components/dropdowns/#menu-items',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Dropdown',
                        'dropdown' => ['Action', 'Another action', 'Something else here'],
                    ],
                    'attributes' => ['id' => 'dropdownMenu2'],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Non-interactive dropdown items
                echo $oView->dropdown()->renderMenu([
                    'Dropdown item text' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_TEXT,
                    'Action',
                    'Another action',
                    'Something else here'
                ]);
            },
            'tests' => [
                [
                    'title' => 'Active',
                    'url' => '%bootstrap-url%/components/dropdowns/#active',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            'Regular link',
                            'Active link' => ['active' => true],
                            'Another link'
                        ]);
                    },
                ],
                [
                    'title' => 'Disabled',
                    'url' => '%bootstrap-url%/components/dropdowns/#disabled',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            'Regular link',
                            'Disabled link' => ['disabled' => true],
                            'Another link'
                        ]);
                    },
                ],
            ],
        ],
        [
            'title' => 'Menu alignment',
            'url' => '%bootstrap-url%/components/dropdowns/#menu-alignment',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Right-aligned menu',
                        'dropdown' => [
                            'alignment' => 'right',
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                ]);
            },
            'tests' => [
                [
                    'title' => 'Responsive alignment',
                    'url' => '%bootstrap-url%/components/dropdowns/#responsive-alignment',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->formButton([
                            'name' => 'dropdown',
                            'options' => [
                                'label' => 'Left-aligned but right aligned when large screen',
                                'dropdown' => [
                                    'alignment' => 'lg-right',
                                    'items' => ['Action', 'Another action', 'Something else here'],
                                ],
                            ],
                        ]);

                        echo PHP_EOL . '<br/>' . PHP_EOL;

                        echo $oView->formButton([
                            'name' => 'dropdown',
                            'options' => [
                                'label' => 'Left-aligned but right aligned when large screen',
                                'dropdown' => [
                                    'alignment' => ['right', 'lg-left'],
                                    'items' => ['Action', 'Another action', 'Something else here'],
                                ],
                            ],
                        ]);
                    },
                ],
            ],
        ],
        [
            'title' => 'Menu content',
            'url' => '%bootstrap-url%/components/dropdowns/#menu-content',
            'tests' => [
                [
                    'title' => 'Headers',
                    'url' => '%bootstrap-url%/components/dropdowns/#headers',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            'Dropdown header' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HEADER,
                            'Action',
                            'Another action',
                        ]);
                    },
                ],
                [
                    'title' => 'Dividers',
                    'url' => '%bootstrap-url%/components/dropdowns/#headers',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
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
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->dropdown()->renderMenu([
                            '<p>Some example text that\'s free-flowing within the dropdown menu.</p>',
                            '<p class="mb-0">And this is more example text.</p>',
                        ], ['class' => 'p-4 text-muted', 'style' => 'max-width: 200px;']);
                    },
                ],
                [
                    'title' => 'Forms',
                    'url' => '%bootstrap-url%/components/dropdowns/#forms',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                        // Create form
                        $oFactory = new \Laminas\Form\Factory();
                        $oForm = $oFactory->create([
                            'type' => 'form',
                            'name' => 'dropdown',
                            'attributes' => ['id' => 'dropdown'],
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
                            ]
                        ]);

                        echo $oView->dropdown()->renderMenu([
                            $oForm,
                            'New around here? Sign up',
                            'Forgot password?',
                        ]);
                    },
                ],
            ],
        ],
        [
            'title' => 'Dropdown options',
            'url' => '%bootstrap-url%/components/dropdowns/#dropdown-options',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                echo '<div class="d-flex">' . PHP_EOL;

                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Offset',
                        'dropdown' => [
                            'attributes' => ['class' => 'mr-1'],
                            'offset' => '10,20',
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                    'attributes' => ['id' => 'dropdownMenuOffset'],
                ]) . PHP_EOL;

                echo $oView->formButton([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Reference',
                        'dropdown' => [
                            'split' => [
                                'attributes' => ['data-reference' => 'parent'],
                            ],
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                    'attributes' => ['id' => 'dropdownMenuReference'],
                ]);


                echo PHP_EOL . '</div>';
            },
        ],
    ],
];
