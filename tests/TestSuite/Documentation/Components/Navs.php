<?php

// Documentation test config file for "Components / Navs" part
return [
    'title' => 'Navs',
    'url' => '%bootstrap-url%/components/navs/',
    'tests' => [
        [
            'title' => 'Base nav',
            'url' => '%bootstrap-url%/components/navs/#base-nav',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->navigation()->menu(new \Zend\Navigation\Navigation([
                    ['label' => 'Active', 'uri' => '#', 'active' => true,],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Link', 'uri' => '#',],
                    ['label' => 'Disabled', 'uri' => '#', 'visible' => false,],
                ]));
            },
            'expected' => '<ul class="nav">' . PHP_EOL .
                '    <li class="&#x20;nav-item">' . PHP_EOL .
                '        <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '    <li class="nav-item">' . PHP_EOL .
                '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '    <li class="nav-item">' . PHP_EOL .
                '        <a class="nav-link" href="&#x23;">Link</a>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '    <li class="nav-item">' . PHP_EOL .
                '        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">' .
                'Disabled' .
                '</a>' . PHP_EOL .
                '    </li>' . PHP_EOL .
                '</ul>',
        ],
    ],
];
