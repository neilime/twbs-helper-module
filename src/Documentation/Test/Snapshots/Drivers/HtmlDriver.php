<?php

namespace Documentation\Test\Snapshots\Drivers;

class HtmlDriver extends \Spatie\Snapshots\Drivers\HtmlDriver
{
    public function serialize($data): string
    {
        return parent::serialize('<?xml encoding="utf-8" ?>' . $data);
    }

    public function extension(): string
    {
        return 'html';
    }

    public function match($expected, $actual)
    {
        try {
            parent::match($expected, $actual);
        } catch (\PHPUnit\Framework\ExpectationFailedException $exception) {
            $exceptionReflection = new \ReflectionObject($exception);

            $comparisonFailure = $exception->getComparisonFailure();
            $newComparisonFailure = new \Documentation\Test\Snapshots\Drivers\ComparisonFailure(
                $comparisonFailure->getExpected(),
                $comparisonFailure->getActual(),
                $comparisonFailure->getExpectedAsString(),
                $comparisonFailure->getActualAsString()
            );

            $comparisonFailureReflection = $exceptionReflection->getProperty('comparisonFailure');
            $comparisonFailureReflection->setAccessible(true);
            $comparisonFailureReflection->setValue($exception, $newComparisonFailure);

            throw $exception;
        }
    }
}
