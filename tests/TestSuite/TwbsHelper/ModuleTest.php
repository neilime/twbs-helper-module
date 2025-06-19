<?php

namespace TestSuite\TwbsHelper;

use PHPUnit\Framework\TestCase;
use TwbsHelper\Module;

class ModuleTest extends TestCase
{
    /**
     * @var Module
     */
    protected $module;

    protected function setUp(): void
    {
        $this->module = new Module();
    }

    public function testGetConfig()
    {
        $this->assertIsArray($this->module->getConfig());
    }
}
