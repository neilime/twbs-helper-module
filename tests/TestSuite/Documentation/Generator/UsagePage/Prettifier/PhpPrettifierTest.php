<?php

namespace TestSuite\Documentation\Generator\UsagePage\Prettifier;

class PhpPrettifierTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    /**
     * @var \Documentation\Generator\UsagePage\Prettifier\PhpPrettifier
     */
    protected $phpPrettifier;

    protected function setUp(): void
    {
        $configuration = new \Documentation\Generator\Configuration(
            __DIR__ . '/../../../../../..',
            'x.x',
            '5.1',
            2,
            new \Documentation\Generator\FileSystem\Local\File(),
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

        $this->assertNotEmpty($result);
        $this->assertMatchesSnapshot($result);
    }
}
