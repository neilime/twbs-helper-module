<?php
/**
 * Copyright (c) 2019.
 *
 * @author Syber
 */

namespace TwbsHelper\Form\View\Helper\Factory;

class FormRowFactory implements \Laminas\ServiceManager\FactoryInterface
{
    /**
     * Compatibility with ZF2 (>= 2.2) -> proxy to __invoke
     *
     * @param \Laminas\ServiceManager\ServiceLocatorInterface $oServiceLocator
     * @param mixed $sCanonicalName
     * @param mixed $sRequestedName
     * @return void
     */
    public function createService(
        \Laminas\ServiceManager\ServiceLocatorInterface $oServiceLocator,
        $sCanonicalName = null,
        $sRequestedName = null
    ) {
        return $this($oServiceLocator, $sRequestedName);
    }

    /**
     * Compatibility with ZF3 and Laminas
     *
     * @param \Interop\Container\ContainerInterface $oContainer
     * @param mixed $sRequestedName
     * @param array $aOptions
     * @return void
     */
    public function __invoke(\Interop\Container\ContainerInterface $oContainer, $sRequestedName, array $aOptions = null)
    {
        $oOptions = $oContainer->get(\TwbsHelper\Options\ModuleOptions::class);

        return new \TwbsHelper\Form\View\Helper\FormRow($oOptions);
    }
}
