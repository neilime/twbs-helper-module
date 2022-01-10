<?php

// Documentation test config file for "Components / Buttons / Button tags" part
return [
    'title' => 'Button tags',
    'url' => '%bootstrap-url%/components/buttons/#button-tags',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        // Link button
        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Link',
                'variant' => 'primary',
                'tag' => 'a',
            ],
            'attributes' => ['href' => '#'],
        ]) . PHP_EOL;

        // Submit button
        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
            'attributes' => ['type' => 'submit'],
        ]) . PHP_EOL;

        // Input button
        echo $view->formButton()->renderSpec([
            'options' => [
                'tag' => 'input',
                'label' => 'Input',
                'variant' => 'primary',
            ],
            'attributes' => ['type' => 'button'],
        ]) . PHP_EOL;

        // Submit input
        echo $view->formButton()->renderSpec([
            'options' => [
                'tag' => 'input',
                'label' => 'Submit',
                'variant' => 'primary',
            ],
            'attributes' => ['type' => 'submit'],
        ]) . PHP_EOL;

        // Reset
        echo $view->formButton()->renderSpec([
            'options' => [
                'tag' => 'input',
                'label' => 'Reset',
                'variant' => 'primary',
            ],
            'attributes' => ['type' => 'reset'],
        ]);
    },
];
