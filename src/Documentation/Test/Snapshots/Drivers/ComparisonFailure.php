<?php

namespace Documentation\Test\Snapshots\Drivers;

class ComparisonFailure
{
    private $expected;
    private $actual;
    private $expectedAsString;
    private $actualAsString;

    public function __construct($expected, $actual, $expectedAsString = '', $actualAsString = '')
    {
        $this->expected = $expected;
        $this->actual = $actual;
        $this->expectedAsString = $expectedAsString;
        $this->actualAsString = $actualAsString;
    }

    public function getExpected()
    {
        return $this->expected;
    }

    public function getActual()
    {
        return $this->actual;
    }

    public function getExpectedAsString()
    {
        return $this->expectedAsString;
    }

    public function getActualAsString()
    {
        return $this->actualAsString;
    }

    /**
     * @return string
     */
    public function getDiff()
    {
        if (!$this->actualAsString && !$this->expectedAsString) {
            return '';
        }

        $differ = new \Jfcherng\Diff\Differ(
            explode(PHP_EOL, $this->expectedAsString),
            explode(PHP_EOL, $this->actualAsString),
            [
                'detailLevel' => 'word',
            ]
        );

        $renderer = new \Documentation\Test\Snapshots\Drivers\Unified([
            'detailLevel' => 'word',
        ]);
        $result = $renderer->render($differ);

        $message = "\n--- Expected\n+++ Actual\n" . $result;

        return  $message;
    }
}
