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

    /**
     * @var \Documentation\Generator\FileSystem\File
     */
    private $file;

    public function __construct(
        \Documentation\Generator\Configuration $configuration,
        \Documentation\Generator\FileSystem\File $file
    ) {
        $this->configuration = $configuration;
        $this->file = $file;
    }

    public function generate()
    {
        $readmePath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$README_FILEPATH;
        $readmeContent = $this->file->readFile($readmePath);

        $this->file->writeFile(
            self::$HOMEPAGE_FILEPATH,
            '---' . PHP_EOL . 'title: Home' . PHP_EOL . '---' . PHP_EOL . PHP_EOL . $readmeContent
        );
    }
}
