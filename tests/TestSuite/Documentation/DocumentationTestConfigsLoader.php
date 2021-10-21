<?php

namespace TestSuite\Documentation;

class DocumentationTestConfigsLoader
{

    public static function loadDocumentationTestConfigs()
    {
        $documentationFiles = self::getDocumentationFiles();
        $documentationTestConfigs = [];
        $position = 1;
        foreach ($documentationFiles as $documentationFile) {
            $documentationTestConfig = self::loadDocumentationTestConfigFromFile($documentationFile);
            if ($documentationTestConfig) {
                $documentationTestConfig->position = $position;
                $documentationTestConfigs[] = $documentationTestConfig;
                ++$position;
            }
        }

        return $documentationTestConfigs;
    }

    private static function getDocumentationFiles()
    {
        $documentationFiles = [];
        foreach (new \DirectoryIterator(__DIR__ . '/Tests') as $fileInfo) {
            // Ignore non php files
            if (!$fileInfo->isFile() || $fileInfo->getExtension() !== 'php') {
                continue;
            }

            $documentationFiles[] = $fileInfo->getRealPath();
        }

        natsort($documentationFiles);
        return $documentationFiles;
    }

    private static function loadDocumentationTestConfigFromFile($filePath)
    {
        if (false === ($testsConfig = include $filePath)) {
            throw new \LogicException(sprintf(
                'An error occured while including documentation test config file "%s"',
                $filePath
            ));
        }

        if (!is_array($testsConfig)) {
            throw new \LogicException(sprintf(
                'Documentation test config file "%s" expects returning an array, "%s" retrieved',
                $filePath,
                is_object($testsConfig) ? get_class($testsConfig) : gettype($testsConfig)
            ));
        }

        return \TestSuite\Documentation\DocumentationTestConfig::fromArray($testsConfig);
    }
}
