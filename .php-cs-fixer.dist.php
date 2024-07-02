<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

$finder = Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
    ->ignoreVCSIgnored(true);

return (new Config())
    ->setRules([
        '@PSR12' => true,
        'array_indentation' => true,
        '@PHP83Migration' => true,
    ])
    ->setFinder($finder)
    ->setUsingCache(true)
    ->setCacheFile(__DIR__ . '/tools/cache/.php-cs-fixer.cache')
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());
