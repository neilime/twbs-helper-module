<?php

namespace TestSuite\Documentation\Generator;

class ConfigurationTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Documentation\Generator\Configuration
     */
    protected $configuration;

    public function testGetRootDirPath()
    {
        $config = new \Documentation\Generator\Configuration('/path/to/root', '/path/to/tests', 3);
        $this->assertEquals('/path/to/root', $config->getRootDirPath());
    }

    public function testGetTestsDirPath()
    {
        $config = new \Documentation\Generator\Configuration('/path/to/root', '/path/to/tests', 3);
        $this->assertEquals('/path/to/tests', $config->getTestsDirPath());
    }

    public function testGetBootstrapVersionShouldReturnPackageVersion()
    {
        $root = \org\bovigo\vfs\vfsStream::setup(
            'exemple-dir',
            null,
            [
                'composer.json' => '{"require-dev": {"twbs/bootstrap": "^5.1"}}',
                'tests' => []
            ],
        );

        $config = new \Documentation\Generator\Configuration(
            $root->url(),
            $root->url() . '/tests',
            3
        );

        $this->assertEquals('5.1', $config->getBootstrapVersion());
    }


    public function testGetBootstrapVersionShouldThrowExceptionWhenComposerJsonNotFound()
    {
        $root = \org\bovigo\vfs\vfsStream::setup(
            'exemple-dir',
            null,
            [
                'tests' => []
            ],
        );

        $config = new \Documentation\Generator\Configuration(
            $root->url(),
            $root->url() . '/tests',
            3
        );

        // Test case where composer.json file is not found
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('composer.json file not found in root directory "vfs://exemple-dir"');
        $config->getBootstrapVersion();
    }

    public function testGetBootstrapVersionShouldThrowExceptionWhenPackageNotFound()
    {
        $root = \org\bovigo\vfs\vfsStream::setup(
            'exemple-dir',
            null,
            [
                'composer.json' => '{"require-dev": {"other/package": "1.0.0"}}',
                'tests' => []
            ],
        );

        $config = new \Documentation\Generator\Configuration(
            $root->url(),
            $root->url() . '/tests',
            3
        );

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Bootstrap version not found in composer dev dependencies');
        $config->getBootstrapVersion();
    }
}
