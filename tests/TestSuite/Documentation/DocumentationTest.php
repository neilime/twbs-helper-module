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
 *             'rendering' => function(\Laminas\ServiceManager\ServiceManager $oViewHelperPluginManager){
 *                 return $oViewHelperPluginManager->get('sampleTestOneHelper')->render('sample test-one');
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
 *                     'rendering' => function(\Laminas\ServiceManager\ServiceManager $oViewHelperPluginManager){
 *                         // ...
 *                     },
 *                 ),
 *             ),
 *         ),
 *     ), // Tests array define tests to performs, each one of them compares a rendering versus an expected markup
 * );
 */
class DocumentationTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    /**
     * Provides test cases from existing documentation test config files
     * @return array
     * @throws \LogicException
     */
    public function getTestCasesProvider()
    {
        $oApplication = \TestSuite\Bootstrap::getServiceManager()->get('Application');
        $oApplication->bootstrap();
        $oRouteMatch = new \Laminas\Router\RouteMatch([]);
        $oRouteMatch->setMatchedRouteName('test-route');
        $oApplication->getMvcEvent()->setRouteMatch($oRouteMatch);

        $aTestConfigs = \TestSuite\Documentation\DocumentationTestConfigsLoader::loadDocumentationTestConfigs();

        $aTestCases = [];
        foreach ($aTestConfigs as $oDocumentationTestConfig) {
            $aTestCases = array_merge($aTestCases, $this->parseTestsConfig($oDocumentationTestConfig));
        }

        return $aTestCases;
    }

    /**
     * Extract test cases values for a given tests configuration
     * @param array $aTestsConfig
     * @param string|null $sParentTitle
     * @return array
     * @throws \InvalidArgumentException
     */
    protected function parseTestsConfig(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig)
    {
        // Extract root tests for this tests config
        $aTestCases = $this->extractTestCaseFromTestConfig($oTestConfig);

        foreach ($oTestConfig->tests as $oNestedTestsConfig) {
            $aParsedTestCase = $this->parseTestsConfig($oNestedTestsConfig);

            // Assert that there are no duplicated tests title
            $aSameKeys = array_intersect_key($aParsedTestCase, $aTestCases);
            if ($aSameKeys) {
                throw new \InvalidArgumentException(sprintf(
                    'Argument "$aTestsConfig[\'tests\']" has duplicated test title: "%s"',
                    join('", "', array_keys($aSameKeys))
                ));
            }

            $aTestCases = array_merge($aTestCases, $aParsedTestCase);
        }

        return $aTestCases;
    }

    /**
     * Create a test case array for the given test config if tests params exist
     * @param array $aTestConfig The test config array, expects ['rendering' => closure]
     * @param string $sTitle The title of this test
     * @return array An empty array if no test was found, else [ $sTitle => [rendering, expected] ]
     * @throws \InvalidArgumentException
     */
    protected function extractTestCaseFromTestConfig(\TestSuite\Documentation\DocumentationTestConfig $oTestConfig)
    {
        if ($oTestConfig->rendering) {
            return [$oTestConfig->title => [$oTestConfig->rendering]];
        }
        // No tests available
        return [];
    }

    /**
     * @dataProvider getTestCasesProvider
     */
    public function testDocumentation($oRendering)
    {
        $oRenderer = \TestSuite\Bootstrap::getServiceManager()->get('ViewPhpRenderer');

        // Retrieve output of renderging
        ob_start();
        call_user_func($oRendering, $oRenderer);
        $sRendering = ob_get_contents();
        ob_end_clean();

        $this->assertMatchesHtmlSnapshot('<?xml encoding="utf-8" ?>' . $sRendering);
    }

    /*
     * Determines the directory where snapshots are stored. By default a
     * `__snapshots__` directory is created at the same level as the test
     * class.
     */
    protected function getSnapshotDirectory(): string
    {
        return dirname($this->getSnapshotPath());
    }

    /*
     * Determines the snapshot's id. By default, the test case's class and
     * method names are used.
     */
    protected function getSnapshotId(): string
    {
        return basename($this->getSnapshotPath()) . '__' .  $this->snapshotIncrementor;
    }

    protected function getSnapshotPath(): string
    {
        preg_match('/testDocumentation with data set "(.+)"/', $this->getName(), $aMatches);
        return \TestSuite\Documentation\DocumentationTestSnapshot::getSnapshotPathFromTitle($aMatches[1]);
    }
}
