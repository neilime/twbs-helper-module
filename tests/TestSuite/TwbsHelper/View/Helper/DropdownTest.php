<?php

namespace TestSuite\TwbsHelper\View\Helper;

class DropdownTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\Dropdown
     */
    protected $helper = 'dropdown';

    public function testRenderWithWrongTypeForDropdown()
    {
        $this->expectExceptionMessage('Argument "$oDropdown" expects an instanceof \Laminas\Form\ElementInterface or an iterable, "stdClass" given');
        $this->helper->render(new \stdClass());
    }

    public function testRenderWithWrongTypeForDirectionOption()
    {
        $this->expectExceptionMessage('Direction option "wrong" does not exist');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => ['test'],
                    'direction' => 'wrong'
                ]
            ]
        ]);
    }
}
