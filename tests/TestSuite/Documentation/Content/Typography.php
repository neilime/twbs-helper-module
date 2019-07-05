<?php

// Documentation test config file for "Content / Typography" part
return [
    'title' => 'Typography',
    'url' => '%bootstrap-url%/content/typography/',
    'tests' => [
        [
            'title' => 'Abbreviations',
            'url' => '%bootstrap-url%/content/typography/#abbreviations',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                // First abbreviation
                echo '<p>' . $oView->abbreviation('attr', 'attribute') . '</p>' . PHP_EOL;
                // Second abbreviation
                echo '<p>' . $oView->abbreviation('HTML', 'HyperText Markup Language', true) . '</p>';
            },
            'expected' => '<p><abbr title="attribute">attr</abbr></p>' . PHP_EOL .
                '<p><abbr title="HyperText&#x20;Markup&#x20;Language" class="initialism">HTML</abbr></p>',
        ],
        [
            'title' => 'Blockquotes',
            'url' => '%bootstrap-url%/content/typography/#blockquotes',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->blockquote(
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.'
                );
            },
            'expected' => '<blockquote class="blockquote">' . PHP_EOL .
                '    <p class="mb-0">' .
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.' .
                '</p>' . PHP_EOL .
                '</blockquote>',
            'tests' => [
                [
                    'title' => 'Naming a source',
                    'url' => '%bootstrap-url%/content/typography/#naming-a-source',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->blockquote(
                            // Content
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>',
                            [],
                            [],
                            [],
                            // Disable escaping
                            false
                        );
                    },
                    'expected' => '<blockquote class="blockquote">' . PHP_EOL .
                        '    <p class="mb-0">' .
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.' .
                        '</p>' . PHP_EOL .
                        '    <footer class="blockquote-footer">' .
                        'Someone famous in <cite title="Source Title">Source Title</cite>' .
                        '</footer>' . PHP_EOL .
                        '</blockquote>',
                ],
                [
                    'title' => 'Reverse layout',
                    'url' => '%bootstrap-url%/content/typography/#reverse-layout',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->blockquote(
                            // Content
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                            // Footer content
                            'Someone famous in <cite title="Source Title">Source Title</cite>',
                            ['class' => 'blockquote-reverse'],
                            [],
                            [],
                            // Disable escaping
                            false
                        );
                    },
                    'expected' => '<blockquote class="blockquote&#x20;blockquote-reverse">' . PHP_EOL .
                        '    <p class="mb-0">' .
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.' .
                        '</p>' . PHP_EOL .
                        '    <footer class="blockquote-footer">' .
                        'Someone famous in <cite title="Source Title">Source Title</cite>' .
                        '</footer>' . PHP_EOL .
                        '</blockquote>',
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
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->htmlList(
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
                    'expected' => '<ul class="list-unstyled">' . PHP_EOL .
                        '    <li>Lorem ipsum dolor sit amet</li>' . PHP_EOL .
                        '    <li>Consectetur adipiscing elit</li>' . PHP_EOL .
                        '    <li>Integer molestie lorem at massa</li>' . PHP_EOL .
                        '    <li>Facilisis in pretium nisl aliquet</li>' . PHP_EOL .
                        '    <li>' . PHP_EOL .
                        '        Nulla volutpat aliquam velit' . PHP_EOL .
                        '        <ul class="list-unstyled">' . PHP_EOL .
                        '            <li>Phasellus iaculis neque</li>' . PHP_EOL .
                        '            <li>Purus sodales ultricies</li>' . PHP_EOL .
                        '            <li>Vestibulum laoreet porttitor sem</li>' . PHP_EOL .
                        '            <li>Ac tristique libero volutpat at</li>' . PHP_EOL .
                        '        </ul>' . PHP_EOL .
                        '    </li>' . PHP_EOL .
                        '    <li>Faucibus porta lacus fringilla vel</li>' . PHP_EOL .
                        '    <li>Aenean sit amet erat nunc</li>' . PHP_EOL .
                        '    <li>Eget porttitor lorem</li>' . PHP_EOL .
                        '</ul>',
                ],
                [
                    'title' => 'Inline',
                    'url' => '%bootstrap-url%/content/typography/#inline',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->htmlList(
                            // List items
                            ['Lorem ipsum', 'Phasellus iaculis', 'Nulla volutpat',],
                            // Add "list-inline" class
                            ['class' => 'list-inline']
                        );
                    },
                    'expected' => '<ul class="list-inline">' . PHP_EOL .
                        '    <li class="list-inline-item">Lorem ipsum</li>' . PHP_EOL .
                        '    <li class="list-inline-item">Phasellus iaculis</li>' . PHP_EOL .
                        '    <li class="list-inline-item">Nulla volutpat</li>' . PHP_EOL .
                        '</ul>',
                ],
            ],
        ],
    ],
];
