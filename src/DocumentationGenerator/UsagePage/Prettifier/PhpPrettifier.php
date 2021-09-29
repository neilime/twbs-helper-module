<?php

namespace DocumentationGenerator\UsagePage\Prettifier;

class PhpPrettifier
{
    private static $CONFIGURATION_PATH = __DIR__ . '/../../../../phpcs.xml';

    private $config;
    private $ruleset;

    public function __construct()
    {
        if (defined('PHP_CODESNIFFER_VERBOSITY') === false) {
            define('PHP_CODESNIFFER_VERBOSITY', false);
        }
        if (defined('PHP_CODESNIFFER_CBF') === false) {
            define('PHP_CODESNIFFER_CBF', true);
        }

        $this->config = new \PHP_CodeSniffer\Config([
            self::$CONFIGURATION_PATH
        ]);
        $this->config->stdin = true;
        $this->config->standards = ['Squiz'];

        $oRunner = new \PHP_CodeSniffer\Runner();
        $oRunner->config = $this->config;
        $oRunner->init();

        $this->ruleset = $oRunner->ruleset;
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
