<?php

namespace TestSuite\TwbsHelper\View\Helper;

class AbbreviationTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\Abbreviation
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
