<?php

namespace TestSuite\TwbsHelper\View\Helper;

class ButtonGroupTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\ButtonGroup
     */
    protected $helper = 'buttonGroup';

    public function testRenderWithWrongButtonItem()
    {
        $this->expectExceptionMessage(
            'Button expects an instanceof \Laminas\Form\ElementInterface or an array / Traversable, "string" given'
        );
        $this->helper->render(['wrong']);
    }

    public function testGetFormElementHelperLazyLoad()
    {
        $buttonGroup = new \TwbsHelper\View\Helper\ButtonGroup();
        $this->assertInstanceOf(\TwbsHelper\Form\View\Helper\FormElement::class, $buttonGroup->getFormElementHelper());
    }
}
