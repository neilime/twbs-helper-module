<?php

// Documentation test config file for "Components / Button group / Mixed styles" part
return [
    'title' => 'Mixed styles',
    'url' => '%bootstrap-url%/components/button-group/#mixed-styles',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->buttonGroup(
            [
                ['type' => 'button', 'options' =>  ['label' => 'Left', 'variant' => 'danger']],
                ['type' => 'button', 'options' =>  ['label' => 'Middle', 'variant' => 'warning']],
                ['type' => 'button', 'options' =>  ['label' => 'Right', 'variant' => 'success']],
            ],
            ['attributes' => ['role' => 'group', 'aria-label' => 'Basic mixed styles example']]
        );
    },
];
