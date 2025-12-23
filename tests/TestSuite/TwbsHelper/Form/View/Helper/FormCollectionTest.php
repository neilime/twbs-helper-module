<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

use Laminas\Form\Element\Button;
use Laminas\Form\Element\Collection;
use Laminas\View\Renderer\PhpRenderer;
use PHPUnit\Framework\TestCase;
use TestSuite\Bootstrap;
use TwbsHelper\Form\View\Helper\FormCollection;

class FormCollectionTest extends TestCase
{
    /**
     * @var FormCollection
     */
    protected $formCollectionHelper;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    protected function setUp(): void
    {
        $viewHelperPluginManager = Bootstrap::getServiceManager()->get('ViewHelperManager');
        $phpRenderer = new PhpRenderer();
        $this->formCollectionHelper = $viewHelperPluginManager
            ->get('formCollection')
            ->setView($phpRenderer->setHelperPluginManager($viewHelperPluginManager));
    }

    public function testRenderWithInlineLayoutAddFormInlineClass()
    {
        $collection = new Collection('test-collection', [
            'count' => 1,
            'layout' => 'inline',
            'should_create_template' => true,
            'target_element' => new Button(
                'test',
                ['label' => 'test']
            ),
        ]);

        $this->assertEquals(
            '<fieldset class="form-inline">' .
                '<span data-template="&lt;div&#x20;class&#x3D;&quot;col-auto&quot;&gt;&#x0A;&#x20;&#x20;&#x20;' .
                '&#x20;&lt;button&#x20;class&#x3D;&quot;btn&amp;&#x23;x20&#x3B;btn-secondary&quot;&#x20;name&#x3D;' .
                '&quot;__index__&quot;&#x20;type&#x3D;&quot;button&quot;&#x20;value&#x3D;&quot;&quot;&gt;test&lt;' .
                '&#x2F;button&gt;&#x0A;&lt;&#x2F;div&gt;"></span>' .
                '</fieldset>',
            $this->formCollectionHelper->render($collection)
        );
    }

    public function testRenderTemplateWithInlineLayout()
    {
        $collection = new Collection('test-collection', [
            'count' => 1,
            'layout' => 'inline',
            'should_create_template' => true,
            'target_element' => new Button(
                'test',
                ['label' => 'test']
            ),
        ]);

        $this->assertEquals(
            '<span data-template="&lt;div&#x20;class&#x3D;&quot;col-auto&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;' .
                '&lt;button&#x20;class&#x3D;&quot;btn&amp;&#x23;x20&#x3B;btn-secondary&quot;&#x20;name&#x3D;&quot;' .
                '__index__&quot;&#x20;type&#x3D;&quot;button&quot;&#x20;value&#x3D;&quot;&quot;&gt;test&lt;&#x2F;' .
                'button&gt;&#x0A;&lt;&#x2F;div&gt;"></span>',
            $this->formCollectionHelper->renderTemplate($collection)
        );
    }

    public function testRenderWithHorizontalLayoutAddsRowClasses()
    {
        $collection = new Collection('test-collection', [
            'count' => 1,
            'layout' => 'horizontal',
            'should_create_template' => true,
            'target_element' => new Button(
                'test',
                ['label' => 'test']
            ),
        ]);

        $result = $this->formCollectionHelper->render($collection);

        $this->assertStringContainsString('<fieldset class="', $result);
        $this->assertStringContainsString('row', $result);
        $this->assertStringContainsString('mb-3', $result);
    }

    public function testRenderWithColumnWrapsContentAndLegendCounterpartClasses()
    {
        $collection = new Collection('test-collection', [
            'label' => 'Collection legend',
            'count' => 1,
            'column' => 'sm-4',
            'should_create_template' => true,
            'target_element' => new Button(
                'test',
                ['label' => 'test']
            ),
        ]);

        $result = $this->formCollectionHelper->render($collection);

        $this->assertStringContainsString('Collection legend', $result);
        $this->assertStringContainsString('col-sm-8', $result);
        $this->assertStringContainsString('col-sm-4', $result);
    }
}
