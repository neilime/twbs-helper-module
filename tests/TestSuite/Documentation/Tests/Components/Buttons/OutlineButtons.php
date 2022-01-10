<?php

// Documentation test config file for "Components / Buttons / Outline buttons" part
return [
    'title' => 'Outline buttons',
    'url' => '%bootstrap-url%/components/buttons/#outline-buttons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        foreach (
            [
            'primary', 'secondary', 'success', 'danger',
            'warning', 'info', 'light', 'dark',
            ] as $variant
        ) {
            echo $view->formButton()->renderSpec([
                'options' => [
                    'label' => ucfirst($variant),
                    'variant' => 'outline-' . $variant,
                ],
            ]) . PHP_EOL;
        }
    },
];
