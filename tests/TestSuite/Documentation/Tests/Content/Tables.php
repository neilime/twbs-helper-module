<?php

// Documentation test config file for "Content / Tables" part
return [
    'title' => 'Tables',
    'url' => '%bootstrap-url%/content/tables/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/content/tables/#examples',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ], ['class' => 'table-dark']);
            },
        ],
        [
            'title' => 'Table head options',
            'url' => '%bootstrap-url%/content/tables/#table-head-options',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // First table (head dark)
                echo $view->table([
                    'head' => [
                        'attributes' => ['class' => 'thead-dark'],
                        'rows' => ['#', 'First', 'Last', 'Handle'],
                    ],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Second table (head light)
                echo $view->table([
                    'head' => [
                        'attributes' => ['class' => 'thead-light'],
                        'rows' => ['#', 'First', 'Last', 'Handle'],
                    ],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Striped rows',
            'url' => '%bootstrap-url%/content/tables/#striped-rows',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // First table (head striped)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ], ['class' => 'table-striped']);


                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Second table (head striped & dark)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ], ['class' => 'table-striped table-dark']);
            },
        ],
        [
            'title' => 'Bordered table',
            'url' => '%bootstrap-url%/content/tables/#bordered-table',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // First table (bordered)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-bordered']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // First table (bordered & dark)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-bordered table-dark']);
            },
        ],
        [
            'title' => 'Borderless table',
            'url' => '%bootstrap-url%/content/tables/#borderless-table',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                // First table (borderless)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-borderless']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Second table (borderless & dark)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-borderless table-dark']);
            },
        ],
        [
            'title' => 'Hoverable rows',
            'url' => '%bootstrap-url%/content/tables/#hoverable-rows',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // First table (hoverable)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-hover']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Second table (hoverable & dark)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-hover table-dark']);
            },
        ],
        [
            'title' => 'Small Table',
            'url' => '%bootstrap-url%/content/tables/#small-table',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // First table (small)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-sm']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Second table (small & dark)
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ], ['class' => 'table-sm table-dark']);
            },
        ],
        [
            'title' => 'Contextual classes',
            'url' => '%bootstrap-url%/content/tables/#contextual-classes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // First table
                echo $view->table([
                    'head' => ['Class', 'Heading', 'Heading'],
                    'body' => [
                        [
                            'attributes' => ['class' => 'table-active'],
                            'cells' => ['Active', 'Cell', 'Cell'],
                        ],
                        ['Default', 'Cell', 'Cell'],
                        [
                            'attributes' => ['class' => 'table-primary'],
                            'cells' => ['Primary', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-secondary'],
                            'cells' => ['Secondary', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-success'],
                            'cells' => ['Success', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-danger'],
                            'cells' => ['Danger', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-warning'],
                            'cells' => ['Warning', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-info'],
                            'cells' => ['Info', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-light'],
                            'cells' => ['Light', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'table-dark'],
                            'cells' => ['Dark', 'Cell', 'Cell'],
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Second table (dark)
                echo $view->table([
                    'head' => ['Class', 'Heading', 'Heading'],
                    'body' => [
                        [
                            'attributes' => ['class' => 'bg-active'],
                            'cells' => ['Active', 'Cell', 'Cell'],
                        ],
                        ['Default', 'Cell', 'Cell'],
                        [
                            'attributes' => ['class' => 'bg-primary'],
                            'cells' => ['Primary', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-secondary'],
                            'cells' => ['Secondary', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-success'],
                            'cells' => ['Success', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-danger'],
                            'cells' => ['Danger', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-warning'],
                            'cells' => ['Warning', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-info'],
                            'cells' => ['Info', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-light'],
                            'cells' => ['Light', 'Cell', 'Cell'],
                        ],
                        [
                            'attributes' => ['class' => 'bg-dark'],
                            'cells' => ['Dark', 'Cell', 'Cell'],
                        ],
                    ],
                ], ['class' => 'table-dark']);
            },
        ],
        [
            'title' => 'Captions',
            'url' => '%bootstrap-url%/content/tables/#captions',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->table([
                    'caption' => 'List of users',
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Responsive classes',
            'url' => '%bootstrap-url%/content/tables/#responsive-tables',
            'tests' => [
                [
                    'title' => 'Always responsive',
                    'url' => '%bootstrap-url%/content/tables/#always-responsive',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->table([
                            'responsive' => true,
                            'head' => [
                                '#', 'Heading', 'Heading', 'Heading', 'Heading',
                                'Heading', 'Heading', 'Heading', 'Heading', 'Heading',
                            ],
                            'body' => [
                                ['1', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                ['2', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                ['3', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                            ],
                        ]);
                    },
                ],
                [
                    'title' => 'Breakpoint specific',
                    'url' => '%bootstrap-url%/content/tables/#breakpoint-specific',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        foreach (['sm', 'md', 'lg', 'xl'] as $key => $size) {
                            if ($key) {
                                echo PHP_EOL . '<br/>' . PHP_EOL;
                            }

                            echo $view->table([
                                'responsive' => $size,
                                'head' => [
                                    '#', 'Heading', 'Heading', 'Heading', 'Heading',
                                    'Heading', 'Heading', 'Heading', 'Heading', 'Heading',
                                ],
                                'body' => [
                                    ['1', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                    ['2', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                    ['3', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                                ],
                            ]);
                        }
                    },
                ],
            ],
        ],
    ],
];
