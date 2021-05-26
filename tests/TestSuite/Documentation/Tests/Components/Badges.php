<?php

// Documentation test config file for "Components / Badges" part
return [
    'title' => 'Badges',
    'url' => '%bootstrap-url%/components/badge/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/components/badge/#examples',
            'tests' => [
                [
                    'title' => 'Headings',
                    'url' => '%bootstrap-url%/components/badge/#headings',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        // H1
                        echo '<h1>Example heading ' . $view->badge('New') . '</h1>' . PHP_EOL;
                        // H2
                        echo '<h2>Example heading ' . $view->badge('New') . '</h2>' . PHP_EOL;
                        // H3
                        echo '<h3>Example heading ' . $view->badge('New') . '</h3>' . PHP_EOL;
                        // H4
                        echo '<h4>Example heading ' . $view->badge('New') . '</h4>' . PHP_EOL;
                        // H5
                        echo '<h5>Example heading ' . $view->badge('New') . '</h5>' . PHP_EOL;
                        // H6
                        echo '<h6>Example heading ' . $view->badge('New') . '</h6>';
                    }
                ],
                [
                    'title' => 'Buttons',
                    'url' => '%bootstrap-url%/components/badge/#buttons',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->formButton()->renderSpec([
                            'options' => [
                                'label' => 'Notifications',
                                'badge' => ['4', 'secondary'],
                                'variant' => 'primary',
                            ],
                        ]);
                    }
                ],
                [
                    'title' => 'Positioned',
                    'url' => '%bootstrap-url%/components/badge/#positioned',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->formButton()->renderSpec([
                            'options' => [
                                'label' => 'Inbox',
                                'badge' => [
                                    '99+',
                                    [
                                        'variant' => 'danger',
                                        'positioned' => true,
                                        'type' => 'pill',
                                        'hidden_content' => 'unread messages',
                                    ]
                                ],
                                'variant' => 'primary',
                            ],
                        ]);

                        echo PHP_EOL . '<br />' . PHP_EOL;

                        echo $view->formButton()->renderSpec([
                            'options' => [
                                'label' => 'Profile',
                                'badge' => [
                                    '',
                                    [
                                        'variant' => 'danger',
                                        'positioned' => true,
                                        'type' => 'pill',
                                        'hidden_content' => 'New alerts',
                                    ]
                                ],
                                'variant' => 'primary',
                            ],
                        ]);
                    }
                ],
                [
                    'title' => 'Background colors',
                    'url' => '%bootstrap-url%/components/badge/#background-colors',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->badge('Primary', 'primary') . PHP_EOL;
                        echo $view->badge('Secondary', 'secondary') . PHP_EOL;
                        echo $view->badge('Success', 'success') . PHP_EOL;
                        echo $view->badge('Danger', 'danger') . PHP_EOL;
                        echo $view->badge('Warning', ['variant' => 'warning', 'text_variant' => 'dark']) . PHP_EOL;
                        echo $view->badge('Info', ['variant' => 'info', 'text_variant' => 'dark']) . PHP_EOL;
                        echo $view->badge('Light', ['variant' => 'light', 'text_variant' => 'dark']) . PHP_EOL;
                        echo $view->badge('Dark', 'dark');
                    },
                ],
                [
                    'title' => 'Pill badges',
                    'url' => '%bootstrap-url%/components/badge/#pill-badges',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->badge('Primary', ['variant' => 'primary', 'type' => 'pill']) . PHP_EOL;
                        echo $view->badge('Secondary', ['variant' => 'secondary', 'type' => 'pill']) . PHP_EOL;
                        echo $view->badge('Success', ['variant' => 'success', 'type' => 'pill']) . PHP_EOL;
                        echo $view->badge('Danger', ['variant' => 'danger', 'type' => 'pill']) . PHP_EOL;
                        echo $view->badge(
                            'Warning',
                            ['variant' => 'warning', 'type' => 'pill', 'text_variant' => 'dark']
                        ) . PHP_EOL;
                        echo $view->badge(
                            'Info',
                            ['variant' => 'info', 'type' => 'pill', 'text_variant' => 'dark']
                        ) . PHP_EOL;
                        echo $view->badge(
                            'Light',
                            ['variant' => 'light', 'type' => 'pill', 'text_variant' => 'dark']
                        ) . PHP_EOL;
                        echo $view->badge('Dark', ['variant' => 'dark', 'type' => 'pill']);
                    },
                ],
            ],
        ],
    ],
];
