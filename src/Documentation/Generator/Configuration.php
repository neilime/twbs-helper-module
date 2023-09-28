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
     * @var int
     */
    private $maxNestedDir;

    public function __construct(
        $rootDirPath,
        $testsDirPath,
        $maxNestedDir
    ) {
        $this->rootDirPath = $rootDirPath;
        $this->testsDirPath = $testsDirPath;
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
        $composerJsonPath = $this->getRootDirPath() . '/composer.json';
        if (!file_exists($composerJsonPath)) {
            throw new \LogicException(
                'composer.json file not found in root directory "' . $this->getRootDirPath() . '"'
            );
        }

        $composerJson = json_decode(file_get_contents($composerJsonPath), true);

        foreach ($composerJson['require-dev'] as $packageName => $packageVersion) {
            if ('twbs/bootstrap' === $packageName) {
                return preg_replace('/^.*(\d+\.\d+).*$/', '$1', $packageVersion);
            }
        }

        throw new \LogicException('Bootstrap version not found in composer dev dependencies');
    }

    public function getMaxNestedDir()
    {
        return $this->maxNestedDir;
    }
}
