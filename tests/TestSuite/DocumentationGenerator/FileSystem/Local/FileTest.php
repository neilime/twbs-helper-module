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

    protected function setUp(): void
    {
        $this->root = \org\bovigo\vfs\vfsStream::setup('exampleDir');

        $this->file = new \DocumentationGenerator\FileSystem\Local\File();
    }

    public function testFileExistsShouldReturnTrueWhenFileExists()
    {
        $fileName = 'test.txt';
        $filePath = $this->root->url() . DIRECTORY_SEPARATOR . $fileName;
        \org\bovigo\vfs\vfsStream::create([
            $fileName => 'test'
        ], $this->root);
        $this->assertTrue($this->file->fileExists($filePath));
    }

    public function testFileExistsShouldReturnFalseWhenFileDoesNotExists()
    {
        $filePath = $this->root->url() . DIRECTORY_SEPARATOR . 'test.txt';
        $this->assertFalse($this->file->fileExists($filePath));
    }

    public function testReadFile()
    {
        $fileName = 'test.txt';
        $fileContent = 'test content';
        $filePath = $this->root->url() . DIRECTORY_SEPARATOR . $fileName;
        \org\bovigo\vfs\vfsStream::create([
            $fileName => $fileContent
        ], $this->root);
        $this->assertEquals($fileContent, $this->file->readFile($filePath));
    }

    public function testWriteFile()
    {
        $fileName = 'test.txt';
        $filePath = $this->root->url() . DIRECTORY_SEPARATOR . $fileName;
        $content = 'test content';

        $this->file->writeFile($filePath, $content);

        $this->assertTrue($this->root->hasChild($fileName));

        $this->assertEquals($content, $this->root->getChild($fileName)->getContent());
    }

    public function testAppendFile()
    {
        $fileName = 'test.txt';
        $filePath = $this->root->url() . DIRECTORY_SEPARATOR . $fileName;
        $content = 'test content';
        \org\bovigo\vfs\vfsStream::create([
            $fileName => $content
        ], $this->root);

        $newContent = 'test new content';

        $this->file->appendFile($filePath, $newContent);

        $this->assertTrue($this->root->hasChild($fileName));

        $this->assertEquals($content . $newContent, $this->root->getChild($fileName)->getContent());
    }
}
