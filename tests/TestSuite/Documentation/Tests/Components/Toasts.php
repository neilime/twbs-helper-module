<?php

// Documentation test config file for "Components / Toasts" part
return [
    'title' => 'Toasts',
    'url' => '%bootstrap-url%/components/toasts/',
    'tests' => [
        include __DIR__ . '/Toasts/Examples.php',
        include __DIR__ . '/Toasts/Placement.php',
        include __DIR__ . '/Toasts/Accessibility.php',
    ],
];
