---
title: "ButtonToolbar"
---

***

* Full name: `\TwbsHelper\View\Helper\ButtonToolbar`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Properties

### buttonGroupHelper

```php
protected \TwbsHelper\View\Helper\ButtonGroup|null $buttonGroupHelper
```

***

### formRowHelper

```php
protected \TwbsHelper\Form\View\Helper\FormRow|null $formRowHelper
```

***

### htmlElementHelper

```php
protected \TwbsHelper\View\Helper\HtmlElement|null $htmlElementHelper
```

***

## Methods

### __invoke

```php
public __invoke(?array $items = null, ?array $buttonToolbarOptions = null): \TwbsHelper\View\Helper\ButtonGroup|string
```

**Parameters:**

| Parameter               | Type       | Description |
|-------------------------|------------|-------------|
| `$items`                | **?array** |             |
| `$buttonToolbarOptions` | **?array** |             |

***

### render

Render button toolbar markup

```php
public render(array $items, ?array $buttonToolbarOptions = null): string
```

**Parameters:**

| Parameter               | Type       | Description |
|-------------------------|------------|-------------|
| `$items`                | **array**  |             |
| `$buttonToolbarOptions` | **?array** |             |

**Throws:**

- `LogicException`

***

### renderToolbarItems

Render toolbar items markup

```php
protected renderToolbarItems(array $items): string
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$items`  | **array** |             |

***

### renderToolbarItem

Render toolbar item markup

```php
protected renderToolbarItem(\Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***

### renderToolbarItemSpec

Render toolbar item markup from given specifications

```php
protected renderToolbarItemSpec(array $item): string
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$item`   | **array** |             |

***

### getButtonGroupHelper

```php
public getButtonGroupHelper(): \TwbsHelper\View\Helper\ButtonGroup
```

***

### getFormRowHelper

```php
public getFormRowHelper(): \TwbsHelper\Form\View\Helper\FormRow
```

***

### getHtmlElementHelper

```php
public getHtmlElementHelper(): \TwbsHelper\View\Helper\HtmlElement
```

***
