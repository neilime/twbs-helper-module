<?php

// Documentation test config file for "Components / Forms" part
return [
    'title' => 'Forms',
    'url' => '%bootstrap-url%/components/forms/',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/Overview.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/FormControls.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/RangeInputs.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/CheckboxesAndRadios.php',
    ],
];
