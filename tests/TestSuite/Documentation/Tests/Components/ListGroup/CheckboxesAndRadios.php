<?php

// Documentation test config file for "Components / List group / Checkboxes and radios" part
return [
    'title' => 'Checkboxes and radios',
    'url' => '%bootstrap-url%/components/list-group/#checkboxes-and-radios',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->listGroup(
            [
                'First checkbox' => [
                    'checkbox' => ['attributes' => ['aria-label' => '...']],
                ],
                'Second checkbox' => [
                    'checkbox' => ['attributes' => ['aria-label' => '...']],
                ],
                'First checkbox' => [
                    'checkbox' => ['attributes' => ['aria-label' => '...']],
                ],
                'Third checkbox' => [
                    'checkbox' => ['attributes' => ['aria-label' => '...']],
                ],
                'Fourth checkbox' => [
                    'checkbox' => ['attributes' => ['aria-label' => '...']],
                ],
            ],
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->listGroup(
            [
                'First checkbox' => [
                    'checkbox' => ['label' => true],
                ],
                'Second checkbox' => [
                    'checkbox' => ['label' => true],
                ],
                'First checkbox' => [
                    'checkbox' => ['label' => true],
                ],
                'Third checkbox' => [
                    'checkbox' => ['label' => true],
                ],
                'Fourth checkbox' => [
                    'checkbox' => ['label' => true],
                ],
            ],
        );
    },
];
