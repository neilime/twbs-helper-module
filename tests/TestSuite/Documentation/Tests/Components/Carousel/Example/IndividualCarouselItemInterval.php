<?php

// Documentation test config file for "Components / Carousel / Example / Individual .carousel-item interval" part

return  [
    'title' => 'Individual .carousel-item interval',
    'url' => '%bootstrap-url%/components/carousel/#individual-carousel-item-interval',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->carousel(
            [
                [
                    'src' => '/twbs-helper-module/img/docs/slide1.svg',
                    'interval' => 10000,
                    'active' => true,
                    'alt' => '...',
                ],
                [
                    'src' => '/twbs-helper-module/img/docs/slide2.svg',
                    'interval' => 2000,
                    'alt' => '...',
                ],
                [
                    'src' => '/twbs-helper-module/img/docs/slide3.svg',
                    'alt' => '...',
                ],
            ],
            ['id' => 'carouselExampleInterval', 'controls' => true],
        );
    },
];
