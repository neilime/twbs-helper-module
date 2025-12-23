---
title: "UsagePageFileGenerator"
---

***

* Full name: `\Documentation\Generator\UsagePage\UsagePageFileGenerator`

## Properties

### USAGE_PAGE_DIRECTORY_TEMPLATE

```php
private static $USAGE_PAGE_DIRECTORY_TEMPLATE
```

* This property is **static**.

***

### USAGE_DIR_PATH

```php
private static $USAGE_DIR_PATH
```

* This property is **static**.

***

### pagePathInfo

```php
private \Documentation\Generator\UsagePage\PagePathInfo $pagePathInfo
```

***

### configuration

```php
private \Documentation\Generator\Configuration $configuration
```

***

### documentationTestConfig

```php
private \Documentation\Test\Config $documentationTestConfig
```

***

## Methods

### __construct

```php
public __construct(\Documentation\Generator\Configuration $configuration, \Documentation\Test\Config $documentationTestConfig): mixed
```

**Parameters:**

| Parameter                  | Type                                       | Description |
|----------------------------|--------------------------------------------|-------------|
| `$configuration`           | **\Documentation\Generator\Configuration** |             |
| `$documentationTestConfig` | **\Documentation\Test\Config**             |             |

***

### generate

```php
public generate(string $content): mixed
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$content` | **string** |             |

***

### getPagePathInfo

```php
public getPagePathInfo(): \Documentation\Generator\UsagePage\PagePathInfo
```

***

### generatePagePathInfo

```php
private generatePagePathInfo(): mixed
```

***

### getUsageDirPath

```php
private getUsageDirPath(): mixed
```

***

### sanitizePath

```php
private sanitizePath(mixed $path): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$path`   | **mixed** |             |

***

### generateCategoryFile

```php
private generateCategoryFile(): mixed
```

***
