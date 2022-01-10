<?php

// Documentation test config file for "Components / Buttons / Block buttons" part
return [
    'title' => 'Block buttons',
    'url' => '%bootstrap-url%/components/buttons/#block-buttons',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo '<div class="d-grid gap-2">' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
        ]) . PHP_EOL;

        echo '</div>' . PHP_EOL;

        echo '<br/><br/>' . PHP_EOL;

        echo '<div class="d-grid gap-2 d-md-block">' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
        ]) . PHP_EOL;

        echo '</div>' . PHP_EOL;

        echo '<br/><br/>' . PHP_EOL;

        echo '<div class="d-grid gap-2 col-6 mx-auto">' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
        ]) . PHP_EOL;

        echo '</div>' . PHP_EOL;

        echo '<br/><br/>' . PHP_EOL;

        echo '<div class="d-grid gap-2 d-md-flex justify-content-md-end">' . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Button',
                'variant' => 'primary',
            ],
        ]) . PHP_EOL;

        echo '</div>';
    },
];
