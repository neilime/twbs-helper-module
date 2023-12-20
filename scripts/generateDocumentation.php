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

// Tools autoloading
if (!file_exists($toolsAutoloadPath = __DIR__ . '/../tools/vendor/autoload.php')) {
    throw new \LogicException('Tools autoload file "' . $toolsAutoloadPath . '" does not exist');
}

if (false === (include $toolsAutoloadPath)) {
    throw new \LogicException(sprintf(
        'An error occured while including tools autoload file "%s"',
        $toolsAutoloadPath
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
