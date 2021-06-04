<?php

// Documentation test config file for "Components / Forms / Layout / Inline forms" part
return [
    'title' => 'Inline forms',
    'url' => '%bootstrap-url%/forms/#inline-forms',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => [
                'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'name',
                        'options' => [
                            'label' => 'Name',
                            'form_group' => false,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInputName2',
                            'placeholder' => 'Jane Doe',
                            'class' => 'mb-2 mr-sm-2',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'username',
                        'options' => [
                            'label' => 'Username',
                            'show_label' => false,
                            'add_on_prepend' => '@',
                            'input_group_class' => 'mb-2 mr-sm-2',
                            'form_group' => false,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'inlineFormInputGroupUsername2',
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
                            'form_check_class' => 'mb-2 mr-sm-2',
                            'form_group' => false,
                        ],
                        'attributes' => [
                            'id' => 'inlineFormCheck',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'variant' => 'primary',
                        ],
                        'attributes' => [
                            'class' => 'mb-2',
                        ],
                    ],
                ],
            ],
        ]));

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Custom form controls and selects are also supported
        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => [
                'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'preference',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Preference',
                            'show_label' => true,
                            'label_attributes' => ['class' => 'mr-2 my-1'],
                            'row_class' => 'my-1',
                            'empty_option' => 'Choose...',
                            'value_options' => [
                                1 => 'One',
                                2 => 'Two',
                                3 => 'Three',
                            ],
                            'form_group' => false,
                            'custom' => true,
                        ],
                        'attributes' => [
                            'id' => 'inlineFormCustomSelectPref',
                            'class' => 'mr-sm-2 my-1',
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
                            'form_check_class' => 'mr-sm-2 my-1',
                            'form_group' => false,
                            'custom' => true,
                        ],
                        'attributes' => [
                            'id' => 'customControlInline',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                            'variant' => 'primary',
                        ],
                        'attributes' => [
                            'class' => 'mb-2',
                        ],
                    ],
                ],
            ],
        ]));
    },
    'expected' => '<form action="" method="POST" name="form" role="form" class="align-items-center" id="form">' .
        PHP_EOL .
        '    <label class="form-label&#x20;sr-only" for="inlineFormInputName2">Name</label>'
        . PHP_EOL .
        '    <input name="name" type="text" id="inlineFormInputName2" ' .
        'placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2&#x20;mr-sm-2" value=""/>' . PHP_EOL .
        '    <label class="form-label&#x20;sr-only" for="inlineFormInputGroupUsername2">Username</label>'
        . PHP_EOL .
        '    <div class="input-group&#x20;mb-2&#x20;mr-sm-2">' . PHP_EOL .
        '        <div class="input-group-prepend">' . PHP_EOL .
        '            <div class="input-group-text">' . PHP_EOL .
        '                @' . PHP_EOL .
        '            </div>' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '        <input name="username" type="text" id="inlineFormInputGroupUsername2" ' .
        'placeholder="Username" class="form-control" value=""/>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-check&#x20;mb-2&#x20;mr-sm-2">' . PHP_EOL .
        '        <input type="checkbox" name="remember_me" id="inlineFormCheck" ' .
        'class="form-check-input" value="1"/>' . PHP_EOL .
        '        <label class="form-check-label" for="inlineFormCheck">' .
        'Remember me</label>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">' .
        'Submit</button>' . PHP_EOL .
        '</form>' . PHP_EOL .
        '<br/>' . PHP_EOL .
        '<form action="" method="POST" name="form" role="form" class="align-items-center" id="form">' . PHP_EOL .
        '    <label class="mr-2&#x20;my-1" for="inlineFormCustomSelectPref">Preference</label>'
        . PHP_EOL .
        '    <select name="preference" id="inlineFormCustomSelectPref" ' .
        'class="form-select&#x20;mr-sm-2&#x20;my-1">' . PHP_EOL .
        '        <option value="">Choose...</option>' . PHP_EOL .
        '        <option value="1">One</option>' . PHP_EOL .
        '        <option value="2">Two</option>' . PHP_EOL .
        '        <option value="3">Three</option>' . PHP_EOL .
        '    </select>' . PHP_EOL .
        '    <div class="custom-checkbox&#x20;custom-control&#x20;mr-sm-2&#x20;my-1">' . PHP_EOL .
        '        <input type="checkbox" name="remember_my_preference" id="customControlInline" ' .
        'class="form-check-input" value="1"/>' . PHP_EOL .
        '        <label class="form-check-label" for="customControlInline">' .
        'Remember my preference</label>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">' .
        'Submit</button>' . PHP_EOL .
        '</form>',
    'tests' => [
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/FormRow.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/HorizontalForm.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/ColumnSizing.php',
        include __DIR__ . DIRECTORY_SEPARATOR . 'FormGrid/AutoSizing.php',
    ],
];
