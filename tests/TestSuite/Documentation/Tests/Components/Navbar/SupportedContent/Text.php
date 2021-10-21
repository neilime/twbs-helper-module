<?php

// Documentation test config file for "Components / Navbar / Supported content / Text" part
return [
    'title' => 'Text',
    'url' => '%bootstrap-url%/components/navbar/#text',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation(),
            [
                'text' => 'Navbar text with an inline element',
                'expand' => false,
                'toggler' => false,
            ]
        );

        echo PHP_EOL . '<br/>' . PHP_EOL;

        echo $view->navigation()->navbar()->render(
            new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home <span class="sr-only">(current)</span>',
                    'uri' => '#',
                    'active' => true,
                ],
                ['label' => 'Features', 'uri' => '#'],
                ['label' => 'Pricing', 'uri' => '#'],
            ]),
            [
                'brand' => 'Navbar w/ text',
                'text' => 'Navbar text with an inline element',
                'attributes' => ['id' => 'navbarText'],
            ]
        );
    },

];
