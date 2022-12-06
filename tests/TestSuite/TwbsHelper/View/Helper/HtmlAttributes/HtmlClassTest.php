<?php

namespace TestSuite\TwbsHelper\View\Helper\HtmlAttributes;

class HtmlClassTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
     */
    protected $helper = 'htmlClass';

    public function testSetHelperPluginManagerWithWrongClass()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Helper helpers must extend TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager; ' .
                'got type "stdClass" instead'
        );
        $this->helper->setHelperPluginManager(\stdClass::class);
    }
}
