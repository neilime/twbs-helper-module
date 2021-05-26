<?php

// Documentation test config file for "Layout / Columns / Alignment / Vertical alignment" part
return [
    'title' => 'Vertical alignment',
    'url' => '%bootstrap-url%/layout/columns/#vertical-alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                ['One of three columns', 'One of three columns', 'One of three columns'],
                ['align' => 'start'],
            ],
            [
                ['One of three columns', 'One of three columns', 'One of three columns'],
                ['align' => 'center'],
            ],
            [
                ['One of three columns', 'One of three columns', 'One of three columns'],
                ['align' => 'end'],
            ],
        ]) . PHP_EOL;

        echo $view->grid([
            [
                [
                    ['One of three columns', ['align' => 'start']],
                    ['One of three columns', ['align' => 'center']],
                    ['One of three columns', ['align' => 'end']],
                ],
            ],
        ]);
    },
];
