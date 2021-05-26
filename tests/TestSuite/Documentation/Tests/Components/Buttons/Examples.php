<?php

// Documentation test config file for "Components / Buttons / Examples" part
return [
    'title' => 'Examples',
    'url' => '%bootstrap-url%/components/buttons/#examples',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        foreach (
            [
            'primary', 'secondary', 'success', 'danger',
            'warning', 'info', 'light', 'dark', 'link',
            ] as $variant
        ) {
            echo $view->formButton()->renderSpec([
                'options' => [
                    'label' => ucfirst($variant),
                    'variant' => $variant,
                ],
            ]) . PHP_EOL;
        }
    },
];
