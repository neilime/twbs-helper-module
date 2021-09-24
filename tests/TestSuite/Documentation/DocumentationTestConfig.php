<?php

namespace TestSuite\Documentation;

class DocumentationTestConfig
{
    public $title;
    public $url;
    public $rendering;
    public $tests = [];

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
            $oDocumentationTestConfig->title = trim($oParentConfig->title . ' / ' . $oDocumentationTestConfig->title);
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

            foreach ($aTestConfig['tests'] as $aNestedTestsConfig) {
                $oDocumentationTestConfig->tests[] = static::fromArray($aNestedTestsConfig, $oDocumentationTestConfig);
            }
        }

        return $oDocumentationTestConfig;
    }
}
