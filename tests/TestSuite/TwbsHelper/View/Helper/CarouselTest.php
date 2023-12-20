<?php

namespace TestSuite\TwbsHelper\View\Helper;

class CarouselTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\Carousel
     */
    protected $helper = 'carousel';

    public function testShouldRenderAUniqueIdIfNoneDefined()
    {
        $this->assertMatchesRegularExpression(
            // Expected
            '/<div class="carousel&#x20;slide" data-bs-ride="carousel" id="twbs-carousel-[a-z0-9]{13}"><\/div>/',
            // Rendering
            $this->helper->__invoke([])
        );
    }

    public function testShouldRenderSlidesContainingOnlyString()
    {
        $this->assertSame(
            // Expected
            '<div class="carousel&#x20;slide" data-bs-ride="carousel" id="test-carousel">' . PHP_EOL .
                '    <div class="carousel-inner">' . PHP_EOL .
                '        <div class="carousel-item">' . PHP_EOL .
                '            <img class="d-block&#x20;w-100" src="test-src" />' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            // Rendering
            $this->helper->__invoke(['test-src'], ['id' => 'test-carousel'])
        );
    }

    public function testShouldRenderSlidesContainingSrcAndCaptionAsStrings()
    {
        $this->assertSame(
            // Expected
            '<div class="carousel&#x20;slide" data-bs-ride="carousel" id="test-carousel">' . PHP_EOL .
                '    <div class="carousel-inner">' . PHP_EOL .
                '        <div class="carousel-item">' . PHP_EOL .
                '            <img class="d-block&#x20;w-100" src="test-src" />' . PHP_EOL .
                '            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">' . PHP_EOL .
                '                test caption' . PHP_EOL .
                '            </div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            // Rendering
            $this->helper->__invoke(['test-src' => 'test caption'], ['id' => 'test-carousel'])
        );
    }

    public function testShouldRenderIntegerSlideCaption()
    {
        $this->assertSame(
            // Expected
            '<div class="carousel&#x20;slide" data-bs-ride="carousel" id="test-carousel">' . PHP_EOL .
                '    <div class="carousel-inner">' . PHP_EOL .
                '        <div class="carousel-item">' . PHP_EOL .
                '            <img class="d-block&#x20;w-100" src="test" />' . PHP_EOL .
                '            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">' . PHP_EOL .
                '                test' . PHP_EOL .
                '            </div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            // Rendering
            $this->helper->__invoke(
                [
                    [
                        'src' => 'test',
                        'caption' => ['test'],
                    ],
                ],
                ['id' => 'test-carousel']
            )
        );
    }

    public function testShouldThrowAnErrorWhenSlideCaptionIsNotSupported()
    {
        $this->expectExceptionMessage('Caption part "wrong" is not supported');
        $this->helper->__invoke(
            [
                [
                    'src' => 'test',
                    'caption' => ['wrong' => 'test'],
                ],
            ],
            ['id' => 'test-carousel']
        );
    }

    public function testShouldRenderCustomControls()
    {
        $this->assertSame(
            // Expected
            '<div class="carousel&#x20;slide" data-bs-ride="carousel" id="test-carousel">' . PHP_EOL .
                '    <div class="carousel-inner">' . PHP_EOL .
                '        <div class="carousel-item">' . PHP_EOL .
                '            <img class="d-block&#x20;w-100" src="test" />' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="&#x23;test-carousel" ' .
                'name="carousel-control-prev" type="button" value="">' . PHP_EOL .
                '        <span aria-hidden="true" class="carousel-control-prev-icon"></span>' . PHP_EOL .
                '        <span class="visually-hidden">Previous</span>' . PHP_EOL .
                '    </button>' . PHP_EOL .
                '</div>',
            // Rendering
            $this->helper->__invoke(
                ['test'],
                [
                    'id' => 'test-carousel',
                    'controls' => [\TwbsHelper\View\Helper\Carousel::CONTROL_PREVIOUS => 'Previous'],
                ]
            )
        );
    }

    public function testShouldThrowAnErrorWhenControlIsNotSupported()
    {
        $this->expectExceptionMessage('Option "controls" of type "string" is not supported');
        $this->helper->__invoke(
            ['test'],
            [
                'id' => 'test-carousel',
                'controls' => 'wrong',
            ]
        );
    }
}
