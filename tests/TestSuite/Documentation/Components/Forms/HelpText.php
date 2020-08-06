<?php

// Documentation test config file for "Components / Forms / Help text" part
return [
    'title' => 'Help text',
    'url' => '%bootstrap-url%/components/forms/#help-text',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'password',
            'options' => [
                'label' => 'Password',
                'form_group' => false,
                'help_block' => [
                    'content' => 'Your password must be 8-20 characters long, contain letters and numbers, ' .
                        'and must not contain spaces, special characters, or emoji.',
                    'attributes' => ['id' => 'passwordHelpBlock'],
                ]
            ],
            'attributes' => [
                'id' => 'inputPassword5',
                'type' => 'password',
                'aria-describedby' => 'passwordHelpBlock',
            ],
        ]));

        echo PHP_EOL . '<br/>' . PHP_EOL;

        // Inline text can use any typical inline HTML element
        // (be it a <small>, <span>, or something else)
        // with nothing more than a utility class
        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => [
                'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
            ],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'password',
                        'options' => [
                            'label' => 'Password',
                            'show_label' => true,
                            'help_block' => [
                                'content' => 'Must be 8-20 characters long.',
                                'attributes' => ['id' => 'passwordHelpInline'],
                            ],
                        ],
                        'attributes' => [
                            'id' => 'inputPassword6',
                            'type' => 'password',
                            'aria-describedby' => 'passwordHelpInline',
                            'class' => 'mx-sm-3',
                        ],
                    ],
                ],
            ],
        ]));
    },
    'expected' => '<label for="inputPassword5">Password</label>' . PHP_EOL .
        '<input name="password" id="inputPassword5" type="password" aria-describedby="passwordHelpBlock" ' .
        'class="form-control" value=""/>' . PHP_EOL .
        '<small class="form-text&#x20;text-muted" id="passwordHelpBlock">' .
        'Your password must be 8-20 characters long, contain letters and numbers, ' .
        'and must not contain spaces, special characters, or emoji.' .
        '</small>' . PHP_EOL .
        '<br/>' . PHP_EOL .
        '<form action="" method="POST" name="form" role="form" class="form-inline" id="form">' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="inputPassword6">Password</label>' . PHP_EOL .
        '        <input name="password" id="inputPassword6" type="password" aria-describedby="passwordHelpInline" ' .
        'class="form-control&#x20;mx-sm-3" value=""/>' . PHP_EOL .
        '        <small class="text-muted" id="passwordHelpInline">Must be 8-20 characters long.</small>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
