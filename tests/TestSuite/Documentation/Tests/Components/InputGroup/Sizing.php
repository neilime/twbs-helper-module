<?php

// Documentation test config file for "Components / Input group / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/input-group/#sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        // Small
        echo $oView->formRow($oFactory->create([
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
        echo $oView->formRow($oFactory->create([
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
        echo $oView->formRow($oFactory->create([
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
