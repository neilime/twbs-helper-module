<?php

// Documentation test config file for "Components / Forms / Range Inputs" part
return [
    'title' => 'Checkboxes and radios',
    'url' => '%bootstrap-url%/forms/#checkboxes-and-radios',
    'tests' => [
        [
            'title' => 'Default (stacked)',
            'url' => '%bootstrap-url%/forms/#default-stacked',
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
            'expected' => '<div class="form-check">' . PHP_EOL .
                '    <input type="checkbox" name="default-checkbox" id="defaultCheck1" ' .
                'class="form-check-input" value="1"/>' . PHP_EOL .
                '    <label class="form-check-label" for="defaultCheck1">Default checkbox</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input type="checkbox" name="disabled-checkbox" id="defaultCheck2" ' .
                'disabled="disabled" class="form-check-input" value="1"/>' . PHP_EOL .
                '    <label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input type="radio" name="exampleRadios" class="form-check-input" ' .
                'id="exampleRadios1" value="option1"/>' . PHP_EOL .
                '    <label class="form-check-label" for="exampleRadios1">Default radio</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input type="radio" name="exampleRadios" class="form-check-input" ' .
                'id="exampleRadios2" value="option2"/>' . PHP_EOL .
                '    <label class="form-check-label" for="exampleRadios2">Second default radio</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input type="radio" name="exampleRadios" class="form-check-input" ' .
                'id="exampleRadios3" value="option1" disabled="disabled"/>' . PHP_EOL .
                '    <label class="form-check-label" for="exampleRadios3">Disabled radio</label>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Inline',
            'url' => '%bootstrap-url%/forms/#inline',
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
            'expected' => '<div class="form-check&#x20;form-check-inline">' . PHP_EOL .
                '    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" ' .
                'id="inlineCheckbox1" value="option1"/>' . PHP_EOL .
                '    <label class="form-check-label" for="inlineCheckbox1">1</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check&#x20;form-check-inline">' . PHP_EOL .
                '    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" ' .
                'id="inlineCheckbox2" value="option2"/>' . PHP_EOL .
                '    <label class="form-check-label" for="inlineCheckbox2">2</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check&#x20;form-check-inline">' . PHP_EOL .
                '    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" ' .
                'id="inlineCheckbox3" value="option3" disabled="disabled"/>' . PHP_EOL .
                '    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<div class="form-check&#x20;form-check-inline">' . PHP_EOL .
                '    <input type="radio" name="inlineRadioOptions" class="form-check-input" ' .
                'id="inlineRadio1" value="option1"/>' . PHP_EOL .
                '    <label class="form-check-label" for="inlineRadio1">1</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check&#x20;form-check-inline">' . PHP_EOL .
                '    <input type="radio" name="inlineRadioOptions" class="form-check-input" ' .
                'id="inlineRadio2" value="option2"/>' . PHP_EOL .
                '    <label class="form-check-label" for="inlineRadio2">2</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check&#x20;form-check-inline">' . PHP_EOL .
                '    <input type="radio" name="inlineRadioOptions" class="form-check-input" ' .
                'id="inlineRadio3" value="option3" disabled="disabled"/>' . PHP_EOL .
                '    <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Without labels',
            'url' => '%bootstrap-url%/forms/#without-labels',
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
            'expected' => '<div class="form-check">' . PHP_EOL .
                '    <input type="checkbox" name="blankCheckbox&#x5B;&#x5D;" ' .
                'class="form-check-input&#x20;position-static" ' .
                'id="blankCheckbox" aria-label="..." value="option1"/>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="form-check">' . PHP_EOL .
                '    <input type="radio" name="blankRadio" ' .
                'class="form-check-input&#x20;position-static" ' .
                'id="blankRadio1" aria-label="..." value="option1"/>' . PHP_EOL .
                '</div>',
        ],
    ],
];
