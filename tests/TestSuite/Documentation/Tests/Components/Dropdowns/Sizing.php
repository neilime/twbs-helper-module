<?php

// Documentation test config file for "Components / Dropdowns / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/dropdowns/#sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Large button
        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Large button',
                'size' => 'lg',
                'dropdown' => [
                    'attributes' => ['class' => 'btn-group'],
                    'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                ],
            ],
        ]) . PHP_EOL;

        // Large split button
        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Large button',
                'size' => 'lg',
                'dropdown' => [
                    'split' => 'Toggle Dropdown',
                    'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                ],
            ],
        ]);

        echo PHP_EOL . '<br/><br/>' . PHP_EOL;

        // Small button
        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Small button',
                'size' => 'sm',
                'dropdown' => [
                    'attributes' => ['class' => 'btn-group'],
                    'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                ],
            ],
        ]) . PHP_EOL;

        // Small split button
        echo $view->formButton()->renderSpec([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Small button',
                'size' => 'sm',
                'dropdown' => [
                    'split' => 'Toggle Dropdown',
                    'items' => ['Action', 'Another action', 'Something else here', '---', 'Separated link'],
                ],
            ],
        ]);
    },
];
