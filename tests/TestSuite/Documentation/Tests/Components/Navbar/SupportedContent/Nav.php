<?php

// Documentation test config file for "Components / Navbar / Supported content / Nav" part
return [
    'title' => 'Nav',
    'url' => '%bootstrap-url%/components/navbar/#nav',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'brand' => 'Navbar',
                'attributes' => ['id' => 'navbarNav'],
                'container' => 'fluid',
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Avoid the list-based approach
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'brand' => 'Navbar',
                'attributes' => ['id' => 'navbarNavAltMarkup'],
                'nav' => ['list' => false],
                'container' => 'fluid',
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
                [
                    'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                    'label' => 'Dropdown link',
                    'dropdown' => [
                        'items' => [
                            'Action',
                            'Another action',
                            'Something else here',
                        ],
                        'attributes' => ['id' => 'navbarDropdownMenuLink'],
                    ],
                ],
            ]),
            [
                'brand' => 'Navbar',
                'attributes' => ['id' => 'navbarNavDropdown'],
                'container' => 'fluid',
            ]
        );
    },
];
