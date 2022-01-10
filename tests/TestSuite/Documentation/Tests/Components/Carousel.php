<?php

// Documentation test config file for "Components / Carousel" part
return [
    'title' => 'Carousel',
    'url' => '%bootstrap-url%/components/carousel/',
    'tests' => [
        include __DIR__ . '/Carousel/Example.php',
        include __DIR__ . '/Carousel/DarkVariant.php',
    ],
];
