<?php

// Documentation test config file for "Layout / Gutters / Horizontal gutters" part
return [
    'title' => 'Horizontal gutters',
    'url' => '%bootstrap-url%/layout/gutters/#horizontal-gutters',
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
                ],
                ['gutter' => ['horizontal' => '5']],
            ],
        ], ['class' => 'px-4']) . PHP_EOL;

        echo $view->grid([
            [
                [
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Custom column padding' . PHP_EOL .
                        '</div>',
                    '<div class="bg-light border p-3">' . PHP_EOL .
                        '    Custom column padding' . PHP_EOL .
                        '</div>',
                ],
                ['gutter' => ['horizontal' => '5']],
            ],
        ], ['class' => 'overflow-hidden']);
    },
];
