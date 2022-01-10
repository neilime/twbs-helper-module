<?php

// Documentation test config file for "Components / Modal / Examples / Static backdrop" part
return [
    'title' => 'Static backdrop',
    'url' => '%bootstrap-url%/components/modal/#static-backdrop',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Launch static backdrop modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#staticBackdrop',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'Modal title',
                    'attributes' => ['id' => 'staticBackdropLabel'],
                ],
                'I will not close if you click outside me. Don\'t even try to press escape key.',
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
                                'label' => 'Understood',
                                'variant' => 'primary',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'fade' => true,
                'hidden' => true,
                'backdrop' => true,
                'id' => 'staticBackdrop',
            ]
        );
    },
];
