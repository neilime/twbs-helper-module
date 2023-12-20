<?php

namespace Documentation\Generator\UsagePage\Prettifier;

use PhpCsFixer\Console\Application;

class PhpPrettifier
{
    private static $CONFIGURATION_FILE = '.php-cs-fixer.dist.php';
    private static $instance = null;

    private $configurationPath = '.php-cs-fixer.dist.php';
    private $application;

    private function __construct(\Documentation\Generator\Configuration $configuration)
    {
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
        if (static::$instance === null) {
            static::$instance = new static($configuration);
        }

        return static::$instance;
    }


    public function prettify($source)
    {
        // Write source to temporary file
        $tmpFile = tempnam(sys_get_temp_dir(), 'phpcsfixer');
        file_put_contents($tmpFile, $source);

        try {
            $input = new \Symfony\Component\Console\Input\ArrayInput(
                [
                    'command' => 'fix',
                    'path' => [$tmpFile],
                    '--dry-run' => false,
                    '--config' => $this->configurationPath,
                ]
            );

            $output = new \Symfony\Component\Console\Output\BufferedOutput();

            $result = $this->application->run(
                $input,
                $output
            );

            if ($result !== 0) {
                throw new \RuntimeException('PhpCsFixer failed.' . $output->fetch());
            }

            $prettyfiedSource = trim(file_get_contents($tmpFile));

            return $prettyfiedSource;
        } finally {
            unlink($tmpFile);
        }
    }
}
