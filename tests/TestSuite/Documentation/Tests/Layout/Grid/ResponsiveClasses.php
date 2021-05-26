<?php

// Documentation test config file for "Layout / Grid / Responsive classes" part
return [
    'title' => 'Responsive classes',
    'url' => '%bootstrap-url%/layout/grid/#responsive-classes',
    'tests' => [
        [
            'title' => 'All breakpoints',
            'url' => '%bootstrap-url%/layout/grid/#all-breakpoints',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        ['col', 'col', 'col', 'col'],
                    ],
                    [
                        [
                            ['col-8', ['column' => 8]],
                            ['col-4', ['column' => 4]],
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Stacked to horizontal',
            'url' => '%bootstrap-url%/layout/grid/#stacked-to-horizontal',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        [
                            ['col-sm-8', ['column' => 'sm-8']],
                            ['col-sm-4', ['column' => 'sm-4']],
                        ],
                    ],
                    [
                        [
                            ['col-sm', ['column' => 'sm']],
                            ['col-sm', ['column' => 'sm']],
                            ['col-sm', ['column' => 'sm']],
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Mix and match',
            'url' => '%bootstrap-url%/layout/grid/#mix-and-match',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        [
                            ['.col-md-8', ['column' => 'md-8']],
                            ['.col-6 .col-md-4', ['column' => [6, 'md-4']]],
                        ],
                    ],
                    [
                        [
                            ['.col-6 .col-md-4', ['column' => [6, 'md-4']]],
                            ['.col-6 .col-md-4', ['column' => [6, 'md-4']]],
                            ['.col-6 .col-md-4', ['column' => [6, 'md-4']]],
                        ],
                    ],
                    [
                        [
                            ['.col-6', ['column' => 6]],
                            ['.col-6', ['column' => 6]],
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Row columns',
            'url' => '%bootstrap-url%/layout/grid/#row-columns',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        ['Column', 'Column', 'Column', 'Column'],
                        ['columns' => 2],
                    ],
                ]) . PHP_EOL;

                echo $view->grid([
                    [
                        ['Column', 'Column', 'Column', 'Column'],
                        ['columns' => 3],
                    ],
                ]) . PHP_EOL;

                echo $view->grid([
                    [
                        ['Column', 'Column', 'Column', 'Column'],
                        ['columns' => 'auto'],
                    ],
                ]) . PHP_EOL;

                echo $view->grid([
                    [
                        ['Column', 'Column', 'Column', 'Column'],
                        ['columns' => 4],
                    ],
                ]) . PHP_EOL;

                echo $view->grid([
                    [
                        [
                            'Column',
                            'Column',
                            ['Column', ['column' => 6]],
                            'Column',
                        ],
                        ['columns' => 4],
                    ],
                ]) . PHP_EOL;

                echo $view->grid([
                    [
                        ['Column', 'Column', 'Column', 'Column'],
                        ['columns' => [1, 'sm-2', 'md-4']],
                    ],
                ]) . PHP_EOL;
            },
        ],
    ],
];
