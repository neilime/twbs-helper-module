# API Documentation

## Table of Contents

* [Abbreviation](#abbreviation)
    * [__invoke](#__invoke)
* [Blockquote](#blockquote)
    * [__invoke](#__invoke-1)
* [HtmlList](#htmllist)
    * [__invoke](#__invoke-2)
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
    * [__invoke](#__invoke-3)
* [Table](#table)
    * [__invoke](#__invoke-4)
    * [renderTableRows](#rendertablerows)
    * [renderTableRow](#rendertablerow)
    * [renderTableCell](#rendertablecell)

## Abbreviation

Helper for rendering abbreviations



* Full name: \TwbsHelper\View\Helper\Abbreviation
* Parent class: 


### __invoke

Generates an 'abbreviation' element : "<abbr title="abbreviation title">abbreviation content</abbr>"

```php
Abbreviation::__invoke( string $sContent, string $sTitle = &#039;&#039;, boolean $bInitialism = false, array $aAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sContent` | **string** | The content of the abbreviation |
| `$sTitle` | **string** | The title of the abbreviation. Default : empty |
| `$bInitialism` | **boolean** | True set the class 'initialism' to an abbreviation for a slightly smaller font-size. Default : false |
| `$aAttributes` | **array** | Html attributes of the <abbr> element |
| `$bEscape` | **boolean** | True espace html content '$sContent'. Default True |


**Return Value:**

The abbreviation XHTML.



---

## Blockquote

Helper for rendering blockquotes



* Full name: \TwbsHelper\View\Helper\Blockquote
* Parent class: 


### __invoke

Generates an 'blockquote' element : "<blockquote class="blockquote"><p class="mb-0">Blockquote content</p></blockquote>"

```php
Blockquote::__invoke( string $sContent, string $sFooter = &#039;&#039;, array $aAttributes = array(), array $aContentAttributes = array(), array $aFooterAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sContent` | **string** | The content of the blockquote |
| `$sFooter` | **string** | The content of the footer of the blockquote. Default : empty |
| `$aAttributes` | **array** | Html attributes of the <blockquote> element. Default : empty |
| `$aContentAttributes` | **array** | Html attributes of the <p> (content) element. Default : empty |
| `$aFooterAttributes` | **array** | Html attributes of the <p> (content) element. Default : empty |
| `$bEscape` | **boolean** | True espace html content '$sContent'. Default True |


**Return Value:**

The blockquote XHTML.



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

Generates an 'table' element : "<table>"

```php
Table::__invoke( array $aRows, array $aAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aRows` | **array** | : table rows.
 Simple array : [ [one, two, three], [four, five, six] ]
 Simple array with a head :
    [ [first-col => one, second-col =>  two, third-col =>  three], [four, five, six] ]
    or
    [
        head => [ [first-col, second-col, third-col] ]
        body [ [one, two, three], [four, five, six] ]
    ]
 Custom cell, each cells (td,th) can be a scalar value or an array composed of :
   - string 'type': (optionnal) th or td. Default is "th" for thead rows and "td" for tbody rows
   - scalar 'data': the content of the cell
   - array 'attributes': (optionnal) html attributes of the cell element. Default : empty
   [
       [ [ type => th, attributes => [ scope => row ] data => one ], two, three],
       [ [ type => th, attributes => [ scope => row ] data => four ], five, six ]
   ] |
| `$aAttributes` | **array** | Html attributes of the <table> element. Default : empty |
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
| `$aRows` | **array** | The array of rows. Can be :
    [ [first-col => one, second-col =>  two, third-col =>  three], [four, five, six] ]
    or
    [
        head => [ [first-col, second-col, third-col] ]
        body [ [one, two, three], [four, five, six] ]
    ] |
| `$bEscape` | **boolean** | True espace html content of cells. Default True |


**Return Value:**

The rows XHTML.



---

### renderTableRow

Generate table row element "<tr>"

```php
Table::renderTableRow( array $aRow, string $sDefaultCellType, boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aRow` | **array** |  |
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
| `$sCell` | **scalar&#124;array** | : the cell data ; can be a scalar value or an array composed of :
   - string 'type': (optionnal) th or td. Default is "th" for thead rows and "td" for tbody rows
   - scalar 'data': the content of the cell
   - array 'attributes': (optionnal) html attributes of the cell element. Default : empty
   [
       [ [ type => th, attributes => [ scope => row ] data => one ], two, three],
       [ [ type => th, attributes => [ scope => row ] data => four ], five, six ]
   ] |
| `$sDefaultCellType` | **string** | The default cell element (th or td) to be used |
| `$bEscape` | **boolean** | True espace html content of cells. Default True |


**Return Value:**

The cell XHTML.



---



--------
> This document was automatically generated from source code comments on 2017-02-01 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
