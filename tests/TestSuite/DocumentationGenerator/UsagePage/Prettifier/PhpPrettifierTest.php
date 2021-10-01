<?php

namespace TestSuite\DocumentationGenerator\UsagePage\Prettifier;

class PhpPrettifierTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    /**
     * @var \DocumentationGenerator\UsagePage\Prettifier\PhpPrettifier
     */
    protected $phpPrettifier;

    public function setUp(): void
    {

        $this->file = $this->createMock(\DocumentationGenerator\FileSystem\File::class);
        $oConfiguration = new \DocumentationGenerator\Configuration(
            __DIR__ . '/../../../../..',
            'x.x',
            2,
            $this->file
        );

        $this->phpPrettifier = \DocumentationGenerator\UsagePage\Prettifier\PhpPrettifier::getInstance($oConfiguration);
    }

    public function testPrettifyShouldSetProperIndentation()
    {
        $sSource = <<<'SOURCE'
<?php

$oFactory = new \Laminas\Form\Factory();

// Render Default checkbox
echo $this->formRow($oFactory->create([
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

        $sResult = $this->phpPrettifier->prettify($sSource);

        $this->assertMatchesSnapshot($sResult);
    }
}
