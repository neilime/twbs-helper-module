<?php

namespace Documentation\Generator;

class BootstrapVersionResolver
{
    /**
     * @var \Documentation\Generator\FileSystem\File
     */
    private $file;

    /**
     * @var string
     */
    private $rootDirPath;

    public function __construct(
        \Documentation\Generator\FileSystem\File $file,
        string $rootDirPath,
    ) {
        $this->file = $file;
        $this->rootDirPath = $rootDirPath;
    }

    public function getBootstrapVersion(): string
    {
        $composerJsonPath = $this->rootDirPath . '/composer.json';
        if (!$this->file->fileExists($composerJsonPath)) {
            throw new \LogicException(
                'composer.json file not found in root directory "' . $this->rootDirPath . '"'
            );
        }

        $composerJson = json_decode($this->file->readFile($composerJsonPath), true);

        foreach ($composerJson['require-dev'] as $packageName => $packageVersion) {
            if ('twbs/bootstrap' === $packageName) {
                return preg_replace('/^.*(\d+\.\d+).*$/', '$1', $packageVersion);
            }
        }

        throw new \LogicException('Bootstrap version not found in composer dev dependencies');
    }
}
