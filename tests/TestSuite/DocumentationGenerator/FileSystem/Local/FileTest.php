<?php

namespace TestSuite\DocumentationGenerator\FileSystem\Local;

class FileTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \DocumentationGenerator\FileSystem\Local\File
     */
    protected $file;

    /**
     * @var \org\bovigo\vfs\vfsStreamDirectory
     */
    protected $root;

    public function setUp(): void
    {
        $this->root = \org\bovigo\vfs\vfsStream::setup('exampleDir');

        $this->file = new \DocumentationGenerator\FileSystem\Local\File();
    }

    public function testFileExistsShouldReturnTrueWhenFileExists()
    {
        $sFileName = 'test.txt';
        $sFilePath = $this->root->url() . DIRECTORY_SEPARATOR . $sFileName;
        \org\bovigo\vfs\vfsStream::create([
            $sFileName => 'test'
        ], $this->root);
        $this->assertTrue($this->file->fileExists($sFilePath));
    }

    public function testFileExistsShouldReturnFalseWhenFileDoesNotExists()
    {
        $sFilePath = $this->root->url() . DIRECTORY_SEPARATOR . 'test.txt';
        $this->assertFalse($this->file->fileExists($sFilePath));
    }

    public function testReadFile()
    {
        $sFileName = 'test.txt';
        $sFileContent = 'test content';
        $sFilePath = $this->root->url() . DIRECTORY_SEPARATOR . $sFileName;
        \org\bovigo\vfs\vfsStream::create([
            $sFileName => $sFileContent
        ], $this->root);
        $this->assertEquals($sFileContent, $this->file->readFile($sFilePath));
    }

    public function testWriteFile()
    {
        $sFileName = 'test.txt';
        $sFilePath = $this->root->url() . DIRECTORY_SEPARATOR . $sFileName;
        $sContent = 'test content';

        $this->file->writeFile($sFilePath, $sContent);

        $this->assertTrue($this->root->hasChild($sFileName));

        $this->assertEquals($sContent, $this->root->getChild($sFileName)->getContent());
    }

    public function testAppendFile()
    {
        $sFileName = 'test.txt';
        $sFilePath = $this->root->url() . DIRECTORY_SEPARATOR . $sFileName;
        $sContent = 'test content';
        \org\bovigo\vfs\vfsStream::create([
            $sFileName => $sContent
        ], $this->root);

        $sNewContent = 'test new content';

        $this->file->appendFile($sFilePath, $sNewContent);

        $this->assertTrue($this->root->hasChild($sFileName));

        $this->assertEquals($sContent . $sNewContent, $this->root->getChild($sFileName)->getContent());
    }
}
