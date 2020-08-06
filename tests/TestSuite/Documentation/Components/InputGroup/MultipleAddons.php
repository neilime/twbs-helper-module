<?php

// Documentation test config file for "Components / Input group / Multiple addons" part
return [
    'title' => 'Multiple addons',
    'url' => '%bootstrap-url%/components/input-group/#multiple-addons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'multiple-addons-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => ['$', '0.00'],
            ],
            'attributes' => [
                'aria-label' => 'Dollar amount (with dot and two decimal places)',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'multiple-addons-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_append' => ['$', '0.00'],
            ],
            'attributes' => [
                'aria-label' => 'Dollar amount (with dot and two decimal places)',
            ],
        ]));
    },
    'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <div class="input-group-text">' . PHP_EOL .
        '            $' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="input-group-text">' . PHP_EOL .
        '            0.00' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="multiple-addons-prepend" ' .
        'aria-label="Dollar&#x20;amount&#x20;&#x28;with&#x20;dot&#x20;and&#x20;two&#x20;' .
        'decimal&#x20;places&#x29;" class="form-control" value=""/>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <input type="text" name="multiple-addons-append" ' .
        'aria-label="Dollar&#x20;amount&#x20;&#x28;with&#x20;dot&#x20;and&#x20;two&#x20;' .
        'decimal&#x20;places&#x29;" class="form-control" value=""/>' . PHP_EOL .
        '    <div class="input-group-append">' . PHP_EOL .
        '        <div class="input-group-text">' . PHP_EOL .
        '            $' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="input-group-text">' . PHP_EOL .
        '            0.00' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</div>',
];
