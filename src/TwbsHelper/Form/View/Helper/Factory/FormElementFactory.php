<?php

namespace TwbsHelper\Form\View\Helper\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;

use TwbsHelper\Form\View\Helper\FormElement;
use TwbsHelper\Options\ModuleOptions;

/**
 * FormElementFactory
 * Factory to inject the ModuleOptions hard dependency
 *
 * @uses FactoryInterface
 */
class FormElementFactory implements FactoryInterface
{


    /**
     * createService
     * Compatibility with ZF2 (>= 2.2) -> proxy to __invoke
     *
     * @param  ServiceLocatorInterface $oServiceLocator
     * @param  mixed                   $sCanonicalName
     * @param  mixed                   $sRequestedName
     * @access public
     * @return void
     */
    public function createService(
        ServiceLocatorInterface $oServiceLocator,
        $sCanonicalName = null,
        $sRequestedName = null
    ) {
        return $this($oServiceLocator, $sRequestedName);
    }


    /**
     * __invoke
     * Compatibility with ZF3
     *
     * @param  ContainerInterface $container
     * @param  mixed              $requestedName
     * @param  array              $options
     * @access public
     * @return void
     */
    public function __invoke(ContainerInterface $oContainer, $sRequestedName, array $aOptions = null)
    {
        $oOptions = $oContainer->get(ModuleOptions::class);

        return new FormElement($oOptions);
    }
}
