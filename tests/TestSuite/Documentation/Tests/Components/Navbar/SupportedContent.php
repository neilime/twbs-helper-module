<?php

// Documentation test config file for "Components / Navbar / Supported content" part
return [
    'title' => 'Supported content',
    'url' => '%bootstrap-url%/components/navbar/#supported-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                ['label' => 'Home <span class="sr-only">(current)</span>', 'uri' => '#', 'active' => true],
                ['label' => 'Link', 'uri' => '#'],
                [
                    'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
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
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
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
                                'attributes' => [
                                    'class' => 'my-2 my-sm-0',
                                ],
                            ],
                        ],
                    ],
                    'attributes' => ['class' => 'my-2 my-lg-0'],
                ],
                'attributes' => ['id' => 'navbarSupportedContent'],
            ]
        );
    },
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'SupportedContent/Brand.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'SupportedContent/Nav.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'SupportedContent/Forms.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'SupportedContent/Text.php',
    ],
];
