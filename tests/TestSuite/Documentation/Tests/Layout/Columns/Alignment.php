<?php

// Documentation test config file for "Layout / Columns / Alignment" part
return [
    'title' => 'Alignment',
    'url' => '%bootstrap-url%/layout/columns/#alignment',
    'tests' => [
        'VerticalAlignment' => include __DIR__ . '/Alignment/VerticalAlignment.php',
        'HorizontalAlignment' => include __DIR__ . '/Alignment/HorizontalAlignment.php',
        'ColumnWrapping' => include __DIR__ . '/Alignment/ColumnWrapping.php',
        'ColumnBreaks' => include __DIR__ . '/Alignment/ColumnBreaks.php',
    ],
];
