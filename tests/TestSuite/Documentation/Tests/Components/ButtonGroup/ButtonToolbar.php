<?php

// Documentation test config file for "Components / Button group / Button toolbar" part
return [
    'title' => 'Button toolbar',
    'url' => '%bootstrap-url%/components/button-group/#button-toolbar',
    'tests' => [
        [
            'title' => 'Combine sets of button groups',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->buttonToolbar([
                    [
                        'buttons' => [
                            ['type' => 'button', 'options' => ['label' => '1']],
                            ['type' => 'button', 'options' => ['label' => '2']],
                            ['type' => 'button', 'options' => ['label' => '3']],
                            ['type' => 'button', 'options' => ['label' => '4']],
                        ],
                        'options' => [
                            'variant' => 'primary',
                            'attributes' => [
                                'role' => 'group',
                                'aria-label' => 'First group',
                                'class' => 'me-2',
                            ],
                        ],
                    ],
                    [
                        'buttons' => [
                            ['type' => 'button', 'options' => ['label' => '5']],
                            ['type' => 'button', 'options' => ['label' => '6']],
                            ['type' => 'button', 'options' => ['label' => '7']],
                        ],
                        'options' => [
                            'attributes' => [
                                'role' => 'group',
                                'aria-label' => 'Second group',
                                'class' => 'me-2',
                            ],
                        ],
                    ],
                    [
                        'buttons' => [
                            ['type' => 'button', 'options' => ['label' => '8']],
                        ],
                        'options' => [
                            'variant' => 'info',
                            'attributes' => [
                                'role' => 'group',
                                'aria-label' => 'Third group',
                                'class' => 'me-2',
                            ],
                        ],
                    ],
                ], ['attributes' => ['role' => 'toolbar', 'aria-label' => 'Toolbar with button groups']]);
            },
        ],
        [
            'title' => 'Mix input groups with button groups',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                $toolbarItems = [
                    [
                        'buttons' => [
                            ['type' => 'button', 'options' => ['label' => '1']],
                            ['type' => 'button', 'options' => ['label' => '2']],
                            ['type' => 'button', 'options' => ['label' => '3']],
                            ['type' => 'button', 'options' => ['label' => '4']],
                        ],
                        'options' => [
                            'variant' => 'outline-secondary',
                            'attributes' => [
                                'role' => 'group',
                                'aria-label' => 'First group',
                                'class' => 'me-2',
                            ],
                        ],
                    ],
                    [
                        'type' => 'text',
                        'name' => 'input-group-example',
                        'options' => ['add_on_prepend' => '@'],
                        'attributes' => [
                            'placeholder' => 'Input group example',
                            'aria-label' => 'Input group example',
                            'aria-describedby' => 'btnGroupAddon',
                        ],
                    ],
                ];

                echo $view->buttonToolbar(
                    $toolbarItems,
                    [
                        'attributes' => [
                            'role' => 'toolbar',
                            'aria-label' => 'Toolbar with button groups',
                            'class' => 'mb-3',
                        ],
                    ]
                ) . PHP_EOL;

                // Justified content
                echo $view->buttonToolbar(
                    $toolbarItems,
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
];
