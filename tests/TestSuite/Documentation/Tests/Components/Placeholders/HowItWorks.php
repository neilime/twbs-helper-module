<?php

// Documentation test config file for "Components / Placeholders / How it works" part
return [
    'title' => 'How it works',
    'url' => '%bootstrap-url%/components/placeholders/#how-it-works',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->placeholder(['column' => 6, 'hidden' => true]) . PHP_EOL;

        echo $view->placeholder([
            'column' => 4,
            'hidden' => true,
            'button' => [
                'options' => ['variant' => 'primary'],
            ],
        ]);
    },
    'tests' => [
        [
            'title' => 'Width',
            'url' => '%bootstrap-url%/components/placeholders/#width',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->placeholder(6) . PHP_EOL;

                echo $view->placeholder(['class' => 'w-75']) . PHP_EOL;

                echo $view->placeholder(['style' => 'width: 25%']);
            },
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/components/placeholders/#sizing',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                echo $view->placeholder(['column' => 12, 'size' => 'lg']) . PHP_EOL;

                echo $view->placeholder(12) . PHP_EOL;

                echo $view->placeholder(['column' => 12, 'size' => 'sm']) . PHP_EOL;

                echo $view->placeholder(['column' => 12, 'size' => 'xs']);
            },
        ],
        [
            'title' => 'Animation',
            'url' => '%bootstrap-url%/components/placeholders/#animation',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                echo $view->placeholder(['column' => 12, 'animation' => 'glow']) . PHP_EOL;

                echo $view->placeholder(['column' => 12, 'animation' => 'wave']);
            },
        ],
    ],
];
