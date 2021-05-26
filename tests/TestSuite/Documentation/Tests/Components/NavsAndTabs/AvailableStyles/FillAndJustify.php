<?php

// Documentation test config file for "Components / Navs and pills / Available styles / Fill and justify" part
return [
    'title' => 'Fill and justify',
    'url' => '%bootstrap-url%/components/navs-pills/#fill-and-justify',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->menu()->renderMenu(
            new \Laminas\Navigation\Navigation([
                ['label' => 'Active', 'uri' => '#', 'active' => true],
                ['label' => 'Much longer nav link', 'uri' => '#'],
                ['label' => 'Link', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'pills' => true,
                'fill' => true,
                'page' => true,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->navigation()->menu()->renderMenu(
            new \Laminas\Navigation\Navigation([
                ['label' => 'Active', 'uri' => '#', 'active' => true],
                ['label' => 'Much longer nav link', 'uri' => '#'],
                ['label' => 'Link', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'pills' => true,
                'fill' => true,
                'list' => false,
                'page' => true,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->navigation()->menu()->renderMenu(
            new \Laminas\Navigation\Navigation([
                ['label' => 'Active', 'uri' => '#', 'active' => true],
                ['label' => 'Much longer nav link', 'uri' => '#'],
                ['label' => 'Link', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'pills' => true,
                'justified' => true,
                'page' => true,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->navigation()->menu()->renderMenu(
            new \Laminas\Navigation\Navigation([
                ['label' => 'Active', 'uri' => '#', 'active' => true],
                ['label' => 'Much longer nav link', 'uri' => '#'],
                ['label' => 'Link', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'pills' => true,
                'justified' => true,
                'list' => false,
                'page' => true,
            ]
        );
    },
];
