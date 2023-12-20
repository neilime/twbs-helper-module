<?php

// Documentation test config file for "Components / Dropdowns / Menu alignment" part
return [
    'title' => 'Menu alignment',
    'url' => '%bootstrap-url%/components/dropdowns/#menu-alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Right-aligned menu example',
                'dropdown' => [
                    'alignment' => 'end',
                    'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_BUTTON,
                    'items' => ['Action', 'Another action', 'Something else here'],
                ],
            ],
        ]);
    },
    'tests' => [
        [
            'title' => 'Responsive alignment',
            'url' => '%bootstrap-url%/components/dropdowns/#responsive-alignment',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Left-aligned but right aligned when large screen',
                        'dropdown' => [
                            'alignment' => 'lg-end',
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_BUTTON,
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Left-aligned but right aligned when large screen',
                        'dropdown' => [
                            'alignment' => ['end', 'lg-start'],
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_BUTTON,
                            'items' => ['Action', 'Another action', 'Something else here'],
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Alignment options',
            'url' => '%bootstrap-url%/components/dropdowns/#alignment-options',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                // Alignments
                foreach (
                    [
                        'Dropdown' => null,
                        'Right-aligned menu' => 'end',
                        'Left-aligned, right-aligned lg' => 'lg-end',
                        'Right-aligned, left-aligned lg' => 'lg-start',
                    ] as $label => $alignment
                ) {
                    echo $view->formButton()->renderSpec([
                        'name' => 'dropdown',
                        'options' => [
                            'label' => $label,
                            'dropdown' => [
                                'alignment' => $alignment,
                                'items' => ['Action', 'Another action', 'Something else here'],
                            ],
                        ],
                    ]);

                    echo PHP_EOL . '<br/>' . PHP_EOL;
                }

                // Directions
                foreach (
                    [
                        'Dropstart' => 'start',
                        'Dropend' => 'end',
                        'Dropup' => 'up',
                    ] as $label => $direction
                ) {
                    echo $view->formButton()->renderSpec([
                        'name' => 'dropdown',
                        'options' => [
                            'label' => $label,
                            'dropdown' => [
                                'direction' => $direction,
                                'items' => ['Action', 'Another action', 'Something else here'],
                            ],
                        ],
                    ]);

                    echo PHP_EOL . '<br/>' . PHP_EOL;
                }
            },
        ],
    ],
];
