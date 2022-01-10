<?php

// Documentation test config file for "Components / Modal / Examples / Remove animation" part
return [
    'title' => 'Remove animation',
    'url' => '%bootstrap-url%/components/modal/#remove-animation',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Launch demo modal',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModal',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal title',
                    'attributes' => ['id' => 'exampleModalLabel'],
                ],
                'Woohoo, you\'re reading this text in a modal!',
                'footer' => [
                    'button' => [
                        [
                            'options' => [
                                'label' => 'Close',
                                'variant' => 'secondary',
                            ],
                            'attributes' => [
                                'data-bs-dismiss' => 'modal',
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Save changes',
                                'variant' => 'primary',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'hidden' => true,
                'id' => 'exampleModal',
            ]
        );
    },
];
