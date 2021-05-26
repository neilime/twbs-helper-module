<?php

// Documentation test config file for "Layout / Columns / Reordering" part
return [
    'title' => 'Reordering',
    'url' => '%bootstrap-url%/layout/columns/#reordering',
    'tests' => [
        'OrderClasses' => include __DIR__ . '/Reordering/OrderClasses.php',
        'OffsettingColumns' => include __DIR__ . '/Reordering/OffsettingColumns.php',
    ],
];
