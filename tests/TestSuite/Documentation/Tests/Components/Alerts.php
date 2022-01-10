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
                    'title' => 'Icons',
                    'url' => '%bootstrap-url%/components/alerts/#icons',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->alert(
                            'An example alert with an icon',
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ' .
                                    'fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" ' .
                                    'viewBox="0 0 16 16" role="img" aria-label="Warning:">' . PHP_EOL .
                                    '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 ' .
                                    '1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 ' .
                                    '.954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 ' .
                                    '5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>' . PHP_EOL .
                                    '</svg>',
                                'variant' => 'primary',
                            ]
                        ) . PHP_EOL;

                        echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 ' .
                            '9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 ' .
                            '11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0' .
                            ' 0-.01-1.05z"/>
                            </symbol>
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 ' .
                            '4.705c-.07.34.029.533.304.533.194 ' .
                            '0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 ' .
                            '0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 ' .
                            '2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </symbol>
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 ' .
                            '1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 ' .
                            '3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 ' .
                            '1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </symbol>' . PHP_EOL .
                            '</svg>' . PHP_EOL;

                        echo $view->alert(
                            'An example alert with an icon',
                            [
                                'icon' => '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" ' .
                                    'aria-label="Info:"><use xlink:href="#info-fill"/></svg>',
                                'variant' => 'primary',
                            ],
                        ) . PHP_EOL;

                        echo $view->alert(
                            'An example success alert with an icon',
                            [
                                'icon' => '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" ' .
                                    'aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>',
                                'variant' => 'success',
                            ],
                        ) . PHP_EOL;

                        echo $view->alert(
                            'An example warning alert with an icon',
                            [
                                'icon' => '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" ' .
                                    'aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>',
                                'variant' => 'warning',
                            ],
                        ) . PHP_EOL;

                        echo $view->alert(
                            'An example danger alert with an icon',
                            [
                                'icon' => '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" ' .
                                    'aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>',
                                'variant' => 'danger',
                            ],
                        ) . PHP_EOL;
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
