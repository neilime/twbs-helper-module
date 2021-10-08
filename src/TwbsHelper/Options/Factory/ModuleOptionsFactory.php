<?php

namespace TwbsHelper\Options\Factory;

use Psr\Container\ContainerInterface;
use TwbsHelper\Options\ModuleOptions;

class ModuleOptionsFactory
{
    public function __invoke(ContainerInterface $container): ModuleOptions
    {
        /** @var array $config */
        $config = $container->get('config');

        return new ModuleOptions($config['twbshelper']);
    }
}
