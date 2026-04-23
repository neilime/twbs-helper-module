---
title: "Dropdown"
---

***

* Full name: `\TwbsHelper\View\Helper\Dropdown`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Constants

| Constant            | Visibility | Type   | Value    |
|---------------------|------------|--------|----------|
| `TYPE_ITEM_HEADER`  | public     | string | 'header' |
| `TYPE_ITEM_DIVIDER` | public     | string | '---'    |
| `TYPE_ITEM_LINK`    | public     | string | 'link'   |
| `TYPE_ITEM_BUTTON`  | public     | string | 'button' |
| `TYPE_ITEM_TEXT`    | public     | string | 'text'   |
| `TYPE_ITEM_HTML`    | public     | string | 'html'   |

## Properties

### dropdownItemTags

```php
protected static array $dropdownItemTags
```

* This property is **static**.

***

### directions

```php
protected static array $directions
```

* This property is **static**.

***

## Methods

### __invoke

```php
public __invoke(\Laminas\Form\ElementInterface|array $dropdown = null, bool $escape = true): \TwbsHelper\View\Helper\Dropdown|string
```

**Parameters:**

| Parameter   | Type                                      | Description          |
|-------------|-------------------------------------------|----------------------|
| `$dropdown` | **\Laminas\Form\ElementInterface\|array** |                      |
| `$escape`   | **bool**                                  | Escape the dropdown. |

***

### render

Render dropdown markup

```php
public render(\Laminas\Form\ElementInterface|iterable $dropdown, bool $escape = true): string
```

**Parameters:**

| Parameter   | Type                                         | Description          |
|-------------|----------------------------------------------|----------------------|
| `$dropdown` | **\Laminas\Form\ElementInterface\|iterable** |                      |
| `$escape`   | **bool**                                     | Escape the dropdown. |

***

### createDropdown

```php
protected createDropdown(\Laminas\Form\ElementInterface|iterable $dropdown): \Laminas\Form\ElementInterface
```

**Parameters:**

| Parameter   | Type                                         | Description |
|-------------|----------------------------------------------|-------------|
| `$dropdown` | **\Laminas\Form\ElementInterface\|iterable** |             |

***

### renderContainer

```php
protected renderContainer(array $dropdownOptions, string $dropdownContent): string
```

**Parameters:**

| Parameter          | Type       | Description |
|--------------------|------------|-------------|
| `$dropdownOptions` | **array**  |             |
| `$dropdownContent` | **string** |             |

***

### renderToggle

Render dropdown toggle markup

```php
protected renderToggle(\Laminas\Form\ElementInterface $dropdown): string
```

**Parameters:**

| Parameter   | Type                               | Description |
|-------------|------------------------------------|-------------|
| `$dropdown` | **\Laminas\Form\ElementInterface** |             |

**Throws:**

- `InvalidArgumentException`

***

### getToggleSplitElement

Retrieve dropdown toggle split element

```php
protected getToggleSplitElement(\Laminas\Form\ElementInterface $dropdown): \Laminas\Form\ElementInterface|null
```

**Parameters:**

| Parameter   | Type                               | Description |
|-------------|------------------------------------|-------------|
| `$dropdown` | **\Laminas\Form\ElementInterface** |             |

**Throws:**

- `InvalidArgumentException`

***

### renderMenuFromElement

```php
protected renderMenuFromElement(\Laminas\Form\ElementInterface $dropdown, bool $escape = true): mixed
```

**Parameters:**

| Parameter   | Type                               | Description |
|-------------|------------------------------------|-------------|
| `$dropdown` | **\Laminas\Form\ElementInterface** |             |
| `$escape`   | **bool**                           |             |

***

### prepareMenuAttributes

```php
protected prepareMenuAttributes(\Laminas\Form\ElementInterface $dropdown): \TwbsHelper\View\HtmlAttributesSet
```

**Parameters:**

| Parameter   | Type                               | Description |
|-------------|------------------------------------|-------------|
| `$dropdown` | **\Laminas\Form\ElementInterface** |             |

***

### getDropdownId

```php
protected getDropdownId(\Laminas\Form\ElementInterface $dropdown): ?string
```

**Parameters:**

| Parameter   | Type                               | Description |
|-------------|------------------------------------|-------------|
| `$dropdown` | **\Laminas\Form\ElementInterface** |             |

***

### renderMenu

Render dropdown menu markup

```php
public renderMenu(iterable $items, iterable $attributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter     | Type         | Description               |
|---------------|--------------|---------------------------|
| `$items`      | **iterable** | Dropdown menu items       |
| `$attributes` | **iterable** | Dropdown menu attributes  |
| `$escape`     | **bool**     | Escape the dropdown menu. |

**Throws:**

- `InvalidArgumentException`

***

### renderItem

Render dropdown list item markup

```php
protected renderItem(array $itemOptions, bool $escape): string
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$itemOptions` | **array** |             |
| `$escape`      | **bool**  |             |

**Throws:**

- `InvalidArgumentException`

***

### getLabelFromItemOptions

```php
protected getLabelFromItemOptions(iterable $itemOptions): mixed
```

**Parameters:**

| Parameter      | Type         | Description |
|----------------|--------------|-------------|
| `$itemOptions` | **iterable** |             |

***
