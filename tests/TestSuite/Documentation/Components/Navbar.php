<?php

// Documentation test config file for "Components / Navbar" part
return [
    'title' => 'Navbar',
    'url' => '%bootstrap-url%/components/navbar/',
    'tests' => [
        [
            'title' => 'Supported content',
            'url' => '%bootstrap-url%/components/navbar/#supported-content',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->navigation()->navbar()->render(
                    new \Zend\Navigation\Navigation([
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
                                        'options' => [
                                            'label' => 'Search',
                                            'form_group' => false,
                                        ],
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
                '    <a href="&#x23;" class="navbar-brand">Navbar</a>' . PHP_EOL .
                '    <button type="button" name="navbar_toggler" class="navbar-toggler" data-toggle="collapse" ' .
                'aria-expanded="false" aria-label="Toggle&#x20;navigation" ' .
                'data-target="&#x23;navbarSupportedContent" aria-controls="navbarSupportedContent" value="">' .
                '<span class="navbar-toggler-icon"></span>' .
                '</button>' . PHP_EOL .
                '    <div id="navbarSupportedContent" class="collapse&#x20;navbar-collapse">' . PHP_EOL .
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
                '                    <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                '                    <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                '                    <div class="dropdown-divider"></div>' . PHP_EOL .
                '                    <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                '                </div>' . PHP_EOL .
                '            </li>' . PHP_EOL .
                '            <li class="nav-item">' . PHP_EOL .
                '                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                'Disabled</a>' . PHP_EOL .
                '            </li>' . PHP_EOL .
                '        </ul>' . PHP_EOL .
                '        <form method="POST" name="form" class="form-inline&#x20;my-2&#x20;my-lg-0" role="form" ' .
                'id="form">' . PHP_EOL .
                '            <label class="sr-only" for="search">Search</label>' . PHP_EOL .
                '            <input name="search" type="search" placeholder="Search" aria-label="Search" ' .
                'class="form-control&#x20;mr-sm-2" value="">' . PHP_EOL .
                '            <button type="submit" name="submit" ' .
                'class="btn&#x20;btn-outline-success&#x20;my-2&#x20;my-sm-0" value="">Search</button>' . PHP_EOL .
                '        </form>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</nav>',
            'tests' => [
                [
                    'title' => 'Brand',
                    'url' => '%bootstrap-url%/components/navbar/#brand',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        // As a link
                        echo $oView->navigation()->navbar()->render(
                            new \Zend\Navigation\Navigation(),
                            [
                                'brand' => 'Navbar',
                                'expand' => false,
                                'toggler' => false,
                            ]
                        );

                        echo PHP_EOL . '<br>' . PHP_EOL;

                        // As a heading
                        echo $oView->navigation()->navbar()->render(
                            new \Zend\Navigation\Navigation(),
                            [
                                'brand' => [
                                    'content' => 'Navbar',
                                    'attributes' => ['class' => 'mb-0 h1'],
                                    'type' => 'heading',
                                ],
                                'expand' => false,
                                'toggler' => false,
                            ]
                        );

                        echo PHP_EOL . '<br>' . PHP_EOL;

                        // Just an image
                        echo $oView->navigation()->navbar()->render(
                            new \Zend\Navigation\Navigation(),
                            [
                                'brand' => [
                                    'img' => [
                                        'images/demo/bootstrap-solid.svg',
                                    ],
                                ],
                                'expand' => false,
                                'toggler' => false,
                            ]
                        );

                        echo PHP_EOL . '<br>' . PHP_EOL;

                        // Image and text
                        echo $oView->navigation()->navbar()->render(
                            new \Zend\Navigation\Navigation(),
                            [
                                'brand' => [
                                    'content' => 'Bootstrap',
                                    'img' => [
                                        'images/demo/bootstrap-solid.svg',
                                        [
                                            'width' => 30,
                                            'height' => 30,
                                            'alt' => '',
                                        ],
                                    ],
                                ],
                                'expand' => false,
                                'toggler' => false,
                            ]
                        );
                    },
                    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
                        '    <a href="&#x23;" class="navbar-brand">Navbar</a>' . PHP_EOL .
                        '</nav>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
                        '    <span class="h1&#x20;mb-0&#x20;navbar-brand">Navbar</span>' . PHP_EOL .
                        '</nav>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
                        '    <a href="&#x23;" class="navbar-brand">' .
                        '<img width="30" height="30" alt="" ' .
                        'src="images&#x2F;demo&#x2F;bootstrap-solid.svg"></a>' . PHP_EOL .
                        '</nav>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<nav class="bg-light&#x20;navbar&#x20;navbar-light">' . PHP_EOL .
                        '    <a href="&#x23;" class="navbar-brand">' . PHP_EOL .
                        '        <img width="30" height="30" alt="" class="d-inline-block&#x20;align-top" ' .
                        'src="images&#x2F;demo&#x2F;bootstrap-solid.svg">' . PHP_EOL .
                        '        Bootstrap' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</nav>',
                ],
                [
                    'title' => 'Nav',
                    'url' => '%bootstrap-url%/components/navbar/#nav',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->navigation()->navbar()->render(
                            new \Zend\Navigation\Navigation([
                                [
                                    'label' => 'Home <span class="sr-only">(current)</span>',
                                    'uri' => '#',
                                    'active' => true,
                                ],
                                ['label' => 'Features', 'uri' => '#'],
                                ['label' => 'Pricing', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'brand' => 'Navbar',
                                'attributes' => ['id' => 'navbarNav'],
                            ]
                        );

                        echo PHP_EOL . '<br>' . PHP_EOL;

                        // Avoid the list-based approach
                        echo $oView->navigation()->navbar()->render(
                            new \Zend\Navigation\Navigation([
                                [
                                    'label' => 'Home <span class="sr-only">(current)</span>',
                                    'uri' => '#',
                                    'active' => true,
                                ],
                                ['label' => 'Features', 'uri' => '#'],
                                ['label' => 'Pricing', 'uri' => '#'],
                                ['label' => 'Disabled', 'uri' => '#', 'visible' => false],
                            ]),
                            [
                                'brand' => 'Navbar',
                                'attributes' => ['id' => 'navbarNavAltMarkup'],
                                'nav' => ['list' => false],
                            ]
                        );

                        echo PHP_EOL . '<br>' . PHP_EOL;

                        echo $oView->navigation()->navbar()->render(
                            new \Zend\Navigation\Navigation([
                                [
                                    'label' => 'Home <span class="sr-only">(current)</span>',
                                    'uri' => '#',
                                    'active' => true,
                                ],
                                ['label' => 'Features', 'uri' => '#'],
                                ['label' => 'Pricing', 'uri' => '#'],
                                [
                                    'type' => '\TwbsHelper\Navigation\Page\DropdownPage',
                                    'label' => 'Dropdown link',
                                    'dropdown' => [
                                        'items' => [
                                            'Action',
                                            'Another action',
                                            'Something else here',
                                        ],
                                        'attributes' => ['id' => 'navbarDropdownMenuLink'],
                                    ],
                                ],
                            ]),
                            [
                                'brand' => 'Navbar',
                                'attributes' => ['id' => 'navbarNavDropdown'],
                            ]
                        );
                    },
                    'expected' => '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' .
                        PHP_EOL .
                        '    <a href="&#x23;" class="navbar-brand">Navbar</a>' . PHP_EOL .
                        '    <button type="button" name="navbar_toggler" class="navbar-toggler" ' .
                        'data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" ' .
                        'data-target="&#x23;navbarNav" aria-controls="navbarNav" value="">' .
                        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
                        '    <div id="navbarNav" class="collapse&#x20;navbar-collapse">' . PHP_EOL .
                        '        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
                        '            <li class="&#x20;nav-item">' . PHP_EOL .
                        '                <a class="nav-link&#x20;active" href="&#x23;">' .
                        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
                        '            </li>' . PHP_EOL .
                        '            <li class="nav-item">' . PHP_EOL .
                        '                <a class="nav-link" href="&#x23;">Features</a>' . PHP_EOL .
                        '            </li>' .
                        PHP_EOL .
                        '            <li class="nav-item">' . PHP_EOL .
                        '                <a class="nav-link" href="&#x23;">Pricing</a>' . PHP_EOL .
                        '            </li>' . PHP_EOL .
                        '            <li class="nav-item">' . PHP_EOL .
                        '                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" ' .
                        'aria-disabled="true">Disabled</a>' . PHP_EOL .
                        '            </li>' . PHP_EOL .
                        '        </ul>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</nav>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' . PHP_EOL .
                        '    <a href="&#x23;" class="navbar-brand">Navbar</a>' . PHP_EOL .
                        '    <button type="button" name="navbar_toggler" class="navbar-toggler" ' .
                        'data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" ' .
                        'data-target="&#x23;navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" value="">' .
                        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
                        '    <div id="navbarNavAltMarkup" class="collapse&#x20;navbar-collapse">' . PHP_EOL .
                        '        <nav class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
                        '            <a class="nav-link&#x20;active" href="&#x23;">' .
                        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
                        '            <a class="nav-link" href="&#x23;">Features</a>' . PHP_EOL .
                        '            <a class="nav-link" href="&#x23;">Pricing</a>' . PHP_EOL .
                        '            <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" ' .
                        'aria-disabled="true">Disabled</a>' . PHP_EOL .
                        '        </nav>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</nav>' . PHP_EOL .
                        '<br>' . PHP_EOL .
                        '<nav class="bg-light&#x20;navbar&#x20;navbar-expand-lg&#x20;navbar-light">' .
                        PHP_EOL .
                        '    <a href="&#x23;" class="navbar-brand">Navbar</a>' . PHP_EOL .
                        '    <button type="button" name="navbar_toggler" class="navbar-toggler" ' .
                        'data-toggle="collapse" aria-expanded="false" aria-label="Toggle&#x20;navigation" ' .
                        'data-target="&#x23;navbarNavDropdown" aria-controls="navbarNavDropdown" value="">' .
                        '<span class="navbar-toggler-icon"></span></button>' . PHP_EOL .
                        '    <div id="navbarNavDropdown" class="collapse&#x20;navbar-collapse">' . PHP_EOL .
                        '        <ul class="mr-auto&#x20;nav&#x20;navbar-nav">' . PHP_EOL .
                        '            <li class="&#x20;nav-item">' . PHP_EOL .
                        '                <a class="nav-link&#x20;active" href="&#x23;">' .
                        'Home <span class="sr-only">(current)</span></a>' . PHP_EOL .
                        '            </li>' . PHP_EOL .
                        '            <li class="nav-item">' . PHP_EOL .
                        '                <a class="nav-link" href="&#x23;">Features</a>' . PHP_EOL .
                        '            </li>' . PHP_EOL .
                        '            <li class="nav-item">' . PHP_EOL .
                        '                <a class="nav-link" href="&#x23;">Pricing</a>' . PHP_EOL .
                        '            </li>' . PHP_EOL .
                        '            <li class="dropdown&#x20;nav-item">' . PHP_EOL .
                        '                <a id="navbarDropdownMenuLink" class="dropdown-toggle&#x20;nav-link" ' .
                        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
                        'href="&#x23;">Dropdown link</a>' . PHP_EOL .
                        '                <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">'
                        . PHP_EOL .
                        '                    <a href="&#x23;" class="dropdown-item">Action</a>' . PHP_EOL .
                        '                    <a href="&#x23;" class="dropdown-item">Another action</a>' . PHP_EOL .
                        '                    <a href="&#x23;" class="dropdown-item">Something else here</a>' . PHP_EOL .
                        '                </div>' . PHP_EOL .
                        '            </li>' . PHP_EOL .
                        '        </ul>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</nav>',
                ],
            ],
        ],
    ],
];
