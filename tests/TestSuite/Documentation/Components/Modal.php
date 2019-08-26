<?php

// Documentation test config file for "Components / Modal" part
return [
    'title' => 'Modal',
    'url' => '%bootstrap-url%/components/modal/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/components/modal/#examples',
            'tests' => [
                [
                    'title' => 'Modal components',
                    'url' => '%bootstrap-url%/components/modal/#modal-components',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->modal([
                            'title' => 'Modal title',
                            'Modal body text goes here.',
                            'footer' => [
                                'button' => [
                                    [
                                        'options' => [
                                            'label' => 'Close',
                                            'variant' => 'secondary',
                                        ],
                                        'attributes' => [
                                            'data-dismiss' => 'modal',
                                        ],
                                    ],
                                    [
                                        'options' => [
                                            'label' => 'Save changes',
                                            'variant' => 'primary',
                                        ],
                                    ],
                                ],
                            ]
                        ]);
                    },
                    'expected' => '<div tabindex="-1" role="dialog" class="modal">' . PHP_EOL .
                        '    <div class="modal-dialog" role="document">' . PHP_EOL .
                        '        <div class="modal-content">' . PHP_EOL .
                        '            <div class="modal-header">' . PHP_EOL .
                        '                <h5 class="modal-title">Modal title</h5>' . PHP_EOL .
                        '                <button class="close" data-dismiss="modal" aria-label="Close">'.
                        '<span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-body">' . PHP_EOL .
                        '                <p>Modal body text goes here.</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-footer">' . PHP_EOL .
                        '                <button type="button" name="button" data-dismiss="modal" '.
                        'class="btn&#x20;btn-secondary" value="">Close</button>' . PHP_EOL .
                        '                <button type="button" name="button" class="btn&#x20;btn-primary" '.
                        'value="">Save changes</button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
    ],

];
