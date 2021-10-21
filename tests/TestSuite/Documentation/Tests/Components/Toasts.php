<?php

// Documentation test config file for "Components / Toasts" part
return [
    'title' => 'Toasts',
    'url' => '%bootstrap-url%/components/toasts/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/components/toasts/#examples',
            'tests' => [
                [
                    'title' => 'Basic',
                    'url' => '%bootstrap-url%/components/toasts/#basic',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->toast([
                            'header' => [
                                'image' => [
                                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);
                    },

                ],
                [
                    'title' => 'Translucent',
                    'url' => '%bootstrap-url%/components/toasts/#translucent',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                        echo '<div class="bg-dark">';

                        echo $view->toast([
                            'header' => [
                                'image' => [
                                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);

                        echo '</div>';
                    },

                ],
                [
                    'title' => 'Stacking',
                    'url' => '%bootstrap-url%/components/toasts/#stacking',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                        echo $view->toast([
                            'header' => [
                                'image' => [
                                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => 'just now',
                            ],
                            'body' => 'See? Just like this.',
                        ]) . PHP_EOL;

                        echo $view->toast([
                            'header' => [
                                'image' => [
                                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '2 seconds ago',
                            ],
                            'body' => 'Heads up, toasts will stack automatically',
                        ]);
                    },
                ],
                [
                    'title' => 'Placement',
                    'url' => '%bootstrap-url%/components/toasts/#placement',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                        echo '<div class="bg-dark" style="position:relative;min-height:200px;">';

                        echo $view->toast([
                            'placement' => 'top-right',
                            'header' => [
                                'image' => [
                                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);

                        echo '</div>';

                        echo PHP_EOL . '<br/><br/>' . PHP_EOL;

                        echo '<div class="bg-dark" style="position:relative;min-height:200px;">';

                        echo $view->toast([
                            'placement' => 'top-center',
                            'header' => [
                                'image' => [
                                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);

                        echo '</div>';
                    },
                ],
                [
                    'title' => 'Accessibility',
                    'url' => '%bootstrap-url%/components/toasts/#accessibility',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->toast([
                            'autohide' => false,
                            'header' => [
                                'image' => [
                                    '/twbs-helper-module/img/docs/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);
                    },
                ],
            ],
        ],
    ],
];
