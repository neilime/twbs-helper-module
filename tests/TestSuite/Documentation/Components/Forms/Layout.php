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
                [
                    'title' => 'Horizontal form',
                    'url' => '%bootstrap-url%/components/forms/#horizontal-form',

                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        $oFactory = new \Zend\Form\Factory();

                        // Create form
                        echo $oView->form($oFactory->create([
                            'type' => 'form',
                            'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
                            'elements' => [
                                [
                                    'spec' => [
                                        'name' => 'email',
                                        'options' => [
                                            'label' => 'Email',
                                            'column' => 'sm-10',
                                        ],
                                        'attributes' => [
                                            'type' => 'email',
                                            'id' => 'inputEmail3',
                                            'placeholder' => 'Email',
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'password',
                                        'options' => [
                                            'label' => 'Password',
                                            'column' => 'sm-10',
                                        ],
                                        'attributes' => [
                                            'type' => 'password',
                                            'id' => 'inputPassword3',
                                            'placeholder' => 'Password',
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'type' => 'fieldset',
                                        'options' => [
                                            'label' => 'Radios',
                                            'label_attributes' => ['class' => 'pt-0'],
                                            'column' => 'sm-10',
                                        ],
                                        'elements' => [
                                            [
                                                'spec' => [
                                                    'type' => 'radio',
                                                    'name' => 'gridRadios',
                                                    'options' => [
                                                        'column' => 'sm-10',
                                                        'value_options' => [
                                                            [
                                                                'label' => 'First radio',
                                                                'attributes' => ['id' => 'gridRadios1'],
                                                                'value' => 'option1',
                                                            ],
                                                            [
                                                                'label' => 'Second radio',
                                                                'attributes' => ['id' => 'gridRadios2'],
                                                                'value' => 'option2',
                                                            ],
                                                            [
                                                                'label' => 'Third disabled radio',
                                                                'disabled' => true,
                                                                'attributes' => ['id' => 'gridRadios3'],
                                                                'value' => 'option3',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'type' => 'multicheckbox',
                                        'options' => [
                                            'label' => 'Checkbox',
                                            'column' => 'sm-10',
                                            'value_options' => [
                                                [
                                                    'label' => 'Example checkbox',
                                                    'attributes' => ['id' => 'gridCheck1'],
                                                    'value' => 1,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'type' => 'submit',
                                        'options' => [
                                            'label' => 'Sign in',
                                            'variant' => 'primary',
                                            'column' => 'sm-10',
                                        ],
                                    ],
                                ],
                            ]
                        ]));
                    },
                    'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                        '    <div class="form-group&#x20;row">' . PHP_EOL .
                        '        <label class="col-form-label&#x20;col-sm-2" for="inputEmail3">' .
                        'Email' .
                        '</label>' . PHP_EOL .
                        '        <div class="col-sm-10">' . PHP_EOL .
                        '            <input name="email" type="email" id="inputEmail3" ' .
                        'placeholder="Email" class="form-control" value="">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <div class="form-group&#x20;row">' . PHP_EOL .
                        '        <label class="col-form-label&#x20;col-sm-2" for="inputPassword3">' .
                        'Password' .
                        '</label>' . PHP_EOL .
                        '        <div class="col-sm-10">' . PHP_EOL .
                        '            <input name="password" type="password" id="inputPassword3" ' .
                        'placeholder="Password" class="form-control" value="">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>'  . PHP_EOL .
                        '    <fieldset class="form-group">'  . PHP_EOL .
                        '        <div class="row">'  . PHP_EOL .
                        '            <legend class="col-form-label&#x20;col-sm-2&#x20;pt-0">' .
                        'Radios' .
                        '</legend>'  . PHP_EOL .
                        '            <div class="col-sm-10">'  . PHP_EOL .
                        '                <div class="form-check">'  . PHP_EOL .
                        '                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" ' .
                        'class="form-check-input" id="gridRadios1" value="option1">'  . PHP_EOL .
                        '                    <label class="form-check-label" for="gridRadios1">' .
                        'First radio' .
                        '</label>'  . PHP_EOL .
                        '                </div>'  . PHP_EOL .
                        '                <div class="form-check">'  . PHP_EOL .
                        '                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" ' .
                        'class="form-check-input" id="gridRadios2" value="option2">'  . PHP_EOL .
                        '                    <label class="form-check-label" for="gridRadios2">' .
                        'Second radio' .
                        '</label>'  . PHP_EOL .
                        '                </div>'  . PHP_EOL .
                        '                <div class="form-check">'  . PHP_EOL .
                        '                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" ' .
                        'class="form-check-input" id="gridRadios3" value="option3" disabled="disabled">'  . PHP_EOL .
                        '                    <label class="form-check-label" for="gridRadios3">' .
                        'Third disabled radio' .
                        '</label>'  . PHP_EOL .
                        '                </div>'  . PHP_EOL .
                        '            </div>'  . PHP_EOL .
                        '        </div>'  . PHP_EOL .
                        '    </fieldset>'  . PHP_EOL .
                        '    <div class="form-group&#x20;row">' . PHP_EOL .
                        '        <div class="col-sm-2">' . PHP_EOL .
                        '            Checkbox' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="col-sm-10">' . PHP_EOL .
                        '            <div class="form-check">' . PHP_EOL .
                        '                <input type="checkbox" name="multicheckbox&#x5B;&#x5D;" ' .
                        'class="form-check-input" id="gridCheck1" value="1">' . PHP_EOL .
                        '                <label class="form-check-label" for="gridCheck1">' .
                        'Example checkbox</label>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <div class="form-group&#x20;row">' . PHP_EOL .
                        '        <div class="col-sm-10">' . PHP_EOL .
                        '            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">' .
                        'Sign in</button>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</form>',
                    'tests' => [
                        [
                            'title' => 'Horizontal form label sizing',
                            'url' => '%bootstrap-url%/components/forms/#horizontal-form-label-sizing',

                            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                                $oFactory = new \Zend\Form\Factory();

                                // Create form
                                echo $oView->form($oFactory->create([
                                    'type' => 'form',
                                    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
                                    'elements' => [
                                        [
                                            'spec' => [
                                                'name' => 'emailSm',
                                                'options' => [
                                                    'label' => 'Email',
                                                    'column' => 'sm-10',
                                                    'size' => 'sm',
                                                ],
                                                'attributes' => [
                                                    'type' => 'email',
                                                    'id' => 'colFormLabelSm',
                                                    'placeholder' => 'col-form-label-sm',
                                                ],
                                            ],
                                        ],
                                        [
                                            'spec' => [
                                                'name' => 'email',
                                                'options' => [
                                                    'label' => 'Email',
                                                    'column' => 'sm-10',
                                                ],
                                                'attributes' => [
                                                    'type' => 'email',
                                                    'id' => 'colFormLabel',
                                                    'placeholder' => 'col-form-label',
                                                ],
                                            ],
                                        ],
                                        [
                                            'spec' => [
                                                'name' => 'emailLg',
                                                'options' => [
                                                    'label' => 'Email',
                                                    'column' => 'sm-10',
                                                    'size' => 'lg',
                                                ],
                                                'attributes' => [
                                                    'type' => 'email',
                                                    'id' => 'colFormLabelLg',
                                                    'placeholder' => 'col-form-label-lg',
                                                ],
                                            ],
                                        ],
                                    ],
                                ]));
                            },
                            'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                                '    <div class="form-group&#x20;row">' . PHP_EOL .
                                '        <label class="col-form-label&#x20;col-form-label-sm&#x20;col-sm-2" ' .
                                'for="colFormLabelSm">' .
                                'Email' .
                                '</label>' . PHP_EOL .
                                '        <div class="col-sm-10">' . PHP_EOL .
                                '            <input name="emailSm" type="email" id="colFormLabelSm" ' .
                                'placeholder="col-form-label-sm" class="form-control&#x20;form-control-sm" '.
                                'value="">' . PHP_EOL .
                                '        </div>' . PHP_EOL .
                                '    </div>' . PHP_EOL .
                                '    <div class="form-group&#x20;row">' . PHP_EOL .
                                '        <label class="col-form-label&#x20;col-sm-2" ' .
                                'for="colFormLabel">' .
                                'Email' .
                                '</label>' . PHP_EOL .
                                '        <div class="col-sm-10">' . PHP_EOL .
                                '            <input name="email" type="email" id="colFormLabel" ' .
                                'placeholder="col-form-label" class="form-control" '.
                                'value="">' . PHP_EOL .
                                '        </div>' . PHP_EOL .
                                '    </div>' . PHP_EOL .
                                '    <div class="form-group&#x20;row">' . PHP_EOL .
                                '        <label class="col-form-label&#x20;col-form-label-lg&#x20;col-sm-2" ' .
                                'for="colFormLabelLg">' .
                                'Email' .
                                '</label>' . PHP_EOL .
                                '        <div class="col-sm-10">' . PHP_EOL .
                                '            <input name="emailLg" type="email" id="colFormLabelLg" ' .
                                'placeholder="col-form-label-lg" class="form-control&#x20;form-control-lg" '.
                                'value="">' . PHP_EOL .
                                '        </div>' . PHP_EOL .
                                '    </div>' . PHP_EOL .
                                '</form>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
