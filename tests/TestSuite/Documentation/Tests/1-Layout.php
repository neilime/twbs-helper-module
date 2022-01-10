<?php

// Documentation test config file for "Layout" part
return [
    'title' => 'Layout',
    'url' => '%bootstrap-url%/layout/',
    'tests' => [
        'Containers' => include __DIR__ . '/Layout/Containers.php',
        'Grid' => include __DIR__ . '/Layout/Grid.php',
        'Columns' => include __DIR__ . '/Layout/Columns.php',
        'Gutters' => include __DIR__ . '/Layout/Gutters.php',
    ],
];
