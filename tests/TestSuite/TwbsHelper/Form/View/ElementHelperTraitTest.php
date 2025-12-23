<?php

namespace TestSuite\TwbsHelper\Form\View;

use Laminas\View\Renderer\PhpRenderer;
use PHPUnit\Framework\TestCase;
use TestSuite\Bootstrap;
use TwbsHelper\Form\View\ElementHelperTrait;

class ElementHelperTraitTest extends TestCase
{
    public function testPrepareAttributesWorksWithoutParentPrepareAttributesMethod(): void
    {
        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new PhpRenderer();
        $phpRenderer->setHelperPluginManager($viewHelperPluginManager);

        $helper = new class () {
            use ElementHelperTrait;

            private PhpRenderer $view;

            public function setView(PhpRenderer $view): self
            {
                $this->view = $view;

                return $this;
            }

            public function getView(): PhpRenderer
            {
                return $this->view;
            }

            public function prepareAttributesProxy(array $attributes): array
            {
                return $this->prepareAttributes($attributes);
            }
        };

        $helper->setView($phpRenderer);

        $preparedAttributes = $helper->prepareAttributesProxy(['class' => 'alpha beta']);

        $this->assertArrayHasKey('class', $preparedAttributes);
        $this->assertSame('alpha beta', (string) $preparedAttributes['class']);
    }
}
