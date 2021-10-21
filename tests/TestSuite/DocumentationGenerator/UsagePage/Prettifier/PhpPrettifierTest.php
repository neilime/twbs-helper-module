<?php

namespace TestSuite\DocumentationGenerator\UsagePage\Prettifier;

class PhpPrettifierTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    /**
     * @var \DocumentationGenerator\FileSystem\File&\PHPUnit\Framework\MockObject\MockObject|mixed
     */
    public $file;

    /**
     * @var \DocumentationGenerator\UsagePage\Prettifier\PhpPrettifier
     */
    protected $phpPrettifier;

    protected function setUp(): void
    {

        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $configuration = new \DocumentationGenerator\Configuration(
            __DIR__ . '/../../../../..',
            'x.x',
            2,
            $this->file
        );

        $this->phpPrettifier = \DocumentationGenerator\UsagePage\Prettifier\PhpPrettifier::getInstance($configuration);
    }

    public function testPrettifyShouldSetProperIndentation()
    {
        $source = <<<'SOURCE'
<?php

$factory = new \Laminas\Form\Factory();

// Render Default checkbox
echo $this->formRow($factory->create([
'name' => 'default-checkbox',
'type' => 'checkbox',
'options' => [
'label' => 'Default checkbox',
'use_hidden_element' => false,
'form_group' => false,
],
'attributes' => [
'id' => 'defaultCheck1',
],
])) . PHP_EOL;        
SOURCE;

        $result = $this->phpPrettifier->prettify($source);

        $this->assertMatchesSnapshot($result);
    }
}
