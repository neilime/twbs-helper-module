<?php

namespace DocumentationGenerator;

class HomePageGenerator
{
    private static $README_FILEPATH = 'README.md';

    private static $HOMEPAGE_FILEPATH = 'website/src/pages/index.mdx';

    /**
     * @var \DocumentationGenerator\Configuration
     */
    private $configuration;

    public function __construct(\DocumentationGenerator\Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function generate()
    {
        $readmePath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$README_FILEPATH;
        $readmeContent = $this->configuration->getFile()->readFile($readmePath);

        $this->configuration->getFile()->writeFile(self::$HOMEPAGE_FILEPATH, '---
title: Home
---

' . $readmeContent);
    }
}
