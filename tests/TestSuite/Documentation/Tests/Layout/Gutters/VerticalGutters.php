<?php

// Documentation test config file for "Layout / Gutters / Vertical gutters" part
return [
    'title' => 'Vertical gutters',
    'url' => '%bootstrap-url%/layout/gutters/#vertical-gutters',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                [
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Custom column padding' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Custom column padding' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Custom column padding' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Custom column padding' . PHP_EOL .
                        '</div>',
                ],
                [
                    'column' => 6,
                    'gutter' => ['vertical' => '5'],
                ],
            ],
        ], ['class' => 'overflow-hidden']);
    },
];
