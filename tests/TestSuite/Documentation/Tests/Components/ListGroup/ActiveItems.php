<?php

// Documentation test config file for "Components / List group / Active items" part
return [
    'title' => 'Active items',
    'url' => '%bootstrap-url%/components/list-group/#active-items',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup([
            'An active item' => ['active' => true],
            'A second item',
            'A third item',
            'A fourth item',
            'And a fifth one',
        ]);
    },
];
