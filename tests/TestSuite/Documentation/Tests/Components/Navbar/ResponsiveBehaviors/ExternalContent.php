<?php

// Documentation test config file for "Components / Navbar / Responsive behaviors / External content" part
return [
    'title' => 'External content',
    'url' => '%bootstrap-url%/components/navbar/#external-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->collapse([
            'targets' => [
                [
                    'content' => '<div class="bg-dark p-4">' . PHP_EOL .
                        '    <h5 class="text-white h4">Collapsed content</h5>' . PHP_EOL .
                        '    <span class="text-muted">Toggleable via the navbar brand.</span>' . PHP_EOL .
                        '</div>',
                    'attributes' => [
                        'id' => 'navbarToggleExternalContent',
                    ],
                ],
            ],
        ]) . PHP_EOL;

        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'expand' => false,
                'toggler' => [
                    'attributes' => [
                        'data-bs-target' => '#navbarToggleExternalContent',
                    ],
                ],
                'container' => 'fluid',
                'background' => 'dark',
                'variant' => 'dark',
            ]
        );
    },
];
