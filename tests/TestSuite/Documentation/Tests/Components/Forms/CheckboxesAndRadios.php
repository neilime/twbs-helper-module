<?php

// Documentation test config file for "Components / Forms / Range Inputs" part
return [
    'title' => 'Checkboxes and radios',
    'url' => '%bootstrap-url%/components/forms/#checkboxes-and-radios',
    'tests' => [
        [
            'title' => 'Default (stacked)',
            'url' => '%bootstrap-url%/components/forms/#default-stacked',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                // Render Default checkbox
                echo $oView->formRow($oFactory->create([
                    'name' => 'default-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Default checkbox',
                        'use_hidden_element' => false,
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'defaultCheck1',
                    ],
                ])) . PHP_EOL;

                // Render Disabled checkbox
                echo $oView->formRow($oFactory->create([
                    'name' => 'disabled-checkbox',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Disabled checkbox',
                        'use_hidden_element' => false,
                        'form_group' => false,
                    ],
                    'attributes' => [
                        'id' => 'defaultCheck2',
                        'disabled' => true,
                    ],
                ]));

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render radio
                echo $oView->formRow($oFactory->create([
                    'name' => 'exampleRadios',
                    'type' => 'radio',
                    'options' => [
                        'form_group' => false,
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
                                'value' => 'option1',
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
            'url' => '%bootstrap-url%/components/forms/#inline',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                // Render checkbox
                echo $oView->formRow($oFactory->create([
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
                echo $oView->formRow($oFactory->create([
                    'name' => 'inlineRadioOptions',
                    'type' => 'radio',
                    'options' => [
                        'layout' => 'inline',
                        'form_group' => false,
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
            'url' => '%bootstrap-url%/components/forms/#without-labels',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                $oFactory = new \Laminas\Form\Factory();

                // Render checkbox
                echo $oView->formRow($oFactory->create([
                    'name' => 'blankCheckbox',
                    'type' => 'multicheckbox',
                    'options' => [
                        'form_group' => false,
                        'value_options' => [
                            [
                                'label' => '',
                                'value' => 'option1',
                                'attributes' => ['id' => 'blankCheckbox', 'aria-label' => '...'],
                            ],
                        ],
                    ],
                ])) . PHP_EOL;

                // Render radio
                echo $oView->formRow($oFactory->create([
                    'name' => 'blankRadio',
                    'type' => 'radio',
                    'options' => [
                        'form_group' => false,
                        'value_options' => [
                            [
                                'label' => '',
                                'value' => 'option1',
                                'attributes' => ['id' => 'blankRadio1', 'aria-label' => '...'],
                            ],
                        ],
                    ],
                ]));
            },
        ],
    ],
];
