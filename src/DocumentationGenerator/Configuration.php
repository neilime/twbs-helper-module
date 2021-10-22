<?php

namespace DocumentationGenerator;

class Configuration
{
    /**
     * @var string
     */
    private $rootDirPath;

    /**
     * @var string
     */
    private $bootstrapVersion;

    /**
     * @var int
     */
    private $maxNestedDir;

    /**
     * @var \DocumentationGenerator\FileSystem\File
     */
    private $file;

    public function __construct(
        $rootDirPath,
        $bootstrapVersion,
        $maxNestedDir,
        \DocumentationGenerator\FileSystem\File $file
    ) {
        $this->rootDirPath = $rootDirPath;
        $this->bootstrapVersion = $bootstrapVersion;
        $this->maxNestedDir = $maxNestedDir;
        $this->file = $file;
    }

    public function getRootDirPath()
    {
        return $this->rootDirPath;
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
