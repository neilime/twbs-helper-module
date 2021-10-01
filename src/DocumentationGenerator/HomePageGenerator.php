<?php

namespace DocumentationGenerator;

class HomePageGenerator
{
    private static $README_FILEPATH = __DIR__ . '/../../README.md';
    private static $HOMEPAGE_FILEPATH = __DIR__ . '/../../website/src/pages/index.mdx';

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
        $sReadmeContent = file_get_contents(self::$README_FILEPATH);

        $this->configuration->getFile()->writeFile(self::$HOMEPAGE_FILEPATH, '---
title: Home
---

' . $sReadmeContent);
    }
}
