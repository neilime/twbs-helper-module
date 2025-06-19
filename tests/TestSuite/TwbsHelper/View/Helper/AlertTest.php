<?php

namespace TestSuite\TwbsHelper\View\Helper;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\Alert;

class AlertTest extends AbstractViewHelperTestCase
{
    /**
     * @var Alert
     */
    protected $helper = 'alert';

    public function testInvokeWithExistingClassAttribute()
    {
        $this->assertSame(
            '<div class="alert&#x20;alert-success&#x20;test-class" role="alert">' . PHP_EOL .
                '    content' . PHP_EOL .
                '</div>',
            $this->helper->__invoke('content', ['variant' => 'success', 'class' => 'test-class'])
        );
    }

    public function testInvokeWithUndefinedOptionsAndAttributes()
    {
        $this->assertSame(
            '<div class="alert&#x20;alert-secondary" role="alert">' . PHP_EOL .
                '    content' . PHP_EOL .
                '</div>',
            $this->helper->__invoke('content')
        );
    }
}
