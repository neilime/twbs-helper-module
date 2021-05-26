<?php

// Documentation test config file for "Components / Modal / Optional sizes" part
return [
    'title' => 'Optional sizes',
    'url' => '%bootstrap-url%/components/modal/#optional-sizes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Extra large modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalXl',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Large modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalLg',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Small modal',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModalSm',
            ],
        ]) . PHP_EOL;

        echo $view->modal([
            'title' => [
                'content' => 'Extra large modal',
                'attributes' => ['id' => 'exampleModalXlLabel', 'class' => 'h4'],
            ],
            '...',
        ], [
            'hidden' => true,
            'fade' => true,
            'size' => 'xl',
            'id' => 'exampleModalXl',
        ]) . PHP_EOL;

        echo $view->modal([
            'title' => [
                'content' => 'Large modal',
                'attributes' => ['id' => 'exampleModalLgLabel', 'class' => 'h4'],
            ],
            '...',
        ], [
            'hidden' => true,
            'fade' => true,
            'size' => 'lg',
            'id' => 'exampleModalLg',
        ]) . PHP_EOL;

        echo $view->modal([
            'title' => [
                'content' => 'Small modal',
                'attributes' => ['id' => 'exampleModalSmLabel', 'class' => 'h4'],
            ],
            '...',
        ], [
            'hidden' => true,
            'fade' => true,
            'size' => 'sm',
            'id' => 'exampleModalSm',
        ]);
    },
];
