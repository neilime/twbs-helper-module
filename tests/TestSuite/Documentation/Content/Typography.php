<?php

// Documentation test config file for "Content / Typography" part
return [
    'title' => 'Typography',
    'url' => '%bootstrap-url%/content/typography/',
    'tests' => [
        [
            'title' => 'Lead',
            'url' => '%bootstrap-url%/content/typography/#lead',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->lead('This is a lead paragraph. It stands out from regular paragraphs.');
            },
            'expected' => '<p class="lead">This is a lead paragraph. It stands out from regular paragraphs.</p>',
        ],
        [
            'title' => 'Abbreviations',
            'url' => '%bootstrap-url%/content/typography/#abbreviations',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                // First abbreviation
                echo '<p>' . $oView->abbreviation('attr', 'attribute') . '</p>';

                echo PHP_EOL;

                // Second abbreviation
                echo '<p>' . $oView->abbreviation('HTML', 'HyperText Markup Language', true) . '</p>';
            },
            'expected' => '<p><abbr title="attribute">attr</abbr></p>' . PHP_EOL .
                '<p><abbr class="initialism" title="HyperText&#x20;Markup&#x20;Language">HTML</abbr></p>',
        ],
        [
            'title' => 'Blockquotes',
            'url' => '%bootstrap-url%/content/typography/#blockquotes',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->blockquote(
                    'A well-known quote, contained in a blockquote element.'
                );
            },
            'expected' => '<blockquote class="blockquote">' . PHP_EOL .
                '    <p>' .
                'A well-known quote, contained in a blockquote element.' .
                '</p>' . PHP_EOL .
                '</blockquote>',
            'tests' => [
                [
                    'title' => 'Naming a source',
                    'url' => '%bootstrap-url%/content/typography/#naming-a-source',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->blockquote(
                            // Content
                            'A well-known quote, contained in a blockquote element.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>'
                        );
                    },
                    'expected' => '<figure>' . PHP_EOL .
                        '    <blockquote class="blockquote">' . PHP_EOL .
                        '        <p>A well-known quote, contained in a blockquote element.</p>' . PHP_EOL .
                        '    </blockquote>' . PHP_EOL .
                        '    <figcaption class="blockquote-footer">' .
                        'Someone famous in <cite title="Source Title">Source Title</cite>' .
                        '</figcaption>' . PHP_EOL .
                        '</figure>',
                ],
                [
                    'title' => 'Alignment',
                    'url' => '%bootstrap-url%/content/typography/#alignment',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        // Center
                        echo $oView->blockquote(
                            // Content
                            'A well-known quote, contained in a blockquote element.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>',
                            [],
                            [],
                            [],
                            // Class for figure wrapper
                            ["class" => "text-center"]
                        );

                        echo PHP_EOL;

                        // Right
                        echo $oView->blockquote(
                            // Content
                            'A well-known quote, contained in a blockquote element.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>',
                            [],
                            [],
                            [],
                            // Class for figure wrapper
                            ['class' => 'text-end']
                        );
                    },
                    'expected' => '<figure class="text-center">' . PHP_EOL .
                        '    <blockquote class="blockquote">' . PHP_EOL .
                        '        <p>A well-known quote, contained in a blockquote element.</p>' . PHP_EOL .
                        '    </blockquote>' . PHP_EOL .
                        '    <figcaption class="blockquote-footer">' .
                        'Someone famous in <cite title="Source Title">Source Title</cite>' .
                        '</figcaption>' . PHP_EOL .
                        '</figure>' . PHP_EOL .
                        '<figure class="text-end">' . PHP_EOL .
                        '    <blockquote class="blockquote">' . PHP_EOL .
                        '        <p>A well-known quote, contained in a blockquote element.</p>' . PHP_EOL .
                        '    </blockquote>' . PHP_EOL .
                        '    <figcaption class="blockquote-footer">' .
                        'Someone famous in <cite title="Source Title">Source Title</cite>' .
                        '</figcaption>' . PHP_EOL .
                        '</figure>',
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
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->htmlList(
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
                            // Add "list-unstyled" class
                            ['class' => 'list-unstyled']
                        );
                    },
                    'expected' => '<ul class="list-unstyled">' . PHP_EOL .
                        '    <li>This is a list.</li>' . PHP_EOL .
                        '    <li>It appears completely unstyled.</li>' . PHP_EOL .
                        '    <li>Structurally, it&amp;#039;s still a list.</li>' . PHP_EOL .
                        '    <li>However, this style only applies to immediate child elements.</li>' . PHP_EOL .
                        '    <li>' . PHP_EOL .
                        '        Nested lists:' . PHP_EOL .
                        '        <ul class="list-unstyled">' . PHP_EOL .
                        '            <li>are unaffected by this style</li>' . PHP_EOL .
                        '            <li>will still show a bullet</li>' . PHP_EOL .
                        '            <li>and have appropriate left margin</li>' . PHP_EOL .
                        '        </ul>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li>This may still come in handy in some situations.</li>' . PHP_EOL .
                        '</ul>',
                ],
                [
                    'title' => 'Inline',
                    'url' => '%bootstrap-url%/content/typography/#inline',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->htmlList(
                            // List items
                            ['This is a list item.', 'And another one.', 'But they\'re displayed inline.'],
                            // Set "inline" flag
                            ['inline' => true]
                        );
                    },
                    'expected' => '<ul class="list-inline">' . PHP_EOL .
                        '    <li class="list-inline-item">This is a list item.</li>' . PHP_EOL .
                        '    <li class="list-inline-item">And another one.</li>' . PHP_EOL .
                        '    <li class="list-inline-item">But they&amp;#039;re displayed inline.</li>' . PHP_EOL .
                        '</ul>',
                ],
                [
                    'title' => 'Description list alignment',
                    'url' => '%bootstrap-url%/content/typography/#description-list-alignment',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->descriptionList(
                            [
                                'Description lists' => 'A description list is perfect for defining terms.',
                                'Term' => '<p>Definition for the term.</p>' . PHP_EOL .
                                    '<p>And some more placeholder definition text.</p>',
                                'Another term' => 'This definition is short, so no extra paragraphs or anything.',
                                'Truncated term is truncated' => [
                                    'term' => [
                                        'class' => 'text-truncate'
                                    ],
                                    'detail' => 'This can be useful when space is tight. Adds an ellipsis at the end.',
                                ],
                                'Nesting' => [
                                    'detail' => [
                                        'data' => [
                                            'Nested definition list' => [
                                                'term' => [
                                                    'column' => 'sm-4'
                                                ],
                                                'detail' => [
                                                    'data' => 'I heard you like definition lists. ' .
                                                        'Let me put a definition list inside your definition list.',
                                                    'column' => 'sm-8'
                                                ]
                                            ]
                                        ],
                                    ]
                                ],
                            ],
                        );
                    },
                    'expected' => '<dl class="row">' . PHP_EOL .
                        '    <dt class="col-sm-3">Description lists</dt>' . PHP_EOL .
                        '    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>' . PHP_EOL .
                        '    <dt class="col-sm-3">Term</dt>' . PHP_EOL .
                        '    <dd class="col-sm-9">' . PHP_EOL .
                        '        <p>Definition for the term.</p>' . PHP_EOL .
                        '        <p>And some more placeholder definition text.</p>' . PHP_EOL .
                        '    </dd>' . PHP_EOL .
                        '    <dt class="col-sm-3">Another term</dt>' . PHP_EOL .
                        '    <dd class="col-sm-9">' .
                        'This definition is short, so no extra paragraphs or anything.' .
                        '</dd>' . PHP_EOL .
                        '    <dt class="col-sm-3&#x20;text-truncate">Truncated term is truncated</dt>' . PHP_EOL .
                        '    <dd class="col-sm-9">' .
                        'This can be useful when space is tight. Adds an ellipsis at the end.' .
                        '</dd>' . PHP_EOL .
                        '    <dt class="col-sm-3">Nesting</dt>' . PHP_EOL .
                        '    <dd class="col-sm-9">' . PHP_EOL .
                        '        <dl class="row">' . PHP_EOL .
                        '            <dt class="col-sm-4">Nested definition list</dt>' . PHP_EOL .
                        '            <dd class="col-sm-8">' .
                        'I heard you like definition lists. Let me put a definition list inside your definition list.' .
                        '</dd>' . PHP_EOL .
                        '        </dl>' . PHP_EOL .
                        '    </dd>' . PHP_EOL .
                        '</dl>'
                ],
            ],
        ],
    ],
];
