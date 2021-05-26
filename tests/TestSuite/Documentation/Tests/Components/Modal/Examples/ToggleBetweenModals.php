<?php

// Documentation test config file for "Components / Modal / Examples / Toggle between modals" part
return [
    'title' => 'Toggle between modals',
    'url' => '%bootstrap-url%/components/modal/#toggle-between-modals',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Open first modal',
                'tag' => 'a',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'href' => '#exampleModalToggle',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal 1',
                    'attributes' => ['id' => 'exampleModalToggleLabel'],
                ],
                'Show a second modal and hide this one with the button below.',
                'footer' => [
                    'button' => [
                        [
                            'options' => [
                                'label' => 'Open second modal',
                                'variant' => 'primary',
                            ],
                            'attributes' => [
                                'data-bs-toggle' => 'modal',
                                'data-bs-target' => '#exampleModalToggle2',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'fade' => true,
                'hidden' => true,
                'centered' => true,
                'id' => 'exampleModalToggle',
            ]
        ) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal 2',
                    'attributes' => ['id' => 'exampleModalToggleLabel2'],
                ],
                'Hide this modal and show the first with the button below.',
                'footer' => [
                    'button' => [
                        [
                            'options' => [
                                'label' => 'Back to first',
                                'variant' => 'primary',
                            ],
                            'attributes' => [
                                'data-bs-toggle' => 'modal',
                                'data-bs-target' => '#exampleModalToggle',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'fade' => true,
                'hidden' => true,
                'centered' => true,
                'id' => 'exampleModalToggle2',
            ]
        );
    },
];
