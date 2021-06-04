<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Horizontal form" part
return [
    'title' => 'Horizontal form',
    'url' => '%bootstrap-url%/forms/#horizontal-form',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

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
                        'type' => 'checkbox',
                        'options' => [
                            'label' => 'Checkbox',
                            'column' => 'sm-10',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'multicheckbox',
                        'options' => [
                            'label' => 'Multicheckbox',
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
    'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="mb-3&#x20;row">' . PHP_EOL .
        '        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="inputEmail3">' .
        'Email' .
        '</label>' . PHP_EOL .
        '        <div class="col-sm-10">' . PHP_EOL .
        '            <input name="email" type="email" id="inputEmail3" ' .
        'placeholder="Email" class="form-control" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="mb-3&#x20;row">' . PHP_EOL .
        '        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="inputPassword3">' .
        'Password' .
        '</label>' . PHP_EOL .
        '        <div class="col-sm-10">' . PHP_EOL .
        '            <input name="password" type="password" id="inputPassword3" ' .
        'placeholder="Password" class="form-control" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>'  . PHP_EOL .
        '    <fieldset>'  . PHP_EOL .
        '        <div class="row">'  . PHP_EOL .
        '            <legend class="col-sm-2&#x20;pt-0">' .
        'Radios' .
        '</legend>'  . PHP_EOL .
        '            <div class="col-sm-10">'  . PHP_EOL .
        '                <div class="form-check">'  . PHP_EOL .
        '                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" ' .
        'class="form-check-input" id="gridRadios1" value="option1"/>'  . PHP_EOL .
        '                    <label class="form-check-label" for="gridRadios1">' .
        'First radio' .
        '</label>'  . PHP_EOL .
        '                </div>'  . PHP_EOL .
        '                <div class="form-check">'  . PHP_EOL .
        '                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" ' .
        'class="form-check-input" id="gridRadios2" value="option2"/>'  . PHP_EOL .
        '                    <label class="form-check-label" for="gridRadios2">' .
        'Second radio' .
        '</label>'  . PHP_EOL .
        '                </div>'  . PHP_EOL .
        '                <div class="form-check">'  . PHP_EOL .
        '                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" ' .
        'class="form-check-input" id="gridRadios3" value="option3" disabled="disabled"/>'  . PHP_EOL .
        '                    <label class="form-check-label" for="gridRadios3">' .
        'Third disabled radio' .
        '</label>'  . PHP_EOL .
        '                </div>'  . PHP_EOL .
        '            </div>'  . PHP_EOL .
        '        </div>'  . PHP_EOL .
        '    </fieldset>'  . PHP_EOL .
        '    <div class="mb-3&#x20;row">' . PHP_EOL .
        '        <div class="col-sm-10&#x20;offset-sm-2">' . PHP_EOL .
        '            <div class="form-check">' . PHP_EOL .
        '                <input type="hidden" name="checkbox" value="0"/>' .
        '<input type="checkbox" name="checkbox" class="form-check-input" value="1"/>' . PHP_EOL .
        '                <label class="form-check-label" for="checkbox">' .
        'Checkbox</label>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="mb-3&#x20;row">' . PHP_EOL .
        '        <div class="col-sm-2">' . PHP_EOL .
        '            Multicheckbox' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-sm-10">' . PHP_EOL .
        '            <div class="form-check">' . PHP_EOL .
        '                <input type="checkbox" name="multicheckbox&#x5B;&#x5D;" ' .
        'class="form-check-input" id="gridCheck1" value="1"/>' . PHP_EOL .
        '                <label class="form-check-label" for="gridCheck1">' .
        'Example checkbox</label>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="col-sm-10">' . PHP_EOL .
        '        <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">' .
        'Sign in</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
    'tests' => [
        [
            'title' => 'Horizontal form label sizing',
            'url' => '%bootstrap-url%/forms/#horizontal-form-label-sizing',

            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

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
            'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="mb-3&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-form-label-sm&#x20;col-sm-2&#x20;form-label" ' .
                'for="colFormLabelSm">' .
                'Email' .
                '</label>' . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input name="emailSm" type="email" id="colFormLabelSm" ' .
                'placeholder="col-form-label-sm" class="form-control&#x20;form-control-sm" ' .
                'value=""/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" ' .
                'for="colFormLabel">' .
                'Email' .
                '</label>' . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input name="email" type="email" id="colFormLabel" ' .
                'placeholder="col-form-label" class="form-control" ' .
                'value=""/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-form-label-lg&#x20;col-sm-2&#x20;form-label" ' .
                'for="colFormLabelLg">' .
                'Email' .
                '</label>' . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input name="emailLg" type="email" id="colFormLabelLg" ' .
                'placeholder="col-form-label-lg" class="form-control&#x20;form-control-lg" ' .
                'value=""/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>',
        ],
    ],
];
