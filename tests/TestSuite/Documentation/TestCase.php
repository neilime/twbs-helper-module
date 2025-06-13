<?php

namespace TestSuite\Documentation;

/**
 * Base class to perform tests according to the Bootstrap documentation : %bootstrap-url%/
 * This test class use configuration files existing in this directory.
 * Each configuration file match with a part of the Bootstrap documentation website.
 * Sample structure of a configuration file :
 * array(
 *     'title' => 'Sample', // The title of the documentation part
 *     'url' => '%bootstrap-url%/sample/', // The url of the documentation "Sample part"
 *     'tests' => array(
 *         array(
 *             'title' => 'Test 1 for sample part',
 *             'url' => '%bootstrap-url%/sample/test-1', // The url of the documentation "Sample part, test 1"
 *             // The rendering function should return the expected markup
 *             // as shown in the related documentation website page
 *             'rendering' => function(\Laminas\ServiceManager\ServiceManager $viewHelperPluginManager){
 *                 return $viewHelperPluginManager->get('sampleTestOneHelper')->render('sample test-one');
 *             },
 *         ),
 *         array(
 *             'title' => 'Nested Tests for sample part',
 *             // The url of the documentation "Sample part, nested tests"
 *             'url' => '%bootstrap-url%/sample/nested-tests',
 *             'tests' => array(
 *                 array(
 *                     'title' => '...',
 *                     'url' => '...',
 *                     'rendering' => function(\Laminas\ServiceManager\ServiceManager $viewHelperPluginManager){
 *                         // ...
 *                     },
 *                 ),
 *             ),
 *         ),
 *     ), // Tests array define tests to performs, each one of them compares a rendering versus an expected markup
 * );
 */
class TestCase extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    private static $testsDirectoryPath = __DIR__ . '/Tests';

    /**
     * \Documentation\Test\SnapshotService
     */
    private $snapshotService;

    protected function setUp(): void
    {
        $this->snapshotService = new \Documentation\Test\SnapshotService(self::$testsDirectoryPath);
    }

    /**
     * Provides test cases from existing documentation test config files
     * @return array
     * @throws \LogicException
     */
    public static function getTestCasesProvider()
    {
        $application = \TestSuite\Bootstrap::getServiceManager()->get('Application');
        $application->bootstrap();

        $routeMatch = new \Laminas\Router\RouteMatch([]);
        $routeMatch->setMatchedRouteName('test-route');
        $application->getMvcEvent()->setRouteMatch($routeMatch);

        $config = new \Documentation\Test\ConfigsLoader(self::$testsDirectoryPath);
        $testConfigs = $config->loadDocumentationTestConfigs();

        $testCases = [];
        foreach ($testConfigs as $testConfig) {
            $testCases = array_merge($testCases, static::parseTestsConfig($testConfig));
        }

        return $testCases;
    }

    /**
     * Extract test cases values for a given tests configuration
     * @param array $testsConfig
     * @param string|null $parentTitle
     * @return array
     * @throws \InvalidArgumentException
     */
    protected static function parseTestsConfig(\Documentation\Test\Config $documentationTestConfig)
    {
        // Extract root tests for this tests config
        $testCases = static::extractTestCaseFromTestConfig($documentationTestConfig);

        foreach ($documentationTestConfig->tests as $nestedTestsConfig) {
            $parsedTestCase = static::parseTestsConfig($nestedTestsConfig);

            // Assert that there are no duplicated tests title
            $sameKeys = array_intersect_key($parsedTestCase, $testCases);
            if ($sameKeys !== []) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$testsConfig[\'tests\']" has duplicated test title: "%s"',
                    implode('", "', array_keys($sameKeys))
                ));
            }

            $testCases = array_merge($testCases, $parsedTestCase);
        }

        return $testCases;
    }

    /**
     * Create a test case array for the given test config if tests params exist
     * @param array $testConfig The test config array, expects ['rendering' => closure]
     * @param string $title The title of this test
     * @return array An empty array if no test was found, else [ $title => [rendering, expected] ]
     * @throws \InvalidArgumentException
     */
    protected static function extractTestCaseFromTestConfig(
        \Documentation\Test\Config $documentationTestConfig
    ) {
        if ($documentationTestConfig->rendering) {
            return [$documentationTestConfig->title => [$documentationTestConfig->rendering]];
        }

        // No tests available
        return [];
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('getTestCasesProvider')]
    public function testDocumentation($rendering)
    {
        $renderer = \TestSuite\Bootstrap::getServiceManager()->get('ViewPhpRenderer');

        // Retrieve output of renderging
        ob_start();
        call_user_func($rendering, $renderer);
        $rendering = ob_get_contents();
        ob_end_clean();

        $this->assertMatchesSnapshot(
            $rendering,
            new \Documentation\Test\Snapshots\Drivers\HtmlDriver()
        );
    }

    /*
     * Determines the directory where snapshots are stored. By default a
     * `__snapshots__` directory is created at the same level as the test
     * class.
     */
    protected function getSnapshotDirectory(): string
    {
        return dirname($this->snapshotService->getSnapshotPathFromTitle(
            $this->getSnapshotTitle(),
            $this->snapshotIncrementor
        ));
    }

    /*
     * Determines the snapshot's id. By default, the test case's class and
     * method names are used.
     */
    protected function getSnapshotId(): string
    {
        return $this->snapshotService->getSnapshotIdFromTitle(
            $this->getSnapshotTitle(),
            $this->snapshotIncrementor
        );
    }

    protected function getSnapshotTitle(): string
    {
        preg_match('/testDocumentation with data set "(.+)"/', $this->nameWithDataSet(), $matches);
        return $matches[1];
    }
}
