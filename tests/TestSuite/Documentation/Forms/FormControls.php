<?php

// Documentation test config file for "Components / Forms / Form controls" part
return [
    'title' => 'Form controls',
    'url' => '%bootstrap-url%/forms/form-control',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/forms/form-control/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                echo $oView->form($oFactory->create([
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
                    ],
                ]));
            },
            'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label" for="exampleFormControlInput1">Email address</label>' . PHP_EOL .
                '        <input name="email" type="email" id="exampleFormControlInput1" ' .
                'placeholder="name&#x40;example.com" class="form-control" value=""/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>'
                . PHP_EOL .
                '        <textarea name="textarea" id="exampleFormControlTextarea1" rows="3" class="form-control">' .
                '</textarea>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>',
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/forms/form-control/#sizing',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                // Render large input
                $oElement = $oFactory->create([
                    'name' => 'lg',
                    'type' => 'text',
                    'options' => ['size' => 'lg'],
                    'attributes' => ['placeholder' => '.form-control-lg', 'aria-label' => '.form-control-lg example'],
                ]);
                echo $oView->formElement($oElement);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render default input
                $oElement = $oFactory->create([
                    'name' => 'default',
                    'type' => 'text',
                    'attributes' => ['placeholder' => 'Default input', 'aria-label' => 'default input example'],
                ]);
                echo $oView->formElement($oElement);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render small input
                $oElement = $oFactory->create([
                    'name' => 'sm',
                    'type' => 'text',
                    'options' => ['size' => 'sm'],
                    'attributes' => ['placeholder' => '.form-control-sm', 'aria-label' => '.form-control-sm example'],
                ]);
                echo $oView->formElement($oElement);
            },
            'expected' =>
            '<input type="text" name="lg" placeholder=".form-control-lg" aria-label=".form-control-lg&#x20;example" ' .
                'class="form-control&#x20;form-control-lg" value=""/>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<input type="text" name="default" placeholder="Default&#x20;input" ' .
                'aria-label="default&#x20;input&#x20;example" class="form-control" value=""/>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<input type="text" name="sm" placeholder=".form-control-sm" ' .
                'aria-label=".form-control-sm&#x20;example" class="form-control&#x20;form-control-sm" value=""/>',
        ],
        [
            'title' => 'Disabled',
            'url' => '%bootstrap-url%/forms/form-control/#disabled',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Render disabled input
                $oFactory = new \Laminas\Form\Factory();
                $oElement = $oFactory->create([
                    'name' => 'disabled-input',
                    'type' => 'text',
                    'attributes' => [
                        'disabled' => true,
                        'placeholder' => 'Disabled input',
                        'aria-label' => 'Disabled input example'
                    ],
                ]);
                echo $oView->formElement($oElement);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render disabled and readonly input
                $oElement = $oFactory->create([
                    'name' => 'disabled-readonly-input',
                    'type' => 'text',
                    'attributes' => [
                        'disabled' => true,
                        'readonly' => true,
                        'placeholder' => 'Disabled readonly input',
                        'aria-label' => 'Disabled input example'
                    ],
                ]);
                echo $oView->formElement($oElement);
            },
            'expected' => '<input type="text" name="disabled-input" disabled="disabled" ' .
                'placeholder="Disabled&#x20;input" aria-label="Disabled&#x20;input&#x20;example" ' .
                'class="form-control" value=""/>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<input type="text" name="disabled-readonly-input" disabled="disabled" readonly="readonly" ' .
                'placeholder="Disabled&#x20;readonly&#x20;input" aria-label="Disabled&#x20;input&#x20;example" ' .
                'class="form-control" value=""/>',
        ],
        [
            'title' => 'Readonly',
            'url' => '%bootstrap-url%/forms/form-control/#readonly',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // Render element
                $oFactory = new \Laminas\Form\Factory();
                $oElement = $oFactory->create([
                    'name' => 'readonly-input',
                    'type' => 'text',
                    'attributes' => [
                        'readonly' => true,
                        'placeholder' => 'Readonly input here...',
                        'aria-label' => 'readonly input example'
                    ],
                ]);
                echo $oView->formElement($oElement);
            },
            'expected' =>
            '<input type="text" name="readonly-input" readonly="readonly" ' .
                'placeholder="Readonly&#x20;input&#x20;here..." aria-label="readonly&#x20;input&#x20;example" ' .
                'class="form-control" value=""/>',
        ],
        [
            'title' => 'Readonly plain text',
            'url' => '%bootstrap-url%/forms/#readonly-plain-text',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                // Render horizontal form
                $oForm = $oFactory->create([
                    'type' => 'form',
                    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_HORIZONTAL],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => [
                                    'plaintext' => true,
                                    'column' => 'sm-10',
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
                                    'column' => 'sm-10',
                                    'label' => 'Password',
                                ],
                                'attributes' => [
                                    'type' => 'password',
                                    'id' => 'inputPassword',
                                ],
                            ],
                        ],
                    ],
                ]);

                echo $oView->form($oForm);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Render inline form
                echo $oView->form($oFactory->create([
                    'type' => 'form',
                    'options' => ['layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => [
                                    'plaintext' => true,
                                    'label' => 'Email',
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
                                    'row_class' => 'mx-sm-3',
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
                ]));
            },
            'expected' =>
            '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="mb-3&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="staticEmail">Email</label>'
                . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input name="email" type="email" id="staticEmail" readonly="readonly" ' .
                'class="form-control-plaintext" value="email&#x40;example.com"/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3&#x20;row">' . PHP_EOL .
                '        <label class="col-form-label&#x20;col-sm-2&#x20;form-label" for="inputPassword">' .
                'Password</label>' . PHP_EOL .
                '        <div class="col-sm-10">' . PHP_EOL .
                '            <input name="password" type="password" id="inputPassword" ' .
                'class="form-control" value=""/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>' . PHP_EOL .
                '<br/>' . PHP_EOL .
                '<form action="" method="POST" name="form" role="form" class="align-items-center" id="form">' .
                PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label&#x20;sr-only" for="staticEmail2">Email</label>'
                . PHP_EOL .
                '        <input name="email" type="email" id="staticEmail2" readonly="readonly" ' .
                'class="form-control-plaintext" value="email&#x40;example.com"/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3&#x20;mx-sm-3">' . PHP_EOL .
                '        <label class="form-label&#x20;sr-only" for="inputPassword2">Password</label>' . PHP_EOL .
                '        <input name="password" type="password" id="inputPassword2" ' .
                'placeholder="Password" class="form-control" value=""/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">' .
                'Confirm identity</button>' . PHP_EOL .
                '</form>',
        ],
        [
            'title' => 'File input',
            'url' => '%bootstrap-url%/forms/form-control/#file-input',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();
                // Render inline form
                echo $oView->form($oFactory->create([
                    'type' => 'form',
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'default-file',
                                'options' => [
                                    'label' => 'Default file input example',
                                ],
                                'attributes' => [
                                    'type' => 'file',
                                    'id' => 'formFile',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'file-multiple',
                                'options' => [
                                    'label' => 'Multiple files input example',
                                ],
                                'attributes' => [
                                    'multiple' => true,
                                    'type' => 'file',
                                    'id' => 'formFileMultiple',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'file-disabled',
                                'options' => [
                                    'label' => 'Disabled file input example',
                                ],
                                'attributes' => [
                                    'disabled' => true,
                                    'type' => 'file',
                                    'id' => 'formFileDisabled',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'file-sm',
                                'options' => [
                                    'size' => 'sm',
                                    'label' => 'Small file input example',
                                ],
                                'attributes' => [
                                    'type' => 'file',
                                    'id' => 'formFileSm',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'file-lg',
                                'options' => [
                                    'size' => 'lg',
                                    'label' => 'Large file input example',
                                ],
                                'attributes' => [
                                    'type' => 'file',
                                    'id' => 'formFileLg',
                                ],
                            ],
                        ],
                    ],
                ]));
            },
            'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label" for="formFile">Default file input example</label>' . PHP_EOL .
                '        <input name="default-file" type="file" id="formFile" class="form-control"/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label" for="formFileMultiple">Multiple files input example</label>' .
                PHP_EOL .
                '        <input name="file-multiple&#x5B;&#x5D;" multiple="multiple" type="file" ' .
                'id="formFileMultiple" class="form-control"/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="form-label" for="formFileDisabled">Disabled file input example</label>' .
                PHP_EOL .
                '        <input name="file-disabled" disabled="disabled" type="file" id="formFileDisabled" ' .
                'class="form-control"/>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="col-form-label-sm&#x20;form-label" for="formFileSm">' .
                'Small file input example</label>' . PHP_EOL .
                '        <input name="file-sm" type="file" id="formFileSm" class="form-control&#x20;form-control-sm"/>'
                . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="mb-3">' . PHP_EOL .
                '        <label class="col-form-label-lg&#x20;form-label" for="formFileLg">' .
                'Large file input example</label>' . PHP_EOL .
                '        <input name="file-lg" type="file" id="formFileLg" class="form-control&#x20;form-control-lg"/>'
                . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</form>'
        ],
    ],
];
