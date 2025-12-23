<?php

declare(strict_types=1);

/**
 * Transforms generated phpDocumentor Markdown files so they can be consumed by Docusaurus (MDX).
 *
 * phpDocumentor markdown frequently contains raw `<...>` (e.g. `array<string, mixed>` or `<input>`)
 * and `{...}` (e.g. `{@inheritdoc}`, array-shapes) in normal text/table cells.
 * Docusaurus parses docs as MDX, where those sequences are interpreted as JSX / expressions,
 * causing compilation failures.
 *
 * This script escapes `<`, `>`, `{`, `}` outside of fenced code blocks and inline code spans.
 *
 * Destination:
 *   Always transforms: website/docs/phpdoc
 */

const EXIT_OK = 0;

$rootDir = realpath(__DIR__ . '/..');
if ($rootDir === false) {
    fwrite(STDERR, "Unable to resolve project root\n");
    exit(1);
}


$docsDirAbsolute = $rootDir . '/website/docs/phpdoc';

$docsDirReal = realpath($docsDirAbsolute);
if ($docsDirReal === false || !is_dir($docsDirReal)) {
    fwrite(STDERR, "Directory not found: {$docsDirAbsolute}\n");
    exit(1);
}

[$changed, $scanned] = transformDirectory($docsDirReal);

[$renamed, $linksUpdated] = renameHomeToIndexAndUpdateLinks($docsDirReal);

$mode = 'WRITE';
fwrite(
    STDOUT,
    "[transform-phpdoc] Mode={$mode} Scanned={$scanned} Changed={$changed} Renamed={$renamed} LinksUpdated={$linksUpdated} Dir={$docsDirReal}\n"
);
exit(EXIT_OK);

/**
 * @return array{0:int,1:int} changed, scanned
 */
function transformDirectory(string $dir): array
{
    $changed = 0;
    $scanned = 0;

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)
    );

    /** @var SplFileInfo $fileInfo */
    foreach ($iterator as $fileInfo) {
        if (!$fileInfo->isFile()) {
            continue;
        }

        $path = $fileInfo->getPathname();
        if (!str_ends_with($path, '.md')) {
            continue;
        }

        $scanned++;

        $original = file_get_contents($path);
        if ($original === false) {
            fwrite(STDERR, "[transform-phpdoc] Failed reading: {$path}\n");
            continue;
        }

        $transformed = transformMarkdownForFile($original, $path, $dir);
        if ($transformed === $original) {
            continue;
        }

        $changed++;

        $result = file_put_contents($path, $transformed);
        if ($result === false) {
            fwrite(STDERR, "[transform-phpdoc] Failed writing: {$path}\n");
        }
    }

    return [$changed, $scanned];
}

function transformMarkdownForFile(string $markdown, string $filePath, string $docsRoot): string
{
    // Normalize newlines to simplify scanning; keep final newline if present.
    $hasTrailingNewline = str_ends_with($markdown, "\n");
    $markdown = str_replace(["\r\n", "\r"], "\n", $markdown);

    // Ensure frontmatter exists and is at the very top (Docusaurus requirement).
    $markdown = ltrim($markdown, "\n\r\t ");
    $markdown = ensureFrontmatter($markdown, $filePath, $docsRoot);

    // Split frontmatter from body so we don't escape inside YAML.
    [$frontmatter, $body] = splitFrontmatter($markdown);

    $lines = explode("\n", $body);
    $inFence = false;
    $fenceMarker = '';

    foreach ($lines as $i => $line) {
        if (isFenceToggleLine($line, $marker)) {
            if (!$inFence) {
                $inFence = true;
                $fenceMarker = $marker;
            } elseif ($marker === $fenceMarker) {
                $inFence = false;
                $fenceMarker = '';
            }

            // Keep fence lines verbatim.
            continue;
        }

        if ($inFence) {
            continue;
        }

        $lines[$i] = transformLineOutsideFence($line);
    }

    $outBody = implode("\n", $lines);
    $out = $frontmatter . $outBody;

    if ($hasTrailingNewline && !str_ends_with($out, "\n")) {
        $out .= "\n";
    }

    return $out;
}

/**
 * @return array{0:string,1:string} frontmatterWithTrailingNewline, body
 */
function splitFrontmatter(string $markdown): array
{
    if (!str_starts_with($markdown, "---\n")) {
        return ['', $markdown];
    }

    $endPos = strpos($markdown, "\n---\n", 4);
    if ($endPos === false) {
        // Malformed frontmatter; treat as no frontmatter.
        return ['', $markdown];
    }

    $frontmatter = substr($markdown, 0, $endPos + 5); // include leading \n---\n
    $body = substr($markdown, $endPos + 5);
    return [$frontmatter, $body];
}

function ensureFrontmatter(string $markdown, string $filePath, string $docsRoot): string
{
    $relative = ltrim(str_replace($docsRoot, '', $filePath), '/');
    $isPhpdocIndex = ($relative === 'index.md' || $relative === 'Home.md');

    $title = deriveTitle($markdown, $filePath, $docsRoot);
    $titleYaml = yamlDoubleQuote($title);

    if (str_starts_with($markdown, "---\n")) {
        // If frontmatter already exists, ensure it has a title (and sidebar_position for index).
        $endPos = strpos($markdown, "\n---\n", 4);
        if ($endPos === false) {
            return $markdown;
        }

        $front = substr($markdown, 0, $endPos + 5);
        $rest = substr($markdown, $endPos + 5);

        if (!preg_match('/^title\s*:/m', $front)) {
            $front = rtrim(substr($front, 0, -4), "\n") . "\n" . "title: {$titleYaml}\n---\n";
        }

        if ($isPhpdocIndex && !preg_match('/^sidebar_position\s*:/m', $front)) {
            $front = rtrim(substr($front, 0, -4), "\n") . "\nsidebar_position: 999\n---\n";
        }

        return $front . $rest;
    }

    $frontmatterLines = [
        '---',
    ];

    if ($isPhpdocIndex) {
        // Keep it near the end of the main docs sidebar ordering (autogenerated).
        $frontmatterLines[] = 'sidebar_position: 999';
    }

    $frontmatterLines[] = "title: {$titleYaml}";
    $frontmatterLines[] = '---';

    return implode("\n", $frontmatterLines) . "\n\n" . $markdown;
}

function deriveTitle(string $markdown, string $filePath, string $docsRoot): string
{
    $relative = ltrim(str_replace($docsRoot, '', $filePath), '/');
    if ($relative === 'index.md' || $relative === 'Home.md') {
        return 'API (PHPDoc)';
    }

    if (preg_match('/^\* Full name:\s+`([^`]+)`/m', $markdown, $m)) {
        $fullName = trim($m[1]);
        $fullName = ltrim($fullName, '\\');
        if ($fullName !== '') {
            // Use the short name as title (consistent with typical API docs).
            $parts = explode('\\', $fullName);
            $short = end($parts);
            if (is_string($short) && $short !== '') {
                return $short;
            }
        }
    }

    $base = pathinfo($filePath, PATHINFO_FILENAME);
    return $base !== '' ? $base : 'API';
}

function yamlDoubleQuote(string $value): string
{
    $escaped = str_replace(['\\', '"'], ['\\\\', '\\"'], $value);
    return '"' . $escaped . '"';
}

/**
 * Detects Markdown fenced code blocks.
 * Returns true if the line toggles a fence (``` or ~~~).
 *
 * @param-out string $marker
 */
function isFenceToggleLine(string $line, ?string &$marker = null): bool
{
    // Allow up to 3 leading spaces per CommonMark.
    if (!preg_match('/^\s{0,3}(```+|~~~+)/', $line, $m)) {
        return false;
    }

    $marker = $m[1][0]; // ` or ~
    return true;
}

function transformLineOutsideFence(string $line): string
{
    $out = '';
    $textBuffer = '';

    $len = strlen($line);
    $inCode = false;
    $codeTickLen = 0;

    for ($i = 0; $i < $len; $i++) {
        $ch = $line[$i];

        if ($ch !== '`') {
            if ($inCode) {
                $out .= $ch;
            } else {
                $textBuffer .= $ch;
            }
            continue;
        }

        // Backtick run: toggles inline code span.
        $runLen = 1;
        while (($i + $runLen) < $len && $line[$i + $runLen] === '`') {
            $runLen++;
        }

        if (!$inCode) {
            $out .= processMdxUnsafeText($textBuffer);
            $textBuffer = '';
            $inCode = true;
            $codeTickLen = $runLen;
        } elseif ($runLen === $codeTickLen) {
            $inCode = false;
            $codeTickLen = 0;
        }

        $out .= str_repeat('`', $runLen);
        $i += $runLen - 1;
    }

    if (!$inCode) {
        $out .= processMdxUnsafeText($textBuffer);
    }

    return $out;
}

function processMdxUnsafeText(string $text): string
{
    if ($text === '') {
        return '';
    }

    // Rewrite common phpdoc root home page links to Docusaurus-friendly index.
    // Examples: (Home.md), (./Home.md), (../Home.md#anchor), (/foo/Home.md)
    $text = preg_replace('/\]\(([^)\\s]*?)Home\.md(#[^)\\s]+)?\)/', ']($1index.md$2)', $text) ?? $text;

    // Escape MDX-sensitive characters in regular text.
    return strtr($text, [
        '<' => '&lt;',
        '>' => '&gt;',
        '{' => '&#123;',
        '}' => '&#125;',
    ]);
}

/**
 * Renames the phpdoc root Home.md to index.md and updates Markdown links.
 *
 * @return array{0:int,1:int} renamed, linksUpdated
 */
function renameHomeToIndexAndUpdateLinks(string $docsDir): array
{
    $renamed = 0;
    $linksUpdated = 0;

    $home = rtrim($docsDir, '/') . '/Home.md';
    $index = rtrim($docsDir, '/') . '/index.md';

    if (is_file($home) && !is_file($index)) {
        $renamed++;
        if (!rename($home, $index)) {
            fwrite(STDERR, "[transform-phpdoc] Failed renaming {$home} -> {$index}\n");
            $renamed--;
        }
    }

    // Second pass: update link targets across all markdown files.
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($docsDir, FilesystemIterator::SKIP_DOTS)
    );

    /** @var SplFileInfo $fileInfo */
    foreach ($iterator as $fileInfo) {
        if (!$fileInfo->isFile()) {
            continue;
        }

        $path = $fileInfo->getPathname();
        if (!str_ends_with($path, '.md')) {
            continue;
        }

        $original = file_get_contents($path);
        if ($original === false) {
            continue;
        }

        // Reuse the same transform pass used for escaping, but only for link rewrite.
        $rewritten = rewriteHomeLinksInMarkdown($original);
        if ($rewritten === $original) {
            continue;
        }

        $linksUpdated++;
        if (file_put_contents($path, $rewritten) === false) {
            fwrite(STDERR, "[transform-phpdoc] Failed writing updated links: {$path}\n");
        }
    }

    return [$renamed, $linksUpdated];
}

function rewriteHomeLinksInMarkdown(string $markdown): string
{
    $hasTrailingNewline = str_ends_with($markdown, "\n");
    $markdown = str_replace(["\r\n", "\r"], "\n", $markdown);

    $lines = explode("\n", $markdown);
    $inFence = false;
    $fenceMarker = '';

    foreach ($lines as $i => $line) {
        if (isFenceToggleLine($line, $marker)) {
            if (!$inFence) {
                $inFence = true;
                $fenceMarker = $marker;
            } elseif ($marker === $fenceMarker) {
                $inFence = false;
                $fenceMarker = '';
            }
            continue;
        }

        if ($inFence) {
            continue;
        }

        $lines[$i] = rewriteHomeLinksOutsideInlineCode($line);
    }

    $out = implode("\n", $lines);
    if ($hasTrailingNewline && !str_ends_with($out, "\n")) {
        $out .= "\n";
    }

    return $out;
}

function rewriteHomeLinksOutsideInlineCode(string $line): string
{
    $out = '';
    $textBuffer = '';

    $len = strlen($line);
    $inCode = false;
    $codeTickLen = 0;

    for ($i = 0; $i < $len; $i++) {
        $ch = $line[$i];

        if ($ch !== '`') {
            if ($inCode) {
                $out .= $ch;
            } else {
                $textBuffer .= $ch;
            }
            continue;
        }

        $runLen = 1;
        while (($i + $runLen) < $len && $line[$i + $runLen] === '`') {
            $runLen++;
        }

        if (!$inCode) {
            $out .= (preg_replace('/\]\(([^)\\s]*?)Home\.md(#[^)\\s]+)?\)/', ']($1index.md$2)', $textBuffer) ?? $textBuffer);
            $textBuffer = '';
            $inCode = true;
            $codeTickLen = $runLen;
        } elseif ($runLen === $codeTickLen) {
            $inCode = false;
            $codeTickLen = 0;
        }

        $out .= str_repeat('`', $runLen);
        $i += $runLen - 1;
    }

    if (!$inCode) {
        $out .= (preg_replace('/\]\(([^)\\s]*?)Home\.md(#[^)\\s]+)?\)/', ']($1index.md$2)', $textBuffer) ?? $textBuffer);
    }

    return $out;
}
