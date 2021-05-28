<?php

// Documentation test config file for "Content / Tables" part
return [
    'title' => 'Tables',
    'url' => '%bootstrap-url%/content/tables/',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/Overview.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/Variants.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Tables/AccentedTables.php',
    ],
];
