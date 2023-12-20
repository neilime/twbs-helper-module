<?php

namespace TestSuite\Documentation\Generator\FileSystem\Local;

class FileTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Documentation\Generator\FileSystem\Local\File
     */
    protected $file;

    /**
     * @var \org\bovigo\vfs\vfsStreamDirectory
     */
    protected $root;

    protected function setUp(): void
    {
        $this->root = \org\bovigo\vfs\vfsStream::setup('exampleDir');

        $this->file = new \Documentation\Generator\FileSystem\Local\File();
    }

    public function testDirExistsShouldReturnTrueWhenDirectoryExists()
    {
        $this->assertTrue($this->file->dirExists($this->root->url()));
    }

    public function testRemoveDirShouldRemoveTheGivenDIrectory()
    {

        \org\bovigo\vfs\vfsStream::create([
            'test' => [
                'test.txt' => 'test'
            ]
        ], $this->root);

        $dirPath = $this->root->url() . DIRECTORY_SEPARATOR . 'test';

        $this->assertTrue($this->root->hasChild('test'));

        $this->file->removeDir($dirPath);

        $this->assertFalse($this->root->hasChild('test'));
    }

    public function testRemoveDirShouldThrowsAnExceptionWhenDirPathIsInvalid()
    {

        \org\bovigo\vfs\vfsStream::create([
            'test' => [
                'test.txt' => 'test'
            ]
        ], $this->root);

        $dirPath = $this->root->url() . DIRECTORY_SEPARATOR . 'wrong';
        $this->expectExceptionMessage(
            'Given directory path "' . $dirPath . '" is not an existing directory path'
        );
        $this->file->removeDir($dirPath);
    }

    public function testDirExistsShouldReturnFalseWhenDirectoryDoesNotExists()
    {
        $this->assertFalse($this->file->dirExists('wrong'));
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

    public function testWriteTmpFile()
    {
        $fileName = 'test.txt';
        $content = 'test content';

        $tmpFile = $this->file->writeTmpFile($fileName, $content);

        $this->assertTrue($this->file->fileExists($tmpFile));

        $this->assertEquals($content, $this->file->readFile($tmpFile));

        $this->file->removeFile($tmpFile);

        $this->assertFalse($this->file->fileExists($tmpFile));
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

    public function testRemoveFile()
    {
        $fileName = 'test.txt';
        $filePath = $this->root->url() . DIRECTORY_SEPARATOR . $fileName;
        $content = 'test content';
        \org\bovigo\vfs\vfsStream::create([
            $fileName => $content
        ], $this->root);

        $this->assertTrue($this->root->hasChild($fileName));

        $this->file->removeFile($filePath);

        $this->assertFalse($this->root->hasChild($fileName));
    }

    public function testRemoveFileShouldThrowsAnExceptionWhenFilePathIsInvalid()
    {
        $filePath = $this->root->url() . DIRECTORY_SEPARATOR . 'wrong';

        $this->expectExceptionMessage(
            'Given file path does "' . $filePath . '" not exists'
        );

        $this->file->removeFile($filePath);
    }
}
