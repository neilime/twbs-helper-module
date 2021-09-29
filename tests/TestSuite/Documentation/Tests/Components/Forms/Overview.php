<?php

// Documentation test config file for "Components / Forms / Overview" part
return [
    'title' => 'Overview',
    'url' => '%bootstrap-url%/components/forms/#overview',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'email',
                        'options' => [
                            'label' => 'Email address',
                            'help_block' => [
                                'content' => 'We\'ll never share your email with anyone else.',
                                'attributes' => ['id' => 'emailHelp'],
                            ]
                        ],
                        'attributes' => [
                            'type' => 'email',
                            'id' => 'exampleInputEmail1',
                            'placeholder' => 'Enter email',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'password',
                        'options' => ['label' => 'Password'],
                        'attributes' => [
                            'type' => 'password',
                            'id' => 'exampleInputPassword1',
                            'placeholder' => 'Password',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'checkbox',
                        'name' => 'remember_me',
                        'options' => ['label' => 'Check me out', 'use_hidden_element' => false],
                        'attributes' => [
                            'id' => 'exampleCheck1',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => ['label' => 'Submit', 'variant' => 'primary'],
                    ],
                ],
            ]
        ]));
    },
];
