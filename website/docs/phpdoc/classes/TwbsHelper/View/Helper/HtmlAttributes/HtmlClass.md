---
title: "HtmlClass"
---

Helper for rendering abbreviations

***

* Full name: `\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass`
* Parent class: `AbstractHelper`

## Properties

### helperPluginManager

Helper plugin manager

```php
protected \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager $helperPluginManager
```

***

### classSeparator

```php
protected $classSeparator
```

***

## Methods

### getPrefixedClass

```php
public getPrefixedClass(string $class, string $prefix): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$class`  | **string** |             |
| `$prefix` | **string** |             |

***

### trimClassPrefix

```php
public trimClassPrefix(string $class, string $prefix): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$class`  | **string** |             |
| `$prefix` | **string** |             |

***

### getSuffixedClass

```php
public getSuffixedClass(string $class, string $suffix): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$class`  | **string** |             |
| `$suffix` | **string** |             |

***

### setHelperPluginManager

Set helper plugin manager instance

```php
public setHelperPluginManager(string|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager $helperPluginManager): \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
```

**Parameters:**

| Parameter              | Type                                                                             | Description |
|------------------------|----------------------------------------------------------------------------------|-------------|
| `$helperPluginManager` | **string\|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager** |             |

**Throws:**

- `InvalidArgumentException`

***

### getHelperPluginManager

Get helper plugin manager instance

```php
public getHelperPluginManager(): \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager
```

***

### plugin

Get plugin instance

```php
public plugin(string $name, null|array $options = null): \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface
```

**Parameters:**

| Parameter  | Type            | Description                                                         |
|------------|-----------------|---------------------------------------------------------------------|
| `$name`    | **string**      | Name of plugin to return                                            |
| `$options` | **null\|array** | Options to pass to plugin constructor (if not already instantiated) |

***
