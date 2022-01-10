<?php

// Documentation test config file for "Components / Offcanvas" part
return [
    'title' => 'Offcanvas',
    'url' => '%bootstrap-url%/components/offcanvas/',
    'tests' => [
        include __DIR__ . '/Offcanvas/Examples.php',
        include __DIR__ . '/Offcanvas/Placement.php',
        include __DIR__ . '/Offcanvas/Backdrop.php',
    ],
];
