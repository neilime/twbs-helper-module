<?php

// Documentation test config file for "Components / Toasts / Examples" part
return [
    'title' => 'Examples',
    'url' => '%bootstrap-url%/components/toasts/#examples',
    'tests' => [
        include __DIR__ . '/Examples/Basic.php',
        include __DIR__ . '/Examples/LiveExample.php',
        include __DIR__ . '/Examples/Translucent.php',
        include __DIR__ . '/Examples/Stacking.php',
        include __DIR__ . '/Examples/CustomContent.php',
        include __DIR__ . '/Examples/ColorSchemes.php',
    ],
];
