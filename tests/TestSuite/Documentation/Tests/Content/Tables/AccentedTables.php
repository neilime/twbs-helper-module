<?php

// Documentation test config file for "Content / Tables / Accented tables" part
return [
    'title' => 'Accented tables',
    'url' => '%bootstrap-url%/content/tables/#accented-tables',
    'tests' => [
        [
            'title' => 'Striped rows',
            'url' => '%bootstrap-url%/content/tables/#striped-rows',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Use "striped" option to add zebra-striping to any table row within the <tbody>.
                echo $view->table([
                    'striped' => true,
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // This option can also be added to table variants

                echo $view->table([
                    'striped' => true,
                    'variant' => 'dark',
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->table([
                    'striped' => true,
                    'variant' => 'success',
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Hoverable rows',
            'url' => '%bootstrap-url%/content/tables/#hoverable-rows',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Use "hover" option to add zebra-striping to any table row within the <tbody>.
                echo $view->table([
                    'hover' => true,
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->table([
                    'variant' => 'dark',
                    'hover' => true,
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // This option can also be combined with the striped option

                echo $view->table([
                    'hover' => true,
                    'striped' => true,
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Active tables',
            'url' => '%bootstrap-url%/content/tables/#active-tables',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Highlight a table row or cell by adding the "active" option.
                echo $view->table([
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['active' => true, 'cells' => ['1', 'Mark', 'Otto', '@mdo']],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        [
                            '3',
                            ['data' => 'Larry the Bird', 'active' => true, 'attributes' => ['colspan' => 2]],
                            '@twitter'
                        ],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->table([
                    'variant' => 'dark',
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['active' => true, 'cells' => ['1', 'Mark', 'Otto', '@mdo']],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        [
                            '3',
                            ['data' => 'Larry the Bird', 'active' => true, 'attributes' => ['colspan' => 2]],
                            '@twitter'
                        ],
                    ],
                ]);
            },
        ],
    ]
];
