<?php

// Documentation test config file for "Content / Tables" part
return [
    'title' => 'Tables',
    'url' => '%bootstrap-url%/content/tables/',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/Overview.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/Variants.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/AccentedTables.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/TableBorders.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/SmallTables.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/VerticalAlignment.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/Nesting.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/Anatomy.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/ResponsiveTables.php',
    ],
];
