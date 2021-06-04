<?php

// Documentation test config file for "Components / Forms / Layout" part
return [
    'title' => 'Layout',
    'url' => '%bootstrap-url%/forms/#layout',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/FormGroups.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/FormGrid.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Layout/InlineForms.php',
    ],
];
