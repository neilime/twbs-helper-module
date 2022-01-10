<?php

// Documentation test config file for "Components / List group / Contextual classes" part
return [
    'title' => 'Contextual classes',
    'url' => '%bootstrap-url%/components/list-group/#contextual-classes',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Use option 'variant' to style list items with a stateful background and color
        echo $view->listGroup([
            'A simple default list group item',
            'A simple primary list group item' => ['variant' => 'primary'],
            'A simple secondary list group item' => ['variant' => 'secondary'],
            'A simple success list group item' => ['variant' => 'success'],
            'A simple danger list group item' => ['variant' => 'danger'],
            'A simple warning list group item' => ['variant' => 'warning'],
            'A simple info list group item' => ['variant' => 'info'],
            'A simple light list group item' => ['variant' => 'light'],
            'A simple dark list group item' => ['variant' => 'dark'],
        ]);

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Contextual classes also work with .list-group-item-action
        echo $view->listGroup(
            [
                'A simple default list group item' => ['attributes' => ['href' => '#']],
                'A simple primary list group item' => [
                    'variant' => 'primary',
                    'attributes' => ['href' => '#'],
                ],
                'A simple secondary list group item' => [
                    'variant' => 'secondary',
                    'attributes' => ['href' => '#'],
                ],
                'A simple success list group item' => [
                    'variant' => 'success',
                    'attributes' => ['href' => '#'],
                ],
                'A simple danger list group item' => [
                    'variant' => 'danger',
                    'attributes' => ['href' => '#'],
                ],
                'A simple warning list group item' => [
                    'variant' => 'warning',
                    'attributes' => ['href' => '#'],
                ],
                'A simple info list group item' => [
                    'variant' => 'info',
                    'attributes' => ['href' => '#'],
                ],
                'A simple light list group item' => [
                    'variant' => 'light',
                    'attributes' => ['href' => '#'],
                ],
                'A simple dark list group item' => [
                    'variant' => 'dark',
                    'attributes' => ['href' => '#'],
                ],
            ],
            ['type' => 'action']
        );
    },
];
