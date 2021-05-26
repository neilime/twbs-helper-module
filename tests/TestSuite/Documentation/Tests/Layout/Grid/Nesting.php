<?php

// Documentation test config file for "Layout / Grid / Nesting" part
return [
    'title' => 'Nesting',
    'url' => '%bootstrap-url%/layout/grid/#nesting',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                [
                    ['Level 1: .col-sm-3', ['column' => 'sm-3']],
                    [
                        null,
                        [
                            'column' => 'sm-9',
                            'grid' => [
                                'rows' => [
                                    [
                                        [
                                            ['Level 2: .col-8 .col-sm-6', ['column' => [8, 'sm-6']]],
                                            ['Level 2: .col-4 .col-sm-6', ['column' => [4, 'sm-6']]],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    },
];
