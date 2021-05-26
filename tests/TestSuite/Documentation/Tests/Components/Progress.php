<?php

// Documentation test config file for "Components / Progress" part
return [
    'title' => 'Progress',
    'url' => '%bootstrap-url%/components/progress/',
    'tests' => [
        include __DIR__ . '/Progress/HowItWorks.php',
        include __DIR__ . '/Progress/Labels.php',
        include __DIR__ . '/Progress/Height.php',
        include __DIR__ . '/Progress/Backgrounds.php',
        include __DIR__ . '/Progress/MultipleBars.php',
        include __DIR__ . '/Progress/Striped.php',
        include __DIR__ . '/Progress/AnimatedStripes.php',
    ],
];
