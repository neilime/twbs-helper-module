---
title: "Navbar"
---

Helper for rendering navbar

***

* Full name: `\TwbsHelper\View\Helper\Navigation\Navbar`
* Parent class: [`AbstractHelper`](../../../../Laminas/View/Helper/Navigation/AbstractHelper)

## Constants

| Constant                | Visibility | Type | Value    |
|-------------------------|------------|------|----------|
| `BRAND_POSITION_LEFT`   | public     |      | 'left'   |
| `BRAND_POSITION_RIGHT`  | public     |      | 'right'  |
| `BRAND_POSITION_HIDDEN` | public     |      | 'hidden' |

## Methods

### __invoke

View helper entry point.

```php
public __invoke(\Laminas\Navigation\AbstractContainer $container = null): self|string
```

Retrieves helper and optionally sets container to operate on.

**Parameters:**

| Parameter    | Type                                      | Description                        |
|--------------|-------------------------------------------|------------------------------------|
| `$container` | **\Laminas\Navigation\AbstractContainer** | [optional] container to operate on |

***

### render

Renders navbar.

```php
public render(\Laminas\Navigation\AbstractContainer $container = null, array $options = []): string
```

Implements 

- **See:** .

**Parameters:**

| Parameter    | Type                                      | Description                                                                                  |
|--------------|-------------------------------------------|----------------------------------------------------------------------------------------------|
| `$container` | **\Laminas\Navigation\AbstractContainer** | [optional] container to render. Default is
to render the container registered in the helper. |
| `$options`   | **array**                                 | [optional] options for controlling rendering                                                 |

**See Also:**

* \TwbsHelper\View\Helper\Navigation\renderNavbar()

***

### renderNavbar

Renders helper.

```php
public renderNavbar(\Laminas\Navigation\AbstractContainer $container = null, array $options = []): string
```

Renders a HTML 'ul' for the given $container. If $container is not given,
the container registered in the helper will be used.

Available $options:

**Parameters:**

| Parameter    | Type                                      | Description                                                                                                      |
|--------------|-------------------------------------------|------------------------------------------------------------------------------------------------------------------|
| `$container` | **\Laminas\Navigation\AbstractContainer** | [optional] container to create menu from.
Default is to use the container retrieved from &#123;@link getContainer()&#125;. |
| `$options`   | **array**                                 | [optional] options for controlling rendering                                                                     |

***

### prepareAttributes

```php
protected prepareAttributes(iterable $options): \TwbsHelper\View\HtmlAttributesSet
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |

***

### renderToggler

```php
public renderToggler(iterable $options, ?string $id = null): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$options` | **iterable** |             |
| `$id`      | **?string**  |             |

***

### renderBrand

```php
public renderBrand(mixed $brandOptions): string
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$brandOptions` | **mixed** |             |

***

### renderText

```php
public renderText(mixed $textOptions): string
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$textOptions` | **mixed** |             |

***

### renderNavbarNav

```php
public renderNavbarNav(string $content, \Laminas\Navigation\AbstractContainer $container, iterable $options, ?string $id = null, ?string $brandContent = null): string
```

**Parameters:**

| Parameter       | Type                                      | Description |
|-----------------|-------------------------------------------|-------------|
| `$content`      | **string**                                |             |
| `$container`    | **\Laminas\Navigation\AbstractContainer** |             |
| `$options`      | **iterable**                              |             |
| `$id`           | **?string**                               |             |
| `$brandContent` | **?string**                               |             |

***

### renderNav

```php
public renderNav(\Laminas\Navigation\AbstractContainer $container, array $navOptions = []): string
```

**Parameters:**

| Parameter     | Type                                      | Description |
|---------------|-------------------------------------------|-------------|
| `$container`  | **\Laminas\Navigation\AbstractContainer** |             |
| `$navOptions` | **array**                                 |             |

***

### renderOffcanvas

```php
public renderOffcanvas(string $content, iterable $options, ?string $id = null): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$content` | **string**   |             |
| `$options` | **iterable** |             |
| `$id`      | **?string**  |             |

***

### renderCollapse

```php
public renderCollapse(string $content, ?string $id = null): string
```

**Parameters:**

| Parameter  | Type        | Description |
|------------|-------------|-------------|
| `$content` | **string**  |             |
| `$id`      | **?string** |             |

***

### renderForm

```php
public renderForm(mixed $form): string
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$form`   | **mixed** |             |

***

### renderContainer

```php
protected renderContainer(string $content, mixed $containerOption): string
```

**Parameters:**

| Parameter          | Type       | Description |
|--------------------|------------|-------------|
| `$content`         | **string** |             |
| `$containerOption` | **mixed**  |             |

***

### normalizeId

Normalize an ID

```php
protected normalizeId(string $value): string
```

Overrides 

- **See:** .

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$value`  | **string** |             |

***
