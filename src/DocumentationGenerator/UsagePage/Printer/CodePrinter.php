<?php

namespace DocumentationGenerator\UsagePage\Printer;

class CodePrinter extends \DocumentationGenerator\UsagePage\Printer\AbstractPrinter
{
    private static $CODE_TEMPLATE = '<Tabs>
<TabItem value="result" label="Result" default>
  <HtmlCode bootstrapVersion="%s">
      <div dangerouslySetInnerHTML={{ __html: `%s` }}></div>
  </HtmlCode>
</TabItem>
<TabItem value="source" label="Source">

```php
%s
```

</TabItem>
</Tabs>';

    public function getContentToPrint()
    {
        if (!$this->testConfig->rendering) {
            return "";
        }

        $sBootstrapVersion = $this->configuration->getBootstrapVersion();
        $sSource = $this->getRenderingSource();
        $sRenderResult = $this->getRenderResult();

        return sprintf(
            self::$CODE_TEMPLATE,
            $sBootstrapVersion,
            $sRenderResult,
            $sSource
        ) . PHP_EOL;
    }

    private function getRenderingSource()
    {
        // Extract rendering closure content
        $oReflectionFunction = new \ReflectionFunction($this->testConfig->rendering);
        $sSource = '';
        $aLines = file($oReflectionFunction->getFileName());
        for ($iLine = $oReflectionFunction->getStartLine(); $iLine < $oReflectionFunction->getEndLine() - 1; $iLine++) {
            $sLine = trim($aLines[$iLine]);
            $sSource .=  $sLine . PHP_EOL;
        }
        $sSource = '<?php' . PHP_EOL . PHP_EOL . str_replace(['$oView', ' . PHP_EOL'], ['$this', ''], $sSource);

        $oSourcePrettifier = \DocumentationGenerator\UsagePage\Prettifier\PhpPrettifier::getInstance(
            $this->configuration
        );
        return $oSourcePrettifier->prettify($sSource);
    }

    private function getRenderResult()
    {
        $sSnapshotPath = \TestSuite\Documentation\DocumentationTestSnapshot::getSnapshotPathFromTitle(
            $this->testConfig->title
        );
        $sSnapshotPath =  $sSnapshotPath . '__1.html';
        $sSnapshotContent = file_get_contents($sSnapshotPath);
        $oDomDocument = new \DOMDocument('1.0');
        $oDomDocument->preserveWhiteSpace = false;
        $oDomDocument->formatOutput = true;
        $oDomDocument->substituteEntities = true;

        @$oDomDocument->loadHTML($sSnapshotContent); // to ignore HTML5 errors

        $oBodyNode = $oDomDocument->getElementsByTagName('body')[0];

        $sRenderResult = '';
        $aChildren = $oBodyNode->childNodes;
        foreach ($aChildren as $oChildNode) {
            $sChildNodeContent = $oChildNode->ownerDocument->saveXML($oChildNode, LIBXML_NOEMPTYTAG);
            $sRenderResult .= $sChildNodeContent;
        }

        return trim($sRenderResult);
    }
}
