<?php

// Documentation test config file for "Layout / Grid / Example" part
return [
    'title' => 'Example',
    'url' => '%bootstrap-url%/layout/grid/#example',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->grid([
            [
                [
                    'Column',
                    'Column',
                    'Column',
                ],
            ],
        ]);
    },
];
