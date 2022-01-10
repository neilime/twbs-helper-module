<?php

// Documentation test config file for "Components / List group / Links and buttons" part
return [
    'title' => 'Links and buttons',
    'url' => '%bootstrap-url%/components/list-group/#links-and-buttons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup([
            'The current link item' => [
                'active' => true,
                'attributes' => ['href' => '#'],
            ],
            'A second item' => ['attributes' => ['href' => '#']],
            'A third item' => ['attributes' => ['href' => '#']],
            'A fourth item' => ['attributes' => ['href' => '#']],
            'A disabled link item' => [
                'disabled' => true,
                'attributes' => ['href' => '#'],
            ],
        ], ['type' => 'action']);

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->listGroup([
            'The current button' => ['active' => true],
            'A second item',
            'A third button item',
            'A fourth button item',
            'A disabled button item' => ['disabled' => true],
        ], ['type' => 'button']);
    },
];
