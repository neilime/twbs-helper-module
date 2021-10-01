<?php

namespace DocumentationGenerator;

class Configuration
{
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
        $sBootstrapVersion,
        $iMaxNestedDir,
        \DocumentationGenerator\FileSystem\File $oFile
    ) {
        $this->bootstrapVersion = $sBootstrapVersion;
        $this->maxNestedDir = $iMaxNestedDir;
        $this->file = $oFile;
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
