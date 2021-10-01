<?php

namespace DocumentationGenerator\UsagePage\Prettifier;

class PhpPrettifier
{
    private static $instance = null;

    private static $CONFIGURATION_PATH = 'phpcs.xml';

    private $config;
    private $ruleset;

    private function __construct(\DocumentationGenerator\Configuration $oConfiguration)
    {
        if (defined('PHP_CODESNIFFER_VERBOSITY') === false) {
            define('PHP_CODESNIFFER_VERBOSITY', false);
        }
        if (defined('PHP_CODESNIFFER_CBF') === false) {
            define('PHP_CODESNIFFER_CBF', true);
        }

        $oConfig = new \PHP_CodeSniffer\Config([
            $oConfiguration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$CONFIGURATION_PATH
        ]);
        $oConfig->stdin = true;
        $oConfig->standards = ['Squiz'];

        $oRunner = new \PHP_CodeSniffer\Runner();
        $oRunner->config = $oConfig;
        $oRunner->init();

        $this->config = $oConfig;
        $this->ruleset = $oRunner->ruleset;
    }

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(
        \DocumentationGenerator\Configuration $oConfiguration
    ): \DocumentationGenerator\UsagePage\Prettifier\PhpPrettifier {
        if (static::$instance === null) {
            static::$instance = new static($oConfiguration);
        }

        return static::$instance;
    }


    public function prettify($sSource)
    {

        $this->config->stdinContent = $sSource;
        $oFile = new \DocumentationGenerator\UsagePage\Prettifier\SourceFile(
            $sSource,
            $this->ruleset,
            $this->config
        );

        $oFile->process();
        $oFile->fixer->fixFile();

        return $oFile->getContent();
    }
}
