<?php

namespace TestSuite\Documentation\Generator;

class ConfigurationTest extends \PHPUnit\Framework\TestCase
{
    public function testGetRootDirPath()
    {
        $config = new \Documentation\Generator\Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $this->createMock(\Documentation\Generator\FileSystem\File::class)
        );
        $this->assertEquals('/path/to/root', $config->getRootDirPath());
    }

    public function testGetTestsDirPath()
    {
        $config = new \Documentation\Generator\Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $this->createMock(\Documentation\Generator\FileSystem\File::class)
        );
        $this->assertEquals('/path/to/tests', $config->getTestsDirPath());
    }

    public function testGetBootstrapVersion()
    {
        $config = new \Documentation\Generator\Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $this->createMock(\Documentation\Generator\FileSystem\File::class)
        );
        $this->assertEquals('x.x', $config->getBootstrapVersion());
    }

    public function testGetMaxNestedDir()
    {
        $config = new \Documentation\Generator\Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $this->createMock(\Documentation\Generator\FileSystem\File::class)
        );
        $this->assertEquals(3, $config->getMaxNestedDir());
    }

    public function testGetFile()
    {
        $file = $this->createMock(\Documentation\Generator\FileSystem\File::class);
        $config = new \Documentation\Generator\Configuration(
            '/path/to/root',
            '/path/to/tests',
            'x.x',
            3,
            $file
        );

        $this->assertEquals($file, $config->getFile());
    }
}
