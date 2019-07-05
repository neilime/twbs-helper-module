<?php

return [
    'modules' => ['Zend\Router', 'Zend\Navigation', 'TwbsHelper'],
    'module_listener_options' => [
        'config_glob_paths' => [__DIR__ . '/module-config.php'],
        'module_paths' => ['vendor'],
    ],
];
