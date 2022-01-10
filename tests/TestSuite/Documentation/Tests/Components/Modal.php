<?php

// Documentation test config file for "Components / Modal" part
return [
    'title' => 'Modal',
    'url' => '%bootstrap-url%/components/modal/',
    'tests' => [
        include __DIR__ . '/Modal/Examples.php',
        include __DIR__ . '/Modal/OptionalSizes.php',
        include __DIR__ . '/Modal/FullscreenModal.php',
    ],
];
