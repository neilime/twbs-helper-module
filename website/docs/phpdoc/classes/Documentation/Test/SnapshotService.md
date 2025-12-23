---
title: "SnapshotService"
---

***

* Full name: `\Documentation\Test\SnapshotService`

## Properties

### SNAPSHOT_ROOT_DIRECTORY

```php
private static $SNAPSHOT_ROOT_DIRECTORY
```

* This property is **static**.

***

### testsDirectoryPath

```php
private string $testsDirectoryPath
```

***

## Methods

### __construct

```php
public __construct(string $testsDirectoryPath): mixed
```

**Parameters:**

| Parameter             | Type       | Description |
|-----------------------|------------|-------------|
| `$testsDirectoryPath` | **string** |             |

***

### getSnapshotIdFromTitle

```php
public getSnapshotIdFromTitle(string $title, mixed $incrementor = 1): string
```

**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$title`       | **string** |             |
| `$incrementor` | **mixed**  |             |

***

### getSnapshotPathFromTitle

```php
public getSnapshotPathFromTitle(string $title, mixed $incrementor = 1): string
```

**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$title`       | **string** |             |
| `$incrementor` | **mixed**  |             |

***
