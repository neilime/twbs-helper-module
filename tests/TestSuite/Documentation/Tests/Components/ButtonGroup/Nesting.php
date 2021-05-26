<?php

// Documentation test config file for "Components / Button group / Nesting" part
return [
    'title' => 'Nesting',
    'url' => '%bootstrap-url%/components/button-group/#nesting',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->buttonGroup(
            [
                ['type' => 'button', 'options' => ['label' => '1']],
                ['type' => 'button', 'options' => ['label' => '2']],
                [
                    'type' => 'button',
                    'options' => [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ],
                    'attributes' => ['id' => 'btnGroupDrop1'],
                ],
            ],
            [
                'variant' => 'primary',
                'attributes' => [
                    'role' => 'group',
                    'aria-label' => 'Button group with nested dropdown',
                ],
            ],
        );
    },
];
