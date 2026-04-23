---
title: "Toast"
---

Helper for rendering toast

***

* Full name: `\TwbsHelper\View\Helper\Toast`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Constants

| Constant                  | Visibility | Type | Value           |
|---------------------------|------------|------|-----------------|
| `PLACEMENT_TOP_LEFT`      | public     |      | 'top-left'      |
| `PLACEMENT_TOP_CENTER`    | public     |      | 'top-center'    |
| `PLACEMENT_TOP_RIGHT`     | public     |      | 'top-right'     |
| `PLACEMENT_MIDDLE_LEFT`   | public     |      | 'middle-left'   |
| `PLACEMENT_MIDDLE_CENTER` | public     |      | 'middle-center' |
| `PLACEMENT_MIDDLE_RIGHT`  | public     |      | 'middle-right'  |
| `PLACEMENT_BOTTOM_LEFT`   | public     |      | 'bottom-left'   |
| `PLACEMENT_BOTTOM_CENTER` | public     |      | 'bottom-center' |
| `PLACEMENT_BOTTOM_RIGHT`  | public     |      | 'bottom-right'  |

## Methods

### __invoke

Generates a 'toast' element

```php
public __invoke(?iterable $options = null): string|\TwbsHelper\View\Helper\Toast
```

**Parameters:**

| Parameter  | Type          | Description |
|------------|---------------|-------------|
| `$options` | **?iterable** |             |

***

### render

```php
public render(iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### renderHeader

```php
protected renderHeader(iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### renderBody

```php
protected renderBody(iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### renderBodyButtons

```php
protected renderBodyButtons(iterable $buttons): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$buttons` | **iterable** |             |

***

### renderBodyButton

```php
protected renderBodyButton(iterable $buttonSpec): string
```

**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$buttonSpec` | **iterable** |             |

***

### renderCloseButton

```php
protected renderCloseButton(iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### renderContainer

```php
protected renderContainer(string $content, iterable $options): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$content` | **string**   |             |
| `$options` | **iterable** |             |

***

### getContainerAttributes

```php
protected getContainerAttributes(iterable $options): iterable
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### getContainerClasses

```php
protected getContainerClasses(iterable $options): iterable
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### getContainerPlacementClasses

```php
public getContainerPlacementClasses(string $placement): iterable
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$placement` | **string** |             |

***

### getContainerStyles

```php
protected getContainerStyles(iterable $options): iterable
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***
