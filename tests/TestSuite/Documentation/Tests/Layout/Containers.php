<?php

// Documentation test config file for "Layout / Containers" part
return [
    'title' => 'Containers',
    'url' => '%bootstrap-url%/layout/containers/',
    'tests' => [
        'DefaultContainer' => include __DIR__ . '/Containers/DefaultContainer.php',
        'ResponsiveContainers' => include __DIR__ . '/Containers/ResponsiveContainers.php',
        'FluidContainers' => include __DIR__ . '/Containers/FluidContainers.php',
    ],
];
