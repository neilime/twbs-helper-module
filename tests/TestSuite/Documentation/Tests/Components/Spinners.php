<?php

// Documentation test config file for "Components / Spinners" part
return [
    'title' => 'Spinners',
    'url' => '%bootstrap-url%/components/spinners/',
    'tests' => [
        [
            'title' => 'Border spinner',
            'url' => '%bootstrap-url%/components/spinners/#border-spinner',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->spinner('Loading...');
            },
            'tests' => [
                [
                    'title' => 'Colors',
                    'url' => '%bootstrap-url%/components/spinners/#colors',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        foreach (
                            [
                            'primary', 'secondary', 'success', 'danger',
                            'warning', 'info', 'light', 'dark',
                            ] as $sVariant
                        ) {
                            echo $oView->spinner([
                                'variant' => $sVariant,
                                'label' => 'Loading...',
                            ]) . PHP_EOL;
                        }
                    },
                ],
            ],
        ],
        [
            'title' => 'Growing spinner',
            'url' => '%bootstrap-url%/components/spinners/#growing-spinner',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->spinner(['type' => 'grow', 'label' => 'Loading...']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->spinner([
                        'variant' => $sVariant,
                        'type' => 'grow',
                        'label' => 'Loading...',
                    ]) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Alignment',
            'url' => '%bootstrap-url%/components/spinners/#alignment',
            'tests' => [
                [
                    'title' => 'Margin',
                    'url' => '%bootstrap-url%/components/spinners/#margin',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->spinner([
                            'margin' => 5,
                            'label' => 'Loading...',
                        ]);
                    },
                ],
                [
                    'title' => 'Placement',
                    'url' => '%bootstrap-url%/components/spinners/#placement',
                    'tests' => [
                        [
                            'title' => 'Flex',
                            'url' => '%bootstrap-url%/components/spinners/#flex',
                            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                                echo $oView->spinner([
                                    'placement' => 'center',
                                    'label' => 'Loading...',
                                ]);

                                echo PHP_EOL . '<br/>' . PHP_EOL;

                                echo $oView->spinner([
                                    'placement' => 'center',
                                    'label' => 'Loading...',
                                    'show_label' => true,
                                ]);
                            },
                        ],
                        [
                            'title' => 'Floats',
                            'url' => '%bootstrap-url%/components/spinners/#floats',
                            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                                echo $oView->spinner([
                                    'placement' => 'right',
                                    'label' => 'Loading...',
                                ]);
                            },
                        ],
                        [
                            'title' => 'Text align',
                            'url' => '%bootstrap-url%/components/spinners/#text-align',
                            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                                echo $oView->spinner([
                                    'placement' => 'text-center',
                                    'label' => 'Loading...',
                                ]);
                            },
                        ],
                    ],
                ],
                [
                    'title' => 'Size',
                    'url' => '%bootstrap-url%/components/spinners/#size',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->spinner([
                            'size' => 'sm',
                            'label' => 'Loading...',
                        ]) . PHP_EOL;

                        echo $oView->spinner([
                            'size' => 'sm',
                            'type' => 'grow',
                            'label' => 'Loading...',
                        ]);

                        echo PHP_EOL . '<br/><br/>' . PHP_EOL;

                        echo $oView->spinner([
                            'attributes' => ['style' => 'width: 3rem; height: 3rem;'],
                            'label' => 'Loading...',
                        ]) . PHP_EOL;

                        echo $oView->spinner([
                            'attributes' => ['style' => 'width: 3rem; height: 3rem;'],
                            'type' => 'grow',
                            'label' => 'Loading...',
                        ]);
                    },
                ],
                [
                    'title' => 'Buttons',
                    'url' => '%bootstrap-url%/components/spinners/#buttons',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->formButton()->renderSpec([
                            'options' => [
                                'spinner' => 'Loading...',
                                'variant' => 'primary',
                            ],
                            'attributes' => ['disabled' => true],
                        ]) . PHP_EOL;

                        echo $oView->formButton()->renderSpec([
                            'options' => [
                                'label' => 'Loading...',
                                'spinner' => true,
                                'variant' => 'primary',
                            ],
                            'attributes' => ['disabled' => true],
                        ]);

                        echo PHP_EOL . '<br/><br/>' . PHP_EOL;

                        echo $oView->formButton()->renderSpec([
                            'options' => [
                                'spinner' => [
                                    'type' => 'grow',
                                    'label' => 'Loading...',
                                ],
                                'variant' => 'primary',
                            ],
                            'attributes' => ['disabled' => true],
                        ]) . PHP_EOL;

                        echo $oView->formButton()->renderSpec([
                            'options' => [
                                'label' => 'Loading...',
                                'spinner' => ['type' => 'grow'],
                                'variant' => 'primary',
                            ],
                            'attributes' => ['disabled' => true],
                        ]);
                    },
                ],
            ],
        ],
    ],
];
