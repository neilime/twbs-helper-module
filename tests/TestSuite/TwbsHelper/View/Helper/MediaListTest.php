<?php

namespace TestSuite\TwbsHelper\View\Helper;

class MediaListTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\MediaList
     */
    protected $helper = 'mediaList';

    public function testShouldRenderGroupItemWithCustomAttributes()
    {
        $this->assertSame(
            // Expected
            '<ul class="list-unstyled">' . PHP_EOL .
            '    <li class="media&#x20;test-custom-class">test</li>' . PHP_EOL .
            '</ul>',
            // Rendering
            $this->helper->__invoke([
                ['test', ['class' => 'test-custom-class']]
            ])
        );
    }
}
