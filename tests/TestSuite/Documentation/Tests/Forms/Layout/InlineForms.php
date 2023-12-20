<?php

// Documentation test config file for "Forms / Layout / Inline forms" part
return [
    'title' => 'Inline forms',
    'url' => '%bootstrap-url%/forms/layout/#inline-forms',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->form($factory->create([
            'type' => 'form',
            'options' => [
                'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
                'column' => 'lg-auto',
                'gutter' => 3,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'username',
                        'options' => [
                            'label' => 'Username',
                            'show_label' => false,
                            'column' => 12,
                            'add_on_prepend' => '@',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInputGroupUsername',
                            'placeholder' => 'Username',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'preference',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Preference',
                            'show_label' => false,
                            'column' => 12,
                            'empty_option' => 'Choose...',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                        ],
                        'attributes' => [
                            'id' => 'inlineFormSelectPref',
                            'value' => '',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'checkbox',
                        'name' => 'remember_me',
                        'options' => [
                            'label' => 'Remember me',
                            'use_hidden_element' => false,
                            'column' => 12,
                        ],
                        'attributes' => [
                            'id' => 'inlineFormCheck',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'variant' => 'primary',
                            'column' => 12,
                        ],
                    ],
                ],
            ],
        ]));
    },
];
