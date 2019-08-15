<?php

// Documentation test config file for "Components / Forms / Overview" part
return [
    'title' => 'Overview',
    'url' => '%bootstrap-url%/components/forms/#overview',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Zend\Form\Factory();

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
    'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleInputEmail1">Email address</label>' . PHP_EOL .
        '        <input name="email" type="email" id="exampleInputEmail1" ' .
        'placeholder="Enter&#x20;email" class="form-control" value="">' . PHP_EOL .
        '        <small id="emailHelp" class="form-text&#x20;text-muted">' .
        'We&#039;ll never share your email with anyone else.' .
        '</small>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleInputPassword1">Password</label>' . PHP_EOL .
        '        <input name="password" type="password" id="exampleInputPassword1" ' .
        'placeholder="Password" class="form-control" value="">' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <div class="form-check">' . PHP_EOL .
        '            <input type="checkbox" name="remember_me" id="exampleCheck1" '.
        'class="form-check-input" value="1">' . PHP_EOL .
        '            <label class="form-check-label" for="exampleCheck1">' .
        'Check me out</label>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">' .
        'Submit</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
