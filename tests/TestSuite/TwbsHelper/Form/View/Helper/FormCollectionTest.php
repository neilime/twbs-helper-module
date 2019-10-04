<?php

namespace TestSuite\TwbsHelper\Form\View\Helper;

class FormCollectionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \TwbsHelper\Form\View\Helper\FormCollection
     */
    protected $formCollectionHelper;

    /**
     * @see \PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp(): void
    {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Zend\View\Renderer\PhpRenderer();
        $this->formCollectionHelper = $oViewHelperPluginManager
            ->get('formCollection')
            ->setView($oRenderer->setHelperPluginManager($oViewHelperPluginManager));
    }

    public function testRenderTemplateWithInlineLayout()
    {

        $oCollection = new \Zend\Form\Element\Collection('test-collection', [
            'count' => 1,
        ]);

        $oCollection->add(new \Zend\Form\Element\Button(
            'test',
            ['label' => 'test']
        ));

        $this->assertEquals(
            '<span data-template=""></span>',
            $this->formCollectionHelper->renderTemplate($oCollection)
        );
    }
}
