# API Documentation

## Table of Contents

* [Abbreviation](#abbreviation)
    * [__invoke](#__invoke)
* [Alert](#alert)
    * [__invoke](#__invoke-1)
* [Badge](#badge)
    * [__invoke](#__invoke-2)
* [Blockquote](#blockquote)
    * [__invoke](#__invoke-3)
* [ButtonGroup](#buttongroup)
    * [__invoke](#__invoke-4)
    * [render](#render)
    * [getFormElementHelper](#getformelementhelper)
* [Figure](#figure)
    * [__invoke](#__invoke-5)
* [Form](#form)
    * [__invoke](#__invoke-6)
    * [render](#render-1)
    * [openTag](#opentag)
* [FormButton](#formbutton)
    * [render](#render-2)
* [FormCheckbox](#formcheckbox)
    * [render](#render-3)
    * [getLabelContent](#getlabelcontent)
* [FormCollection](#formcollection)
    * [render](#render-4)
    * [renderTemplate](#rendertemplate)
* [FormElement](#formelement)
    * [__construct](#__construct)
    * [render](#render-5)
    * [setTranslator](#settranslator)
    * [getTranslator](#gettranslator)
    * [hasTranslator](#hastranslator)
    * [setTranslatorEnabled](#settranslatorenabled)
    * [isTranslatorEnabled](#istranslatorenabled)
    * [setTranslatorTextDomain](#settranslatortextdomain)
    * [getTranslatorTextDomain](#gettranslatortextdomain)
* [FormElementErrors](#formelementerrors)
* [FormElementFactory](#formelementfactory)
    * [createService](#createservice)
    * [__invoke](#__invoke-7)
* [FormErrors](#formerrors)
    * [__invoke](#__invoke-8)
    * [render](#render-6)
    * [dangerAlert](#dangeralert)
* [FormFile](#formfile)
    * [render](#render-7)
* [FormMultiCheckbox](#formmulticheckbox)
    * [render](#render-8)
* [FormRadio](#formradio)
    * [render](#render-9)
* [FormRow](#formrow)
    * [render](#render-10)
    * [getRowClassFromElement](#getrowclassfromelement)
    * [renderElementFormGroup](#renderelementformgroup)
* [FormStatic](#formstatic)
    * [__invoke](#__invoke-9)
    * [render](#render-11)
* [HtmlList](#htmllist)
    * [__invoke](#__invoke-10)
* [Module](#module)
    * [getConfig](#getconfig)
* [ModuleOptions](#moduleoptions)
    * [getIgnoredViewHelpers](#getignoredviewhelpers)
    * [setIgnoredViewHelpers](#setignoredviewhelpers)
    * [getClassMap](#getclassmap)
    * [setClassMap](#setclassmap)
    * [getTypeMap](#gettypemap)
    * [setTypeMap](#settypemap)
* [ModuleOptionsFactory](#moduleoptionsfactory)
    * [createService](#createservice-1)
    * [__invoke](#__invoke-11)
* [StaticElement](#staticelement)
* [Table](#table)
    * [__invoke](#__invoke-12)
    * [renderTableRows](#rendertablerows)
    * [renderHeadRows](#renderheadrows)
    * [renderTableRow](#rendertablerow)
    * [renderTableCell](#rendertablecell)

## Abbreviation

Helper for rendering abbreviations



* Full name: \TwbsHelper\View\Helper\Abbreviation
* Parent class: 


### __invoke

Generates an 'abbreviation' element

```php
Abbreviation::__invoke( string $sContent, string $sTitle = &#039;&#039;, boolean $bInitialism = false, array $aAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sContent` | **string** | The content of the abbreviation |
| `$sTitle` | **string** | The title of the abbreviation. Default : empty |
| `$bInitialism` | **boolean** | True set the class 'initialism' to an abbreviation for a slightly smaller font-size. Default : false |
| `$aAttributes` | **array** | Html attributes of the "<abbr>" element |
| `$bEscape` | **boolean** | True espace html content '$sContent'. Default True |


**Return Value:**

The abbreviation XHTML.



---

## Alert

Helper for rendering alerts



* Full name: \TwbsHelper\View\Helper\Alert
* Parent class: 


### __invoke

Generates an 'alert' element

```php
Alert::__invoke( string $sContent, string $sType = &#039;&#039;, boolean $bDismissible = false, array $aAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sContent` | **string** | The content of the alert |
| `$sType` | **string** | The type of the alert (success, info, warning, danger). Default : empty |
| `$bDismissible` | **boolean** | True if the alert can be dismissable. Default : false |
| `$aAttributes` | **array** | Html attributes of the "<div>" element |
| `$bEscape` | **boolean** | True espace html content '$sContent'. Default True |


**Return Value:**

The alert XHTML.



---

## Badge

Helper for rendering badges



* Full name: \TwbsHelper\View\Helper\Badge
* Parent class: 


### __invoke

Generates a 'badge' element

```php
Badge::__invoke( string $sContent, string $sType = &#039;default&#039;, boolean $bPill = false, array $aAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sContent` | **string** | The content of the badge |
| `$sType` | **string** | The type of the badge (default, success, info, warning, danger). Default : default |
| `$bPill` | **boolean** | True if the badge is a pill badge. Default : false |
| `$aAttributes` | **array** | Html attributes of the "<span>" element |
| `$bEscape` | **boolean** | True espace html content '$sContent'. Default True |


**Return Value:**

The badge XHTML.



---

## Blockquote

Helper for rendering blockquotes



* Full name: \TwbsHelper\View\Helper\Blockquote
* Parent class: 


### __invoke

Generates a 'blockquote' element

```php
Blockquote::__invoke( string $sContent, string $sFooter = &#039;&#039;, array $aAttributes = array(), array $aContentAttributes = array(), array $aFooterAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sContent` | **string** | The content of the blockquote |
| `$sFooter` | **string** | The content of the footer of the blockquote. Default : empty |
| `$aAttributes` | **array** | Html attributes of the "<blockquote>" element. Default : empty |
| `$aContentAttributes` | **array** | Html attributes of the "<p>" (content) element. Default : empty |
| `$aFooterAttributes` | **array** | Html attributes of the "<footer>" (footer) element. Default : empty |
| `$bEscape` | **boolean** | True espace html content '$sContent'. Default True |


**Return Value:**

The blockquote XHTML.



---

## ButtonGroup

ButtonGroup



* Full name: \TwbsHelper\View\Helper\ButtonGroup
* Parent class: 


### __invoke

__invoke

```php
ButtonGroup::__invoke( array $aButtons = null, array $aButtonGroupOptions = null ): \TwbsHelper\View\Helper\TwbsHelperButtonGroup|string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aButtons` | **array** |  |
| `$aButtonGroupOptions` | **array** |  |




---

### render

Render button groups markup

```php
ButtonGroup::render( array $aButtons, array $aButtonGroupOptions = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aButtons` | **array** |  |
| `$aButtonGroupOptions` | **array** |  |




---

### getFormElementHelper

getFormElementHelper

```php
ButtonGroup::getFormElementHelper(  ): \TwbsHelper\View\Helper\TwbsHelperFormElement
```







---

## Figure

Helper for rendering figures



* Full name: \TwbsHelper\View\Helper\Figure
* Parent class: 


### __invoke

Generates a 'figure' element

```php
Figure::__invoke( string $sImageSrc, string $sCaption = &#039;&#039;, array $aAttributes = array(), array $aImageAttributes = array(), array $aCaptionAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sImageSrc` | **string** | The path to the image of the figure |
| `$sCaption` | **string** | The content of the caption of the figure. Default : empty |
| `$aAttributes` | **array** | Html attributes of the "<figure>" element. Default : empty |
| `$aImageAttributes` | **array** | Html attributes of the "<img>" (image) element. Default : empty |
| `$aCaptionAttributes` | **array** | Html attributes of the "<figcaption>" (caption) element. Default : empty |
| `$bEscape` | **boolean** | True espace html caption '$sCaption'. Default True |


**Return Value:**

The figure XHTML.



---

## Form

Form



* Full name: \TwbsHelper\Form\View\Helper\Form
* Parent class: 


### __invoke

__invoke

```php
Form::__invoke( \Zend\Form\FormInterface $oForm = null, string $sFormLayout = self::LAYOUT_HORIZONTAL ): \TwbsHelper\Form\View\Helper\TwbsHelperForm|string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oForm` | **\Zend\Form\FormInterface** |  |
| `$sFormLayout` | **string** |  |



**See Also:**

* \TwbsHelper\Form\View\Helper\Form::__invoke() 

---

### render

render
Render a form from the provided $oForm,

```php
Form::render( \Zend\Form\FormInterface $oForm, string|null $sFormLayout = self::LAYOUT_HORIZONTAL ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oForm` | **\Zend\Form\FormInterface** |  |
| `$sFormLayout` | **string&#124;null** |  |



**See Also:**

* \TwbsHelper\Form\View\Helper\Form::render() 

---

### openTag

openTag
Generate an opening form tag

```php
Form::openTag( \Zend\Form\FormInterface|null $oForm = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oForm` | **\Zend\Form\FormInterface&#124;null** |  |




---

## FormButton

FormButton



* Full name: \TwbsHelper\Form\View\Helper\FormButton
* Parent class: 


### render

render

```php
FormButton::render( \Zend\Form\ElementInterface $oElement, string $sButtonContent = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |
| `$sButtonContent` | **string** |  |



**See Also:**

* \TwbsHelper\Form\View\Helper\FormButton::render() 

---

## FormCheckbox

FormCheckbox



* Full name: \TwbsHelper\Form\View\Helper\FormCheckbox
* Parent class: 


### render

render

```php
FormCheckbox::render( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |



**See Also:**

* \Zend\Form\View\Helper\FormCheckbox::render() 

---

### getLabelContent

getLabelContent

```php
FormCheckbox::getLabelContent( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |




---

## FormCollection

FormCollection



* Full name: \TwbsHelper\Form\View\Helper\FormCollection
* Parent class: 


### render

render
Render a collection by iterating through all fieldsets and elements

```php
FormCollection::render( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |




---

### renderTemplate

renderTemplate
Only render a template

```php
FormCollection::renderTemplate( \Zend\Form\Element\Collection $collection ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **\Zend\Form\Element\Collection** |  |




---

## FormElement

FormElement



* Full name: \TwbsHelper\Form\View\Helper\FormElement
* Parent class: 
* This class implements: \Zend\I18n\Translator\TranslatorAwareInterface


### __construct

__construct

```php
FormElement::__construct( \TwbsHelper\Options\ModuleOptions $options ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\TwbsHelper\Options\ModuleOptions** |  |




---

### render

render
Render an element

```php
FormElement::render( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |




---

### setTranslator

setTranslator
Sets translator to use in helper

```php
FormElement::setTranslator( \Zend\I18n\Translator\TranslatorInterface $oTranslator = null, string $sTextDomain = null ): \TwbsHelper\Form\View\Helper\TwbsHelperFormElement
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oTranslator` | **\Zend\I18n\Translator\TranslatorInterface** | : [optional] translator. Default is null, which sets no translator. |
| `$sTextDomain` | **string** | : [optional] text domain Default is null, which skips setTranslatorTextDomain |



**See Also:**

* \Zend\I18n\Translator\TranslatorAwareInterface::setTranslator() 

---

### getTranslator

getTranslator
Returns translator used in helper

```php
FormElement::getTranslator(  ): null|\Zend\I18n\Translator\TranslatorInterface
```






**See Also:**

* \Zend\I18n\Translator\TranslatorAwareInterface::getTranslator() 

---

### hasTranslator

hasTranslator
Checks if the helper has a translator

```php
FormElement::hasTranslator(  ): boolean
```






**See Also:**

* \Zend\I18n\Translator\TranslatorAwareInterface::hasTranslator() 

---

### setTranslatorEnabled

setTranslatorEnabled
Sets whether translator is enabled and should be used

```php
FormElement::setTranslatorEnabled( boolean $bEnabled = true ): \TwbsHelper\Form\View\Helper\TwbsHelperFormElement
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bEnabled` | **boolean** |  |



**See Also:**

* \Zend\I18n\Translator\TranslatorAwareInterface::setTranslatorEnabled() 

---

### isTranslatorEnabled

isTranslatorEnabled
Returns whether translator is enabled and should be used

```php
FormElement::isTranslatorEnabled(  ): boolean
```






**See Also:**

* \Zend\I18n\Translator\TranslatorAwareInterface::isTranslatorEnabled() 

---

### setTranslatorTextDomain

setTranslatorTextDomain
Set translation text domain

```php
FormElement::setTranslatorTextDomain( string $sTextDomain = &#039;default&#039; ): \TwbsHelper\Form\View\Helper\TwbsHelperFormElement
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sTextDomain` | **string** |  |



**See Also:**

* \Zend\I18n\Translator\TranslatorAwareInterface::setTranslatorTextDomain() 

---

### getTranslatorTextDomain

getTranslatorTextDomain
Return the translation text domain

```php
FormElement::getTranslatorTextDomain(  ): string
```






**See Also:**

* \Zend\I18n\Translator\TranslatorAwareInterface::getTranslatorTextDomain() 

---

## FormElementErrors

FormElementErrors



* Full name: \TwbsHelper\Form\View\Helper\FormElementErrors
* Parent class: 


## FormElementFactory

FormElementFactory
Factory to inject the ModuleOptions hard dependency



* Full name: \TwbsHelper\Form\View\Helper\Factory\FormElementFactory
* This class implements: \Zend\ServiceManager\FactoryInterface


### createService

createService
Compatibility with ZF2 (>= 2.2) -> proxy to __invoke

```php
FormElementFactory::createService( \Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator, mixed $sCanonicalName = null, mixed $sRequestedName = null ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oServiceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$sCanonicalName` | **mixed** |  |
| `$sRequestedName` | **mixed** |  |




---

### __invoke

__invoke
Compatibility with ZF3

```php
FormElementFactory::__invoke( \Interop\Container\ContainerInterface $oContainer,  $sRequestedName, array $aOptions = null ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oContainer` | **\Interop\Container\ContainerInterface** |  |
| `$sRequestedName` | **** |  |
| `$aOptions` | **array** |  |




---

## FormErrors

FormErrors



* Full name: \TwbsHelper\Form\View\Helper\FormErrors
* Parent class: 


### __invoke

__invoke
Invoke as function

```php
FormErrors::__invoke( \Zend\Form\FormInterface $oForm = null, string $sMessage = null, string $bDismissable = false ): string|null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oForm` | **\Zend\Form\FormInterface** |  |
| `$sMessage` | **string** |  |
| `$bDismissable` | **string** |  |




---

### render

render
Renders the error messages.

```php
FormErrors::render( \Zend\Form\FormInterface $oForm,  $sMessage,  $bDismissable = false ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oForm` | **\Zend\Form\FormInterface** |  |
| `$sMessage` | **** |  |
| `$bDismissable` | **** |  |




---

### dangerAlert

dangerAlert
Creates and returns a "danger" alert.

```php
FormErrors::dangerAlert( string $content, boolean $bDismissable = false ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$bDismissable` | **boolean** |  |




---

## FormFile

FormFile



* Full name: \TwbsHelper\Form\View\Helper\FormFile
* Parent class: 


### render

render
Render a form <input> element from the provided $oElement

```php
FormFile::render( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |




---

## FormMultiCheckbox

FormMultiCheckbox



* Full name: \TwbsHelper\Form\View\Helper\FormMultiCheckbox
* Parent class: 


### render

render

```php
FormMultiCheckbox::render( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |



**See Also:**

* \TwbsHelper\Form\View\Helper\FormMultiCheckbox::render() 

---

## FormRadio

FormRadio



* Full name: \TwbsHelper\Form\View\Helper\FormRadio
* Parent class: 


### render

render

```php
FormRadio::render( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |



**See Also:**

* \Zend\Form\View\Helper\FormRadio::render() 

---

## FormRow

FormRow



* Full name: \TwbsHelper\Form\View\Helper\FormRow
* Parent class: 


### render

render

```php
FormRow::render( \Zend\Form\ElementInterface $oElement, mixed $sLabelPosition = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |
| `$sLabelPosition` | **mixed** |  |



**See Also:**

* \TwbsHelper\Form\View\Helper\FormRow::render() 

---

### getRowClassFromElement

getRowClassFromElement

```php
FormRow::getRowClassFromElement( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |




---

### renderElementFormGroup

renderElementFormGroup

```php
FormRow::renderElementFormGroup( string $sElementContent, string $sRowClass, string $sFeedbackElement = &#039;&#039; ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sElementContent` | **string** |  |
| `$sRowClass` | **string** |  |
| `$sFeedbackElement` | **string** | A feedback element that should be rendered within the element, optional |




---

## FormStatic

FormStatic



* Full name: \TwbsHelper\Form\View\Helper\FormStatic
* Parent class: 


### __invoke

__invoke
Invoke helper as functor
Proxies to {@link render()}.

```php
FormStatic::__invoke( \Zend\Form\ElementInterface|null $element = null ): string|\TwbsHelper\Form\View\Helper\TwbsHelperFormStatic
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\Zend\Form\ElementInterface&#124;null** |  |




---

### render

render

```php
FormStatic::render( \Zend\Form\ElementInterface $oElement ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oElement` | **\Zend\Form\ElementInterface** |  |



**See Also:**

* \Zend\Form\View\Helper\AbstractHelper::render() 

---

## HtmlList

Helper for ordered and unordered lists



* Full name: \TwbsHelper\View\Helper\HtmlList
* Parent class: 


### __invoke

Generates a 'List' element. Manage indentation of Xhtml markup

```php
HtmlList::__invoke( array $aItems, boolean $bOrdered = false, array $aAttributes = false, boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aItems` | **array** | Array with the elements of the list |
| `$bOrdered` | **boolean** | Specifies ordered/unordered list; default unordered |
| `$aAttributes` | **array** | Attributes for the ol/ul tag. If class attributes contains "list-inline", so the li will have the class "list-inline-item" |
| `$bEscape` | **boolean** | Escape the items. |


**Return Value:**

The list XHTML.



---

## Module





* Full name: \TwbsHelper\Module
* This class implements: \Zend\ModuleManager\Feature\ConfigProviderInterface


### getConfig

Retrieve module configuration

```php
Module::getConfig(  ): array
```





**Return Value:**

The configuration array



---

## ModuleOptions

ModuleOptions
Hold options for TwbsHelper module



* Full name: \TwbsHelper\Options\ModuleOptions
* Parent class: 


### getIgnoredViewHelpers

getIgnoredViewHelpers

```php
ModuleOptions::getIgnoredViewHelpers(  ): array
```







---

### setIgnoredViewHelpers

setIgnoredViewHelpers

```php
ModuleOptions::setIgnoredViewHelpers( array $aIgnoredViewHelpers ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aIgnoredViewHelpers` | **array** |  |




---

### getClassMap

getClassMap

```php
ModuleOptions::getClassMap(  ): array
```







---

### setClassMap

setClassMap

```php
ModuleOptions::setClassMap( array $aClassMap ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aClassMap` | **array** |  |




---

### getTypeMap

getTypeMap

```php
ModuleOptions::getTypeMap(  ): array
```







---

### setTypeMap

setTypeMap

```php
ModuleOptions::setTypeMap( array $aTypeMap ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aTypeMap` | **array** |  |




---

## ModuleOptionsFactory

ModuleOptionsFactory



* Full name: \TwbsHelper\Options\Factory\ModuleOptionsFactory
* This class implements: \Zend\ServiceManager\FactoryInterface


### createService

createService

```php
ModuleOptionsFactory::createService( \Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oServiceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |




---

### __invoke

__invoke

```php
ModuleOptionsFactory::__invoke( \Interop\Container\ContainerInterface $oContainer, string $sRequestedName, array $aOptions = null ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oContainer` | **\Interop\Container\ContainerInterface** |  |
| `$sRequestedName` | **string** |  |
| `$aOptions` | **array** |  |




---

## StaticElement

StaticElement



* Full name: \TwbsHelper\Form\Element\StaticElement
* Parent class: 


## Table

Helper for rendering tables



* Full name: \TwbsHelper\View\Helper\Table
* Parent class: 


### __invoke

Generates a 'table' element

```php
Table::__invoke( array $aRows, array $aAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aRows` | **array** | table rows |
| `$aAttributes` | **array** | Html attributes of the "<table>" element. Default : empty |
| `$bEscape` | **boolean** | True espace html content of cells. Default True |


**Return Value:**

The table XHTML.



---

### renderTableRows

Generate table rows elements

```php
Table::renderTableRows( array $aRows, boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aRows` | **array** | The array of rows. |
| `$bEscape` | **boolean** | True espace html content of cells. Default True |


**Return Value:**

The rows XHTML.



---

### renderHeadRows

Generate table "<thead>" rows elements

```php
Table::renderHeadRows( array $aHeadRows, boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aHeadRows` | **array** |  |
| `$bEscape` | **boolean** | True espace html content of cells. Default True |


**Return Value:**

The "<thead>" rows XHTML.



---

### renderTableRow

Generate table row element "<tr>"

```php
Table::renderTableRow( array $aRow, string $sDefaultCellType, boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aRow` | **array** | The array of cells. |
| `$sDefaultCellType` | **string** | The default cell element (th or td) to be used |
| `$bEscape` | **boolean** | True espace html content of cells. Default True |


**Return Value:**

The row XHTML.



---

### renderTableCell

Generate table cell element "<th>" or "<td>"

```php
Table::renderTableCell( scalar|array $sCell, string $sDefaultCellType, boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sCell` | **scalar&#124;array** | : the cell data |
| `$sDefaultCellType` | **string** | The default cell element (th or td) to be used |
| `$bEscape` | **boolean** | True espace html content of cells. Default True |


**Return Value:**

The cell XHTML.



---



--------
> This document was automatically generated from source code comments on 2019-02-02 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
