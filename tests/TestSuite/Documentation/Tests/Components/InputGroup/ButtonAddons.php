<?php

// Documentation test config file for "Components / Input group / Button addons" part
return [
    'title' => 'Button addons',
    'url' => '%bootstrap-url%/components/input-group/#button-addons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->formRow($factory->create([
            'name' => 'button-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Button',
                            'variant' => 'outline-secondary',
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => '',
                'aria-label' => 'Example text with button addon',
                'aria-describedby' => 'button-addon1',
            ],
        ])) . PHP_EOL;

        echo $view->formRow($factory->create([
            'name' => 'button-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_append' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Button',
                            'variant' => 'outline-secondary',
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => "Recipient's username",
                'aria-label' => "Recipient's username",
                'aria-describedby' => 'button-addon2',
            ],
        ])) . PHP_EOL;

        echo $view->formRow($factory->create([
            'name' => 'buttons-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                    [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => '',
                'aria-label' => 'Example text with two button addons',
                'aria-describedby' => 'button-addon3',
            ],
        ])) . PHP_EOL;

        echo $view->formRow($factory->create([
            'name' => 'button-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_append' => [
                    [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                    [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => "Recipient's username",
                'aria-label' => "Recipient's username with two button addons",
                'aria-describedby' => 'button-addon4',
            ],
        ]));
    },
];
