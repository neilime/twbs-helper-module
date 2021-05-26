<?php

// Documentation test config file for "Components / Navs and tabs / Available styles / Horizontal alignment" part
return [
    'title' => 'Horizontal alignment',
    'url' => '%bootstrap-url%/components/navs-tabs/#horizontal-alignment',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Centered with option 'center'
        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
            ['label' => 'Active', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
        ]), ['centered' => true, 'page' => true]) . PHP_EOL;

        // Right-aligned with option 'right_aligned'
        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
            ['label' => 'Active', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
        ]), ['right_aligned' => true, 'page' => true]);
    },
];
