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
        $oConfigProvider = new \TwbsHelper\ConfigProvider();
        $aConfig = $oConfigProvider->__invoke();
        $aConfig['service_manager'] = $aConfig['dependencies'];
        return $aConfig;
    }
}
