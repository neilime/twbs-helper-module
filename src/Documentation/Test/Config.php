<?php

namespace Documentation\Test;

class Config
{
    public static $TITLE_SEPARATOR = ' / ';

    /**
     * @var string|null
     */
    public $title = null;

    /**
     * @var string
     */
    public $url;

    public $rendering;

    public $tests = [];

    public $position = 1;

    public function getShortTitle()
    {
        $titleParts = $this->getTitleParts();
        return array_pop($titleParts);
    }

    public function getNestedPosition()
    {
        return count($this->getTitleParts());
    }

    public function getTitleParts()
    {
        return explode(self::$TITLE_SEPARATOR, $this->title ?? '');
    }

    public static function fromArray(
        array $testConfig,
        ?\Documentation\Test\Config $documentationTestConfig = null
    ): self {

        $self = new self();

        if (!isset($testConfig['title'])) {
            throw new \InvalidArgumentException('Argument "$testConfig" does not have a defined "title" key');
        }

        $self->title = $testConfig['title'];

        if ($documentationTestConfig !== null) {
            $title = trim($documentationTestConfig->title . self::$TITLE_SEPARATOR . $self->title);
            $self->title = $title;
        }

        if (isset($testConfig['url'])) {
            $self->url = $testConfig['url'];
        }

        if (isset($testConfig['rendering'])) {
            if (!is_callable($testConfig['rendering'])) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$testConfig[\'rendering\']" expects a callable value for "%s", "%s" given',
                    $self->title,
                    is_object($testConfig['rendering'])
                        ? get_class($testConfig['rendering'])
                        : gettype($testConfig['rendering'])
                ));
            }

            $self->rendering = $testConfig['rendering'];
        }

        if (isset($testConfig['tests'])) {
            if (!is_array($testConfig['tests'])) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$testConfig[\'tests\']" for "%s" expects an array, "%s" given',
                    $self->title,
                    is_object($testConfig['tests'])
                        ? get_class($testConfig['tests'])
                        : gettype($testConfig['tests'])
                ));
            }

            $position = 1;
            foreach ($testConfig['tests'] as $nestedTestsConfig) {
                $nestedTestsConfig = static::fromArray($nestedTestsConfig, $self);
                $nestedTestsConfig->position = $position;
                ++$position;

                $self->tests[] = $nestedTestsConfig;
            }
        }

        return $self;
    }
}
