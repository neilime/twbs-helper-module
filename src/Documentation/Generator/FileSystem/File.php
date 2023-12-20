<?php

namespace Documentation\Generator\FileSystem;

interface File
{
    public function dirExists($filePath);

    public function removeDir($filePath);

    public function fileExists($filePath);

    public function readFile($filePath);

    public function writeFile($filePath, $fileContent);

    public function writeTmpFile($fileName, $fileContent);

    public function appendFile($filePath, $fileContent);

    public function removeFile($filePath);
}
