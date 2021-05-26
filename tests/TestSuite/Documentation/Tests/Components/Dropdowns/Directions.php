<?php

// Documentation test config file for "Components / Dropdowns / Directions" part
return [
    'title' => 'Directions',
    'url' => '%bootstrap-url%/components/dropdowns/#directions',
    'tests' => [
        [
            'title' => 'Dropup',
            'url' => '%bootstrap-url%/components/dropdowns/#dropup',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Dropup button
                echo $view->formButton()->renderSpec([
                    'name' => 'dropup',
                    'options' => [
                        'label' => 'Dropup',
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
                echo $view->formButton()->renderSpec([
                    'name' => 'split-dropup',
                    'options' => [
                        'label' => 'Split dropup',
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
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Dropend button
                echo $view->formButton()->renderSpec([
                    'name' => 'dropend',
                    'options' => [
                        'label' => 'Dropright',
                        'dropdown' => [
                            'direction' => 'end',
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

                // Dropend split button
                echo $view->formButton()->renderSpec([
                    'name' => 'split-dropend',
                    'options' => [
                        'label' => 'Split dropend',
                        'dropdown' => [
                            'direction' => 'end',
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
            'title' => 'Dropleft',
            'url' => '%bootstrap-url%/components/dropdowns/#dropleft',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Dropstart button
                echo $view->formButton()->renderSpec([
                    'name' => 'dropstart',
                    'options' => [
                        'label' => 'Dropleft',
                        'dropdown' => [
                            'direction' => 'start',
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

                // Dropstart split button
                echo $view->formButton()->renderSpec([
                    'name' => 'split-dropstart',
                    'options' => [
                        'label' => 'Split dropstart',
                        'dropdown' => [
                            'direction' => 'start',
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
];
