<?php

// Documentation test config file for "Components / Input group / Buttons with dropdowns" part
return [
    'title' => 'Buttons with dropdowns',
    'url' => '%bootstrap-url%/components/input-group/#buttons-with-dropdowns',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->formRow($factory->create([
            'name' => 'dropdown-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Dropdown',
                            'variant' => 'outline-secondary',
                            'dropdown' => [
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
            'attributes' => [
                'aria-label' => 'Text input with dropdown button',
            ],
        ])) . PHP_EOL;

        echo $view->formRow($factory->create([
            'name' => 'dropdown-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_append' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Dropdown',
                            'variant' => 'outline-secondary',
                            'dropdown' => [
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
            'attributes' => [
                'aria-label' => 'Text input with dropdown button',
            ],
        ]));
    },
];
