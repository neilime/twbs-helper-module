<?php

// Documentation test config file for "Layout / Grid / Auto-layout columns" part
return [
    'title' => 'Auto-layout columns',
    'url' => '%bootstrap-url%/layout/grid/#auto-layout-columns',
    'tests' => [
        [
            'title' => 'Equal-width',
            'url' => '%bootstrap-url%/layout/grid/#equal-width',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        [
                            '1 of 2',
                            '2 of 2',
                        ],
                    ],
                    [
                        [
                            '1 of 3',
                            '2 of 3',
                            '3 of 3',
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Setting one column width',
            'url' => '%bootstrap-url%/layout/grid/#setting-one-column-width',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        [
                            '1 of 3',
                            ['2 of 3 (wider)', ['column' => 6]],
                            '3 of 3',
                        ],
                    ],
                    [
                        [
                            '1 of 3',
                            ['2 of 3 (wider)', ['column' => 5]],
                            '3 of 3',
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Variable width content',
            'url' => '%bootstrap-url%/layout/grid/#variable-width-content',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        [
                            ['1 of 3', ['column' => [true, 'lg-2']]],
                            ['Variable width content', ['column' => 'md-auto']],
                            ['3 of 3', ['column' => [true, 'lg-2']]],
                        ],
                        [
                            'justify_content' => 'md-center',
                        ],
                    ],
                    [
                        [
                            '1 of 3',
                            ['Variable width content', ['column' => 'md-auto']],
                            ['3 of 3', ['column' => [true, 'lg-2']]],
                        ],
                    ],
                ]);
            },
        ],
    ],
];
