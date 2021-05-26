<?php

// Documentation test config file for "Layout / Gutters / Row columns gutters" part
return [
    'title' => 'Row columns gutters',
    'url' => '%bootstrap-url%/layout/gutters/#row-columns-gutters',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                [
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Row column' . PHP_EOL .
                        '</div>',
                ],
                [
                    'columns' => [2, 'lg-5'],
                    'gutter' => [2, 'lg-3'],
                ],
            ],
        ]);
    },
];
