<?php

// Documentation test config file for "Components / Input group / Custom forms" part
return [
    'title' => 'Custom forms',
    'url' => '%bootstrap-url%/components/input-group/#custom-forms',
    'tests' => [
        [
            'title' => 'Custom select',
            'url' => '%bootstrap-url%/components/input-group/#custom-select',
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

        ],
    ],
];
