<?php

// Documentation test config file for "Components / List group / BasicExample" part
return [
    'title' => 'Basic example',
    'url' => '%bootstrap-url%/components/list-group/#basic-example',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup([
            'An item',
            'A second item',
            'A third item',
            'A fourth item',
            'And a fifth one',
        ]);
    },
];
