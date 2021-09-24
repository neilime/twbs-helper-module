<?php

// Documentation test config file for "Components / Navbar / Containers" part
return [
    'title' => 'Containers',
    'url' => '%bootstrap-url%/components/navbar/#containers',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'brand' => 'Navbar',
                'container' => 'wrap',
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'brand' => 'Navbar',
                'container' => 'within',
                'toggler' => false,
            ]
        );
    },
];
