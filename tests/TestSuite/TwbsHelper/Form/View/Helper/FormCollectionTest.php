<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormCollectionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormCollection
     */
    protected $formCollectionHelper;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    public function setUp(): void
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Laminas\View\Renderer\PhpRenderer();
        $this->formCollectionHelper = $oViewHelperPluginManager
            ->get('formCollection')
            ->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));
    }

    public function testRenderWithInlineLayoutAddFormInlineClass()
    {
        $oCollection = new \Laminas\Form\Element\Collection('test-collection', [
            'count' => 1,
            'layout' => 'inline',
            'should_create_template' => true,
            'target_element' => new \Laminas\Form\Element\Button(
                'test',
                ['label' => 'test']
            ),
        ]);

        $this->assertEquals(
            '<fieldset class="form-inline">' .
            '<span data-template="&lt;button&#x20;type&#x3D;&quot;button&quot;&#x20;name&#x3D;&quot;' .
            '__index__&quot;&#x20;class&#x3D;&quot;btn&amp;&#x23;x20&#x3B;btn-secondary&quot;&#x20;' .
            'value&#x3D;&quot;&quot;&gt;test&lt;&#x2F;button&gt;"></span></fieldset>',
            $this->formCollectionHelper->render($oCollection)
        );
    }

    public function testRenderTemplateWithInlineLayout()
    {
        $oCollection = new \Laminas\Form\Element\Collection('test-collection', [
            'count' => 1,
            'layout' => 'inline',
            'should_create_template' => true,
            'target_element' => new \Laminas\Form\Element\Button(
                'test',
                ['label' => 'test']
            ),
        ]);

        $this->assertEquals(
            '<span data-template="&lt;button&#x20;type&#x3D;&quot;button&quot;&#x20;name&#x3D;&quot;' .
            '__index__&quot;&#x20;class&#x3D;&quot;btn&amp;&#x23;x20&#x3B;btn-secondary&quot;&#x20;' .
            'value&#x3D;&quot;&quot;&gt;test&lt;&#x2F;button&gt;"></span>',
            $this->formCollectionHelper->renderTemplate($oCollection)
        );
    }
}
