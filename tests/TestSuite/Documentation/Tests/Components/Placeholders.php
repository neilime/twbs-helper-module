<?php

// Documentation test config file for "Components / Placeholders" part
return [
    'title' => 'Placeholders',
    'url' => '%bootstrap-url%/components/placeholders/',
    'tests' => [
        include __DIR__ . '/Placeholders/Example.php',
        include __DIR__ . '/Placeholders/HowItWorks.php',
    ],
];
