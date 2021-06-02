<?php

// Documentation test config file for "Components / Dropdowns" part
return [
    'title' => 'Dropdowns',
    'url' => '%bootstrap-url%/components/dropdowns/',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Dropdowns/Examples.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Dropdowns/Sizing.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Dropdowns/Directions.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Dropdowns/MenuItems.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Dropdowns/MenuAlignment.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Dropdowns/MenuContent.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Dropdowns/DropdownOptions.php',
    ],
];
