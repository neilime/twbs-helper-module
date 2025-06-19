<?php

use Laminas\Mvc\Application;

// Load the user-defined test configuration file
if (!file_exists($applicationConfigPath = __DIR__ . '/config/application-config.php')) {
    throw new LogicException(sprintf(
        'Application configuration file "%s" does not exist',
        $applicationConfigPath
    ));
}
if (false === ($applicationConfig = include $applicationConfigPath)) {
    throw new LogicException(sprintf(
        'An error occured while including application configuration file "%"',
        $applicationConfigPath
    ));
}

$application = Application::init($applicationConfig);
return $application->getServiceManager();
