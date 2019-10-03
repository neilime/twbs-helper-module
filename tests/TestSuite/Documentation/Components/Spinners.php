<?php

// Documentation test config file for "Components / Spinners" part
return [
    'title' => 'Spinners',
    'url' => '%bootstrap-url%/components/spinners/',
    'tests' => [
        [
            'title' => 'Border spinner',
            'url' => '%bootstrap-url%/components/spinners/#border-spinner',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->spinner('Loading...');
            },
            'expected' => '<div class="spinner-border" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>',
            'tests' => [
                [
                    'title' => 'Colors',
                    'url' => '%bootstrap-url%/components/spinners/#colors',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        foreach ([
                            'primary', 'secondary', 'success', 'danger',
                            'warning', 'info', 'light', 'dark',
                        ] as $sVariant) {
                            echo $oView->spinner([
                                'variant' => $sVariant,
                                'label' => 'Loading...',
                            ]) . PHP_EOL;
                        }
                    },
                    'expected' => '<div class="spinner-border&#x20;text-primary" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>'. PHP_EOL .
                    '<div class="spinner-border&#x20;text-secondary" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>'. PHP_EOL.
                    '<div class="spinner-border&#x20;text-success" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>'. PHP_EOL.
                    '<div class="spinner-border&#x20;text-danger" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>'. PHP_EOL.
                    '<div class="spinner-border&#x20;text-warning" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>'. PHP_EOL.
                    '<div class="spinner-border&#x20;text-info" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>'. PHP_EOL.
                    '<div class="spinner-border&#x20;text-light" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>'. PHP_EOL.
                    '<div class="spinner-border&#x20;text-dark" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>'. PHP_EOL,
                ],
            ],
        ],
        [
            'title' => 'Growing spinner',
            'url' => '%bootstrap-url%/components/spinners/#growing-spinner',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->spinner(['type' => 'grow', 'label' => 'Loading...']);
                
                echo PHP_EOL . '<br>' . PHP_EOL;

                foreach ([
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                ] as $sVariant) {
                    echo $oView->spinner([
                        'variant' => $sVariant,
                        'type' => 'grow',
                        'label' => 'Loading...',
                    ]) . PHP_EOL;
                }
            },
            'expected' => '<div class="spinner-grow" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<br>' . PHP_EOL .
            '<div class="spinner-grow&#x20;text-primary" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="spinner-grow&#x20;text-secondary" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="spinner-grow&#x20;text-success" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="spinner-grow&#x20;text-danger" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="spinner-grow&#x20;text-warning" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="spinner-grow&#x20;text-info" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="spinner-grow&#x20;text-light" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="spinner-grow&#x20;text-dark" role="status">' . PHP_EOL .
            '    <span class="sr-only">Loading...</span>' . PHP_EOL .
            '</div>' . PHP_EOL,
        ],
        [
            'title' => 'Alignment',
            'url' => '%bootstrap-url%/components/spinners/#alignment',
            'tests' => [
                [
                    'title' => 'Margin',
                    'url' => '%bootstrap-url%/components/spinners/#margin',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->spinner([
                            'margin' => 5,
                            'label' => 'Loading...',
                        ]);
                    },
                    'expected' => '<div class="m-5&#x20;spinner-border" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>',
                ],
                [
                    'title' => 'Placement',
                    'url' => '%bootstrap-url%/components/spinners/#placement',
                    'tests' => [
                        [
                            'title' => 'Flex',
                            'url' => '%bootstrap-url%/components/spinners/#flex',
                            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                                echo $oView->spinner([
                                    'placement' => 'center',
                                    'label' => 'Loading...',
                                ]);
                                
                                echo PHP_EOL . '<br>' . PHP_EOL;

                                echo $oView->spinner([
                                    'placement' => 'center',
                                    'label' => 'Loading...',
                                    'show_label' => true,
                                ]);
                            },
                            'expected' => '<div class="d-flex&#x20;justify-content-center">' . PHP_EOL .
                            '    <div class="spinner-border" role="status">' . PHP_EOL .
                            '        <span class="sr-only">Loading...</span>' . PHP_EOL .
                            '    </div>' . PHP_EOL .
                            '</div>' . PHP_EOL .
                            '<br>' . PHP_EOL .
                            '<div class="align-items-center&#x20;d-flex">' . PHP_EOL .
                            '    <strong>Loading...</strong>' . PHP_EOL .
                            '    <div aria-hidden="true" class="ml-auto&#x20;spinner-border" '.
                            'role="status"></div>' . PHP_EOL .
                            '</div>',
                        ],
                        [
                            'title' => 'Floats',
                            'url' => '%bootstrap-url%/components/spinners/#floats',
                            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                                echo $oView->spinner([
                                    'placement' => 'right',
                                    'label' => 'Loading...',
                                ]);
                            },
                            'expected' => '<div class="clearfix">' . PHP_EOL .
                            '    <div class="float-right&#x20;spinner-border" role="status">' . PHP_EOL .
                            '        <span class="sr-only">Loading...</span>' . PHP_EOL .
                            '    </div>' . PHP_EOL .
                            '</div>',
                        ],
                        [
                            'title' => 'Text align',
                            'url' => '%bootstrap-url%/components/spinners/#text-align',
                            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                                echo $oView->spinner([
                                    'placement' => 'text-center',
                                    'label' => 'Loading...',
                                ]);
                            },
                            'expected' => '<div class="text-center">' . PHP_EOL .
                            '    <div class="spinner-border" role="status">' . PHP_EOL .
                            '        <span class="sr-only">Loading...</span>' . PHP_EOL .
                            '    </div>' . PHP_EOL .
                            '</div>',
                        ],
                    ],
                ],
                [
                    'title' => 'Size',
                    'url' => '%bootstrap-url%/components/spinners/#size',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->spinner([
                            'size' => 'sm',
                            'label' => 'Loading...',
                        ]) . PHP_EOL;

                        echo $oView->spinner([
                            'size' => 'sm',
                            'type' => 'grow',
                            'label' => 'Loading...',
                        ]);

                        echo PHP_EOL . '<br>' . PHP_EOL;

                        echo $oView->spinner([
                            'attributes' => ['style' => 'width: 3rem; height: 3rem;'],
                            'label' => 'Loading...',
                        ]). PHP_EOL;

                        echo $oView->spinner([
                            'attributes' => ['style' => 'width: 3rem; height: 3rem;'],
                            'type' => 'grow',
                            'label' => 'Loading...',
                        ]);
                    },
                    'expected' => '<div class="spinner-border&#x20;spinner-border-sm" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>' . PHP_EOL .
                    '<div class="spinner-grow&#x20;spinner-grow-sm" role="status">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>' . PHP_EOL .
                    '<br>' . PHP_EOL .
                    '<div class="spinner-border" role="status" '.
                    'style="height&#x3A;&#x20;3rem&#x3B;width&#x3A;&#x20;3rem&#x3B;">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>' . PHP_EOL .
                    '<div class="spinner-grow" role="status" '.
                    'style="height&#x3A;&#x20;3rem&#x3B;width&#x3A;&#x20;3rem&#x3B;">' . PHP_EOL .
                    '    <span class="sr-only">Loading...</span>' . PHP_EOL .
                    '</div>',
                ],
            ],
        ],
    ],
];
