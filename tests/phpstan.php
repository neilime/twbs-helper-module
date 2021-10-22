<?php

// Load the user-defined test configuration file
if (!file_exists($applicationConfigPath = __DIR__ . '/config/application-config.php')) {
    throw new \LogicException(sprintf(
        'Application configuration file "%s" does not exist',
        $applicationConfigPath
    ));
}
if (false === ($applicationConfig = include $applicationConfigPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including application configuration file "%"',
        $applicationConfigPath
    ));
}

// Prepare the service manager
$serviceManager = new \Laminas\ServiceManager\ServiceManager();
$serviceManagerConfig = new \Laminas\Mvc\Service\ServiceManagerConfig($applicationConfig['service_manager'] ??  []);
$serviceManagerConfig->configureServiceManager($serviceManager);
$serviceManager->setService('ApplicationConfig', $applicationConfig);

// Load modules
$serviceManager->get('ModuleManager')->loadModules();

return $serviceManager;
