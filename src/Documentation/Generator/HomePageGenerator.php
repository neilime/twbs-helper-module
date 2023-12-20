<?php

namespace Documentation\Generator;

class HomePageGenerator
{
    private static $README_FILEPATH = 'README.md';

    private static $HOMEPAGE_FILEPATH = 'website/src/pages/index.mdx';

    /**
     * @var \Documentation\Generator\Configuration
     */
    private $configuration;

    public function __construct(
        \Documentation\Generator\Configuration $configuration
    ) {
        $this->configuration = $configuration;
    }

    public function generate()
    {
        $readmePath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$README_FILEPATH;

        $file = $this->configuration->getFile();

        $readmeContent = $file->readFile($readmePath);

        $file->writeFile(
            self::$HOMEPAGE_FILEPATH,
            '---' . PHP_EOL . 'title: Home' . PHP_EOL . '---' . PHP_EOL . PHP_EOL . $readmeContent
        );
    }
}
