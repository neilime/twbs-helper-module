<?php

const BOOTSTRAP_VERSION = '5.0';
const BOOTSTRAP_URL = 'https://getbootstrap.com/docs/' . BOOTSTRAP_VERSION;
const ROOT_DIR = __DIR__ . '/..';
const USAGE_FILEPATH = ROOT_DIR . '/docs/usage/README.md';

file_put_contents(USAGE_FILEPATH, '# Usage

## Introduction

The following docs page shows how to render Twitter Boostrap elements. For each elements, you can see how to do it in "Source" tabs. These are supposed to be run into a view file.

## Rendering

');

$aDocumentationFiles = [];
foreach (new \DirectoryIterator(ROOT_DIR . '/tests/TestSuite/Documentation') as $oFileInfo) {
    // Ignore non php filesand current class file
    if (!$oFileInfo->isFile() || $oFileInfo->getExtension() !== 'php' || $oFileInfo->getFilename() === 'DocumentationTest.php') {
        continue;
    }
    $aDocumentationFiles[] = $oFileInfo->getRealPath();
}
natsort($aDocumentationFiles);



foreach ($aDocumentationFiles as $sFilePath) {
    if (false === ($aTestsConfig = include $sFilePath)) {
        throw new \LogicException('An error occured while including documentation test config file "' . $sFilePath . '"');
    }
    if (!is_array($aTestsConfig)) {
        throw new \LogicException('Documentation test config file "' . $sFilePath . '" expects returning an array, "' . (is_object($aTestsConfig) ? get_class($aTestsConfig) : gettype($aTestsConfig)) . '" retrieved');
    }
    try {
        parseTestsConfig($aTestsConfig, 4);
    } catch (\Exception $oException) {
        throw new \LogicException('An error occured while extracting test cases from documentation test config file "' . $sFilePath . '"', $oException->getCode(), $oException);
    }
}

/** 
 * Extract test cases values for a given tests configuration
 */
function parseTestsConfig(array $aTestsConfig, int $iHeading)
{

    generateDocPageFromTest($aTestsConfig, $iHeading);

    if (isset($aTestsConfig['tests'])) {
        if (!is_array($aTestsConfig)) {
            throw new \InvalidArgumentException('Argument "$aTestsConfig[\'tests\']" for "' . $aTestsConfig['title'] . '" expects an array, "' . (is_object($aTestsConfig['tests']) ? get_class($aTestsConfig['tests']) : gettype($aTestsConfig['tests'])) . '" given');
        }
        $iHeading++;
        foreach ($aTestsConfig['tests'] as $aNestedTestsConfig) {
            parseTestsConfig($aNestedTestsConfig, $iHeading);
        }
    }
}

/**
 * Write the test content for the given params into the given demo page file
 */
function generateDocPageFromTest(array $aTestConfig, int $iHeading)
{
    $sTitle = $aTestConfig['title'];

    // Print title
    file_put_contents(
        USAGE_FILEPATH,
        str_repeat('#', $iHeading - 1) . ' ' . $sTitle . PHP_EOL,
        FILE_APPEND
    );

    // Print Twitter bootstrap Documentation url if any
    $sUrl = $aTestConfig['url'] ?? '';
    if ($sUrl) {
        $sPageDoc = '[Twitter bootstrap Documentation](' . str_replace('%bootstrap-url%', BOOTSTRAP_URL, $sUrl) . ')' . PHP_EOL;
        file_put_contents(USAGE_FILEPATH, $sPageDoc, FILE_APPEND);
    }

    if (isset($aTestConfig['rendering'])) {
        if (!isset($aTestConfig['expected'])) {
            throw new \InvalidArgumentException('Argument "$aTestConfig" does not have a defined "expected" key for "' . $sTitle . '"');
        }
    } elseif (isset($aTestConfig['expected'])) {
        throw new \InvalidArgumentException('Argument "$aTestConfig" does not have a defined "rendering" key for "' . $sTitle . '"');
    } else {
        return;
    }

    $oRendering = $aTestConfig['rendering'];
    $sExpected = $aTestConfig['expected'];

    // Extract rendering closure content
    $oReflectionFunction = new \ReflectionFunction($oRendering);
    $sRenderingContent = '';
    $aLines = file($oReflectionFunction->getFileName());
    $iIndentation = 0;
    for ($iLine = $oReflectionFunction->getStartLine(); $iLine < $oReflectionFunction->getEndLine() - 1; $iLine++) {
        $sLine = trim($aLines[$iLine]);
        $sLastChar = substr($sLine, -1);

        if (!$sLine && !$sRenderingContent) {
            continue;
        }
        if ($sRenderingContent) {
            $sRenderingContent .= PHP_EOL;
        }

        if (
            $iIndentation &&
            (preg_match('/^[\)|\]]+[;|,|\s].*$/', $sLine)
                || $sLine === '}'
                || in_array($sLastChar, [']'], true))
        ) {
            $iIndentation--;
        }

        $sRenderingContent .= str_repeat(' ', $iIndentation * 4) . $sLine;

        if (in_array($sLastChar, ['{', '(', '['], true)) {
            $iIndentation++;
        }
    }
    $sSource = str_replace(array('$oView'), array('$this'), $sRenderingContent);

    file_put_contents(
        USAGE_FILEPATH,
        '<!-- tabs:start -->

' . str_repeat('#', $iHeading) . ' **Result**

' . $sExpected . '

' . str_repeat('#', $iHeading) . ' **Source**

```php
' . $sSource . '
```

<!-- tabs:end -->


',
        FILE_APPEND
    );
}
