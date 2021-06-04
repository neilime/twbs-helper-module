<?php

// Documentation test config file for "Components / Forms / Custom forms" part
return [
    'title' => 'Button groups',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'email',
                        'options' => ['label' => 'Email'],
                        'attributes' => ['type' => 'email'],
                    ]
                ],
                [
                    'spec' => [
                        'type' => \Laminas\Form\Element\Button::class,
                        'name' => 'button1',
                        'options' => ['label' => 'Button 1', 'row_name' => 'my-button-group']
                    ]
                ],
                [
                    'spec' => [
                        'type' => \Laminas\Form\Element\Button::class,
                        'name' => 'button2',
                        'options' => ['label' => 'Button 2', 'row_name' => 'my-button-group']
                    ]
                ],

                [
                    'spec' => [
                        'type' => 'submit',
                        'options' => ['label' => 'Submit', 'variant' => 'primary'],
                    ]
                ],
            ],
        ]));
    },
    'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="mb-3">' . PHP_EOL .
        '        <label class="form-label" for="email">Email</label>' . PHP_EOL .
        '        <input name="email" type="email" class="form-control" value=""/>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="btn-group&#x20;form-group">' . PHP_EOL .
        '        <button type="button" name="button1" class="btn&#x20;btn-secondary" value="">Button 1</button>'
        . PHP_EOL .
        '        <button type="button" name="button2" class="btn&#x20;btn-secondary" value="">Button 2</button>'
        . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>' . PHP_EOL .
        '</form>',
];
