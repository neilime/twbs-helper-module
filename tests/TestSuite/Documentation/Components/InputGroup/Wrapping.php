<?php

// Documentation test config file for "Components / Input group / Wrapping" part
return [
    'title' => 'Wrapping',
    'url' => '%bootstrap-url%/components/input-group/#wrapping',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'username',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'flex-nowrap',
                'add_on_prepend' => '@',
            ],
            'attributes' => [
                'placeholder' => 'Username',
                'aria-label' => 'Username',
                'aria-describedby' => 'addon-wrapping',
            ],
        ]));
    },
    'expected' => '<div class="flex-nowrap&#x20;input-group">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <div class="input-group-text" id="addon-wrapping">' . PHP_EOL .
        '            @' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="username" placeholder="Username" aria-label="Username" ' .
        'aria-describedby="addon-wrapping" class="form-control" value="">' . PHP_EOL .
        '</div>',
];
