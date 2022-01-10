<?php

// Documentation test config file for "Components / Pagination" part
return [
    'title' => 'Pagination',
    'url' => '%bootstrap-url%/components/pagination/',
    'tests' => [
        include __DIR__ . '/Pagination/Overview.php',
        include __DIR__ . '/Pagination/WorkingWithIcons.php',
        include __DIR__ . '/Pagination/DisabledAndActiveStates.php',
        include __DIR__ . '/Pagination/Sizing.php',
        include __DIR__ . '/Pagination/Alignment.php',
    ],
];
