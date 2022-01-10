<?php

// Documentation test config file for "Components / Button group / Checkbox and radio button groups" part
return [
    'title' => 'Checkbox and radio button groups',
    'url' => '%bootstrap-url%/components/button-group/#checkbox-and-radio-button-groups',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->buttonGroup(
            [
                [
                    'type' => 'checkbox',
                    'name' => 'checkbox-1',
                    'options' =>  ['tag' => 'input', 'label' => 'Checkbox 1'],
                    'attributes' => ['id' => 'btncheck1'],
                ],
                [
                    'type' => 'checkbox',
                    'name' => 'checkbox-2',
                    'options' =>  ['tag' => 'input', 'label' => 'Checkbox 2'],
                    'attributes' => ['id' => 'btncheck3'],
                ],
                [
                    'type' => 'checkbox',
                    'name' => 'checkbox-3',
                    'options' =>  ['tag' => 'input', 'label' => 'Checkbox 3'],
                    'attributes' => ['id' => 'btncheck3'],
                ],
            ],
            [
                'variant' => 'outline-primary',
                'attributes' => ['role' => 'group', 'aria-label' => 'Basic checkbox toggle button group'],
            ],
        ) . PHP_EOL;

        echo '<br/>' . PHP_EOL;

        echo $view->buttonGroup(
            [
                [
                    'name' => 'btnradio',
                    'type' => 'radio',
                    'options' => [
                        'tag' => 'input',
                        'value_options' => [
                            [
                                'label' => 'Radio 1',
                                'value' => 'option1',
                                'attributes' => ['id' => 'btnradio1'],
                            ],
                            [
                                'label' => 'Radio 2',
                                'value' => 'option2',
                                'attributes' => ['id' => 'btnradio2'],
                            ],
                            [
                                'label' => 'Radio 3',
                                'value' => 'option3',
                                'attributes' => ['id' => 'btnradio3'],
                            ],
                        ],
                    ],
                    'attributes' => ['value' => 'option1'],
                ],
            ],
            [
                'variant' => 'outline-primary',
                'attributes' => [
                    'role' => 'group', 'aria-label' => 'Basic radio toggle button group',
                ],
            ],
        );
    },
];
