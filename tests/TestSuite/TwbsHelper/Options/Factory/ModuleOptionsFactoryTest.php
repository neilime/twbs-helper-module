<?php

namespace TestSuite\TwbsHelper\Options\Factory;

class ModuleOptionsFactoryTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \TwbsHelper\Options\Factory\ModuleOptionsFactory
     */
    protected $moduleOptionsFactory;

    public function setUp(): void
    {
        $this->moduleOptionsFactory = new \TwbsHelper\Options\Factory\ModuleOptionsFactory();
    }

    public function testCreateService()
    {
        $this->assertInstanceOf(
            '\TwbsHelper\Options\ModuleOptions',
            $this->moduleOptionsFactory->createService(\TestSuite\Bootstrap::getServiceManager())
        );
    }
}
