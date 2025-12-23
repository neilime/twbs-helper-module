---
title: "Collapse"
---

Helper for Collapse

***

* Full name: `\TwbsHelper\View\Helper\Collapse`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](./AbstractHtmlElement)

## Properties

### allowedOptions

```php
protected static $allowedOptions
```

* This property is **static**.

***

## Methods

### __invoke

Render

```php
public __invoke(iterable $options, bool $escape = true): string
```

**Parameters:**

| Parameter  | Type         | Description                                |
|------------|--------------|--------------------------------------------|
| `$options` | **iterable** | Array with the options to render collapse. |
| `$escape`  | **bool**     | Escape the items.                          |

**Return Value:**

The group XHTML.

***

### prepareTriggersSpec

```php
protected prepareTriggersSpec(mixed $triggers): iterable
```

**Parameters:**

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$triggers` | **mixed** |             |

***

### prepareTriggerSpec

```php
protected prepareTriggerSpec(mixed $trigger): iterable
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$trigger` | **mixed** |             |

***

### prepareTargetsSpec

```php
protected prepareTargetsSpec(mixed $targets, bool $isShown, mixed $horizontal): iterable
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$targets`    | **mixed** |             |
| `$isShown`    | **bool**  |             |
| `$horizontal` | **mixed** |             |

***

### prepareTargetSpec

```php
protected prepareTargetSpec(mixed $target, bool $isShown, mixed $horizontal): iterable
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$target`     | **mixed** |             |
| `$isShown`    | **bool**  |             |
| `$horizontal` | **mixed** |             |

***

### renderTriggers

```php
protected renderTriggers(iterable $triggers, iterable $targets, bool $isShown, bool $escape): string
```

**Parameters:**

| Parameter   | Type         | Description |
|-------------|--------------|-------------|
| `$triggers` | **iterable** |             |
| `$targets`  | **iterable** |             |
| `$isShown`  | **bool**     |             |
| `$escape`   | **bool**     |             |

***

### getCollapseId

```php
protected getCollapseId(mixed $key, iterable $targets): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$key`     | **mixed**    |             |
| `$targets` | **iterable** |             |

***

### renderTrigger

```php
protected renderTrigger(iterable $trigger, string $collapseId, bool $isShown): string
```

**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$trigger`    | **iterable** |             |
| `$collapseId` | **string**   |             |
| `$isShown`    | **bool**     |             |

***

### renderTargets

```php
protected renderTargets(iterable $targets, bool $escape): string
```

**Parameters:**

| Parameter  | Type         | Description |
|------------|--------------|-------------|
| `$targets` | **iterable** |             |
| `$escape`  | **bool**     |             |

***

### renderTarget

```php
protected renderTarget(iterable $target, bool $escape): string
```

**Parameters:**

| Parameter | Type         | Description |
|-----------|--------------|-------------|
| `$target` | **iterable** |             |
| `$escape` | **bool**     |             |

***

### renderContainer

```php
protected renderContainer(string $content, iterable $attributes, bool $escape): string
```

**Parameters:**

| Parameter     | Type         | Description |
|---------------|--------------|-------------|
| `$content`    | **string**   |             |
| `$attributes` | **iterable** |             |
| `$escape`     | **bool**     |             |

***
