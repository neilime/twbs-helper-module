<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Auto-sizing" part
return [
    'title' => 'Auto-sizing',
    'url' => '%bootstrap-url%/components/forms/#auto-sizing',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Zend\Form\Factory();

        // Create form
        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => [
                'row_class' => 'align-items-center form-row',
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'name',
                        'options' => [
                            'label' => 'Name',
                            'column' => 'auto',
                            'show_label' => false,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInput',
                            'placeholder' => 'Jane Doe',
                            'class' => 'mb-2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'username',
                        'options' => [
                            'label' => 'Username',
                            'column' => 'auto',
                            'show_label' => false,
                            'add_on_prepend' => '@',
                            'input_group_class' => 'mb-2',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInputGroup',
                            'placeholder' => 'Username',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'checkbox',
                        'name' => 'remember_me',
                        'options' => [
                            'label' => 'Remember me',
                            'use_hidden_element' => false,
                            'column' => 'auto',
                            'form_check_class' => 'mb-2',
                        ],
                        'attributes' => [
                            'id' => 'autoSizingCheck',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'variant' => 'primary',
                            'column' => 'auto',
                        ],
                        'attributes' => [
                            'class' => 'mb-2',
                        ],
                    ],
                ],
            ],
        ]));
    },
    'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="align-items-center&#x20;form-row">' . PHP_EOL .
        '        <div class="col-auto">' . PHP_EOL .
        '            <label class="sr-only" for="inlineFormInput">Name</label>'
        . PHP_EOL .
        '            <input name="name" type="text" id="inlineFormInput" ' .
        'placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value="">' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-auto">' . PHP_EOL .
        '            <label class="sr-only" for="inlineFormInputGroup">Username</label>'
        . PHP_EOL .
        '            <div class="input-group&#x20;mb-2">' . PHP_EOL .
        '                <div class="input-group-prepend">' . PHP_EOL .
        '                    <div class="input-group-text">' . PHP_EOL .
        '                        @' . PHP_EOL .
        '                    </div>' . PHP_EOL .
        '                </div>' . PHP_EOL .
        '                <input name="username" type="text" id="inlineFormInputGroup" ' .
        'placeholder="Username" class="form-control" value="">' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-auto">' . PHP_EOL .
        '            <div class="form-check&#x20;mb-2">' . PHP_EOL .
        '                <input type="checkbox" name="remember_me" id="autoSizingCheck" ' .
        'class="form-check-input" value="1">' . PHP_EOL .
        '                <label class="form-check-label" for="autoSizingCheck">' .
        'Remember me</label>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-auto">' . PHP_EOL .
        '            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">' .
        'Submit</button>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
