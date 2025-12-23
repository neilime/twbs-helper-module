---
title: "Variant"
---

***

* Full name: `\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant`
* Parent class: [`\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\AbstractHelper`](./AbstractHelper)

## Constants

| Constant            | Visibility | Type | Value       |
|---------------------|------------|------|-------------|
| `VARIANT_PRIMARY`   | public     |      | 'primary'   |
| `VARIANT_SECONDARY` | public     |      | 'secondary' |
| `VARIANT_SUCCESS`   | public     |      | 'success'   |
| `VARIANT_DANGER`    | public     |      | 'danger'    |
| `VARIANT_WARNING`   | public     |      | 'warning'   |
| `VARIANT_INFO`      | public     |      | 'info'      |
| `VARIANT_LIGHT`     | public     |      | 'light'     |
| `VARIANT_DARK`      | public     |      | 'dark'      |
| `VARIANT_LINK`      | public     |      | 'link'      |

## Properties

### optionName

```php
protected static $optionName
```

* This property is **static**.

***

### allowedOptions

```php
protected static $allowedOptions
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

### classesIncludeVariant

```php
public classesIncludeVariant(iterable $classes, string $prefix, string $allowedVariantPrefix): bool
```

**Parameters:**

| Parameter               | Type         | Description |
|-------------------------|--------------|-------------|
| `$classes`              | **iterable** |             |
| `$prefix`               | **string**   |             |
| `$allowedVariantPrefix` | **string**   |             |

***

### validateOption

```php
protected validateOption(mixed $option, ?string $allowedVariantPrefix = null): mixed
```

**Parameters:**

| Parameter               | Type        | Description |
|-------------------------|-------------|-------------|
| `$option`               | **mixed**   |             |
| `$allowedVariantPrefix` | **?string** |             |

***

### validateStringOption

```php
protected validateStringOption(string $option, ?string $allowedVariantPrefix = null): mixed
```

**Parameters:**

| Parameter               | Type        | Description |
|-------------------------|-------------|-------------|
| `$option`               | **string**  |             |
| `$allowedVariantPrefix` | **?string** |             |

***

### isVariantOption

```php
public isVariantOption(string $option): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$option` | **string** |             |

***

### isPrefixedVariantOption

```php
public isPrefixedVariantOption(string $option, string $allowedVariantPrefix): bool
```

**Parameters:**

| Parameter               | Type       | Description |
|-------------------------|------------|-------------|
| `$option`               | **string** |             |
| `$allowedVariantPrefix` | **string** |             |

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
