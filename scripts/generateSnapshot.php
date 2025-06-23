<?php

/**
 * HTML Snapshot Generator for TwbsHelper Module
 * 
 * This script generates normalized HTML snapshots for testing Bootstrap components
 * in the TwbsHelper (Twitter Bootstrap Helper) module for Laminas framework.
 * 
 * It transforms raw HTML content coming from Bootstrap documentation website (https://getbootstrap.com/docs) to a valid expected format
 * 
 * PURPOSE:
 * - Generate consistent, normalized HTML snapshots for regression testing
 * - Ensure HTML output from Bootstrap components remains stable across code changes
 * - Support automated documentation generation and test validation
 * 
 * FUNCTIONALITY:
 * - Parses and normalizes HTML content using DOMDocument
 * - Standardizes HTML elements (forms, buttons, inputs) with default attributes
 * - Sorts CSS classes and HTML attributes alphabetically for consistency
 * - Removes comments and formats output with proper indentation
 * - Creates snapshot files in the __snapshots__ directory structure
 * 
 * USAGE:
 *   php scripts/generateSnapshot.php "Snapshot Title" "<html>Content</html>"
 * 
 * PARAMETERS:
 *   $argv[1] - Snapshot title (used for file naming and organization)
 *   $argv[2] - Raw HTML content to process and normalize - Copied from Bootstrap documentation website
 * 
 * OUTPUT:
 *   Creates normalized HTML files in:
 *   tests/TestSuite/Documentation/Tests/__snapshots__/{SafeTitle}__{Incrementor}.html
 * 
 * EXAMPLES:
 *   php scripts/generateSnapshot.php "Components / Progress / Basic" \
 *     '<div class="progress"><div class="progress-bar"></div></div>'
 */

error_reporting(E_ALL | E_STRICT);

// Composer autoloading
if (!file_exists($composerAutoloadPath = __DIR__ . '/../vendor/autoload.php')) {
    throw new \LogicException('Composer autoload file "' . $composerAutoloadPath . '" does not exist');
}

if (false === (include $composerAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including composer autoload file "%s"',
        $composerAutoloadPath
    ));
}

// Validate command line arguments
if (empty($argv[1])) {
    throw new \InvalidArgumentException(sprintf(
        '%s expects first parameter being a snapshot title',
        $argv[0],
    ));
}

$snapshotTitle = $argv[1];

if (empty($argv[2])) {
    throw new \InvalidArgumentException(sprintf(
        '%s expects second parameter being an html content',
        $argv[0],
    ));
}

$snapshotContent = $argv[2];

// Initialize paths and services
$rootDirPath = dirname(__DIR__);
$testsDirPath = $rootDirPath . '/tests/TestSuite/Documentation/Tests';
$snapshotService = new \Documentation\Test\SnapshotService($testsDirPath);

// Create snapshot instance using Spatie framework
$snapshot = \Spatie\Snapshots\Snapshot::forTestCase(
    $snapshotService->getSnapshotIdFromTitle($snapshotTitle),
    dirname($snapshotService->getSnapshotPathFromTitle($snapshotTitle)),
    new \Spatie\Snapshots\Drivers\HtmlDriver
);

// Configure DOM document for HTML processing
$domDocument = new \DOMDocument('1.0');
$domDocument->preserveWhiteSpace = false;
$domDocument->formatOutput = true;
$domDocument->substituteEntities = true;

// Load HTML content and suppress HTML5 validation errors
@$domDocument->loadHTML($snapshotContent);

// Initialize XPath for DOM querying
$xpath = new \DOMXPath($domDocument);

// Clean up: Remove HTML comments from the document
foreach ($xpath->query('//comment()') as $comment) {
    $comment->parentNode->removeChild($comment);
}

// Standardize button elements: ensure consistent name and value attributes
foreach ($xpath->query('//button') as $button) {
    if (!$button->getAttribute('name')) {
        $type = $button->getAttribute('type');
        $button->setAttribute('name', $type);
    }
    if (!$button->getAttribute('value')) {
        $button->setAttribute('value', '');
    }
}

// Standardize input elements: ensure consistent name and value attributes  
foreach ($xpath->query('//input') as $input) {
    if (!$input->getAttribute('name')) {
        $type = $input->getAttribute('type');
        $input->setAttribute('name', $type);
    }
    if (!$input->getAttribute('value')) {
        $input->setAttribute('value', '');
    }
}

// Standardize form elements: ensure all required attributes are present
foreach ($xpath->query('//form') as $form) {
    if (!$form->getAttribute('id')) {
        $form->setAttribute('id', 'form');
    }

    if (!$form->getAttribute('name')) {
        $form->setAttribute('name', 'form');
    }

    if (!$form->getAttribute('method')) {
        $form->setAttribute('method', 'POST');
    }

    if (!$form->getAttribute('action')) {
        $form->setAttribute('action', '');
    }

    if (!$form->getAttribute('role')) {
        $form->setAttribute('role', 'form');
    }
}

// Normalize CSS class attributes: sort classes alphabetically for consistency
foreach ($xpath->query('//*[@class]') as $node) {
    $classAttribute = $node->getAttribute('class');
    $classes = array_filter(explode(' ', $classAttribute));
    sort($classes);
    $classAttribute = implode(' ', $classes);

    $node->setAttribute('class', $classAttribute);
}

// Normalize all element attributes: sort alphabetically for consistent output
foreach ($xpath->query('//*') as $node) {
    $attributes = [];
    $length = $node->attributes->length;

    // Extract all attributes from the node
    for ($i = 0; $i < $length; $i++) {
        $name = $node->attributes->item(0)->nodeName;
        $value = $node->attributes->item(0)->nodeValue;
        $node->removeAttribute($name);
        $attributes[$name] = $value;
    }

    // Sort attributes alphabetically and reapply them
    ksort($attributes);
    foreach ($attributes as $key => $value) {
        $node->setAttribute($key, $value);
    }
}

// Extract content from the body element (removes html, head, body wrapper tags)
$bodyNode = $domDocument->getElementsByTagName('body')[0];

$renderResult = '';
$children = $bodyNode->childNodes;

// Process each child node and extract its XML content
foreach ($children as $child) {
    $childNodeContent = $child->ownerDocument->saveXML($child, LIBXML_NOEMPTYTAG);

    if ($childNodeContent) {
        $renderResult .= $childNodeContent;
    }
}

// Normalize indentation: convert 2-space indents to 4-space for consistency
$renderResult = preg_replace_callback('/^( +)</m', function ($a) {
    return str_repeat(' ', intval(strlen($a[1]) / 2) * 4) . '<';
}, $renderResult);

// Create the final snapshot file with XML encoding declaration
$snapshot->create('<?xml encoding="utf-8" ?>' . $renderResult);
