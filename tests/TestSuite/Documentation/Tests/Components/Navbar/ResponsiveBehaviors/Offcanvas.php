<?php

// Documentation test config file for "Components / Navbar / Responsive behaviors / Offcanvas" part
return [
    'title' => 'Offcanvas',
    'url' => '%bootstrap-url%/components/navbar/#offcanvas',
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
                            'attributes' => ['id' => 'offcanvasNavbarDropdown'],
                        ],
                    ],
                ],
            ),
            [
                'container' => 'fluid',
                'expand' => false,
                'offcanvas' => [
                    'placement' => 'end',
                    'header' => [
                        'title' => [
                            'content' => 'Offcanvas',
                            'attributes' => [
                                'id' => 'offcanvasNavbarLabel',
                            ],
                        ],
                    ],
                ],
                'placement' => 'fixed-top',
                'brand' => 'Offcanvas navbar',
                'nav' => [
                    'ulClass' => 'flex-grow-1 pe-3',
                    'right_aligned' => true,
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
                'attributes' => ['id' => 'offcanvasNavbar'],
            ]
        );
    },
];
