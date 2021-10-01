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

    public function __construct(\DocumentationGenerator\Configuration $oConfiguration)
    {
        $this->configuration = $oConfiguration;
    }

    public function generate()
    {
        $sReadmePath = $this->configuration->getRootDirPath() . DIRECTORY_SEPARATOR . self::$README_FILEPATH;
        $sReadmeContent = $this->configuration->getFile()->readFile($sReadmePath);

        $this->configuration->getFile()->writeFile(self::$HOMEPAGE_FILEPATH, '---
title: Home
---

' . $sReadmeContent);
    }
}
