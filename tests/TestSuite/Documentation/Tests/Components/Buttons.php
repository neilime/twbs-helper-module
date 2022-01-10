<?php

// Documentation test config file for "Components / Buttons" part
return [
    'title' => 'Buttons',
    'url' => '%bootstrap-url%/components/buttons/',
    'tests' => [
        include __DIR__ . '/Buttons/Examples.php',
        include __DIR__ . '/Buttons/ButtonTags.php',
        include __DIR__ . '/Buttons/OutlineButtons.php',
        include __DIR__ . '/Buttons/Sizes.php',
        include __DIR__ . '/Buttons/DisabledState.php',
        include __DIR__ . '/Buttons/BlockButtons.php',
        include __DIR__ . '/Buttons/ButtonPlugin.php',
    ],
];
