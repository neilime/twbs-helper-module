<?php

return [
    'view_manager' => [
        'doctype' => \Laminas\View\Helper\Doctype::XHTML11,
    ],
    'router' => [
        'router_class' => \Laminas\Router\Http\TreeRouteStack::class,
        'routes' => [
            'test-route' => [
                'type' => \Laminas\Router\Http\Segment::class,
                'options' => [
                    'route' => '/test-route[/:page]',
                ],
            ],
        ],
    ],
];
