<?php

return [
    'view_manager' => [
        'doctype' => \Laminas\View\Helper\Doctype::XHTML5,
        'template_map' => [
            'test/json' => __DIR__ . '/../view/test/json.phtml',
        ],
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
