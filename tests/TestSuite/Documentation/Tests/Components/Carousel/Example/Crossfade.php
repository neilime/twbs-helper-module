<?php

// Documentation test config file for "Components / Carousel / Example / Crossfade" part

return [
    'title' => 'Crossfade',
    'url' => '%bootstrap-url%/components/carousel/#crossfade',
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
            ['id' => 'carouselExampleFade', 'controls' => true, 'crossfade' => true],
        );
    },
];
