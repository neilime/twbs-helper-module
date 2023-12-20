<?php

// Documentation test config file for "Components / Offcanvas / Examples" part
return [
    'title' => 'Examples',
    'url' => '%bootstrap-url%/components/offcanvas/#examples',
    'tests' => [
        [
            'title' => 'Offcanvas components',
            'url' => '%bootstrap-url%/components/offcanvas/#offcanvas-components',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->offcanvas(
                    'Content for the offcanvas goes here. ' .
                        'You can place just about any Bootstrap component or custom elements here.',
                    [
                        'header' => [
                            'title' => [
                                'content' => 'Offcanvas',
                                'attributes' => [
                                    'id' => 'offcanvasLabel',
                                ],
                            ],
                        ],
                        'id' => 'offcanvas',
                    ]
                );
            },
        ],
        [
            'title' => 'Live demo',
            'url' => '%bootstrap-url%/components/offcanvas/#live-demo',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->offcanvas(
                    '<div>' . PHP_EOL .
                        '    Some text as placeholder. In real life you can have the elements you have chosen. ' .
                        'Like, text, images, lists, etc.' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        $view->formButton()->renderSpec([
                            'options' => [
                                'label' => 'Dropdown button',
                                'dropdown' => [
                                    'items' => ['Action', 'Another action', 'Something else here'],
                                    'attributes' => ['class' => 'mt-3'],
                                ],
                            ],
                            'attributes' => ['id' => 'dropdownMenuButton'],
                        ]),
                    [
                        'triggers' => [
                            [
                                'options' => [
                                    'variant' => 'primary',
                                    'label' => 'Link with href',
                                    'tag' => 'a',
                                ],
                            ],
                            [
                                'options' => [
                                    'variant' => 'primary',
                                    'label' => 'Button with data-bs-target',
                                ],
                            ],
                        ],
                        'header' => [
                            'title' => [
                                'content' => 'Offcanvas',
                                'attributes' => [
                                    'id' => 'offcanvasExampleLabel',
                                ],
                            ],
                        ],
                        'id' => 'offcanvasExample',
                    ]
                );
            },
        ],
    ],
];
