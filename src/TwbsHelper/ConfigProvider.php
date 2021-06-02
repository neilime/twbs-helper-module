<?php

declare(strict_types=1);

namespace TwbsHelper;

/**
 * The configuration provider for the TwbsHelper module
 *
 * @see https://docs.laminas.dev/laminas-component-installer/
 */
class ConfigProvider
{
    /**
     * Path to the module config
     *
     * @const string
     */
    private const MODULE_CONFIG_PATH = __DIR__ . '/../../config/module.config.php';

    /**
     * The module config Laminas MVC
     *
     * @var array
     */
    protected $moduleConfig;

    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     * @return array
     * @throws \InvalidArgumentException
     */
    public function __invoke()
    {
        if (!file_exists(self::MODULE_CONFIG_PATH)) {
            throw new \InvalidArgumentException(sprintf(
                'Wrong path to module config file. Module configuration file "%s" does not exist',
                self::MODULE_CONFIG_PATH
            ));
        }

        $this->moduleConfig = require self::MODULE_CONFIG_PATH;
        return [
            'twbshelper' => $this->getTwbsHelperOptions(),
            'dependencies' => $this->getDependencies(),
            'view_helpers' => $this->getViewHelpers(),
            'navigation_helpers' => $this->getNavigationHelpers(),
            'view_manager' => $this->getViewManagerConfig(),
        ];
    }

    /**
     * Returns twb bundle options
     *
     * @return array
     */
    protected function getTwbsHelperOptions()
    {
        return array_key_exists('twbshelper', $this->moduleConfig) ? $this->moduleConfig['twbshelper'] : [];
    }

    /**
     * Returns dependencies (former server_manager)
     *
     * @return array
     */
    protected function getDependencies()
    {
        return array_key_exists('service_manager', $this->moduleConfig) ? $this->moduleConfig['service_manager'] : [];
    }

    /**
     * Returns view helpers
     *
     * @return array
     */
    protected function getViewHelpers()
    {
        return array_key_exists('view_helpers', $this->moduleConfig) ? $this->moduleConfig['view_helpers'] : [];
    }

    /**
     * Returns navigation helpers
     *
     * @return array
     */
    protected function getNavigationHelpers()
    {
        return array_key_exists(
            'navigation_helpers',
            $this->moduleConfig
        ) ? $this->moduleConfig['navigation_helpers'] : [];
    }

    /**
     * Returns navigation helpers
     *
     * @return array
     */
    protected function getViewManagerConfig()
    {
        return array_key_exists('view_manager', $this->moduleConfig) ? $this->moduleConfig['view_manager'] : [];
    }
}
