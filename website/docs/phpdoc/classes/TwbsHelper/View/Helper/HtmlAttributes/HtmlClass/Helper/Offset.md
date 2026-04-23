---
title: "Offset"
---

***

* Full name: `\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Offset`
* Parent class: [`\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Size`](/docs/phpdoc/classes/TwbsHelper/View/Helper/HtmlAttributes/HtmlClass/Helper/Size)

## Properties

### optionName

```php
protected static $optionName
```

* This property is **static**.

***

### prefix

```php
protected static $prefix
```

* This property is **static**.

***

## Methods

### getClassesFromOption

Get prefixed offset classes.

```php
public getClassesFromOption(mixed $options): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$options` | **mixed** |             |

**Return Value:**

the list of expected classes

***

### getOffsetClass

Get prefixed offset class.

```php
protected getOffsetClass(string|int $offset, string $prefix): string
```

**Parameters:**

| Parameter | Type            | Description                                                                                                                                                         |
|-----------|-----------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$offset` | **string\|int** | offset option to be transformed into prefexed class. Allowed values:
"auto"
all allowed sizes (sm, md,...)
int/"auto" prefixed by allowed sizes (sm-9, md-auto,...) |
| `$prefix` | **string**      |                                                                                                                                                                     |

***

### validateOption

```php
protected validateOption(mixed $option): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$option` | **mixed** |             |

***

### validateStringOption

```php
protected validateStringOption(string $option): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$option` | **string** |             |

***

### isOffsetOption

```php
public isOffsetOption(string $option): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$option` | **string** |             |

***

### validateIterableOption

```php
protected validateIterableOption(iterable $option): mixed
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$option` | **iterable** |             |

***

## Inherited methods

### setHtmlClassHelper

Set htmlclasshelper

```php
public setHtmlClassHelper(\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlclasshelper): \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\AbstractHelper
```

**Parameters:**

| Parameter          | Type                                                 | Description |
|--------------------|------------------------------------------------------|-------------|
| `$htmlclasshelper` | **\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass** |             |

***

### getHtmlClassHelper

Retrieve HtmlClass helper instance

```php
public getHtmlClassHelper(): null|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
```

***

### getClassesFromOption

Retrieve the expected html classes releated to the given option

```php
public getClassesFromOption(mixed $options): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$options` | **mixed** |             |

**Return Value:**

the list of expected classes

***

### validateOption

```php
protected validateOption(mixed $option): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$option` | **mixed** |             |

***

### validateStringOption

```php
protected validateStringOption(string $option): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$option` | **string** |             |

***
