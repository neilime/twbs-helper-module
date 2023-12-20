<?php

// Documentation test config file for "Components / Accordion" part
return [
    'title' => 'Accordion',
    'url' => '%bootstrap-url%/components/accordion/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/accordion/#example',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                echo $view->accordion([
                    [
                        'header' => [
                            'content' => 'Accordion Item #1',
                            'attributes' => ['id' => 'headingOne'],
                        ],
                        'body' => [
                            'content' => '<strong>This is the first item\'s accordion body.</strong> ' .
                                'It is shown by default, until the collapse plugin adds the appropriate classes ' .
                                'that we use to style each element. ' .
                                'These classes control the overall appearance, ' .
                                'as well as the showing and hiding via CSS transitions. ' .
                                'You can modify any of this with custom CSS or overriding our default variables. ' .
                                'It\'s also worth noting that just about any HTML can go within ' .
                                'the <code>.accordion-body</code>, ' .
                                'though the transition does limit overflow.',
                            'attributes' => ['id' => 'collapseOne'],
                        ],
                    ],
                    [
                        'header' => [
                            'content' => 'Accordion Item #2',
                            'attributes' => ['id' => 'headingTwo'],
                        ],
                        'body'  => [
                            'content' => '<strong>This is the second item\'s accordion body.</strong> ' .
                                'It is hidden by default, until the collapse plugin adds the appropriate classes ' .
                                'that we use to style each element. ' .
                                'These classes control the overall appearance, ' .
                                'as well as the showing and hiding via CSS transitions. ' .
                                'You can modify any of this with custom CSS or overriding our default variables. ' .
                                'It\'s also worth noting that just about any HTML can go within ' .
                                'the <code>.accordion-body</code>, ' .
                                'though the transition does limit overflow.',
                            'attributes' => ['id' => 'collapseTwo'],
                        ],
                    ],
                    [
                        'header' => [
                            'content' => 'Accordion Item #3',
                            'attributes' => ['id' => 'headingThree'],
                        ],
                        'body'  => [
                            'content' => '<strong>This is the third item\'s accordion body.</strong> ' .
                                'It is hidden by default, until the collapse plugin adds the appropriate classes ' .
                                'that we use to style each element. ' .
                                'These classes control the overall appearance, ' .
                                'as well as the showing and hiding via CSS transitions. ' .
                                'You can modify any of this with custom CSS or overriding our default variables. ' .
                                'It\'s also worth noting that just about any HTML can go within ' .
                                'the <code>.accordion-body</code>, ' .
                                'though the transition does limit overflow.',
                            'attributes' => ['id' => 'collapseThree'],
                        ],
                    ],
                ], ['id' => 'accordionExample']);
            },
            'tests' => [
                [
                    'title' => 'Flush',
                    'url' => '%bootstrap-url%/components/accordion/#flush',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->accordion([
                            [
                                'header' => [
                                    'content' => 'Accordion Item #1',
                                    'attributes' => ['id' => 'flush-headingOne'],
                                ],
                                'body' => [
                                    'content' => 'Placeholder content for this accordion, which is intended to ' .
                                        'demonstrate the <code>.accordion-flush</code> class. ' .
                                        'This is the first item\'s accordion body.',
                                    'attributes' => ['id' => 'flush-collapseOne'],
                                ],
                                'show' => false,
                            ],
                            [
                                'header' => [
                                    'content' => 'Accordion Item #2',
                                    'attributes' => ['id' => 'flush-headingTwo'],
                                ],
                                'body'  => [
                                    'content' => 'Placeholder content for this accordion, which is intended to ' .
                                        'demonstrate the <code>.accordion-flush</code> class. ' .
                                        'This is the second item\'s accordion body. ' .
                                        'Let\'s imagine this being filled with some actual content.',
                                    'attributes' => ['id' => 'flush-collapseTwo'],
                                ],
                            ],
                            [
                                'header' => [
                                    'content' => 'Accordion Item #3',
                                    'attributes' => ['id' => 'flush-headingThree'],
                                ],
                                'body'  => [
                                    'content' => 'Placeholder content for this accordion, which is intended to ' .
                                        'demonstrate the <code>.accordion-flush</code> class. ' .
                                        'This is the third item\'s accordion body. ' .
                                        'Nothing more exciting happening here in terms of content, ' .
                                        'but just filling up the space to make it look, at least at first glance, ' .
                                        'a bit more representative of how this would look in a real-world application.',
                                    'attributes' => ['id' => 'flush-collapseThree'],
                                ],
                            ],
                        ], [
                            'id' => 'accordionFlushExample',
                            'flush' => true,
                        ]);
                    },
                ],
                [
                    'title' => 'Always open',
                    'url' => '%bootstrap-url%/components/accordion/#always-open',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {
                        echo $view->accordion([
                            [
                                'header' => [
                                    'content' => 'Accordion Item #1',
                                    'attributes' => ['id' => 'panelsStayOpen-headingOne'],
                                ],
                                'body' => [
                                    'content' => '  <strong>This is the first item\'s accordion body.</strong> ' .
                                        'It is shown by default, until the collapse plugin adds the appropriate ' .
                                        'classes that we use to style each element. These classes control the ' .
                                        'overall appearance, as well as the showing and hiding via CSS transitions. ' .
                                        'You can modify any of this with custom CSS or overriding our default ' .
                                        'variables. It\'s also worth noting that just about any HTML can go within ' .
                                        'the <code>.accordion-body</code>, though the transition does limit overflow.',
                                    'attributes' => ['id' => 'panelsStayOpen-collapseOne'],
                                ],
                            ],
                            [
                                'header' => [
                                    'content' => 'Accordion Item #2',
                                    'attributes' => ['id' => 'panelsStayOpen-headingTwo'],
                                ],
                                'body'  => [
                                    'content' => '<strong>This is the second item\'s accordion body.</strong> ' .
                                        'It is hidden by default, until the collapse plugin adds the appropriate ' .
                                        'classes that we use to style each element. These classes control the ' .
                                        'overall appearance, as well as the showing and hiding via CSS transitions. ' .
                                        'You can modify any of this with custom CSS or overriding our default ' .
                                        'variables. It\'s also worth noting that just about any HTML can go within ' .
                                        'the <code>.accordion-body</code>, though the transition does limit overflow.',
                                    'attributes' => ['id' => 'panelsStayOpen-collapseTwo'],
                                ],
                            ],
                            [
                                'header' => [
                                    'content' => 'Accordion Item #3',
                                    'attributes' => ['id' => 'panelsStayOpen-headingThree'],
                                ],
                                'body'  => [
                                    'content' => ' <strong>This is the third item\'s accordion body.</strong> ' .
                                        'It is hidden by default, until the collapse plugin adds the appropriate ' .
                                        'classes that we use to style each element. These classes control the ' .
                                        'overall appearance, as well as the showing and hiding via CSS transitions. ' .
                                        'You can modify any of this with custom CSS or overriding our default ' .
                                        'variables. It\'s also worth noting that just about any HTML can go within ' .
                                        'the <code>.accordion-body</code>, though the transition does limit overflow.',
                                    'attributes' => ['id' => 'panelsStayOpen-collapseThree'],
                                ],
                            ],
                        ], [
                            'id' => 'accordionPanelsStayOpenExample',
                            'always_open' => true,
                        ]);
                    },
                ],
            ],
        ],
    ],
];
