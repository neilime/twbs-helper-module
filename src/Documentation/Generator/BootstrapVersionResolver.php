<?php

namespace Documentation\Generator;

use Documentation\Generator\FileSystem\File;
use LogicException;

class BootstrapVersionResolver
{
    public function __construct(private readonly File $file, private readonly string $rootDirPath)
    {
    }

    public function getBootstrapVersion(): string
    {
        $composerJsonPath = $this->rootDirPath . '/composer.json';
        if (!$this->file->fileExists($composerJsonPath)) {
            throw new LogicException(
                'composer.json file not found in root directory "' . $this->rootDirPath . '"'
            );
        }

        $composerJson = json_decode((string) $this->file->readFile($composerJsonPath), true);

        foreach ($composerJson['require-dev'] as $packageName => $packageVersion) {
            if ('twbs/bootstrap' === $packageName) {
                return preg_replace('/^.*(\d+\.\d+).*$/', '$1', (string) $packageVersion);
            }
        }

        throw new LogicException('Bootstrap version not found in composer dev dependencies');
    }
}
