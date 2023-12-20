<?php

// Documentation test config file for "Components / Close button" part
return [
    'title' => 'Close button',
    'url' => '%bootstrap-url%/components/close-button/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/close-button/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec(['options' => ['close' => true]], '');
            },
        ],
        [
            'title' => 'Disabled state',
            'url' => '%bootstrap-url%/components/close-button/#disabled-state',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'options' => ['close' => true],
                    'attributes' => ['disabled' => true],
                ], '');
            },
        ],
        [
            'title' => 'White variant',
            'url' => '%bootstrap-url%/components/close-button/#white-variant',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'options' => ['close' => true],
                    'attributes' => ['class' => 'btn-close-white'],
                ], '') . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => ['close' => true],
                    'attributes' => ['disabled' => true, 'class' => 'btn-close-white'],
                ], '');
            },
        ],
    ],
];
