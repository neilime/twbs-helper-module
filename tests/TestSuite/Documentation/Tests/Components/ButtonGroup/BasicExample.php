<?php

// Documentation test config file for "Components / Button group / Basic example" part
return [
    'title' => 'Basic example',
    'url' => '%bootstrap-url%/components/button-group/#basic-example',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->buttonGroup(
            [
                // Create button via specs and \Laminas\Form\Factory
                ['type' => 'button', 'options' =>  ['label' => 'Left']],
                // Button object
                new \Laminas\Form\Element\Button('middle', ['label' => 'Middle']),
                ['type' => 'button', 'options' =>  ['label' => 'Right']],
            ],
            [
                'variant' => 'primary',
                'attributes' => ['role' => 'group', 'aria-label' => 'Basic example'],
            ],
        );

        echo $view->buttonGroup(
            [
                [
                    'type' => 'button',
                    'options' =>  ['tag' => 'a', 'label' => 'Active link'],
                    'attributes' => [
                        'class' => 'active',
                        'aria-current' => 'page',
                        'href' => '#'
                    ],
                ],
                [
                    'type' => 'button',
                    'options' =>  ['tag' => 'a', 'label' => 'Link'],
                    'attributes' => ['href' => '#'],
                ],
                [
                    'type' => 'button',
                    'options' =>  ['tag' => 'a', 'label' => 'Link'],
                    'attributes' => ['href' => '#'],
                ],
            ],
            ['variant' => 'primary'],
        );
    },
];
