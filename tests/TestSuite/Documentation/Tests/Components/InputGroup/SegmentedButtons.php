<?php

// Documentation test config file for "Components / Input group / Segmented buttons" part
return [
    'title' => 'Segmented buttons',
    'url' => '%bootstrap-url%/components/input-group/#segmented-buttons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->formRow($factory->create([
            'name' => 'segmented-dropdown-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Action',
                            'variant' => 'outline-secondary',
                            'dropdown' => [
                                'split' => 'Toggle Dropdown',
                                'items' => [
                                    'Action',
                                    'Another action',
                                    'Something else here',
                                    '---',
                                    'Separated link',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'aria-label' => 'Text input with segmented dropdown button',
            ],
        ])) . PHP_EOL;

        echo $view->formRow($factory->create([
            'name' => 'segmented-dropdown-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_append' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Action',
                            'variant' => 'outline-secondary',
                            'dropdown' => [
                                'split' => 'Toggle Dropdown',
                                'items' => [
                                    'Action',
                                    'Another action',
                                    'Something else here',
                                    '---',
                                    'Separated link',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'aria-label' => 'Text input with segmented dropdown button',
            ],
        ]));
    },
];
