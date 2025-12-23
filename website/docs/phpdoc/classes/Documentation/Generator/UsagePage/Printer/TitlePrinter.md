---
title: "TitlePrinter"
---

***

* Full name: `\Documentation\Generator\UsagePage\Printer\TitlePrinter`
* Parent class: [`\Documentation\Generator\UsagePage\Printer\AbstractPrinter`](./AbstractPrinter)

## Methods

### getPageContent

```php
public getPageContent(): string
```

***

### getHeadings

```php
private getHeadings(): mixed
```

***

### getDisplayTitle

```php
private getDisplayTitle(): mixed
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
