<?php

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
        static::$config = $applicationConfig;
        $serviceManager = new \Laminas\ServiceManager\ServiceManager();
        $serviceManagerConfig = new \Laminas\Mvc\Service\ServiceManagerConfig(static::$config['service_manager'] ??  []);
        $serviceManagerConfig->configureServiceManager($serviceManager);
        $serviceManager->setService('ApplicationConfig', static::$config);

        // Load modules
        $serviceManager->get('ModuleManager')->loadModules();

        static::$serviceManager = $serviceManager;
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
     * @param string $path
     * @return boolean|string
     */
    protected static function findParentPath($path)
    {
        $currentDir = __DIR__;
        $previousDir = '.';
        while (!is_dir($previousDir . '/' . $path)) {
            $currentDir = dirname($currentDir);
            if ($previousDir === $currentDir) {
                return false;
            }
            $previousDir = $currentDir;
        }
        return $currentDir . '/' . $path;
    }
}

error_reporting(E_ALL);

// Composer autoloading
if (!file_exists($composerAutoloadPath = __DIR__ . '/../vendor/autoload.php')) {
    throw new \LogicException('Composer autoload file "' . $composerAutoloadPath . '" does not exist');
}
if (false === (include $composerAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including composer autoload file "%s"',
        $composerAutoloadPath
    ));
}

// Tools autoloading
if (!file_exists($toolsAutoloadPath = __DIR__ . '/../tools/vendor/autoload.php')) {
    throw new \LogicException('Tools autoload file "' . $toolsAutoloadPath . '" does not exist');
}

if (false === (include $toolsAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including tools autoload file "%s"',
        $toolsAutoloadPath
    ));
}

\TestSuite\Bootstrap::init();
