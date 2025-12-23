---
title: "HtmlAttributesSet"
---

Class for storing and processing HTML tag attributes.

***

* Full name: `\TwbsHelper\View\HtmlAttributesSet`
* Parent class: [`\TwbsHelper\View\OriginalHtmlAttributesSet`](./OriginalHtmlAttributesSet)

## Properties

### attributeWithSet

```php
protected static $attributeWithSet
```

* This property is **static**.

***

## Methods

### __construct

Constructor.

```php
public __construct(\Laminas\Escaper\Escaper $htmlEscaper, iterable $attributes = []): mixed
```

**Parameters:**

| Parameter      | Type                         | Description          |
|----------------|------------------------------|----------------------|
| `$htmlEscaper` | **\Laminas\Escaper\Escaper** | General HTML escaper |
| `$attributes`  | **iterable**                 | Attributes to manage |

***

### offsetGet

```php
public offsetGet(mixed $key): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$key`    | **mixed** |             |

***

### offsetsUnset

```php
public offsetsUnset(iterable $keys): self
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$keys`   | **iterable** |             |

***

### offsetUnset

```php
public offsetUnset(mixed $key): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$key`    | **mixed** |             |

***

### merge

Merge attributes with existing attributes.

```php
public merge(\TwbsHelper\View\AttributeSet|\TwbsHelper\View\HtmlAttributesSet $attributes): self
```

**Parameters:**

| Parameter     | Type                                                                  | Description |
|---------------|-----------------------------------------------------------------------|-------------|
| `$attributes` | **\TwbsHelper\View\AttributeSet\|\TwbsHelper\View\HtmlAttributesSet** |             |

***

### getArrayCopy

```php
public getArrayCopy(): array
```

***

### __toString

Return a string of tag attributes.

```php
public __toString(): string
```

***

### cleanAttributes

```php
protected cleanAttributes(): self
```

***

## Inherited methods

### __construct

```php
public __construct(\Laminas\Escaper\Escaper $escaper, iterable $attributes = []): mixed
```

**Parameters:**

| Parameter     | Type                         | Description |
|---------------|------------------------------|-------------|
| `$escaper`    | **\Laminas\Escaper\Escaper** |             |
| `$attributes` | **iterable**                 |             |

***

### set

Set several attributes at once.

```php
public set(\TwbsHelper\View\AttributeSet $attributes): self
```

**Parameters:**

| Parameter     | Type                              | Description |
|---------------|-----------------------------------|-------------|
| `$attributes` | **\TwbsHelper\View\AttributeSet** |             |

***

### add

Add a value to an attribute.

```php
public add(string $name, scalar|array|null $value): self
```

Sets the attribute if it does not exist.

**Parameters:**

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$name`   | **string**              |             |
| `$value`  | **scalar\|array\|null** |             |

***

### merge

Merge attributes with existing attributes.

```php
public merge(\TwbsHelper\View\AttributeSet $attributes): self
```

**Parameters:**

| Parameter     | Type                              | Description |
|---------------|-----------------------------------|-------------|
| `$attributes` | **\TwbsHelper\View\AttributeSet** |             |

***

### hasValue

Whether the named attribute equals or contains the given value

```php
public hasValue(string $name, scalar|array|null $value): bool
```

**Parameters:**

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$name`   | **string**              |             |
| `$value`  | **scalar\|array\|null** |             |

***

### __toString

Return a string of tag attributes.

```php
public __toString(): string
```

***
