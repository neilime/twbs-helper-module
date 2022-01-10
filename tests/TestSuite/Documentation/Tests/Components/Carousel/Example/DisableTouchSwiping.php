<?php

// Documentation test config file for "Components / Carousel / Example / Disable touch swiping" part

return [
    'title' => 'Disable touch swiping',
    'url' => '%bootstrap-url%/components/carousel/#disable-touch-swiping',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->carousel(
            [
                [
                    'src' => '/twbs-helper-module/img/docs/slide1.svg',
                    'active' => true,
                    'alt' => '...',
                ],
                [
                    'src' => '/twbs-helper-module/img/docs/slide2.svg',
                    'alt' => '...',
                ],
                [
                    'src' => '/twbs-helper-module/img/docs/slide3.svg',
                    'alt' => '...',
                ],
            ],
            [
                'id' => 'carouselExampleControlsNoTouching',
                'controls' => true,
                'swiping' => false,
                'interval' => false,
            ],
        );
    },
];
