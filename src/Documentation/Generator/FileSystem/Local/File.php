<?php

namespace Documentation\Generator\FileSystem\Local;

class File implements \Documentation\Generator\FileSystem\File
{
    public function dirExists($dirPath)
    {
        return is_dir($dirPath);
    }

    public function removeDir($dirPath)
    {
        if (!$this->dirExists($dirPath)) {
            throw new \InvalidArgumentException('Argument "$dirPath" is not an existing directory path');
        }

        $dirObj = new \RecursiveDirectoryIterator($dirPath, \RecursiveDirectoryIterator::SKIP_DOTS);
        $files = new \RecursiveIteratorIterator($dirObj, \RecursiveIteratorIterator::CHILD_FIRST);
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

    public function appendFile($filePath, $fileContent)
    {
        file_put_contents($filePath, $fileContent, FILE_APPEND);
    }
}
