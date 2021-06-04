<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Form row" part
return [
    'title' => 'Form row',
    'url' => '%bootstrap-url%/forms/#form-row',

    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => ['row_class' => 'form-row'],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'firstName',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'First name',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'lastName',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'Last name',
                        ],
                    ],
                ],
            ]
        ]));
    },
    'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="form-row">' . PHP_EOL .
        '        <div class="col&#x20;mb-3">' . PHP_EOL .
        '            <input name="firstName" type="text" placeholder="First&#x20;name" ' .
        'class="form-control" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col&#x20;mb-3">' . PHP_EOL .
        '            <input name="lastName" type="text" placeholder="Last&#x20;name" ' .
        'class="form-control" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
