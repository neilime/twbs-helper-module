---
title: "PhpPrettifier"
---

***

* Full name: `\Documentation\Generator\UsagePage\Prettifier\PhpPrettifier`

## Properties

### CONFIGURATION_FILE

```php
private static $CONFIGURATION_FILE
```

* This property is **static**.

***

### instance

```php
private static $instance
```

* This property is **static**.

***

### file

```php
private \Documentation\Generator\FileSystem\File $file
```

***

### application

```php
private \PhpCsFixer\Console\Application $application
```

***

### configurationPath

```php
private $configurationPath
```

***

## Methods

### __construct

```php
private __construct(\Documentation\Generator\Configuration $configuration): mixed
```

**Parameters:**

| Parameter        | Type                                       | Description |
|------------------|--------------------------------------------|-------------|
| `$configuration` | **\Documentation\Generator\Configuration** |             |

***

### getInstance

gets the instance via lazy initialization (created on first usage)

```php
public static getInstance(\Documentation\Generator\Configuration $configuration): \Documentation\Generator\UsagePage\Prettifier\PhpPrettifier
```

* This method is **static**.
**Parameters:**

| Parameter        | Type                                       | Description |
|------------------|--------------------------------------------|-------------|
| `$configuration` | **\Documentation\Generator\Configuration** |             |

***

### prettify

```php
public prettify(mixed $source): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$source` | **mixed** |             |

***

### executePhpCsFixer

```php
private executePhpCsFixer(mixed $tmpFile): mixed
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$tmpFile` | **mixed** |             |

***
