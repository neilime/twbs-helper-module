<?php

// Documentation test config file for "Components / Navbar / Scrolling" part
return [
    'title' => 'Scrolling',
    'url' => '%bootstrap-url%/components/navbar/#scrolling',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(
                [
                    ['label' => 'Home', 'uri' => '#', 'active' => true],
                    ['label' => 'Link', 'uri' => '#'],
                    [
                        'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                        'label' => 'Link',
                        'dropdown' => [
                            'items' => [
                                'Action',
                                'Another action',
                                '---',
                                'Something else here',
                            ],
                            'attributes' => ['id' => 'navbarScrollingDropdown'],
                        ],
                    ],
                    [
                        'label' => 'Link',
                        'uri' => '#',
                        'visible' => false,
                    ],
                ],
            ),
            [
                'container' => 'fluid',
                'brand' => 'Navbar scroll',
                'nav' => [
                    'scroll' => true,
                    'ulClass' => 'me-auto my-2 my-lg-0',
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
                'attributes' => ['id' => 'navbarScroll'],
            ]
        );
    },
];
