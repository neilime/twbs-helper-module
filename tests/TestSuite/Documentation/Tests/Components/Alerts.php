<?php

// Documentation test config file for "Components / Alerts" part
return [
    'title' => 'Alerts',
    'url' => '%bootstrap-url%/components/alerts/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/alerts/#examples',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach (
                    [
                        'primary', 'secondary', 'success', 'danger',
                        'warning', 'info', 'light', 'dark',
                    ] as $variant
                ) {
                    echo $view->alert(
                        'A simple ' . $variant . ' alert—check it out!',
                        $variant
                    ) . PHP_EOL;
                }
            },
            'tests' => [
                [
                    'title' => 'Link color',
                    'url' => '%bootstrap-url%/components/alerts/#link-color',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        foreach (
                            [
                                'primary', 'secondary', 'success', 'danger',
                                'warning', 'info', 'light', 'dark',
                            ] as $variant
                        ) {
                            echo $view->alert(
                                'A simple ' . $variant . ' alert with ' .
                                    '<a href="#" class="alert-link">an example link</a>. ' .
                                    'Give it a click if you like.',
                                $variant
                            ) . PHP_EOL;
                        }
                    },
                ],
                [
                    'title' => 'Additional content',
                    'url' => '%bootstrap-url%/components/alerts/#additional-content',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        // Success
                        echo $view->alert(
                            '<p>Aww yeah, you successfully read this important alert message. ' .
                                'This example text is going to run a bit longer so that you can see ' .
                                'how spacing within an alert works with this kind of content.</p>' . PHP_EOL .
                                '<hr/>' . PHP_EOL .
                                '<p class="mb-0">' .
                                'Whenever you need to, be sure to use margin utilities to keep things nice and tidy.' .
                                '</p>',
                            [
                                'heading' => 'Well done!',
                                'variant' => 'success',
                            ]
                        );
                    },
                ],
                [
                    'title' => 'Dismissing',
                    'url' => '%bootstrap-url%/components/alerts/#dismissing',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->alert(
                            '<strong>Holy guacamole!</strong> You should check in on some of those fields below.',
                            [
                                'variant' => 'warning',
                                'dismissible' => true,
                            ]
                        );
                    },
                ],
            ],
        ],
    ],
];
