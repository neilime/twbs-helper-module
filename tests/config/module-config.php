<?php
return [
    'view_manager' => [
        'doctype' => 'HTML5',
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
