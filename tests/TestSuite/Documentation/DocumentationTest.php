<?php

namespace TestSuite\Documentation;

/**
 * Base class to perform tests according to the Bootstrap documentation : %bootstrap-url%/
 * This test class use configuration files existing in this directory. Each configuration file match with a part of the Bootstrap documentation website.
 * Sample structure of a configuration file :
 * array(
 *     'title' => 'Sample', // The title of the documentation part
 *     'url' => '%bootstrap-url%/sample/', // The url of the documentation "Sample part"
 *     'tests' => array(
 *         array(
 *             'title' => 'Test 1 for sample part',
 *             'url' => '%bootstrap-url%/sample/test-1', // The url of the documentation "Sample part, test 1"
 *             'rendering' => function(\Zend\ServiceManager\ServiceManager $oViewHelperPluginManager){
 *                 return $oViewHelperPluginManager->get('sampleTestOneHelper')->render('sample test-one');
 *             }, // The rendering function should return the expected markup as shown in the related documentation website page
 *             'expected' => '<sample-test-one>sample test-one</sample-test-one>' // The expected markup (as shown in the related documentation website page)
 *         ),
 *         array(
 *             'title' => 'Nested Tests for sample part',
 *             'url' => '%bootstrap-url%/sample/nested-tests', // The url of the documentation "Sample part, nested tests"
 *             'tests' => array(
 *                 array(
 *                     'title' => '...',
 *                     'url' => '...',
 *                     'rendering' => function(\Zend\ServiceManager\ServiceManager $oViewHelperPluginManager){
 *                         // ...
 *                     },
 *                     'expected' => '...',
 *                 ),
 *             ),
 *         ),
 *     ), // Tests array define tests to performs, each one of them compares a rendering versus an expected markup
 * );
 */
class DocumentationTest extends \PHPUnit\Framework\TestCase {

    /**
     * Provides test cases from existing documentation test config files
     * @return array
     * @throws \LogicException
     */
    public function getTestCasesProvider() {
        $aTestCases = array();
        foreach (new \DirectoryIterator(__DIR__) as $oFileInfo) {
            // Ignore non php filesand current class file
            if (!$oFileInfo->isFile() || $oFileInfo->getExtension() !== 'php' || ($sFilePath = $oFileInfo->getRealPath()) === __FILE__) {
                continue;
            }

            if (false === ($aTestsConfig = include $sFilePath)) {
                throw new \LogicException('An error occured while including documentation test config file "' . $sFilePath . '"');
            }
            if (!is_array($aTestsConfig)) {
                throw new \LogicException('Documentation test config file "' . $sFilePath . '" expects returning an array, "' . (is_object($aTestsConfig) ? get_class($aTestsConfig) : gettype($aTestsConfig)) . '" retrieved');
            }
            try {
                $aTestCases = array_merge($aTestCases, $this->parseTestsConfig($aTestsConfig));
            } catch (\Exception $oException) {
                throw new \LogicException('An error occured while extracting test cases from documentation test config file "' . $sFilePath . '"', $oException->getCode(), $oException);
            }
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
    protected function parseTestsConfig(array $aTestsConfig, $sParentTitle = null) {
        if (!isset($aTestsConfig['title'])) {
            throw new \InvalidArgumentException('Argument "$aTestsConfig" does not have a defined "title" key');
        }
        $sTitle = $aTestsConfig['title'];

        if ($sParentTitle !== null) {
            if (!is_string($sParentTitle)) {
                throw new \InvalidArgumentException('Argument "$sParentTitle" expects a string or a null value, "' . (is_object($sParentTitle) ? get_class($sParentTitle) : gettype($sParentTitle)) . '" given');
            }
            $sTitle = trim($sParentTitle . ' / ' . $sTitle);
        }

        // Extract root tests for this tests config
        $aTestCases = $this->extractTestCaseFromTestConfig($aTestsConfig, $sTitle);

        if (isset($aTestsConfig['tests'])) {
            if (!is_array($aTestsConfig)) {
                throw new \InvalidArgumentException('Argument "$aTestsConfig[\'tests\']" for "' . $sTitle . '" expects an array, "' . (is_object($aTestsConfig['tests']) ? get_class($aTestsConfig['tests']) : gettype($aTestsConfig['tests'])) . '" given');
            }
            foreach ($aTestsConfig['tests'] as $aNestedTestsConfig) {
                $aTestCases = array_merge($aTestCases, $this->parseTestsConfig($aNestedTestsConfig, $sTitle));
            }
        }

        return $aTestCases;
    }

    /**
     * Create a test case array for the given test config if tests params exist
     * @param array $aTestConfig The test config array, expects ['rendering' => closure, 'expected' => string]
     * @param string $sTitle The title of this test
     * @return array An empty array if no test was found, else [ $sTitle => [rendering, expected] ]
     * @throws \InvalidArgumentException
     */
    protected function extractTestCaseFromTestConfig($aTestConfig, $sTitle) {
        if (isset($aTestConfig['rendering'])) {
            if (!is_callable($aTestConfig['rendering'])) {
                throw new \InvalidArgumentException('Argument "$aTestsConfig[\'rendering\']" expects a callable value for "' . $sTitle . '", "' . (is_object($aTestConfig['rendering']) ? get_class($aTestConfig['rendering']) : gettype($aTestConfig['rendering'])) . '" given');
            }
            if (!isset($aTestConfig['expected'])) {
                throw new \InvalidArgumentException('Argument "$aTestsConfig" does not have a defined "expected" key for "' . $sTitle . '"');
            }
            if (!is_string($aTestConfig['expected'])) {
                throw new \InvalidArgumentException('Argument "$aTestsConfig[\'expected\']" expects a string for "' . $sTitle . '", "' . (is_object($aTestConfig['expected']) ? get_class($aTestConfig['expected']) : gettype($aTestConfig['expected'])) . '" given');
            }
            return array($sTitle => array(
                    $aTestConfig['rendering'],
                    $aTestConfig['expected'],
            ));
        } elseif (isset($aTestConfig['expected'])) {
            throw new \InvalidArgumentException('Argument "$aTestsConfig" does not have a defined "rendering" key for "' . $sTitle . '"');
        }
        // No tests available
        return array();
    }

    /**
     * @dataProvider getTestCasesProvider
     */
    public function testDocumentation($oRendering, $sExpected) {
        $oViewHelperPluginManager = \TestSuite\Bootstrap::getServiceManager()->get('ViewHelperManager');
        $oRenderer = new \Zend\View\Renderer\PhpRenderer();
        $oRenderer->setHelperPluginManager($oViewHelperPluginManager);

        // Retrieve output of renderging
        ob_start();
        call_user_func($oRendering, $oRenderer);
        $sRendering = ob_get_contents();
        ob_end_clean();

        $this->assertSame($sExpected, $sRendering);
    }

}
