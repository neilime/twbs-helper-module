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

// PHP Code Sniffer autoloading
if (!file_exists($phpCodeSnifferAutoloadPath = __DIR__ . '/../vendor/squizlabs/php_codesniffer/autoload.php')) {
    throw new \LogicException('PHP Code Sniffer autoload file "' . $phpCodeSnifferAutoloadPath . '" does not exist');
}

if (false === (include $phpCodeSnifferAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including PHP Code Sniffer autoload file "%s"',
        $phpCodeSnifferAutoloadPath
    ));
}

$rootDirPath = dirname(__DIR__);
$testsDirPath = $rootDirPath . '/tests/TestSuite/Documentation/Tests';
$maxNestedDir = 2;

$file = new \Documentation\Generator\FileSystem\Local\File();

$bootstrapVersionResolver = new \Documentation\Generator\BootstrapVersionResolver($file, $rootDirPath);

$configuration = new \Documentation\Generator\Configuration(
    $rootDirPath,
    $testsDirPath,
    $bootstrapVersionResolver->getBootstrapVersion(),
    $maxNestedDir,
    $file
);


$homePageGenerator = new \Documentation\Generator\HomePageGenerator($configuration);
$homePageGenerator->generate();

$testConfigsLoader = new \Documentation\Test\ConfigsLoader($testsDirPath);

$usagePagesGenerator = new \Documentation\Generator\UsagePage\UsagePagesGenerator(
    $configuration,
    $testConfigsLoader->loadDocumentationTestConfigs(),
);
$usagePagesGenerator->generate();
