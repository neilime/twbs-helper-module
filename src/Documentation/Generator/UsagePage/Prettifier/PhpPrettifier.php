<?php

namespace Documentation\Generator\UsagePage\Prettifier;

use PhpCsFixer\Console\Application;

class PhpPrettifier
{
    private static $CONFIGURATION_FILE = '.php-cs-fixer.dist.php';
    private static $instance = null;

    /**
     * @var \Documentation\Generator\FileSystem\File
     */
    private $file;

    /**
     * @var \PhpCsFixer\Console\Application
     */
    private $application;

    private $configurationPath;

    private function __construct(\Documentation\Generator\Configuration $configuration)
    {
        $this->file = $configuration->getFile();
        $this->configurationPath = $configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$CONFIGURATION_FILE;

        $this->application = new Application();
        $this->application->setAutoExit(false);
    }

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(
        \Documentation\Generator\Configuration $configuration
    ): \Documentation\Generator\UsagePage\Prettifier\PhpPrettifier {
        if (self::$instance === null) {
            self::$instance = new self($configuration);
        }

        return self::$instance;
    }

    public function prettify($source)
    {
        // Write source to temporary file
        $tmpFile = $this->file->writeTmpFile('phpcsfixer', $source);

        try {
            $prettyfiedSource = $this->executePhpCsFixer($tmpFile);
            return $prettyfiedSource;
        } finally {
            $this->file->removeFile($tmpFile);
        }
    }

    private function executePhpCsFixer($tmpFile)
    {
        $input = new \Symfony\Component\Console\Input\ArrayInput(
            [
                'command' => 'fix',
                'path' => [$tmpFile],
                '--dry-run' => false,
                '--config' => $this->configurationPath,
            ]
        );

        $output = new \Symfony\Component\Console\Output\BufferedOutput();

        $this->application->run(
            $input,
            $output
        );

        $prettyfiedSource = trim($this->file->readFile($tmpFile));

        return $prettyfiedSource;
    }
}
