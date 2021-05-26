<?php

// Documentation test config file for "Components / Navbar / Supported content" part
return [
    'title' => 'Supported content',
    'url' => '%bootstrap-url%/components/navbar/#supported-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(
                [
                    ['label' => 'Home', 'uri' => '#', 'active' => true],
                    ['label' => 'Link', 'uri' => '#'],
                    [
                        'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                        'label' => 'Dropdown',
                        'dropdown' => [
                            'items' => [
                                'Action',
                                'Another action',
                                '---',
                                'Something else here',
                            ],
                            'attributes' => ['id' => 'navbarDropdown'],
                        ],
                    ],
                    [
                        'label' => 'Disabled',
                        'uri' => '#',
                        'visible' => false,
                    ],
                ],
            ),
            [
                'container' => 'fluid',
                'brand' => 'Navbar',
                'nav' => [
                    'ulClass' => 'mb-2 mb-lg-0 me-auto',
                ],
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
                                'type' => 'search',
                                'attributes' => [
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
                    'attributes' => ['class' => 'd-flex'],
                ],
                'attributes' => ['id' => 'navbarSupportedContent'],
            ]
        );
    },
    'tests' => [
        include __DIR__ . '/SupportedContent/Brand.php',
        include __DIR__ . '/SupportedContent/Nav.php',
        include __DIR__ . '/SupportedContent/Forms.php',
        include __DIR__ . '/SupportedContent/Text.php',
    ],
];
