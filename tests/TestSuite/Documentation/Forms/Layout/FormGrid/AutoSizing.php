<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Auto-sizing" part
return [
    'title' => 'Auto-sizing',
    'url' => '%bootstrap-url%/forms/#auto-sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

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
                            'show_label' => false,
                            'column' => 'auto',
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
                            'show_label' => false,
                            'column' => 'auto',
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

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Remix that once again with size-specific column classes.
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
                            'show_label' => false,
                            'column' => 'sm-3',
                            'row_class' => 'my-1',
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
                            'show_label' => false,
                            'column' => 'sm-3',
                            'row_class' => 'my-1',
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
                            'row_class' => 'my-1',
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
                            'row_class' => 'my-1',
                        ],
                        'attributes' => [
                            'class' => 'mb-2',
                        ],
                    ],
                ],
            ],
        ]));

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // And of course custom form controls are supported.
        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => [
                'row_class' => 'align-items-center form-row',
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'preference',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Preference',
                            'show_label' => false,
                            'label_attributes' => ['class' => 'mr-sm-2'],
                            'column' => 'sm-3',
                            'row_class' => 'my-1',
                            'empty_option' => 'Choose...',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                            'custom' => true,
                        ],
                        'attributes' => [
                            'id' => 'inlineFormCustomSelect',
                            'class' => 'mr-sm-2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'checkbox',
                        'name' => 'remember_my_preference',
                        'options' => [
                            'label' => 'Remember my preference',
                            'use_hidden_element' => false,
                            'column' => 'auto',
                            'row_class' => 'my-1',
                            'form_check_class' => 'mr-sm-2',
                            'custom' => true,
                        ],
                        'attributes' => [
                            'id' => 'customControlAutosizing',
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
                            'row_class' => 'my-1',
                        ],
                    ],
                ],
            ],
        ]));
    },
    'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="align-items-center&#x20;form-row">' . PHP_EOL .
        '        <div class="col-auto&#x20;mb-3">' . PHP_EOL .
        '            <label class="form-label&#x20;sr-only" for="inlineFormInput">Name</label>'
        . PHP_EOL .
        '            <input name="name" type="text" id="inlineFormInput" ' .
        'placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-auto&#x20;mb-3">' . PHP_EOL .
        '            <label class="form-label&#x20;sr-only" for="inlineFormInputGroup">Username</label>'
        . PHP_EOL .
        '            <div class="input-group&#x20;mb-2">' . PHP_EOL .
        '                <div class="input-group-prepend">' . PHP_EOL .
        '                    <div class="input-group-text">' . PHP_EOL .
        '                        @' . PHP_EOL .
        '                    </div>' . PHP_EOL .
        '                </div>' . PHP_EOL .
        '                <input name="username" type="text" id="inlineFormInputGroup" ' .
        'placeholder="Username" class="form-control" value=""/>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-auto&#x20;mb-3">' . PHP_EOL .
        '            <div class="form-check&#x20;mb-2">' . PHP_EOL .
        '                <input type="checkbox" name="remember_me" id="autoSizingCheck" ' .
        'class="form-check-input" value="1"/>' . PHP_EOL .
        '                <label class="form-check-label" for="autoSizingCheck">' .
        'Remember me</label>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">' .
        'Submit</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>' . PHP_EOL .
        '<br/>' . PHP_EOL .
        '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="align-items-center&#x20;form-row">' . PHP_EOL .
        '        <div class="col-sm-3&#x20;mb-3&#x20;my-1">' . PHP_EOL .
        '            <label class="form-label&#x20;sr-only" for="inlineFormInput">Name</label>'
        . PHP_EOL .
        '            <input name="name" type="text" id="inlineFormInput" ' .
        'placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value=""/>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-sm-3&#x20;mb-3&#x20;my-1">' . PHP_EOL .
        '            <label class="form-label&#x20;sr-only" for="inlineFormInputGroup">Username</label>'
        . PHP_EOL .
        '            <div class="input-group&#x20;mb-2">' . PHP_EOL .
        '                <div class="input-group-prepend">' . PHP_EOL .
        '                    <div class="input-group-text">' . PHP_EOL .
        '                        @' . PHP_EOL .
        '                    </div>' . PHP_EOL .
        '                </div>' . PHP_EOL .
        '                <input name="username" type="text" id="inlineFormInputGroup" ' .
        'placeholder="Username" class="form-control" value=""/>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-auto&#x20;mb-3&#x20;my-1">' . PHP_EOL .
        '            <div class="form-check&#x20;mb-2">' . PHP_EOL .
        '                <input type="checkbox" name="remember_me" id="autoSizingCheck" ' .
        'class="form-check-input" value="1"/>' . PHP_EOL .
        '                <label class="form-check-label" for="autoSizingCheck">' .
        'Remember me</label>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">' .
        'Submit</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>' . PHP_EOL .
        '<br/>' . PHP_EOL .
        '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="align-items-center&#x20;form-row">' . PHP_EOL .
        '        <div class="col-sm-3&#x20;mb-3&#x20;my-1">' . PHP_EOL .
        '            <label class="mr-sm-2&#x20;sr-only" for="inlineFormCustomSelect">Preference</label>'
        . PHP_EOL .
        '            <select name="preference" id="inlineFormCustomSelect" ' .
        'class="form-select&#x20;mr-sm-2">' . PHP_EOL .
        '                <option value="">Choose...</option>' . PHP_EOL .
        '                <option value="1">One</option>' . PHP_EOL .
        '                <option value="2">Two</option>' . PHP_EOL .
        '                <option value="3">Three</option>' . PHP_EOL .
        '            </select>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <div class="col-auto&#x20;mb-3&#x20;my-1">' . PHP_EOL .
        '            <div class="custom-checkbox&#x20;custom-control&#x20;mr-sm-2">' . PHP_EOL .
        '                <input type="checkbox" name="remember_my_preference" id="customControlAutosizing" ' .
        'class="form-check-input" value="1"/>' . PHP_EOL .
        '                <label class="form-check-label" for="customControlAutosizing">' .
        'Remember my preference</label>' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">' .
        'Submit</button>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
