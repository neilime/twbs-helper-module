<?php

// Documentation test config file for "Components / Navbar" part
return [
    'title' => 'Navbar',
    'url' => '%bootstrap-url%/components/navbar/',
    'tests' => [
        include __DIR__ . '/Navbar/SupportedContent.php',
        include __DIR__ . '/Navbar/ColorSchemes.php',
        include __DIR__ . '/Navbar/Containers.php',
        include __DIR__ . '/Navbar/Placement.php',
        include __DIR__ . '/Navbar/Scrolling.php',
        include __DIR__ . '/Navbar/ResponsiveBehaviors.php',
    ],
];
