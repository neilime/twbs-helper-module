<?php

namespace DocumentationGenerator\FileSystem\Local;

class File implements \DocumentationGenerator\FileSystem\File
{
    public function fileExists($filePath)
    {
        return file_exists($filePath);
    }

    public function readFile($filePath)
    {
        return file_get_contents($filePath);
    }

    public function writeFile($filePath, $fileContent)
    {
        file_put_contents($filePath, $fileContent);
    }

    public function appendFile($filePath, $fileContent)
    {
        file_put_contents($filePath, $fileContent, FILE_APPEND);
    }
}
