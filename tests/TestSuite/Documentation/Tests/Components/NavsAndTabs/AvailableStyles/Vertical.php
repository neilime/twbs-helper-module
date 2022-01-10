<?php

// Documentation test config file for "Components / Navs and tabs / Available styles / Vertical" part
return [
    'title' => 'Vertical',
    'url' => '%bootstrap-url%/components/navs-tabs/#vertical',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->menu()->renderMenu(
            new \Laminas\Navigation\Navigation([
                ['label' => 'Active', 'uri' => '#', 'active' => true],
                ['label' => 'Link', 'uri' => '#'],
                ['label' => 'Link', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            ['vertical' => true, 'page' => true]
        ) . PHP_EOL;

        echo $view->navigation()->menu()->renderMenu(
            new \Laminas\Navigation\Navigation([
                ['label' => 'Active', 'uri' => '#', 'active' => true],
                ['label' => 'Link', 'uri' => '#'],
                ['label' => 'Link', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'vertical' => true,
                'list' => false,
                'page' => true,
            ]
        );
    },
];
