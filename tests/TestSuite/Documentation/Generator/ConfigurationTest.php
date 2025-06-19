<?php

namespace TestSuite\Documentation\Generator;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use PHPUnit\Framework\TestCase;

class ConfigurationTest extends TestCase
{
    public function testGetRootDirPath()
    {
        $config = new Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $this->createMock(File::class)
        );
        $this->assertEquals('/path/to/root', $config->getRootDirPath());
    }

    public function testGetTestsDirPath()
    {
        $config = new Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $this->createMock(File::class)
        );
        $this->assertEquals('/path/to/tests', $config->getTestsDirPath());
    }

    public function testGetBootstrapVersion()
    {
        $config = new Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $this->createMock(File::class)
        );
        $this->assertEquals('x.x', $config->getBootstrapVersion());
    }

    public function testGetMaxNestedDir()
    {
        $config = new Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $this->createMock(File::class)
        );
        $this->assertEquals(3, $config->getMaxNestedDir());
    }

    public function testGetFile()
    {
        $file = $this->createMock(File::class);
        $config = new Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $file
        );

        $this->assertEquals($file, $config->getFile());
    }
}
