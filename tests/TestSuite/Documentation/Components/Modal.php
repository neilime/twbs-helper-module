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
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
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
                    'expected' => '<div class="modal" role="dialog" tabindex="-1">' . PHP_EOL .
                        '    <div class="modal-dialog" role="document">' . PHP_EOL .
                        '        <div class="modal-content">' . PHP_EOL .
                        '            <div class="modal-header">' . PHP_EOL .
                        '                <h5 class="modal-title">Modal title</h5>' . PHP_EOL .
                        '                <button aria-label="Close" class="close" data-dismiss="modal" type="button">' .
                        '<span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-body">' . PHP_EOL .
                        '                <p>Modal body text goes here.</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-footer">' . PHP_EOL .
                        '                <button type="button" name="button" data-dismiss="modal" ' .
                        'class="btn&#x20;btn-secondary" value="">Close</button>' . PHP_EOL .
                        '                <button type="button" name="button" class="btn&#x20;btn-primary" ' .
                        'value="">Save changes</button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Scrolling long content',
                    'url' => '%bootstrap-url%/components/modal/#scrolling-long-content',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        // You can also create a scrollable modal that allows scroll the modal body
                        // by adding the option 'scrollable'
                        echo $oView->modal([
                            'title' => 'Modal title',
                            'text' => [
                                'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
                                    'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                                    'vestibulum at eros.',
                                'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
                                    'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
                                'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
                                    'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
                                    'nulla non metus auctor fringilla.',
                                'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
                                    'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                                    'vestibulum at eros.',
                                'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
                                    'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
                                'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
                                    'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
                                    'nulla non metus auctor fringilla.',
                                'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
                                    'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                                    'vestibulum at eros.',
                                'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
                                    'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
                                'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
                                    'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
                                    'nulla non metus auctor fringilla.',
                                'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
                                    'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                                    'vestibulum at eros.',
                                'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
                                    'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
                                'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
                                    'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
                                    'nulla non metus auctor fringilla.',
                                'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
                                    'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                                    'vestibulum at eros.',
                                'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
                                    'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
                                'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
                                    'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
                                    'nulla non metus auctor fringilla.',
                                'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac ' .
                                    'facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                                    'vestibulum at eros.',
                                'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sa' .
                                    'gittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
                                'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, ' .
                                    'vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
                                    'nulla non metus auctor fringilla.',
                            ],
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
                            ],
                        ], ['scrollable' => true]);
                    },
                    'expected' => '<div class="modal" role="dialog" tabindex="-1">' . PHP_EOL .
                        '    <div class="modal-dialog&#x20;modal-dialog-scrollable" role="document">' . PHP_EOL .
                        '        <div class="modal-content">' . PHP_EOL .
                        '            <div class="modal-header">' . PHP_EOL .
                        '                <h5 class="modal-title">Modal title</h5>' . PHP_EOL .
                        '                <button aria-label="Close" class="close" data-dismiss="modal" type="button">' .
                        '<span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-body">' . PHP_EOL .
                        '                <p>Cras mattis consectetur purus sit amet fermentum. ' .
                        'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
                        'Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>' . PHP_EOL .
                        '                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. ' .
                        'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>' . PHP_EOL .
                        '                <p>Aenean lacinia bibendum nulla sed consectetur. ' .
                        'Praesent commodo cursus magna, ' .
                        'vel scelerisque nisl consectetur et. Donec sed odio dui. ' .
                        'Donec ullamcorper nulla non metus auctor fringilla.</p>' . PHP_EOL .
                        '                <p>Cras mattis consectetur purus sit amet fermentum. ' .
                        'Cras justo odio, dapibus ac facilisis in, ' .
                        'egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                        'vestibulum at eros.</p>' . PHP_EOL .
                        '                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. ' .
                        'Vivamus sagittis lacus vel ' .
                        'augue laoreet rutrum faucibus dolor auctor.</p>' . PHP_EOL .
                        '                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus ma' .
                        'gna, vel scelerisque nisl consectetur et. Donec sed odio dui. ' .
                        'Donec ullamcorper nulla non metus auctor fringilla.</p>' . PHP_EOL .
                        '                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibu' .
                        's ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                        'vestibulum at eros.</p>' . PHP_EOL .
                        '                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivam' .
                        'us sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>' . PHP_EOL .
                        '                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus ma' .
                        'gna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper ' .
                        'nulla non metus auctor fringilla.</p>' . PHP_EOL .
                        '                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibu' .
                        's ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                        'vestibulum at eros.</p>' . PHP_EOL .
                        '                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivam' .
                        'us sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>' . PHP_EOL .
                        '                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus ma' .
                        'gna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non ' .
                        'metus auctor fringilla.</p>' . PHP_EOL .
                        '                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibu' .
                        's ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                        'vestibulum at eros.</p>' . PHP_EOL .
                        '                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivam' .
                        'us sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>' . PHP_EOL .
                        '                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus ma' .
                        'gna, vel scelerisque nisl consectetur et. Donec sed odio dui. ' .
                        'Donec ullamcorper nulla non metus auctor fringilla.</p>' . PHP_EOL .
                        '                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibu' .
                        's ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                        'vestibulum at eros.</p>' . PHP_EOL .
                        '                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivam' .
                        'us sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>' . PHP_EOL .
                        '                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus ma' .
                        'gna, vel scelerisque nisl consectetur et. Donec sed odio dui. ' .
                        'Donec ullamcorper nulla non metus auctor fringilla.</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-footer">' . PHP_EOL .
                        '                <button type="button" name="button" data-dismiss="modal" ' .
                        'class="btn&#x20;btn-secondary" value="">Close</button>' . PHP_EOL .
                        '                <button type="button" name="button" class="btn&#x20;btn-primary" ' .
                        'value="">Save changes</button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Vertically centered',
                    'url' => '%bootstrap-url%/components/modal/#vertically-centered',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->modal([
                            'title' => 'Modal title',
                            'Cras mattis consectetur purus sit amet fermentum. Cras justo odio, ' .
                                'dapibus ac facilisis in, egestas eget quam. Morbi leo risus, ' .
                                'porta ac consectetur ac, vestibulum at eros.',
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
                        ], ['centered' => true]);
                    },
                    'expected' => '<div class="modal" role="dialog" tabindex="-1">' . PHP_EOL .
                        '    <div class="modal-dialog&#x20;modal-dialog-centered" role="document">' . PHP_EOL .
                        '        <div class="modal-content">' . PHP_EOL .
                        '            <div class="modal-header">' . PHP_EOL .
                        '                <h5 class="modal-title">Modal title</h5>' . PHP_EOL .
                        '                <button aria-label="Close" class="close" data-dismiss="modal" type="button">' .
                        '<span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-body">' . PHP_EOL .
                        '                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, ' .
                        'dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, ' .
                        'vestibulum at eros.</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-footer">' . PHP_EOL .
                        '                <button type="button" name="button" data-dismiss="modal" ' .
                        'class="btn&#x20;btn-secondary" value="">Close</button>' . PHP_EOL .
                        '                <button type="button" name="button" class="btn&#x20;btn-primary" ' .
                        'value="">Save changes</button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Tooltips and popovers',
                    'url' => '%bootstrap-url%/components/modal/#tooltips-and-popovers',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->modal([
                            'title' => 'Modal title',
                            ['type' => 'subtitle', 'content' => 'Popover in a modal'],
                            'This <a href="#" role="button" class="btn btn-secondary popover-test" ' .
                                'title="Popover title" data-content="Popover body content is set in this attribute.">' .
                                'button</a> triggers a popover on click.',
                            '---',
                            ['type' => 'subtitle', 'content' => 'Tooltips in a modal'],
                            '<a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" ' .
                                'class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.',
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
                        ], ['centered' => true]);
                    },
                    'expected' => '<div class="modal" role="dialog" tabindex="-1">' . PHP_EOL .
                        '    <div class="modal-dialog&#x20;modal-dialog-centered" role="document">' . PHP_EOL .
                        '        <div class="modal-content">' . PHP_EOL .
                        '            <div class="modal-header">' . PHP_EOL .
                        '                <h5 class="modal-title">Modal title</h5>' . PHP_EOL .
                        '                <button aria-label="Close" class="close" data-dismiss="modal" type="button">' .
                        '<span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-body">' . PHP_EOL .
                        '                <h5>Popover in a modal</h5>' . PHP_EOL .
                        '                <p>' .
                        'This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" ' .
                        'data-content="Popover body content is set in this attribute.">button</a> ' .
                        'triggers a popover on click.</p>' . PHP_EOL .
                        '                <hr>' . PHP_EOL .
                        '                <h5>Tooltips in a modal</h5>' . PHP_EOL .
                        '                <p>' .
                        '<a href="#" class="tooltip-test" title="Tooltip">This link</a> and ' .
                        '<a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.' .
                        '</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-footer">' . PHP_EOL .
                        '                <button type="button" name="button" data-dismiss="modal" ' .
                        'class="btn&#x20;btn-secondary" value="">Close</button>' . PHP_EOL .
                        '                <button type="button" name="button" class="btn&#x20;btn-primary" ' .
                        'value="">Save changes</button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Optional sizes',
                    'url' => '%bootstrap-url%/components/modal/#optional-sizes',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->modal([
                            'title' => 'Extra large modal',
                            '...',
                        ], [
                            'fade' => true,
                            'size' => 'xl',
                            'class' => 'bd-example-modal-xl',
                        ]) . PHP_EOL;

                        echo $oView->modal([
                            'title' => 'Large modal',
                            '...',
                        ], [
                            'fade' => true,
                            'size' => 'lg',
                            'class' => 'bd-example-modal-lg',
                        ]) . PHP_EOL;

                        echo $oView->modal([
                            'title' => 'Small modal',
                            '...',
                        ], [
                            'fade' => true,
                            'size' => 'sm',
                            'class' => 'bd-example-modal-sm',
                        ]);
                    },
                    'expected' => '<div class="bd-example-modal-xl&#x20;fade&#x20;modal" ' .
                    'role="dialog" tabindex="-1">' . PHP_EOL .
                        '    <div class="modal-dialog&#x20;modal-xl" role="document">' . PHP_EOL .
                        '        <div class="modal-content">' . PHP_EOL .
                        '            <div class="modal-header">' . PHP_EOL .
                        '                <h5 class="modal-title">Extra large modal</h5>' . PHP_EOL .
                        '                <button aria-label="Close" class="close" data-dismiss="modal" type="button">' .
                        '<span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-body">' . PHP_EOL .
                        '                <p>...</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="bd-example-modal-lg&#x20;fade&#x20;modal" ' .
                        'role="dialog" tabindex="-1">' . PHP_EOL .
                        '    <div class="modal-dialog&#x20;modal-lg" role="document">' . PHP_EOL .
                        '        <div class="modal-content">' . PHP_EOL .
                        '            <div class="modal-header">' . PHP_EOL .
                        '                <h5 class="modal-title">Large modal</h5>' . PHP_EOL .
                        '                <button aria-label="Close" class="close" data-dismiss="modal" type="button">' .
                        '<span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-body">' . PHP_EOL .
                        '                <p>...</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="bd-example-modal-sm&#x20;fade&#x20;modal" ' .
                        'role="dialog" tabindex="-1">' . PHP_EOL .
                        '    <div class="modal-dialog&#x20;modal-sm" role="document">' . PHP_EOL .
                        '        <div class="modal-content">' . PHP_EOL .
                        '            <div class="modal-header">' . PHP_EOL .
                        '                <h5 class="modal-title">Small modal</h5>' . PHP_EOL .
                        '                <button aria-label="Close" class="close" data-dismiss="modal" type="button">' .
                        '<span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '            <div class="modal-body">' . PHP_EOL .
                        '                <p>...</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
    ],

];
