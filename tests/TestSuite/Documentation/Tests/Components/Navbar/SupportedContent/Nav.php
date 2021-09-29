<?php

// Documentation test config file for "Components / Navbar / Supported content / Nav" part
return [
    'title' => 'Nav',
    'url' => '%bootstrap-url%/components/navbar/#nav',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home <span class="sr-only">(current)</span>',
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
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Avoid the list-based approach
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home <span class="sr-only">(current)</span>',
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
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home <span class="sr-only">(current)</span>',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
                [
                    'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
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
            ]
        );
    },
];
