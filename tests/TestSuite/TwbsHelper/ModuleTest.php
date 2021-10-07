<?php

namespace TestSuite\TwbsHelper;

class ModuleTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \TwbsHelper\Module
     */
    protected $module;

    public function setUp(): void
    {
        $this->module = new \TwbsHelper\Module();
    }

    public function testGetConfig()
    {
        $this->assertIsArray($this->module->getConfig());
    }
}
