<?php

// Documentation test config file for "Components / Input group / Custom forms" part
return [
    'title' => 'Custom forms',
    'url' => '%bootstrap-url%/components/input-group/#custom-forms',
    'tests' => [
        [
            'title' => 'Custom select',
            'url' => '%bootstrap-url%/components/input-group/#custom-select',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Zend\Form\Factory();

                echo $oView->formElement($oFactory->create([
                    'name' => 'select_label_prepend',
                    'type' => 'select',
                    'options' => [
                        'form_group' => false,
                        'input_group_class' => 'mb-3',
                        'custom' => true,
                        'empty_option' => 'Choose...',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                        'add_on_prepend' => ['label' => 'Options'],
                    ],
                    'attributes' => [
                        'id' => 'inputGroupSelect01',
                    ],
                ])->setValue('')) . PHP_EOL;

                echo $oView->formElement($oFactory->create([
                    'name' => 'select_label_append',
                    'type' => 'select',
                    'options' => [
                        'form_group' => false,
                        'input_group_class' => 'mb-3',
                        'custom' => true,
                        'empty_option' => 'Choose...',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                        'add_on_append' => ['label' => 'Options'],
                    ],
                    'attributes' => [
                        'id' => 'inputGroupSelect02',
                    ],
                ])->setValue('')) . PHP_EOL;

                echo $oView->formElement($oFactory->create([
                    'name' => 'select_button_prepend',
                    'type' => 'select',
                    'options' => [
                        'form_group' => false,
                        'input_group_class' => 'mb-3',
                        'custom' => true,
                        'empty_option' => 'Choose...',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
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
                        'id' => 'inputGroupSelect03',
                        'aria-label' => 'Example select with button addon',
                    ],
                ])->setValue('')) . PHP_EOL;


                echo $oView->formElement($oFactory->create([
                    'name' => 'select_button_append',
                    'type' => 'select',
                    'options' => [
                        'form_group' => false,
                        'custom' => true,
                        'empty_option' => 'Choose...',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                        'add_on_append' => [
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
                        'id' => 'inputGroupSelect04',
                        'aria-label' => 'Example select with button addon',
                    ],
                ])->setValue(''));
            },
            'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <div class="input-group-prepend">' . PHP_EOL .
                '        <label class="input-group-text" for="inputGroupSelect01">Options</label>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <select name="select_label_prepend" id="inputGroupSelect01" class="custom-select">' . PHP_EOL .
                '        <option value="" selected="selected">Choose...</option>' . PHP_EOL .
                '        <option value="1">One</option>' . PHP_EOL .
                '        <option value="2">Two</option>' . PHP_EOL .
                '        <option value="3">Three</option>' . PHP_EOL .
                '    </select>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <select name="select_label_append" id="inputGroupSelect02" class="custom-select">' . PHP_EOL .
                '        <option value="" selected="selected">Choose...</option>' . PHP_EOL .
                '        <option value="1">One</option>' . PHP_EOL .
                '        <option value="2">Two</option>' . PHP_EOL .
                '        <option value="3">Three</option>' . PHP_EOL .
                '    </select>' . PHP_EOL .
                '    <div class="input-group-append">' . PHP_EOL .
                '        <label class="input-group-text" for="inputGroupSelect02">Options</label>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <div class="input-group-prepend">' . PHP_EOL .
                '        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">' .
                'Button</button>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <select name="select_button_prepend" id="inputGroupSelect03" ' .
                'aria-label="Example&#x20;select&#x20;with&#x20;button&#x20;addon" ' .
                'class="custom-select">' . PHP_EOL .
                '        <option value="" selected="selected">Choose...</option>' . PHP_EOL .
                '        <option value="1">One</option>' . PHP_EOL .
                '        <option value="2">Two</option>' . PHP_EOL .
                '        <option value="3">Three</option>' . PHP_EOL .
                '    </select>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group">' . PHP_EOL .
                '    <select name="select_button_append" id="inputGroupSelect04" ' .
                'aria-label="Example&#x20;select&#x20;with&#x20;button&#x20;addon" ' .
                'class="custom-select">' . PHP_EOL .
                '        <option value="" selected="selected">Choose...</option>' . PHP_EOL .
                '        <option value="1">One</option>' . PHP_EOL .
                '        <option value="2">Two</option>' . PHP_EOL .
                '        <option value="3">Three</option>' . PHP_EOL .
                '    </select>' . PHP_EOL .
                '    <div class="input-group-append">' . PHP_EOL .
                '        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">' .
                'Button</button>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ]
    ],
];
