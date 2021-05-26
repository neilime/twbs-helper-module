<?php

// Documentation test config file for "Components / Progress / Labels" part
return [
    'title' => 'Labels',
    'url' => '%bootstrap-url%/components/progress/#labels',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->progressBar([
            'show_label' => true,
            'min' => 0,
            'max' => 100,
            'current' => 25,
        ]);
    },
];
