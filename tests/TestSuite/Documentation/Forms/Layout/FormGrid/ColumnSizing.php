<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Column sizing" part
return [
    'title' => 'Column sizing',
    'url' => '%bootstrap-url%/forms/#column-sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => ['row_class' => 'form-row'],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'city',
                        'options' => [
                            'column' => 7,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'City',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'state',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'State',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'zip',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'Zip',
                        ],
                    ],
                ],
            ]
        ]));
    },
    'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="form-row">' . PHP_EOL .
        '        <div class="col-7&#x20;mb-3">' . PHP_EOL .
        '            <input name="city" type="text" placeholder="City" ' .
        'class="form-control" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col&#x20;mb-3">' . PHP_EOL .
        '            <input name="state" type="text" placeholder="State" ' .
        'class="form-control" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col&#x20;mb-3">' . PHP_EOL .
        '            <input name="zip" type="text" placeholder="Zip" ' .
        'class="form-control" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
