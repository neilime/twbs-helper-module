<?php

// Documentation test config file for "Components / Spinners / Size" part
return [
    'title' => 'Size',
    'url' => '%bootstrap-url%/components/spinners/#size',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->spinner([
            'size' => 'sm',
            'label' => 'Loading...',
        ]) . PHP_EOL;

        echo $view->spinner([
            'size' => 'sm',
            'type' => 'grow',
            'label' => 'Loading...',
        ]);

        echo PHP_EOL . '<br/><br/>' . PHP_EOL;

        echo $view->spinner([
            'attributes' => ['style' => 'width: 3rem; height: 3rem;'],
            'label' => 'Loading...',
        ]) . PHP_EOL;

        echo $view->spinner([
            'attributes' => ['style' => 'width: 3rem; height: 3rem;'],
            'type' => 'grow',
            'label' => 'Loading...',
        ]);
    },
];
