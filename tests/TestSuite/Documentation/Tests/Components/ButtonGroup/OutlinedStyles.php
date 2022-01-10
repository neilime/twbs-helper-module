<?php

// Documentation test config file for "Components / Button group / Outlined styles" part
return [
    'title' => 'Outlined styles',
    'url' => '%bootstrap-url%/components/button-group/#outlined-styles',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->buttonGroup(
            [
                ['type' => 'button', 'options' =>  ['label' => 'Left']],
                ['type' => 'button', 'options' =>  ['label' => 'Middle']],
                ['type' => 'button', 'options' =>  ['label' => 'Right']],
            ],
            [
                'variant' => 'outline-primary',
                'attributes' => ['role' => 'group', 'aria-label' => 'Basic outlined example'],
            ],
        );
    },
];
