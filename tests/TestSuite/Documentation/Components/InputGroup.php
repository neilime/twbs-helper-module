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
                        'addOnPrepend' => '@',
                    ],
                    'attributes' => [
                        'id' => 'basic-addon1',
                        'placeholder' => 'Username',
                        'aria-label' => 'Username',
                    ],
                ]));
            },
            'expected' => '<div class="input-group">' . PHP_EOL .
                '    <div class="input-group-prepend">' . PHP_EOL .
                '        <div class="input-group-text" id="basic-addon1">' . PHP_EOL .
                '            @' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <input type="text" name="username" ' .
                'placeholder="Username" aria-label="Username" ' .
                'aria-describedby="basic-addon1" class="form-control" value="">' . PHP_EOL .
                '</div>',
        ],
    ],
];
