<?php

namespace DocumentationGenerator\UsagePage\Prettifier;

class PhpPrettifier
{
    private static $instance = null;

    private static $CONFIGURATION_PATH = 'phpcs.xml';

    private $config;
    private $ruleset;

    private function __construct(\DocumentationGenerator\Configuration $configuration)
    {
        if (defined('PHP_CODESNIFFER_VERBOSITY') === false) {
            define('PHP_CODESNIFFER_VERBOSITY', false);
        }
        if (defined('PHP_CODESNIFFER_CBF') === false) {
            define('PHP_CODESNIFFER_CBF', true);
        }

        $config = new \PHP_CodeSniffer\Config([
            $configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$CONFIGURATION_PATH
        ]);
        $config->stdin = true;
        $config->standards = ['Squiz'];

        $runner = new \PHP_CodeSniffer\Runner();
        $runner->config = $config;
        $runner->init();

        $this->config = $config;
        $this->ruleset = $runner->ruleset;
    }

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(
        \DocumentationGenerator\Configuration $configuration
    ): \DocumentationGenerator\UsagePage\Prettifier\PhpPrettifier {
        if (static::$instance === null) {
            static::$instance = new static($configuration);
        }

        return static::$instance;
    }


    public function prettify($source)
    {

        $this->config->stdinContent = $source;
        $file = new \DocumentationGenerator\UsagePage\Prettifier\SourceFile(
            $source,
            $this->ruleset,
            $this->config
        );

        $file->process();
        $file->fixer->fixFile();

        return $file->getContent();
    }
}
