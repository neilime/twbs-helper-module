<?php

// Documentation test config file for "Components / Forms / Custom forms" part
return [
    'title' => 'Custom forms',
    'url' => '%bootstrap-url%/components/forms/#custom-forms',
    'tests' => [
        [
            'title' => 'Checkboxes and radios',
            'url' => '%bootstrap-url%/components/forms/#checkboxes-and-radios-1',
            'tests' => [
                [
                    'title' => 'Checkboxes',
                    'url' => '%bootstrap-url%/components/forms/#checkboxes',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        $oFactory = new \Zend\Form\Factory();

                        echo $oView->formRow($oFactory->create([
                            'type' => 'checkbox',
                            'name' => 'custom_checkbox',
                            'options' => [
                                'label' => 'Check this custom checkbox',
                                'use_hidden_element' => false,
                                'form_group' => false,
                                'custom' => true,
                            ],
                            'attributes' => [
                                'id' => 'customCheck1',
                            ],
                        ]));
                    },
                    'expected' => '<div class="custom-checkbox&#x20;custom-control">' . PHP_EOL .
                        '    <input type="checkbox" name="custom_checkbox" id="customCheck1" '.
                        'class="custom-control-input" value="1">' . PHP_EOL .
                        '    <label class="custom-control-label" for="customCheck1">' .
                        'Check this custom checkbox' .
                        '</label>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
    ],
];
