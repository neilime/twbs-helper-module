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
            ),
        ),
    ),
);
