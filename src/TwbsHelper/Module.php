<?php

namespace TwbsHelper;

class Module implements \Zend\ModuleManager\Feature\ConfigProviderInterface {

    /**
     * @return array
     */
    public function getConfig() {
        return include __DIR__ . DIRECTORY_SEPARATOR . '/../../config/module.config.php';
    }

}
