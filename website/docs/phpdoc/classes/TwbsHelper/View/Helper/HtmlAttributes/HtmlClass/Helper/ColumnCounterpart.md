---
title: "ColumnCounterpart"
---

***

* Full name: `\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\ColumnCounterpart`
* Parent class: [`\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column`](/docs/phpdoc/classes/TwbsHelper/View/Helper/HtmlAttributes/HtmlClass/Helper/Column)

## Methods

### getClassesFromOption

Get column counter part classes.

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
