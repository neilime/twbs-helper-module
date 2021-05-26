<?php

// Documentation test config file for "Components / Dropdowns / Dropdown options" part
return [
    'title' => 'Dropdown options',
    'url' => '%bootstrap-url%/components/dropdowns/#dropdown-options',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo '<div class="d-flex">' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Offset',
                'dropdown' => [
                    'attributes' => ['class' => 'me-1'],
                    'offset' => '10,20',
                    'items' => ['Action', 'Another action', 'Something else here'],
                ],
            ],
            'attributes' => ['id' => 'dropdownMenuOffset'],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Reference',
                'dropdown' => [
                    'split' => [
                        'attributes' => ['data-bs-reference' => 'parent', 'id' => 'dropdownMenuReference'],
                    ],
                    'items' => ['Action', 'Another action', 'Something else here'],
                ],
            ],
        ]);

        echo PHP_EOL . '</div>';
    },
    'tests' => [
        [
            'title' => 'Auto close behavior',
            'url' => '%bootstrap-url%/components/dropdowns/#auto-close-behavior',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Default dropdown',
                        'dropdown' => [
                            'auto_close' => true,
                            'items' => ['Menu item', 'Menu item', 'Menu item'],
                        ],
                    ],
                    'attributes' => ['id' => 'defaultDropdown'],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Clickable outside',
                        'dropdown' => [
                            'auto_close' => 'inside',
                            'items' => ['Menu item', 'Menu item', 'Menu item'],
                        ],
                    ],
                    'attributes' => ['id' => 'dropdownMenuClickableOutside'],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Clickable inside',
                        'dropdown' => [
                            'auto_close' => 'outside',
                            'items' => ['Menu item', 'Menu item', 'Menu item'],
                        ],
                    ],
                    'attributes' => ['id' => 'dropdownMenuClickableInside'],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'name' => 'dropdown',
                    'options' => [
                        'label' => 'Manual close',
                        'dropdown' => [
                            'auto_close' => false,
                            'items' => ['Menu item', 'Menu item', 'Menu item'],
                        ],
                    ],
                    'attributes' => ['id' => 'dropdownMenuClickable'],
                ]);
            }
        ],
    ],
];
