<?php

// Documentation test config file for "Components / Navs" part
return [
    'title' => 'Navs',
    'url' => '%bootstrap-url%/components/navs/',
    'tests' => [
        [
            'title' => 'Base nav',
            'url' => '%bootstrap-url%/components/navs/#base-nav',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->navigation()->menu(new \Laminas\Navigation\Navigation([
                    ['label' => 'Active', 'uri' => '#', 'active' => true],
                    ['label' => 'Link', 'uri' => '#'],
                    ['label' => 'Link', 'uri' => '#'],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                ])) . PHP_EOL;

                echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
                    ['label' => 'Active', 'uri' => '#', 'active' => true],
                    ['label' => 'Link', 'uri' => '#'],
                    ['label' => 'Link', 'uri' => '#'],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                ]), ['list' => false]);
            },
        ],
        [
            'title' => 'Available styles',
            'url' => '%bootstrap-url%/components/navs/#available-styles',
            'tests' => [
                [
                    'title' => 'Horizontal alignment',
                    'url' => '%bootstrap-url%/components/navs/#horizontal-alignment',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        // Centered with option 'center'
                        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
                            ['label' => 'Active', 'uri' => '#', 'active' => true],
                            ['label' => 'Link', 'uri' => '#'],
                            ['label' => 'Link', 'uri' => '#'],
                            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                        ]), ['centered' => true]) . PHP_EOL;

                        // Right-aligned with option 'right_aligned'
                        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
                            ['label' => 'Active', 'uri' => '#', 'active' => true],
                            ['label' => 'Link', 'uri' => '#'],
                            ['label' => 'Link', 'uri' => '#'],
                            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                        ]), ['right_aligned' => true]);
                    },
                ],
                [
                    'title' => 'Vertical',
                    'url' => '%bootstrap-url%/components/navs/#vertical',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->navigation()->menu()->renderMenu(
                            new \Laminas\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            ['vertical' => true]
                        ) . PHP_EOL;

                        echo $view->navigation()->menu()->renderMenu(
                            new \Laminas\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'vertical' => true,
                                'list' => false,
                            ]
                        );
                    },
                ],
                [
                    'title' => 'Tabs',
                    'url' => '%bootstrap-url%/components/navs/#tabs',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
                            ['label' => 'Active', 'uri' => '#', 'active' => true],
                            ['label' => 'Link', 'uri' => '#'],
                            ['label' => 'Link', 'uri' => '#'],
                            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                        ]), ['tabs' => true]);
                    },
                ],
                [
                    'title' => 'Pills',
                    'url' => '%bootstrap-url%/components/navs/#pills',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
                            ['label' => 'Active', 'uri' => '#', 'active' => true],
                            ['label' => 'Link', 'uri' => '#'],
                            ['label' => 'Link', 'uri' => '#'],
                            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                        ]), ['pills' => true]);
                    },
                ],
                [
                    'title' => 'Fill and justify',
                    'url' => '%bootstrap-url%/components/navs/#fill-and-justify',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->navigation()->menu()->renderMenu(
                            new \Laminas\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Much longer nav link', 'uri' => '#'],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'pills' => true,
                                'fill' => true,
                            ]
                        );

                        echo PHP_EOL . '<br/>' . PHP_EOL;

                        echo $view->navigation()->menu()->renderMenu(
                            new \Laminas\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Much longer nav link', 'uri' => '#'],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'pills' => true,
                                'fill' => true,
                                'list' => false,
                            ]
                        );

                        echo PHP_EOL . '<br/>' . PHP_EOL;

                        echo $view->navigation()->menu()->renderMenu(
                            new \Laminas\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Much longer nav link', 'uri' => '#'],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'pills' => true,
                                'justified' => true,
                                'list' => false,
                            ]
                        );
                    },
                ],
                [
                    'title' => 'Working with flex utilities',
                    'url' => '%bootstrap-url%/components/navs/#working-with-flex-utilities',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->navigation()->menu()->renderMenu(
                            new \Laminas\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                ['label' => 'Longer nav link', 'uri' => '#'],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'list' => false,
                                'pills' => true,
                                'vertical' => 'sm',
                            ]
                        );
                    },
                ],
            ],
        ],
        [
            'title' => 'Using dropdowns',
            'url' => '%bootstrap-url%/components/navs/#using-dropdowns',
            'tests' => [
                [
                    'title' => 'Tabs with dropdowns',
                    'url' => '%bootstrap-url%/components/navs/#tabs-with-dropdowns',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->navigation()->menu()->renderMenu(
                            new \Laminas\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                [
                                    'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                                    'label' => 'Dropdown',
                                    'dropdown' => [
                                        'Action',
                                        'Another action',
                                        'Something else here',
                                        '---',
                                        'Separated link',
                                    ],
                                ],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            ['tabs' => true]
                        );
                    },
                ],
                [
                    'title' => 'Pills with dropdowns',
                    'url' => '%bootstrap-url%/components/navs/#pills-with-dropdowns',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->navigation()->menu()->renderMenu(
                            new \Laminas\Navigation\Navigation([
                                ['label' => 'Active', 'uri' => '#', 'active' => true],
                                [
                                    'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                                    'label' => 'Dropdown',
                                    'dropdown' => [
                                        'Action',
                                        'Another action',
                                        'Something else here',
                                        '---',
                                        'Separated link',
                                    ],
                                ],
                                ['label' => 'Link', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            ['pills' => true]
                        );
                    },
                ],
            ],
        ],
    ],
];
