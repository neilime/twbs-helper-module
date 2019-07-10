<?php

namespace TestSuite\TwbsHelper\View\Helper;

class BadgeTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\Badge
     */
    protected $helper = 'badge';

    public function testInvokeWithExistingClassAttribute()
    {
        $this->assertSame(
            '<span class="badge&#x20;badge-success&#x20;test-class">content</span>',
            $this->helper->__invoke('content', [
                'variant' => 'success',
                'class' => 'test-class',
            ])
        );
    }
}
