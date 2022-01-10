<?php

// Documentation test config file for "Components / Buttons / Sizes" part
return [
    'title' => 'Sizes',
    'url' => '%bootstrap-url%/components/buttons/#sizes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        // Large buttons
        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Large button',
                'variant' => 'primary',
                'size' => 'lg',
            ],
        ]) . PHP_EOL;


        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Large button',
                'size' => 'lg',
            ],
        ]) . PHP_EOL;

        echo '<br/><br/>' . PHP_EOL;

        // Small buttons
        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Small button',
                'variant' => 'primary',
                'size' => 'sm',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Small button',
                'size' => 'sm',
            ],
        ]);
    },
];
