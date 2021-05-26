<?php

// Documentation test config file for "Components / Navs and tabs / Using dropdowns" part
return [
    'title' => 'Using dropdowns',
    'url' => '%bootstrap-url%/components/navs-tabs/#using-dropdowns',
    'tests' => [
        [
            'title' => 'Tabs with dropdowns',
            'url' => '%bootstrap-url%/components/navs-tabs/#tabs-with-dropdowns',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->navigation()->menu()->renderMenu(
                    new \Laminas\Navigation\Navigation([
                        ['label' => 'Active', 'uri' => '#', 'active' => true],
                        [
                            'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                            'label' => 'Dropdown',
                            'dropdown' => [
                                'Action',
                                'Another action',
                                'Something else here',
                                '---',
                                'Separated link',
                            ],
                        ],
                        ['label' => 'Link', 'uri' => '#'],
                        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                    ]),
                    ['tabs' => true, 'page' => true]
                );
            },
        ],
        [
            'title' => 'Pills with dropdowns',
            'url' => '%bootstrap-url%/components/navs-tabs/#pills-with-dropdowns',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->navigation()->menu()->renderMenu(
                    new \Laminas\Navigation\Navigation([
                        ['label' => 'Active', 'uri' => '#', 'active' => true],
                        [
                            'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                            'label' => 'Dropdown',
                            'dropdown' => [
                                'Action',
                                'Another action',
                                'Something else here',
                                '---',
                                'Separated link',
                            ],
                        ],
                        ['label' => 'Link', 'uri' => '#'],
                        ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                    ]),
                    ['pills' => true, 'page' => true]
                );
            },
        ],
    ],
];
