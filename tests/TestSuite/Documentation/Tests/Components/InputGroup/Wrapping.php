<?php

// Documentation test config file for "Components / Input group / Wrapping" part
return [
    'title' => 'Wrapping',
    'url' => '%bootstrap-url%/components/input-group/#wrapping',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'username',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'flex-nowrap',
                'add_on_prepend' => '@',
            ],
            'attributes' => [
                'placeholder' => 'Username',
                'aria-label' => 'Username',
                'aria-describedby' => 'addon-wrapping',
            ],
        ]));
    },
];
