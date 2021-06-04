<?php

namespace TestSuite\TwbsHelper\View\Helper;

class AlertTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\Alert
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
