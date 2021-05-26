<?php

// Documentation test config file for "Components / Navs and tabs" part
return [
    'title' => 'Navs and tabs',
    'url' => '%bootstrap-url%/components/navs-tabs/',
    'tests' => [
        include __DIR__ . '/NavsAndTabs/BaseNav.php',
        include __DIR__ . '/NavsAndTabs/AvailableStyles.php',
        include __DIR__ . '/NavsAndTabs/WorkingWithFlexUtilities.php',
        include __DIR__ . '/NavsAndTabs/UsingDropdowns.php',
    ],
];
