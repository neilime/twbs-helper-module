<?php

// Documentation test config file for "Components / Dropdowns / Menu content" part
return [
    'title' => 'Menu content',
    'url' => '%bootstrap-url%/components/dropdowns/#menu-content',
    'tests' => [
        [
            'title' => 'Headers',
            'url' => '%bootstrap-url%/components/dropdowns/#headers',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->dropdown()->renderMenu([
                    'Dropdown header' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_HEADER,
                    'Action',
                    'Another action',
                ]);
            },
            'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                '    <h6 class="dropdown-header">Dropdown header</h6>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Dividers',
            'url' => '%bootstrap-url%/components/dropdowns/#headers',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->dropdown()->renderMenu([
                    'Action',
                    'Another action',
                    'Something else here',
                    '---',
                    'Separated link',
                ]);
            },
            'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
                '    <div class="dropdown-divider"></div>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Text',
            'url' => '%bootstrap-url%/components/dropdowns/#headers',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->dropdown()->renderMenu([
                    '<p>Some example text that\'s free-flowing within the dropdown menu.</p>',
                    '<p class="mb-0">And this is more example text.</p>',
                ], ['class' => 'p-4 text-muted', 'style' => 'max-width: 200px;']);
            },
            'expected' =>
            '<div class="dropdown-menu&#x20;p-4&#x20;text-muted" style="max-width&#x3A;&#x20;200px&#x3B;">'
                . PHP_EOL .
                '    <p>Some example text that\'s free-flowing within the dropdown menu.</p>' . PHP_EOL .
                '    <p class="mb-0">And this is more example text.</p>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Forms',
            'url' => '%bootstrap-url%/components/dropdowns/#forms',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                // Create form
                $oFactory = new \Laminas\Form\Factory();
                $oForm = $oFactory->create([
                    'type' => 'form',
                    'name' => 'dropdown',
                    'attributes' => ['id' => 'dropdown'],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'email',
                                'options' => ['label' => 'Email address'],
                                'attributes' => [
                                    'type' => 'email',
                                    'id' => 'exampleDropdownFormEmail1',
                                    'placeholder' => 'email@example.com',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'password',
                                'options' => ['label' => 'Password'],
                                'attributes' => [
                                    'type' => 'password',
                                    'id' => 'exampleDropdownFormPassword1',
                                    'placeholder' => 'Password',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'checkbox',
                                'name' => 'remember_me',
                                'options' => ['label' => 'Remember me', 'use_hidden_element' => false],
                                'attributes' => [
                                    'id' => 'dropdownCheck',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => ['label' => 'Sign in', 'variant' => 'primary'],
                            ],
                        ],
                    ]
                ]);

                echo $oView->dropdown()->renderMenu([
                    $oForm,
                    'New around here? Sign up',
                    'Forgot password?',
                ]);
            },
            'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                '    <form action="" method="POST" name="dropdown" id="dropdown" role="form">' . PHP_EOL .
                '        <div class="mb-3">' . PHP_EOL .
                '            <label class="form-label" for="exampleDropdownFormEmail1">Email address</label>'
                . PHP_EOL .
                '            <input name="email" type="email" id="exampleDropdownFormEmail1" ' .
                'placeholder="email&#x40;example.com" class="form-control" value=""/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="mb-3">' . PHP_EOL .
                '            <label class="form-label" for="exampleDropdownFormPassword1">Password</label>' . PHP_EOL .
                '            <input name="password" type="password" id="exampleDropdownFormPassword1" ' .
                'placeholder="Password" class="form-control" value=""/>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="mb-3">' . PHP_EOL .
                '            <div class="form-check">' . PHP_EOL .
                '                <input type="checkbox" name="remember_me" id="dropdownCheck" ' .
                'class="form-check-input" value="1"/>' . PHP_EOL .
                '                <label class="form-check-label" for="dropdownCheck">' .
                'Remember me</label>' . PHP_EOL .
                '            </div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">' .
                'Sign in</button>' . PHP_EOL .
                '    </form>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">New around here? Sign up</a>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Forgot password?</a>' . PHP_EOL .
                '</div>',
        ],
    ],
];
