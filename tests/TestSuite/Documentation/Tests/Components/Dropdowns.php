<?php

// Documentation test config file for "Components / Dropdowns" part
return [
    'title' => 'Dropdowns',
    'url' => '%bootstrap-url%/components/dropdowns/',
    'tests' => [
        include __DIR__ . '/Dropdowns/Examples.php',
        include __DIR__ . '/Dropdowns/Sizing.php',
        include __DIR__ . '/Dropdowns/DarkDropdowns.php',
        include __DIR__ . '/Dropdowns/Directions.php',
        include __DIR__ . '/Dropdowns/MenuItems.php',
        include __DIR__ . '/Dropdowns/MenuAlignment.php',
        include __DIR__ . '/Dropdowns/MenuContent.php',
        include __DIR__ . '/Dropdowns/DropdownOptions.php',
    ],
];
