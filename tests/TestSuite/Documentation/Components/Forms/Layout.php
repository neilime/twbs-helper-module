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
                // Create form
                $oFactory = new \Zend\Form\Factory();
                $oForm = $oFactory->create([
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
                ]);

                echo $oView->form($oForm);
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
                // Create form
                $oFactory = new \Zend\Form\Factory();
                $oForm = $oFactory->create([
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
                ]);

                echo $oView->form($oForm);
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
                        // Create form
                        $oFactory = new \Zend\Form\Factory();
                        $oForm = $oFactory->create([
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
                        ]);

                        echo $oView->form($oForm);
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
                        '</form>',
                ],
            ],
        ],
    ],
];
