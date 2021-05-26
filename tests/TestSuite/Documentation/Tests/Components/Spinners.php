<?php

// Documentation test config file for "Components / Spinners" part
return [
    'title' => 'Spinners',
    'url' => '%bootstrap-url%/components/spinners/',
    'tests' => [
        include __DIR__ . '/Spinners/BorderSpinner.php',
        include __DIR__ . '/Spinners/GrowingSpinner.php',
        include __DIR__ . '/Spinners/Alignment.php',
        include __DIR__ . '/Spinners/Size.php',
        include __DIR__ . '/Spinners/Buttons.php',
    ],
];
