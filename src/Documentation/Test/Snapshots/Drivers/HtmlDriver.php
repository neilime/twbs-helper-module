<?php

namespace Documentation\Test\Snapshots\Drivers;

class HtmlDriver extends \Spatie\Snapshots\Drivers\HtmlDriver
{
    public function serialize($data): string
    {
        $serializedData = parent::serialize(mb_convert_encoding($data, 'HTML-ENTITIES', 'UTF-8'));
        return preg_replace('~<(?:!DOCTYPE|/?(?:html|head|body))[^>]*>\s*~i', '', $serializedData);
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
