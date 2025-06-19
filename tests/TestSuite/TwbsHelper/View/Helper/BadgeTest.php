<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\Badge;

class BadgeTest extends AbstractViewHelperTestCase
{
    /**
     * @var Badge
     */
    protected $helper = 'badge';

    public function testInvokeWithExistingClassAttribute()
    {
        $this->assertSame(
            '<span class="badge&#x20;bg-success&#x20;test-class">content</span>',
            $this->helper->__invoke('content', [
                'variant' => 'success',
                'class' => 'test-class',
            ])
        );
    }
}
