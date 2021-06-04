<?php

// Documentation test config file for "Components / Forms / Layout / Form groups" part
return [
    'title' => 'Form groups',
    'url' => '%bootstrap-url%/forms/#mb-3s',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'exampleInput',
                        'options' => [
                            'label' => 'Example label',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'formGroupExampleInput',
                            'placeholder' => 'Example input',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'exampleInput2',
                        'options' => [
                            'label' => 'Another label',
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'id' => 'formGroupExampleInput2',
                            'placeholder' => 'Another input',
                        ],
                    ],
                ],
            ]
        ]));
    },
    'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="mb-3">' . PHP_EOL .
        '        <label class="form-label" for="formGroupExampleInput">Example label</label>' . PHP_EOL .
        '        <input name="exampleInput" type="text" id="formGroupExampleInput" ' .
        'placeholder="Example&#x20;input" class="form-control" value=""/>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="mb-3">' . PHP_EOL .
        '        <label class="form-label" for="formGroupExampleInput2">Another label</label>' . PHP_EOL .
        '        <input name="exampleInput2" type="text" id="formGroupExampleInput2" ' .
        'placeholder="Another&#x20;input" class="form-control" value=""/>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];
