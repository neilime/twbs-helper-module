<?php

// Documentation test config file for "Components / Dropdowns / Menu items" part
return [
    'title' => 'Menu items',
    'url' => '%bootstrap-url%/components/dropdowns/#menu-items',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        echo $oView->formButton([
            'name' => 'dropdown',
            'options' => [
                'label' => 'Dropdown',
                'dropdown' => ['Action', 'Another action', 'Something else here'],
            ],
            'attributes' => ['id' => 'dropdownMenu2'],
        ]);

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Non-interactive dropdown items
        echo $oView->dropdown()->renderMenu([
            'Dropdown item text' => \TwbsHelper\View\Helper\Dropdown::TYPE_ITEM_TEXT,
            'Action',
            'Another action',
            'Something else here'
        ]);
    },
    'expected' => '<div class="dropdown">' . PHP_EOL .
        '    <button type="button" name="dropdown" id="dropdownMenu2" ' .
        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' .
        'class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">' .
        'Dropdown</button>' . PHP_EOL .
        '    <div aria-labelledby="dropdownMenu2" class="dropdown-menu">' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '        <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<br/>' . PHP_EOL .
        '<div class="dropdown-menu">' . PHP_EOL .
        '    <span class="dropdown-item-text">Dropdown item text</span>' . PHP_EOL .
        '    <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '    <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '    <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '</div>',
    'tests' => [
        [
            'title' => 'Active',
            'url' => '%bootstrap-url%/components/dropdowns/#active',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->dropdown()->renderMenu([
                    'Regular link',
                    'Active link' => ['active' => true],
                    'Another link'
                ]);
            },
            'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Regular link</a>' . PHP_EOL .
                '    <a class="active&#x20;dropdown-item" href="&#x23;">Active link</a>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Another link</a>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Disabled',
            'url' => '%bootstrap-url%/components/dropdowns/#disabled',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->dropdown()->renderMenu([
                    'Regular link',
                    'Disabled link' => ['disabled' => true],
                    'Another link'
                ]);
            },
            'expected' => '<div class="dropdown-menu">' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Regular link</a>' . PHP_EOL .
                '    <a aria-disabled="true" class="disabled&#x20;dropdown-item" href="&#x23;" tabindex="-1">' .
                'Disabled link</a>' . PHP_EOL .
                '    <a class="dropdown-item" href="&#x23;">Another link</a>' . PHP_EOL .
                '</div>',
        ],
    ],
];
