<?php

namespace TestSuite\Documentation\Generator;

class ConfigurationTest extends \PHPUnit\Framework\TestCase
{
    public function testGetRootDirPath()
    {
        $config = new \Documentation\Generator\Configuration('/path/to/root', '/path/to/tests', 'x.x', 3);
        $this->assertEquals('/path/to/root', $config->getRootDirPath());
    }

    public function testGetTestsDirPath()
    {
        $config = new \Documentation\Generator\Configuration('/path/to/root', '/path/to/tests', 'x.x', 3);
        $this->assertEquals('/path/to/tests', $config->getTestsDirPath());
    }

    public function testGetBootstrapVersion()
    {
        $config = new \Documentation\Generator\Configuration('/path/to/root', '/path/to/tests', 'x.x', 3);
        $this->assertEquals('x.x', $config->getBootstrapVersion());
    }
}
