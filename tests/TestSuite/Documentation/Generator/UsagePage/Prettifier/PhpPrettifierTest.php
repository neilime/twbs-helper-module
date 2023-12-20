<?php

namespace TestSuite\Documentation\Generator\UsagePage\Prettifier;

class PhpPrettifierTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    /**
     * @var \Documentation\Generator\FileSystem\File&\PHPUnit\Framework\MockObject\MockObject|mixed
     */
    public $file;

    /**
     * @var \Documentation\Generator\UsagePage\Prettifier\PhpPrettifier
     */
    protected $phpPrettifier;

    protected function setUp(): void
    {

        $this->file = $this->createMock(\Documentation\Generator\FileSystem\File::class);
        $configuration = new \Documentation\Generator\Configuration(
            __DIR__ . '/../../../../../..',
            'x.x',
            2,
            $this->file
        );

        $this->phpPrettifier = \Documentation\Generator\UsagePage\Prettifier\PhpPrettifier::getInstance($configuration);
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
