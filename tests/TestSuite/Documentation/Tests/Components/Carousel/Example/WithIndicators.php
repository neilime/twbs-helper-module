<?php

// Documentation test config file for "Components / Carousel / Example / With indicators" part

return [
    'title' => 'With indicators',
    'url' => '%bootstrap-url%/components/carousel/#with-indicators',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->carousel(
            [
                [
                    'src' => '/twbs-helper-module/img/docs/slide1.svg',
                    'active' => true,
                    'alt' => '...',
                    'indicator' => 'Slide 1',
                ],
                [
                    'src' => '/twbs-helper-module/img/docs/slide2.svg',
                    'alt' => '...',
                    'indicator' => 'Slide 2',
                ],
                [
                    'src' => '/twbs-helper-module/img/docs/slide3.svg',
                    'alt' => '...',
                    'indicator' => 'Slide 3',
                ],
            ],
            ['id' => 'carouselExampleIndicators', 'controls' => true],
        );
    },
];
