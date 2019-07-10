<?php

// Documentation test config file for "Components / Forms / Layout" part
return [
    'title' => 'Layout',
    'url' => '%bootstrap-url%/components/forms/#layout',
    'tests' => [
        [
            'title' => 'Form groups',
            'url' => '%bootstrap-url%/components/forms/#form-groups',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Zend\Form\Factory();

                // Create form
                echo $oView->form($oFactory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'exampleInput',
                                'options' => [
                                    'label' => 'Example label',
                                ],
                                'attributes' => [
                                    'type' => 'text',
                                    'id' => 'formGroupExampleInput',
                                    'placeholder' => 'Example input',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'exampleInput2',
                                'options' => [
                                    'label' => 'Another label',
                                ],
                                'attributes' => [
                                    'type' => 'text',
                                    'id' => 'formGroupExampleInput2',
                                    'placeholder' => 'Another input',
                                ],
                            ],
                        ],
                    ]
                ]));
            },
            'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="form-group">' . PHP_EOL .
                '        <label for="formGroupExampleInput">Example label</label>' . PHP_EOL .
                '        <input name="exampleInput" type="text" id="formGroupExampleInput" ' .
                'placeholder="Example&#x20;input" class="form-control" value="">' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="form-group">' . PHP_EOL .
                '        <label for="formGroupExampleInput2">Another label</label>' . PHP_EOL .
                '        <input name="exampleInput2" type="text" id="formGroupExampleInput2" ' .
                'placeholder="Another&#x20;input" class="form-control" value="">' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>',
        ],
        [
            'title' => 'Form grid',
            'url' => '%bootstrap-url%/components/forms/#form-grid',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Zend\Form\Factory();

                // Create form
                echo $oView->form($oFactory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'firstName',
                                'options' => [
                                    'column' => true,
                                ],
                                'attributes' => [
                                    'type' => 'text',
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
                                    'type' => 'text',
                                    'placeholder' => 'Last name',
                                ],
                            ],
                        ],
                    ]
                ]));
            },
            'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="row">' . PHP_EOL .
                '        <div class="col">' . PHP_EOL .
                '            <input name="firstName" type="text" placeholder="First&#x20;name" ' .
                'class="form-control" value="">' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="col">' . PHP_EOL .
                '            <input name="lastName" type="text" placeholder="Last&#x20;name" ' .
                'class="form-control" value="">' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>',
            'tests' => [
                [
                    'title' => 'Form row',
                    'url' => '%bootstrap-url%/components/forms/#form-row',

                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        $oFactory = new \Zend\Form\Factory();

                        // Create form
                        echo $oView->form($oFactory->create([
                            'type' => 'form',
                            'options' => ['row_class' => 'form-row'],
                            'elements' => [
                                [
                                    'spec' => [
                                        'name' => 'firstName',
                                        'options' => [
                                            'column' => true,
                                        ],
                                        'attributes' => [
                                            'type' => 'text',
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
                                            'type' => 'text',
                                            'placeholder' => 'Last name',
                                        ],
                                    ],
                                ],
                            ]
                        ]));

                        echo PHP_EOL . '<br>' . PHP_EOL;

                        // Create form
                        echo $oView->form($oFactory->create([
                            'type' => 'form',
                            'options' => ['row_class' => 'form-row'],
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
                                            'placeholder' => 'Email',
                                            'id' => 'inputEmail4',
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
                                            'placeholder' => 'Password',
                                            'id' => 'inputPassword4',
                                        ],
                                    ],
                                ],
                                // [
                                //     'spec' => [
                                //         'name' => 'address',
                                //         'options' => [
                                //             'label' => 'Address'
                                //         ],
                                //         'attributes' => [
                                //             'type' => 'text',
                                //             'placeholder' => '1234 Main St',
                                //             'id' => 'inputAddress',
                                //         ],
                                //     ],
                                // ],
                                // [
                                //     'spec' => [
                                //         'name' => 'address2',
                                //         'options' => [
                                //             'label' => 'Address 2'
                                //         ],
                                //         'attributes' => [
                                //             'type' => 'text',
                                //             'placeholder' => 'Apartment, studio, or floor',
                                //             'id' => 'inputAddress2',
                                //         ],
                                //     ],
                                // ],
                            ]
                        ]));
                    },
                    'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                        '    <div class="form-row">' . PHP_EOL .
                        '        <div class="col">' . PHP_EOL .
                        '            <input name="firstName" type="text" placeholder="First&#x20;name" ' .
                        'class="form-control" value="">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="col">' . PHP_EOL .
                        '            <input name="lastName" type="text" placeholder="Last&#x20;name" ' .
                        'class="form-control" value="">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</form>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                        '    <div class="form-row">' . PHP_EOL .
                        '        <div class="col-md-6">' . PHP_EOL .
                        '            <label class="col-form-label&#x20;col-md-6" for="inputEmail4">' .
                        'Email</label>' . PHP_EOL .
                        '            <input name="email" type="email" placeholder="Email" id="inputEmail4" ' .
                        'class="form-control" value="">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="col-md-6">' . PHP_EOL .
                        '            <label class="col-form-label&#x20;col-md-6" for="inputPassword4">' .
                        'Password</label>' . PHP_EOL .
                        '            <input name="password" type="password" placeholder="Password" ' .
                        'id="inputPassword4" class="form-control" value="">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        // '    <div class="form-group">' . PHP_EOL .
                        // '        <label class="col-form-label" for="inputAddress">Address</label>' . PHP_EOL .
                        // '        <input name="address" type="text" placeholder="1234 Main St" id="inputAddress" ' .
                        // 'class="form-control" value="">' . PHP_EOL .
                        // '    </div>' . PHP_EOL .
                        // '    <div class="form-group">' . PHP_EOL .
                        // '        <label class="col-form-label" for="inputAddress2">Address 2</label>' . PHP_EOL .
                        // '        <input name="address2" type="text" placeholder="Apartment, studio, or floor" ' .
                        // 'id="inputAddress2" class="form-control" value="">' . PHP_EOL .
                        // '    </div>' . PHP_EOL .
                        '</form>',
                ],
            ],
        ],
    ],
];
