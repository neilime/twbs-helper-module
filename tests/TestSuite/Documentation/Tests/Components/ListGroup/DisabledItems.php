<?php

// Documentation test config file for "Components / List group / Disabled items" part
return [
    'title' => 'Disabled items',
    'url' => '%bootstrap-url%/components/list-group/#disabled-items',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup([
            'A disabled item' => ['disabled' => true],
            'A second item',
            'A third item',
            'A fourth item',
            'And a fifth one',
        ]);
    },
];
