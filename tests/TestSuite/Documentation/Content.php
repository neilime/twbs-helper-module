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
                        return '<p>' . $oView->abbreviation('attr', 'attribute') . '</p>' . PHP_EOL .
                                // Second abbreviation
                                '<p>' . $oView->abbreviation('HTML', 'HyperText Markup Language', true) . '</p>';
                    },
                    'expected' => '<p><abbr title="attribute">attr</abbr></p>' . PHP_EOL . '<p><abbr title="HyperText&#x20;Markup&#x20;Language" class="initialism">HTML</abbr></p>',
                ),
                array(
                    'title' => 'Blockquotes',
                    'url' => 'https://v4-alpha.getbootstrap.com/content/typography/#blockquotes',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        return $oView->blockquote('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.');
                    },
                    'expected' => '<blockquote class="blockquote">' . PHP_EOL . '    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>' . PHP_EOL . '</blockquote>',
                ),
            ),
        ),
    ),
);
