<?php

// Documentation test config file for "Components / Buttons" part
return array(
    'title' => 'Buttons',
    'url' => 'https://getbootstrap.com/components/buttons/',
    'tests' => array(
        array(
            'title' => 'Example',
            'url' => 'https://getbootstrap.com/components/buttons/#example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'] as $sVariant) {
                    $oButton = new \Zend\Form\Element\Button($sVariant, array(
                        'label' => ucfirst($sVariant),
                        'variant' => $sVariant,
                    ));
                    echo $oView->formButton($oButton) . PHP_EOL;
                }
            },
            'expected' => '<button type="button" name="primary" class="btn&#x20;btn-primary" value="">Primary</button>' . PHP_EOL .
                '<button type="button" name="secondary" class="btn&#x20;btn-secondary" value="">Secondary</button>' . PHP_EOL .
                '<button type="button" name="success" class="btn&#x20;btn-success" value="">Success</button>' . PHP_EOL .
                '<button type="button" name="danger" class="btn&#x20;btn-danger" value="">Danger</button>' . PHP_EOL .
                '<button type="button" name="warning" class="btn&#x20;btn-warning" value="">Warning</button>' . PHP_EOL .
                '<button type="button" name="info" class="btn&#x20;btn-info" value="">Info</button>' . PHP_EOL .
                '<button type="button" name="light" class="btn&#x20;btn-light" value="">Light</button>' . PHP_EOL .
                '<button type="button" name="dark" class="btn&#x20;btn-dark" value="">Dark</button>' . PHP_EOL .
                '<button type="button" name="link" class="btn&#x20;btn-link" value="">Link</button>' . PHP_EOL,
        ),
        array(
            'title' => 'Outline buttons',
            'url' => 'https://getbootstrap.com/components/buttons/#outline-buttons',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $sVariant) {
                    $oButton = new \Zend\Form\Element\Button($sVariant, array(
                        'label' => ucfirst($sVariant),
                        'variant' => 'outline-' . $sVariant,
                    ));
                    echo $oView->formButton($oButton) . PHP_EOL;
                }
            },
            'expected' => '<button type="button" name="primary" class="btn&#x20;btn-outline-primary" value="">Primary</button>' . PHP_EOL .
                '<button type="button" name="secondary" class="btn&#x20;btn-outline-secondary" value="">Secondary</button>' . PHP_EOL .
                '<button type="button" name="success" class="btn&#x20;btn-outline-success" value="">Success</button>' . PHP_EOL .
                '<button type="button" name="danger" class="btn&#x20;btn-outline-danger" value="">Danger</button>' . PHP_EOL .
                '<button type="button" name="warning" class="btn&#x20;btn-outline-warning" value="">Warning</button>' . PHP_EOL .
                '<button type="button" name="info" class="btn&#x20;btn-outline-info" value="">Info</button>' . PHP_EOL .
                '<button type="button" name="light" class="btn&#x20;btn-outline-light" value="">Light</button>' . PHP_EOL .
                '<button type="button" name="dark" class="btn&#x20;btn-outline-dark" value="">Dark</button>' . PHP_EOL ,
        ),
    ),
);
