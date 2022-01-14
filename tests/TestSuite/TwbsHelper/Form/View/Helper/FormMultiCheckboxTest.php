<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormMultiCheckboxTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormRadio
     */
    protected $helper = 'formMultiCheckbox';

    public function testRenderSimpleValues()
    {
        $this->assertEquals(
             '<div class="form-check">' . PHP_EOL .
             '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="0"/>' . PHP_EOL .
             '    <label>First checkbox</label>' . PHP_EOL .
             '</div>' . PHP_EOL .
             '<div class="form-check">' . PHP_EOL .
             '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="1"/>' . PHP_EOL .
             '    <label>Second checkbox</label>' . PHP_EOL .
             '</div>' . PHP_EOL .
             '<div class="form-check">' . PHP_EOL .
             '    <input class="form-check-input" name="test&#x5B;&#x5D;" type="checkbox" value="2"/>' . PHP_EOL .
             '    <label>Third checkbox</label>' . PHP_EOL .
             '</div>',
            $this->helper->render(new \Laminas\Form\Element\MultiCheckbox(
                'test',
                [
                    'label' => 'MultiCheckbox simple values text',
                    'value_options' => [
                        0 => 'First checkbox',
                        1 => 'Second checkbox',
                        2 => 'Third checkbox',
                    ],
                ]
            ))
        );
    }
}
