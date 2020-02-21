<?php

namespace TwbsHelper;

class Module implements \Laminas\ModuleManager\Feature\ConfigProviderInterface
{


    /**
     * Retrieve module configuration
     *
     * @return array The configuration array
     */
    public function getConfig()
    {
        return include __DIR__.DIRECTORY_SEPARATOR.'/../../config/module.config.php';
    }
}
