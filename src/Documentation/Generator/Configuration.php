<?php

namespace Documentation\Generator;

class Configuration
{
    /**
     * @var string
     */
    private $rootDirPath;

    /**
     * @var string
     */
    private $testsDirPath;

    /**
     * @var string
     */
    private $bootstrapVersion;

    /**
     * @var int
     */
    private $maxNestedDir;

    public function __construct(
        $rootDirPath,
        $testsDirPath,
        $bootstrapVersion,
        $maxNestedDir
    ) {
        $this->rootDirPath = $rootDirPath;
        $this->testsDirPath = $testsDirPath;
        $this->bootstrapVersion = $bootstrapVersion;
        $this->maxNestedDir = $maxNestedDir;
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
}
