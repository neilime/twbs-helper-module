<?php

// Documentation test config file for "Components / Input group / Buttons with dropdowns" part
return [
    'title' => 'Buttons with dropdowns',
    'url' => '%bootstrap-url%/components/input-group/#buttons-with-dropdowns',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Zend\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'dropdown-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Dropdown',
                            'variant' => 'outline-secondary',
                            'dropdown' => [
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
            'attributes' => [
                'aria-label' => 'Text input with dropdown button',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'dropdown-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_append' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Dropdown',
                            'variant' => 'outline-secondary',
                            'dropdown' => [
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
            'attributes' => [
                'aria-label' => 'Text input with dropdown button',
            ],
        ]));
    },
    'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <button type="button" name="button" data-toggle="dropdown" role="button" aria-haspopup="true" ' .
        'aria-expanded="false" class="btn&#x20;btn-outline-secondary&#x20;dropdown-toggle" value="">' .
        'Dropdown' .
        '</button>' . PHP_EOL .
        '        <div class="dropdown-menu">' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Action</a>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Another action</a>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Something else here</a>' . PHP_EOL .
        '            <div class="dropdown-divider"></div>' . PHP_EOL .
        '            <a class="dropdown-item" href="&#x23;">Separated link</a>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="dropdown-prepend" ' .
        'aria-label="Text&#x20;input&#x20;with&#x20;dropdown&#x20;button" class="form-control" value="">' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group">' . PHP_EOL .
        '    <input type="text" name="dropdown-append" ' .
        'aria-label="Text&#x20;input&#x20;with&#x20;dropdown&#x20;button" class="form-control" value="">' . PHP_EOL .
        '    <div class="input-group-append">' . PHP_EOL .
        '        <button type="button" name="button" data-toggle="dropdown" role="button" aria-haspopup="true" ' .
        'aria-expanded="false" class="btn&#x20;btn-outline-secondary&#x20;dropdown-toggle" value="">' .
        'Dropdown' .
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
