<?php

// Documentation test config file for "Components / Carousel / Dark variant" part

return [
    'title' => 'Dark variant',
    'url' => '%bootstrap-url%/components/carousel/#dark-variant',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->carousel(
            [
                [
                    'src' => '/twbs-helper-module/img/docs/slide1.svg',
                    'active' => true,
                    'alt' => '...',
                    'indicator' => 'Slide 1',
                    'caption' => [
                        'title' => 'First slide label',
                        'text' => 'Some representative placeholder content for the first slide.',
                    ],
                ],
                [
                    'src' => '/twbs-helper-module/img/docs/slide2.svg',
                    'alt' => '...',
                    'indicator' => 'Slide 2',
                    'caption' => [
                        'title' => 'Second slide label',
                        'text' => 'Some representative placeholder content for the second slide.',
                    ],
                ],
                [
                    'src' => '/twbs-helper-module/img/docs/slide3.svg',
                    'alt' => '...',
                    'indicator' => 'Slide 3',
                    'caption' => [
                        'title' => 'Third slide label',
                        'text' => 'Some representative placeholder content for the third slide.',
                    ],
                ],
            ],
            [
                'id' => 'carouselExampleCaptions',
                'controls' => true,
                'variant' => 'dark',
            ],
        );
    },
];
