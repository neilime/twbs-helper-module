<?php

// Documentation test config file for "Content / Tables / Small tables" part
return [
    'title' => 'Small Tables',
    'url' => '%bootstrap-url%/content/tables/#small-tables',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Add "size" option to make any table more compact by cutting all cell padding in half.
        echo $view->table([
            'size' => 'sm',
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
            'size' => 'sm',
            'variant' => 'dark',
            'head' => ['#', 'First', 'Last', 'Handle'],
            'body' => [
                ['1', 'Mark', 'Otto', '@mdo'],
                ['2', 'Jacob', 'Thornton', '@fat'],
                ['3', ['data' => 'Larry the Bird', 'attributes' => ['colspan' => 2]], '@twitter'],
            ],
        ]);
    },
];
