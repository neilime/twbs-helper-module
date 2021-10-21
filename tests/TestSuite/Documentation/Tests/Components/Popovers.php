<?php

// Documentation test config file for "Components / Popovers" part
return [
    'title' => 'Popovers',
    'url' => '%bootstrap-url%/components/popovers/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/popovers/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->formButton()->renderSpec([
                    'name' => 'popover',
                    'options' => [
                        'label' => 'Click to toggle popover',
                        'variant' => 'danger',
                        'popover' => "And here's some amazing content. It's very engaging. Right?",
                        'size' => 'lg',
                    ],
                    'attributes' => ['title' => 'Popover title'],
                ]);
            },
        ],
        [
            'title' => 'Four directions',
            'url' => '%bootstrap-url%/components/popovers/#four-directions',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach (
                    [
                    'top' => 'Popover on top',
                    'right' => 'Popover on right',
                    'bottom' => 'Popover on bottom',
                    'left' => 'Popover on left',
                    ] as $placement => $buttonLabel
                ) {
                    echo $view->formButton()->renderSpec([
                        'name' => 'popover',
                        'options' => [
                            'label' => $buttonLabel,
                            'popover' => [
                                'placement' => $placement,
                                'content' => 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.',
                            ],
                        ],
                    ]) . PHP_EOL;
                }
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
                    'name' => 'popover',
                    'options' => [
                        'label' => 'Disabled button',
                        'variant' => 'primary',
                        'popover' => 'Disabled popover',
                    ],
                    'attributes' => ['disabled' => true],
                ]);
            },
        ],
    ],
];
