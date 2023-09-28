<?php

namespace TestSuite\Documentation\Generator;

class BootstrapVersionResolverTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \Documentation\Generator\BootstrapVersionResolver
     */
    protected $bootstrapVersionResolver;

    protected function setUp(): void
    {
        $this->file = $this->createMock(\Documentation\Generator\FileSystem\File::class);

        $this->bootstrapVersionResolver = new \Documentation\Generator\BootstrapVersionResolver(
            $this->file,
            '/tmp/test-dir'
        );
    }

    public function testGetBootstrapVersionShouldReturnPackageVersion()
    {

        $this->file
            ->expects($this->once())
            ->method('fileExists')
            ->with('/tmp/test-dir/composer.json')
            ->willReturn(true);

        $this->file
            ->expects($this->once())
            ->method('readFile')
            ->with('/tmp/test-dir/composer.json')
            ->willReturn('{"require-dev": {"twbs/bootstrap": "^5.1"}}');

        $this->assertEquals('5.1', $this->bootstrapVersionResolver->getBootstrapVersion());
    }


    public function testGetBootstrapVersionShouldThrowExceptionWhenComposerJsonNotFound()
    {
        $this->file
            ->expects($this->once())
            ->method('fileExists')
            ->with('/tmp/test-dir/composer.json')
            ->willReturn(false);

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('composer.json file not found in root directory "/tmp/test-dir"');
        $this->bootstrapVersionResolver->getBootstrapVersion();
    }

    public function testGetBootstrapVersionShouldThrowExceptionWhenPackageNotFound()
    {
        $this->file
            ->expects($this->once())
            ->method('fileExists')
            ->with('/tmp/test-dir/composer.json')
            ->willReturn(true);

        $this->file
            ->expects($this->once())
            ->method('readFile')
            ->with('/tmp/test-dir/composer.json')
            ->willReturn('{"require-dev": {"another-package": "^1.0"}}');

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Bootstrap version not found in composer dev dependencies');
        $this->bootstrapVersionResolver->getBootstrapVersion();
    }
}
