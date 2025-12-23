<?php

namespace TestSuite\TwbsHelper\View;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use TwbsHelper\View\HtmlClassAttributeSet;

class HtmlClassAttributeSetTest extends TestCase
{
    public function testConstructorNormalizesIterableObjects(): void
    {
        $htmlClassAttributeSet = new HtmlClassAttributeSet(new ArrayIterator([
            'btn-primary',
            'btn',
            'btn-primary',
        ]));

        $this->assertSame(
            ['btn', 'btn-primary'],
            $htmlClassAttributeSet->getArrayCopy()
        );
    }
}
