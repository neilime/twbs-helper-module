<?php

// Documentation test config file for "Components / Input group / Checkboxes and radios" part
return [
    'title' => 'Checkboxes and radios',
    'url' => '%bootstrap-url%/components/input-group/#checkboxes-and-radios',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'checkbox-text',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'checkbox',
                        'options' => [
                            'use_hidden_element' => false,
                        ],
                        'attributes' => [
                            'aria-label' => 'Checkbox for following text input',
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'aria-label' => 'Text input with checkbox',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'radio-text',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_prepend' => [
                    'element' => [
                        'type' => 'radio',
                        'options' => [
                            'value_options' => [
                                [
                                    'label' => '',
                                    'attributes' => [
                                        'aria-label' => 'Radio button for following text input',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'attributes' => [
                'aria-label' => 'Text input with radio button',
            ],
        ]));
    },
    'expected' => '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <div class="input-group-text">' . PHP_EOL .
        '            <input type="checkbox" name="checkbox" ' .
        'aria-label="Checkbox&#x20;for&#x20;following&#x20;text&#x20;input" ' .
        'value="1"/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="checkbox-text" aria-label="Text&#x20;input&#x20;with&#x20;checkbox" ' .
        'class="form-control" value=""/>' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <div class="input-group-text">' . PHP_EOL .
        '            <input type="radio" name="radio" ' .
        'aria-label="Radio&#x20;button&#x20;for&#x20;following&#x20;text&#x20;input" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="radio-text" aria-label="Text&#x20;input&#x20;with&#x20;radio&#x20;button" ' .
        'class="form-control" value=""/>' . PHP_EOL .
        '</div>',
];
