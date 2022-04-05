<?php

// Documentation test config file for "Components / Forms / Custom forms" part
return [
    'title' => 'Custom forms',
    'url' => '%bootstrap-url%/components/forms/#custom-forms',
    'tests' => [
        [
            'title' => 'Checkboxes and radios',
            'url' => '%bootstrap-url%/components/forms/#checkboxes-and-radios-1',
            'tests' => [
                [
                    'title' => 'Checkboxes',
                    'url' => '%bootstrap-url%/components/forms/#checkboxes',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        echo $view->formRow($factory->create([
                            'name' => 'custom_checkbox',
                            'type' => 'checkbox',
                            'options' => [
                                'label' => 'Check this custom checkbox',
                                'use_hidden_element' => false,
                                'form_group' => false,
                                'custom' => true,
                            ],
                            'attributes' => [
                                'id' => 'customCheck1',
                            ],
                        ]));
                    },
                ],
                [
                    'title' => 'Radios',
                    'url' => '%bootstrap-url%/components/forms/#checkboxes',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        echo $view->formRow($factory->create([
                            'name' => 'customRadio',
                            'type' => 'radio',
                            'options' => [
                                'form_group' => false,
                                'custom' => true,
                                'value_options' => [
                                    [
                                        'label' => 'Toggle this custom radio',
                                        'value' => '1',
                                        'attributes' => ['id' => 'customRadio1'],
                                    ],
                                    [
                                        'label' => 'Or toggle this other custom radio',
                                        'value' => '2',
                                        'attributes' => ['id' => 'customRadio2'],
                                    ],
                                ],
                            ],
                        ]));
                    },
                ],
                [
                    'title' => 'Inline',
                    'url' => '%bootstrap-url%/components/forms/#inline-1',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        echo $view->formRow($factory->create([
                            'name' => 'customRadioInline1',
                            'type' => 'radio',
                            'options' => [
                                'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
                                'form_group' => false,
                                'custom' => true,
                                'value_options' => [
                                    [
                                        'label' => 'Toggle this custom radio',
                                        'value' => '1',
                                        'attributes' => ['id' => 'customRadioInline1'],
                                    ],
                                    [
                                        'label' => 'Or toggle this other custom radio',
                                        'value' => '2',
                                        'attributes' => ['id' => 'customRadioInline2'],
                                    ],
                                ],
                            ],
                        ]));
                    },
                ],
                [
                    'title' => 'Disabled',
                    'url' => '%bootstrap-url%/components/forms/#disabled',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        echo $view->formRow($factory->create([
                            'name' => 'custom_checkbox_disabled',
                            'type' => 'checkbox',
                            'options' => [
                                'label' => 'Check this custom checkbox',
                                'use_hidden_element' => false,
                                'form_group' => false,
                                'custom' => true,
                            ],
                            'attributes' => [
                                'id' => 'customCheckDisabled1',
                                'disabled' => true,
                            ],
                        ])) . PHP_EOL;

                        echo $view->formRow($factory->create([
                            'name' => 'radioDisabled',
                            'type' => 'radio',
                            'options' => [
                                'form_group' => false,
                                'custom' => true,
                                'value_options' => [
                                    [
                                        'label' => 'Toggle this custom radio',
                                        'value' => '1',
                                        'attributes' => ['id' => 'customRadioDisabled2'],
                                    ],
                                ],
                            ],
                            'attributes' => ['disabled' => true],
                        ]));
                    },
                ],
            ],
        ],
        [
            'title' => 'Switches',
            'url' => '%bootstrap-url%/components/forms/#switches',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'custom_switch',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Toggle this switch element',
                        'use_hidden_element' => false,
                        'form_group' => false,
                        'custom' => true,
                        'switch' => true,
                    ],
                    'attributes' => ['id' => 'customSwitch1'],
                ])) . PHP_EOL;

                echo $view->formRow($factory->create([
                    'name' => 'custom_switch',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Disabled switch element',
                        'use_hidden_element' => false,
                        'form_group' => false,
                        'custom' => true,
                        'switch' => true,
                    ],
                    'attributes' => [
                        'id' => 'customSwitch2',
                        'disabled' => true,
                    ],
                ]));
            },
        ],
        [
            'title' => 'Select menu',
            'url' => '%bootstrap-url%/components/forms/#select-menu',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formElement($factory->create([
                    'name' => 'custom_select',
                    'type' => 'select',
                    'options' => [
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                ])->setValue('')) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                // You may also choose from small and large custom selects to match our similarly sized text inputs.
                echo $view->formElement($factory->create([
                    'name' => 'custom_select_lg',
                    'type' => 'select',
                    'options' => [
                        'size' => 'lg',
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => ['class' => 'mb-3'],
                ])->setValue('')) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                echo $view->formElement($factory->create([
                    'name' => 'custom_select_sm',
                    'type' => 'select',
                    'options' => [
                        'size' => 'sm',
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                ])->setValue('')) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                // The multiple attribute is also supported
                echo $view->formElement($factory->create([
                    'name' => 'custom_select_multiple',
                    'type' => 'select',
                    'options' => [
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => ['multiple' => true],
                ])->setValue('')) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                // As is the size attribute
                echo $view->formElement($factory->create([
                    'name' => 'custom_select_size',
                    'type' => 'select',
                    'options' => [
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => ['size' => 3],
                ])->setValue(''));
            },
        ],
        [
            'title' => 'Range',
            'url' => '%bootstrap-url%/components/forms/#range',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'custom_range',
                    'type' => 'range',
                    'options' => [
                        'custom' => true,
                        'label' => 'Example range',
                        'form_group' => false,
                    ],
                    'attributes' => ['id' => 'customRange1'],
                ]));
            },
        ],
        [
            'title' => 'File browser',
            'url' => '%bootstrap-url%/components/forms/#file-browser',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'custom_file',
                    'type' => 'file',
                    'options' => [
                        'custom' => true,
                        'custom_label' => 'Choose file',
                        'form_group' => false,
                    ],
                    'attributes' => ['id' => 'customFile'],
                ]));
            },
            'tests' => [
                [
                    'title' => 'Translating or customizing the strings with HTML',
                    'url' => '%bootstrap-url%/components/forms/#translating-or-customizing-the-strings-with-html',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        echo $view->formRow($factory->create([
                            'name' => 'custom_file',
                            'type' => 'file',
                            'options' => [
                                'custom' => true,
                                'custom_label' => 'Voeg je document toe',
                                'form_group' => false,
                                'label_attributes' => [
                                    'data-browse' => 'Bestand kiezen',
                                ],
                            ],
                            'attributes' => ['id' => 'customFileLangHTML'],
                        ]));
                    },
                ],
            ],
        ],
    ],
];
