<?php

namespace TwbsHelper\Form\View\Helper\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use TwbsHelper\Options\ModuleOptions;

class FormModuleOptionsFactory implements FactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        ?array $options = null
    ) {
        /** @var ModuleOptions $options */
        $moduleOptions = $container->get(ModuleOptions::class);

        return new $requestedName($moduleOptions);
    }
}
