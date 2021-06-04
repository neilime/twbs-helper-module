<?php

// Documentation test config file for "Components / Forms / Overview" part
return [
    'title' => 'Overview',
    'url' => '%bootstrap-url%/forms/overview',
    "tests" => [
        [
            'title' => 'Overview',
            'url' => '%bootstrap-url%/forms/overview/#overview',
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
            'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label" for="exampleInputEmail1">Email address</label>' . PHP_EOL .
                '        <input name="email" type="email" id="exampleInputEmail1" class="form-control" ' .
                'aria-describedby="emailHelp" value=""/>' . PHP_EOL .
                '        <div class="form-text" id="emailHelp">' . PHP_EOL .
                '            We&#039;ll never share your email with anyone else.' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label" for="exampleInputPassword1">Password</label>' . PHP_EOL .
                '        <input name="password" type="password" id="exampleInputPassword1" class="form-control" ' .
                'value=""/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <div class="form-check">' . PHP_EOL .
                '            <input type="checkbox" name="remember_me" id="exampleCheck1" class="form-check-input" ' .
                'value="1"/>' . PHP_EOL .
                '            <label class="form-check-label" for="exampleCheck1">Check me out</label>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">' .
                'Submit</button>' . PHP_EOL .
                '</form>',
        ],
        [
            'title' => 'Form text',
            'url' => '%bootstrap-url%/forms/overview/#form-text',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                echo $oView->formRow($oFactory->create([
                    'name' => 'password',
                    'options' => [
                        'label' => 'Password',
                        'form_group' => false,
                        'help_block' => [
                            'content' => 'Your password must be 8-20 characters long, contain letters and numbers, ' .
                                'and must not contain spaces, special characters, or emoji.',
                            'attributes' => ['id' => 'passwordHelpBlock'],
                        ]
                    ],
                    'attributes' => [
                        'id' => 'inputPassword5',
                        'type' => 'password',
                    ],
                ]));

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Inline text can use any typical inline HTML element
                // (be it a <small>, <span>, or something else)
                // with nothing more than a utility class
                echo $oView->form($oFactory->create([
                    'type' => 'form',
                    'options' => [
                        'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
                    ],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => [
                                    'label' => 'Password',
                                    'show_label' => true,
                                    'help_block' => [
                                        'content' => 'Must be 8-20 characters long.',
                                        'attributes' => ['id' => 'passwordHelpInline'],
                                    ],
                                ],
                                'attributes' => [
                                    'id' => 'inputPassword6',
                                    'type' => 'password',
                                    'class' => 'mx-sm-3',
                                ],
                            ],
                        ],
                    ],
                ]));
            },
            'expected' => '<label class="form-label" for="inputPassword5">Password</label>' . PHP_EOL .
                '<input name="password" id="inputPassword5" type="password" ' .
                'class="form-control" aria-describedby="passwordHelpBlock" value=""/>' . PHP_EOL .
                '<div class="form-text" id="passwordHelpBlock">' . PHP_EOL .
                '    Your password must be 8-20 characters long, contain letters and numbers, ' .
                'and must not contain spaces, special characters, or emoji.' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<form action="" method="POST" name="form" role="form" class="align-items-center" id="form">' .
                PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label" for="inputPassword6">Password</label>' . PHP_EOL .
                '        <input name="password" id="inputPassword6" type="password" ' .
                'class="form-control&#x20;mx-sm-3" aria-describedby="passwordHelpInline" value=""/>' . PHP_EOL .
                '        <div class="col-auto">' . PHP_EOL .
                '            <span class="form-text" id="passwordHelpInline">Must be 8-20 characters long.</span>' .
                PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>',
        ],
        [
            'title' => 'Disabled forms',
            'url' => '%bootstrap-url%/forms/overview/#disabled-forms',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                echo $oView->form($oFactory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [
                                'type' => 'fieldset',
                                'options' => [
                                    'label' => 'Disabled fieldset example',
                                ],
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
                                            'options' => [
                                                'label' => 'Can\'t check this',
                                                'use_hidden_element' => false
                                            ],
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
            'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <fieldset disabled="disabled">' . PHP_EOL .
                '        <legend>Disabled fieldset example</legend>' . PHP_EOL .
                '        <div class="mb-3">' . PHP_EOL .
                '            <label class="form-label" for="disabledTextInput">Disabled input</label>' . PHP_EOL .
                '            <input name="fieldset&#x5B;disabled-input&#x5D;" type="text" id="disabledTextInput" ' .
                'placeholder="Disabled&#x20;input" class="form-control" value=""/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="mb-3">' . PHP_EOL .
                '            <label class="form-label" for="disabledSelect">Disabled select menu</label>' . PHP_EOL .
                '            <select name="fieldset&#x5B;disabled-select&#x5D;" id="disabledSelect" ' .
                'class="form-select"><option value="">Disabled select</option>' .
                '</select>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="mb-3">' . PHP_EOL .
                '            <div class="form-check">' . PHP_EOL .
                '                <input type="checkbox" name="fieldset&#x5B;disabled-fieldset-check&#x5D;" ' .
                'id="disabledFieldsetCheck" disabled="disabled" class="form-check-input" value="1"/>' . PHP_EOL .
                '                <label class="form-check-label" for="disabledFieldsetCheck">' .
                'Can&#039;t check this</label>' . PHP_EOL .
                '            </div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <button type="submit" name="fieldset&#x5B;submit&#x5D;" class="btn&#x20;btn-primary" ' .
                'value="">Submit</button>' . PHP_EOL .
                '    </fieldset>' . PHP_EOL .
                '</form>',
        ]
    ]
];
