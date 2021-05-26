<?php

// Documentation test config file for "Components / Button group / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/button-group/#sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        foreach (['lg', null, 'sm'] as $size) {
            echo $view->buttonGroup(
                [
                    ['type' => 'button', 'options' => ['label' => 'Left']],
                    ['type' => 'button', 'options' => ['label' => 'Middle']],
                    ['type' => 'button', 'options' => ['label' => 'Right']],
                ],
                [
                    'size' => $size,
                    'variant' => 'outline-dark',
                    'attributes' => ['role' => 'group', 'aria-label' => '...'],
                ],
            ) . PHP_EOL;

            echo '<br/>' . PHP_EOL;
        }
    },
];
