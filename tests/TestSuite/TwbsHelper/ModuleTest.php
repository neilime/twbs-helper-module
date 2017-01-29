<?php

namespace TestSuite\TwbsHelper;

class ModuleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var \TwbsHelper\Module
     */
    protected $module;

    public function setUp() {
        $this->module = new \TwbsHelper\Module();
    }

    public function testGetConfig() {
        $this->assertTrue(is_array($this->module->getConfig()));
    }

}
