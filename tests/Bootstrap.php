<?php

namespace TestSuite;

error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);

// Composer autoloading
if (!file_exists($sComposerAutoloadPath = __DIR__ . '/../vendor/autoload.php')) {
    throw new \LogicException('Composer autoload file "' . $sComposerAutoloadPath . '" does not exist');
}
if (false === (include $sComposerAutoloadPath)) {
    throw new \LogicException('An error occured while including composer autoload file "' . $sComposerAutoloadPath . '"');
}

class Bootstrap {

    /**
     * @var \Zend\ServiceManager\ServiceManager
     */
    protected static $serviceManager;

    /**
     * @var array
     */
    protected static $config;

    /**
     * Initialize bootstrap
     */
    public static function init() {
        // Load the user-defined test configuration file
        if (!file_exists($sApplicationConfigPath = __DIR__ . '/config/application-config.php')) {
            throw new \LogicException('Application configuration file "' . $sApplicationConfigPath . '" does not exist');
        }
        if (false === ($aApplicationConfig = include $sApplicationConfigPath)) {
            throw new \LogicException('An error occured while including application configuration file "' . $sApplicationConfigPath . '"');
        }

        $aZf2ModulePaths = array();
        if (isset($aApplicationConfig['module_listener_options']['module_paths'])) {
            foreach ($aApplicationConfig['module_listener_options']['module_paths'] as $sModulePath) {
                if (($sPath = static::findParentPath($sModulePath))) {
                    $aZf2ModulePaths[] = $sPath;
                }
            }
        }

        // Prepare the service manager
        static::$config = $aApplicationConfig;
        $oServiceManager = new \Zend\ServiceManager\ServiceManager();
        $oServiceManagerConfig = new \Zend\Mvc\Service\ServiceManagerConfig(isset(static::$config['service_manager']) ? static::$config['service_manager'] : array());
        $oServiceManagerConfig->configureServiceManager($oServiceManager);
        $oServiceManager->setService('ApplicationConfig', static::$config);

        // Load modules
        $oServiceManager->get('ModuleManager')->loadModules();

        static::$serviceManager = $oServiceManager;
    }

    /**
     * @return \Zend\ServiceManager\ServiceManager
     */
    public static function getServiceManager() {
        return static::$serviceManager;
    }

    /**
     * @return array
     */
    public static function getConfig() {
        return static::$config;
    }

    /**
     * Retrieve parent for a given path
     * @param string $sPath
     * @return boolean|string
     */
    protected static function findParentPath($sPath) {
        $sCurrentDir = __DIR__;
        $sPreviousDir = '.';
        while (!is_dir($sPreviousDir . '/' . $sPath)) {
            $sCurrentDir = dirname($sCurrentDir);
            if ($sPreviousDir === $sCurrentDir) {
                return false;
            }
            $sPreviousDir = $sCurrentDir;
        }
        return $sCurrentDir . '/' . $sPath;
    }

}

Bootstrap::init();
