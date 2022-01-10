<?php

namespace Documentation\Test\Snapshots\Drivers;

class ComparisonFailure extends \SebastianBergmann\Comparator\ComparisonFailure
{
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
