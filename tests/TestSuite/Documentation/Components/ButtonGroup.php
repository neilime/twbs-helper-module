<?php

// Documentation test config file for "Components / Button group" part
return [
    'title' => 'Button group',
    'url' => '%bootstrap-url%/components/button-group/',
    'tests' => [
        [
            'title' => 'Basic example',
            'url' => '%bootstrap-url%/components/button-group/#basic-example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->buttonGroup([
                    // Create button via \Zend\Form\Factory
                    ['type' => 'button', 'name' => 'left', 'options' =>  ['label' => 'Left']],
                    // Button object
                    new \Zend\Form\Element\Button('middle', ['label' => 'Middle']),
                    ['type' => 'button', 'name' => 'right', 'options' =>  ['label' => 'Right']],
                ], ['attributes' => ['role' => 'group', 'aria-label' => 'Basic example']]);
            },
            'expected' => '<div role="group" aria-label="Basic&#x20;example" class="btn-group">' . PHP_EOL .
                '    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>'
                . PHP_EOL .
                '    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>'
                . PHP_EOL .
                '    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>'
                . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Button toolbar',
            'url' => '%bootstrap-url%/components/button-group/#button-toolbar',
            'tests' => [
                [
                    'title' => 'Combine sets of button groups',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->buttonToolbar([
                            [
                                'buttons' => [
                                    new \Zend\Form\Element\Button('1', ['label' => '1']),
                                    new \Zend\Form\Element\Button('2', ['label' => '2']),
                                    new \Zend\Form\Element\Button('3', ['label' => '3']),
                                    new \Zend\Form\Element\Button('4', ['label' => '4']),
                                ],
                                'options' => [
                                    'attributes' => [
                                        'role' => 'group',
                                        'aria-label' => 'First group',
                                        'class' => 'mr-2',
                                    ],
                                ],
                            ],
                            [
                                'buttons' => [
                                    new \Zend\Form\Element\Button('5', ['label' => '5']),
                                    new \Zend\Form\Element\Button('6', ['label' => '6']),
                                    new \Zend\Form\Element\Button('7', ['label' => '7']),
                                ],
                                'options' => [
                                    'attributes' => [
                                        'role' => 'group',
                                        'aria-label' =>
                                        'Second group',
                                        'class' => 'mr-2',
                                    ],
                                ],
                            ],
                            [
                                'buttons' => [
                                    new \Zend\Form\Element\Button('8', ['label' => '8']),
                                ],
                                'options' => [
                                    'attributes' => [
                                        'role' => 'group',
                                        'aria-label' => 'Third group',
                                        'class' => 'mr-2',
                                    ],
                                ],
                            ],
                        ], ['attributes' => ['role' => 'toolbar', 'aria-label' => 'Toolbar with button groups']]);
                    },
                    'expected' =>
                    '<div role="toolbar" aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" class="btn-toolbar">'
                        . PHP_EOL .
                        '    <div role="group" aria-label="First&#x20;group" class="btn-group&#x20;mr-2">' . PHP_EOL .
                        '        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>'
                        . PHP_EOL .
                        '        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>'
                        . PHP_EOL .
                        '        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>'
                        . PHP_EOL .
                        '        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>'
                        . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <div role="group" aria-label="Second&#x20;group" class="btn-group&#x20;mr-2">' . PHP_EOL .
                        '        <button type="button" name="5" class="btn&#x20;btn-secondary" value="">5</button>'
                        . PHP_EOL .
                        '        <button type="button" name="6" class="btn&#x20;btn-secondary" value="">6</button>'
                        . PHP_EOL .
                        '        <button type="button" name="7" class="btn&#x20;btn-secondary" value="">7</button>'
                        . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <div role="group" aria-label="Third&#x20;group" class="btn-group&#x20;mr-2">' . PHP_EOL .
                        '        <button type="button" name="8" class="btn&#x20;btn-secondary" value="">8</button>'
                        . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Mix input groups with button groups',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        $aToolbarItems = [
                            [
                                'buttons' => [
                                    new \Zend\Form\Element\Button('1', ['label' => '1']),
                                    new \Zend\Form\Element\Button('2', ['label' => '2']),
                                    new \Zend\Form\Element\Button('3', ['label' => '3']),
                                    new \Zend\Form\Element\Button('4', ['label' => '4']),
                                ],
                                'options' => [
                                    'attributes' => [
                                        'role' => 'group',
                                        'aria-label' => 'First group',
                                        'class' => 'mr-2',
                                    ],
                                ],
                            ],
                            [
                                'type' => \Zend\Form\Element\Text::class,
                                'name' => 'input-group-example',
                                'options' => ['add-on-prepend' => '@'],
                                'attributes' => [
                                    'placeholder' => 'Input group example',
                                    'aria-label' => 'Input group example',
                                    'aria-describedby' => 'btnGroupAddon',
                                ],
                            ],
                        ];

                        echo $oView->buttonToolbar(
                            $aToolbarItems,
                            [
                                'attributes' => [
                                    'role' => 'toolbar',
                                    'aria-label' =>
                                    'Toolbar with button groups',
                                    'class' => 'mb-3',
                                ],
                            ]
                        ) . PHP_EOL;

                        // Justified content
                        echo $oView->buttonToolbar(
                            $aToolbarItems,
                            [
                                'attributes' => [
                                    'role' => 'toolbar',
                                    'aria-label' =>
                                    'Toolbar with button groups',
                                    'class' => 'justify-content-between',
                                ],
                            ]
                        );
                    },
                    'expected' => '<div role="toolbar" aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" ' .
                        'class="btn-toolbar&#x20;mb-3">' . PHP_EOL .
                        '    <div role="group" aria-label="First&#x20;group" class="btn-group&#x20;mr-2">' . PHP_EOL .
                        '        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>'
                        . PHP_EOL .
                        '        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>'
                        . PHP_EOL .
                        '        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>'
                        . PHP_EOL .
                        '        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>'
                        . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <div class="input-group">' . PHP_EOL .
                        '        <div class="input-group-prepend">' . PHP_EOL .
                        '            <span class="input-group-text">@</span>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <input type="text" name="input-group-example" ' .
                        'placeholder="Input&#x20;group&#x20;example" aria-label="Input&#x20;group&#x20;example" ' .
                        'aria-describedby="btnGroupAddon" class="form-control" value="">' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div role="toolbar" aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" ' .
                        'class="btn-toolbar&#x20;justify-content-between">'
                        . PHP_EOL .
                        '    <div role="group" aria-label="First&#x20;group" class="btn-group&#x20;mr-2">' . PHP_EOL .
                        '        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>'
                        . PHP_EOL .
                        '        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>'
                        . PHP_EOL .
                        '        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>'
                        . PHP_EOL .
                        '        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>'
                        . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <div class="input-group">' . PHP_EOL .
                        '        <div class="input-group-prepend">' . PHP_EOL .
                        '            <span class="input-group-text">@</span>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <input type="text" name="input-group-example" ' .
                        'placeholder="Input&#x20;group&#x20;example" aria-label="Input&#x20;group&#x20;example" ' .
                        'aria-describedby="btnGroupAddon" class="form-control" value="">' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],

            ],
        ],
        [
            'title' => 'Sizing',
            'url' => '%bootstrap-url%/components/button-group/#sizing',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                foreach (['lg', null, 'sm'] as $sSize) {
                    echo $oView->buttonGroup([
                        new \Zend\Form\Element\Button('left', ['label' => 'Left']),
                        new \Zend\Form\Element\Button('middle', ['label' => 'Middle']),
                        new \Zend\Form\Element\Button('right', ['label' => 'Right']),
                    ], ['size' => $sSize, 'attributes' => ['role' => 'group', 'aria-label' => '...']]) . PHP_EOL;
                }
            },
            'expected' => '<div role="group" aria-label="..." class="btn-group&#x20;btn-group-lg">'
                . PHP_EOL .
                '    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>'
                . PHP_EOL .
                '    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>'
                . PHP_EOL .
                '    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>'
                . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div role="group" aria-label="..." class="btn-group">' . PHP_EOL .
                '    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>'
                . PHP_EOL .
                '    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>'
                . PHP_EOL .
                '    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>'
                . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div role="group" aria-label="..." class="btn-group&#x20;btn-group-sm">' . PHP_EOL .
                '    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>'
                . PHP_EOL .
                '    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>'
                . PHP_EOL .
                '    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>'
                . PHP_EOL .
                '</div>' . PHP_EOL,
        ],
        [
            'title' => 'Nesting',
            'url' => '%bootstrap-url%/components/button-group/#nesting',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->buttonGroup([
                    ['type' => \Zend\Form\Element\Button::class, 'name' => '1', 'options' => ['label' => '1']],
                    ['type' => \Zend\Form\Element\Button::class, 'name' => '2', 'options' => ['label' => '2']],
                    [
                        'type' => \Zend\Form\Element\Button::class,
                        'name' => 'dropdown',
                        'options' => [
                            'label' => 'Dropdown',
                            'dropdown' => ['Dropdown link', 'Dropdown link'],
                        ],
                        'attributes' => ['id' => 'btnGroupDrop1'],
                    ],
                ], ['attributes' => ['role' => 'group', 'aria-label' => 'Button group with nested dropdown']]);
            },
            'expected' =>
            '<div role="group" aria-label="Button&#x20;group&#x20;with&#x20;nested&#x20;dropdown" class="btn-group">'
                . PHP_EOL .
                '    <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>' . PHP_EOL .
                '    <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>' . PHP_EOL .
                '    <div class="btn-group" role="group">' . PHP_EOL .
                '        <button type="button" name="dropdown" id="btnGroupDrop1" '.
                'data-toggle="dropdown" role="button" aria-haspopup="true" ' .
                'aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">' .
                'Dropdown' . '</button>' . PHP_EOL .
                '        <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Vertical variation',
            'url' => '%bootstrap-url%/components/button-group/#vertical-variation',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->buttonGroup([
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                ], ['vertical' => true]) . PHP_EOL;

                echo $oView->buttonGroup([
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('dropdown', [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ]),
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('button', ['label' => 'Button']),
                    new \Zend\Form\Element\Button('dropdown', [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ]),
                    new \Zend\Form\Element\Button('dropdown', [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ]),
                    new \Zend\Form\Element\Button('dropdown', [
                        'label' => 'Dropdown',
                        'dropdown' => ['Dropdown link', 'Dropdown link'],
                    ]),
                ], ['vertical' => true]);
            },

            'expected' => '<div class="btn-group-vertical">' . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="btn-group-vertical">' . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <div class="btn-group" role="group">' . PHP_EOL .
                '        <button type="button" name="dropdown" data-toggle="dropdown" '.
                'role="button" aria-haspopup="true" aria-expanded="false" '.
                'class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">' .
                'Dropdown' . '</button>' . PHP_EOL .
                '        <div class="dropdown-menu">' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>'
                . PHP_EOL .
                '    <div class="btn-group" role="group">' . PHP_EOL .
                '        <button type="button" name="dropdown" data-toggle="dropdown" '.
                'role="button" aria-haspopup="true" aria-expanded="false" '.
                'class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">' .
                'Dropdown' . '</button>' . PHP_EOL .
                '        <div class="dropdown-menu">' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="btn-group" role="group">' . PHP_EOL .
                '        <button type="button" name="dropdown" data-toggle="dropdown" '.
                'role="button" aria-haspopup="true" aria-expanded="false" '.
                'class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">' .
                'Dropdown' . '</button>' . PHP_EOL .
                '        <div class="dropdown-menu">' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="btn-group" role="group">' . PHP_EOL .
                '        <button type="button" name="dropdown" data-toggle="dropdown" '.
                'role="button" aria-haspopup="true" aria-expanded="false" '.
                'class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">' .
                'Dropdown' . '</button>' . PHP_EOL .
                '        <div class="dropdown-menu">' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '            <a href="&#x23;" class="dropdown-item">Dropdown link</a>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
