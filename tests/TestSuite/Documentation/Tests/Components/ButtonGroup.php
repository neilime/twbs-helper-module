<?php

// Documentation test config file for "Components / Button group" part
return [
    'title' => 'Button group',
    'url' => '%bootstrap-url%/components/button-group/',
    'tests' => [
        [
            'title' => 'Basic example',
            'url' => '%bootstrap-url%/components/button-group/#basic-example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->buttonGroup([
                    // Create button via \Laminas\Form\Factory
                    ['type' => 'button', 'name' => 'left', 'options' =>  ['label' => 'Left']],
                    // Button object
                    new \Laminas\Form\Element\Button('middle', ['label' => 'Middle']),
                    ['type' => 'button', 'name' => 'right', 'options' =>  ['label' => 'Right']],
                ], ['attributes' => ['role' => 'group', 'aria-label' => 'Basic example']]);
            },
        ],
        [
            'title' => 'Button toolbar',
            'url' => '%bootstrap-url%/components/button-group/#button-toolbar',
            'tests' => [
                [
                    'title' => 'Combine sets of button groups',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->buttonToolbar([
                            [
                                'buttons' => [
                                    new \Laminas\Form\Element\Button('1', ['label' => '1']),
                                    new \Laminas\Form\Element\Button('2', ['label' => '2']),
                                    new \Laminas\Form\Element\Button('3', ['label' => '3']),
                                    new \Laminas\Form\Element\Button('4', ['label' => '4']),
                                ],
                                'options' => [
                                    'attributes' => [
                                        'role' => 'group',
                                        'aria-label' => 'First group',
                                        'class' => 'mr-2',
                                    ],
                                ],
                            ],
                            [
                                'buttons' => [
                                    new \Laminas\Form\Element\Button('5', ['label' => '5']),
                                    new \Laminas\Form\Element\Button('6', ['label' => '6']),
                                    new \Laminas\Form\Element\Button('7', ['label' => '7']),
                                ],
                                'options' => [
                                    'attributes' => [
                                        'role' => 'group',
                                        'aria-label' =>
                                        'Second group',
                                        'class' => 'mr-2',
                                    ],
                                ],
                            ],
                            [
                                'buttons' => [
                                    new \Laminas\Form\Element\Button('8', ['label' => '8']),
                                ],
                                'options' => [
                                    'attributes' => [
                                        'role' => 'group',
                                        'aria-label' => 'Third group',
                                        'class' => 'mr-2',
                                    ],
                                ],
                            ],
                        ], ['attributes' => ['role' => 'toolbar', 'aria-label' => 'Toolbar with button groups']]);
                    },
                ],
                [
                    'title' => 'Mix input groups with button groups',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        $aToolbarItems = [
                            [
                                'buttons' => [
                                    new \Laminas\Form\Element\Button('1', ['label' => '1']),
                                    new \Laminas\Form\Element\Button('2', ['label' => '2']),
                                    new \Laminas\Form\Element\Button('3', ['label' => '3']),
                                    new \Laminas\Form\Element\Button('4', ['label' => '4']),
                                ],
                                'options' => [
                                    'attributes' => [
                                        'role' => 'group',
                                        'aria-label' => 'First group',
                                        'class' => 'mr-2',
                                    ],
                                ],
                            ],
                            [
                                'type' => \Laminas\Form\Element\Text::class,
                                'name' => 'input-group-example',
                                'options' => ['add_on_prepend' => '@'],
                                'attributes' => [
                                    'placeholder' => 'Input group example',
                                    'aria-label' => 'Input group example',
                                    'aria-describedby' => 'btnGroupAddon',
                                ],
                            ],
                        ];

                        echo $oView->buttonToolbar(
                            $aToolbarItems,
                            [
                                'attributes' => [
                                    'role' => 'toolbar',
                                    'aria-label' =>
                                    'Toolbar with button groups',
                                    'class' => 'mb-3',
                                ],
                            ]
                        ) . PHP_EOL;

                        // Justified content
                        echo $oView->buttonToolbar(
                            $aToolbarItems,
                            [
                                'attributes' => [
                                    'role' => 'toolbar',
                                    'aria-label' =>
                                    'Toolbar with button groups',
                                    'class' => 'justify-content-between',
                                ],
                            ]
                        );
                    },
                ],

            ],
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/components/button-group/#sizing',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (['lg', null, 'sm'] as $sSize) {
                    echo $oView->buttonGroup([
                        new \Laminas\Form\Element\Button('left', ['label' => 'Left']),
                        new \Laminas\Form\Element\Button('middle', ['label' => 'Middle']),
                        new \Laminas\Form\Element\Button('right', ['label' => 'Right']),
                    ], ['size' => $sSize, 'attributes' => ['role' => 'group', 'aria-label' => '...']]) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Nesting',
            'url' => '%bootstrap-url%/components/button-group/#nesting',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->buttonGroup([
                    ['type' => \Laminas\Form\Element\Button::class, 'name' => '1', 'options' => ['label' => '1']],
                    ['type' => \Laminas\Form\Element\Button::class, 'name' => '2', 'options' => ['label' => '2']],
                    [
                        'type' => \Laminas\Form\Element\Button::class,
                        'name' => 'dropdown',
                        'options' => [
                            'label' => 'Dropdown',
                            'dropdown' => ['Dropdown link', 'Dropdown link'],
                        ],
                        'attributes' => ['id' => 'btnGroupDrop1'],
                    ],
                ], ['attributes' => ['role' => 'group', 'aria-label' => 'Button group with nested dropdown']]);
            },
        ],
        [
            'title' => 'Vertical variation',
            'url' => '%bootstrap-url%/components/button-group/#vertical-variation',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->buttonGroup([
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                ], ['vertical' => true]) . PHP_EOL;

                echo $oView->buttonGroup([
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('dropdown', [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ]),
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('button', ['label' => 'Button']),
                    new \Laminas\Form\Element\Button('dropdown', [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ]),
                    new \Laminas\Form\Element\Button('dropdown', [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ]),
                    new \Laminas\Form\Element\Button('dropdown', [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ]),
                ], ['vertical' => true]);
            },
        ],
    ],
];
