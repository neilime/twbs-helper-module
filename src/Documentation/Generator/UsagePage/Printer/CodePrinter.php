<?php

namespace Documentation\Generator\UsagePage\Printer;

class CodePrinter extends \Documentation\Generator\UsagePage\Printer\AbstractPrinter
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
</Tabs>
';

    public function getPageContent()
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
        );
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

        $phpPrettifier = \Documentation\Generator\UsagePage\Prettifier\PhpPrettifier::getInstance(
            $this->configuration
        );

        return $phpPrettifier->prettify($source);
    }

    private function getRenderResult()
    {
        $snapshotService = new \Documentation\Test\SnapshotService($this->configuration->getTestsDirPath());
        $snapshotPath = $snapshotService->getSnapshotPathFromTitle($this->testConfig->title);

        $snapshotContent = $this->configuration->getFile()->readFile($snapshotPath);
        return trim($snapshotContent);
    }
}
