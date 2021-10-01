<?php

namespace DocumentationGenerator\FileSystem\Local;

class File implements \DocumentationGenerator\FileSystem\File
{
    public function fileExists($sFilePath)
    {
        return file_exists($sFilePath);
    }

    public function readFile($sFilePath)
    {
        return file_get_contents($sFilePath);
    }

    public function writeFile($sFilePath, $sFileContent)
    {
        file_put_contents($sFilePath, $sFileContent);
    }

    public function appendFile($sFilePath, $sFileContent)
    {
        file_put_contents($sFilePath, $sFileContent, FILE_APPEND);
    }
}
