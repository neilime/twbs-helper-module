<?php

// Documentation test config file for "Components / Toasts" part
return [
    'title' => 'Toasts',
    'url' => '%bootstrap-url%/components/toasts/',
    'tests' => [
        [
            'title' => 'Examples',
            'url' => '%bootstrap-url%/components/toasts/#examples',
            'tests' => [
                [
                    'title' => 'Basic',
                    'url' => '%bootstrap-url%/components/toasts/#basic',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->toast([
                            'header' => [
                                'image' => [
                                    'images/demo/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);
                    },
                    'expected' => '<div aria-atomic="true" aria-live="assertive" class="toast" '.
                    'role="alert">' . PHP_EOL .
                    '    <div class="toast-header">' . PHP_EOL .
                    '        <img alt="..." class="mr-2&#x20;rounded" '.
                    'src="images&#x2F;demo&#x2F;rounded-blue.svg">' . PHP_EOL .
                    '        <strong class="mr-auto">Bootstrap</strong>' . PHP_EOL .
                    '        <small class="text-muted">11 mins ago</small>' . PHP_EOL .
                    '        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" '.
                    'type="button"><span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '    <div class="toast-body">' . PHP_EOL .
                    '        Hello, world! This is a toast message.' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '</div>',
                ],
                [
                    'title' => 'Translucent',
                    'url' => '%bootstrap-url%/components/toasts/#translucent',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                        echo '<div class="bg-dark">';

                        echo $oView->toast([
                            'header' => [
                                'image' => [
                                    'images/demo/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);
                        
                        echo '</div>';
                    },
                    'expected' => '<div class="bg-dark">' .
                    '<div aria-atomic="true" aria-live="assertive" class="toast" '.
                    'role="alert">' . PHP_EOL .
                    '    <div class="toast-header">' . PHP_EOL .
                    '        <img alt="..." class="mr-2&#x20;rounded" '.
                    'src="images&#x2F;demo&#x2F;rounded-blue.svg">' . PHP_EOL .
                    '        <strong class="mr-auto">Bootstrap</strong>' . PHP_EOL .
                    '        <small class="text-muted">11 mins ago</small>' . PHP_EOL .
                    '        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" '.
                    'type="button"><span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '    <div class="toast-body">' . PHP_EOL .
                    '        Hello, world! This is a toast message.' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '</div>' .
                    '</div>',
                ],
                [
                    'title' => 'Stacking',
                    'url' => '%bootstrap-url%/components/toasts/#stacking',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                        echo $oView->toast([
                            'header' => [
                                'image' => [
                                    'images/demo/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => 'just now',
                            ],
                            'body' => 'See? Just like this.',
                        ]) . PHP_EOL;

                        echo $oView->toast([
                            'header' => [
                                'image' => [
                                    'images/demo/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '2 seconds ago',
                            ],
                            'body' => 'Heads up, toasts will stack automatically',
                        ]);
                    },
                    'expected' => '<div aria-atomic="true" aria-live="assertive" class="toast" '.
                    'role="alert">' . PHP_EOL .
                    '    <div class="toast-header">' . PHP_EOL .
                    '        <img alt="..." class="mr-2&#x20;rounded" '.
                    'src="images&#x2F;demo&#x2F;rounded-blue.svg">' . PHP_EOL .
                    '        <strong class="mr-auto">Bootstrap</strong>' . PHP_EOL .
                    '        <small class="text-muted">just now</small>' . PHP_EOL .
                    '        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" '.
                    'type="button"><span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '    <div class="toast-body">' . PHP_EOL .
                    '        See? Just like this.' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '</div>' . PHP_EOL .
                    '<div aria-atomic="true" aria-live="assertive" class="toast" '.
                    'role="alert">' . PHP_EOL .
                    '    <div class="toast-header">' . PHP_EOL .
                    '        <img alt="..." class="mr-2&#x20;rounded" '.
                    'src="images&#x2F;demo&#x2F;rounded-blue.svg">' . PHP_EOL .
                    '        <strong class="mr-auto">Bootstrap</strong>' . PHP_EOL .
                    '        <small class="text-muted">2 seconds ago</small>' . PHP_EOL .
                    '        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" '.
                    'type="button"><span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '    <div class="toast-body">' . PHP_EOL .
                    '        Heads up, toasts will stack automatically' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '</div>',
                ],
                [
                    'title' => 'Placement',
                    'url' => '%bootstrap-url%/components/toasts/#placement',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                        echo '<div class="bg-dark" style="position:relative;min-height:200px;">';

                        echo $oView->toast([
                            'placement' => 'top-right',
                            'header' => [
                                'image' => [
                                    'images/demo/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);
                        
                        echo '</div>';

                        echo PHP_EOL . '<br><br>' . PHP_EOL;

                        echo '<div class="bg-dark" style="position:relative;min-height:200px;">';

                        echo $oView->toast([
                            'placement' => 'top-center',
                            'header' => [
                                'image' => [
                                    'images/demo/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);
                        
                        echo '</div>';
                    },
                    'expected' => '<div class="bg-dark" style="position:relative;min-height:200px;">' .
                    '<div aria-atomic="true" aria-live="assertive" class="toast" role="alert" '.
                    'style="position&#x3A;&#x20;absolute&#x3B;right&#x3A;&#x20;0&#x3B;top&#x3A;&#x20;0&#x3B;"'.
                    '>' . PHP_EOL .
                    '    <div class="toast-header">' . PHP_EOL .
                    '        <img alt="..." class="mr-2&#x20;rounded" '.
                    'src="images&#x2F;demo&#x2F;rounded-blue.svg">' . PHP_EOL .
                    '        <strong class="mr-auto">Bootstrap</strong>' . PHP_EOL .
                    '        <small class="text-muted">11 mins ago</small>' . PHP_EOL .
                    '        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" '.
                    'type="button"><span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '    <div class="toast-body">' . PHP_EOL .
                    '        Hello, world! This is a toast message.' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '</div>' .
                    '</div>'. PHP_EOL .
                    '<br><br>' . PHP_EOL .
                    '<div class="bg-dark" style="position:relative;min-height:200px;">' .
                    '<div aria-atomic="true" aria-live="assertive" class="toast" role="alert" '.
                    'style="left&#x3A;&#x20;0&#x3B;margin-left&#x3A;&#x20;auto&#x3B;margin-right&#x3A;&#x20;auto&#x3B;'.
                    'position&#x3A;&#x20;absolute&#x3B;right&#x3A;&#x20;0&#x3B;top&#x3A;&#x20;0&#x3B;">' . PHP_EOL .
                    '    <div class="toast-header">' . PHP_EOL .
                    '        <img alt="..." class="mr-2&#x20;rounded" '.
                    'src="images&#x2F;demo&#x2F;rounded-blue.svg">' . PHP_EOL .
                    '        <strong class="mr-auto">Bootstrap</strong>' . PHP_EOL .
                    '        <small class="text-muted">11 mins ago</small>' . PHP_EOL .
                    '        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" '.
                    'type="button"><span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '    <div class="toast-body">' . PHP_EOL .
                    '        Hello, world! This is a toast message.' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '</div>' .
                    '</div>',
                ],
                [
                    'title' => 'Accessibility',
                    'url' => '%bootstrap-url%/components/toasts/#accessibility',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        echo $oView->toast([
                            'autohide' => false,
                            'header' => [
                                'image' => [
                                    'images/demo/rounded-blue.svg',
                                    ['alt' => '...', 'class' => 'rounded mr-2'],
                                ],
                                'title' => 'Bootstrap',
                                'subtitle' => '11 mins ago',
                            ],
                            'body' => 'Hello, world! This is a toast message.',
                        ]);
                    },
                    'expected' => '<div aria-atomic="true" aria-live="assertive" class="toast" '.
                    'data-autohide="false" role="alert">' . PHP_EOL .
                    '    <div class="toast-header">' . PHP_EOL .
                    '        <img alt="..." class="mr-2&#x20;rounded" '.
                    'src="images&#x2F;demo&#x2F;rounded-blue.svg">' . PHP_EOL .
                    '        <strong class="mr-auto">Bootstrap</strong>' . PHP_EOL .
                    '        <small class="text-muted">11 mins ago</small>' . PHP_EOL .
                    '        <button aria-label="Close" class="close&#x20;mb-1&#x20;ml-2" data-dismiss="toast" '.
                    'type="button"><span aria-hidden="true">&times;</span></button>' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '    <div class="toast-body">' . PHP_EOL .
                    '        Hello, world! This is a toast message.' . PHP_EOL .
                    '    </div>' . PHP_EOL .
                    '</div>',
                ],
            ],
        ],
    ],
];
