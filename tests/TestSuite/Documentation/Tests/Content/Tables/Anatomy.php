<?php

// Documentation test config file for "Content / Tables / Anatomy" part
return [
    'title' => 'Anatomy',
    'url' => '%bootstrap-url%/content/tables/#anatomy',
    'tests' => [
        [
            'title' => 'Table head',
            'url' => '%bootstrap-url%/content/tables/#table-head',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Use the option "variant" to make <thead>s appear light or dark gray.
                echo $view->table([
                    'head' => [
                        'variant' => 'light',
                        'cells' => ['#', 'First', 'Last', 'Handle'],
                    ],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->table([
                    'head' => [
                        'variant' => 'dark',
                        'cells' => ['#', 'First', 'Last', 'Handle'],
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
            'title' => 'Table foot',
            'url' => '%bootstrap-url%/content/tables/#table-foot',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->table([
                    'head' => [
                        'variant' => 'light',
                        'cells' => ['#', 'First', 'Last', 'Handle'],
                    ],
                    'body' => [
                        ['1', 'Mark', 'Otto', '@mdo'],
                        ['2', 'Jacob', 'Thornton', '@fat'],
                        ['3', 'Larry', 'the Bird', '@twitter'],
                    ],
                    'footer' => ['Footer', 'Footer', 'Footer', 'Footer'],
                ]);
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
                        ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // You can also put the <caption> on the top of the table with the "captionTop" option
                echo $view->table([
                    'captionTop' => 'List of users',
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
