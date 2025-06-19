<?php

namespace Documentation\Generator;

use Documentation\Generator\FileSystem\File;

class Configuration
{
    /**
     * @param string $rootDirPath
     * @param string $testsDirPath
     * @param string $bootstrapVersion
     * @param int $maxNestedDir
     * @param File $file
     */
    public function __construct(private $rootDirPath, private $testsDirPath, private $bootstrapVersion, private $maxNestedDir, private $file)
    {
    }

    public function getRootDirPath()
    {
        return $this->rootDirPath;
    }

    public function getTestsDirPath()
    {
        return $this->testsDirPath;
    }

    public function getBootstrapVersion()
    {
        return $this->bootstrapVersion;
    }

    public function getMaxNestedDir()
    {
        return $this->maxNestedDir;
    }

    public function getFile()
    {
        return $this->file;
    }
}
