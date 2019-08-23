## Table of contents

- [\TwbsHelper\Module](#class-twbshelpermodule)
- [\TwbsHelper\Form\Element\StaticElement](#class-twbshelperformelementstaticelement)
- [\TwbsHelper\Form\View\Helper\FormRadio](#class-twbshelperformviewhelperformradio)
- [\TwbsHelper\Form\View\Helper\FormRow](#class-twbshelperformviewhelperformrow)
- [\TwbsHelper\Form\View\Helper\FormButton](#class-twbshelperformviewhelperformbutton)
- [\TwbsHelper\Form\View\Helper\FormStatic](#class-twbshelperformviewhelperformstatic)
- [\TwbsHelper\Form\View\Helper\FormElement](#class-twbshelperformviewhelperformelement)
- [\TwbsHelper\Form\View\Helper\FormMultiCheckbox](#class-twbshelperformviewhelperformmulticheckbox)
- [\TwbsHelper\Form\View\Helper\FormFile](#class-twbshelperformviewhelperformfile)
- [\TwbsHelper\Form\View\Helper\FormSelect](#class-twbshelperformviewhelperformselect)
- [\TwbsHelper\Form\View\Helper\FormCheckbox](#class-twbshelperformviewhelperformcheckbox)
- [\TwbsHelper\Form\View\Helper\FormCollection](#class-twbshelperformviewhelperformcollection)
- [\TwbsHelper\Form\View\Helper\FormErrors](#class-twbshelperformviewhelperformerrors)
- [\TwbsHelper\Form\View\Helper\FormElementErrors](#class-twbshelperformviewhelperformelementerrors)
- [\TwbsHelper\Form\View\Helper\Form](#class-twbshelperformviewhelperform)
- [\TwbsHelper\Form\View\Helper\FormRange](#class-twbshelperformviewhelperformrange)
- [\TwbsHelper\Form\View\Helper\Factory\FormElementFactory](#class-twbshelperformviewhelperfactoryformelementfactory)
- [\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)
- [\TwbsHelper\Options\Factory\ModuleOptionsFactory](#class-twbshelperoptionsfactorymoduleoptionsfactory)
- [\TwbsHelper\View\Helper\Image](#class-twbshelperviewhelperimage)
- [\TwbsHelper\View\Helper\CardColumns](#class-twbshelperviewhelpercardcolumns)
- [\TwbsHelper\View\Helper\Carousel](#class-twbshelperviewhelpercarousel)
- [\TwbsHelper\View\Helper\Table](#class-twbshelperviewhelpertable)
- [\TwbsHelper\View\Helper\HtmlList](#class-twbshelperviewhelperhtmllist)
- [\TwbsHelper\View\Helper\Badge](#class-twbshelperviewhelperbadge)
- [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)
- [\TwbsHelper\View\Helper\CardDeck](#class-twbshelperviewhelpercarddeck)
- [\TwbsHelper\View\Helper\Blockquote](#class-twbshelperviewhelperblockquote)
- [\TwbsHelper\View\Helper\Figure](#class-twbshelperviewhelperfigure)
- [\TwbsHelper\View\Helper\Card](#class-twbshelperviewhelpercard)
- [\TwbsHelper\View\Helper\Dropdown](#class-twbshelperviewhelperdropdown)
- [\TwbsHelper\View\Helper\ButtonGroup](#class-twbshelperviewhelperbuttongroup)
- [\TwbsHelper\View\Helper\Alert](#class-twbshelperviewhelperalert)
- [\TwbsHelper\View\Helper\Abbreviation](#class-twbshelperviewhelperabbreviation)
- [\TwbsHelper\View\Helper\ButtonToolbar](#class-twbshelperviewhelperbuttontoolbar)
- [\TwbsHelper\View\Helper\ListGroup](#class-twbshelperviewhelperlistgroup)
- [\TwbsHelper\View\Helper\CardGroup](#class-twbshelperviewhelpercardgroup)
- [\TwbsHelper\View\Helper\Navigation\Menu](#class-twbshelperviewhelpernavigationmenu)
- [\TwbsHelper\View\Helper\Navigation\Breadcrumbs](#class-twbshelperviewhelpernavigationbreadcrumbs)

<hr />

### Class: \TwbsHelper\Module

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConfig()</strong> : <em>array The configuration array</em><br /><em>Retrieve module configuration</em> |

*This class implements \Zend\ModuleManager\Feature\ConfigProviderInterface*

<hr />

### Class: \TwbsHelper\Form\Element\StaticElement

> StaticElement

| Visibility | Function |
|:-----------|:---------|

*This class extends \Zend\Form\Element*

*This class implements \Zend\Form\LabelAwareInterface, \Zend\Stdlib\InitializableInterface, \Zend\Form\ElementInterface, \Zend\Form\ElementAttributeRemovalInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormRadio

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render a form <input type="radio"> element from the provided $oElement</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormRadio*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormRow

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>string/null</em> <strong>$sLabelPosition=null</strong>)</strong> : <em>string</em> |
| public | <strong>renderFormRow(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>mixed</em> <strong>$sElementContent</strong>)</strong> : <em>string</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getDefaultLabelPosition(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>mixed</em> <strong>$sLabelPosition=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getLabelClasses(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aLabelAttributes</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>renderDedicatedContainer(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>\string</em> <strong>$sElementContent</strong>)</strong> : <em>void</em> |
| protected | <strong>renderElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>\string</em> <strong>$sLabelPosition=null</strong>)</strong> : <em>string</em> |
| protected | <strong>renderErrors(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>\string</em> <strong>$sElementContent</strong>)</strong> : <em>string</em><br /><em>Render element's errors</em> |
| protected | <strong>renderFeedback(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>\string</em> <strong>$sElementContent</strong>)</strong> : <em>string</em><br /><em>Render element's errors</em> |
| protected | <strong>renderHelpBlock(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>\string</em> <strong>$sElementContent</strong>)</strong> : <em>string</em><br /><em>Render element's help block</em> |
| protected | <strong>renderLabel(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render element's label</em> |
| protected | <strong>renderLabelContent(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>\string</em> <strong>$sElementContent</strong>, <em>\string</em> <strong>$sLabelPosition=null</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormRow*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormButton

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array/\Zend\Form\ElementInterface/null</em> <strong>$oElement=null</strong>, <em>null/string</em> <strong>$sButtonContent=null</strong>)</strong> : <em>string/[\TwbsHelper\Form\View\Helper\FormButton](#class-twbshelperformviewhelperformbutton)</em><br /><em>Invoke helper as functor Proxies to {@link render()}.</em> |
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>array/\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>string</em> <strong>$sButtonContent=null</strong>)</strong> : <em>string</em><br /><em>Accept following extra options: * string variant:  'danger', 'dark', 'info', 'light', 'link', 'primary', 'secondary', 'success', 'warning' * string size:  'sm', 'lg' * bool block</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>defineButtonClasses(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getType(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Determine button type to use</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>renderButtonContent(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>\string</em> <strong>$sButtonContent=null</strong>)</strong> : <em>void</em> |
| protected | <strong>renderIconContent(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>\string</em> <strong>$sButtonContent=null</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormButton*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormStatic

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement=null</strong>)</strong> : <em>string/[\TwbsHelper\Form\View\Helper\FormStatic](#class-twbshelperformviewhelperformstatic)</em><br /><em>Invoke helper as functor Proxies to {@link render()}.</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render a <p> static element</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormElement

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em> <strong>$options</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>getTranslator()</strong> : <em>\TwbsHelper\Form\View\Helper\TranslatorInterface</em><br /><em>Returns translator used in object</em> |
| public | <strong>getTranslatorTextDomain()</strong> : <em>string</em><br /><em>Return the translation text domain</em> |
| public | <strong>hasTranslator()</strong> : <em>bool</em><br /><em>Checks if the object has a translator</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>isTranslatorEnabled()</strong> : <em>bool</em><br /><em>Returns whether translator is enabled and should be used</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render an element</em> |
| public | <strong>setTranslator(</strong><em>\Zend\I18n\Translator\TranslatorInterface</em> <strong>$translator=null</strong>, <em>string</em> <strong>$textDomain=null</strong>)</strong> : <em>mixed</em><br /><em>Sets translator to use in helper</em> |
| public | <strong>setTranslatorEnabled(</strong><em>bool</em> <strong>$enabled=true</strong>)</strong> : <em>mixed</em><br /><em>Sets whether translator is enabled and should be used</em> |
| public | <strong>setTranslatorTextDomain(</strong><em>string</em> <strong>$textDomain=`'default'`</strong>)</strong> : <em>mixed</em><br /><em>Set translation text domain</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>renderAddOn(</strong><em>\Zend\Form\ElementInterface/array/string</em> <strong>$aAddOnOptions</strong>, <em>\string</em> <strong>$sPosition=`'prepend'`</strong>)</strong> : <em>string</em><br /><em>Render add-on markup</em> |
| protected | <strong>renderAddOnContent(</strong><em>array</em> <strong>$aAddOnOptions</strong>)</strong> : <em>void</em> |
| protected | <strong>renderAddOnElement(</strong><em>\string</em> <strong>$sAddonText</strong>)</strong> : <em>void</em> |
| protected | <strong>renderHelper(</strong><em>string</em> <strong>$sName</strong>, <em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render element by helper name</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormElement*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormMultiCheckbox

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render a form <input type="radio"> element from the provided $oElement</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormMultiCheckbox*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormFile

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render a form <input> element from the provided $oElement</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormInput*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormSelect

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render a form <select> element from the provided $element</em> |
| public | <strong>renderOptions(</strong><em>array</em> <strong>$aOptions</strong>, <em>array</em> <strong>$aSelectedOptions=array()</strong>)</strong> : <em>string</em><br /><em>Render an array of options Individual options should be of the form: <code> array( 'value'    => 'value', 'label'    => 'label', 'disabled' => $booleanFlag, 'selected' => $booleanFlag, ) </code></em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormSelect*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormCheckbox

| Visibility | Function |
|:-----------|:---------|
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render a form <checkbox> element from the provided $oElement</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormCheckbox*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormCollection

> FormCollection

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render a collection by iterating through all fieldsets and elements</em> |
| public | <strong>renderTemplate(</strong><em>\Zend\Form\Element\Collection</em> <strong>$oCollection</strong>)</strong> : <em>string</em><br /><em>Only render a template</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormCollection*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormErrors

> FormErrors

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm=null</strong>, <em>string</em> <strong>$sMessage=null</strong>, <em>bool/string</em> <strong>$bDismissable=false</strong>)</strong> : <em>string/null</em><br /><em>__invoke Invoke as function</em> |
| public | <strong>dangerAlert(</strong><em>string</em> <strong>$content</strong>, <em>bool/boolean</em> <strong>$bDismissable=false</strong>)</strong> : <em>string</em><br /><em>dangerAlert Creates and returns a "danger" alert.</em> |
| public | <strong>render(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm</strong>, <em>mixed</em> <strong>$sMessage</strong>, <em>bool</em> <strong>$bDismissable=false</strong>)</strong> : <em>string</em><br /><em>render Renders the error messages.</em> |

*This class extends \Zend\Form\View\Helper\AbstractHelper*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormElementErrors

> FormElementErrors

| Visibility | Function |
|:-----------|:---------|

*This class extends \Zend\Form\View\Helper\FormElementErrors*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\Form

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm=null</strong>)</strong> : <em>[\TwbsHelper\Form\View\Helper\Form](#class-twbshelperformviewhelperform)/string</em> |
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>render(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm</strong>)</strong> : <em>string</em><br /><em>Render a form from the provided $oForm,</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>renderElements(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm</strong>)</strong> : <em>string</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\Form*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormRange

| Visibility | Function |
|:-----------|:---------|
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Render a form <input> element from the provided $oElement</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\Form\View\Helper\FormRange*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\Factory\FormElementFactory

> FormElementFactory Factory to inject the ModuleOptions hard dependency

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\Interop\Container\ContainerInterface</em> <strong>$oContainer</strong>, <em>mixed</em> <strong>$sRequestedName</strong>, <em>array</em> <strong>$aOptions=null</strong>)</strong> : <em>void</em><br /><em>__invoke Compatibility with ZF3</em> |
| public | <strong>createService(</strong><em>\Zend\ServiceManager\ServiceLocatorInterface</em> <strong>$oServiceLocator</strong>, <em>mixed</em> <strong>$sCanonicalName=null</strong>, <em>mixed</em> <strong>$sRequestedName=null</strong>)</strong> : <em>void</em><br /><em>createService Compatibility with ZF2 (>= 2.2) -> proxy to __invoke</em> |

*This class implements \Zend\ServiceManager\FactoryInterface, \Zend\ServiceManager\Factory\FactoryInterface*

<hr />

### Class: \TwbsHelper\Options\ModuleOptions

> ModuleOptions Hold options for TwbsHelper module

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getClassMap()</strong> : <em>array</em><br /><em>getClassMap</em> |
| public | <strong>getIgnoredViewHelpers()</strong> : <em>array</em><br /><em>getIgnoredViewHelpers</em> |
| public | <strong>getTypeMap()</strong> : <em>array</em><br /><em>getTypeMap</em> |
| public | <strong>getValidTagAttributePrefixes()</strong> : <em>array</em><br /><em>getValidTagAttributePrefixes</em> |
| public | <strong>getValidTagAttributes()</strong> : <em>array</em><br /><em>getValidTagAttributes</em> |
| public | <strong>setClassMap(</strong><em>array</em> <strong>$aClassMap</strong>)</strong> : <em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em><br /><em>setClassMap</em> |
| public | <strong>setIgnoredViewHelpers(</strong><em>array</em> <strong>$aIgnoredViewHelpers</strong>)</strong> : <em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em><br /><em>setIgnoredViewHelpers</em> |
| public | <strong>setTypeMap(</strong><em>array</em> <strong>$aTypeMap</strong>)</strong> : <em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em><br /><em>setTypeMap</em> |
| public | <strong>setValidTagAttributePrefixes(</strong><em>array</em> <strong>$aValidTagAttributePrefixes</strong>)</strong> : <em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em><br /><em>setValidTagAttributePrefixes</em> |
| public | <strong>setValidTagAttributes(</strong><em>array</em> <strong>$aValidTagAttributes</strong>)</strong> : <em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em><br /><em>setIgnoredViewHelpers</em> |

*This class extends \Zend\Stdlib\AbstractOptions*

*This class implements \Zend\Stdlib\ParameterObjectInterface*

<hr />

### Class: \TwbsHelper\Options\Factory\ModuleOptionsFactory

> ModuleOptionsFactory

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\Interop\Container\ContainerInterface</em> <strong>$oContainer</strong>, <em>string</em> <strong>$sRequestedName</strong>, <em>array</em> <strong>$aOptions=null</strong>)</strong> : <em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em><br /><em>__invoke</em> |
| public | <strong>createService(</strong><em>\Zend\ServiceManager\ServiceLocatorInterface</em> <strong>$oServiceLocator</strong>)</strong> : <em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em><br /><em>createService</em> |
| protected | <strong>createServiceWithConfig(</strong><em>array</em> <strong>$aConfig</strong>)</strong> : <em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em><br /><em>createServiceWithConfig</em> |

*This class implements \Zend\ServiceManager\FactoryInterface, \Zend\ServiceManager\Factory\FactoryInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Image

> Helper for rendering images

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\string</em> <strong>$sImageSrc</strong>, <em>array</em> <strong>$aOptionsAndAttributes=array()</strong>)</strong> : <em>string The image XHTML.</em><br /><em>Generates a 'image' element - boolean fluid: responsive image - boolean thumbnail: thumbnail image - boolean rounded: rounded image - boolean figure: figure image - [srcset => type] sources: list of sources for <picture element></em> |
| public | <strong>renderSources(</strong><em>array</em> <strong>$aSources</strong>)</strong> : <em>void</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\CardColumns

> Helper for card columns

| Visibility | Function |
|:-----------|:---------|

*This class extends [\TwbsHelper\View\Helper\CardGroup](#class-twbshelperviewhelpercardgroup)*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Carousel

> Helper for rendering carousels

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aSlides</strong>, <em>array</em> <strong>$aOptionsAndAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The carousel XHTML.</em><br /><em>Generates a 'carousel' element</em> |
| protected | <strong>parseSlides(</strong><em>array</em> <strong>$aSlides</strong>)</strong> : <em>void</em> |
| protected | <strong>renderControl(</strong><em>\string</em> <strong>$sId</strong>, <em>\string</em> <strong>$sControl</strong>, <em>\string</em> <strong>$sLabel</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderControls(</strong><em>\string</em> <strong>$sId</strong>, <em>mixed</em> <strong>$aControls</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderIndicator(</strong><em>\string</em> <strong>$sId</strong>, <em>\int</em> <strong>$iIterator</strong>, <em>mixed</em> <strong>$aSlide</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderIndicators(</strong><em>\string</em> <strong>$sId</strong>, <em>array</em> <strong>$aSlides</strong>, <em>mixed</em> <strong>$aIndicators</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderSlide(</strong><em>mixed</em> <strong>$aSlide</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderSlideCaption(</strong><em>mixed</em> <strong>$sCaptionContent</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderSlides(</strong><em>array</em> <strong>$aSlides</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Table

> Helper for rendering tables

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aRows</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The table XHTML.</em><br /><em>Generates a 'table' element Default : empty</em> |
| public | <strong>renderHeadRows(</strong><em>\TwbsHelper\View\Helper\arra/array</em> <strong>$aHeadRows</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The "<thead>" rows XHTML.</em><br /><em>Generate table "<thead>" rows elements</em> |
| public | <strong>renderTableCell(</strong><em>\TwbsHelper\View\Helper\scalar/array</em> <strong>$sCell</strong>, <em>\string</em> <strong>$sDefaultCellType</strong>, <em>\bool</em> <strong>$bIsFirstCol</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The cell XHTML.</em><br /><em>Generate table cell element "<th>" or "<td>" (th or td) to be used</em> |
| public | <strong>renderTableRow(</strong><em>array</em> <strong>$aRow</strong>, <em>\string</em> <strong>$sDefaultCellType</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The row XHTML.</em><br /><em>Generate table row element "<tr>" (th or td) to be used</em> |
| public | <strong>renderTableRows(</strong><em>array</em> <strong>$aRows</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The rows XHTML.</em><br /><em>Generate table rows elements</em> |
| protected | <strong>renderTableCation(</strong><em>mixed</em> <strong>$sCaption</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderTableCellFromArray(</strong><em>array</em> <strong>$aCell</strong>, <em>\bool</em> <strong>$bEscape</strong>)</strong> : <em>void</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\HtmlList

> Helper for ordered and unordered lists

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aItems</strong>, <em>array</em> <strong>$aOptionsAndAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The list XHTML.</em><br /><em>Generates a 'List' element. Manage indentation of Xhtml markup If class attributes contains "list-inline", so the li will have the class "list-inline-item"</em> |
| protected | <strong>renderListItem(</strong><em>mixed</em> <strong>$sItem</strong>, <em>\string</em> <strong>$sItemLabel=`''`</strong>, <em>array</em> <strong>$aOptionsAndAttributes=array()</strong>, <em>array</em> <strong>$aLiAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Badge

> Helper for rendering badges

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\string</em> <strong>$sContent</strong>, <em>string/array</em> <strong>$aOptionsAndAttributes=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The badge XHTML.</em><br /><em>Generates a 'badge' element</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\AbstractHtmlElement

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addProperIndentation(</strong><em>\string</em> <strong>$sContent</strong>, <em>\bool</em> <strong>$bForceIndentation=false</strong>, <em>\string</em> <strong>$sIndentation=null</strong>)</strong> : <em>void</em> |
| public | <strong>getTranslator()</strong> : <em>\TwbsHelper\View\Helper\TranslatorInterface</em><br /><em>Returns translator used in object</em> |
| public | <strong>getTranslatorTextDomain()</strong> : <em>string</em><br /><em>Return the translation text domain</em> |
| public | <strong>hasTranslator()</strong> : <em>bool</em><br /><em>Checks if the object has a translator</em> |
| public | <strong>htmlElement(</strong><em>\string</em> <strong>$sTag</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\string</em> <strong>$sContent=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| public | <strong>isTranslatorEnabled()</strong> : <em>bool</em><br /><em>Returns whether translator is enabled and should be used</em> |
| public | <strong>removeIndentation(</strong><em>\string</em> <strong>$sContent</strong>)</strong> : <em>void</em> |
| public | <strong>setTranslator(</strong><em>\Zend\I18n\Translator\TranslatorInterface</em> <strong>$translator=null</strong>, <em>string</em> <strong>$textDomain=null</strong>)</strong> : <em>mixed</em><br /><em>Sets translator to use in helper</em> |
| public | <strong>setTranslatorEnabled(</strong><em>bool</em> <strong>$enabled=true</strong>)</strong> : <em>mixed</em><br /><em>Sets whether translator is enabled and should be used</em> |
| public | <strong>setTranslatorTextDomain(</strong><em>string</em> <strong>$textDomain=`'default'`</strong>)</strong> : <em>mixed</em><br /><em>Set translation text domain</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>attributesToString(</strong><em>array</em> <strong>$aAttributes</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>isHTML(</strong><em>\string</em> <strong>$sString</strong>)</strong> : <em>bool</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\View\Helper\CardDeck

> Helper for card deck

| Visibility | Function |
|:-----------|:---------|

*This class extends [\TwbsHelper\View\Helper\CardGroup](#class-twbshelperviewhelpercardgroup)*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Blockquote

> Helper for rendering blockquotes

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\string</em> <strong>$sContent</strong>, <em>\string</em> <strong>$sFooter=`''`</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>array</em> <strong>$aContentAttributes=array()</strong>, <em>array</em> <strong>$aFooterAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The blockquote XHTML.</em><br /><em>Generates a 'blockquote' element</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Figure

> Helper for rendering figures

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\string</em> <strong>$sImageSrc</strong>, <em>\string</em> <strong>$sCaption=`''`</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>array</em> <strong>$aImageOptionsAndAttributes=array()</strong>, <em>array</em> <strong>$aCaptionAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The figure XHTML.</em><br /><em>Generates a 'figure' element</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Card

> Helper for rendering alerts

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>string</em> <strong>$sContent</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The alert XHTML.</em><br /><em>Generates an 'alert' element</em> |
| protected | <strong>renderCardBody(</strong><em>mixed</em> <strong>$sContent</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderCardContainer(</strong><em>mixed</em> <strong>$sContent</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderCardFooter(</strong><em>array</em> <strong>$aArguments</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderCardHeader(</strong><em>array</em> <strong>$aArguments</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderCardHeaderNav(</strong><em>array</em> <strong>$aArguments</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderCardImgTop(</strong><em>array</em> <strong>$aArguments</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderCardItem(</strong><em>mixed</em> <strong>$sType</strong>, <em>mixed</em> <strong>$sTypeContent</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderCardListGroup(</strong><em>array</em> <strong>$aArguments</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |
| protected | <strong>renderCardOverlay(</strong><em>array</em> <strong>$aArguments</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Dropdown

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$oDropdown=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>\TwbsHelper\View\Helper\TwbsHelper\View\Helper\Dropdown/string</em> |
| public | <strong>render(</strong><em>mixed</em> <strong>$oDropdown</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string</em><br /><em>Render dropdown markup</em> |
| public | <strong>renderMenu(</strong><em>array</em> <strong>$aItems</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string</em><br /><em>Render dropdown menu markup</em> |
| public | <strong>renderToggle(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oDropdown</strong>)</strong> : <em>string</em><br /><em>Render dropdown toggle markup</em> |
| protected | <strong>renderContainer(</strong><em>array</em> <strong>$aDropdownOptions</strong>, <em>\string</em> <strong>$sDropdownContent</strong>)</strong> : <em>void</em> |
| protected | <strong>renderItem(</strong><em>array</em> <strong>$aItemOptions</strong>, <em>\bool</em> <strong>$bEscape</strong>)</strong> : <em>string</em><br /><em>Render dropdown list item markup</em> |
| protected | <strong>renderMenuFromElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oDropdown</strong>, <em>\bool</em> <strong>$bEscape</strong>)</strong> : <em>void</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\ButtonGroup

> ButtonGroup

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aButtons=null</strong>, <em>array</em> <strong>$aButtonGroupOptions=null</strong>)</strong> : <em>[\TwbsHelper\View\Helper\ButtonGroup](#class-twbshelperviewhelperbuttongroup)/string</em> |
| public | <strong>getFormElementHelper()</strong> : <em>[\TwbsHelper\Form\View\Helper\FormElement](#class-twbshelperformviewhelperformelement)</em> |
| public | <strong>render(</strong><em>array</em> <strong>$aButtons</strong>, <em>array</em> <strong>$aButtonGroupOptions=null</strong>)</strong> : <em>string</em><br /><em>Render button groups markup</em> |
| protected | <strong>renderButtons(</strong><em>array</em> <strong>$aButtons</strong>, <em>\bool</em> <strong>$bJustified=false</strong>)</strong> : <em>string</em><br /><em>Render buttons markup</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Alert

> Helper for rendering alerts

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\string</em> <strong>$sContent</strong>, <em>string/array</em> <strong>$aOptionsAndAttributes=null</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The alert XHTML.</em><br /><em>Generates an 'alert' element</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Abbreviation

> Helper for rendering abbreviations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\string</em> <strong>$sContent</strong>, <em>\string</em> <strong>$sTitle=`''`</strong>, <em>\bool</em> <strong>$bInitialism=false</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The abbreviation XHTML.</em><br /><em>Generates an 'abbreviation' element Default : false</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\ButtonToolbar

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aItems=null</strong>, <em>array</em> <strong>$aButtonToolbarOptions=null</strong>)</strong> : <em>\TwbsHelper\View\Helper\TwbsHelperButtonGroup/string</em> |
| public | <strong>getButtonGroupHelper()</strong> : <em>[\TwbsHelper\View\Helper\ButtonGroup](#class-twbshelperviewhelperbuttongroup)</em> |
| public | <strong>getFormElementHelper()</strong> : <em>[\TwbsHelper\Form\View\Helper\FormElement](#class-twbshelperformviewhelperformelement)</em> |
| public | <strong>render(</strong><em>array</em> <strong>$aItems</strong>, <em>array</em> <strong>$aButtonToolbarOptions=null</strong>)</strong> : <em>string</em><br /><em>Render button toolbar markup</em> |
| protected | <strong>renderToolbarItem(</strong><em>array/\Zend\Form\ElementInterface</em> <strong>$oItem</strong>)</strong> : <em>string</em><br /><em>Render toolbar item markup</em> |
| protected | <strong>renderToolbarItems(</strong><em>array</em> <strong>$aItems</strong>)</strong> : <em>string</em><br /><em>Render toolbar items markup</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\ListGroup

> Helper for ordered and unordered lists

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aItems</strong>, <em>array</em> <strong>$aOptionsAndAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The list XHTML.</em><br /><em>Generates a 'List' element. Manage indentation of Xhtml markup</em> |
| protected | <strong>renderListItem(</strong><em>mixed</em> <strong>$sItem</strong>, <em>\string</em> <strong>$sItemLabel=`''`</strong>, <em>array</em> <strong>$aOptionsAndAttributes=array()</strong>, <em>array</em> <strong>$aLiAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |

*This class extends [\TwbsHelper\View\Helper\HtmlList](#class-twbshelperviewhelperhtmllist)*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\View\Helper\CardGroup

> Helper for card group

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aItems</strong>, <em>array</em> <strong>$aOptionsAndAttributes=array()</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The card group XHTML.</em><br /><em>Render a card group</em> |
| protected | <strong>renderCards(</strong><em>array</em> <strong>$aItems</strong>, <em>\bool</em> <strong>$bEscape=true</strong>)</strong> : <em>void</em> |

*This class extends [\TwbsHelper\View\Helper\AbstractHtmlElement](#class-twbshelperviewhelperabstracthtmlelement)*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Navigation\Menu

> Helper for rendering abbreviations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>htmlify(</strong><em>\Zend\Navigation\Page\AbstractPage</em> <strong>$oPage</strong>, <em>bool</em> <strong>$escapeLabel=true</strong>, <em>bool</em> <strong>$addClassToListItem=false</strong>)</strong> : <em>string</em><br /><em>Returns an HTML string containing an 'a' element for the given page if the page's href is not empty, and a 'span' element if it is empty. Overrides {@link AbstractHelper::htmlify()}.</em> |
| public | <strong>renderMenu(</strong><em>mixed</em> <strong>$container=null</strong>, <em>array</em> <strong>$aOptions=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>addClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>cleanClassesAttribute(</strong><em>array</em> <strong>$aClasses</strong>)</strong> : <em>void</em> |
| protected | <strong>getClassesAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>bool</em> <strong>$bCleanClasses=true</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnClass(</strong><em>mixed</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getColumnCounterpartClass(</strong><em>\string</em> <strong>$sColumn</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizeClass(</strong><em>\string</em> <strong>$sSize</strong>, <em>\string</em> <strong>$sPrefix</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getSizes()</strong> : <em>mixed</em> |
| protected | <strong>getVariantClass(</strong><em>\string</em> <strong>$sVariant</strong>, <em>\string</em> <strong>$sPrefix</strong>, <em>\string</em> <strong>$sAllowedVariantPrefix=null</strong>)</strong> : <em>mixed</em> |
| protected | <strong>getVariants()</strong> : <em>mixed</em> |
| protected | <strong>hasClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>, <em>\string</em> <strong>$sClass</strong>)</strong> : <em>bool</em> |
| protected | <strong>hasColumnClassAttribute(</strong><em>\string</em> <strong>$sClassAttribute</strong>)</strong> : <em>bool</em> |
| protected | <strong>htmlAttribs(</strong><em>array</em> <strong>$attribs</strong>)</strong> : <em>string</em><br /><em>Converts an associative array to a string of tag attributes. Overloads {@link View\Helper\AbstractHtmlElement::htmlAttribs()}. to an attribute name and value</em> |
| protected | <strong>setClassesToAttributes(</strong><em>array</em> <strong>$aAttributes</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |
| protected | <strong>setClassesToElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>array</em> <strong>$aAddClasses=array()</strong>, <em>array</em> <strong>$aRemoveClasses=array()</strong>)</strong> : <em>void</em> |

*This class extends \Zend\View\Helper\Navigation\Menu*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\EventManager\EventManagerAwareInterface, \Zend\EventManager\EventsCapableInterface, \Zend\View\Helper\Navigation\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Navigation\Breadcrumbs

> Helper for rendering abbreviations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>htmlify(</strong><em>\Zend\Navigation\Page\AbstractPage</em> <strong>$oPage</strong>)</strong> : <em>string HTML string</em><br /><em>Returns an HTML string containing an 'a' element for the given page</em> |
| public | <strong>renderStraight(</strong><em>\TwbsHelper\View\Helper\Navigation\AbstractContainer</em> <strong>$oContainer=null</strong>)</strong> : <em>string</em><br /><em>Renders breadcrumbs by chaining 'a' elements with the separator registered in the helper. Default is to render the container registered in the helper.</em> |
| protected | <strong>renderBreadcrumbItem(</strong><em>mixed</em> <strong>$sHtml</strong>, <em>\bool</em> <strong>$bActive=false</strong>)</strong> : <em>void</em> |

*This class extends \Zend\View\Helper\Navigation\Breadcrumbs*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\EventManager\EventManagerAwareInterface, \Zend\EventManager\EventsCapableInterface, \Zend\View\Helper\Navigation\HelperInterface*

