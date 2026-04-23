---
title: "HeadPrinter"
---

***

* Full name: `\Documentation\Generator\UsagePage\Printer\HeadPrinter`
* Parent class: [`\Documentation\Generator\UsagePage\Printer\AbstractPrinter`](/docs/phpdoc/classes/Documentation/Generator/UsagePage/Printer/AbstractPrinter)

## Properties

### WEBSITE_PATH

```php
private static $WEBSITE_PATH
```

* This property is **static**.

***

### HTML_CODE_PATH

```php
private static $HTML_CODE_PATH
```

* This property is **static**.

***

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

### shouldWriteHead

```php
private shouldWriteHead(): mixed
```

***

### getHtmlCodeRelativePath

```php
private getHtmlCodeRelativePath(): mixed
```

***

### normalizePath

Normalize path

```php
public normalizePath(string $path, string $separator = '\/'): string
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$path`      | **string** |             |
| `$separator` | **string** |             |

**Return Value:**

normalized path

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
