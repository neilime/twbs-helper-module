<?php

// phpcs:disable 
namespace TestSuite;

class Bootstrap
{

    /**
     * @var \Laminas\ServiceManager\ServiceManager
     */
    protected static $serviceManager;

    /**
     * @var array
     */
    protected static $config;

    /**
     * Initialize bootstrap
     */
    public static function init()
    {
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
        static::$config = $aApplicationConfig;
        $oServiceManager = new \Laminas\ServiceManager\ServiceManager();
        $oServiceManagerConfig = new \Laminas\Mvc\Service\ServiceManagerConfig(static::$config['service_manager'] ??  []);
        $oServiceManagerConfig->configureServiceManager($oServiceManager);
        $oServiceManager->setService('ApplicationConfig', static::$config);

        // Load modules
        $oServiceManager->get('ModuleManager')->loadModules();

        static::$serviceManager = $oServiceManager;
    }

    /**
     * @return \Laminas\ServiceManager\ServiceManager
     */
    public static function getServiceManager()
    {
        return static::$serviceManager;
    }

    /**
     * @return array
     */
    public static function getConfig()
    {
        return static::$config;
    }

    /**
     * Retrieve parent for a given path
     * @param string $sPath
     * @return boolean|string
     */
    protected static function findParentPath($sPath)
    {
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

error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);
// Composer autoloading
if (!file_exists($sComposerAutoloadPath = __DIR__ . '/../vendor/autoload.php')) {
    throw new \LogicException('Composer autoload file "' . $sComposerAutoloadPath . '" does not exist');
}
if (false === (include $sComposerAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including composer autoload file "%s"',
        $sComposerAutoloadPath
    ));
}

Bootstrap::init();
