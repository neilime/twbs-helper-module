<?php

// Documentation test config file for "Components / Input group / Custom forms" part
return [
    'title' => 'Custom forms',
    'url' => '%bootstrap-url%/components/input-group/#custom-forms',
    'tests' => [
        [
            'title' => 'Custom select',
            'url' => '%bootstrap-url%/components/input-group/#form-select',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

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
                '    <select name="select_label_prepend" id="inputGroupSelect01" class="form-select">' . PHP_EOL .
                '        <option value="" selected="selected">Choose...</option>' . PHP_EOL .
                '        <option value="1">One</option>' . PHP_EOL .
                '        <option value="2">Two</option>' . PHP_EOL .
                '        <option value="3">Three</option>' . PHP_EOL .
                '    </select>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <select name="select_label_append" id="inputGroupSelect02" class="form-select">' . PHP_EOL .
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
                'class="form-select">' . PHP_EOL .
                '        <option value="" selected="selected">Choose...</option>' . PHP_EOL .
                '        <option value="1">One</option>' . PHP_EOL .
                '        <option value="2">Two</option>' . PHP_EOL .
                '        <option value="3">Three</option>' . PHP_EOL .
                '    </select>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group">' . PHP_EOL .
                '    <select name="select_button_append" id="inputGroupSelect04" ' .
                'aria-label="Example&#x20;select&#x20;with&#x20;button&#x20;addon" ' .
                'class="form-select">' . PHP_EOL .
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
        ],
        [
            'title' => 'Custom file input',
            'url' => '%bootstrap-url%/components/input-group/#custom-file-input',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                echo $oView->formRow($oFactory->create([
                    'name' => 'custom_file_label_prepend',
                    'type' => 'file',
                    'options' => [
                        'custom' => true,
                        'custom_label' => 'Choose file',
                        'form_group' => false,
                        'input_group_class' => 'mb-3',
                        'add_on_prepend' => 'Upload',
                    ],
                    'attributes' => [
                        'id' => 'inputGroupFile01',
                        'aria-describedby' => 'inputGroupFileAddon01',
                    ],
                ])) . PHP_EOL;

                echo $oView->formRow($oFactory->create([
                    'name' => 'custom_file_label_append',
                    'type' => 'file',
                    'options' => [
                        'custom' => true,
                        'custom_label' => 'Choose file',
                        'form_group' => false,
                        'input_group_class' => 'mb-3',
                        'add_on_append' => 'Upload',
                    ],
                    'attributes' => [
                        'id' => 'inputGroupFile02',
                        'aria-describedby' => 'inputGroupFileAddon02',
                    ],
                ])) . PHP_EOL;

                echo $oView->formRow($oFactory->create([
                    'name' => 'custom_file_button_prepend',
                    'type' => 'file',
                    'options' => [
                        'custom' => true,
                        'custom_label' => 'Choose file',
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
                        'id' => 'inputGroupFile03',
                        'aria-describedby' => 'inputGroupFileAddon03',
                    ],
                ])) . PHP_EOL;

                echo $oView->formRow($oFactory->create([
                    'name' => 'custom_file_button_append',
                    'type' => 'file',
                    'options' => [
                        'custom' => true,
                        'custom_label' => 'Choose file',
                        'form_group' => false,
                        'input_group_class' => 'mb-3',
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
                        'id' => 'inputGroupFile04',
                        'aria-describedby' => 'inputGroupFileAddon04',
                    ],
                ]));
            },
            'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <div class="input-group-prepend">' . PHP_EOL .
                '        <div class="input-group-text" id="inputGroupFileAddon01">' . PHP_EOL .
                '            Upload' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <input type="file" name="custom_file_label_prepend" id="inputGroupFile01" ' .
                'aria-describedby="inputGroupFileAddon01"/>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <input type="file" name="custom_file_label_append" id="inputGroupFile02" ' .
                'aria-describedby="inputGroupFileAddon02"/>' . PHP_EOL .
                '    <div class="input-group-append">' . PHP_EOL .
                '        <div class="input-group-text" id="inputGroupFileAddon02">' . PHP_EOL .
                '            Upload' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <div class="input-group-prepend">' . PHP_EOL .
                '        <button type="button" name="button" id="inputGroupFileAddon03" ' .
                'class="btn&#x20;btn-outline-secondary" value="">Button</button>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <input type="file" name="custom_file_button_prepend" id="inputGroupFile03" ' .
                'aria-describedby="inputGroupFileAddon03"/>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <input type="file" name="custom_file_button_append" id="inputGroupFile04" ' .
                'aria-describedby="inputGroupFileAddon04"/>' . PHP_EOL .
                '    <div class="input-group-append">' . PHP_EOL .
                '        <button type="button" name="button" id="inputGroupFileAddon04" ' .
                'class="btn&#x20;btn-outline-secondary" value="">Button</button>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
