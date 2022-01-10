<?php

// Documentation test config file for "Forms / Layout" part
return [
    'title' => 'Layout',
    'url' => '%bootstrap-url%/forms/layout',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/Utilities.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/FormGrid.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/Gutters.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/HorizontalForm.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/ColumnSizing.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/AutoSizing.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/InlineForms.php',
    ],
];
