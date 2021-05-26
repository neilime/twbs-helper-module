<?php

// Documentation test config file for "Components / Button group / Vertical variation" part
return  [
    'title' => 'Vertical variation',
    'url' => '%bootstrap-url%/components/button-group/#vertical-variation',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->buttonGroup(
            [
                ['type' => 'button', 'options' => ['label' => 'Button']],
                ['type' => 'button', 'options' => ['label' => 'Button']],
                ['type' => 'button', 'options' => ['label' => 'Button']],
                ['type' => 'button', 'options' => ['label' => 'Button']],
                ['type' => 'button', 'options' => ['label' => 'Button']],
                ['type' => 'button', 'options' => ['label' => 'Button']],
            ],
            [
                'variant' => 'dark',
                'vertical' => true,
            ],
        ) . PHP_EOL;

        echo '<br/>' . PHP_EOL;

        echo $view->buttonGroup(
            [
                ['type' => 'button', 'options' => ['label' => 'Button']],
                ['type' => 'button', 'options' => ['label' => 'Button']],
                [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ],
                ],
                ['type' => 'button', 'options' => ['label' => 'Button']],
                ['type' => 'button', 'options' => ['label' => 'Button']],
                [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ],
                ],
                [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ],
                ],
                [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ],
                ],
            ],
            [
                'variant' => 'primary',
                'vertical' => true,
            ],
        ) . PHP_EOL;

        echo '<br/>' . PHP_EOL;

        echo $view->buttonGroup(
            [
                [
                    'name' => 'vbtn-radio',
                    'type' => 'radio',
                    'options' => [
                        'tag' => 'input',
                        'value_options' => [
                            [
                                'label' => 'Radio 1',
                                'value' => 'option1',
                                'attributes' => ['id' => 'vbtn-radio1'],
                            ],
                            [
                                'label' => 'Radio 2',
                                'value' => 'option2',
                                'attributes' => ['id' => 'vbtn-radio2'],
                            ],
                            [
                                'label' => 'Radio 3',
                                'value' => 'option3',
                                'attributes' => ['id' => 'vbtn-radio3'],
                            ],
                        ],
                    ],
                    'attributes' => ['value' => 'option1'],
                ],
            ],
            [
                'variant' => 'outline-danger',
                'vertical' => true,
                'attributes' => [
                    'role' => 'group', 'aria-label' => 'Vertical radio toggle button group',
                ],
            ],
        );
    },
];
