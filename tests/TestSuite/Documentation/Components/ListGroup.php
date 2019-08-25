<?php

// Documentation test config file for "Components / List group" part
return [
    'title' => 'List group',
    'url' => '%bootstrap-url%/components/list-group/',
    'tests' => [
        [
            'title' => 'Basic example',
            'url' => '%bootstrap-url%/components/list-group/#basic-example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup([
                    'Cras justo odio',
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
            'expected' => '<ul class="list-group">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '    <li class="list-group-item">Porta ac consectetur ac</li>' . PHP_EOL .
                '    <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Active items',
            'url' => '%bootstrap-url%/components/list-group/#active-items',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup([
                    'Cras justo odio' => ['active' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
            'expected' => '<ul class="list-group">' . PHP_EOL .
                '    <li class="active&#x20;list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '    <li class="list-group-item">Porta ac consectetur ac</li>' . PHP_EOL .
                '    <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Disabled  items',
            'url' => '%bootstrap-url%/components/list-group/#disabled-items',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup([
                    'Cras justo odio' => ['disabled' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros',
                ]);
            },
            'expected' => '<ul class="list-group">' . PHP_EOL .
                '    <li aria-disabled="true" class="disabled&#x20;list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '    <li class="list-group-item">Porta ac consectetur ac</li>' . PHP_EOL .
                '    <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Links and buttons',
            'url' => '%bootstrap-url%/components/list-group/#links-and-buttons',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup([
                    'Cras justo odio' => [
                        'active' => true,
                        'attributes' => ['href' => '#'],
                    ],
                    'Dapibus ac facilisis in' => ['attributes' => ['href' => '#']],
                    'Morbi leo risus' => ['attributes' => ['href' => '#']],
                    'Porta ac consectetur ac' => ['attributes' => ['href' => '#']],
                    'Vestibulum at eros' => [
                        'disabled' => true,
                        'attributes' => ['href' => '#'],
                    ],
                ], ['type' => 'action']) . PHP_EOL;

                echo $oView->listGroup([
                    'Cras justo odio' => ['active' => true],
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros' => ['disabled' => true],
                ], ['type' => 'button']);
            },
            'expected' => '<div class="list-group">' . PHP_EOL .
                '    <a href="&#x23;" class="active&#x20;list-group-item&#x20;list-group-item-action">' .
                'Cras justo odio</a>' . PHP_EOL .
                '    <a href="&#x23;" class="list-group-item&#x20;list-group-item-action">Dapibus ac facilisis in</a>' .
                PHP_EOL .
                '    <a href="&#x23;" class="list-group-item&#x20;list-group-item-action">Morbi leo risus</a>' .
                PHP_EOL .
                '    <a href="&#x23;" class="list-group-item&#x20;list-group-item-action">Porta ac consectetur ac</a>' .
                PHP_EOL .
                '    <a href="&#x23;" aria-disabled="true" ' .
                'class="disabled&#x20;list-group-item&#x20;list-group-item-action" ' .
                'tabindex="-1">Vestibulum at eros</a>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="list-group">' . PHP_EOL .
                '    <button class="active&#x20;list-group-item&#x20;list-group-item-action" type="button">' .
                'Cras justo odio</button>' . PHP_EOL .
                '    <button class="list-group-item&#x20;list-group-item-action" type="button">' .
                'Dapibus ac facilisis in</button>' . PHP_EOL .
                '    <button class="list-group-item&#x20;list-group-item-action" type="button">' .
                'Morbi leo risus</button>' . PHP_EOL .
                '    <button class="list-group-item&#x20;list-group-item-action" type="button">' .
                'Porta ac consectetur ac</button>' . PHP_EOL .
                '    <button aria-disabled="true" class="list-group-item&#x20;list-group-item-action" type="button" ' .
                'disabled="disabled">Vestibulum at eros</button>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Flush',
            'url' => '%bootstrap-url%/components/list-group/#flush',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->listGroup(
                    [
                        'Cras justo odio',
                        'Dapibus ac facilisis in',
                        'Morbi leo risus',
                        'Porta ac consectetur ac',
                        'Vestibulum at eros',
                    ],
                    ['flush' => true]
                );
            },
            'expected' => '<ul class="list-group&#x20;list-group-flush">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '    <li class="list-group-item">Porta ac consectetur ac</li>' . PHP_EOL .
                '    <li class="list-group-item">Vestibulum at eros</li>' . PHP_EOL .
                '</ul>',
        ],
        [
            'title' => 'Horizontal',
            'url' => '%bootstrap-url%/components/list-group/#horizontal',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                // Add option 'horizontal' to change the layout of list group items from vertical to horizontal
                echo $oView->listGroup(
                    [
                        'Cras justo odio',
                        'Dapibus ac facilisis in',
                        'Morbi leo risus',
                    ],
                    ['horizontal' => true]
                ) . PHP_EOL;

                // Alternatively, choose a responsive variant `sm|md|lg|xl`
                // to make a list group horizontal starting at that breakpoint’s
                foreach (['sm', 'md', 'lg', 'xl'] as $sBreakpoint) {
                    echo $oView->listGroup(
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Morbi leo risus',
                        ],
                        ['horizontal' => $sBreakpoint]
                    ) . PHP_EOL;
                }
            },
            'expected' => '<ul class="list-group&#x20;list-group-horizontal">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<ul class="list-group&#x20;list-group-horizontal-sm">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<ul class="list-group&#x20;list-group-horizontal-md">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<ul class="list-group&#x20;list-group-horizontal-lg">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL .
                '<ul class="list-group&#x20;list-group-horizontal-xl">' . PHP_EOL .
                '    <li class="list-group-item">Cras justo odio</li>' . PHP_EOL .
                '    <li class="list-group-item">Dapibus ac facilisis in</li>' . PHP_EOL .
                '    <li class="list-group-item">Morbi leo risus</li>' . PHP_EOL .
                '</ul>' . PHP_EOL,
        ],
    ],
];
