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

    protected function getContentToPrint()
    {
        if (!$this->testConfig->rendering) {
            return "";
        }

        $bootstrapVersion = $this->configuration->getBootstrapVersion();
        $source = $this->getRenderingSource();
        $renderResult = $this->getRenderResult();

        return sprintf(
            self::$CODE_TEMPLATE,
            $bootstrapVersion,
            $renderResult,
            $source
        ) . PHP_EOL;
    }

    private function getRenderingSource()
    {
        // Extract rendering closure content
        $reflectionFunction = new \ReflectionFunction($this->testConfig->rendering);
        $source = '';
        $lines = file($reflectionFunction->getFileName());
        for (
            $startLine = $reflectionFunction->getStartLine();
            $startLine < $reflectionFunction->getEndLine() - 1;
            ++$startLine
        ) {
            $line = trim($lines[$startLine]);
            $source .=  $line . PHP_EOL;
        }

        $source = '<?php' . PHP_EOL . PHP_EOL . str_replace(['$view', ' . PHP_EOL'], ['$this', ''], $source);

        $phpPrettifier = \DocumentationGenerator\UsagePage\Prettifier\PhpPrettifier::getInstance(
            $this->configuration
        );
        return $phpPrettifier->prettify($source);
    }

    private function getRenderResult()
    {
        $snapshotPath = \TestSuite\Documentation\DocumentationTestSnapshot::getSnapshotPathFromTitle(
            $this->testConfig->title
        );
        $snapshotPath .= '__1.html';

        $snapshotContent = file_get_contents($snapshotPath);
        $domDocument = new \DOMDocument('1.0');
        $domDocument->preserveWhiteSpace = false;
        $domDocument->formatOutput = true;
        $domDocument->substituteEntities = true;

        @$domDocument->loadHTML($snapshotContent); // to ignore HTML5 errors

        $bodyNode = $domDocument->getElementsByTagName('body')[0];

        $renderResult = '';
        $children = $bodyNode->childNodes;
        foreach ($children as $child) {
            $childNodeContent = $child->ownerDocument->saveXML($child, LIBXML_NOEMPTYTAG);
            $renderResult .= $childNodeContent;
        }

        return trim($renderResult);
    }
}
