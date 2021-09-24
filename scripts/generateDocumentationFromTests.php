<?php

error_reporting(E_ALL | E_STRICT);

// Composer autoloading
if (!file_exists($sComposerAutoloadPath = __DIR__ . '/../vendor/autoload.php')) {
    throw new \LogicException('Composer autoload file "' . $sComposerAutoloadPath . '" does not exist');
}
if (false === (include $sComposerAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including composer autoload file "%s"',
        $sComposerAutoloadPath
    ));
}

const BOOTSTRAP_VERSION = '4.5';
const BOOTSTRAP_URL = 'https://getbootstrap.com/docs/' . BOOTSTRAP_VERSION;
const ROOT_DIR = __DIR__ . '/..';
const USAGE_FILEPATH = ROOT_DIR . '/docs/usage/README.md';

file_put_contents(USAGE_FILEPATH, '# Usage

## Introduction

The following docs page shows how to render Twitter Boostrap elements. For each elements, you can see how to do it in "Source" tabs. These are supposed to be run into a view file.

## Rendering

');

$aTestConfigs = \TestSuite\Documentation\DocumentationTestConfigsLoader::loadDocumentationTestConfigs();


foreach ($aTestConfigs as $oTestConfig) {
    try {
        parseTestsConfig($oTestConfig, 4);
    } catch (\Exception $oException) {
        throw new \LogicException('An error occured while parsing test config "' . $oTestConfig->title . '"', $oException->getCode(), $oException);
    }
}

/** 
 * Extract test cases values for a given tests configuration
 */
function parseTestsConfig(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig, int $iHeading)
{

    generateDocPageFromTest($oTestConfig, $iHeading);

    $iHeading++;
    foreach ($oTestConfig->tests as $oNestedTestConfig) {
        parseTestsConfig($oNestedTestConfig, $iHeading);
    }
}

/**
 * Write the test content for the given params into the given demo page file
 */
function generateDocPageFromTest(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig, int $iHeading)
{
    $aTitleParts = explode(' / ', $oTestConfig->title);
    $sTitle = array_pop($aTitleParts);

    // Print title
    file_put_contents(
        USAGE_FILEPATH,
        str_repeat('#', $iHeading - 1) . ' ' . $sTitle . PHP_EOL,
        FILE_APPEND
    );

    // Print Twitter bootstrap Documentation url if any
    $sUrl = $oTestConfig->url;
    if ($sUrl) {
        $sPageDoc = '[Twitter bootstrap Documentation](' . str_replace('%bootstrap-url%', BOOTSTRAP_URL, $sUrl) . ')' . PHP_EOL;
        file_put_contents(USAGE_FILEPATH, $sPageDoc, FILE_APPEND);
    }

    if (!$oTestConfig->rendering) {
        return;
    }

    $sSource = getRenderingSource($oTestConfig->rendering);
    $sRenderResult = getRenderResult($oTestConfig->title);

    file_put_contents(
        USAGE_FILEPATH,
        '<!-- tabs:start -->

' . str_repeat('#', $iHeading) . ' **Result**

' . $sRenderResult . '

' . str_repeat('#', $iHeading) . ' **Source**

```php
' . $sSource . '
```

<!-- tabs:end -->


',
        FILE_APPEND
    );
}

function getRenderingSource($oRendering)
{
    // Extract rendering closure content
    $oReflectionFunction = new \ReflectionFunction($oRendering);
    $sSource = '';
    $aLines = file($oReflectionFunction->getFileName());
    for ($iLine = $oReflectionFunction->getStartLine(); $iLine < $oReflectionFunction->getEndLine() - 1; $iLine++) {
        $sLine = trim($aLines[$iLine]);
        $sLastChar = substr($sLine, -1);

        if (!$sLine && !$sSource) {
            continue;
        }
        if ($sSource) {
            $sSource .= PHP_EOL;
        }

        $sSource .=  $sLine;
    }
    $sSource = '<?php' . PHP_EOL . str_replace(array('$oView'), array('$this'), $sSource);

    $parser = (new \PhpParser\ParserFactory)->create(\PhpParser\ParserFactory::PREFER_PHP7);
    $aParsedSourceAst = $parser->parse($sSource);
    $oPrettyPrinter = new PhpParser\PrettyPrinter\Standard;
    $sSource = $oPrettyPrinter->prettyPrintFile($aParsedSourceAst);
    return $sSource;
}

function getRenderResult($sTitle)
{
    $sSnapshotPath = \TestSuite\Documentation\DocumentationTestSnapshot::getSnapshotPathFromTitle($sTitle) . '__1.html';
    $sSnapshotContent = file_get_contents($sSnapshotPath);

    $oDomDocument = new DOMDocument('1.0');
    $oDomDocument->preserveWhiteSpace = false;
    $oDomDocument->formatOutput = true;

    @$oDomDocument->loadHTML($sSnapshotContent); // to ignore HTML5 errors

    $oBodyNode = $oDomDocument->getElementsByTagName('body')[0];

    $sRenderResult = '';
    $aChildren = $oBodyNode->childNodes;
    foreach ($aChildren as $oChildNode) {
        $sRenderResult .= $oChildNode->ownerDocument->saveXML($oChildNode);
    }

    return $sRenderResult;
}
