<?php

// Documentation test config file for "Layout / Containers / Fluid containers" part
return [
    'title' => 'Fluid containers',
    'url' => '%bootstrap-url%/layout/containers/#fluid-containers',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->container('...', 'fluid');
    },
];
