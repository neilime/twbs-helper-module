<?php

// Documentation test config file for "Components / Input group / Multiple addons" part
return [
    'title' => 'Multiple addons',
    'url' => '%bootstrap-url%/components/input-group/#multiple-addons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        echo $view->formRow($factory->create([
            'name' => 'multiple-addons-prepend',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => ['$', '0.00'],
            ],
            'attributes' => [
                'aria-label' => 'Dollar amount (with dot and two decimal places)',
            ],
        ])) . PHP_EOL;

        echo $view->formRow($factory->create([
            'name' => 'multiple-addons-append',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_append' => ['$', '0.00'],
            ],
            'attributes' => [
                'aria-label' => 'Dollar amount (with dot and two decimal places)',
            ],
        ]));
    },
];
