<?php

// Documentation test config file for "Components / Navbar" part
return [
    'title' => 'Navbar',
    'url' => '%bootstrap-url%/components/navbar/',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Navbar/SupportedContent.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Navbar/ColorSchemes.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Navbar/Containers.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Navbar/Placement.php',
    ],
];
