<?php

// Documentation test config file for "Components / Scrollspy / Example with nested nav" part
return [
    'title' => 'Example with nested nav',
    'url' => '%bootstrap-url%/components/scrollspy/#example-with-nested-nav',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->gridRow([
            [
                $view->navigation()->navbar()->render(
                    new \Laminas\Navigation\Navigation(
                        [
                            [
                                'label' => 'Item 1',
                                'uri' => '#item-1',
                                'active' => true,
                                'pages' => [
                                    ['label' => 'Item 1-1', 'uri' => '#item-1-1', 'class' => 'ms-3 my-1'],
                                    ['label' => 'Item 1-2', 'uri' => '#item-1-2', 'class' => 'ms-3 my-1'],
                                ],
                            ],
                            ['label' => 'Item 2', 'uri' => '#item-2'],
                            [
                                'label' => 'Item 3',
                                'uri' => '#item-3',
                                'pages' => [
                                    ['label' => 'Item 3-1', 'uri' => '#item-3-1', 'class' => 'ms-3 my-1'],
                                    ['label' => 'Item 3-2', 'uri' => '#item-3-2', 'class' => 'ms-3 my-1'],
                                ],
                            ],
                        ],
                    ),
                    [
                        'brand' => 'Navbar',
                        'expand' => false,
                        'toggler' => false,
                        'collapse' => false,
                        'nav' => [
                            'vertical' => true,
                            'pills' => true,
                            'list' => false,
                        ],
                        'attributes' => ['id' => 'navbar-example3', 'class' => 'align-items-stretch flex-column p-3'],
                    ]
                ),
                ['column' => 4],
            ],
            [
                '<div class="scrollspy-example-2" data-bs-offset="0" data-bs-spy="scroll" ' .
                    'data-bs-target="#navbar-example3" tabindex="0">' . PHP_EOL .
                    '    <h4 id="item-1">Item 1</h4>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h5 id="item-1-1">Item 1-1</h5>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h5 id="item-1-2">Item 1-2</h5>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h4 id="item-2">Item 2</h4>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h4 id="item-3">Item 3</h4>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h5 id="item-3-1">Item 3-1</h5>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '    <h5 id="item-3-2">Item 3-2</h5>' . PHP_EOL .
                    '    <p>This is some placeholder content for the scrollspy page. ' .
                    'Note that as you scroll down the page, ' .
                    'the appropriate navigation link is highlighted. ' .
                    'It\'s repeated throughout the component example. ' .
                    'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' .
                    PHP_EOL .
                    '</div>',
                ['column' => 8],
            ]
        ]);
    },
];
