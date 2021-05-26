<?php

// Documentation test config file for "Components / List group / Horizontal" part
return [
    'title' => 'Horizontal',
    'url' => '%bootstrap-url%/components/list-group/#horizontal',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        // Add option 'horizontal' to change the layout of list group items from vertical to horizontal
        echo $view->listGroup(
            [
                'An item',
                'A second item',
                'A third item',
            ],
            ['horizontal' => true]
        );

        // Alternatively, choose a responsive variant `sm|md|lg|xl|xxl`
        // to make a list group horizontal starting at that breakpoint’s
        foreach (['sm', 'md', 'lg', 'xl', 'xxl'] as $breakpoint) {
            echo PHP_EOL . '<br/>' . PHP_EOL;

            echo $view->listGroup(
                [
                    'An item',
                    'A second item',
                    'A third item',
                ],
                ['horizontal' => $breakpoint]
            );
        }
    },
];
