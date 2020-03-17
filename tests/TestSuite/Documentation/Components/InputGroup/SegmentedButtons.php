<?php

// Documentation test config file for "Components / Input group / Segmented buttons" part
return [
    'title' => 'Segmented buttons',
    'url' => '%bootstrap-url%/components/input-group/#segmented-buttons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'segmented-dropdown-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Action',
                            'variant' => 'outline-secondary',
                            'dropdown' => [
                                'split' => 'Toggle Dropdown',
                                'items' => [
                                    'Action',
                                    'Another action',
                                    'Something else here',
                                    '---',
                                    'Separated link',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'aria-label' => 'Text input with segmented dropdown button',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'segmented-dropdown-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_append' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Action',
                            'variant' => 'outline-secondary',
                            'dropdown' => [
                                'split' => 'Toggle Dropdown',
                                'items' => [
                                    'Action',
                                    'Another action',
                                    'Something else here',
                                    '---',
                                    'Separated link',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'aria-label' => 'Text input with segmented dropdown button',
            ],
        ]));
    },
    'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">' .
        'Action</button>' . PHP_EOL .
        '        <button type="button" name="button-toggle" ' .
        'class="btn&#x20;btn-outline-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value="">' .
        '<span class="sr-only">Toggle Dropdown</span>' .
        '</button>' . PHP_EOL .
        '        <div class="dropdown-menu">' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '            <div class="dropdown-divider"></div>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="segmented-dropdown-prepend" ' .
        'aria-label="Text&#x20;input&#x20;with&#x20;segmented&#x20;dropdown&#x20;button" ' .
        'class="form-control" value="">' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group">' . PHP_EOL .
        '    <input type="text" name="segmented-dropdown-append" ' .
        'aria-label="Text&#x20;input&#x20;with&#x20;segmented&#x20;dropdown&#x20;button" ' .
        'class="form-control" value="">' . PHP_EOL .
        '    <div class="input-group-append">' . PHP_EOL .
        '        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" value="">' .
        'Action</button>' . PHP_EOL .
        '        <button type="button" name="button-toggle" ' .
        'class="btn&#x20;btn-outline-secondary&#x20;dropdown-toggle&#x20;dropdown-toggle-split" ' .
        'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" value="">' .
        '<span class="sr-only">Toggle Dropdown</span>' .
        '</button>' . PHP_EOL .
        '        <div class="dropdown-menu">' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '            <div class="dropdown-divider"></div>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>',
];
