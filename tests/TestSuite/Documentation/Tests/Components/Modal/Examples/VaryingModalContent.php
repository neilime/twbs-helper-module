<?php

// Documentation test config file for "Components / Modal / Examples / Varying modal content" part
return [
    'title' => 'Varying modal content',
    'url' => '%bootstrap-url%/components/modal/#varying-modal-content',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $view) {

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Open modal for @mdo',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModal',
                'data-bs-whatever' => '@mdo',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Open modal for @fat',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModal',
                'data-bs-whatever' => '@fat',
            ],
        ]) . PHP_EOL;

        echo $view->formButton()->renderSpec([
            'options' => [
                'label' => 'Open modal for @getbootstrap',
                'variant' => 'primary',
            ],
            'attributes' => [
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#exampleModal',
                'data-bs-whatever' => '@getbootstrap',
            ],
        ]) . PHP_EOL;

        echo $view->modal(
            [
                'title' => [
                    'content' => 'New message to @mdo',
                    'attributes' => ['id' => 'exampleModalLabel'],
                ],
                'form' => [
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'recipient',
                                'options' => [
                                    'label' => 'Recipient:',
                                ],
                                'attributes' => [
                                    'id' => 'recipient-name',
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'message',
                                'options' => [
                                    'label' => 'Message:',
                                ],
                                'attributes' => [
                                    'type' => 'textarea',
                                    'id' => 'message-text',
                                ],
                            ],
                        ],
                    ],
                ],
                'footer' => [
                    'button' => [
                        [
                            'options' => [
                                'label' => 'Close',
                                'variant' => 'secondary',
                            ],
                            'attributes' => [
                                'data-bs-dismiss' => 'modal',
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Send message',
                                'variant' => 'primary',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'fade' => true,
                'hidden' => true,
                'id' => 'exampleModal',
            ]
        );

        $view->inlineScript()->captureStart();

        // TODO: docusaurus mdx-loader does not support this
        // echo <<<JS
        //     var exampleModal = document.getElementById('exampleModal')
        //     exampleModal.addEventListener('show.bs.modal', function (event) {
        //         // Button that triggered the modal
        //         var button = event.relatedTarget
        //         // Extract info from data-bs-* attributes
        //         var recipient = button.getAttribute('data-bs-whatever')
        //         // If necessary, you could initiate an AJAX request here
        //         // and then do the updating in a callback.
        //         //
        //         // Update the modal's content.
        //         var modalTitle = exampleModal.querySelector('.modal-title')
        //         var modalBodyInput = exampleModal.querySelector('.modal-body input')

        //         modalTitle.textContent = 'New message to ' + recipient
        //         modalBodyInput.value = recipient
        //     })
        // JS;

        $view->inlineScript()->captureEnd();
        echo $view->inlineScript();
    },
];
