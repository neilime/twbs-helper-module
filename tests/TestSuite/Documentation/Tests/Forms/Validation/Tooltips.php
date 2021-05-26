<?php

// Documentation test config file for "Forms / Validation / Tooltips" part
return [
    'title' => 'Tooltips',
    'url' => '%bootstrap-url%/forms/validation/#tooltips',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'gutter' => 3,
                'custom_validation' => true,
                'tooltip_feedback' => true,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'firstName',
                        'options' => [
                            'column' => 'md-4',
                            'label' => 'First name',
                            'valid_feedback' => 'Looks good!',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'validationTooltip01',
                            'required' => true,
                            'value' => 'Mark',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'lastName',
                        'options' => [
                            'column' => 'md-4',
                            'label' => 'Last name',
                            'valid_feedback' => 'Looks good!',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'validationTooltip02',
                            'required' => true,
                            'value' => 'Otto',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'username',
                        'options' => [
                            'label' => 'Username',
                            'column' => 'md-4',
                            'add_on_prepend' => '@',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'validationTooltipUsername',
                            'placeholder' => 'Username',
                            'aria-describedby' => 'validationTooltipUsernamePrepend',
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'city',
                        'options' => [
                            'column' => 'md-6',
                            'label' => 'City'
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'validationTooltip03',
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'state',
                        'type' => 'select',
                        'options' => [
                            'column' => 'md-3',
                            'label' => 'State',
                            'empty_option' => 'Choose...',
                            'value_options' => ['...'],
                        ],
                        'attributes' => [
                            'id' => 'validationTooltip04',
                            'required' => true,
                            'value' => '',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'zip',
                        'options' => [
                            'column' => 'md-3',
                            'label' => 'Zip'
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'validationTooltip05',
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'submit',
                        'type' => 'submit',
                        'options' => [
                            'column' => 12,
                            'label' => 'Submit form',
                            'variant' => 'primary',
                        ],
                    ],
                ],
            ],
        ])->setMessages([
            'username' => ['Please choose a unique and valid username.'],
            'city' => ['Please provide a valid city.'],
            'state' => ['Please select a valid state.'],
            'zip' => ['Please select a valid zip.'],
        ]));
    }
];
