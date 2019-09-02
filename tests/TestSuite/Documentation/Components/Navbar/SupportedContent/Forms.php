<?php

// Documentation test config file for "Components / Navbar / Supported content / Forms" part
return [
    'title' => 'Forms',
    'url' => '%bootstrap-url%/components/navbar/#forms',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        // As a link
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
                                'options' => [
                                    'form_group' => false,
                                ],
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
                                'attributes' => [
                                    'class' => 'my-2 my-sm-0',
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        );
    },
    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
        '    <form method="POST" name="form" role="form" class="form-inline" id="form">' . PHP_EOL .
        '        <input name="search" type="search" placeholder="Search" aria-label="Search" '.
        'class="form-control&#x20;mr-sm-2" value="">' . PHP_EOL .
        '        <button type="submit" name="submit" class="btn&#x20;btn-outline-success&#x20;my-2&#x20;my-sm-0" '.
        'value="">Search</button>' . PHP_EOL .
        '    </form>' . PHP_EOL .
        '</nav>',
];
