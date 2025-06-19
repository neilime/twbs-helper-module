<?php

namespace TestSuite\Documentation\Generator\UsagePage\Prettifier;

use Documentation\Generator\Configuration;
use Documentation\Generator\FileSystem\Local\File;
use Documentation\Generator\UsagePage\Prettifier\PhpPrettifier;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class PhpPrettifierTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * @var PhpPrettifier
     */
    protected $phpPrettifier;

    protected function setUp(): void
    {
        $configuration = new Configuration(
            __DIR__ . '/../../../../../..',
            'x.x',
            '5.1',
            2,
            new File(),
        );

        $this->phpPrettifier = PhpPrettifier::getInstance($configuration);
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
