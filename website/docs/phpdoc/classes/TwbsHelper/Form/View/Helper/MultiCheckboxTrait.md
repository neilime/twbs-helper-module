---
title: "MultiCheckboxTrait"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\MultiCheckboxTrait`

## Properties

### TMP_SEPARATOR

```php
private static $TMP_SEPARATOR
```

* This property is **static**.

***

## Methods

### render

Render a form &lt;input type="radio"&gt; element from the provided $element

```php
public render(\Laminas\Form\ElementInterface $element): string
```

**Parameters:**

| Parameter  | Type                               | Description |
|------------|------------------------------------|-------------|
| `$element` | **\Laminas\Form\ElementInterface** |             |

***
### prepareElement

```php
protected prepareElement(\Laminas\Form\Element\MultiCheckbox $multiCheckbox): mixed
```

**Parameters:**

| Parameter        | Type                                    | Description |
|------------------|-----------------------------------------|-------------|
| `$multiCheckbox` | **\Laminas\Form\Element\MultiCheckbox** |             |

***
### prepareValueOptions

```php
protected prepareValueOptions(\Laminas\Form\Element\MultiCheckbox $multiCheckbox): mixed
```

**Parameters:**

| Parameter        | Type                                    | Description |
|------------------|-----------------------------------------|-------------|
| `$multiCheckbox` | **\Laminas\Form\Element\MultiCheckbox** |             |

***
### getValueOptionLabelClasses

```php
protected getValueOptionLabelClasses(\Laminas\Form\Element\MultiCheckbox $multiCheckbox, iterable $valueOption): array
```

**Parameters:**

| Parameter        | Type                                    | Description |
|------------------|-----------------------------------------|-------------|
| `$multiCheckbox` | **\Laminas\Form\Element\MultiCheckbox** |             |
| `$valueOption`   | **iterable**                            |             |

***
### renderElementOption

```php
protected renderElementOption(\Laminas\Form\ElementInterface $element, string $optionContent): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$optionContent` | **string**                         |             |

***
