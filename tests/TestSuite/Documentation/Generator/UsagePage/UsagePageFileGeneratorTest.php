<?php

namespace TestSuite\Documentation\Generator\UsagePage;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Documentation\Generator\UsagePage\UsagePageFileGenerator;
use Documentation\Test\Config;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class UsagePageFileGeneratorTest extends TestCase
{
    /** @var File&MockObject */
    protected $file;

    protected UsagePageFileGenerator $usagePageFileGenerator;

    private string $rootDirPath;

    protected function setUp(): void
    {
        parent::setUp();

        $this->file = $this->createMock(File::class);
        $this->rootDirPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'twbs-helper-usage-page-' . bin2hex(random_bytes(8));
        mkdir($this->rootDirPath . DIRECTORY_SEPARATOR . 'website' . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'usage', 0o777, true);

        $configuration = new Configuration(
            $this->rootDirPath,
            $this->rootDirPath . DIRECTORY_SEPARATOR . 'tests',
            'x.x',
            2,
            $this->file
        );
        $config = new Config();

        $this->usagePageFileGenerator = new UsagePageFileGenerator(
            $configuration,
            $config
        );
    }

    protected function tearDown(): void
    {
        if (is_dir($this->rootDirPath)) {
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($this->rootDirPath, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::CHILD_FIRST
            );

            foreach ($iterator as $path) {
                $path->isDir() ? rmdir($path->getPathname()) : unlink($path->getPathname());
            }

            rmdir($this->rootDirPath);
        }

        parent::tearDown();
    }

    public function testGenerateShouldCreateUsagePage(): void
    {
        $usageDirPath = realpath($this->rootDirPath . DIRECTORY_SEPARATOR . 'website' . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'usage');
        $pageDirPath = $usageDirPath . DIRECTORY_SEPARATOR . 'n-a';
        $pagePath = $pageDirPath . DIRECTORY_SEPARATOR . 'n-a.mdx';
        $categoryPath = $pageDirPath . DIRECTORY_SEPARATOR . '_category_.json';
        $dirExistsCalls = [];

        $this->file->expects($this->exactly(2))
            ->method('dirExists')
            ->willReturnCallback(function (string $dirPath) use ($usageDirPath, $pageDirPath, &$dirExistsCalls): bool {
                $dirExistsCalls[] = $dirPath;

                return match ($dirPath) {
                    $usageDirPath => true,
                    $pageDirPath => false,
                    default => throw new AssertionFailedError('Unexpected dirExists path: ' . $dirPath),
                };
            });

        $this->file->expects($this->once())
            ->method('writeFile')
            ->with(
                $categoryPath,
                "{\n    \"label\": \"\",\n    \"position\": 1\n}"
            );

        $this->file->expects($this->once())
            ->method('appendFile')
            ->with($pagePath, 'test');

        $this->usagePageFileGenerator->generate('test');

        $this->assertSame([$usageDirPath, $pageDirPath], $dirExistsCalls);
        $this->assertDirectoryExists($pageDirPath);
    }

    public function testGenerateThrowsAnErrorWhenUsageDirPathDoesNotExist(): void
    {
        $this->file->method('dirExists')->willReturn(false);

        $this->expectExceptionMessage(
            'Usage dir path "' . $this->rootDirPath . DIRECTORY_SEPARATOR . 'website' . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'usage" does not exist'
        );

        rmdir($this->rootDirPath . DIRECTORY_SEPARATOR . 'website' . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'usage');
        rmdir($this->rootDirPath . DIRECTORY_SEPARATOR . 'website' . DIRECTORY_SEPARATOR . 'docs');
        rmdir($this->rootDirPath . DIRECTORY_SEPARATOR . 'website');

        $this->usagePageFileGenerator->generate('test');
    }
}
