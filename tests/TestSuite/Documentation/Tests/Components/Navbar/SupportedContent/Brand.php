<?php

// Documentation test config file for "Components / Navbar / Supported content / Brand" part
return [
    'title' => 'Brand',
    'url' => '%bootstrap-url%/components/navbar/#brand',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        // As a link
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'brand' => 'Navbar',
                'expand' => false,
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // As a heading
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'brand' => [
                    'content' => 'Navbar',
                    'attributes' => ['class' => 'mb-0 h1'],
                    'type' => 'heading',
                ],
                'expand' => false,
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Just an image
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'brand' => [
                    'img' => [
                        '/twbs-helper-module/img/docs/bootstrap-solid.svg',
                    ],
                ],
                'expand' => false,
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Image and text
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'brand' => [
                    'content' => 'Bootstrap',
                    'img' => [
                        '/twbs-helper-module/img/docs/bootstrap-solid.svg',
                        [
                            'width' => 30,
                            'height' => 30,
                            'alt' => '',
                        ],
                    ],
                ],
                'expand' => false,
                'toggler' => false,
            ]
        );
    },

];
