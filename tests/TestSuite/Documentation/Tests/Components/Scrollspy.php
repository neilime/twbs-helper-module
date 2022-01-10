<?php

// Documentation test config file for "Components / Scrollspy" part
return [
    'title' => 'Scrollspy',
    'url' => '%bootstrap-url%/components/scrollspy/',
    'tests' => [
        include __DIR__ . '/Scrollspy/ExampleInNavbar.php',
        include __DIR__ . '/Scrollspy/ExampleWithNestedNav.php',
        include __DIR__ . '/Scrollspy/ExampleWithListGroup.php',
    ],
];
