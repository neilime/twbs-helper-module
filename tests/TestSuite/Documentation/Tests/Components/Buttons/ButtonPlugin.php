<?php

// Documentation test config file for "Components / Buttons / Button plugin" part
return [
    'title' => 'Button plugin',
    'url' => '%bootstrap-url%/components/buttons/#button-plugin',
    'tests' => [
        [
            'title' => 'Toggle states',
            'url' => '%bootstrap-url%/components/buttons/#toggle-states',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Toggle button',
                        'variant' => 'primary',
                        'toggle' => false,
                    ],
                ]) . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Active toggle button',
                        'variant' => 'primary',
                        'toggle' => true,
                    ],
                ]) . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Disabled toggle button',
                        'variant' => 'primary',
                        'toggle' => false,
                    ],
                    'attributes' => [
                        'disabled' => true,
                    ],
                ]) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => [
                        'tag' => 'a',
                        'label' => 'Toggle link',
                        'variant' => 'primary',
                        'toggle' => false,
                    ],
                    'attributes' => [
                        'href' => '#',
                    ],
                ]) . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => [
                        'tag' => 'a',
                        'label' => 'Active toggle link',
                        'variant' => 'primary',
                        'toggle' => true,
                    ],
                    'attributes' => [
                        'href' => '#',
                    ],
                ]) . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => [
                        'tag' => 'a',
                        'label' => 'Disabled toggle link',
                        'variant' => 'primary',
                        'toggle' => false,
                    ],
                    'attributes' => [
                        'disabled' => true,
                        'href' => '#',
                    ],
                ]);
            },
        ]
    ]
];
