<?php

namespace DocumentationGenerator\FileSystem\Local;

class File implements \DocumentationGenerator\FileSystem\File
{

    public function writeFile($sFilePath, $sFileContent)
    {
        file_put_contents($sFilePath, $sFileContent);
    }

    public function appendFile($sFilePath, $sFileContent)
    {
        file_put_contents($sFilePath, $sFileContent, FILE_APPEND);
    }
}
