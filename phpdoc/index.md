# API Documentation

## Table of Contents

* [Abbreviation](#abbreviation)
    * [__invoke](#__invoke)
* [Blockquote](#blockquote)
    * [__invoke](#__invoke-1)
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
    * [__invoke](#__invoke-2)

## Abbreviation

Helper for rendering abbreviations



* Full name: \TwbsHelper\View\Helper\Abbreviation
* Parent class: 


### __invoke

Generates an 'abbreviation' element : <abbr title="abbreviation title">abbreviation content</abbr>

```php
Abbreviation::__invoke( string $sContent, string $sTitle = &#039;&#039;, boolean $bInitialism = false, array $aAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sContent` | **string** | : the content of the abbreviation |
| `$sTitle` | **string** | : the title of the abbreviation. Default : empty |
| `$bInitialism` | **boolean** | : true set the class 'initialism' to an abbreviation for a slightly smaller font-size. Default : false |
| `$aAttributes` | **array** | : html attributes of the <abbr> element |
| `$bEscape` | **boolean** | : true espace html content '$sContent'. Default : true |


**Return Value:**

: the abbreviation XHTML.



---

## Blockquote

Helper for rendering blockquotes



* Full name: \TwbsHelper\View\Helper\Blockquote
* Parent class: 


### __invoke

Generates an 'blockquote' element : <blockquote class="blockquote"><p class="mb-0">Blockquote content</p></blockquote>

```php
Blockquote::__invoke( string $sContent, array $aAttributes = array(), array $aContentAttributes = array(), boolean $bEscape = true ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sContent` | **string** | : the content of the blockquote |
| `$aAttributes` | **array** | : html attributes of the <blockquote> element. Default : empty |
| `$aContentAttributes` | **array** | : html attributes of the <p> (content) element. Default : empty |
| `$bEscape` | **boolean** | : true espace html content '$sContent'. Default : true |


**Return Value:**

: the blockquote XHTML.



---

## Module





* Full name: \TwbsHelper\Module
* This class implements: \Zend\ModuleManager\Feature\ConfigProviderInterface


### getConfig



```php
Module::getConfig(  ): array
```







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



--------
> This document was automatically generated from source code comments on 2017-01-31 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
