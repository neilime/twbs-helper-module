<?php

namespace TestSuite\DocumentationGenerator;

class HomePageGeneratorTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    /**
     * @var \MockObject
     */
    protected $file;

    /**
     * @var \DocumentationGenerator\HomePageGenerator
     */
    protected $homePageGenerator;

    public function setUp(): void
    {
        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $oConfiguration = new \DocumentationGenerator\Configuration(
            'x.x',
            2,
            $this->file
        );
        $this->homePageGenerator = new \DocumentationGenerator\HomePageGenerator($oConfiguration);
    }

    public function testGenerate()
    {
        $this->file->expects($this->once())->method('writeFile');
        $this->homePageGenerator->generate();
    }
}
