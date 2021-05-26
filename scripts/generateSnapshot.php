<?php

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

if (empty($argv[1])) {
    throw new \InvalidArgumentException(sprintf(
        '%s expects first parameter being a snapshot file path',
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

$rootDirPath = dirname(__DIR__);

$testsDirPath = $rootDirPath . '/tests/TestSuite/Documentation/Tests';

$snapshotService = new \Documentation\Test\SnapshotService($testsDirPath);

$snapshot = \Spatie\Snapshots\Snapshot::forTestCase(
    $snapshotService->getSnapshotIdFromTitle($snapshotTitle),
    dirname($snapshotService->getSnapshotPathFromTitle($snapshotTitle)),
    new \Spatie\Snapshots\Drivers\HtmlDriver
);

$domDocument = new \DOMDocument('1.0');
$domDocument->preserveWhiteSpace = false;
$domDocument->formatOutput = true;
$domDocument->substituteEntities = true;

@$domDocument->loadHTML($snapshotContent); // to ignore HTML5 errors


$xpath = new \DOMXPath($domDocument);

// Remove comments
foreach ($xpath->query('//comment()') as $comment) {
    $comment->parentNode->removeChild($comment);
}

// Adjust buttons
foreach ($xpath->query('//button') as $button) {
    if (!$button->getAttribute('name')) {
        $type = $button->getAttribute('type');
        $button->setAttribute('name', $type);
    }
    if (!$button->getAttribute('value')) {
        $button->setAttribute('value', '');
    }
}

// Adjust inputs
foreach ($xpath->query('//input') as $input) {
    if (!$input->getAttribute('name')) {
        $type = $input->getAttribute('type');
        $input->setAttribute('name', $type);
    }
    if (!$input->getAttribute('value')) {
        $input->setAttribute('value', '');
    }
}

// Adjust forms
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

// Adjust class attributes
foreach ($xpath->query('//*[@class]') as $node) {
    $classAttribute = $node->getAttribute('class');
    $classes = array_filter(explode(' ', $classAttribute));
    sort($classes);
    $classAttribute = implode(' ', $classes);

    $node->setAttribute('class', $classAttribute);
}

// Adjust attributes
foreach ($xpath->query('//*') as $node) {

    $attributes = [];
    $length = $node->attributes->length;
    for ($i = 0; $i < $length; $i++) {
        $name = $node->attributes->item(0)->nodeName;
        $value = $node->attributes->item(0)->nodeValue;
        $node->removeAttribute($name);
        $attributes[$name] = $value;
    }
    ksort($attributes);

    foreach ($attributes as $key => $value) {
        $node->setAttribute($key, $value);
    }
}


// Retrieve body content

$bodyNode = $domDocument->getElementsByTagName('body')[0];

$renderResult = '';
$children = $bodyNode->childNodes;
foreach ($children as $child) {
    $childNodeContent = $child->ownerDocument->saveXML($child, LIBXML_NOEMPTYTAG);

    if ($childNodeContent) {
        $renderResult .= $childNodeContent;
    }
}

$renderResult = preg_replace_callback('/^( +)</m', function ($a) {
    return str_repeat(' ', intval(strlen($a[1]) / 2) * 4) . '<';
}, $renderResult);

$snapshot->create('<?xml encoding="utf-8" ?>' . $renderResult);
