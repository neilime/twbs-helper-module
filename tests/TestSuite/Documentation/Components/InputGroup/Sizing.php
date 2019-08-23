<?php

// Documentation test config file for "Components / Input group / Sizing" part
return [
    'title' => 'Sizing',
    'url' => '%bootstrap-url%/components/input-group/#sizing',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Zend\Form\Factory();

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
    'expected' => '<div class="input-group&#x20;input-group-sm&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <div id="inputGroup-sizing-sm" class="input-group-text">' . PHP_EOL .
        '            Small' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="small" aria-label="Sizing&#x20;example&#x20;input" ' .
        'aria-describedby="inputGroup-sizing-sm" class="form-control&#x20;form-control-sm" value="">' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group&#x20;mb-3">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <div id="inputGroup-sizing-default" class="input-group-text">' . PHP_EOL .
        '            Default' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="default" aria-label="Sizing&#x20;example&#x20;input" ' .
        'aria-describedby="inputGroup-sizing-default" class="form-control" value="">' . PHP_EOL .
        '</div>' . PHP_EOL .
        '<div class="input-group&#x20;input-group-lg">' . PHP_EOL .
        '    <div class="input-group-prepend">' . PHP_EOL .
        '        <div id="inputGroup-sizing-lg" class="input-group-text">' . PHP_EOL .
        '            Large' . PHP_EOL .
        '        </div>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <input type="text" name="large" aria-label="Sizing&#x20;example&#x20;input" ' .
        'aria-describedby="inputGroup-sizing-lg" class="form-control&#x20;form-control-lg" value="">' . PHP_EOL .
        '</div>',
];
