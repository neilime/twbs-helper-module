<?php

// Documentation test config file for "Components / Forms / Range Inputs" part
return [
    'title' => 'Range Inputs',
    'url' => '%bootstrap-url%/forms/#range-inputs',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'range',
                        'options' => [
                            'label' => 'Example Range input'
                        ],
                        'attributes' => [
                            'type' => 'range',
                            'id' => 'formControlRange',
                        ],
                    ],
                ],
            ]
        ]));
    },
    'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="mb-3">' . PHP_EOL .
        '        <label class="form-label" for="formControlRange">Example Range input</label>' . PHP_EOL .
        '        <input name="range" type="range" id="formControlRange" ' .
        'class="form-control-range" value=""/>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
