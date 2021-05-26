<?php

// Documentation test config file for "Components / Navs and tabs / Working with flex utilities" part
return [
    'title' => 'Working with flex utilities',
    'url' => '%bootstrap-url%/components/navs-tabs/#working-with-flex-utilities',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->menu()->renderMenu(new \Laminas\Navigation\Navigation([
            ['label' => 'Active', 'uri' => '#', 'active' => true, 'class' => 'flex-sm-fill text-sm-center'],
            ['label' => 'Longer nav link', 'uri' => '#', 'class' => 'flex-sm-fill text-sm-center'],
            ['label' => 'Link', 'uri' => '#', 'class' => 'flex-sm-fill text-sm-center'],
            ['label' => 'Disabled', 'uri' => '#', 'visible' => false, 'class' => 'flex-sm-fill text-sm-center'],
        ]), [
            'page' => true,
            'list' => false,
            'pills' => true,
            'ulClass' => 'flex-column flex-sm-row nav',
        ]);
    },
];
