<?php

// Documentation test config file for "Content / Typography" part
return [
    'title' => 'Typography',
    'url' => '%bootstrap-url%/content/typography/',
    'tests' => [
        [
            'title' => 'Lead',
            'url' => '%bootstrap-url%/content/typography/#lead',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->lead('This is a lead paragraph. It stands out from regular paragraphs.');
            },
        ],
        [
            'title' => 'Abbreviations',
            'url' => '%bootstrap-url%/content/typography/#abbreviations',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                // First abbreviation
                echo '<p>' . $view->abbreviation('attr', 'attribute') . '</p>';

                echo PHP_EOL;

                // Second abbreviation
                echo '<p>' . $view->abbreviation('HTML', 'HyperText Markup Language', true) . '</p>';
            },
        ],
        [
            'title' => 'Blockquotes',
            'url' => '%bootstrap-url%/content/typography/#blockquotes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->blockquote(
                    'A well-known quote, contained in a blockquote element.'
                );
            },
            'tests' => [
                [
                    'title' => 'Naming a source',
                    'url' => '%bootstrap-url%/content/typography/#naming-a-source',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->blockquote(
                            // Content
                            'A well-known quote, contained in a blockquote element.',
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
                            'A well-known quote, contained in a blockquote element.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>',
                            [],
                            [],
                            [],
                            // Class for figure wrapper
                            ["class" => "text-center"],
                        );

                        echo PHP_EOL;

                        // Right
                        echo $view->blockquote(
                            // Content
                            'A well-known quote, contained in a blockquote element.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>',
                            [],
                            [],
                            [],
                            // Class for figure wrapper
                            ['class' => 'text-end'],
                        );
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
                                'This is a list.',
                                'It appears completely unstyled.',
                                'Structurally, it\'s still a list.',
                                'However, this style only applies to immediate child elements.',
                                'Nested lists:' => [
                                    'are unaffected by this style',
                                    'will still show a bullet',
                                    'and have appropriate left margin',
                                ],
                                'This may still come in handy in some situations.',
                            ],
                            // Set "unstyled" flag
                            ['unstyled' => true],
                        );
                    },
                ],
                [
                    'title' => 'Inline',
                    'url' => '%bootstrap-url%/content/typography/#inline',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->htmlList(
                            // List items
                            ['This is a list item.', 'And another one.', 'But they\'re displayed inline.'],
                            // Set "inline" flag
                            ['inline' => true],
                        );
                    },
                ],
                [
                    'title' => 'Description list alignment',
                    'url' => '%bootstrap-url%/content/typography/#description-list-alignment',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->descriptionList(
                            [
                                'Description lists' => 'A description list is perfect for defining terms.',
                                'Term' => '<p>Definition for the term.</p>' . PHP_EOL .
                                    '<p>And some more placeholder definition text.</p>',
                                'Another term' => 'This definition is short, so no extra paragraphs or anything.',
                                'Truncated term is truncated' => [
                                    'term' => [
                                        'class' => 'text-truncate',
                                    ],
                                    'detail' => 'This can be useful when space is tight. Adds an ellipsis at the end.',
                                ],
                                'Nesting' => [
                                    'detail' => [
                                        'data' => [
                                            'Nested definition list' => [
                                                'term' => [
                                                    'column' => 'sm-4',
                                                ],
                                                'detail' => [
                                                    'data' => 'I heard you like definition lists. ' .
                                                        'Let me put a definition list inside your definition list.',
                                                    'column' => 'sm-8',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        );
                    },
                ],
            ],
        ],
    ],
];
