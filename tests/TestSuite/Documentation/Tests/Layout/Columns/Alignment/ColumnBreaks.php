<?php

// Documentation test config file for "Layout / Columns / Alignment / Column breaks" part
return [
    'title' => 'Column breaks',
    'url' => '%bootstrap-url%/layout/columns/#column-breaks',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                [
                    ['.col-6 .col-sm-3'],
                    ['.col-6 .col-sm-3'],
                    [null, ['divider' => true]],
                    ['.col-6 .col-sm-3'],
                    ['.col-6 .col-sm-3'],
                ],
                ['column' => [6, 'sm-3']],
            ],
        ]) . PHP_EOL;

        echo $view->grid([
            [
                [
                    ['.col-6 .col-sm-4'],
                    ['.col-6 .col-sm-4'],
                    [null, ['divider' => 'md']],
                    ['.col-6 .col-sm-4'],
                    ['.col-6 .col-sm-4'],
                ],
                ['column' => [6, 'sm-4']],
            ],
        ]);
    },
];
