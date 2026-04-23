---
title: "Unified"
---

Unified diff generator.

***

* Full name: `\Documentation\Test\Snapshots\Drivers\Unified`
* Parent class: `AbstractText`

## Methods

### renderWorker

&#123;@inheritdoc&#125;

```php
protected renderWorker(\Jfcherng\Diff\Differ $differ): string
```

**Parameters:**

| Parameter | Type                      | Description |
|-----------|---------------------------|-------------|
| `$differ` | **\Jfcherng\Diff\Differ** |             |

***

### renderHunkHeader

Render the hunk header.

```php
protected renderHunkHeader(\Jfcherng\Diff\Differ $differ, int[][] $hunk): string
```

**Parameters:**

| Parameter | Type                      | Description |
|-----------|---------------------------|-------------|
| `$differ` | **\Jfcherng\Diff\Differ** | the differ  |
| `$hunk`   | **int[][]**               | the hunk    |

***

### renderHunkBlocks

Render the hunk content.

```php
protected renderHunkBlocks(\Jfcherng\Diff\Differ $differ, int[][] $hunk): string
```

**Parameters:**

| Parameter | Type                      | Description |
|-----------|---------------------------|-------------|
| `$differ` | **\Jfcherng\Diff\Differ** | the differ  |
| `$hunk`   | **int[][]**               | the hunk    |

***

### renderChangedExtent

Renderer the changed extent.

```php
protected renderChangedExtent(\Jfcherng\Diff\Differ $differ, int $oldIndex, int $newIndex): void
```

**Parameters:**

| Parameter   | Type                      | Description  |
|-------------|---------------------------|--------------|
| `$differ`   | **\Jfcherng\Diff\Differ** | the differ   |
| `$oldIndex` | **int**                   | the old line |
| `$newIndex` | **int**                   | the new line |

***

### renderContext

Render the context array with the symbol.

```php
protected renderContext(string $symbol, string[] $context, bool $noEolAtEof = false): string
```

**Parameters:**

| Parameter     | Type         | Description                          |
|---------------|--------------|--------------------------------------|
| `$symbol`     | **string**   | the symbol                           |
| `$context`    | **string[]** | the context                          |
| `$noEolAtEof` | **bool**     | there is no EOL at EOF in this block |

***
