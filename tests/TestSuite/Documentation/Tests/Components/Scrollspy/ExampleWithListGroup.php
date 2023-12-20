<?php

// Documentation test config file for "Components / Scrollspy / Example with list-group" part
return [
    'title' => 'Example with list-group',
    'url' => '%bootstrap-url%/components/scrollspy/#example-with-list-group',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->gridRow([
            [
                $view->listGroup([
                    'Item 1' => ['attributes' => ['href' => '#list-item-1'], 'active' => true],
                    'Item 2' => ['attributes' => ['href' => '#list-item-2']],
                    'Item 3' => ['attributes' => ['href' => '#list-item-3']],
                    'Item 4' => ['attributes' => ['href' => '#list-item-4']],

                ], ['type' => 'action', 'id' => 'list-example']),
                ['column' => 4],
            ],
            [
                '<div class="scrollspy-example" data-bs-offset="0" data-bs-spy="scroll" ' .
                    'data-bs-target="#list-example" tabindex="0">' . PHP_EOL .
                    '    <h4 id="list-item-1">Item 1</h4>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h4 id="list-item-2">Item 2</h4>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h4 id="list-item-3">Item 3</h4>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h4 id="list-item-4">Item 4</h4>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '</div>',
                ['column' => 8],
            ],
        ]);
    },
];
