<?php

// Documentation test config file for "Components / Forms / Range Inputs" part
return [
    'title' => 'Range Inputs',
    'url' => '%bootstrap-url%/components/forms/#range-inputs',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Zend\Form\Factory();

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
    'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="formControlRange">Example Range input</label>' . PHP_EOL .
        '        <input name="range" type="range" id="formControlRange" ' .
        'class="form-control-range" value="">' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
