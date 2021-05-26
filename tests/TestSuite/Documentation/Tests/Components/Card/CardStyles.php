<?php

// Documentation test config file for "Components / Card / Card styles" part
return [
    'title' => 'Card styles',
    'url' => '%bootstrap-url%/components/card/#card-styles',
    'tests' => [
        [
            'title' => 'Background and color',
            'url' => '%bootstrap-url%/components/card/#background-and-color',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach (
                    [
                    ['primary', 'white'],
                    ['secondary', 'white'],
                    ['success', 'white'],
                    ['danger', 'white'],
                    ['warning', 'dark'],
                    ['info', 'dark'],
                    ['light', 'dark'],
                    ['dark', 'white'],
                    ] as [$variant, $text]
                ) {
                    echo $view->card([
                        'header' => 'Header',
                        'title' => ucfirst($variant) . ' card title',
                        'text' => "Some quick example text to build on the card title" .
                            " and make up the bulk of the card's content.",
                    ], [
                        'bg_variant' => $variant,
                        'class' => 'text-' . $text . ' mb-3',
                        'style' => 'max-width: 18rem;',
                    ]) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Border',
            'url' => '%bootstrap-url%/components/card/#border',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach (
                    [
                    ['primary', 'primary'],
                    ['secondary', 'secondary'],
                    ['success', 'success'],
                    ['danger', 'danger'],
                    ['warning', null],
                    ['info', null],
                    ['light', null],
                    ['dark', 'dark'],
                    ] as [$variant, $body_variant]
                ) {
                    echo $view->card(
                        [
                            'header' => 'Header',
                            'title' => ucfirst($variant) . 'Primary card title',
                            'text' => "Some quick example text to build on the card title" .
                                " and make up the bulk of the card's content.",
                        ],
                        [
                            'border_variant' => $variant,
                            'body_variant' => $body_variant,
                            'class' => 'mb-3',
                            'style' => 'max-width: 18rem;',
                        ]
                    ) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Mixins utilities',
            'url' => '%bootstrap-url%/components/card/#mixins-utilities',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->card([
                    'header' => ['Header', ['class' => 'bg-transparent border-success']],
                    'title' => 'Success card title',
                    'text' => "Some quick example text to build on the card title" .
                        " and make up the bulk of the card's content.",
                    'footer' => ['Footer', ['class' => 'bg-transparent border-success']],
                ], [
                    'border_variant' => 'success',
                    'body_variant' => 'success',
                    'class' => 'mb-3',
                    'style' => 'max-width: 18rem;',
                ]);
            },
        ],
    ],
];
