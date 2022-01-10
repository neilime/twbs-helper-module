<?php

// Documentation test config file for "Components / Navbar / Color schemes" part
return [
    'title' => 'Color schemes',
    'url' => '%bootstrap-url%/components/navbar/#color-schemes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        $navigationContainer = new \Laminas\Navigation\Navigation([
            ['label' => 'Home', 'uri' => '#', 'active' => true],
            ['label' => 'Features', 'uri' => '#'],
            ['label' => 'Pricing', 'uri' => '#'],
            ['label' => 'About', 'uri' => '#'],
        ]);

        $options = [
            'container' => 'fluid',
            'brand' => 'Navbar',
            'form' => [
                'elements' => [
                    [
                        'spec' => [
                            'name' => 'search',
                            'attributes' => [
                                'type' => 'search',
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
                                'variant' => 'outline-light',
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'class' => 'd-flex',
                ],
            ],
            'nav' => [
                'ulClass' => 'mb-2 mb-lg-0 me-auto',
            ],
        ];

        // Navbar dark, background dark
        $options['variant'] = 'dark';
        $options['background'] = 'dark';
        $options['attributes'] = ['id' => 'navbarColor01'];

        echo $view->navigation()->navbar()->render($navigationContainer, $options);
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Navbar dark, background primary
        $options['variant'] = 'dark';
        $options['background'] = 'primary';
        $options['attributes'] = ['id' => 'navbarColor02'];

        echo $view->navigation()->navbar()->render($navigationContainer, $options);
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Navbar light, custom background-color
        $options['variant'] = 'light';
        $options['background'] = false;
        $options['form']['elements'][1]['spec']['options']['variant'] = 'outline-primary';
        $options['attributes'] = ['id' => 'navbarColor03', 'style' => 'background-color: #e3f2fd;'];

        echo $view->navigation()->navbar()->render($navigationContainer, $options);
    },
];
