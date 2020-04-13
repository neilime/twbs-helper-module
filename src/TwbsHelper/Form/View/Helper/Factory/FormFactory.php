<?php

namespace TwbsHelper\Form\View\Helper\Factory;

class FormFactory implements \Laminas\ServiceManager\FactoryInterface
{
    /**
     * Compatibility with ZF2 (>= 2.2) -> proxy to __invoke
     *
     * @param \Laminas\ServiceManager\ServiceLocatorInterface $oServiceLocator
     * @param mixed $sCanonicalName
     * @param mixed $sRequestedName
     * @return \TwbsHelper\Form\View\Helper\Form
     */
    public function createService(
        \Laminas\ServiceManager\ServiceLocatorInterface $oServiceLocator,
        $sCanonicalName = null,
        $sRequestedName = null
    ): \TwbsHelper\Form\View\Helper\Form {
        return $this($oServiceLocator, $sRequestedName);
    }

    /**
     * Compatibility with Laminas and ZF3
     *
     * @param \Interop\Container\ContainerInterface $oContainer
     * @param mixed $sRequestedName
     * @param array $aOptions
     * @return \TwbsHelper\Form\View\Helper\Form
     */
    public function __invoke(
        \Interop\Container\ContainerInterface $oContainer,
        $sRequestedName,
        array $aOptions = null
    ): \TwbsHelper\Form\View\Helper\Form {
        $oOptions = $oContainer->get(\TwbsHelper\Options\ModuleOptions::class);

        return new \TwbsHelper\Form\View\Helper\Form($oOptions);
    }
}
