<?php

// Documentation test config file for "Content / Typography" part
return [
    'title' => 'Typography',
    'url' => '%bootstrap-url%/content/typography/',
    'tests' => [
        [
            'title' => 'Abbreviations',
            'url' => '%bootstrap-url%/content/typography/#abbreviations',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // First abbreviation
                echo '<p>' . $view->abbreviation('attr', 'attribute') . '</p>' . PHP_EOL;
                // Second abbreviation
                echo '<p>' . $view->abbreviation('HTML', 'HyperText Markup Language', true) . '</p>';
            },
        ],
        [
            'title' => 'Blockquotes',
            'url' => '%bootstrap-url%/content/typography/#blockquotes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->blockquote(
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.'
                );
            },
            'tests' => [
                [
                    'title' => 'Naming a source',
                    'url' => '%bootstrap-url%/content/typography/#naming-a-source',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->blockquote(
                            // Content
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>'
                        );
                    },
                ],
                [
                    'title' => 'Alignment',
                    'url' => '%bootstrap-url%/content/typography/#alignment',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        // Center
                        echo $view->blockquote(
                            // Content
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>',
                            ['class' => 'text-center']
                        ) . PHP_EOL;

                        // Right
                        echo $view->blockquote(
                            // Content
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>',
                            ['class' => 'text-right']
                        ) . PHP_EOL;
                    },
                ],
            ],
        ],
        [
            'title' => 'List',
            'url' => '%bootstrap-url%/content/typography/#lists',
            'tests' => [
                [
                    'title' => 'Unstyled',
                    'url' => '%bootstrap-url%/content/typography/#unstyled',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->htmlList(
                            // List items
                            [
                                'Lorem ipsum dolor sit amet',
                                'Consectetur adipiscing elit',
                                'Integer molestie lorem at massa',
                                'Facilisis in pretium nisl aliquet',
                                'Nulla volutpat aliquam velit' => [
                                    'Phasellus iaculis neque',
                                    'Purus sodales ultricies',
                                    'Vestibulum laoreet porttitor sem',
                                    'Ac tristique libero volutpat at',
                                ],
                                'Faucibus porta lacus fringilla vel',
                                'Aenean sit amet erat nunc',
                                'Eget porttitor lorem',
                            ],
                            // Add "list-unstyled" class
                            ['class' => 'list-unstyled']
                        );
                    },
                ],
                [
                    'title' => 'Inline',
                    'url' => '%bootstrap-url%/content/typography/#inline',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->htmlList(
                            // List items
                            ['Lorem ipsum', 'Phasellus iaculis', 'Nulla volutpat',],
                            // Add "list-inline" class
                            ['class' => 'list-inline']
                        );
                    },
                ],
            ],
        ],
    ],
];
