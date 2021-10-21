<?php

// Documentation test config file for "Components / Navbar / Color schemes" part
return [
    'title' => 'Color schemes',
    'url' => '%bootstrap-url%/components/navbar/#color-schemes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        $navigationContainer = new \Laminas\Navigation\Navigation([
            ['label' => 'Home <span class="sr-only">(current)</span>', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Features', 'uri' => '#'],
            ['label' => 'Pricing', 'uri' => '#'],
            ['label' => 'About', 'uri' => '#'],
        ]);

        $options = [
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
                                'class' => 'mr-sm-2',
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
            ],
        ];

        // Navbar dark, background dark
        $options['variant'] = 'dark';
        $options['background'] = 'dark';

        echo $view->navigation()->navbar()->render($navigationContainer, $options);
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Navbar dark, background primary
        $options['variant'] = 'dark';
        $options['background'] = 'primary';

        echo $view->navigation()->navbar()->render($navigationContainer, $options);
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Navbar light, custom background-color
        $options['variant'] = 'dark';
        $options['background'] = false;
        $options['attributes'] = ['style' => 'background-color: #e3f2fd;'];

        echo $view->navigation()->navbar()->render($navigationContainer, $options);
    },
];
