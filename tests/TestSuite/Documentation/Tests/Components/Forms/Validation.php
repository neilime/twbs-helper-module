<?php

// Documentation test config file for "Components / Forms / Validation" part
return [
    'title' => 'Validation',
    'url' => '%bootstrap-url%/components/forms/#validation',
    'tests' => [
        [
            'title' => 'Server side',
            'url' => '%bootstrap-url%/components/forms/#server-side',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                $oForm = $oFactory->create([
                    'type' => 'form',
                    'options' => ['row_class' => 'form-row'],
                    'elements' => [
                        [
                            'spec' => [
                                'name' => 'firstName',
                                'options' => [
                                    'column' => 'md-6',
                                    'row_class' => 'mb-3',
                                    'label' => 'First name',
                                    'valid_feedback' => 'Looks good!',
                                    'row_name' => 'firstRow',
                                ],
                                'attributes' => [
                                    'type' => 'text',
                                    'value' => 'Mark',
                                    'id' => 'validationServer01',
                                    'required' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'lastName',
                                'options' => [
                                    'column' => 'md-6',
                                    'row_class' => 'mb-3',
                                    'label' => 'Last name',
                                    'valid_feedback' => 'Looks good!',
                                    'row_name' => 'firstRow',
                                ],
                                'attributes' => [
                                    'type' => 'text',
                                    'value' => 'Otto',
                                    'id' => 'validationServer02',
                                    'required' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'city',
                                'options' => [
                                    'column' => 'md-6',
                                    'row_class' => 'mb-3',
                                    'label' => 'City',
                                    'row_name' => 'secondRow',
                                ],
                                'attributes' => [
                                    'type' => 'text',
                                    'id' => 'validationServer03',
                                    'required' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'state',
                                'type' => 'select',
                                'options' => [
                                    'custom' => true,
                                    'empty_option' => ['label' => 'Choose...', 'selected' => true, 'disabled' => true],
                                    'value_options' => ['...'],
                                    'column' => 'md-3',
                                    'row_class' => 'mb-3',
                                    'label' => 'State',
                                    'row_name' => 'secondRow',
                                ],
                                'attributes' => [
                                    'id' => 'validationServer04',
                                    'required' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'zip',
                                'options' => [
                                    'column' => 'md-3',
                                    'row_class' => 'mb-3',
                                    'label' => 'Zip',
                                    'row_name' => 'secondRow',
                                ],
                                'attributes' => [
                                    'type' => 'text',
                                    'id' => 'validationServer05',
                                    'required' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'name' => 'termsAndConditions',
                                'type' => 'checkbox',
                                'options' => [
                                    'label' => 'Agree to terms and conditions',
                                    'use_hidden_element' => false,
                                    'row_name' => 'thirdRow',
                                ],
                                'attributes' => [
                                    'id' => 'invalidCheck3',
                                    'required' => true,
                                ],
                            ],
                        ],
                        [
                            'spec' => [
                                'type' => 'submit',
                                'options' => [
                                    'label' => 'Submit', 'variant' => 'primary',
                                    'row_name' => 'lastRow',
                                    'form_group' => false,
                                ],
                            ],
                        ],
                    ],
                ]);

                // Set error messages
                $oForm->get('city')->setMessages(['Please provide a valid city.']);
                $oForm->get('state')->setMessages(['Please select a valid state.']);
                $oForm->get('zip')->setMessages(['Please provide a valid zip.']);
                $oForm->get('termsAndConditions')->setMessages(['You must agree before submitting.']);


                // Render form
                echo $oView->form($oForm);
            },
        ],
    ],
];
