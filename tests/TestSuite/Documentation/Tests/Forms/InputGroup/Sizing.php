<?php

// Documentation test config file for "Forms / Input group / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/forms/input-group/#sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        $factory = new \Laminas\Form\Factory();

        // Small
        echo $view->formRow($factory->create([
            'name' => 'small',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => 'Small',
                'size' => 'sm',
            ],
            'attributes' => [
                'aria-label' => 'Sizing example input',
                'aria-describedby' => 'inputGroup-sizing-sm',
            ],
        ])) . PHP_EOL;

        // Default
        echo $view->formRow($factory->create([
            'name' => 'default',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => 'Default',
            ],
            'attributes' => [
                'aria-label' => 'Sizing example input',
                'aria-describedby' => 'inputGroup-sizing-default',
            ],
        ])) . PHP_EOL;

        // Large
        echo $view->formRow($factory->create([
            'name' => 'large',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'add_on_prepend' => 'Large',
                'size' => 'lg',
            ],
            'attributes' => [
                'aria-label' => 'Sizing example input',
                'aria-describedby' => 'inputGroup-sizing-lg',
            ],
        ]));
    },
];
