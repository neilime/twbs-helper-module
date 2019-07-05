<?php

// Documentation test config file for "Components / Card" part
return [
    'title' => 'Card',
    'url' => '%bootstrap-url%/components/card/',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Card/Example.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Card/ContentTypes.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Card/Sizing.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Card/TextAlignment.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Card/Navigation.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Card/Images.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Card/CardStyles.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Card/CardLayout.php',
    ],
];
