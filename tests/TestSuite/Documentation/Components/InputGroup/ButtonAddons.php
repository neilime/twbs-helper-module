<?php

// Documentation test config file for "Components / Input group / Button addons" part
return [
    'title' => 'Button addons',
    'url' => '%bootstrap-url%/components/input-group/#button-addons',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Zend\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'button-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Button',
                            'variant' => 'outline-secondary',
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => '',
                'aria-label' => 'Example text with button addon',
                'aria-describedby' => 'button-addon1',
            ],
        ])) . PHP_EOL;
    },
    'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <button type="button" name="button" id="button-addon1" class="btn&#x20;btn-outline-secondary" '.
        'value="">' .
        'Button' .
        '</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="button-prepend" placeholder="" ' .
        'aria-label="Example&#x20;text&#x20;with&#x20;button&#x20;addon" ' .
        'aria-describedby="button-addon1" class="form-control" value="">' . PHP_EOL .
        '</div>' . PHP_EOL,
];
