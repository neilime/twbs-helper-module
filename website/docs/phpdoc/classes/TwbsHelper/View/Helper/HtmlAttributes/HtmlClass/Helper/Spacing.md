---
title: "Spacing"
---

***

* Full name: `\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Spacing`
* Parent class: [`\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\AbstractHelper`](/docs/phpdoc/classes/TwbsHelper/View/Helper/HtmlAttributes/HtmlClass/Helper/AbstractHelper)

## Constants

| Constant           | Visibility | Type | Value  |
|--------------------|------------|------|--------|
| `PROPERTY_MARGIN`  | public     |      | 'm'    |
| `PROPERTY_PADDING` | public     |      | 'p'    |
| `SIDE_TOP`         | public     |      | 't'    |
| `SIDE_BOTTOM`      | public     |      | 'b'    |
| `SIDE_LEFT`        | public     |      | 'l'    |
| `SIDE_RIGHT`       | public     |      | 'r'    |
| `SIDE_X`           | public     |      | 'x'    |
| `SIDE_Y`           | public     |      | 'y'    |
| `SIDE_ALL`         | public     |      | ''     |
| `SIZE_AUTO`        | public     |      | 'auto' |

## Properties

### optionName

```php
protected static $optionName
```

* This property is **static**.

***

### allowedProperties

```php
protected static $allowedProperties
```

* This property is **static**.

***

### allowedSides

```php
protected static $allowedSides
```

* This property is **static**.

***

### allowedSizes

```php
protected static $allowedSizes
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

### isSpacingClass

```php
protected isSpacingClass(string $testClass): bool
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$testClass` | **string** |             |

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
