<?php

// Documentation test config file for "Components / Card" part
return [
    'title' => 'Card',
    'url' => '%bootstrap-url%/components/card/',
    'tests' => [
        include __DIR__ . '/Card/Example.php',
        include __DIR__ . '/Card/ContentTypes.php',
        include __DIR__ . '/Card/Sizing.php',
        include __DIR__ . '/Card/TextAlignment.php',
        include __DIR__ . '/Card/Navigation.php',
        include __DIR__ . '/Card/Images.php',
        include __DIR__ . '/Card/Horizontal.php',
        include __DIR__ . '/Card/CardStyles.php',
        include __DIR__ . '/Card/CardLayout.php',
    ],
];
