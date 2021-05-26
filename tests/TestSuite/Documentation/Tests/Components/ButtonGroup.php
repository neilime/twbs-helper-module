<?php

// Documentation test config file for "Components / Button group" part
return [
    'title' => 'Button group',
    'url' => '%bootstrap-url%/components/button-group/',
    'tests' => [
        include __DIR__ . '/ButtonGroup/BasicExample.php',
        include __DIR__ . '/ButtonGroup/MixedStyles.php',
        include __DIR__ . '/ButtonGroup/OutlinedStyles.php',
        include __DIR__ . '/ButtonGroup/CheckboxAndRadioButtonGroups.php',
        include __DIR__ . '/ButtonGroup/ButtonToolbar.php',
        include __DIR__ . '/ButtonGroup/Sizing.php',
        include __DIR__ . '/ButtonGroup/Nesting.php',
        include __DIR__ . '/ButtonGroup/VerticalVariation.php',
    ],
];
