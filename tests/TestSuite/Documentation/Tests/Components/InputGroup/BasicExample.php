<?php

// Documentation test config file for "Components / Input group / Basic example" part
return [
    'title' => 'Basic example',
    'url' => '%bootstrap-url%/components/input-group/#basic-example',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->formRow($oFactory->create([
            'name' => 'username',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => '@',
            ],
            'attributes' => [
                'placeholder' => 'Username',
                'aria-label' => 'Username',
                'aria-describedby' => 'basic-addon1',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'recipient_username',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_append' => '@example.com',
            ],
            'attributes' => [
                'placeholder' => 'Recipient\'s username',
                'aria-label' => 'Recipient\'s username',
                'aria-describedby' => 'basic-addon2',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'url',
            'type' => 'text',
            'options' => [
                'label' => 'Your vanity URL',
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => 'https://example.com/users/',
            ],
            'attributes' => [
                'id' => 'basic-url',
                'aria-describedby' => 'basic-addon3',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'amount',
            'type' => 'text',
            'options' => [
                'form_group' => false,
                'input_group_class' => 'mb-3',
                'add_on_prepend' => '$',
                'add_on_append' => '.00',
            ],
            'attributes' => [
                'aria-label' => 'Amount (to the nearest dollar)',
            ],
        ])) . PHP_EOL;

        echo $oView->formRow($oFactory->create([
            'name' => 'textarea',
            'type' => 'textarea',
            'options' => [
                'form_group' => false,
                'add_on_prepend' => 'With textarea',
            ],
            'attributes' => [
                'aria-label' => 'With textarea',
            ],
        ]));
    },
];
