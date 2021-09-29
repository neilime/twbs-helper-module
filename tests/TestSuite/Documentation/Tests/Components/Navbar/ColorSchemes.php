<?php

// Documentation test config file for "Components / Navbar / Color schemes" part
return [
    'title' => 'Color schemes',
    'url' => '%bootstrap-url%/components/navbar/#color-schemes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

        $oNavigationContainer = new \Laminas\Navigation\Navigation([
            ['label' => 'Home <span class="sr-only">(current)</span>', 'uri' => '#', 'active' => true],
            ['label' => 'Link', 'uri' => '#'],
            ['label' => 'Features', 'uri' => '#'],
            ['label' => 'Pricing', 'uri' => '#'],
            ['label' => 'About', 'uri' => '#'],
        ]);

        $aOptions = [
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
        $aOptions['variant'] = 'dark';
        $aOptions['background'] = 'dark';

        echo $oView->navigation()->navbar()->render($oNavigationContainer, $aOptions);
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Navbar dark, background primary
        $aOptions['variant'] = 'dark';
        $aOptions['background'] = 'primary';

        echo $oView->navigation()->navbar()->render($oNavigationContainer, $aOptions);
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Navbar light, custom background-color
        $aOptions['variant'] = 'dark';
        $aOptions['background'] = false;
        $aOptions['attributes'] = ['style' => 'background-color: #e3f2fd;'];

        echo $oView->navigation()->navbar()->render($oNavigationContainer, $aOptions);
    },
];
