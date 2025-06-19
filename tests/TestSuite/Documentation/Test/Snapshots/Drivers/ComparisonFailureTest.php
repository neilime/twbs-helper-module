<?php

namespace TestSuite\Documentation\Test\Snapshots\Drivers;

use Documentation\Test\Snapshots\Drivers\ComparisonFailure;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class ComparisonFailureTest extends TestCase
{
    use MatchesSnapshots;

    public function testGetDiffShouldReturnEmptyStringWhenThereIsNoDiff()
    {
        $comparisonFailure = new ComparisonFailure(
            'test',
            'test',
            '',
            ''
        );
        $this->assertEquals('', $comparisonFailure->getDiff());
    }

    public function testGetDiffShouldReturnColoredDiffWhenThereIsDiff()
    {
        $comparisonFailure = new ComparisonFailure(
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
