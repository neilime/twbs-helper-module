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
        $this->expectExceptionMessage(
            'Argument "$oDropdown" expects an instanceof \Laminas\Form\ElementInterface or an iterable, ' .
                '"stdClass" given'
        );
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

    public function testRenderWithWrongTypeForSplitOption()
    {
        $this->expectExceptionMessage('"split" option expects a string an array or true, "stdClass" given');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => ['test'],
                    'split' => new \stdClass()
                ]
            ]
        ]);
    }

    public function testRenderWithUndefinedItems()
    {
        $this->expectExceptionMessage('TwbsHelper\View\Helper\Dropdown::renderMenuFromElement expects "items" option');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => null,
                ]
            ]
        ]);
    }

    public function testRenderWithWrongTypeItems()
    {
        $this->expectExceptionMessage('"items" option expects an array, "stdClass" given');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => new \stdClass(),
                ]
            ]
        ]);
    }

    public function testRenderWithWrongAlignmentOption()
    {
        $this->expectExceptionMessage('Alignment option "wrong" does not exist');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'alignment' => 'wrong',
                    'items' => ['test'],
                ]
            ]
        ]);
    }

    public function testRenderWithWrongTypeItemOption()
    {
        $this->expectExceptionMessage(
            '"item" option expects an array, an instance of "\Laminas\Form\FormInterface" or a scalar value, ' .
                '"stdClass" given'
        );
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [new \stdClass()],
                ]
            ]
        ]);
    }

    public function testRenderWithUndefinedLabelForHeaderItem()
    {
        $this->expectExceptionMessage('"header" item expects a "label" option');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [
                        [
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HEADER,
                        ]
                    ],
                ]
            ]
        ]);
    }

    public function testRenderWithWrongTypeForHeaderItemLabelOption()
    {
        $this->expectExceptionMessage('"label" option expect a scalar value, "stdClass" given');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [
                        [
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HEADER,
                            'label' => new \stdClass()
                        ]
                    ],
                ]
            ]
        ]);
    }

    public function testRenderWithUndefinedLabelForLinkItem()
    {
        $this->expectExceptionMessage('"link" item expects a "label" option');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [
                        [
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_LINK,
                        ]
                    ],
                ]
            ]
        ]);
    }

    public function testRenderWithWrongTypeForLinkItemLabelOption()
    {
        $this->expectExceptionMessage('"label" option expect a scalar value, "stdClass" given');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [
                        [
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_LINK,
                            'label' => new \stdClass()
                        ]
                    ],
                ]
            ]
        ]);
    }

    public function testRenderWithUndefinedLabelForTextItem()
    {
        $this->expectExceptionMessage('"text" item expects a "label" option');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [
                        [
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_TEXT,
                        ]
                    ],
                ]
            ]
        ]);
    }

    public function testRenderWithWrongTypeForTextItemLabelOption()
    {
        $this->expectExceptionMessage('"label" option expect a scalar value, "stdClass" given');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [
                        [
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_TEXT,
                            'label' => new \stdClass()
                        ]
                    ],
                ]
            ]
        ]);
    }

    public function testRenderWithUndefinedLabelForHtmlItem()
    {
        $this->expectExceptionMessage('"html" item expects a "label" option');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [
                        [
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HTML,
                        ]
                    ],
                ]
            ]
        ]);
    }

    public function testRenderWithWrongTypeForHtmlItemLabelOption()
    {
        $this->expectExceptionMessage('"label" option expect a scalar value, "stdClass" given');
        $this->helper->render([
            'name' => 'test',
            'options' => [
                'label' => 'test',
                'dropdown' => [
                    'items' => [
                        [
                            'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HTML,
                            'label' => new \stdClass()
                        ]
                    ],
                ]
            ]
        ]);
    }
}
