<?php

namespace TestSuite\Documentation;

class DocumentationTestConfig
{
    public static $TITLE_SEPARATOR = ' / ';
    public $title;
    public $url;
    public $rendering;
    public $tests = [];
    public $position = 1;

    public function getShortTitle()
    {
        $aTitleParts = $this->getTitleParts();
        return array_pop($aTitleParts);
    }

    public function getNestedPosition()
    {
        return count($this->getTitleParts());
    }

    public function getTitleParts()
    {
        return explode(self::$TITLE_SEPARATOR, $this->title);
    }

    public static function fromArray(
        array $aTestConfig,
        \TestSuite\Documentation\DocumentationTestConfig $oParentConfig = null
    ): self {

        $oDocumentationTestConfig = new self();

        if (!isset($aTestConfig['title'])) {
            throw new \InvalidArgumentException('Argument "$aTestConfig" does not have a defined "title" key');
        }
        $oDocumentationTestConfig->title = $aTestConfig['title'];

        if ($oParentConfig) {
            $oDocumentationTestConfig->title = trim($oParentConfig->title . self::$TITLE_SEPARATOR . $oDocumentationTestConfig->title);
        }

        if (isset($aTestConfig['url'])) {
            $oDocumentationTestConfig->url = $aTestConfig['url'];
        }

        if (isset($aTestConfig['rendering'])) {
            if (!is_callable($aTestConfig['rendering'])) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$aTestConfig[\'rendering\']" expects a callable value for "%s" ", "%s" given',
                    $oDocumentationTestConfig->title,
                    is_object($aTestConfig['rendering'])
                        ? get_class($aTestConfig['rendering'])
                        : gettype($aTestConfig['rendering'])
                ));
            }
            $oDocumentationTestConfig->rendering = $aTestConfig['rendering'];
        }

        if (isset($aTestConfig['tests'])) {
            if (!is_array($aTestConfig)) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$aTestConfig[\'tests\']" for "%s" expects an array, "%s" given',
                    $oDocumentationTestConfig->title,
                    is_object($aTestConfig['tests'])
                        ? get_class($aTestConfig['tests'])
                        : gettype($aTestConfig['tests'])
                ));
            }

            $iPosition = 1;
            foreach ($aTestConfig['tests'] as $aNestedTestsConfig) {
                $oNestedTestsConfig = static::fromArray($aNestedTestsConfig, $oDocumentationTestConfig);;
                $oNestedTestsConfig->position = $iPosition;
                $iPosition++;

                $oDocumentationTestConfig->tests[] = $oNestedTestsConfig;
            }
        }

        return $oDocumentationTestConfig;
    }
}
