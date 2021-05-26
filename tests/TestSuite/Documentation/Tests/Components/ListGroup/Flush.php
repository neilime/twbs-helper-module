<?php

// Documentation test config file for "Components / List group / Flush" part
return [
    'title' => 'Flush',
    'url' => '%bootstrap-url%/components/list-group/#flush',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup(
            [
                'An item',
                'A second item',
                'A third item',
                'A fourth item',
                'And a fifth one',
            ],
            ['flush' => true]
        );
    },
];
