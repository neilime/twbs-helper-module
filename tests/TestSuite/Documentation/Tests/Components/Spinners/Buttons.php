<?php

// Documentation test config file for "Components / Spinners / Buttons" part
return [
    'title' => 'Buttons',
    'url' => '%bootstrap-url%/components/spinners/#buttons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->formButton()->renderSpec([
            'options' => [
                'spinner' => true,
                'label' => 'Loading...',
                'show_label' => false,
                'variant' => 'primary',
            ],
            'attributes' => ['disabled' => true],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Loading...',
                'spinner' => true,
                'variant' => 'primary',
            ],
            'attributes' => ['disabled' => true],
        ]);

        echo PHP_EOL . '<br/><br/>' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'spinner' => [
                    'type' => 'grow',
                ],
                'variant' => 'primary',
                'label' => 'Loading...',
                'show_label' => false,
            ],
            'attributes' => ['disabled' => true],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Loading...',
                'spinner' => ['type' => 'grow'],
                'variant' => 'primary',
            ],
            'attributes' => ['disabled' => true],
        ]);
    },
];
