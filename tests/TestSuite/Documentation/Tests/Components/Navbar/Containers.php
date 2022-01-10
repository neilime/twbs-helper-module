<?php

// Documentation test config file for "Components / Navbar / Containers" part
return [
    'title' => 'Containers',
    'url' => '%bootstrap-url%/components/navbar/#containers',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'brand' => 'Navbar',
                'wrapping_container' => true,
                'container' => 'fluid',
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'brand' => 'Navbar',
                'container' => 'md',
                'toggler' => false,
            ]
        );
    },
];
