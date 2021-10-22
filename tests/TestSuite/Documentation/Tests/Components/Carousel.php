<?php

// Documentation test config file for "Components / Carousel" part
return [
    'title' => 'Carousel',
    'url' => '%bootstrap-url%/components/carousel/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/carousel/#example',
            'tests' => [
                [
                    'title' => 'Slides only',
                    'url' => '%bootstrap-url%/components/carousel/#slides-only',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleSlidesOnly']);
                    },
                ],
                [
                    'title' => 'With controls',
                    'url' => '%bootstrap-url%/components/carousel/#with-controls',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleControls', 'controls' => true]);
                    },
                ],
                [
                    'title' => 'With indicators',
                    'url' => '%bootstrap-url%/components/carousel/#with-indicators',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleIndicators', 'controls' => true, 'indicators' => true]);
                    },
                ],
                [
                    'title' => 'With captions',
                    'url' => '%bootstrap-url%/components/carousel/#with-captions',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => [
                                    'active' => true,
                                    'alt' => 'Slide 1',
                                    'caption' => [
                                        'title' => 'First slide label',
                                        'text' => 'Nulla vitae elit libero, a pharetra augue mollis interdum.',
                                    ],
                                ]
                            ],
                            [
                                '/twbs-helper-module/img/docs/400x300.svg',
                                [
                                    'alt' => 'Slide 2',
                                    'caption' => [
                                        'title' => 'Second slide label',
                                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                                    ],
                                ],
                            ],
                            '/twbs-helper-module/img/docs/400x300.svg' => [
                                'alt' => 'Slide 3',
                                'caption' => [
                                    'title' => 'Third slide label',
                                    'text' => 'Praesent commodo cursus magna, vel scelerisque nisl consectetur.',
                                ],
                            ],
                        ], [
                            'id' => 'carouselExampleCaptions',
                            'controls' => true,
                            'indicators' => true,
                        ]);
                    },
                ],
                [
                    'title' => 'Crossfade',
                    'url' => '%bootstrap-url%/components/carousel/#crossfade',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->carousel([
                            [
                                'src' => '/twbs-helper-module/img/docs/400x300.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleFade', 'controls' => true, 'crossfade' => true]);
                    },
                ],
                [
                    'title' => 'Individual .carousel-item interval',
                    'url' => '%bootstrap-url%/components/carousel/#individual-carousel-item-interval',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->carousel([
                            ['src' => '/twbs-helper-module/img/docs/400x300.svg', 'optionsAndAttributes' => [
                                'interval' => 10000,
                                'active' => true,
                                'alt' => 'Slide 1',
                            ]],
                            ['/twbs-helper-module/img/docs/400x300.svg', ['interval' => 2000, 'alt' => 'Slide 2',]],
                            '/twbs-helper-module/img/docs/400x300.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleControls', 'controls' => true]);
                    },
                ],
            ],
        ],
    ],
];
