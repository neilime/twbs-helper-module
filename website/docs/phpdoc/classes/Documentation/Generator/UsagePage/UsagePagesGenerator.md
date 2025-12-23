---
title: "UsagePagesGenerator"
---

***

* Full name: `\Documentation\Generator\UsagePage\UsagePagesGenerator`

## Properties

### USAGE_DIR_PATH

```php
private static $USAGE_DIR_PATH
```

* This property is **static**.

***

### configuration

```php
private \Documentation\Generator\Configuration $configuration
```

***

### testConfigs

```php
private \Documentation\Test\Config[] $testConfigs
```

***

## Methods

### __construct

```php
public __construct(\Documentation\Generator\Configuration $configuration, array $testConfigs): mixed
```

**Parameters:**

| Parameter        | Type                                       | Description |
|------------------|--------------------------------------------|-------------|
| `$configuration` | **\Documentation\Generator\Configuration** |             |
| `$testConfigs`   | **array**                                  |             |

***

### generate

```php
public generate(): mixed
```

***

### cleanUsagePages

```php
private cleanUsagePages(): mixed
```

***

### parseTestsConfig

Extract test cases values for a given tests configuration

```php
private parseTestsConfig(\Documentation\Test\Config $documentationTestConfig): mixed
```

**Parameters:**

| Parameter                  | Type                           | Description |
|----------------------------|--------------------------------|-------------|
| `$documentationTestConfig` | **\Documentation\Test\Config** |             |

***

### getUsageDirPath

```php
private getUsageDirPath(): mixed
```

***

### generateDocPageFromTest

Write the test content for the given params into the given demo page file

```php
private generateDocPageFromTest(\Documentation\Test\Config $documentationTestConfig): mixed
```

**Parameters:**

| Parameter                  | Type                           | Description |
|----------------------------|--------------------------------|-------------|
| `$documentationTestConfig` | **\Documentation\Test\Config** |             |

***
