<?php

// Documentation test config file for "Components / Buttons / Disabled state" part
return [
    'title' => 'Disabled state',
    'url' => '%bootstrap-url%/components/buttons/#disabled-state',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Primary button',
                'variant' => 'primary',
                'size' => 'lg',
            ],
            'attributes' => [
                'disabled' => true,
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'size' => 'lg',
            ],
            'attributes' => [
                'disabled' => true,
            ],
        ]) . PHP_EOL;

        echo '<br/><br/>' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'tag' => 'a',
                'label' => 'Primary link',
                'variant' => 'primary',
                'size' => 'lg',
            ],
            'attributes' => [
                'disabled' => true,
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'tag' => 'a',
                'label' => 'Link',
                'size' => 'lg',
            ],
            'attributes' => [
                'disabled' => true,
            ],
        ]) . PHP_EOL;

        echo '<br/><br/>' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'tag' => 'a',
                'label' => 'Primary link',
                'variant' => 'primary',
                'size' => 'lg',
            ],
            'attributes' => [
                'href' => '#',
                'disabled' => true,
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'tag' => 'a',
                'label' => 'Link',
                'size' => 'lg',
            ],
            'attributes' => [
                'href' => '#',
                'disabled' => true,
            ],
        ]);
    },
];
