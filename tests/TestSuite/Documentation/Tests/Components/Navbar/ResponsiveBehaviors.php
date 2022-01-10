<?php

// Documentation test config file for "Components / Navbar / Responsive behaviors" part
return [
    'title' => 'Responsive behaviors',
    'url' => '%bootstrap-url%/components/navbar/#responsive-behaviors',
    'tests' => [
        include __DIR__ . '/ResponsiveBehaviors/Toggler.php',
        include __DIR__ . '/ResponsiveBehaviors/ExternalContent.php',
        include __DIR__ . '/ResponsiveBehaviors/Offcanvas.php',
    ],
];
