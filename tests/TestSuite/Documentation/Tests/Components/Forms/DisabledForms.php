<?php

// Documentation test config file for "Components / Forms / Disabled forms" part
return [
    'title' => 'Disabled forms',
    'url' => '%bootstrap-url%/components/forms/#disabled-forms',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'type' => 'fieldset',
                        'attributes' => [
                            'disabled' => true,
                        ],
                        'elements' => [
                            [
                                'spec' => [
                                    'name' => 'disabled-input',
                                    'options' => ['label' => 'Disabled input'],
                                    'attributes' => [
                                        'type' => 'text',
                                        'id' => 'disabledTextInput',
                                        'placeholder' => 'Disabled input',
                                    ],
                                ],
                            ],
                            [
                                'spec' => [
                                    'name' => 'disabled-select',
                                    'type' => 'select',
                                    'attributes' => ['id' => 'disabledSelect',],
                                    'options' => [
                                        'label' => 'Disabled select menu',
                                        'empty_option' => 'Disabled select',
                                    ],
                                ],
                            ],
                            [
                                'spec' => [
                                    'type' => 'checkbox',
                                    'name' => 'disabled-fieldset-check',
                                    'options' => ['label' => 'Can\'t check this', 'use_hidden_element' => false],
                                    'attributes' => [
                                        'id' => 'disabledFieldsetCheck',
                                        'disabled' => true,
                                    ],
                                ],
                            ],
                            [
                                'spec' => [
                                    'type' => 'submit',
                                    'options' => ['label' => 'Submit', 'variant' => 'primary'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]));
    },
];
