<?php

namespace DocumentationGenerator\FileSystem;

interface File
{
    public function fileExists($filePath);

    public function readFile($filePath);

    public function writeFile($filePath, $fileContent);

    public function appendFile($filePath, $fileContent);
}
