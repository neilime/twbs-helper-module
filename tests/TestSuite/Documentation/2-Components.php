<?php

// Documentation test config file for "Components" part
return [
    'title' => 'Components',
    'url' => '%bootstrap-url%/components/',
    'tests' => [
        'Alerts' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Alerts.php',
        'Badges' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Badges.php',
        'Breadcrumb' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Breadcrumb.php',
        'Buttons' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Buttons.php',
        'ButtonGroup' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/ButtonGroup.php',
        'Card' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Card.php',
        'Carousel' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Carousel.php',
        'Dropdowns' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Dropdowns.php',
        'Navs' => include __DIR__ . DIRECTORY_SEPARATOR . 'Components/Navs.php',
    ],
];
