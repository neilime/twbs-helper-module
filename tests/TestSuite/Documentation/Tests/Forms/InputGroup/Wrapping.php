<?php

// Documentation test config file for "Components / Input group / Wrapping" part
return [
    'title' => 'Wrapping',
    'url' => '%bootstrap-url%/components/input-group/#wrapping',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->formRow($factory->create([
            'name' => 'username',
            'type' => 'text',
            'options' => [
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
