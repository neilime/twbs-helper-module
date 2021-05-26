<?php

// Documentation test config file for "Layout / Columns / Alignment / Horizontal alignment" part
return [
    'title' => 'Horizontal alignment',
    'url' => '%bootstrap-url%/layout/columns/#horizontal-alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                [
                    ['One of two columns', ['column' => 4]],
                    ['One of two columns', ['column' => 4]],
                ],
                ['justify_content' => 'start'],
            ],
            [
                [
                    ['One of two columns', ['column' => 4]],
                    ['One of two columns', ['column' => 4]],
                ],
                ['justify_content' => 'center'],
            ],
            [
                [
                    ['One of two columns', ['column' => 4]],
                    ['One of two columns', ['column' => 4]],
                ],
                ['justify_content' => 'end'],
            ],
            [
                [
                    ['One of two columns', ['column' => 4]],
                    ['One of two columns', ['column' => 4]],
                ],
                ['justify_content' => 'around'],
            ],
            [
                [
                    ['One of two columns', ['column' => 4]],
                    ['One of two columns', ['column' => 4]],
                ],
                ['justify_content' => 'between'],
            ],
            [
                [
                    ['One of two columns', ['column' => 4]],
                    ['One of two columns', ['column' => 4]],
                ],
                ['justify_content' => 'evenly'],
            ],
        ]);
    },
];
