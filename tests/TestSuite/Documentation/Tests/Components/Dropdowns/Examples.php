<?php

// Documentation test config file for "Components / Dropdowns / Examples" part
return [
    'title' => 'Examples',
    'url' => '%bootstrap-url%/components/dropdowns/#examples',
    'tests' => [
        [
            'title' => 'Single button',
            'url' => '%bootstrap-url%/components/dropdowns/#single-button',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Dropdown button',
                        'dropdown' => ['Action', 'Another action', 'Something else here'],
                    ],
                    'attributes' => ['id' => 'dropdownMenuButton1'],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With <a> elements
                echo $view->formButton()->renderSpec([
                    'name' => 'dropdown',
                    'options' => [
                        'tag' => 'a',
                        'label' => 'Dropdown link',
                        'dropdown' => ['Action', 'Another action', 'Something else here'],
                    ],
                    'attributes' => ['id' => 'dropdownMenuLink'],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Variations
                foreach (
                    [
                    'primary', 'secondary', 'success',
                    'info', 'warning', 'danger',
                    ] as $variant
                ) {
                    echo $view->formButton()->renderSpec([
                        'name' => 'dropdown',
                        'options' => [
                            'variant' => $variant,
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
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach (
                    [
                    'primary', 'secondary', 'success',
                    'info', 'warning', 'danger',
                    ] as $variant
                ) {
                    echo $view->formButton()->renderSpec([
                        'name' => 'dropdown',
                        'options' => [
                            'variant' => $variant,
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
];
