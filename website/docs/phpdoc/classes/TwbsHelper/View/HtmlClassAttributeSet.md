---
title: "HtmlClassAttributeSet"
---

Class for storing and processing HTML class attribute.

***

* Full name: `\TwbsHelper\View\HtmlClassAttributeSet`
* Parent class: `ArrayObject`
* This class implements:
  `Stringable`

## Constants

| Constant         | Visibility | Type | Value   |
|------------------|------------|------|---------|
| `ATTRIBUTE_NAME` | public     |      | 'class' |

## Methods

### __construct

Constructor.

```php
public __construct(string|iterable<string> $classes = []): mixed
```

**Parameters:**

| Parameter  | Type                         | Description                                                                                                                                                         |
|------------|------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$classes` | **string\|iterable&lt;string&gt;** | 
If a string is provided, it should be a space-separated list of classes (e.g., "class1 class2 class3").
If an iterable is provided, it should contain class names. |

***

### merge

Merge attributes with existing attributes.

```php
public merge(iterable<string> $classes): self
```

**Parameters:**

| Parameter  | Type                 | Description |
|------------|----------------------|-------------|
| `$classes` | **iterable&lt;string&gt;** |             |

***

### remove

```php
public remove(string $classToRemove): ?string
```

**Parameters:**

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$classToRemove` | **string** |             |

***

### __toString

Return a string of tag attributes.

```php
public __toString(): string
```

***

### cleanAttribute

```php
public cleanAttribute(): self
```

***
