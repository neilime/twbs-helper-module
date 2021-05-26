<?php

// Documentation test config file for "Content / Tables / Variants" part
return [
    'title' => 'Variants',
    'url' => '%bootstrap-url%/content/tables/#variants',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Use "variant" option to color tables, table rows or individual cells.
        echo $view->table([
            'head' => ['Class', 'Heading', 'Heading'],
            'body' => [
                ['Default', 'Cell', 'Cell'],
                [
                    'variant' => 'primary',
                    'cells' => ['Primary', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'secondary',
                    'cells' => ['Secondary', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'success',
                    'cells' => ['Success', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'danger',
                    'cells' => ['Danger', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'warning',
                    'cells' => ['Warning', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'info',
                    'cells' => ['Info', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'light',
                    'cells' => ['Light', 'Cell', 'Cell'],
                ],
                [
                    'variant' => 'dark',
                    'cells' => ['Dark', 'Cell', 'Cell'],
                ],
            ],
        ]);
    },
];
