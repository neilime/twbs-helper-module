---
title: "CodePrinter"
---

***

* Full name: `\Documentation\Generator\UsagePage\Printer\CodePrinter`
* Parent class: [`\Documentation\Generator\UsagePage\Printer\AbstractPrinter`](/docs/phpdoc/classes/Documentation/Generator/UsagePage/Printer/AbstractPrinter)

## Properties

### CODE_TEMPLATE

```php
private static $CODE_TEMPLATE
```

* This property is **static**.

***

## Methods

### getPageContent

```php
public getPageContent(): string
```

***

### getRenderingSource

```php
private getRenderingSource(): mixed
```

***

### getRenderResult

```php
private getRenderResult(): mixed
```

***

## Inherited methods

### getPageContent

```php
public getPageContent(): string
```

* This method is **abstract**.
***

### __construct

```php
public __construct(\Documentation\Generator\Configuration $configuration, \Documentation\Test\Config $documentationTestConfig, string $pagePath, bool $pageExists): mixed
```

**Parameters:**

| Parameter                  | Type                                       | Description |
|----------------------------|--------------------------------------------|-------------|
| `$configuration`           | **\Documentation\Generator\Configuration** |             |
| `$documentationTestConfig` | **\Documentation\Test\Config**             |             |
| `$pagePath`                | **string**                                 |             |
| `$pageExists`              | **bool**                                   |             |

***

### pageExists

```php
protected pageExists(): mixed
```

***
