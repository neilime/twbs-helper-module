<?php

// Documentation test config file for "Components / Navbar / Supported content" part
return [
    'title' => 'Supported content',
    'url' => '%bootstrap-url%/components/navbar/#supported-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                ['label' => 'Home <span class="sr-only">(current)</span>', 'uri' => '#', 'active' => true],
                ['label' => 'Link', 'uri' => '#'],
                [
                    'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
                    'label' => 'Dropdown',
                    'dropdown' => [
                        'items' => [
                            'Action',
                            'Another action',
                            '---',
                            'Something else here',
                        ],
                        'attributes' => ['id' => 'navbarDropdown'],
                    ],
                ],
                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
            ]),
            [
                'brand' => 'Navbar',
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'search',
                                'attributes' => [
                                    'type' => 'search',
                                    'placeholder' => 'Search',
                                    'aria-label' => 'Search',
                                    'class' => 'mr-sm-2',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => [
                                    'label' => 'Search',
                                    'variant' => 'outline-success',
                                ],
                                'attributes' => [
                                    'class' => 'my-2 my-sm-0',
                                ],
                            ],
                        ],
                    ],
                    'attributes' => ['class' => 'my-2 my-lg-0'],
                ],
                'attributes' => ['id' => 'navbarSupportedContent'],
            ]
        );
    },
    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' . PHP_EOL .
        '    <a class="navbar-brand" href="&#x23;">Navbar</a>' . PHP_EOL .
        '    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" ' .
        'aria-expanded="false" aria-label="Toggle&#x20;navigation" ' .
        'data-target="&#x23;navbarSupportedContent" aria-controls="navbarSupportedContent" value="">' .
        '<span class="navbar-toggler-icon"></span>' .
        '</button>' . PHP_EOL .
        '    <div class="collapse&#x20;navbar-collapse" id="navbarSupportedContent">' . PHP_EOL .
        '        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
        '            <li class="&#x20;nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;active" href="&#x23;">' .
        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="dropdown&#x20;nav-item">' . PHP_EOL .
        '                <a id="navbarDropdown" class="dropdown-toggle&#x20;nav-link" data-toggle="dropdown" ' .
        'role="button" aria-haspopup="true" aria-expanded="false" href="&#x23;">Dropdown</a>' . PHP_EOL .
        '                <div aria-labelledby="navbarDropdown" class="dropdown-menu">' . PHP_EOL .
        '                    <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '                    <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '                    <div class="dropdown-divider"></div>' . PHP_EOL .
        '                    <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '                </div>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '            <li class="nav-item">' . PHP_EOL .
        '                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
        'Disabled</a>' . PHP_EOL .
        '            </li>' . PHP_EOL .
        '        </ul>' . PHP_EOL .
        '        <form action="" method="POST" name="form" class="align-items-center&#x20;my-2&#x20;my-lg-0" ' .
        'role="form" id="form">' . PHP_EOL .
        '            <input name="search" type="search" placeholder="Search" aria-label="Search" ' .
        'class="form-control&#x20;mr-sm-2" value=""/>' . PHP_EOL .
        '            <button type="submit" name="submit" ' .
        'class="btn&#x20;btn-outline-success&#x20;my-2&#x20;my-sm-0" value="">Search</button>' . PHP_EOL .
        '        </form>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</nav>',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'SupportedContent/Brand.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'SupportedContent/Nav.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'SupportedContent/Forms.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'SupportedContent/Text.php',
    ],
];
