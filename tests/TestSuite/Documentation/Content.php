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
                ),
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
    ),
);
