<?php

const BOOTSTRAP_VERSION = '4.5';
const BOOTSTRAP_URL = 'https://getbootstrap.com/docs/' . BOOTSTRAP_VERSION;
const DOCUMENTATION_DIR = __DIR__ . '/../../website/docs';
$sSidebarFilepath = DOCUMENTATION_DIR . '/sidebars.js';

$aDocumentationFiles = [];
$aSidebarItems = [];
foreach (new \DirectoryIterator(__DIR__ . '/../tests/TestSuite/Documentation') as $oFileInfo) {
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
        $aSidebarItems = parseTestsConfig($aTestsConfig, 1, $aSidebarItems);
    } catch (\Exception $oException) {
        throw new \LogicException('An error occured while extracting test cases from documentation test config file "' . $sFilePath . '"', $oException->getCode(), $oException);
    }
}

$sSidebarContent = file_get_contents($sSidebarFilepath);
$sNewSidebarContent = preg_replace('/(const generatedSidebar = )\[.*\](;)/is', '$1' . json_encode($aSidebarItems) . '$2', $sSidebarContent);
file_put_contents($sSidebarFilepath, $sNewSidebarContent);


class GeneratedPage
{
    public string $slug;
    public string $path;
}

function generatePage(string $sTitle): GeneratedPage
{
    $oGeneratedPage = new GeneratedPage();
    $oGeneratedPage->slug = slugify($sTitle);
    $oGeneratedPage->path = DOCUMENTATION_DIR . '/rendering/' . $oGeneratedPage->slug . '.mdx';

    file_put_contents($oGeneratedPage->path, '---
id: ' . $oGeneratedPage->slug . '
title: ' . $sTitle . '
---

import ReactHtmlParser from \'react-html-parser\';
import Tabs from \'@theme/Tabs\';
import TabItem from \'@theme/TabItem\';' . PHP_EOL . PHP_EOL);

    return $oGeneratedPage;
}

/** 
 * Extract test cases values for a given tests configuration
 */
function parseTestsConfig(array $aTestsConfig, int $iHeading, array $aSidebarItems, string $sPagePath = null): array
{
    switch ($iHeading) {
        case 1:
            $aSidebarItems[] = [
                'type' => 'category',
                'label' => $aTestsConfig['title'],
                'items' => [],
            ];
            break;
        case 2:
            $oGeneratedPage = generatePage($aTestsConfig['title']);
            $sPagePath = $oGeneratedPage->path;
            $aSidebarItems[count($aSidebarItems) - 1]['items'][] = 'rendering/' . $oGeneratedPage->slug;

        default:
            generateDocPageFromTest($sPagePath, $aTestsConfig, $iHeading);
    }


    if (isset($aTestsConfig['tests'])) {
        if (!is_array($aTestsConfig)) {
            throw new \InvalidArgumentException('Argument "$aTestsConfig[\'tests\']" for "' . $aTestsConfig['title'] . '" expects an array, "' . (is_object($aTestsConfig['tests']) ? get_class($aTestsConfig['tests']) : gettype($aTestsConfig['tests'])) . '" given');
        }
        $iHeading++;
        foreach ($aTestsConfig['tests'] as $aNestedTestsConfig) {
            $aSidebarItems = parseTestsConfig($aNestedTestsConfig, $iHeading, $aSidebarItems, $sPagePath);
        }
    }
    return $aSidebarItems;
}

/**
 * Write the test content for the given params into the given demo page file
 */
function generateDocPageFromTest(string $sPagePath, array $aTestConfig, int $iHeading)
{
    $sTitle = $aTestConfig['title'];

    // Print title for sub sections
    if ($iHeading > 2) {
        file_put_contents(
            $sPagePath,
            str_repeat('#', $iHeading - 1) . ' ' . $sTitle . PHP_EOL,
            FILE_APPEND
        );
    }

    // Print Twitter bootstrap Documentation url if any
    $sUrl = $aTestConfig['url'] ?? '';
    if ($sUrl) {
        $sPageDoc = '[Twitter bootstrap Documentation](' . str_replace('%bootstrap-url%', BOOTSTRAP_URL, $sUrl) . ')' . PHP_EOL;
        file_put_contents($sPagePath,        $sPageDoc,        FILE_APPEND);
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
        $sPagePath,
        '<Tabs
    defaultValue="result"
    values={[
      {label: \'Result\', value: \'result\'},
      {label: \'Source\', value: \'source\'},
    ]}>
<TabItem value="result">{ ReactHtmlParser(`' . $sExpected . '`) }</TabItem>
<TabItem value="source">

```php
' . $sSource . '
```

</TabItem>
</Tabs>' . PHP_EOL . PHP_EOL,
        FILE_APPEND
    );
}

function slugify($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}
