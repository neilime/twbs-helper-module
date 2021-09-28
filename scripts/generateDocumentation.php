<?php

error_reporting(E_ALL | E_STRICT);

// Composer autoloading
if (!file_exists($sComposerAutoloadPath = __DIR__ . '/../vendor/autoload.php')) {
    throw new \LogicException('Composer autoload file "' . $sComposerAutoloadPath . '" does not exist');
}

if (false === (include $sComposerAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including composer autoload file "%s"',
        $sComposerAutoloadPath
    ));
}

// PHP Code Sniffer autoloading
if (!file_exists($sPHPCodeSnifferAutoloadPath = __DIR__ . '/../vendor/squizlabs/php_codesniffer/autoload.php')) {
    throw new \LogicException('PHP Code Sniffer autoload file "' . $sPHPCodeSnifferAutoloadPath . '" does not exist');
}

if (false === (include $sPHPCodeSnifferAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including PHP Code Sniffer autoload file "%s"',
        $sPHPCodeSnifferAutoloadPath
    ));
}

putenv('BOOTSTRAP_VERSION=4.5');

$oHomePageGenerator = new \DocumentationGenerator\HomePageGenerator(
    new \DocumentationGenerator\FileSystem\Local\File()
);
$oHomePageGenerator->generate();

$oUsagePagesGenerator = new \DocumentationGenerator\UsagePage\UsagePagesGenerator();
$oUsagePagesGenerator->generate();
