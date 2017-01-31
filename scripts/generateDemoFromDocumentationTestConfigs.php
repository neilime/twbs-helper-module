<?php

$sDemoContent = '';
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
        $sDemoContent .= generateDemoFromTestsConfig($aTestsConfig);
    } catch (\Exception $oException) {
        throw new \LogicException('An error occured while extracting test cases from documentation test config file "' . $sFilePath . '"', $oException->getCode(), $oException);
    }
}

echo $sDemoContent;

function generateDemoFromTestsConfig(array $aTestsConfig, $sParentTitle = null, $iHeading = 1) {
    if (!isset($aTestsConfig['title'])) {
        throw new \InvalidArgumentException('Argument "$aTestsConfig" does not have a defined "title" key');
    }
    $sTitle = $aTestsConfig['title'];

    if ($sParentTitle !== null) {
        if (!is_string($sParentTitle)) {
            throw new \InvalidArgumentException('Argument "$sParentTitle" expects a string or a null value, "' . (is_object($sParentTitle) ? get_class($sParentTitle) : gettype($sParentTitle)) . '" given');
        }
        $sTitle = trim($sParentTitle . ' / ' . $sTitle);
    }

    $sUrl = isset($aTestsConfig['url']) ? $aTestsConfig['url'] : '';

    // Demo content header
    $sDemoContent = // Title
            str_repeat('#', $iHeading) . ' ' . $sTitle . PHP_EOL .
            // Twitter bootstrap Documentation url
            ($sUrl ? '[Twitter bootstrap Documentation](' . $sUrl . ')' . PHP_EOL : '') . PHP_EOL;

    if (isset($aTestsConfig['tests'])) {
        if (!is_array($aTestsConfig)) {
            throw new \InvalidArgumentException('Argument "$aTestsConfig[\'tests\']" for "' . $sTitle . '" expects an array, "' . (is_object($aTestsConfig['tests']) ? get_class($aTestsConfig['tests']) : gettype($aTestsConfig['tests'])) . '" given');
        }
        foreach ($aTestsConfig['tests'] as $aNestedTestsConfig) {
            $sDemoContent .= generateDemoFromTestsConfig($aNestedTestsConfig, $sTitle, $iHeading + 1);
        }
        return $sDemoContent;
    }

    if (!isset($aTestsConfig['rendering'])) {
        throw new \InvalidArgumentException('Argument "$aTestsConfig" does not have a defined "rendering" key for "' . $sTitle . '"');
    }
    if (!is_callable($aTestsConfig['rendering'])) {
        throw new \InvalidArgumentException('Argument "$aTestsConfig[\'rendering\']" expects a callable value for "' . $sTitle . '", "' . (is_object($aTestsConfig['rendering']) ? get_class($aTestsConfig['rendering']) : gettype($aTestsConfig['rendering'])) . '" given');
    }

    $oReflectionFunction = new \ReflectionFunction($aTestsConfig['rendering']);
    $sRenderingContent = '';
    $aLines = file($oReflectionFunction->getFileName());
    for ($l = $oReflectionFunction->getStartLine(); $l < $oReflectionFunction->getEndLine(); $l++) {
        $sRenderingContent .= $aLines[$l];
    }

    $sSource = str_replace(array('$oView', 'return '), array('$this', 'echo '), $sRenderingContent);

    if (!isset($aTestsConfig['expected'])) {
        throw new \InvalidArgumentException('Argument "$aTestsConfig" does not have a defined "expected" key for "' . $sTitle . '"');
    }
    if (!is_string($aTestsConfig['expected'])) {
        throw new \InvalidArgumentException('Argument "$aTestsConfig[\'expected\']" expects a string for "' . $sTitle . '", "' . (is_object($aTestsConfig['expected']) ? get_class($aTestsConfig['expected']) : gettype($aTestsConfig['expected'])) . '" given');
    }

    $sId = strtolower(preg_replace('/_+/', '_', preg_replace('/[^a-z_]/i', '_', $sTitle)));

    $sDemoContent .= // Nav Tab header
            '<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="' . $sId . '_result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $sId . '_source">Source</a>
  </li>
</ul>' . PHP_EOL .
            // Nav tab content
            '<div class="tab-content">
  <div class="tab-pane active" id="' . $sId . '_result" role="tabpanel">' . $aTestsConfig['expected'] . '</div>
  <div class="tab-pane" id="' . $sId . '_source" role="tabpanel">' . $sSource . '</div>';

    return $sDemoContent;
}
