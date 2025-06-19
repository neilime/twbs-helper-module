<?php

namespace TwbsHelper;

class Module
{
    /**
     * Retrieve module configuration
     *
     * @return array The configuration array
     */
    public function getConfig()
    {
        $configProvider = new ConfigProvider();
        $config = $configProvider->__invoke();
        $config['service_manager'] = $config['dependencies'];
        return $config;
    }
}
