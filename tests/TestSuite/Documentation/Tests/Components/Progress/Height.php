<?php

// Documentation test config file for "Components / Progress / Height" part
return [
    'title' => 'Height',
    'url' => '%bootstrap-url%/components/progress/#height',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->progressBar([
            'attributes' => ['style' => 'height:1px'],
            'min' => 0,
            'max' => 100,
            'current' => 25,
        ]) . PHP_EOL;

        echo $view->progressBar([
            'attributes' => ['style' => 'height:20px'],
            'min' => 0,
            'max' => 100,
            'current' => 25,
        ]);
    },
];
