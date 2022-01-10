<?php

// Documentation test config file for "Components / Offcanvas / Backdrop" part
return [
    'title' => 'Backdrop',
    'url' => '%bootstrap-url%/components/offcanvas/#backdrop',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->offcanvas(
            '<p>Try scrolling the rest of the page to see this option in action.</p>',
            [
                'triggers' => [
                    [
                        'options' => [
                            'variant' => 'primary',
                            'label' => 'Enable body scrolling',
                        ],
                    ],
                ],
                'header' => [
                    'title' => [
                        'content' => 'Colored with scrolling',
                        'attributes' => [
                            'id' => 'offcanvasScrollingLabel',
                        ],
                    ],
                ],
                'backdrop' => false,
                'scroll' => true,
                'id' => 'offcanvasScrolling',
            ]
        ) . PHP_EOL;

        echo $view->offcanvas(
            '<p>.....</p>',
            [
                'triggers' => [
                    [
                        'options' => [
                            'variant' => 'primary',
                            'label' => 'Enable backdrop (default)',
                        ],
                    ],
                ],
                'header' => [
                    'title' => [
                        'content' => 'Offcanvas with backdrop',
                        'attributes' => [
                            'id' => 'offcanvasWithBackdropLabel',
                        ],
                    ],
                ],
                'id' => 'offcanvasWithBackdrop',
            ]
        ) . PHP_EOL;

        echo $view->offcanvas(
            '<p>Try scrolling the rest of the page to see this option in action.</p>',
            [
                'scroll' => true,
                'triggers' => [
                    [
                        'options' => [
                            'variant' => 'primary',
                            'label' => 'Enable both scrolling & backdrop',
                        ],
                    ],
                ],
                'header' => [
                    'title' => [
                        'content' => 'Backdrop with scrolling',
                        'attributes' => [
                            'id' => 'offcanvasWithBothOptionsLabel',
                        ],
                    ],
                ],
                'id' => 'offcanvasWithBothOptions',
            ]
        );
    },
];
