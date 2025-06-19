<?php

namespace Documentation\Generator\UsagePage\Prettifier;

use PhpCsFixer\Console\Application;
use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\File;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

class PhpPrettifier
{
    private static $CONFIGURATION_FILE = '.php-cs-fixer.dist.php';
    private static $instance = null;

    /**
     * @var File
     */
    private $file;

    /**
     * @var Application
     */
    private $application;

    private $configurationPath;

    private function __construct(Configuration $configuration)
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
        Configuration $configuration
    ): PhpPrettifier {
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
        $input = new ArrayInput(
            [
                'command' => 'fix',
                'path' => [$tmpFile],
                '--dry-run' => false,
                '--config' => $this->configurationPath,
            ]
        );

        $output = new BufferedOutput();

        $this->application->run(
            $input,
            $output
        );

        $prettyfiedSource = trim((string) $this->file->readFile($tmpFile));

        return $prettyfiedSource;
    }
}
