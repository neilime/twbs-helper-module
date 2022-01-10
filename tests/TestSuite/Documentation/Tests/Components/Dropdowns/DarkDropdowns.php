<?php

// Documentation test config file for "Components / Dropdowns / Dark dropdowns" part
return [
    'title' => 'Dark dropdowns',
    'url' => '%bootstrap-url%/components/dropdowns/#dark-dropdowns',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Dropdown button',
                'dropdown' => [
                    'dark' => true,
                    'items' => [
                        'Action',
                        'Another action',
                        'Something else here',
                        '---',
                        'Separated link',
                    ],
                ],
            ],
            'attributes' => ['id' => 'dropdownMenuButton2'],
        ]);

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([

                [
                    'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                    'label' => 'Dropdown',
                    'dropdown' => [
                        'dark' => true,
                        'items' => [
                            'Action',
                            'Another action',
                            'Something else here',
                        ],
                        'attributes' => ['id' => 'navbarDarkDropdownMenuLink'],
                    ],
                ],
            ]),
            [
                'brand' => 'Navbar',
                'variant' => 'dark',
                'background' => 'dark',
                'container' => 'fluid',
                'attributes' => ['id' => 'navbarNavDarkDropdown'],
            ]
        );
    },
];
