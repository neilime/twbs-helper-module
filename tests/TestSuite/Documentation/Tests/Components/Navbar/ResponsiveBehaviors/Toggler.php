<?php

// Documentation test config file for "Components / Navbar / Responsive behaviors / Toggler" part
return [
    'title' => 'Toggler',
    'url' => '%bootstrap-url%/components/navbar/#toggler',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $navigation = new \Laminas\Navigation\Navigation(
            [
                ['label' => 'Home', 'uri' => '#', 'active' => true],
                ['label' => 'Link', 'uri' => '#'],
                [
                    'label' => 'Disabled',
                    'uri' => '#',
                    'visible' => false,
                ],
            ],
        );

        $options = [
            'container' => 'fluid',
            'nav' => [
                'ulClass' => 'mb-2 mb-lg-0 me-auto',
            ],
            'form' => [
                'elements' => [
                    [
                        'spec' => [
                            'type' => 'search',
                            'attributes' => [
                                'placeholder' => 'Search',
                                'aria-label' => 'Search',
                                'class' => 'me-2',
                            ],
                        ],
                    ],
                    [
                        'spec' => [
                            'type' => 'submit',
                            'options' => [
                                'label' => 'Search',
                                'variant' => 'outline-success',
                            ],
                        ],
                    ],
                ],
                'attributes' => ['class' => 'd-flex'],
            ],
        ];


        $options['brand'] = [
            'content' => 'Hidden brand',
            'position' => 'hidden',
        ];
        $options['attributes'] = ['id' => 'navbarTogglerDemo01'];
        echo $view->navigation()->navbar()->render(
            $navigation,
            $options
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        $options['brand'] = [
            'content' => 'Navbar',
            'position' => 'left',
        ];
        $options['attributes'] = ['id' => 'navbarTogglerDemo02'];
        echo $view->navigation()->navbar()->render(
            $navigation,
            $options
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        $options['brand'] = [
            'content' => 'Navbar',
            'position' => 'right',
        ];
        $options['attributes'] = ['id' => 'navbarTogglerDemo03'];
        echo $view->navigation()->navbar()->render(
            $navigation,
            $options
        );
    },
];
