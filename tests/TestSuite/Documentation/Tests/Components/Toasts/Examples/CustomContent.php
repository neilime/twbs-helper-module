<?php

// Documentation test config file for "Components / Toasts / Examples / Custom content" part
return [
    'title' => 'Custom content',
    'url' => '%bootstrap-url%/components/toasts/#custom-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->toast([
            'fade' => true,
            'show' => true,
            'body' => 'Hello, world! This is a toast message.',
        ]) . PHP_EOL;

        echo $view->toast([
            'fade' => true,
            'show' => true,
            'close' => false,
            'body' => [
                'content' => 'Hello, world! This is a toast message.',
                'buttons' => [
                    [
                        'options' => [
                            'variant' => 'primary',
                            'size' => 'sm',
                            'label' => 'Take action',
                        ],
                    ],
                    [
                        'options' => [
                            'size' => 'sm',
                            'label' => 'Close',
                        ],
                        'attributes' => [
                            'data-bs-dismiss' => 'toast',
                        ],
                    ],
                ],
            ],
        ]);
    },
];
