<?php

// Documentation test config file for "Layout / Gutters" part
return [
    'title' => 'Gutters',
    'url' => '%bootstrap-url%/layout/gutters/',
    'tests' => [
        'HorizontalGutters' => include __DIR__ . '/Gutters/HorizontalGutters.php',
        'VerticalGutters' => include __DIR__ . '/Gutters/VerticalGutters.php',
        'HorizontalVerticalGutters' => include __DIR__ . '/Gutters/HorizontalVerticalGutters.php',
        'RowColumnsGutters' => include __DIR__ . '/Gutters/RowColumnsGutters.php',
        'NoGutters' => include __DIR__ . '/Gutters/NoGutters.php',
    ],
];
