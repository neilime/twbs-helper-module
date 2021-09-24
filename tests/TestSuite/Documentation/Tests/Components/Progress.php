<?php

// Documentation test config file for "Components / Progress" part
return [
    'title' => 'Progress',
    'url' => '%bootstrap-url%/components/progress/',
    'tests' => [
        [
            'title' => 'How it works',
            'url' => '%bootstrap-url%/components/progress/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                // Display progressbar at 0%
                echo $oView->progressBar(0, 100);
                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Display progress bar at 25%
                echo $oView->progressBar(0, 100, 25);
                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Display progress bar at 50%
                echo $oView->progressBar(0, 100, 50);
                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Display progress bar at 75%
                echo $oView->progressBar(0, 100, 75);
                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Display progress bar at 100%
                echo $oView->progressBar(0, 100, 100);
            },
        ],
        [
            'title' => 'Labels',
            'url' => '%bootstrap-url%/components/progress/#labels',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->progressBar([
                    'show_label' => true,
                    'min' => 0,
                    'max' => 100,
                    'current' => 25,
                ]);
            },
        ],
        [
            'title' => 'Height',
            'url' => '%bootstrap-url%/components/progress/#height',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->progressBar([
                    'attributes' => ['style' => 'height:1px'],
                    'min' => 0,
                    'max' => 100,
                    'current' => 25,
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $oView->progressBar([
                    'attributes' => ['style' => 'height:20px'],
                    'min' => 0,
                    'max' => 100,
                    'current' => 25,
                ]);
            },
        ],
        [
            'title' => 'Backgrounds',
            'url' => '%bootstrap-url%/components/progress/#backgrounds',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    'success' => 25,
                    'info' => 50,
                    'warning' => 75,
                    'danger' => 100,
                    ] as $sVariant => $iCurrent
                ) {
                    echo $oView->progressBar([
                        'variant' => $sVariant,
                        'min' => 0,
                        'max' => 100,
                        'current' => $iCurrent,
                    ]);
                    echo PHP_EOL . '<br/>' . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Multiple bars',
            'url' => '%bootstrap-url%/components/progress/#multiple-bars',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->progressBarGroup([
                    ['min' => 0, 'max' => 100, 'current' => 15],
                    ['variant' => 'success', 'min' => 0, 'max' => 100, 'current' => 30],
                    ['variant' => 'info', 'min' => 0, 'max' => 100, 'current' => 20],
                ]);
            },
        ],
        [
            'title' => 'Striped',
            'url' => '%bootstrap-url%/components/progress/#striped',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                foreach (
                    [
                    null => 10,
                    'success' => 25,
                    'info' => 50,
                    'warning' => 75,
                    'danger' => 100,
                    ] as $sVariant => $iCurrent
                ) {
                    echo $oView->progressBar([
                        'striped' => true,
                        'variant' => $sVariant,
                        'current' => $iCurrent,
                        'min' => 0,
                        'max' => 100,
                    ]);
                    echo PHP_EOL . '<br/>' . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Animated stripes',
            'url' => '%bootstrap-url%/components/progress/#animated-stripes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->progressBar([
                    'striped' => true,
                    'animated' => true,
                    'current' => 25,
                    'min' => 0,
                    'max' => 100,
                ]);
            },
        ],
    ],
];
