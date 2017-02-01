<?php

// Documentation test config file for "Content" part
return array(
    'title' => 'Content',
    'url' => 'https://v4-alpha.getbootstrap.com/content/',
    'tests' => array(
        array(
            'title' => 'Typography',
            'url' => 'https://v4-alpha.getbootstrap.com/content/typography/',
            'tests' => array(
                array(
                    'title' => 'Abbreviations',
                    'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#abbreviations',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        // First abbreviation
                        echo '<p>' . $oView->abbreviation('attr', 'attribute') . '</p>' . PHP_EOL;
                        // Second abbreviation
                        echo '<p>' . $oView->abbreviation('HTML', 'HyperText Markup Language', true) . '</p>';
                    },
                    'expected' => '<p><abbr title="attribute">attr</abbr></p>' . PHP_EOL . '<p><abbr title="HyperText&#x20;Markup&#x20;Language" class="initialism">HTML</abbr></p>',
                ),
                array(
                    'title' => 'Blockquotes',
                    'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#blockquotes',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->blockquote('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.');
                    },
                    'expected' => '<blockquote class="blockquote">' . PHP_EOL . '    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>' . PHP_EOL . '</blockquote>',
                    'tests' => array(
                        array(
                            'title' => 'Naming a source',
                            'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#naming-a-source',
                            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                                echo $oView->blockquote(
                                        // Content
                                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                                        // Footer content
                                        'Someone famous in <cite title="Source Title">Source Title</cite>', array(), array(), array(),
                                        // Disable escaping
                                        false
                                );
                            },
                            'expected' => '<blockquote class="blockquote">' . PHP_EOL .
                            '    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>' . PHP_EOL .
                            '    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>' . PHP_EOL .
                            '</blockquote>',
                        ),
                        array(
                            'title' => 'Reverse layout',
                            'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#reverse-layout',
                            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                                echo $oView->blockquote(
                                        // Content
                                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                                        // Footer content
                                        'Someone famous in <cite title="Source Title">Source Title</cite>', array('class' => 'blockquote-reverse'), array(), array(),
                                        // Disable escaping
                                        false
                                );
                            },
                            'expected' => '<blockquote class="blockquote-reverse&#x20;blockquote">' . PHP_EOL .
                            '    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>' . PHP_EOL .
                            '    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>' . PHP_EOL .
                            '</blockquote>',
                        ),
                    ),
                ),
                array(
                    'title' => 'List',
                    'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#lists',
                    'tests' => array(
                        array(
                            'title' => 'Unstyled',
                            'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#unstyled',
                            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                                // First abbreviation
                                echo $oView->htmlList(
                                        // List items
                                        array(
                                    'Lorem ipsum dolor sit amet',
                                    'Consectetur adipiscing elit',
                                    'Integer molestie lorem at massa',
                                    'Facilisis in pretium nisl aliquet',
                                    'Nulla volutpat aliquam velit',
                                    array(
                                        'Phasellus iaculis neque',
                                        'Purus sodales ultricies',
                                        'Vestibulum laoreet porttitor sem',
                                        'Ac tristique libero volutpat at',
                                    ),
                                    'Faucibus porta lacus fringilla vel',
                                    'Aenean sit amet erat nunc',
                                    'Eget porttitor lorem',
                                        ),
                                        // Do not order items
                                        false,
                                        // Add "list-unstyled" class
                                        array('class' => 'list-unstyled')
                                );
                            },
                            'expected' => '<ul class="list-unstyled">' . PHP_EOL .
                            '    <li>Lorem ipsum dolor sit amet</li>' . PHP_EOL .
                            '    <li>Consectetur adipiscing elit</li>' . PHP_EOL .
                            '    <li>Integer molestie lorem at massa</li>' . PHP_EOL .
                            '    <li>Facilisis in pretium nisl aliquet</li>' . PHP_EOL .
                            '    <li>Nulla volutpat aliquam velit' . PHP_EOL .
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
                            '</ul>' . PHP_EOL,
                        ),
                        array(
                            'title' => 'Inline',
                            'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#inline',
                            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                                // First abbreviation
                                echo $oView->htmlList(
                                        // List items
                                        array('Lorem ipsum', 'Phasellus iaculis', 'Nulla volutpat',),
                                        // Do not order items
                                        false,
                                        // Add "list-inline" class
                                        array('class' => 'list-inline')
                                );
                            },
                            'expected' => '<ul class="list-inline">' . PHP_EOL .
                            '    <li class="list-inline-item">Lorem ipsum</li>' . PHP_EOL .
                            '    <li class="list-inline-item">Phasellus iaculis</li>' . PHP_EOL .
                            '    <li class="list-inline-item">Nulla volutpat</li>' . PHP_EOL .
                            '</ul>' . PHP_EOL,
                        ),
                    ),
                ),
            ),
        ),
    ),
);
