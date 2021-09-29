<?php

// Documentation test config file for "Components / Card / Card styles" part
return [
    'title' => 'Card styles',
    'url' => '%bootstrap-url%/components/card/#card-styles',
    'tests' => [
        [
            'title' => 'Background and color',
            'url' => '%bootstrap-url%/components/card/#background-and-color',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->card([
                        'header' => 'Header',
                        'title' => 'Primary card title',
                        'text' => 'Some quick example text to build on the card title ' .
                            'and make up the bulk of the card\'s content.',
                    ], [
                        'bgVariant' => $sVariant,
                        'class' => ($sVariant !== 'light' ? 'text-white ' : '') . 'mb-3',
                    ]) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Border',
            'url' => '%bootstrap-url%/components/card/#border',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $sVariant
                ) {
                    echo $oView->card([
                        'header' => 'Header',
                        'title' => 'Primary card title',
                        'text' => 'Some quick example text to build on the card title and ' .
                            'make up the bulk of the card\'s content.',
                    ], [
                        'borderVariant' => $sVariant,
                        'bodyVariant' => $sVariant !== 'light' ?  $sVariant : null,
                        'class' => 'mb-3'
                    ]) . PHP_EOL;
                }
            },

        ],
        [
            'title' => 'Mixins utilities',
            'url' => '%bootstrap-url%/components/card/#mixins-utilities',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'header' => ['Header', ['class' => 'bg-transparent border-success']],
                    'title' => 'Success card title',
                    'text' => 'Some quick example text to build on the card title ' .
                        'and make up the bulk of the card\'s content.',
                    'footer' => ['Footer', ['class' => 'card-footer bg-transparent border-success']],
                ], [
                    'borderVariant' => 'success',
                    'bodyVariant' => 'success',
                    'class' => 'mb-3'
                ]);
            },
        ],
    ],
];
