<?php

// Documentation test config file for "Components / Modal / Examples" part
return [
    'title' => 'Examples',
    'url' => '%bootstrap-url%/components/modal/#examples',
    'tests' => [
        include __DIR__ . '/Examples/ModalComponents.php',
        include __DIR__ . '/Examples/LiveDemo.php',
        include __DIR__ . '/Examples/StaticBackdrop.php',
        include __DIR__ . '/Examples/ScrollingLongContent.php',
        include __DIR__ . '/Examples/VerticallyCentered.php',
        include __DIR__ . '/Examples/TooltipsAndPopovers.php',
        include __DIR__ . '/Examples/UsingTheGrid.php',
        include __DIR__ . '/Examples/VaryingModalContent.php',
        include __DIR__ . '/Examples/ToggleBetweenModals.php',
        include __DIR__ . '/Examples/RemoveAnimation.php',
    ],
];
