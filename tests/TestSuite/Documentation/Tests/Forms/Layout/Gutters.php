<?php

// Documentation test config file for "Forms / Layout / Gutters" part

return [
    'title' => 'Gutters',
    'url' => '%bootstrap-url%/forms/layout/#gutters',
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
                            'column' => true,
                        ],
                        'attributes' => [
                            'aria-label' => 'First name',
                            'placeholder' => 'First name',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'lastName',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'aria-label' => 'Last name',
                            'placeholder' => 'Last name',
                        ],
                    ],
                ],
            ],
        ]));

        // More complex layouts can also be created with the grid system
        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'gutter' => 3,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'email',
                        'options' => [
                            'column' => 'md-6',
                            'label' => 'Email'
                        ],
                        'attributes' => [
                            'type' => 'email',
                            'id' => 'inputEmail4'
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'password',
                        'options' => [
                            'column' => 'md-6',
                            'label' => 'Password'
                        ],
                        'attributes' => [
                            'type' => 'password',
                            'id' => 'inputPassword4'
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'address1',
                        'options' => [
                            'column' => 12,
                            'label' => 'Address'
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => '1234 Main St',
                            'id' => 'inputAddress'
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'address2',
                        'options' => [
                            'column' => 12,
                            'label' => 'Address 2'
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'Apartment, studio, or floor',
                            'id' => 'inputAddress2'
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
                            'id' => 'inputCity'
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'state',
                        'type' => 'select',
                        'options' => [
                            'column' => 'md-4',
                            'label' => 'State',
                            'empty_option' => 'Choose...',
                            'value_options' => ['...']
                        ],
                        'attributes' => [
                            'id' => 'inputState',
                            'value' => '',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'zip',
                        'options' => [
                            'column' => 'md-2',
                            'label' => 'Zip'
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inputZip'
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'checked-checkbox',
                        'type' => 'checkbox',
                        'options' => [
                            'column' => 12,
                            'label' => 'Check me out',
                        ],
                        'attributes' => [
                            'id' => 'gridCheck',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'submit',
                        'type' => 'submit',
                        'options' => [
                            'column' => 12,
                            'label' => 'Sign in',
                            'variant' => 'primary',
                        ],
                    ],
                ],
            ],
        ]));
    }
];
