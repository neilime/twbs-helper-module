---
title: "FormRows"
---

***

* Full name: `\TwbsHelper\Form\View\Helper\FormRows`
* Parent class: [`AbstractHelper`](../../../../Laminas/Form/View/Helper/AbstractHelper)

## Properties

### formCollectionHelper

```php
protected null|\TwbsHelper\Form\View\Helper\FormCollection $formCollectionHelper
```

***

### formRowHelper

```php
protected null|\TwbsHelper\Form\View\Helper\FormRow $formRowHelper
```

***

### htmlElementHelper

```php
protected null|\TwbsHelper\View\Helper\HtmlElement $htmlElementHelper
```

***

### htmlAttributesHelper

```php
protected null|\TwbsHelper\View\Helper\HtmlAttributes $htmlAttributesHelper
```

***

### htmlClassHelper

```php
protected null|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlClassHelper
```

***

### buttonGroupHelper

```php
protected null|\TwbsHelper\View\Helper\ButtonGroup $buttonGroupHelper
```

***

## Methods

### __invoke

```php
public __invoke(\Laminas\Form\FormInterface $form = null): \TwbsHelper\Form\View\Helper\FormRows|string
```

**Parameters:**

| Parameter | Type                            | Description |
|-----------|---------------------------------|-------------|
| `$form`   | **\Laminas\Form\FormInterface** |             |

***

### renderFormRows

```php
protected renderFormRows(\Laminas\Form\FormInterface $form): string
```

**Parameters:**

| Parameter | Type                            | Description |
|-----------|---------------------------------|-------------|
| `$form`   | **\Laminas\Form\FormInterface** |             |

***

### renderElement

Retrieve element rendering

```php
protected renderElement(\Laminas\Form\ElementInterface $element, array $rowsRendering, array $rowOptions): array
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$rowsRendering` | **array**                          |             |
| `$rowOptions`    | **array**                          |             |

***

### getElementRowRendering

```php
protected getElementRowRendering(\Laminas\Form\ElementInterface $element, array $rowOptions): array
```

**Parameters:**

| Parameter     | Type                               | Description |
|---------------|------------------------------------|-------------|
| `$element`    | **\Laminas\Form\ElementInterface** |             |
| `$rowOptions` | **array**                          |             |

***

### renderButtonGroup

Retrieve button group element rendering

```php
protected renderButtonGroup(\Laminas\Form\ElementInterface $button, array $rowsRendering, array $rowOptions): array
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$button`        | **\Laminas\Form\ElementInterface** |             |
| `$rowsRendering` | **array**                          |             |
| `$rowOptions`    | **array**                          |             |

***

### generateRowRenderingKey

Generate

```php
private generateRowRenderingKey(\Laminas\Form\ElementInterface $element, array $rowsRendering): string
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$rowsRendering` | **array**                          |             |

***

### incrementRowRenderingKeyPrefix

```php
private incrementRowRenderingKeyPrefix(string $key): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$key`    | **string** |             |

***

### getFormCollectionHelper

Retrieve the formCollection helper

```php
protected getFormCollectionHelper(): \TwbsHelper\Form\View\Helper\FormCollection
```

***

### getFormRowHelper

Retrieve the formRow helper

```php
protected getFormRowHelper(): \TwbsHelper\Form\View\Helper\FormRow
```

***

### getHtmlElementHelper

Retrieve the htmlElement helper

```php
protected getHtmlElementHelper(): mixed
```

***

### getHtmlattributesHelper

Retrieve the htmlattributes helper

```php
protected getHtmlattributesHelper(): mixed
```

***

### getHtmlClassHelper

Retrieve the htmlclass helper

```php
protected getHtmlClassHelper(): mixed
```

***

### getButtonGroupHelper

Retrieve the buttongroup helper

```php
protected getButtonGroupHelper(): mixed
```

***

## Inherited methods

### prepareAttributes

```php
protected prepareAttributes(array $attributes): array
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$attributes` | **array** |             |

***

### setClassesToElement

```php
protected setClassesToElement(\Laminas\Form\ElementInterface $element, iterable $addClasses = [], iterable $removeClasses = []): \Laminas\Form\ElementInterface
```

**Parameters:**

| Parameter        | Type                               | Description |
|------------------|------------------------------------|-------------|
| `$element`       | **\Laminas\Form\ElementInterface** |             |
| `$addClasses`    | **iterable**                       |             |
| `$removeClasses` | **iterable**                       |             |

***
