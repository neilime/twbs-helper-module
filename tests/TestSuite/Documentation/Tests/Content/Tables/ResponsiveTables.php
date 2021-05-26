<?php

// Documentation test config file for "Content / Tables / Responsive tables" part
return [
    'title' => 'Responsive tables',
    'url' => '%bootstrap-url%/content/tables/#responsive-tables',
    'tests' => [
        [
            'title' => 'Always responsive',
            'url' => '%bootstrap-url%/content/tables/#always-responsive',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->table([
                    'responsive' => true,
                    'head' => [
                        '#', 'Heading', 'Heading', 'Heading', 'Heading',
                        'Heading', 'Heading', 'Heading', 'Heading', 'Heading',
                    ],
                    'body' => [
                        ['1', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                        ['2', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                        ['3', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                    ],
                ]);
            },
        ],
        [
            'title' => 'Breakpoint specific',
            'url' => '%bootstrap-url%/content/tables/#breakpoint-specific',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                foreach ([true, 'sm', 'md', 'lg', 'xl'] as $key => $size) {
                    if ($key) {
                        echo PHP_EOL . '<br/>' . PHP_EOL;
                    }

                    echo $view->table([
                        'responsive' => $size,
                        'head' => [
                            '#', 'Heading', 'Heading', 'Heading', 'Heading',
                            'Heading', 'Heading', 'Heading', 'Heading', 'Heading',
                        ],
                        'body' => [
                            ['1', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                            ['2', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                            ['3', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell', 'Cell'],
                        ],
                    ]);
                }
            },
        ],
    ],
];
