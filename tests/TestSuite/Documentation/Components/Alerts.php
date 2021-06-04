<?php

// Documentation test config file for "Components / Alerts" part
return [
    'title' => 'Alerts',
    'url' => '%bootstrap-url%/components/alerts/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/alerts/#examples',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                        'primary', 'secondary', 'success', 'danger',
                        'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->alert(
                        'A simple ' . $sVariant . ' alert—check it out!',
                        $sVariant
                    ) . PHP_EOL;
                }
            },
            'expected' => '<div class="alert&#x20;alert-primary" role="alert">' . PHP_EOL .
                '    A simple primary alert—check it out!' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="alert&#x20;alert-secondary" role="alert">' . PHP_EOL .
                '    A simple secondary alert—check it out!' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="alert&#x20;alert-success" role="alert">' . PHP_EOL .
                '    A simple success alert—check it out!' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="alert&#x20;alert-danger" role="alert">' . PHP_EOL .
                '    A simple danger alert—check it out!' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="alert&#x20;alert-warning" role="alert">' . PHP_EOL .
                '    A simple warning alert—check it out!' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="alert&#x20;alert-info" role="alert">' . PHP_EOL .
                '    A simple info alert—check it out!' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="alert&#x20;alert-light" role="alert">' . PHP_EOL .
                '    A simple light alert—check it out!' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="alert&#x20;alert-dark" role="alert">' . PHP_EOL .
                '    A simple dark alert—check it out!' . PHP_EOL .
                '</div>' . PHP_EOL,
            'tests' => [
                [
                    'title' => 'Link color',
                    'url' => '%bootstrap-url%/components/alerts/#link-color',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        foreach (
                            [
                                'primary', 'secondary', 'success', 'danger',
                                'warning', 'info', 'light', 'dark',
                            ] as $sVariant
                        ) {
                            echo $oView->alert(
                                'A simple ' . $sVariant . ' alert with ' .
                                    '<a href="#" class="alert-link">an example link</a>. ' .
                                    'Give it a click if you like.',
                                $sVariant
                            ) . PHP_EOL;
                        }
                    },
                    'expected' => '<div class="alert&#x20;alert-primary" role="alert">' . PHP_EOL .
                        '    A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                        'Give it a click if you like.' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="alert&#x20;alert-secondary" role="alert">' . PHP_EOL .
                        '    A simple secondary alert with <a href="#" class="alert-link">an example link</a>. ' .
                        'Give it a click if you like.' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="alert&#x20;alert-success" role="alert">' . PHP_EOL .
                        '    A simple success alert with <a href="#" class="alert-link">an example link</a>. ' .
                        'Give it a click if you like.' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="alert&#x20;alert-danger" role="alert">' . PHP_EOL .
                        '    A simple danger alert with <a href="#" class="alert-link">an example link</a>. ' .
                        'Give it a click if you like.' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="alert&#x20;alert-warning" role="alert">' . PHP_EOL .
                        '    A simple warning alert with <a href="#" class="alert-link">an example link</a>. ' .
                        'Give it a click if you like.' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="alert&#x20;alert-info" role="alert">' . PHP_EOL .
                        '    A simple info alert with <a href="#" class="alert-link">an example link</a>. ' .
                        'Give it a click if you like.' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="alert&#x20;alert-light" role="alert">' . PHP_EOL .
                        '    A simple light alert with <a href="#" class="alert-link">an example link</a>. ' .
                        'Give it a click if you like.' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="alert&#x20;alert-dark" role="alert">' . PHP_EOL .
                        '    A simple dark alert with <a href="#" class="alert-link">an example link</a>. ' .
                        'Give it a click if you like.' . PHP_EOL .
                        '</div>' . PHP_EOL,
                ],
                [
                    'title' => 'Additional content',
                    'url' => '%bootstrap-url%/components/alerts/#additional-content',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        // Success
                        echo $oView->alert(
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
                    'expected' => '<div class="alert&#x20;alert-success" role="alert">' . PHP_EOL .
                        '    <h4 class="alert-heading">Well done!</h4>' . PHP_EOL .
                        '    <p>Aww yeah, you successfully read this important alert message. ' .
                        'This example text is going to run a bit longer so that you can see ' .
                        'how spacing within an alert works with this kind of content.</p>' . PHP_EOL .
                        '    <hr/>' . PHP_EOL .
                        '    <p class="mb-0">' .
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy.' .
                        '</p>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Dismissing',
                    'url' => '%bootstrap-url%/components/alerts/#dismissing',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->alert(
                            '<strong>Holy guacamole!</strong> You should check in on some of those fields below.',
                            [
                                'variant' => 'warning',
                                'dismissible' => true,
                            ]
                        );
                    },
                    'expected' =>
                    '<div ' .
                        'class="alert&#x20;alert-dismissible&#x20;alert-warning&#x20;fade&#x20;show" ' .
                        'role="alert"' .
                        '>' . PHP_EOL .
                        '    <strong>Holy guacamole!</strong> You should check in on some of those fields below.'
                        . PHP_EOL .
                        '    <button aria-label="Close" class="close" data-dismiss="alert" type="button">' .
                        '<span aria-hidden="true">&times;</span>' .
                        '</button>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
    ],
];
