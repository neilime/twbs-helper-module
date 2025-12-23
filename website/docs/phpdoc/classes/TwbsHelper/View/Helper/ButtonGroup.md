---
title: "ButtonGroup"
---

ButtonGroup

***

* Full name: `\TwbsHelper\View\Helper\ButtonGroup`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Properties

### formButtonHelper

```php
protected \TwbsHelper\Form\View\Helper\FormButton|null $formButtonHelper
```

***

## Methods

### __invoke

```php
public __invoke(?array $buttons = null, ?array $buttonGroupOptions = null): \TwbsHelper\View\Helper\ButtonGroup|string
```

**Parameters:**

| Parameter             | Type       | Description |
|-----------------------|------------|-------------|
| `$buttons`            | **?array** |             |
| `$buttonGroupOptions` | **?array** |             |

***

### render

Render button groups markup

```php
public render(array $buttons, ?array $buttonGroupOptions = null): string
```

**Parameters:**

| Parameter             | Type       | Description |
|-----------------------|------------|-------------|
| `$buttons`            | **array**  |             |
| `$buttonGroupOptions` | **?array** |             |

**Throws:**

- [`LogicException`](../../../LogicException)

***

### renderButtons

Render buttons markup

```php
protected renderButtons(array $buttons, array $buttonGroupOptions): string
```

**Parameters:**

| Parameter             | Type      | Description |
|-----------------------|-----------|-------------|
| `$buttons`            | **array** |             |
| `$buttonGroupOptions` | **array** |             |

***

### renderButton

```php
protected renderButton(\Laminas\Form\ElementInterface $button): string
```

**Parameters:**

| Parameter | Type                               | Description |
|-----------|------------------------------------|-------------|
| `$button` | **\Laminas\Form\ElementInterface** |             |

***

### getFormButtonHelper

```php
public getFormButtonHelper(): \TwbsHelper\Form\View\Helper\FormButton
```

***
