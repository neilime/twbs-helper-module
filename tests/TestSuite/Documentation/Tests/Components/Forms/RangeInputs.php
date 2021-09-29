<?php

// Documentation test config file for "Components / Forms / Range Inputs" part
return [
    'title' => 'Range Inputs',
    'url' => '%bootstrap-url%/components/forms/#range-inputs',
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
];
