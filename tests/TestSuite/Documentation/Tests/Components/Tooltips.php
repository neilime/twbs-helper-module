<?php

// Documentation test config file for "Components / Tooltips" part
return [
    'title' => 'Tooltips',
    'url' => '%bootstrap-url%/components/tooltips/',
    'tests' => [
        include __DIR__ . '/Tooltips/Examples.php',
        include __DIR__ . '/Tooltips/Usage.php',
    ],
];
