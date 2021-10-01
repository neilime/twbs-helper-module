<?php

namespace DocumentationGenerator\FileSystem;

interface File
{
    public function writeFile($sFilePath, $sFileContent);
    public function appendFile($sFilePath, $sFileContent);
}
