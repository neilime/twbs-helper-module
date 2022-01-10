<?php

// Documentation test config file for "Components / Toasts / Placement" part
return [
    'title' => 'Placement',
    'url' => '%bootstrap-url%/components/toasts/#placement',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo '<div aria-atomic="true" aria-live="polite" class="bg-dark position-relative">' . PHP_EOL;
        foreach (
            [
                'top-left',
                'top-center',
                'top-right',
                'middle-left',
                'middle-center',
                'middle-right',
                'bottom-left',
                'bottom-center',
                'bottom-right',
            ] as $placement
        ) {
            echo $view->toastStack(
                [
                    [
                        'fade' => true,
                        'show' => true,
                        'close' => false,
                        'header' => [
                            'image' => [
                                '/twbs-helper-module/img/docs/rounded-blue.svg',
                                ['alt' => '...', 'class' => 'rounded me-2'],
                            ],
                            'title' => 'Bootstrap',
                            'subtitle' => '11 mins ago',
                        ],
                        'body' => 'Hello, world! This is a toast message.',
                    ],
                ],
                [
                    'id' => 'toastPlacement',
                    'placement' => $placement,
                ]
            ) . PHP_EOL;
        }

        echo '</div>';

        // For systems that generate more notifications, consider using a wrapping element so they can easily stack.

        echo '<div aria-atomic="true" aria-live="polite" class="position-relative">' . PHP_EOL;

        echo $view->toastStack(
            [
                [
                    'fade' => true,
                    'show' => true,
                    'header' => [
                        'image' => [
                            '/twbs-helper-module/img/docs/rounded-blue.svg',
                            ['alt' => '...', 'class' => 'rounded me-2'],
                        ],
                        'title' => 'Bootstrap',
                        'subtitle' => 'just now',
                    ],
                    'body' => 'See? Just like this.',
                ],
                [
                    'fade' => true,
                    'show' => true,
                    'header' => [
                        'image' => [
                            '/twbs-helper-module/img/docs/rounded-blue.svg',
                            ['alt' => '...', 'class' => 'rounded me-2'],
                        ],
                        'title' => 'Bootstrap',
                        'subtitle' => '2 seconds ago',
                    ],
                    'body' => 'Heads up, toasts will stack automatically',
                ],
            ],
            [
                'placement' => 'top-right',
                'class' => 'position-absolute',
            ]
        );

        echo '</div>';

        // You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.

        echo '<div aria-live="polite" aria-atomic="true" ' .
            'class="d-flex justify-content-center align-items-center w-100">' . PHP_EOL;

        echo $view->toast(
            [
                'fade' => true,
                'show' => true,
                'header' => [
                    'image' => [
                        '/twbs-helper-module/img/docs/rounded-blue.svg',
                        ['alt' => '...', 'class' => 'rounded me-2'],
                    ],
                    'title' => 'Bootstrap',
                    'subtitle' => '11 mins ago',
                ],
                'body' => 'Hello, world! This is a toast message.',
            ]
        ) . PHP_EOL;

        echo '</div>';
    },
];
