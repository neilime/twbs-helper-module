<?php

// Documentation test config file for "Layout / Containers / Default container" part
return [
    'title' => 'Default container',
    'url' => '%bootstrap-url%/layout/containers/#default-container',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->container('');
    },
];
