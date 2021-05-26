<?php

namespace TestSuite\Documentation\Test\Snapshots\Drivers;

class ComparisonFailureTest extends \PHPUnit\Framework\TestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;

    public function testGetDiffShouldReturnEmptyStringWhenThereIsNoDiff()
    {
        $comparisonFailure = new \Documentation\Test\Snapshots\Drivers\ComparisonFailure(
            'test',
            'test',
            '',
            ''
        );
        $this->assertEquals('', $comparisonFailure->getDiff());
    }

    public function testGetDiffShouldReturnColoredDiffWhenThereIsDiff()
    {
        $comparisonFailure = new \Documentation\Test\Snapshots\Drivers\ComparisonFailure(
            'test',
            'diff',
            'test',
            'diff'
        );
        $this->assertStringContainsString(
            '--- Expected' . PHP_EOL .
                '+++ Actual' . PHP_EOL,
            $comparisonFailure->getDiff()
        );
    }
}
