---
title: "Table"
---

Helper for rendering tables

***

* Full name: `\TwbsHelper\View\Helper\Table`
* Parent class: [`\TwbsHelper\View\Helper\AbstractHtmlElement`](/docs/phpdoc/classes/TwbsHelper/View/Helper/AbstractHtmlElement)

## Constants

| Constant       | Visibility | Type   | Value   |
|----------------|------------|--------|---------|
| `TABLE_HEAD`   | public     | string | 'thead' |
| `TABLE_BODY`   | public     | string | 'tbody' |
| `TABLE_FOOTER` | public     |        | 'tfoot' |
| `TABLE_ROW`    | public     |        | 'tr'    |
| `TABLE_H`      | public     | string | 'th'    |
| `TABLE_DATA`   | public     | string | 'td'    |

## Properties

### allowedAlignments

```php
protected static $allowedAlignments
```

* This property is **static**.

***

## Methods

### __invoke

Generates a 'table' element

```php
public __invoke(array $rows, array $attributes = [], bool $escape = true): string
```

**Parameters:**

| Parameter     | Type      | Description                                               |
|---------------|-----------|-----------------------------------------------------------|
| `$rows`       | **array** | table rows                                                |
| `$attributes` | **array** | html attributes of the "&lt;table&gt;" element.
Default : empty |
| `$escape`     | **bool**  | true espace html content of cells. Default True           |

**Return Value:**

The table XHTML.

**Throws:**

- `InvalidArgumentException`

***

### renderTableRows

Generate table rows elements

```php
protected renderTableRows(array $rows, bool $escape = true): string
```

**Parameters:**

| Parameter | Type      | Description                                     |
|-----------|-----------|-------------------------------------------------|
| `$rows`   | **array** | the array of rows.                              |
| `$escape` | **bool**  | true espace html content of cells. Default True |

**Return Value:**

The rows XHTML.

**Throws:**

- `InvalidArgumentException`

***

### renderTableCation

```php
protected renderTableCation(mixed $caption, bool $escape = true): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$caption` | **mixed** |             |
| `$escape`  | **bool**  |             |

***

### renderTableGroupRows

Generate table group rows elements

```php
protected renderTableGroupRows(string $groupType, array $groupRows, bool $escape = true): string
```

**Parameters:**

| Parameter    | Type       | Description                                                                      |
|--------------|------------|----------------------------------------------------------------------------------|
| `$groupType` | **string** | the row group type to be rendered.
Can be TABLE_HEAD, TABLE_BODY or TABLE_FOOTER |
| `$groupRows` | **array**  | the rows to be rendered                                                          |
| `$escape`    | **bool**   | true espace html content of cells. Default True                                  |

**Return Value:**

The grouped rows XHTML.

**Throws:**

- `InvalidArgumentException`

***

### renderTableRow

Generate table row element "&lt;tr&gt;"

```php
protected renderTableRow(array $row, string $defaultCellType = null, bool $escape = true): string
```

**Parameters:**

| Parameter          | Type       | Description                                     |
|--------------------|------------|-------------------------------------------------|
| `$row`             | **array**  | the array of cells.                             |
| `$defaultCellType` | **string** | the default cell element
(th or td) to be used  |
| `$escape`          | **bool**   | true espace html content of cells. Default True |

**Return Value:**

The row XHTML.

***

### renderTableCell

Generate table cell element "&lt;th&gt;" or "&lt;td&gt;"

```php
public renderTableCell(int|float|string|bool|array $cell, string|null $defaultCellType = null, bool $isFirstCol = true, bool $escape = true): string
```

**Parameters:**

| Parameter          | Type                                | Description                                         |
|--------------------|-------------------------------------|-----------------------------------------------------|
| `$cell`            | **int\|float\|string\|bool\|array** | the cell data                                       |
| `$defaultCellType` | **string\|null**                    | the default cell element
(th or td) to be used      |
| `$isFirstCol`      | **bool**                            | weither the given cell is the first cell in the row |
| `$escape`          | **bool**                            | true espace html content of cells. Default True     |

**Return Value:**

The cell XHTML.

**Throws:**

- `InvalidArgumentException`

***

### defineCellStructure

```php
protected defineCellStructure(mixed $cell, ?string $defaultCellType = null, bool $isFirstCol = true): array
```

**Parameters:**

| Parameter          | Type        | Description |
|--------------------|-------------|-------------|
| `$cell`            | **mixed**   |             |
| `$defaultCellType` | **?string** |             |
| `$isFirstCol`      | **bool**    |             |

***

### getAlignmentClass

```php
protected getAlignmentClass(string $alignment): string
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$alignment` | **string** |             |

***
