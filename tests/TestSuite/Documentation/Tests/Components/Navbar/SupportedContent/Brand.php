<?php

// Documentation test config file for "Components / Navbar / Supported content / Brand" part
return [
    'title' => 'Brand',
    'url' => '%bootstrap-url%/components/navbar/#brand',
    'tests' => [
        [
            'title' => 'Text',
            'url' => '%bootstrap-url%/components/navbar/#text',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // As a link
                echo $view->navigation()->navbar()->render(
                    new \Laminas\Navigation\Navigation(),
                    [
                        'brand' => 'Navbar',
                        'expand' => false,
                        'toggler' => false,
                        'container' => 'fluid',
                    ]
                );

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // As a heading
                echo $view->navigation()->navbar()->render(
                    new \Laminas\Navigation\Navigation(),
                    [
                        'brand' => [
                            'content' => 'Navbar',
                            'attributes' => ['class' => 'mb-0 h1'],
                            'type' => 'heading',
                        ],
                        'expand' => false,
                        'toggler' => false,
                        'container' => 'fluid',
                    ]
                );
            }
        ],
        [
            'title' => 'Image',
            'url' => '%bootstrap-url%/components/navbar/#image',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->navigation()->navbar()->render(
                    new \Laminas\Navigation\Navigation(),
                    [
                        'brand' => [
                            'img' => [
                                '/twbs-helper-module/img/docs/bootstrap-solid.svg',
                                [
                                    'width' => 30,
                                    'height' => 24,
                                    'alt' => '',
                                ],
                            ],
                        ],
                        'expand' => false,
                        'toggler' => false,
                        'container' => true,
                    ]
                );
            }
        ],
        [
            'title' => 'Image and text',
            'url' => '%bootstrap-url%/components/navbar/#image-and-text',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->navigation()->navbar()->render(
                    new \Laminas\Navigation\Navigation(),
                    [
                        'brand' => [
                            'content' => 'Bootstrap',
                            'img' => [
                                '/twbs-helper-module/img/docs/bootstrap-solid.svg',
                                [
                                    'width' => 30,
                                    'height' => 24,
                                    'alt' => '',
                                ],
                            ],
                        ],
                        'expand' => false,
                        'toggler' => false,
                        'container' => 'fluid',
                    ]
                );
            },
        ],
    ],
];
