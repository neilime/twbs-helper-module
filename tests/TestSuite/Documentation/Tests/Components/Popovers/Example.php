<?php

// Documentation test config file for "Components / Popovers / Example" part
return [
    'title' => 'Example',
    'url' => '%bootstrap-url%/components/popovers/#example',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Click to toggle popover',
                'variant' => 'danger',
                'popover' => "And here's some amazing content. It's very engaging. Right?",
                'size' => 'lg',
            ],
            'attributes' => ['title' => 'Popover title'],
        ]);
    },
    'tests' => [
        [
            'title' => 'Four directions',
            'url' => '%bootstrap-url%/components/popovers/#four-directions',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Popover on top',
                        'popover' => [
                            'placement' => 'top',
                            'content' => 'Top popover',
                        ],
                    ],
                    'attributes' => ['title' => ''],
                ]) . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Popover on right',
                        'popover' => [
                            'placement' => 'right',
                            'content' => 'Right popover',
                        ],
                    ],
                    'attributes' => ['title' => ''],
                ]) . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Popover on bottom',
                        'popover' => [
                            'placement' => 'bottom',
                            'content' => 'Bottom popover',
                        ],
                    ],
                    'attributes' => ['title' => ''],
                ]) . PHP_EOL;

                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Popover on left',
                        'popover' => [
                            'placement' => 'left',
                            'content' => 'Left popover',
                        ],
                    ],
                    'attributes' => ['title' => ''],
                ]);
            },
        ],
        [
            'title' => 'Dismiss on next click',
            'url' => '%bootstrap-url%/components/popovers/#dismiss-on-next-click',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'name' => 'popover',
                    'options' => [
                        'tag' => 'a',
                        'label' => 'Dismissible popover',
                        'variant' => 'danger',
                        'popover' => [
                            'trigger' => 'focus',
                            'content' => "And here's some amazing content. It's very engaging. Right?",
                        ],
                        'size' => 'lg',
                    ],
                    'attributes' => ['title' => 'Dismissible popover', 'tabindex' => '0'],
                ]);
            },
        ],
        [
            'title' => 'Disabled elements',
            'url' => '%bootstrap-url%/components/popovers/#disabled-elements',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'options' => [
                        'label' => 'Disabled button',
                        'variant' => 'primary',
                        'popover' => [
                            'content' => 'Disabled popover',
                            'trigger' => 'hover focus',
                        ],
                    ],
                    'attributes' => ['disabled' => true],
                ]);
            },
        ],
    ],
];
