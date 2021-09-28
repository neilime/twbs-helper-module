<?php

namespace DocumentationGenerator;

class HomePageGenerator
{
    private static $README_FILEPATH = __DIR__ . '/../../README.md';
    private static $HOMEPAGE_FILEPATH = __DIR__ . '/../../website/src/pages/index.mdx';

    private $file;

    public function __construct(\DocumentationGenerator\FileSystem\File $oFile)
    {
        $this->file = $oFile;
    }

    public function generate()
    {
        $sReadmeContent = file_get_contents(self::$README_FILEPATH);

        $this->file->writeFile(self::$HOMEPAGE_FILEPATH, '---
title: Home
---

' . $sReadmeContent);
    }
}
