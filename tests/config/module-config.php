<?php
return [
    'view_manager' => [
        'doctype' => 'HTML5',
    ],
    'router' => [
        'router_class' => \Zend\Router\Http\TreeRouteStack::class,
        'routes' => [
            'test-route' => [
                'type' => \Zend\Router\Http\Segment::class,
                'options' => [
                    'route' => '/test-route[/:page]',
                ],
            ],
        ],
    ],
];
