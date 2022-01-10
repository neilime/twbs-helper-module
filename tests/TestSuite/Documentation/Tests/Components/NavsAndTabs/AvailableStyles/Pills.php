<?php

// Documentation test config file for "Components / Navs and pills / Available styles / Pills" part
return [
    'title' => 'Pills',
    'url' => '%bootstrap-url%/components/navs-pills/#pills',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
            ['label' => 'Active', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
        ]), ['pills' => true, 'page' => true]);
    },
];
