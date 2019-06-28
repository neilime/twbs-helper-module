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
                $oButton = new \Zend\Form\Element\Button('primary',array('label' => 'Primary'));
                $oButton->setAttribute('class','btn-primary');
                echo $oView->formButton($oButton). PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('secondary',array('label' => 'Secondary'));
                echo $oView->formButton($oButton). PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('success',array('label' => 'Success'));
                $oButton->setAttribute('class','btn-success');
                echo $oView->formButton($oButton). PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('danger',array('label' => 'Danger'));
                $oButton->setAttribute('class','btn-danger');
                echo $oView->formButton($oButton). PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('warning',array('label' => 'Warning'));
                $oButton->setAttribute('class','btn-warning');
                echo $oView->formButton($oButton). PHP_EOL;
                
                $oButton = new \Zend\Form\Element\Button('info',array('label' => 'Info'));
                $oButton->setAttribute('class','btn-info');
                echo $oView->formButton($oButton). PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('light',array('label' => 'Light'));
                $oButton->setAttribute('class','btn-light');
                echo $oView->formButton($oButton). PHP_EOL;
                
                $oButton = new \Zend\Form\Element\Button('dark',array('label' => 'Dark'));
                $oButton->setAttribute('class','btn-dark');
                echo $oView->formButton($oButton). PHP_EOL;

                $oButton = new \Zend\Form\Element\Button('link',array('label' => 'Link'));
                $oButton->setAttribute('class','btn-link');
                echo $oView->formButton($oButton). PHP_EOL;
            },
            'expected' => '<button type="button" name="primary" class="btn-primary&#x20;btn" value="">Primary</button>' . PHP_EOL .
                '<button type="button" name="secondary" class="btn&#x20;btn-secondary" value="">Secondary</button>' . PHP_EOL .
                '<button type="button" name="success" class="btn-success&#x20;btn" value="">Success</button>' . PHP_EOL .
                '<button type="button" name="danger" class="btn-danger&#x20;btn" value="">Danger</button>' . PHP_EOL .
                '<button type="button" name="warning" class="btn-warning&#x20;btn" value="">Warning</button>' . PHP_EOL .
                '<button type="button" name="info" class="btn-info&#x20;btn" value="">Info</button>' . PHP_EOL .
                '<button type="button" name="light" class="btn-light&#x20;btn" value="">Light</button>' . PHP_EOL .
                '<button type="button" name="dark" class="btn-dark&#x20;btn" value="">Dark</button>' . PHP_EOL .
                '<button type="button" name="link" class="btn-link&#x20;btn" value="">Link</button>'. PHP_EOL,
        ),
    ),
);
