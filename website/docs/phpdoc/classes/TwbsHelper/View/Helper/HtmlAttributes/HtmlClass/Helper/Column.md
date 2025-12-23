---
title: "Column"
---

***

* Full name: `\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column`
* Parent class: [`\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Size`](./Size)

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

Get prefixed column classes.

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

### classesIncludeColumn

```php
public classesIncludeColumn(iterable $classes): bool
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$classes` | **iterable** |             |

***

### getColumnClass

Get prefixed column class.

```php
protected getColumnClass(string|int $column, string $prefix): string
```

**Parameters:**

| Parameter | Type            | Description                                                                                                                                                                       |
|-----------|-----------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$column` | **string\|int** | column option to be transformed into prefexed class. Allowed values:
"auto"
int from 1-12
all allowed sizes (sm, md,...)
int/"auto" prefixed by allowed sizes (sm-9, md-auto,...) |
| `$prefix` | **string**      |                                                                                                                                                                                   |

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

### isColumnOption

```php
protected isColumnOption(string $option): bool
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
