<?php

// Documentation test config file for "Layout / Columns" part
return [
    'title' => 'Columns',
    'url' => '%bootstrap-url%/layout/columns/',
    'tests' => [
        'Alignment' => include __DIR__ . '/Columns/Alignment.php',
        'Reordering' => include __DIR__ . '/Columns/Reordering.php',
        'StandaloneColumnClasses' => include __DIR__ . '/Columns/StandaloneColumnClasses.php',
    ],
];
