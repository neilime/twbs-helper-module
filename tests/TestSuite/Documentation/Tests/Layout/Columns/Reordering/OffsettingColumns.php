<?php

// Documentation test config file for "Layout / Columns / Reordering / Offsetting columns" part
return [
    'title' => 'Offsetting columns',
    'url' => '%bootstrap-url%/layout/columns/#offsetting-columns',
    'tests' => [
        [
            'title' => 'Offset classes',
            'url' => '%bootstrap-url%/layout/columns/#offset-classes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        [
                            ['.col-md-4', ['column' => 'md-4']],
                            ['.col-md-4 .offset-md-4', ['column' => 'md-4', 'offset' => 'md-4']],
                        ],
                    ],
                    [
                        [
                            ['.col-md-3 .offset-md-3', ['column' => 'md-3', 'offset' => 'md-3']],
                            ['.col-md-3 .offset-md-3', ['column' => 'md-3', 'offset' => 'md-3']],
                        ],
                    ],
                    [
                        [
                            ['.col-md-6 .offset-md-3', ['column' => 'md-6', 'offset' => 'md-3']],
                        ],
                    ],
                ]) . PHP_EOL;

                echo $view->grid([
                    [
                        [
                            ['.col-sm-5 .col-md-6', ['column' => ['sm-5', 'md-6']]],
                            [
                                '.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0',
                                [
                                    'column' => ['sm-5', 'md-6'],
                                    'offset' => ['sm-2', 'md-0'],
                                ],
                            ],
                        ],
                    ],
                    [
                        [
                            [
                                '.col-sm-6 .col-md-5 .col-lg-6',
                                ['column' => ['sm-6', 'md-5', 'lg-6']],
                            ],
                            [
                                '.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0',
                                [
                                    'column' => ['sm-6', 'md-5', 'lg-6'],
                                    'offset' => ['md-2', 'lg-0'],
                                ],
                            ],
                        ],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Margin utilities',
            'url' => '%bootstrap-url%/layout/columns/#margin-utilities',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->grid([
                    [
                        [
                            ['.col-md-4', ['column' => 'md-4']],
                            ['.col-md-4 .ms-auto', ['column' => 'md-4', 'class' => 'ms-auto']],
                        ],
                    ],
                    [
                        [
                            ['.col-md-3 .ms-md-auto', ['column' => 'md-3', 'class' => 'ms-md-auto']],
                            ['.col-md-3 .ms-md-auto', ['column' => 'md-3', 'class' => 'ms-md-auto']],
                        ],
                    ],
                    [
                        [
                            ['.col-auto .me-auto', ['column' => 'auto', 'class' => 'me-auto']],
                            ['.col-auto', ['column' => 'auto']],
                        ],
                    ],
                ]);
            },
        ]
    ],
];
