<?php

// Documentation test config file for "Components / Modal / Examples / Modal components" part
return [
    'title' => 'Modal components',
    'url' => '%bootstrap-url%/components/modal/#modal-components',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->modal([
            'title' => 'Modal title',
            'Modal body text goes here.',
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
        ]);
    },
];
