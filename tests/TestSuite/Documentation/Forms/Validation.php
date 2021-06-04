<?php

// Documentation test config file for "Components / Forms / Validation" part
return [
    'title' => 'Validation',
    'url' => '%bootstrap-url%/forms/#validation',
    'tests' => [
        [
            'title' => 'Server side',
            'url' => '%bootstrap-url%/forms/#server-side',
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
            'expected' => '<form action="" method="POST" name="form" role="form" id="form">' . PHP_EOL .
                '    <div class="form-row">' . PHP_EOL .
                '        <div class="col-md-6&#x20;mb-3">' . PHP_EOL .
                '            <label class="form-label" for="validationServer01">First name</label>' . PHP_EOL .
                '            <input name="firstName" type="text" id="validationServer01" required="required" ' .
                'class="form-control&#x20;is-valid" value="Mark"/>' . PHP_EOL .
                '            <div class="valid-feedback">' . PHP_EOL .
                '                Looks good!' . PHP_EOL .
                '            </div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="col-md-6&#x20;mb-3">' . PHP_EOL .
                '            <label class="form-label" for="validationServer02">Last name</label>' . PHP_EOL .
                '            <input name="lastName" type="text" id="validationServer02" required="required" ' .
                'class="form-control&#x20;is-valid" value="Otto"/>' . PHP_EOL .
                '            <div class="valid-feedback">' . PHP_EOL .
                '                Looks good!' . PHP_EOL .
                '            </div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="form-row">' . PHP_EOL .
                '        <div class="col-md-6&#x20;has-error&#x20;mb-3">' . PHP_EOL .
                '            <label class="col-form-label&#x20;form-label" for="validationServer03">City</label>'
                . PHP_EOL .
                '            <input name="city" type="text" id="validationServer03" required="required" ' .
                'class="form-control&#x20;is-invalid" value=""/>' . PHP_EOL .
                '            <div class="invalid-feedback">Please provide a valid city.</div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="col-md-3&#x20;has-error&#x20;mb-3">' . PHP_EOL .
                '            <label class="col-form-label&#x20;form-label" for="validationServer04">' .
                'State</label>' . PHP_EOL .
                '            <select name="state" id="validationServer04" required="required" ' .
                'class="form-select&#x20;is-invalid">' . PHP_EOL .
                '                <option value="" selected="selected" disabled="disabled">Choose...</option>'
                . PHP_EOL .
                '                <option value="0">...</option>' . PHP_EOL .
                '            </select>' . PHP_EOL .
                '            <div class="invalid-feedback">Please select a valid state.</div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="col-md-3&#x20;has-error&#x20;mb-3">' . PHP_EOL .
                '            <label class="col-form-label&#x20;form-label" for="validationServer05">Zip</label>'
                . PHP_EOL .
                '            <input name="zip" type="text" id="validationServer05" ' .
                'required="required" class="form-control&#x20;is-invalid" value=""/>' . PHP_EOL .
                '            <div class="invalid-feedback">Please provide a valid zip.</div>'
                . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="has-error&#x20;mb-3">' . PHP_EOL .
                '        <div class="form-check">' . PHP_EOL .
                '            <input type="checkbox" name="termsAndConditions" id="invalidCheck3" ' .
                'required="required" class="form-check-input&#x20;is-invalid" value="1"/>' . PHP_EOL .
                '            <label class="form-check-label" for="invalidCheck3">' .
                'Agree to terms and conditions</label>' . PHP_EOL .
                '            <div class="invalid-feedback">You must agree before submitting.</div>'
                . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>' .
                PHP_EOL .
                '</form>',
        ],
    ],
];
