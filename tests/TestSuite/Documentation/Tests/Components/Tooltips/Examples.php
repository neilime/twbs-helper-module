<?php

// Documentation test config file for "Components / Tooltips / Examples" part
return [
    'title' => 'Examples',
    'url' => '%bootstrap-url%/components/tooltips/#examples',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        foreach (
            [
                'top' => 'Tooltip on top',
                'right' => 'Tooltip on right',
                'bottom' => 'Tooltip on bottom',
                'left' => 'Tooltip on left',
            ] as $placement => $label
        ) {
            echo $view->formButton()->renderSpec([
                'options' => [
                    'label' => $label,
                    'tooltip' => [
                        'placement' => $placement,
                        'content' => $label,
                    ],
                ],
            ]) . PHP_EOL;
        }

        // With custom HTML added:
        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Tooltip with HTML',
                'tooltip' => '<em>Tooltip</em> <u>with</u> <b>HTML</b>',
            ],
        ]);
    },
];
