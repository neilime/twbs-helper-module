<?php

// Documentation test config file for "Layout / Grid" part
return [
    'title' => 'Grid',
    'url' => '%bootstrap-url%/layout/grid/',
    'tests' => [
        'Example' => include __DIR__ . '/Grid/Example.php',
        'AutoLayoutColumns' => include __DIR__ . '/Grid/AutoLayoutColumns.php',
        'ResponsiveClasses' => include __DIR__ . '/Grid/ResponsiveClasses.php',
        'Nesting' => include __DIR__ . '/Grid/Nesting.php',
    ],
];
