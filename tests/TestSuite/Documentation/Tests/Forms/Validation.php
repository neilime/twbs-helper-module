<?php

// Documentation test config file for "Forms / Validation" part
return [
    'title' => 'Validation',
    'url' => '%bootstrap-url%/forms/validation',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'Validation/CustomStyles.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Validation/BrowserDefaults.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Validation/ServerSide.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Validation/SupportedElements.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'Validation/Tooltips.php',
    ],
];
