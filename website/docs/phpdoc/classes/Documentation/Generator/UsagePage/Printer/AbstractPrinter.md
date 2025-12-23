---
title: "AbstractPrinter"
---

***

* Full name: `\Documentation\Generator\UsagePage\Printer\AbstractPrinter`
* This class is an **Abstract class**

## Properties

### configuration

```php
protected \Documentation\Generator\Configuration $configuration
```

***

### testConfig

```php
protected \Documentation\Test\Config $testConfig
```

***

### pagePath

```php
protected string $pagePath
```

***

### pageExists

```php
protected bool $pageExists
```

***

## Methods

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
