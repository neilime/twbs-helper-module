<?php

// Documentation test config file for "Layout / Gutters / No gutters" part
return [
    'title' => 'No gutters',
    'url' => '%bootstrap-url%/layout/gutters/#no-gutters',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->gridRow(
            [
                ['.col-sm-6 .col-md-8', ['column' => ['sm-6', 'md-8']]],
                ['.col-6 .col-md-4', ['column' => [6, 'md-4']]],
            ],
            ['gutter' => 0],
        );
    },
];
