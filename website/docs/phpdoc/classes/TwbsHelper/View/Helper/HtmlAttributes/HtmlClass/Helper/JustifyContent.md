---
title: "JustifyContent"
---

***

* Full name: `\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\JustifyContent`
* Parent class: [`\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Size`](./Size)

## Constants

| Constant                  | Visibility | Type | Value     |
|---------------------------|------------|------|-----------|
| `JUSTIFY_CONTENT_START`   | public     |      | 'start'   |
| `JUSTIFY_CONTENT_END`     | public     |      | 'end'     |
| `JUSTIFY_CONTENT_CENTER`  | public     |      | 'center'  |
| `JUSTIFY_CONTENT_BETWEEN` | public     |      | 'between' |
| `JUSTIFY_CONTENT_AROUND`  | public     |      | 'around'  |
| `JUSTIFY_CONTENT_EVENLY`  | public     |      | 'evenly'  |

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

### allowedJustifyContentOptions

```php
protected static $allowedJustifyContentOptions
```

* This property is **static**.

***

## Methods

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

### validateStringOption

```php
protected validateStringOption(string $option): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$option` | **string** |             |

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
