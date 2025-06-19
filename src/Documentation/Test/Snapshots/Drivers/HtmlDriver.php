<?php

namespace Documentation\Test\Snapshots\Drivers;

use PHPUnit\Framework\ExpectationFailedException;
use ReflectionObject;

class HtmlDriver extends \Spatie\Snapshots\Drivers\HtmlDriver
{
    public function serialize($data): string
    {

        $serializedData = str_replace("—", "&mdash;", $data);
        $serializedData = parent::serialize($serializedData);

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
        } catch (ExpectationFailedException $exception) {
            $exceptionReflection = new ReflectionObject($exception);

            $comparisonFailure = $exception->getComparisonFailure();
            $newComparisonFailure = new ComparisonFailure(
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
