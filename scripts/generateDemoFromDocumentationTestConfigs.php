<?php

if (empty($_SERVER['argv'])) {
    throw new \LogicException('Arguments are undefined');
}
$aArguments = $_SERVER['argv'];

if (count($aArguments) !== 3) {
    throw new \LogicException(__FILE__ . ' expects 2 arguments, "' . (count($aArguments) - 1) . '" given');
}

$sDemoPageFilePath = $aArguments[1];
if (!file_exists($sDemoPageFilePath)) {
    throw new \LogicException('First argument "' . $sDemoPageFilePath . '" is not an existing file');
}
$sMenuPageFilePath = $aArguments[2];
if (!file_exists($sMenuPageFilePath)) {
    throw new \LogicException('Second argument "' . $sMenuPageFilePath . '" is not an existing file');
}

// Add default content to demo page
file_put_contents($sDemoPageFilePath, '---' . PHP_EOL . 'layout: default' . PHP_EOL . 'title:  "Demonstration"' . PHP_EOL . 'menu: "menu.html"' . PHP_EOL . '---' . PHP_EOL . 'This demonstration page shows how to render Twitter Boostrap elements. For each elements, you can see how to do it in "Source" tabs. These are supposed to be run into a view file.' . PHP_EOL . PHP_EOL);

// Add default content to menu page
file_put_contents($sMenuPageFilePath, '<ul class="nav flex-column">' . PHP_EOL);


foreach (new \DirectoryIterator(__DIR__ . '/../tests/TestSuite/Documentation') as $oFileInfo) {
    // Ignore non php filesand current class file
    if (!$oFileInfo->isFile() || $oFileInfo->getExtension() !== 'php' || $oFileInfo->getFilename() === 'DocumentationTest.php') {
        continue;
    }
    $sFilePath = $oFileInfo->getRealPath();
    if (false === ($aTestsConfig = include $sFilePath)) {
        throw new \LogicException('An error occured while including documentation test config file "' . $sFilePath . '"');
    }
    if (!is_array($aTestsConfig)) {
        throw new \LogicException('Documentation test config file "' . $sFilePath . '" expects returning an array, "' . (is_object($aTestsConfig) ? get_class($aTestsConfig) : gettype($aTestsConfig)) . '" retrieved');
    }
    try {
        $iPreviousHeading = 1;
        parseTestsConfig($sDemoPageFilePath, $sMenuPageFilePath, $aTestsConfig);
    } catch (\Exception $oException) {
        throw new \LogicException('An error occured while extracting test cases from documentation test config file "' . $sFilePath . '"', $oException->getCode(), $oException);
    }
}

// Add end of content to menu page
file_put_contents($sMenuPageFilePath, '</ul>', FILE_APPEND);

/** 
 * Extract test cases values for a given tests configuration
 */
function parseTestsConfig(string $sDemoPageFilePath,string $sMenuPageFilePath, array $aTestsConfig,int $iHeading = 1, string $sParentId  = '')
{
    if (!isset($aTestsConfig['title'])) {
        throw new \InvalidArgumentException('Argument "$aTestsConfig" does not have a defined "title" key');
    }
    $sTitle = $aTestsConfig['title'];

    // Menu page entry
    $sId = strtolower(preg_replace('/[^a-z-]/i', '-', $sTitle));
    if ($sParentId) {
        $sId = $sParentId . '-' . $sId;
    }
    file_put_contents($sMenuPageFilePath, str_repeat(' ', $iHeading * 4) . '<li class="nav-item"><a class="nav-link" href="#' . $sId . '">' . str_repeat('&nbsp;', ($iHeading - 1) * 2) . $sTitle . '</a>', FILE_APPEND);

    // Handle root tests for this tests config
    convertTestConfigForDemoPage($sDemoPageFilePath, $sTitle, $aTestsConfig, $iHeading, $sId);
    if (isset($aTestsConfig['tests'])) {
        if (!is_array($aTestsConfig)) {
            throw new \InvalidArgumentException('Argument "$aTestsConfig[\'tests\']" for "' . $sTitle . '" expects an array, "' . (is_object($aTestsConfig['tests']) ? get_class($aTestsConfig['tests']) : gettype($aTestsConfig['tests'])) . '" given');
        }
        // Menu page sublist
        $sIndentation = str_repeat(' ', $iHeading * 4);
        file_put_contents($sMenuPageFilePath, PHP_EOL . $sIndentation . '<ul class="nav flex-column">' . PHP_EOL, FILE_APPEND);
        $iHeading++;
        foreach ($aTestsConfig['tests'] as $aNestedTestsConfig) {
            parseTestsConfig($sDemoPageFilePath, $sMenuPageFilePath, $aNestedTestsConfig, $iHeading, $sId);
        }
        // End of menu page sublist and entry
        file_put_contents($sMenuPageFilePath, $sIndentation . '</ul>' . PHP_EOL . $sIndentation . '</li>' . PHP_EOL, FILE_APPEND);
    }
}

/**
 * Write the test content for the given params into the given demo page file
 */
function convertTestConfigForDemoPage(string $sDemoPageFilePath, string $sTitle, array $aTestConfig, int $iHeading, string $sParentId = '')
{
    // Demo content header
    $sUrl = isset($aTestConfig['url']) ? $aTestConfig['url'] : '';
    file_put_contents(
        $sDemoPageFilePath,
        // Title
        str_repeat('#', $iHeading) . ' ' . $sTitle . PHP_EOL .
            // Twitter bootstrap Documentation url
            ($sUrl ? '<small>[Twitter bootstrap Documentation](' . $sUrl . ')</small>' . PHP_EOL : '') . PHP_EOL,
        FILE_APPEND
    );

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
        if (!$sLine && !$sRenderingContent) {
            continue;
        }
        if ($sRenderingContent) {
            $sRenderingContent .= PHP_EOL;
        }

        if (preg_match('/^\)+[;|,]$/', $sLine) || $sLine === '}') {
            $iIndentation--;
        }

        $sRenderingContent .= str_repeat(' ', $iIndentation * 4) . $sLine;

        $sLastChar = substr($sLine, -1);
        if ($sLastChar === '{' || $sLastChar === '(') {
            $iIndentation++;
        }
    }

    $sSource = highlight_string('<?php' . PHP_EOL . str_replace(array('$oView'), array('$this'), $sRenderingContent), true);

    $sId = strtolower(preg_replace('/-+/', '--', preg_replace('/[^a-z-]/i', '--', $sTitle))) . '_' . uniqid();
    if ($sParentId) {
        $sId = $sParentId . '-' . $sId;
    }

    file_put_contents(
        $sDemoPageFilePath, // Nav Tab header
        '<ul class="nav nav-tabs" id="' . $sId . '_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#' . $sId . '_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#' . $sId . '_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>' . PHP_EOL .
            // Nav tab content
            '<div class="tab-content">
  <div class="tab-pane active" id="' . $sId . '_result" role="tabpanel"><br/>' . $sExpected . '</div>
  <div class="tab-pane" id="' . $sId . '_source" role="tabpanel"><pre>' . $sSource . '</pre></div>
</div><br/>' . PHP_EOL . PHP_EOL,
        FILE_APPEND
    );
}
