---
title: "Placeholder"
---

Helper for rendering placeholders

***

* Full name: `\TwbsHelper\View\Helper\Placeholder`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Constants

| Constant         | Visibility | Type | Value  |
|------------------|------------|------|--------|
| `ANIMATION_GLOW` | public     |      | 'glow' |
| `ANIMATION_WAVE` | public     |      | 'wave' |

## Properties

### allowedAnimations

```php
protected static $allowedAnimations
```

* This property is **static**.

***

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

### formButtonHelper

```php
protected \TwbsHelper\Form\View\Helper\FormButton|null $formButtonHelper
```

***

## Methods

### __invoke

Generates a 'placeholder' element

```php
public __invoke(int|iterable $optionsAndAttributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter               | Type              | Description                                         |
|-------------------------|-------------------|-----------------------------------------------------|
| `$optionsAndAttributes` | **int\|iterable** | options and Html attributes of the "&lt;span&gt;" element |
| `$escape`               | **bool**          | True espace html content '$content'. Default True   |

**Return Value:**

The placeholder XHTML.

**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException)

***

### renderPlaceholder

```php
protected renderPlaceholder(mixed $optionsAndAttributes, bool $escape): string
```

**Parameters:**

| Parameter               | Type      | Description |
|-------------------------|-----------|-------------|
| `$optionsAndAttributes` | **mixed** |             |
| `$escape`               | **bool**  |             |

***

### prepareAttributes

```php
protected prepareAttributes(mixed $optionsAndAttributes): \TwbsHelper\View\HtmlAttributesSet
```

**Parameters:**

| Parameter               | Type      | Description |
|-------------------------|-----------|-------------|
| `$optionsAndAttributes` | **mixed** |             |

***

### prepareAttributesForColumn

```php
protected prepareAttributesForColumn(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes): mixed
```

**Parameters:**

| Parameter               | Type                                   | Description |
|-------------------------|----------------------------------------|-------------|
| `$optionsAndAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |

***

### prepareAttributesForSize

```php
protected prepareAttributesForSize(\TwbsHelper\View\HtmlAttributesSet $optionsAndAttributes): mixed
```

**Parameters:**

| Parameter               | Type                                   | Description |
|-------------------------|----------------------------------------|-------------|
| `$optionsAndAttributes` | **\TwbsHelper\View\HtmlAttributesSet** |             |

***

### renderButton

```php
protected renderButton(mixed $optionsAndAttributes): string
```

**Parameters:**

| Parameter               | Type      | Description |
|-------------------------|-----------|-------------|
| `$optionsAndAttributes` | **mixed** |             |

***

### prepareAttributesForButton

```php
protected prepareAttributesForButton(mixed $optionsAndAttributes): \TwbsHelper\View\HtmlAttributesSet
```

**Parameters:**

| Parameter               | Type      | Description |
|-------------------------|-----------|-------------|
| `$optionsAndAttributes` | **mixed** |             |

***

### getAnimationClass

```php
protected getAnimationClass(string $animation): string
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$animation` | **string** |             |

***

### getFormButtonHelper

```php
public getFormButtonHelper(): \TwbsHelper\Form\View\Helper\FormButton
```

***
