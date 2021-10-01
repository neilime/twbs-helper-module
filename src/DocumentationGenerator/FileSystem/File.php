<?php

namespace DocumentationGenerator\FileSystem;

interface File
{
    public function fileExists($sFilePath);
    public function readFile($sFilePath);
    public function writeFile($sFilePath, $sFileContent);
    public function appendFile($sFilePath, $sFileContent);
}
