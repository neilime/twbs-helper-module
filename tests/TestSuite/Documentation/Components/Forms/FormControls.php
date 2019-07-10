<?php

// Documentation test config file for "Components / Forms / Form controls" part
return [
    'title' => 'Form controls',
    'url' => '%bootstrap-url%/components/forms/#form-controls',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        // Create form
        $oFactory = new \Zend\Form\Factory();
        $oForm = $oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'email',
                        'options' => [
                            'label' => 'Email address'
                        ],
                        'attributes' => [
                            'type' => 'email',
                            'id' => 'exampleFormControlInput1',
                            'placeholder' => 'name@example.com',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'select',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Example select',
                            'value_options' => [
                                1 => 1,
                                2 => 2,
                                3 => 3,
                                4 => 4,
                                5 => 5,
                            ],
                        ],
                        'attributes' => [
                            'id' => 'exampleFormControlSelect1',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'multiple_select',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Example multiple select',
                            'value_options' => [
                                1 => 1,
                                2 => 2,
                                3 => 3,
                                4 => 4,
                                5 => 5,
                            ],
                        ],
                        'attributes' => [
                            'id' => 'exampleFormControlSelect2',
                            'multiple' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'textarea',
                        'options' => [
                            'label' => 'Example textarea'
                        ],
                        'attributes' => [
                            'type' => 'textarea',
                            'id' => 'exampleFormControlTextarea1',
                            'rows' => 3,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'file_input',
                        'options' => [
                            'label' => 'Example file input'
                        ],
                        'attributes' => [
                            'type' => 'file',
                            'id' => 'exampleFormControlFile1',
                        ],
                    ],
                ],
            ],
        ]);

        echo $oView->form($oForm);
    },
    'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlInput1">Email address</label>' . PHP_EOL .
        '        <input name="email" type="email" id="exampleFormControlInput1" ' .
        'placeholder="name&#x40;example.com" class="form-control" value="">' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlSelect1">Example select</label>' . PHP_EOL .
        '        <select name="select" id="exampleFormControlSelect1" class="form-control">' . PHP_EOL .
        '            <option value="1">1</option>' . PHP_EOL .
        '            <option value="2">2</option>' . PHP_EOL .
        '            <option value="3">3</option>' . PHP_EOL .
        '            <option value="4">4</option>' . PHP_EOL .
        '            <option value="5">5</option>' . PHP_EOL .
        '        </select>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlSelect2">Example multiple select</label>' . PHP_EOL .
        '        <select name="multiple_select&#x5B;&#x5D;" id="exampleFormControlSelect2" ' .
        'multiple="multiple" class="form-control">' . PHP_EOL .
        '            <option value="1">1</option>' . PHP_EOL .
        '            <option value="2">2</option>' . PHP_EOL .
        '            <option value="3">3</option>' . PHP_EOL .
        '            <option value="4">4</option>' . PHP_EOL .
        '            <option value="5">5</option>' . PHP_EOL .
        '        </select>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlTextarea1">Example textarea</label>' . PHP_EOL .
        '        <textarea name="textarea" id="exampleFormControlTextarea1" rows="3" class="form-control">' .
        '</textarea>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlFile1">Example file input</label>' . PHP_EOL .
        '        <input name="file_input" type="file" id="exampleFormControlFile1" class="form-control-file" value="">'
        . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',

    'tests' => [
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/components/forms/#sizing',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Zend\Form\Factory();

                // Create large input
                $oElement = $oFactory->create([
                    'name' => 'lg',
                    'type' => 'text',
                    'options' => ['size' => 'lg'],
                    'attributes' => ['placeholder' => '.form-control-lg'],
                ]);
                echo $oView->formElement($oElement) . PHP_EOL . '<br>' . PHP_EOL;

                // Create default input
                $oElement = $oFactory->create([
                    'name' => 'default',
                    'type' => 'text',
                    'attributes' => ['placeholder' => 'Default input'],
                ]);
                echo $oView->formElement($oElement) . PHP_EOL . '<br>' . PHP_EOL;

                // Create small input
                $oElement = $oFactory->create([
                    'name' => 'sm',
                    'type' => 'text',
                    'options' => ['size' => 'sm'],
                    'attributes' => ['placeholder' => '.form-control-sm'],
                ]);
                echo $oView->formElement($oElement) . PHP_EOL . '<br>' . PHP_EOL;

                // Create large select
                $oElement = $oFactory->create([
                    'name' => 'lg',
                    'type' => 'select',
                    'options' => ['size' => 'lg', 'value_options' => ['Large select']],
                    'attributes' => ['placeholder' => '.form-control-lg'],
                ]);
                echo $oView->formElement($oElement) . PHP_EOL . '<br>' . PHP_EOL;

                // Createdefault select
                $oElement = $oFactory->create([
                    'name' => 'default',
                    'type' => 'select',
                    'options' => ['value_options' => ['Default select']],
                    'attributes' => ['placeholder' => 'Default input'],
                ]);
                echo $oView->formElement($oElement) . PHP_EOL . '<br>' . PHP_EOL;

                // Create small select
                $oElement = $oFactory->create([
                    'name' => 'sm',
                    'type' => 'select',
                    'options' => ['size' => 'sm', 'value_options' => ['Small select']],
                    'attributes' => ['placeholder' => '.form-control-sm'],
                ]);
                echo $oView->formElement($oElement) . PHP_EOL . '<br>' . PHP_EOL;
            },
            'expected' =>
            '<input type="text" name="lg" placeholder=".form-control-lg" ' .
                'class="form-control&#x20;form-control-lg" value="">' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<input type="text" name="default" placeholder="Default&#x20;input" ' .
                'class="form-control" value="">' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<input type="text" name="sm" placeholder=".form-control-sm" ' .
                'class="form-control&#x20;form-control-sm" value="">' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<select name="lg" class="form-control&#x20;form-control-lg">' .
                '<option value="0">Large select</option>' .
                '</select>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<select name="default" class="form-control">' .
                '<option value="0">Default select</option>' .
                '</select>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<select name="sm" class="form-control&#x20;form-control-sm">' .
                '<option value="0">Small select</option>' .
                '</select>' . PHP_EOL .
                '<br>' . PHP_EOL,
        ],
        [
            'title' => 'Readonly',
            'url' => '%bootstrap-url%/components/forms/#readonly',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                // Create element
                $oFactory = new \Zend\Form\Factory();
                $oElement = $oFactory->create([
                    'name' => 'readonly-input',
                    'type' => 'text',
                    'attributes' => ['readonly' => true, 'placeholder' => 'Readonly input here...'],
                ]);
                echo $oView->formElement($oElement);
            },
            'expected' =>
            '<input type="text" name="readonly-input" readonly="readonly" ' .
                'placeholder="Readonly&#x20;input&#x20;here..." class="form-control" value="">',
        ],
        [
            'title' => 'Readonly plain text',
            'url' => '%bootstrap-url%/components/forms/#readonly-plain-text',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Zend\Form\Factory();
                // Create horizontal form
                $oForm = $oFactory->create([
                    'type' => 'form',
                    'options' => ['twbs-layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => [
                                    'plaintext' => true,
                                    'column-size' => 'sm-10',
                                    'label' => 'Email',
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'staticEmail',
                                    'value' => 'email@example.com',
                                    'readonly' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => [
                                    'column-size' => 'sm-10',
                                    'label' => 'Password',
                                ],
                                'attributes' => [
                                    'type' => 'password',
                                    'id' => 'inputPassword',
                                    'placeholder' => 'Password',
                                ],
                            ],
                        ],
                    ],
                ]);

                echo $oView->form($oForm);

                echo PHP_EOL . '<br>' . PHP_EOL;

                // Create inline form
                $oForm = $oFactory->create([
                    'type' => 'form',
                    'options' => ['twbs-layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => [
                                    'plaintext' => true,
                                    'label' => 'Email',
                                    'twbs-row-class' => 'mb-2',
                                ],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'staticEmail2',
                                    'value' => 'email@example.com',
                                    'readonly' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => [
                                    'label' => 'Password',
                                    'twbs-row-class' => 'mx-sm-3 mb-2',
                                ],
                                'attributes' => [
                                    'type' => 'password',
                                    'id' => 'inputPassword2',
                                    'placeholder' => 'Password',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => ['label' => 'Confirm identity', 'variant' => 'primary'],
                                'attributes' => ['class' => 'mb-2'],
                            ],
                        ],
                    ],
                ]);

                echo $oView->form($oForm);
            },
            'expected' =>
            '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="form-group&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-sm-2" for="staticEmail">Email</label>'
                . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input name="email" type="email" id="staticEmail" readonly="readonly" ' .
                'class="form-control-plaintext" value="email&#x40;example.com">' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="form-group&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-sm-2" for="inputPassword">Password</label>' . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input name="password" type="password" id="inputPassword" ' .
                'placeholder="Password" class="form-control" value="">' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>' . PHP_EOL .
                '<br>' . PHP_EOL .
                '<form method="POST" name="form" role="form" class="form-inline" id="form">' . PHP_EOL .
                '    <div class="form-group&#x20;mb-2">' . PHP_EOL .
                '        <label class="sr-only" for="staticEmail2">Email</label>'
                . PHP_EOL .
                '        <input name="email" type="email" id="staticEmail2" readonly="readonly" ' .
                'class="form-control-plaintext" value="email&#x40;example.com">' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="form-group&#x20;mb-2&#x20;mx-sm-3">' . PHP_EOL .
                '        <label class="sr-only" for="inputPassword2">Password</label>' . PHP_EOL .
                '        <input name="password" type="password" id="inputPassword2" ' .
                'placeholder="Password" class="form-control" value="">' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">' .
                'Confirm identity</button>' . PHP_EOL .
                '</form>',
        ],
    ],
];
