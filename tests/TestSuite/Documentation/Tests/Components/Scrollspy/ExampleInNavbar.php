<?php

// Documentation test config file for "Components / Scrollspy / Example in navbar" part
return [
    'title' => 'Example in navbar',
    'url' => '%bootstrap-url%/components/scrollspy/#example-in-navbar',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(
                [
                    ['label' => 'First', 'uri' => '#scrollspyHeading1', 'active' => true],
                    ['label' => 'Second', 'uri' => '#scrollspyHeading2'],
                    [
                        'type' => \TwbsHelper\Navigation\Page\DropdownPage::class,
                        'label' => 'Dropdown',
                        'dropdown' => [
                            'items' => [
                                'Third' => ['attributes' => ['href' => '#scrollspyHeading3']],
                                'Fourth' => ['attributes' => ['href' => '#scrollspyHeading4']],
                                '---',
                                'Fifth' => ['attributes' => ['href' => '#scrollspyHeading5']],
                            ],
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
                    'pills' => true,
                ],
                'attributes' => ['id' => 'navbar-example2', 'class' => 'px-3'],

            ]
        ) . PHP_EOL;

        echo '<div class="scrollspy-example" data-bs-offset="0" data-bs-spy="scroll" ' .
            'data-bs-target="#navbar-example2" tabindex="0">' . PHP_EOL;
        foreach (
            [
                'First heading',
                'Second heading',
                'Third heading',
                'Fourth heading',
                'Fifth heading',
            ] as $key => $label
        ) {
            echo '    <h4 id="scrollspyHeading' . ($key + 1) . '">' . $label . '</h4>' . PHP_EOL .
                '    <p>This is some placeholder content for the scrollspy page. ' .
                'Note that as you scroll down the page, the appropriate navigation link is highlighted. ' .
                'It\'s repeated throughout the component example. ' .
                'We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>' . PHP_EOL;
        }
        echo '</div>';
    },
];
