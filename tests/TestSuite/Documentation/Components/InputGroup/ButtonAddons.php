<?php

// Documentation test config file for "Components / Input group / Button addons" part
return [
    'title' => 'Button addons',
    'url' => '%bootstrap-url%/components/input-group/#button-addons',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Zend\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'button-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Button',
                            'variant' => 'outline-secondary',
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => '',
                'aria-label' => 'Example text with button addon',
                'aria-describedby' => 'button-addon1',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'button-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_append' => [
                    'element' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Button',
                            'variant' => 'outline-secondary',
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => 'Recipient\'s username',
                'aria-label' => 'Recipient\'s username',
                'aria-describedby' => 'button-addon2',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'buttons-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                    [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => '',
                'aria-label' => 'Example text with two button addons',
                'aria-describedby' => 'button-addon3',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'button-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_append' => [
                    [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                    [
                        'element' => [
                            'type' => 'button',
                            'options' => [
                                'label' => 'Button',
                                'variant' => 'outline-secondary',
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'placeholder' => 'Recipient\'s username',
                'aria-label' => 'Recipient\'s username with two button addons',
                'aria-describedby' => 'button-addon4',
            ],
        ]));
    },
    'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <button type="button" name="button" id="button-addon1" class="btn&#x20;btn-outline-secondary" ' .
        'value="">' .
        'Button' .
        '</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="button-prepend" placeholder="" ' .
        'aria-label="Example&#x20;text&#x20;with&#x20;button&#x20;addon" ' .
        'aria-describedby="button-addon1" class="form-control" value="">' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <input type="text" name="button-append" placeholder="Recipient&#x27;s&#x20;username" ' .
        'aria-label="Recipient&#x27;s&#x20;username" ' .
        'aria-describedby="button-addon2" class="form-control" value="">' . PHP_EOL .
        '    <div class="input-group-append">' . PHP_EOL .
        '        <button type="button" name="button" id="button-addon2" class="btn&#x20;btn-outline-secondary" ' .
        'value="">' .
        'Button' .
        '</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend" id="button-addon3">' . PHP_EOL .
        '        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" ' .
        'value="">' .
        'Button' .
        '</button>' . PHP_EOL .
        '        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" ' .
        'value="">' .
        'Button' .
        '</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="buttons-prepend" placeholder="" ' .
        'aria-label="Example&#x20;text&#x20;with&#x20;two&#x20;button&#x20;addons" ' .
        'aria-describedby="button-addon3" class="form-control" value="">' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group">' . PHP_EOL .
        '    <input type="text" name="button-append" placeholder="Recipient&#x27;s&#x20;username" ' .
        'aria-label="Recipient&#x27;s&#x20;username&#x20;with&#x20;two&#x20;button&#x20;addons" ' .
        'aria-describedby="button-addon4" class="form-control" value="">' . PHP_EOL .
        '    <div class="input-group-append" id="button-addon4">' . PHP_EOL .
        '        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" ' .
        'value="">' .
        'Button' .
        '</button>' . PHP_EOL .
        '        <button type="button" name="button" class="btn&#x20;btn-outline-secondary" ' .
        'value="">' .
        'Button' .
        '</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>',
];
