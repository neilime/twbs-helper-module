<?php

namespace Documentation\Test;

use DirectoryIterator;
use LogicException;

class ConfigsLoader
{
    protected $testsDirectoryPath;

    public function __construct(string $testsDirectoryPath)
    {
        $this->testsDirectoryPath = $testsDirectoryPath;
    }

    public function loadDocumentationTestConfigs()
    {
        $documentationFiles = $this->getDocumentationFiles();
        $documentationTestConfigs = [];
        $position = 1;
        foreach ($documentationFiles as $documentationFile) {
            $documentationTestConfig = $this->loadDocumentationTestConfigFromFile($documentationFile);
            $documentationTestConfig->position = $position;
            $documentationTestConfigs[] = $documentationTestConfig;
            ++$position;
        }

        return $documentationTestConfigs;
    }

    private function getDocumentationFiles(): array
    {
        $documentationFiles = [];
        foreach (new DirectoryIterator($this->testsDirectoryPath) as $fileInfo) {
            // Ignore non php files
            if (!$fileInfo->isFile() || $fileInfo->getExtension() !== 'php') {
                continue;
            }

            $documentationFiles[] = $fileInfo->getRealPath();
        }

        natsort($documentationFiles);
        return $documentationFiles;
    }

    private function loadDocumentationTestConfigFromFile(string $filePath): Config
    {
        if (false === ($testsConfig = include $filePath)) {
            throw new LogicException(sprintf(
                'An error occured while including documentation test config file "%s"',
                $filePath
            ));
        }

        if (!is_array($testsConfig)) {
            throw new LogicException(sprintf(
                'Documentation test config file "%s" expects returning an array, "%s" retrieved',
                $filePath,
                get_debug_type($testsConfig)
            ));
        }

        return Config::fromArray($testsConfig);
    }
}
