<?php

// Documentation test config file for "Components / Navs and tabs / Available styles" part
return [
    'title' => 'Available styles',
    'url' => '%bootstrap-url%/components/navs-tabs/#available-styles',
    'tests' => [
        include __DIR__ . '/AvailableStyles/HorizontalAlignment.php',
        include __DIR__ . '/AvailableStyles/Vertical.php',
        include __DIR__ . '/AvailableStyles/Tabs.php',
        include __DIR__ . '/AvailableStyles/Pills.php',
        include __DIR__ . '/AvailableStyles/FillAndJustify.php',
    ],
];
