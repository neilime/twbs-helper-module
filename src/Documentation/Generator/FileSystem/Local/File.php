<?php

namespace Documentation\Generator\FileSystem\Local;

use InvalidArgumentException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class File implements \Documentation\Generator\FileSystem\File
{
    public function dirExists($dirPath)
    {
        return is_dir($dirPath);
    }

    public function removeDir($dirPath)
    {
        if (!$this->dirExists($dirPath)) {
            throw new InvalidArgumentException('Given directory path "' . $dirPath . '" is not an existing directory path');
        }

        $dirObj = new RecursiveDirectoryIterator($dirPath, RecursiveDirectoryIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($dirObj, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $path) {
            $path->isDir() && !$path->isLink() ? rmdir($path->getPathname()) : unlink($path->getPathname());
        }
        rmdir($dirPath);
    }

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

    public function writeTmpFile($fileName, $fileContent)
    {
        $tmpFile = tempnam(sys_get_temp_dir(), $fileName);
        $this->writeFile($tmpFile, $fileContent);
        return $tmpFile;
    }

    public function appendFile($filePath, $fileContent)
    {
        file_put_contents($filePath, $fileContent, FILE_APPEND);
    }


    public function removeFile($filePath)
    {
        if (!$this->fileExists($filePath)) {
            throw new InvalidArgumentException('Given file path does "' . $filePath . '" not exists');
        }

        unlink($filePath);
    }
}
