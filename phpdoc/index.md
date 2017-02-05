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
* [Figure](#figure)
    * [__invoke](#__invoke-4)
* [HtmlList](#htmllist)
    * [__invoke](#__invoke-5)
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
    * [createService](#createservice)
    * [__invoke](#__invoke-6)
* [Table](#table)
    * [__invoke](#__invoke-7)
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

Hold options for TwbsHelper module



* Full name: \TwbsHelper\Options\ModuleOptions
* Parent class: 


### getIgnoredViewHelpers



```php
ModuleOptions::getIgnoredViewHelpers(  ): array
```







---

### setIgnoredViewHelpers



```php
ModuleOptions::setIgnoredViewHelpers( array $aIgnoredViewHelpers ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aIgnoredViewHelpers` | **array** |  |




---

### getClassMap



```php
ModuleOptions::getClassMap(  ): array
```







---

### setClassMap



```php
ModuleOptions::setClassMap( array $aClassMap ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aClassMap` | **array** |  |




---

### getTypeMap



```php
ModuleOptions::getTypeMap(  ): array
```







---

### setTypeMap



```php
ModuleOptions::setTypeMap( array $aTypeMap ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aTypeMap` | **array** |  |




---

## ModuleOptionsFactory





* Full name: \TwbsHelper\Options\Factory\ModuleOptionsFactory
* This class implements: \Zend\ServiceManager\FactoryInterface


### createService



```php
ModuleOptionsFactory::createService( \Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator ): \TwbsHelper\Options\ModuleOptions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oServiceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |




---

### __invoke



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
> This document was automatically generated from source code comments on 2017-02-05 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
