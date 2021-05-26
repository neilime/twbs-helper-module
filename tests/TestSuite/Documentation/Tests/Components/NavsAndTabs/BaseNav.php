<?php

// Documentation test config file for "Components / Navs and tabs / Base nav" part
return [
    'title' => 'Base nav',
    'url' => '%bootstrap-url%/components/navs-tabs/#base-nav',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
            ['label' => 'Active', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
        ]), ['page' => true]) . PHP_EOL;

        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
            ['label' => 'Active', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
        ]), ['list' => false, 'page' => true]);
    },
];
