<?php
namespace TwbsHelper\Options\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;

/**
 * ModuleOptionsFactory
 *
 * @uses FactoryInterface
 */
class ModuleOptionsFactory implements FactoryInterface
{


    /**
     * createService
     *
     * @param  ServiceLocatorInterface $oServiceLocator
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function createService(ServiceLocatorInterface $oServiceLocator)
    {
        return $this->createServiceWithConfig($oServiceLocator->get('config'));
    }


    /**
     * __invoke
     *
     * @param  ContainerInterface $oContainer
     * @param  string             $sRequestedName
     * @param  array              $aOptions
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function __invoke(ContainerInterface $oContainer, $sRequestedName, array $aOptions = null)
    {
        return $this->createServiceWithConfig($oContainer->get('config'));
    }


    /**
     * createServiceWithConfig
     *
     * @param  array $aConfig
     * @access protected
     * @return \TwbsHelper\Options\ModuleOptions
     */
    protected function createServiceWithConfig(array $aConfig)
    {
        return new \TwbsHelper\Options\ModuleOptions($aConfig['twbshelper']);
    }
}
