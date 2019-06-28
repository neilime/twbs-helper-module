## Table of contents

- [\TwbsHelper\Module](#class-twbshelpermodule)
- [\TwbsHelper\Form\Element\StaticElement](#class-twbshelperformelementstaticelement)
- [\TwbsHelper\Form\View\Helper\FormErrors](#class-twbshelperformviewhelperformerrors)
- [\TwbsHelper\Form\View\Helper\FormCheckbox](#class-twbshelperformviewhelperformcheckbox)
- [\TwbsHelper\Form\View\Helper\FormElement](#class-twbshelperformviewhelperformelement)
- [\TwbsHelper\Form\View\Helper\Form](#class-twbshelperformviewhelperform)
- [\TwbsHelper\Form\View\Helper\FormStatic](#class-twbshelperformviewhelperformstatic)
- [\TwbsHelper\Form\View\Helper\FormMultiCheckbox](#class-twbshelperformviewhelperformmulticheckbox)
- [\TwbsHelper\Form\View\Helper\FormFile](#class-twbshelperformviewhelperformfile)
- [\TwbsHelper\Form\View\Helper\FormRadio](#class-twbshelperformviewhelperformradio)
- [\TwbsHelper\Form\View\Helper\FormRow](#class-twbshelperformviewhelperformrow)
- [\TwbsHelper\Form\View\Helper\FormCollection](#class-twbshelperformviewhelperformcollection)
- [\TwbsHelper\Form\View\Helper\FormButton](#class-twbshelperformviewhelperformbutton)
- [\TwbsHelper\Form\View\Helper\FormElementErrors](#class-twbshelperformviewhelperformelementerrors)
- [\TwbsHelper\Form\View\Helper\Factory\FormElementFactory](#class-twbshelperformviewhelperfactoryformelementfactory)
- [\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)
- [\TwbsHelper\Options\Factory\ModuleOptionsFactory](#class-twbshelperoptionsfactorymoduleoptionsfactory)
- [\TwbsHelper\View\Helper\Blockquote](#class-twbshelperviewhelperblockquote)
- [\TwbsHelper\View\Helper\Alert](#class-twbshelperviewhelperalert)
- [\TwbsHelper\View\Helper\Table](#class-twbshelperviewhelpertable)
- [\TwbsHelper\View\Helper\Image](#class-twbshelperviewhelperimage)
- [\TwbsHelper\View\Helper\ButtonGroup](#class-twbshelperviewhelperbuttongroup)
- [\TwbsHelper\View\Helper\Abbreviation](#class-twbshelperviewhelperabbreviation)
- [\TwbsHelper\View\Helper\Badge](#class-twbshelperviewhelperbadge)
- [\TwbsHelper\View\Helper\HtmlList](#class-twbshelperviewhelperhtmllist)
- [\TwbsHelper\View\Helper\Figure](#class-twbshelperviewhelperfigure)
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

### Class: \TwbsHelper\Form\View\Helper\FormCheckbox

> FormCheckbox

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLabelContent(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>getLabelContent</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>render</em> |
| protected | <strong>getClass()</strong> : <em>void</em><br /><em>getClass Return class</em> |
| protected | <strong>getLabelHelper()</strong> : <em>\Zend\Form\View\Helper\FormLabel</em><br /><em>getLabelHelper Retrieve the FormLabel helper</em> |

*This class extends \Zend\Form\View\Helper\FormCheckbox*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormElement

> FormElement

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\TwbsHelper\Options\ModuleOptions](#class-twbshelperoptionsmoduleoptions)</em> <strong>$options</strong>)</strong> : <em>void</em><br /><em>__construct</em> |
| public | <strong>getTranslator()</strong> : <em>null/\TwbsHelper\Form\View\Helper\TranslatorInterface</em><br /><em>getTranslator Returns translator used in helper</em> |
| public | <strong>getTranslatorTextDomain()</strong> : <em>string</em><br /><em>getTranslatorTextDomain Return the translation text domain</em> |
| public | <strong>hasTranslator()</strong> : <em>boolean</em><br /><em>hasTranslator Checks if the helper has a translator</em> |
| public | <strong>isTranslatorEnabled()</strong> : <em>boolean</em><br /><em>isTranslatorEnabled Returns whether translator is enabled and should be used</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>render Render an element</em> |
| public | <strong>setTranslator(</strong><em>\Zend\I18n\Translator\TranslatorInterface</em> <strong>$oTranslator=null</strong>, <em>string</em> <strong>$sTextDomain=null</strong>)</strong> : <em>\TwbsHelper\Form\View\Helper\TwbsHelperFormElement</em><br /><em>setTranslator Sets translator to use in helper</em> |
| public | <strong>setTranslatorEnabled(</strong><em>bool/boolean</em> <strong>$bEnabled=true</strong>)</strong> : <em>\TwbsHelper\Form\View\Helper\TwbsHelperFormElement</em><br /><em>setTranslatorEnabled Sets whether translator is enabled and should be used</em> |
| public | <strong>setTranslatorTextDomain(</strong><em>string</em> <strong>$sTextDomain=`'default'`</strong>)</strong> : <em>\TwbsHelper\Form\View\Helper\TwbsHelperFormElement</em><br /><em>setTranslatorTextDomain Set translation text domain</em> |
| protected | <strong>renderAddOn(</strong><em>\TwbsHelper\Form\View\Helper\ElementInterface/array/string</em> <strong>$aAddOnOptions</strong>, <em>\string</em> <strong>$sPosition=`'prepend'`</strong>)</strong> : <em>string</em><br /><em>renderAddOn Render addo-on markup</em> |
| protected | <strong>renderHelper(</strong><em>string</em> <strong>$name</strong>, <em>\Zend\Form\ElementInterface</em> <strong>$element</strong>)</strong> : <em>string</em><br /><em>Render element by helper name</em> |

*This class extends \Zend\Form\View\Helper\FormElement*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\Form

> Form

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm=null</strong>, <em>string</em> <strong>$sFormLayout=null</strong>)</strong> : <em>\TwbsHelper\Form\View\Helper\TwbsHelperForm/string</em><br /><em>__invoke</em> |
| public | <strong>openTag(</strong><em>[\TwbsHelper\Form\View\Helper\Form](#class-twbshelperformviewhelperform)Interface/null/\Zend\Form\FormInterface</em> <strong>$oForm=null</strong>)</strong> : <em>string</em><br /><em>openTag Generate an opening form tag</em> |
| public | <strong>render(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm</strong>, <em>string/null</em> <strong>$sFormLayout=null</strong>)</strong> : <em>string</em><br /><em>render Render a form from the provided $oForm,</em> |
| protected | <strong>renderElements(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm</strong>, <em>string/null</em> <strong>$sFormLayout=null</strong>)</strong> : <em>string</em><br /><em>renderElements</em> |
| protected | <strong>setFormClass(</strong><em>\Zend\Form\FormInterface</em> <strong>$oForm</strong>, <em>string/null</em> <strong>$sFormLayout=null</strong>)</strong> : <em>\TwbsHelper\Form\View\Helper\TwbsHelper\Form\View\Helper\TwbsHelperForm</em><br /><em>setFormClass Sets form layout class</em> |

*This class extends \Zend\Form\View\Helper\Form*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormStatic

> FormStatic

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\TwbsHelper\Form\View\Helper\ElementInterface/null/\Zend\Form\ElementInterface</em> <strong>$element=null</strong>)</strong> : <em>string/\TwbsHelper\Form\View\Helper\TwbsHelperFormStatic</em><br /><em>__invoke Invoke helper as functor Proxies to {@link render()}.</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>render</em> |

*This class extends \Zend\View\Helper\AbstractHelper*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormMultiCheckbox

> FormMultiCheckbox

| Visibility | Function |
|:-----------|:---------|
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>render</em> |
| protected | <strong>renderOptions(</strong><em>\Zend\Form\Element\MultiCheckbox</em> <strong>$oElement</strong>, <em>array</em> <strong>$aOptions</strong>, <em>array</em> <strong>$selectedOptions</strong>, <em>array</em> <strong>$aAttributes</strong>)</strong> : <em>string</em><br /><em>renderOptions Render options</em> |

*This class extends \Zend\Form\View\Helper\FormMultiCheckbox*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormFile

> FormFile

| Visibility | Function |
|:-----------|:---------|
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>render Render a form <input> element from the provided $oElement</em> |
| protected | <strong>getType(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>Determine input type to use</em> |

*This class extends \Zend\Form\View\Helper\FormInput*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormRadio

> FormRadio

| Visibility | Function |
|:-----------|:---------|
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>render</em> |
| protected | <strong>renderOptions(</strong><em>\Zend\Form\Element\MultiCheckbox</em> <strong>$oElement</strong>, <em>array</em> <strong>$aOptions</strong>, <em>array</em> <strong>$aSelectedOptions</strong>, <em>array</em> <strong>$aAttributes</strong>)</strong> : <em>string</em><br /><em>renderOptions</em> |

*This class extends \Zend\Form\View\Helper\FormRadio*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormRow

> FormRow

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getRowClassFromElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>getRowClassFromElement</em> |
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>mixed</em> <strong>$sLabelPosition=null</strong>)</strong> : <em>string</em><br /><em>render</em> |
| public | <strong>renderElementFormGroup(</strong><em>string</em> <strong>$sElementContent</strong>, <em>string</em> <strong>$sRowClass</strong>, <em>string</em> <strong>$sFeedbackElement=`''`</strong>)</strong> : <em>string</em><br /><em>renderElementFormGroup</em> |
| protected | <strong>renderElement(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>string</em> <strong>$sLabelPosition=null</strong>)</strong> : <em>\TwbsHelper\Form\View\Helper\type</em><br /><em>renderElement Render element</em> |
| protected | <strong>renderHelpBlock(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>renderHelpBlock Render element's help block</em> |
| protected | <strong>renderLabel(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>renderLabel Render element's label</em> |

*This class extends \Zend\Form\View\Helper\FormRow*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormCollection

> FormCollection

| Visibility | Function |
|:-----------|:---------|
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>)</strong> : <em>string</em><br /><em>render Render a collection by iterating through all fieldsets and elements</em> |
| public | <strong>renderTemplate(</strong><em>\TwbsHelper\Form\View\Helper\CollectionElement/\Zend\Form\Element\Collection</em> <strong>$collection</strong>)</strong> : <em>string</em><br /><em>renderTemplate Only render a template</em> |

*This class extends \Zend\Form\View\Helper\FormCollection*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormButton

> FormButton

| Visibility | Function |
|:-----------|:---------|
| public | <strong>render(</strong><em>\Zend\Form\ElementInterface</em> <strong>$oElement</strong>, <em>string</em> <strong>$sButtonContent=null</strong>)</strong> : <em>string</em><br /><em>render</em> |

*This class extends \Zend\Form\View\Helper\FormButton*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\Form\View\Helper\FormElementErrors

> FormElementErrors

| Visibility | Function |
|:-----------|:---------|

*This class extends \Zend\Form\View\Helper\FormElementErrors*

*This class implements \Zend\I18n\Translator\TranslatorAwareInterface, \Zend\View\Helper\HelperInterface*

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

### Class: \TwbsHelper\View\Helper\Blockquote

> Helper for rendering blockquotes

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>string</em> <strong>$sContent</strong>, <em>string</em> <strong>$sFooter=`''`</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>array</em> <strong>$aContentAttributes=array()</strong>, <em>array</em> <strong>$aFooterAttributes=array()</strong>, <em>bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The blockquote XHTML.</em><br /><em>Generates a 'blockquote' element</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Alert

> Helper for rendering alerts

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>string</em> <strong>$sContent</strong>, <em>string</em> <strong>$sType=`''`</strong>, <em>bool</em> <strong>$bDismissible=false</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The alert XHTML.</em><br /><em>Generates an 'alert' element</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Table

> Helper for rendering tables

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aRows</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The table XHTML.</em><br /><em>Generates a 'table' element</em> |
| public | <strong>renderHeadRows(</strong><em>array</em> <strong>$aHeadRows</strong>, <em>bool/boolean</em> <strong>$bEscape=true</strong>)</strong> : <em>string The "<thead>" rows XHTML.</em><br /><em>Generate table "<thead>" rows elements</em> |
| public | <strong>renderTableCell(</strong><em>\TwbsHelper\View\Helper\scalar/array</em> <strong>$sCell</strong>, <em>string</em> <strong>$sDefaultCellType</strong>, <em>bool/boolean</em> <strong>$bEscape=true</strong>)</strong> : <em>string The cell XHTML.</em><br /><em>Generate table cell element "<th>" or "<td>"</em> |
| public | <strong>renderTableRow(</strong><em>array</em> <strong>$aRow</strong>, <em>string</em> <strong>$sDefaultCellType</strong>, <em>bool/boolean</em> <strong>$bEscape=true</strong>)</strong> : <em>string The row XHTML.</em><br /><em>Generate table row element "<tr>"</em> |
| public | <strong>renderTableRows(</strong><em>array</em> <strong>$aRows</strong>, <em>bool/boolean</em> <strong>$bEscape=true</strong>)</strong> : <em>string The rows XHTML.</em><br /><em>Generate table rows elements</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Image

> Helper for rendering images

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>string</em> <strong>$sImageSrc</strong>, <em>array</em> <strong>$aOptionsAndAttributes=array()</strong>)</strong> : <em>string The image XHTML.</em><br /><em>Generates a 'image' element - boolean fluid: responsive image - boolean thumbnail: thumbnail image - boolean rounded: rounded image - boolean figure: figure image - [srcset => type] sources: list of sources for <picture element></em> |
| public | <strong>renderSources(</strong><em>array</em> <strong>$aSources</strong>, <em>string</em> <strong>$sIndentation=`'    '`</strong>)</strong> : <em>void</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\ButtonGroup

> ButtonGroup

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aButtons=null</strong>, <em>array</em> <strong>$aButtonGroupOptions=null</strong>)</strong> : <em>\TwbsHelper\View\Helper\TwbsHelperButtonGroup/string</em><br /><em>__invoke</em> |
| public | <strong>getFormElementHelper()</strong> : <em>\TwbsHelper\View\Helper\TwbsHelperFormElement</em><br /><em>getFormElementHelper</em> |
| public | <strong>render(</strong><em>array</em> <strong>$aButtons</strong>, <em>array</em> <strong>$aButtonGroupOptions=null</strong>)</strong> : <em>string</em><br /><em>Render button groups markup</em> |
| protected | <strong>renderButtons(</strong><em>array</em> <strong>$aButtons</strong>, <em>bool</em> <strong>$bJustified=false</strong>)</strong> : <em>string</em><br /><em>renderButtons Render buttons markup</em> |

*This class extends \Zend\Form\View\Helper\AbstractHelper*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\I18n\Translator\TranslatorAwareInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Abbreviation

> Helper for rendering abbreviations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>string</em> <strong>$sContent</strong>, <em>string</em> <strong>$sTitle=`''`</strong>, <em>bool</em> <strong>$bInitialism=false</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The abbreviation XHTML.</em><br /><em>Generates an 'abbreviation' element</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Badge

> Helper for rendering badges

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>string</em> <strong>$sContent</strong>, <em>string</em> <strong>$sVariation=`'default'`</strong>, <em>string</em> <strong>$sType=`'simple'`</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The badge XHTML.</em><br /><em>Generates a 'badge' element</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\HtmlList

> Helper for ordered and unordered lists

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>array</em> <strong>$aItems</strong>, <em>bool</em> <strong>$bOrdered=false</strong>, <em>bool/array</em> <strong>$aAttributes=false</strong>, <em>bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The list XHTML.</em><br /><em>Generates a 'List' element. Manage indentation of Xhtml markup</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Figure

> Helper for rendering figures

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>string</em> <strong>$sImageSrc</strong>, <em>string</em> <strong>$sCaption=`''`</strong>, <em>array</em> <strong>$aAttributes=array()</strong>, <em>array</em> <strong>$aImageOptionsAndAttributes=array()</strong>, <em>array</em> <strong>$aCaptionAttributes=array()</strong>, <em>bool</em> <strong>$bEscape=true</strong>)</strong> : <em>string The figure XHTML.</em><br /><em>Generates a 'figure' element</em> |

*This class extends \Zend\View\Helper\AbstractHtmlElement*

*This class implements \Zend\View\Helper\HelperInterface*

<hr />

### Class: \TwbsHelper\View\Helper\Navigation\Breadcrumbs

> Helper for rendering abbreviations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>htmlify(</strong><em>\Zend\Navigation\Page\AbstractPage</em> <strong>$oPage</strong>)</strong> : <em>string HTML string</em><br /><em>Returns an HTML string containing an 'a' element for the given page</em> |
| public | <strong>renderStraight(</strong><em>\TwbsHelper\View\Helper\Navigation\AbstractContainer</em> <strong>$container=null</strong>)</strong> : <em>string</em><br /><em>Renders breadcrumbs by chaining 'a' elements with the separator registered in the helper. to render the container registered in the helper.</em> |
| protected | <strong>renderBreadcrumbItem(</strong><em>mixed</em> <strong>$sHtml</strong>, <em>\bool</em> <strong>$active=false</strong>)</strong> : <em>void</em> |

*This class extends \Zend\View\Helper\Navigation\Breadcrumbs*

*This class implements \Zend\View\Helper\HelperInterface, \Zend\EventManager\EventManagerAwareInterface, \Zend\EventManager\EventsCapableInterface, \Zend\View\Helper\Navigation\HelperInterface*

