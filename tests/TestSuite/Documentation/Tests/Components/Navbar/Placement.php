<?php

// Documentation test config file for "Components / Navbar / Placement" part
return [
    'title' => 'Placement',
    'url' => '%bootstrap-url%/components/navbar/#placement',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        foreach (
            [
            false => 'Default',
            'fixed-top' => 'Fixed top',
            'fixed-bottom' => 'Fixed bottom',
            'sticky-top' => 'Sticky top',
            ] as $placement => $brand
        ) {
            echo $view->navigation()->navbar()->render(
                new \Laminas\Navigation\Navigation(),
                [
                    'brand' => $brand,
                    'placement' => $placement,
                    'toggler' => false,
                    'expand' => false,
                ]
            );
            echo PHP_EOL . '<br/>' . PHP_EOL;
        }
    },
];
