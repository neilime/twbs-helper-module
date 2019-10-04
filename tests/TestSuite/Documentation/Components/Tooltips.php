<?php

// Documentation test config file for "Components / Tooltips" part
return [
    'title' => 'Tooltips',
    'url' => '%bootstrap-url%/components/tooltips/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/components/tooltips/#examples',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                foreach ([
                    'top' => 'Tooltip on top',
                    'right' => 'Tooltip on right',
                    'bottom' => 'Tooltip on bottom',
                    'left' => 'Tooltip on left',
                ] as $sPlacement => $sLabel) {
                    echo $oView->formButton([
                        'name' => 'tooltip',
                        'options' => [
                            'label' => $sLabel,
                            'tooltip' => [
                                'placement' => $sPlacement,
                                'content' => $sLabel,
                            ],
                        ],
                    ]) . PHP_EOL;
                }

                echo $oView->formButton([
                    'name' => 'tooltip',
                    'options' => [
                        'label' => 'Tooltip with HTML',
                        'tooltip' => '<em>Tooltip</em> <u>with</u> <b>HTML</b>',
                    ],
                ]);
            },
            'expected' => '<button type="button" name="tooltip" class="btn&#x20;btn-secondary" '.
            'title="Tooltip&#x20;on&#x20;top" data-toggle="tooltip" data-placement="top" value="">'.
            'Tooltip on top' .
            '</button>' . PHP_EOL .
            '<button type="button" name="tooltip" class="btn&#x20;btn-secondary" '.
            'title="Tooltip&#x20;on&#x20;right" data-toggle="tooltip" data-placement="right" value="">'.
            'Tooltip on right' .
            '</button>' . PHP_EOL .
            '<button type="button" name="tooltip" class="btn&#x20;btn-secondary" '.
            'title="Tooltip&#x20;on&#x20;bottom" data-toggle="tooltip" data-placement="bottom" value="">'.
            'Tooltip on bottom' .
            '</button>' . PHP_EOL .
            '<button type="button" name="tooltip" class="btn&#x20;btn-secondary" '.
            'title="Tooltip&#x20;on&#x20;left" data-toggle="tooltip" data-placement="left" value="">'.
            'Tooltip on left' .
            '</button>' . PHP_EOL.
            '<button type="button" name="tooltip" class="btn&#x20;btn-secondary" '.
            'title="&lt;em&gt;Tooltip&lt;&#x2F;em&gt;&#x20;&lt;u&gt;with&lt;&#x2F;'.
            'u&gt;&#x20;&lt;b&gt;HTML&lt;&#x2F;b&gt;" data-html="true" data-toggle="tooltip" value="">'.
            'Tooltip with HTML' .
            '</button>',
        ],
    ],
];
