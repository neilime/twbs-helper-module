<?php

// Documentation test config file for "Forms / Validation / Browser defaults" part
return [
    'title' => 'Browser defaults',
    'url' => '%bootstrap-url%/forms/validation/#browser-defaults',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'gutter' => 3,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'firstName',
                        'options' => [
                            'column' => 'md-4',
                            'label' => 'First name',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'validationCustom01',
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
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'validationCustom02',
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
                            'id' => 'validationCustomUsername',
                            'placeholder' => 'Username',
                            'aria-describedby' => 'inputGroupPrepend',
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
                            'id' => 'validationCustom03',
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
                            'id' => 'validationCustom04',
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
                            'id' => 'validationCustom05',
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'terms-and-conditions',
                        'type' => 'checkbox',
                        'options' => [
                            'column' => 12,
                            'label' => 'Agree to terms and conditions',
                        ],
                        'attributes' => [
                            'id' => 'invalidCheck',
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
        ]));
    }
];
