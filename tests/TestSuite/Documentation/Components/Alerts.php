<?php

// Documentation test config file for "Components / Alerts" part
return array(
    'title' => 'Alerts',
    'url' => 'https://v4-alpha.getbootstrap.com/components/alerts/',
    'tests' => array(
        array(
            'title' => 'Exemple',
            'url' => 'https://v4-alpha.getbootstrap.com/components/alerts/#examples',
            'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                // Success
                echo $oView->alert('<strong>Well done!</strong> You successfully read this important alert message.', 'success', false, array(), false) . PHP_EOL;

                // Info
                echo $oView->alert('<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.', 'info', false, array(), false) . PHP_EOL;

                // Warning
                echo $oView->alert('<strong>Warning!</strong> Better check yourself, you\'re not looking too good.', 'warning', false, array(), false) . PHP_EOL;

                // Danger
                echo $oView->alert('<strong>Oh snap!</strong> Change a few things up and try submitting again.', 'danger', false, array(), false);
            },
            'expected' => '<div class="alert&#x20;alert-success" role="alert">' . PHP_EOL .
            '    <strong>Well done!</strong> You successfully read this important alert message.' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="alert&#x20;alert-info" role="alert">' . PHP_EOL .
            '    <strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="alert&#x20;alert-warning" role="alert">' . PHP_EOL .
            '    <strong>Warning!</strong> Better check yourself, you\'re not looking too good.' . PHP_EOL .
            '</div>' . PHP_EOL .
            '<div class="alert&#x20;alert-danger" role="alert">' . PHP_EOL .
            '    <strong>Oh snap!</strong> Change a few things up and try submitting again.' . PHP_EOL .
            '</div>',
            'tests' => array(
                array(
                    'title' => 'Link color',
                    'url' => 'https://v4-alpha.getbootstrap.com/components/alerts/#link-color',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        // Success
                        echo $oView->alert('<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.', 'success', false, array(), false) . PHP_EOL;

                        // Info
                        echo $oView->alert('<strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it\'s not super important.', 'info', false, array(), false) . PHP_EOL;

                        // Warning
                        echo $oView->alert('<strong>Warning!</strong> Better check yourself, you\'re <a href="#" class="alert-link">not looking too good</a>.', 'warning', false, array(), false) . PHP_EOL;

                        // Danger
                        echo $oView->alert('<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.', 'danger', false, array(), false);
                    },
                    'expected' => '<div class="alert&#x20;alert-success" role="alert">' . PHP_EOL .
                    '    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.' . PHP_EOL .
                    '</div>' . PHP_EOL .
                    '<div class="alert&#x20;alert-info" role="alert">' . PHP_EOL .
                    '    <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it\'s not super important.' . PHP_EOL .
                    '</div>' . PHP_EOL .
                    '<div class="alert&#x20;alert-warning" role="alert">' . PHP_EOL .
                    '    <strong>Warning!</strong> Better check yourself, you\'re <a href="#" class="alert-link">not looking too good</a>.' . PHP_EOL .
                    '</div>' . PHP_EOL .
                    '<div class="alert&#x20;alert-danger" role="alert">' . PHP_EOL .
                    '    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.' . PHP_EOL .
                    '</div>',
                ),
                array(
                    'title' => 'Additional content',
                    'url' => 'https://v4-alpha.getbootstrap.com/components/alerts/#additional-content',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        // Success
                        echo $oView->alert(
                                '<h4 class="alert-heading">Well done!</h4>' . PHP_EOL .
                                '    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>' . PHP_EOL .
                                '    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>', 'success', false, array(), false
                        );
                    },
                    'expected' => '<div class="alert&#x20;alert-success" role="alert">' . PHP_EOL .
                    '    <h4 class="alert-heading">Well done!</h4>' . PHP_EOL .
                    '    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>' . PHP_EOL .
                    '    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>' . PHP_EOL .
                    '</div>',
                ),
                array(
                    'title' => 'Dismissing',
                    'url' => 'https://v4-alpha.getbootstrap.com/components/alerts/#dismissing',
                    'rendering' => function(\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->alert('<strong>Holy guacamole!</strong> You should check in on some of those fields below.', 'warning', true, array(), false);
                    },
                    'expected' => '<div class="alert&#x20;alert-warning&#x20;alert-dismissible&#x20;fade&#x20;show" role="alert">' . PHP_EOL .
                    '    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . PHP_EOL .
                    '      <span aria-hidden="true">&times;</span>' . PHP_EOL .
                    '    </button>' . PHP_EOL .
                    '    <strong>Holy guacamole!</strong> You should check in on some of those fields below.' . PHP_EOL .
                    '</div>',
                ),
            ),
        ),
    ),
);
