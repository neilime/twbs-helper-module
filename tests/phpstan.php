<?php

// Load the user-defined test configuration file
if (!file_exists($sApplicationConfigPath = __DIR__ . '/config/application-config.php')) {
    throw new \LogicException(sprintf(
        'Application configuration file "%s" does not exist',
        $sApplicationConfigPath
    ));
}
if (false === ($aApplicationConfig = include $sApplicationConfigPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including application configuration file "%"',
        $sApplicationConfigPath
    ));
}

// Prepare the service manager
$oServiceManager = new \Laminas\ServiceManager\ServiceManager();
$oServiceManagerConfig = new \Laminas\Mvc\Service\ServiceManagerConfig($aApplicationConfig['service_manager'] ??  []);
$oServiceManagerConfig->configureServiceManager($oServiceManager);
$oServiceManager->setService('ApplicationConfig', $aApplicationConfig);

// Load modules
$oServiceManager->get('ModuleManager')->loadModules();

return $oServiceManager;
