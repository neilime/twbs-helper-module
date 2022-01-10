<?php

// Documentation test config file for "Components / Navs and tabs / Available styles / Tabs" part
return [
    'title' => 'Tabs',
    'url' => '%bootstrap-url%/components/navs-tabs/#tabs',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
            ['label' => 'Active', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
        ]), ['tabs' => true, 'page' => true]);
    },
];
