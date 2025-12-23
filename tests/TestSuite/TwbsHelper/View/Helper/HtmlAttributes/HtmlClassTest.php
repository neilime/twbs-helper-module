<?php

namespace TestSuite\TwbsHelper\View\Helper\HtmlAttributes;

use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;
use InvalidArgumentException;
use stdClass;

class HtmlClassTest extends AbstractViewHelperTestCase
{
    /**
     * @var HtmlClass
     */
    protected $helper = 'htmlClass';

    public function testSetHelperPluginManagerWithWrongClass()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Helper helpers must extend TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager; ' .
                'got type "stdClass" instead'
        );
        $this->helper->setHelperPluginManager(stdClass::class);
    }

    public function testSetHelperPluginManagerWithUnknownClassName()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid helper helpers class provided (Unknown\\Missing\\HelperManager)');

        $this->helper->setHelperPluginManager('Unknown\\Missing\\HelperManager');
    }
}
