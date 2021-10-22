<?php

// Documentation test config file for "Components / Buttons" part
return [
    'title' => 'Buttons',
    'url' => '%bootstrap-url%/components/buttons/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/buttons/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark', 'link',
                    ] as $variant
                ) {
                    $button = new \Laminas\Form\Element\Button($variant, [
                        'label' => ucfirst($variant),
                        'variant' => $variant,
                    ]);
                    echo $view->formButton($button) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Button tags',
            'url' => '%bootstrap-url%/components/buttons/#button-tags',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // Link button
                $button = new \Laminas\Form\Element\Button('Link', [
                    'label' => 'Link',
                    'variant' => 'primary',
                    'tag' => 'a',
                ]);
                $button->setAttribute('href', '#');
                echo $view->formButton($button) . PHP_EOL;

                // Submit button
                $button = new \Laminas\Form\Element\Submit('Button', [
                    'label' => 'Button',
                    'variant' => 'primary',
                ]);
                echo $view->formButton($button) . PHP_EOL;
            },
        ],
        [
            'title' => 'Outline buttons',
            'url' => '%bootstrap-url%/components/buttons/#outline-buttons',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach (
                    [
                    'primary', 'secondary', 'success', 'danger',
                    'warning', 'info', 'light', 'dark',
                    ] as $variant
                ) {
                    $button = new \Laminas\Form\Element\Button($variant, [
                        'label' => ucfirst($variant),
                        'variant' => 'outline-' . $variant,
                    ]);
                    echo $view->formButton($button) . PHP_EOL;
                }
            },
        ],
        [
            'title' => 'Sizes',
            'url' => '%bootstrap-url%/components/buttons/#sizes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

                // Large buttons
                $button = new \Laminas\Form\Element\Button('large-button', [
                    'label' => 'Large button',
                    'variant' => 'primary',
                    'size' => 'lg',
                ]);
                echo $view->formButton($button) . PHP_EOL;

                $button = new \Laminas\Form\Element\Button('large-button', [
                    'label' => 'Large button',
                    'size' => 'lg',
                ]);
                echo $view->formButton($button) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                // Small buttons
                $button = new \Laminas\Form\Element\Button('small-button', [
                    'label' => 'Small button',
                    'variant' => 'primary',
                    'size' => 'sm',
                ]);
                echo $view->formButton($button) . PHP_EOL;

                $button = new \Laminas\Form\Element\Button('small-button', [
                    'label' => 'Small button',
                    'size' => 'sm',
                ]);
                echo $view->formButton($button) . PHP_EOL;

                echo '<br/><br/>' . PHP_EOL;

                // Block level buttons
                $button = new \Laminas\Form\Element\Button('block-level-button', [
                    'label' => 'Block level button',
                    'variant' => 'primary',
                    'size' => 'lg',
                    'block' => true,
                ]);
                echo $view->formButton($button) . PHP_EOL;

                $button = new \Laminas\Form\Element\Button('block-level-button', [
                    'label' => 'Block level button',
                    'size' => 'lg',
                    'block' => true,
                ]);
                echo $view->formButton($button) . PHP_EOL;
            },
        ],
    ],
];
