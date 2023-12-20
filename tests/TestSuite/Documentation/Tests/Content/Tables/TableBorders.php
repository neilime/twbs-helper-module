<?php

// Documentation test config file for "Content / Tables / Table borders" part
return [
    'title' => 'Table borders',
    'url' => '%bootstrap-url%/content/tables/#table-borders',
    'tests' => [
        [
            'title' => 'Bordered tables',
            'url' => '%bootstrap-url%/content/tables/#bordered-tables',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Add "bordered" option for borders on all sides of the table and cells
                echo $view->table([
                    'bordered' => true,
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // "bordered" option can be a variant to change colors
                echo $view->table([
                    'bordered' => 'primary',
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
            'title' => 'Tables without borders',
            'url' => '%bootstrap-url%/content/tables/#tables-without-borders',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                // Add "borderless" option for a table without borders
                echo $view->table([
                    'borderless' => true,
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // This option can also be combined with the "variant" option
                echo $view->table([
                    'borderless' => true,
                    'variant' => 'dark',
                    'head' => ['#', 'First', 'Last', 'Handle'],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);
            },
        ],
    ],
];
