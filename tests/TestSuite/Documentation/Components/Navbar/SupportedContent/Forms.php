<?php

// Documentation test config file for "Components / Navbar / Supported content / Forms" part
return [
    'title' => 'Forms',
    'url' => '%bootstrap-url%/components/navbar/#forms',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'expand' => false,
                'toggler' => false,
                'collapse' => false,
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'search',
                                'attributes' => [
                                    'type' => 'search',
                                    'placeholder' => 'Search',
                                    'aria-label' => 'Search',
                                    'class' => 'mr-sm-2',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => [
                                    'label' => 'Search',
                                    'variant' => 'outline-success',
                                ],
                                'attributes' => ['class' => 'my-2 my-sm-0'],
                            ],
                        ],
                    ],
                ],
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'expand' => false,
                'toggler' => false,
                'collapse' => false,
                'brand' => 'Navbar',
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'search',
                                'attributes' => [
                                    'type' => 'search',
                                    'placeholder' => 'Search',
                                    'aria-label' => 'Search',
                                    'class' => 'mr-sm-2',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => [
                                    'label' => 'Search',
                                    'variant' => 'outline-success',
                                ],
                                'attributes' => ['class' => 'my-2 my-sm-0'],
                            ],
                        ],
                    ],
                ],
            ]
        );

        echo PHP_EOL . '<br>' . PHP_EOL;

        // Input groups work, too:
        echo $oView->navigation()->navbar()->render(
            new \Zend\Navigation\Navigation(),
            [
                'expand' => false,
                'toggler' => false,
                'collapse' => false,
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'username',
                                'options' => [
                                    'add_on_prepend' => '@',
                                ],
                                'attributes' => [
                                    'type' => 'text',
                                    'placeholder' => 'Username',
                                    'aria-label' => 'Username',
                                    'aria-describedby' => 'basic-addon1',
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        );

        // Various buttons are supported as part of these navbar forms, too.
    },
    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <form method="POST" name="form" role="form" class="form-inline" id="form">' . PHP_EOL .
        '        <input name="search" type="search" placeholder="Search" aria-label="Search" ' .
        'class="form-control&#x20;mr-sm-2" value="">' . PHP_EOL .
        '        <button type="submit" name="submit" class="btn&#x20;btn-outline-success&#x20;my-2&#x20;my-sm-0" ' .
        'value="">Search</button>' . PHP_EOL .
        '    </form>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <a href="&#x23;" class="navbar-brand">Navbar</a>' . PHP_EOL .
        '    <form method="POST" name="form" role="form" class="form-inline" id="form">' . PHP_EOL .
        '        <input name="search" type="search" placeholder="Search" aria-label="Search" ' .
        'class="form-control&#x20;mr-sm-2" value="">' . PHP_EOL .
        '        <button type="submit" name="submit" class="btn&#x20;btn-outline-success&#x20;my-2&#x20;my-sm-0" ' .
        'value="">Search</button>' . PHP_EOL .
        '    </form>' . PHP_EOL .
        '</nav>' . PHP_EOL .
        '<br>' . PHP_EOL .
        '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <form method="POST" name="form" role="form" class="form-inline" id="form">' . PHP_EOL .
        '        <div class="input-group">' . PHP_EOL .
        '            <div class="input-group-prepend">' . PHP_EOL .
        '                <div id="basic-addon1" class="input-group-text">' . PHP_EOL .
        '                    @' . PHP_EOL .
        '                </div>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '            <input name="username" type="text" placeholder="Username" aria-label="Username" '.
        'aria-describedby="basic-addon1" class="form-control" value="">' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </form>' . PHP_EOL .
        '</nav>',
];
