<?php

// Documentation test config file for "Components / Input group" part
return [
    'title' => 'Input group',
    'url' => '%bootstrap-url%/components/input-group/',
    'tests' => [
        [
            'title' => 'Basic example',
            'url' => '%bootstrap-url%/components/input-group/#basic-example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Zend\Form\Factory();

                echo $oView->formRow($oFactory->create([
                    'name' => 'username',
                    'type' => 'text',
                    'options' => [
                        'form_group' => false,
                        'input_group_class' => 'mb-3',
                        'add_on_prepend' => '@',
                    ],
                    'attributes' => [
                        'placeholder' => 'Username',
                        'aria-label' => 'Username',
                        'aria-describedby' => 'basic-addon1',
                    ],
                ])) . PHP_EOL;

                echo $oView->formRow($oFactory->create([
                    'name' => 'recipient_username',
                    'type' => 'text',
                    'options' => [
                        'form_group' => false,
                        'input_group_class' => 'mb-3',
                        'add_on_append' => '@example.com',
                    ],
                    'attributes' => [
                        'placeholder' => 'Recipient\'s username',
                        'aria-label' => 'Recipient\'s username',
                        'aria-describedby' => 'basic-addon2',
                    ],
                ]));
            },
            'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <div class="input-group-prepend">' . PHP_EOL .
                '        <div id="basic-addon1" class="input-group-text">' . PHP_EOL .
                '            @' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <input type="text" name="username" placeholder="Username" aria-label="Username" ' .
                'aria-describedby="basic-addon1" class="form-control" value="">' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="input-group&#x20;mb-3">' . PHP_EOL .
                '    <input type="text" name="recipient_username" placeholder="Recipient&#x27;s&#x20;username" '.
                'aria-label="Recipient&#x27;s&#x20;username" ' .
                'aria-describedby="basic-addon2" class="form-control" value="">' . PHP_EOL .
                '    <div class="input-group-append">' . PHP_EOL .
                '        <div id="basic-addon2" class="input-group-text">' . PHP_EOL .
                '            @example.com' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];
