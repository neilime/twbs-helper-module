<?php

// Documentation test config file for "Layout / Containers / Responsive containers" part
return [
    'title' => 'Responsive containers',
    'url' => '%bootstrap-url%/layout/containers/#responsive-containers',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->container('100% wide until small breakpoint', 'sm') . PHP_EOL;
        echo $view->container('100% wide until medium breakpoint', 'md') . PHP_EOL;
        echo $view->container('100% wide until large breakpoint', 'lg') . PHP_EOL;
        echo $view->container('100% wide until extra large breakpoint', 'xl') . PHP_EOL;
        echo $view->container('100% wide until extra extra large breakpoint', 'xxl') . PHP_EOL;
    },
];
