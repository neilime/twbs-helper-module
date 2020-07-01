<?php

// Documentation test config file for "Components / Forms / Disabled forms" part
return [
    'title' => 'Disabled forms',
    'url' => '%bootstrap-url%/components/forms/#disabled-forms',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'type' => 'fieldset',
                        'attributes' => [
                            'disabled' => true,
                        ],
                        'elements' => [
                            [
                                'spec' => [
                                    'name' => 'disabled-input',
                                    'options' => ['label' => 'Disabled input'],
                                    'attributes' => [
                                        'type' => 'text',
                                        'id' => 'disabledTextInput',
                                        'placeholder' => 'Disabled input',
                                    ],
                                ],
                            ],
                            [
                                'spec' => [
                                    'name' => 'disabled-select',
                                    'type' => 'select',
                                    'attributes' => ['id' => 'disabledSelect',],
                                    'options' => [
                                        'label' => 'Disabled select menu',
                                        'empty_option' => 'Disabled select',
                                    ],
                                ],
                            ],
                            [
                                'spec' => [
                                    'type' => 'checkbox',
                                    'name' => 'disabled-fieldset-check',
                                    'options' => ['label' => 'Can\'t check this', 'use_hidden_element' => false],
                                    'attributes' => [
                                        'id' => 'disabledFieldsetCheck',
                                        'disabled' => true,
                                    ],
                                ],
                            ],
                            [
                                'spec' => [
                                    'type' => 'submit',
                                    'options' => ['label' => 'Submit', 'variant' => 'primary'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]));
    },
    'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <fieldset disabled="disabled" class="form-group">' . PHP_EOL .
        '        <div class="form-group">' . PHP_EOL .
        '            <label for="disabledTextInput">Disabled input</label>' . PHP_EOL .
        '            <input name="fieldset&#x5B;disabled-input&#x5D;" type="text" id="disabledTextInput" placeholder="Disabled&#x20;input" class="form-control" value="">' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="form-group">' . PHP_EOL .
        '            <label for="disabledSelect">Disabled select menu</label>' . PHP_EOL .
        '            <select name="fieldset&#x5B;disabled-select&#x5D;" id="disabledSelect" class="form-control">' .
        '<option value="">Disabled select</option>' .
        '</select>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="form-group">' . PHP_EOL .
        '            <div class="form-check">' . PHP_EOL .
        '                <input type="checkbox" name="fieldset&#x5B;disabled-fieldset-check&#x5D;" id="disabledFieldsetCheck" disabled="disabled" class="form-check-input" value="1">' . PHP_EOL .
        '                <label class="form-check-label" for="disabledFieldsetCheck">Can&#039;t check this</label>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="form-group">' . PHP_EOL .        
        '            <button type="submit" name="fieldset&#x5B;submit&#x5D;" class="btn&#x20;btn-primary" value="">Submit</button>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </fieldset>' . PHP_EOL .
        '</form>',
];
