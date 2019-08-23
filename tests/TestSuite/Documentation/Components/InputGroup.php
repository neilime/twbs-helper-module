<?php

// Documentation test config file for "Components / Input group" part
return [
    'title' => 'Input group',
    'url' => '%bootstrap-url%/components/input-group/',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/BasicExample.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/Wrapping.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/Sizing.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/CheckboxesAndRadios.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/MultipleInputs.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/MultipleAddons.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/ButtonAddons.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/ButtonsWithDropdowns.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/SegmentedButtons.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'InputGroup/CustomForms.php',
    ],
];
