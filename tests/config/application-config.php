<?php

return array(
    'modules' => array('Zend\Router', 'Zend\Navigation', 'TwbsHelper'),
    'module_listener_options' => array(
        'config_glob_paths' => array(__DIR__ . '/module-config.php'),
        'module_paths' => array('vendor'),
    ),
);
