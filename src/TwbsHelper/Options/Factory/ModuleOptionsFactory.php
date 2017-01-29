<?php

namespace TwbsHelper\Options\Factory;

class ModuleOptionsFactory implements \Zend\ServiceManager\FactoryInterface {

    /**
     * @param \Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator) {
        return $this->createServiceWithConfig($oServiceLocator->get('config'));
    }

    /**
     * @param \Interop\Container\ContainerInterface $oContainer
     * @param string $sRequestedName
     * @param array $aOptions
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function __invoke(\Interop\Container\ContainerInterface $oContainer, $sRequestedName, array $aOptions = null) {
        return $this->createServiceWithConfig($oContainer->get('config'));
    }

    /**
     * @param array $aConfig
     * @return \TwbsHelper\Options\ModuleOptions
     */
    protected function createServiceWithConfig(array $aConfig) {
        return new \TwbsHelper\Options\ModuleOptions($aConfig['twbbundle']);
    }

}
