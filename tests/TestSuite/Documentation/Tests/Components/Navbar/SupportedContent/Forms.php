<?php

// Documentation test config file for "Components / Navbar / Supported content / Forms" part
return [
    'title' => 'Forms',
    'url' => '%bootstrap-url%/components/navbar/#forms',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'container' => 'fluid',
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
                                    'class' => 'me-2',
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
                            ],
                        ],
                    ],
                    'attributes' => [
                        'class' => 'd-flex',
                    ],
                ],
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'container' => 'fluid',
                'expand' => false,
                'toggler' => false,
                'collapse' => false,
                'brand' => 'Navbar',
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
                                'attributes' => [
                                    'type' => 'search',
                                    'placeholder' => 'Search',
                                    'aria-label' => 'Search',
                                    'class' => 'me-2',
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
                            ],
                        ],
                    ],
                    'attributes' => [
                        'class' => 'd-flex',
                    ],
                ],
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Input groups work, too:
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'expand' => false,
                'toggler' => false,
                'collapse' => false,
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
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
                    'attributes' => [
                        'class' => 'container-fluid',
                    ],
                ],
            ]
        );

        // Various buttons are supported as part of these navbar forms, too.
        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Input groups work, too:
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'expand' => false,
                'toggler' => false,
                'collapse' => false,
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
                                'type' => 'button',
                                'name' => 'main_button',
                                'options' => [
                                    'label' => 'Main button',
                                    'variant' => 'outline-success',
                                ],
                                'attributes' => [
                                    'class' => 'me-2',
                                ]
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'button',
                                'name' => 'smaller_button',
                                'options' => [
                                    'label' => 'Smaller button',
                                    'variant' => 'outline-secondary',
                                    'size' => 'sm',
                                ],
                            ],
                        ],
                    ],
                    'attributes' => [
                        'class' => 'container-fluid justify-content-start',
                    ],
                ],
            ]
        );
    },
];
