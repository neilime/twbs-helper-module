<?php

// Documentation test config file for "Forms / Range Inputs" part
return [
    'title' => 'Checks and radios',
    'url' => '%bootstrap-url%/forms/checks-radios',
    'tests' => [
        [
            'title' => 'Checks',
            'url' => '%bootstrap-url%/forms/checks-radios/#checks',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                // Default checkbox
                echo $view->formRow($factory->create([
                    'name' => 'default-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Default checkbox',
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'flexCheckDefault',
                    ],
                ]));

                echo  PHP_EOL;

                // Checked checkbox
                echo $view->formRow($factory->create([
                    'name' => 'checked-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Checked checkbox',
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'flexCheckChecked',
                        'checked' => true,
                    ],
                ]));
            },
            'tests' => [
                [
                    'title' => 'Indeterminate',
                    'url' => '%bootstrap-url%/forms/checks-radios/#indeterminate',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        echo $view->formRow($factory->create([
                            'name' => 'indeterminate-checkbox',
                            'type' => 'checkbox',
                            'options' => [
                                'label' => 'Indeterminate checkbox',
                                'use_hidden_element' => false,
                                'form_group' => false,
                                'checked_value' => "",
                            ],
                            'attributes' => [
                                'id' => 'flexCheckIndeterminate',
                            ],
                        ]));
                    }
                ],
                [
                    'title' => 'Disabled',
                    'url' => '%bootstrap-url%/forms/checks-radios/#disabled',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        // Disabled checkbox
                        echo $view->formRow($factory->create([
                            'name' => 'default-checkbox',
                            'type' => 'checkbox',
                            'options' => [
                                'label' => 'Disabled checkbox',
                                'form_group' => false,
                            ],
                            'attributes' => [
                                'id' => 'flexCheckDisabled',
                                'disabled' => true,
                            ],
                        ]));

                        echo  PHP_EOL;

                        // Disabled checked checkbox
                        echo $view->formRow($factory->create([
                            'name' => 'checked-checkbox',
                            'type' => 'checkbox',
                            'options' => [
                                'label' => 'Disabled checked checkbox',
                                'form_group' => false,
                            ],
                            'attributes' => [
                                'id' => 'flexCheckCheckedDisabled',
                                'checked' => true,
                                'disabled' => true,
                            ],
                        ]));
                    },
                ],
            ],
        ],
        [
            'title' => 'Radios',
            'url' => '%bootstrap-url%/forms/checks-radios/#radios',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                echo $view->formRow($factory->create([
                    'name' => 'flexRadioDefault',
                    'type' => 'radio',
                    'options' => [
                        'value_options' => [
                            [
                                'label' => 'Default radio',
                                'value' => 'option1',
                                'attributes' => ['id' => 'flexRadioDefault1'],
                            ],
                            [
                                'label' => 'Default checked radio',
                                'value' => 'option2',
                                'attributes' => ['id' => 'flexRadioDefault2'],
                            ],
                        ],
                    ],
                    'attributes' => [
                        'value' => 'option2',
                    ],
                ]));
            },
            'tests' => [
                [
                    'title' => 'Disabled',
                    'url' => '%bootstrap-url%/forms/checks-radios/#disabled-1',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        echo $view->formRow($factory->create([
                            'name' => 'flexRadioDisabled',
                            'type' => 'radio',
                            'options' => [
                                'value_options' => [
                                    [
                                        'label' => 'Default radio',
                                        'value' => 'option1',
                                        'attributes' => ['id' => 'flexRadioDisabled'],
                                    ],
                                    [
                                        'label' => 'Default checked radio',
                                        'value' => 'option2',
                                        'attributes' => ['id' => 'flexRadioCheckedDisabled'],
                                    ],
                                ],
                            ],
                            'attributes' => [
                                'value' => 'option2',
                                'disabled' => true,
                            ],
                        ]));
                    },
                ],
            ],
        ],
        [
            'title' => 'Switches',
            'url' => '%bootstrap-url%/forms/checks-radios/#switches',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                // Default switch checkbox input
                echo $view->formRow($factory->create([
                    'name' => 'default-switch-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'switch' => true,
                        'label' => 'Default switch checkbox input',
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'flexSwitchCheckDefault',
                    ],
                ]));

                echo  PHP_EOL;

                // Checked switch checkbox input
                echo $view->formRow($factory->create([
                    'name' => 'checked-switch-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'switch' => true,
                        'label' => 'Checked switch checkbox input',
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'flexSwitchCheckChecked',
                        'checked' => true,
                    ],
                ]));

                echo  PHP_EOL;

                // Disabled switch checkbox input
                echo $view->formRow($factory->create([
                    'name' => 'disabled-switch-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'switch' => true,
                        'label' => 'Disabled switch checkbox input',
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'flexSwitchCheckDisabled',
                        'disabled' => true,
                    ],
                ]));

                echo  PHP_EOL;

                // Disabled checked switch checkbox input
                echo $view->formRow($factory->create([
                    'name' => 'disabled-checked-switch-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'switch' => true,
                        'label' => 'Disabled checked switch checkbox input',
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'flexSwitchCheckChecked',
                        'checked' => true,
                        'disabled' => true,
                    ],
                ]));
            },
        ],
        [
            'title' => 'Default (stacked)',
            'url' => '%bootstrap-url%/forms/checks-radios/#default-stacked',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                // Render Default checkbox
                echo $view->formRow($factory->create([
                    'name' => 'default-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Default checkbox',
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'defaultCheck1',
                    ],
                ])) . PHP_EOL;

                // Render Disabled checkbox
                echo $view->formRow($factory->create([
                    'name' => 'disabled-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Disabled checkbox',
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'defaultCheck2',
                        'disabled' => true,
                    ],
                ]));

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render radio
                echo $view->formRow($factory->create([
                    'name' => 'exampleRadios',
                    'type' => 'radio',
                    'options' => [
                        'value_options' => [
                            [
                                'label' => 'Default radio',
                                'value' => 'option1',
                                'attributes' => ['id' => 'exampleRadios1'],
                            ],
                            [
                                'label' => 'Second default radio',
                                'value' => 'option2',
                                'attributes' => ['id' => 'exampleRadios2'],
                            ],
                            [
                                'label' => 'Disabled radio',
                                'value' => 'option3',
                                'disabled' => true,
                                'attributes' => ['id' => 'exampleRadios3'],
                            ],
                        ],
                    ],
                ]));
            },
        ],
        [
            'title' => 'Inline',
            'url' => '%bootstrap-url%/forms/checks-radios/#inline',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $factory = new \Laminas\Form\Factory();

                // Render checkbox
                echo $view->formRow($factory->create([
                    'name' => 'inlineCheckboxOptions',
                    'type' => 'multicheckbox',
                    'options' => [
                        'layout' => 'inline',
                        'form_group' => false,
                        'value_options' => [
                            [
                                'label' => '1',
                                'value' => 'option1',
                                'attributes' => ['id' => 'inlineCheckbox1'],
                            ],
                            [
                                'label' => '2',
                                'value' => 'option2',
                                'attributes' => ['id' => 'inlineCheckbox2'],
                            ],
                            [
                                'label' => '3 (disabled)',
                                'value' => 'option3',
                                'disabled' => true,
                                'attributes' => ['id' => 'inlineCheckbox3'],
                            ],
                        ],
                    ],
                ]));

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render radio
                echo $view->formRow($factory->create([
                    'name' => 'inlineRadioOptions',
                    'type' => 'radio',
                    'options' => [
                        'layout' => 'inline',
                        'value_options' => [
                            [
                                'label' => '1',
                                'value' => 'option1',
                                'attributes' => ['id' => 'inlineRadio1'],
                            ],
                            [
                                'label' => '2',
                                'value' => 'option2',
                                'attributes' => ['id' => 'inlineRadio2'],
                            ],
                            [
                                'label' => '3 (disabled)',
                                'value' => 'option3',
                                'disabled' => true,
                                'attributes' => ['id' => 'inlineRadio3'],
                            ],
                        ],
                    ],
                ]));
            },
        ],
        [
            'title' => 'Without labels',
            'url' => '%bootstrap-url%/forms/checks-radios/#without-labels',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                $factory = new \Laminas\Form\Factory();

                // Render checkbox
                echo $view->formRow($factory->create([
                    'name' => 'checkboxNoLabel',
                    'type' => 'checkbox',
                    'options' => [
                        'form_group' => false,
                        'label' => '',
                        'value' => 'option1',
                    ],
                    'attributes' => ['id' => 'checkboxNoLabel', 'aria-label' => '...'],
                ])) . PHP_EOL;

                // Render radio
                echo $view->formRow($factory->create([
                    'name' => 'radioNoLabel',
                    'type' => 'radio',
                    'options' => [
                        'value_options' => [
                            [
                                'label' => '',
                                'value' => 'option1',
                                'attributes' => ['id' => 'radioNoLabel1', 'aria-label' => '...'],
                            ],
                        ],
                    ],
                ]));
            },
        ],
        [
            'title' => 'Toggle buttons',
            'url' => '%bootstrap-url%/forms/checks-radios/#toggle-buttons',
            'tests' => [
                [
                    'title' => 'Checkbox toggle buttons',
                    'url' => '%bootstrap-url%/forms/checks-radios/#checkbox-toggle-buttons',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                        $factory = new \Laminas\Form\Factory();

                        // Single toggle
                        echo $view->formRow($factory->create([
                            'name' => 'single-toggle',
                            'type' => 'checkbox',
                            'options' => [
                                'button' => 'primary',
                                'form_group' => false,
                                'label' => 'Single toggle',
                            ],
                            'attributes' => ['id' => 'btn-check-1', 'autocomplete' => 'off'],
                        ]));

                        echo PHP_EOL;

                        // Checked
                        echo $view->formRow($factory->create([
                            'name' => 'single-toggle',
                            'type' => 'checkbox',
                            'options' => [
                                'button' => 'primary',
                                'form_group' => false,
                                'label' => 'Checked',
                            ],
                            'attributes' => [
                                'id' => 'btn-check-2',
                                'autocomplete' => 'off',
                                'checked' => true
                            ],
                        ]));

                        echo PHP_EOL;

                        // Disabled
                        echo $view->formRow($factory->create([
                            'name' => 'single-toggle',
                            'type' => 'checkbox',
                            'options' => [
                                'button' => 'primary',
                                'form_group' => false,
                                'label' => 'Disabled',
                            ],
                            'attributes' => [
                                'id' => 'btn-check-3',
                                'autocomplete' => 'off',
                                'disabled' => true
                            ],
                        ]));

                        echo PHP_EOL;
                    },
                ],
                [
                    'title' => 'Radio toggle buttons',
                    'url' => '%bootstrap-url%/forms/checks-radios/#radio-toggle-buttons',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        echo $view->formRow($factory->create([
                            'name' => 'inlineRadioOptions',
                            'type' => 'radio',
                            'options' => [
                                'button' => true,
                                'layout' => 'inline',
                                'value_options' => [
                                    [
                                        'label' => 'Checked',
                                        'value' => 'option1',
                                        'attributes' => ['id' => 'option1', 'autocomplete' => 'off'],
                                    ],
                                    [
                                        'label' => 'Radio',
                                        'value' => 'option2',
                                        'attributes' => ['id' => 'option2', 'autocomplete' => 'off'],
                                    ],
                                    [
                                        'label' => 'Disabled',
                                        'value' => 'option3',
                                        'disabled' => true,
                                        'attributes' => ['id' => 'inlineRadio3', 'autocomplete' => 'off'],
                                    ],
                                    [
                                        'label' => 'Radio',
                                        'value' => 'option4',
                                        'attributes' => ['id' => 'inlineRadio3'],
                                    ],
                                ],
                            ],
                            'attributes' => ['value' => 'option1'],
                        ]));
                    }
                ],
                [
                    'title' => 'Outlined styles',
                    'url' => '%bootstrap-url%/forms/checks-radios/#outlined-styles',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        $factory = new \Laminas\Form\Factory();

                        // Single toggle outlined
                        echo $view->formRow($factory->create([
                            'name' => 'single-toggle-outlined',
                            'type' => 'checkbox',
                            'options' => [
                                'button' => 'outline-primary',
                                'form_group' => false,
                                'label' => 'Single toggle',
                            ],
                            'attributes' => ['id' => 'btn-check-outlined', 'autocomplete' => 'off'],
                        ]));

                        echo PHP_EOL;

                        // Checked outlined
                        echo $view->formRow($factory->create([
                            'name' => 'single-toggle',
                            'type' => 'checkbox',
                            'options' => [
                                'button' => 'outline-secondary',
                                'form_group' => false,
                                'label' => 'Checked',
                            ],
                            'attributes' => [
                                'id' => 'btn-check-2-outlined',
                                'autocomplete' => 'off',
                                'checked' => true
                            ],
                        ]));

                        echo PHP_EOL;

                        // Checked success radio
                        echo $view->formRow($factory->create([
                            'name' => 'options-outlined',
                            'type' => 'radio',
                            'options' => [
                                'layout' => 'inline',
                                'value_options' => [
                                    [
                                        'label' => 'Checked success radio',
                                        'value' => 'option1',
                                        'button' => 'outline-success',
                                        'attributes' => ['id' => 'success-outlined', 'autocomplete' => 'off'],
                                    ],
                                    [
                                        'label' => 'Danger radio',
                                        'value' => 'option2',
                                        'button' => 'outline-danger',
                                        'attributes' => ['id' => 'danger-outlined', 'autocomplete' => 'off'],
                                    ],
                                ],
                            ],
                            'attributes' => ['value' => 'option1'],
                        ]));
                    },
                ],
            ],
        ],
    ],
];
