<?php

// Documentation test config file for "Forms" part
return [
    'title' => 'Forms',
    'url' => '%bootstrap-url%/forms/',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/Overview.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/FormControls.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/Select.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/ChecksAndRadios.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/Range.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/InputGroup.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/FloatingLabels.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/Layout.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Forms/Validation.php',
    ],
];
