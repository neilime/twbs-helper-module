<?php

use Laminas\Router\Http\Segment;
use Laminas\Router\Http\TreeRouteStack;
use Laminas\View\Helper\Doctype;

return [
    'view_manager' => [
        'doctype' => Doctype::XHTML5,
        'template_map' => [
            'test/json' => __DIR__ . '/../view/test/json.phtml',
        ],
    ],
    'router' => [
        'router_class' => TreeRouteStack::class,
        'routes' => [
            'test-route' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/test-route[/:page]',
                ],
            ],
        ],
    ],
];
