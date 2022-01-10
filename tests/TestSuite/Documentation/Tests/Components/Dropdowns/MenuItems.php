<?php

// Documentation test config file for "Components / Dropdowns / Menu items" part
return [
    'title' => 'Menu items',
    'url' => '%bootstrap-url%/components/dropdowns/#menu-items',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Dropdown',
                'dropdown' => [
                    'type' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_BUTTON,
                    'items' => ['Action', 'Another action', 'Something else here'],
                ],
            ],
            'attributes' => ['id' => 'dropdownMenu2'],
        ]);

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Non-interactive dropdown items
        echo $view->dropdown()->renderMenu([
            'Dropdown item text' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_TEXT,
            'Action',
            'Another action',
            'Something else here'
        ]);
    },
    'tests' => [
        [
            'title' => 'Active',
            'url' => '%bootstrap-url%/components/dropdowns/#active',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->dropdown()->renderMenu([
                    'Regular link',
                    'Active link' => ['active' => true],
                    'Another link'
                ]);
            },
        ],
        [
            'title' => 'Disabled',
            'url' => '%bootstrap-url%/components/dropdowns/#disabled',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->dropdown()->renderMenu([
                    'Regular link',
                    'Disabled link' => ['disabled' => true],
                    'Another link'
                ]);
            },
        ],
    ],
];
