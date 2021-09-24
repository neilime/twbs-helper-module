<?php

namespace TestSuite\Documentation;

class DocumentationTestConfigsLoader
{

    public static function loadDocumentationTestConfigs()
    {
        $aDocumentationFiles = self::getDocumentationFiles();
        $aDocumentationTestConfigs = [];
        foreach ($aDocumentationFiles as $sFilePath) {
            $oDocumentationTestConfig = self::loadDocumentationTestConfigFromFile($sFilePath);
            if ($oDocumentationTestConfig) {
                $aDocumentationTestConfigs[] = $oDocumentationTestConfig;
            }
        }
        return $aDocumentationTestConfigs;
    }

    private static function getDocumentationFiles()
    {
        $aDocumentationFiles = [];
        foreach (new \DirectoryIterator(__DIR__ . '/Tests') as $oFileInfo) {
            // Ignore non php files
            if (!$oFileInfo->isFile() || $oFileInfo->getExtension() !== 'php') {
                continue;
            }
            $aDocumentationFiles[] = $oFileInfo->getRealPath();
        }
        natsort($aDocumentationFiles);
        return $aDocumentationFiles;
    }

    private static function loadDocumentationTestConfigFromFile($sFilePath)
    {
        if (false === ($aTestsConfig = include $sFilePath)) {
            throw new \LogicException(sprintf(
                'An error occured while including documentation test config file "%s"',
                $sFilePath
            ));
        }
        if (!is_array($aTestsConfig)) {
            throw new \LogicException(sprintf(
                'Documentation test config file "%s" expects returning an array, "%s" retrieved',
                $sFilePath,
                is_object($aTestsConfig) ? get_class($aTestsConfig) : gettype($aTestsConfig)
            ));
        }

        return \TestSuite\Documentation\DocumentationTestConfig::fromArray($aTestsConfig);
    }
}
