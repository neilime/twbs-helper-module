<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\Abbreviation;

class AbbreviationTest extends AbstractViewHelperTestCase
{
    /**
     * @var Abbreviation
     */
    protected $helper = 'abbreviation';

    public function testInvokeWithInitialismAndExistingClassAttribute()
    {
        $this->assertSame(
            '<abbr class="initialism&#x20;test-class" title="title">content</abbr>',
            $this->helper->__invoke('content', 'title', true, ['class' => 'test-class'])
        );
    }
}
