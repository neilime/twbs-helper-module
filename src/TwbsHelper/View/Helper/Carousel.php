<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering carousels
 */
class Carousel extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const CONTROL_PREVIOUS = 'prev';
    public const CONTROL_NEXT = 'next';

    protected static $allowedOptions = [
        'controls',
        'crossfade',
        'indicators',
        'interval',
        'swiping',
        'variant',
    ];

    protected static $allowedSlideOptions = [
        'active',
        'caption',
        'indicator',
        'interval',
        'src',
    ];


    /**
     * Generates a 'carousel' element
     *
     * @param array $slides    The slides of the carousel
     * @param array  $optionsAndAttributes Html attributes of the "<div>" element
     * @param boolean $escape     True espace html content. Default True
     * @return string The carousel XHTML.
     */
    public function __invoke(
        array $slides,
        array $optionsAndAttributes = [],
        bool $escape = true
    ): string {

        if (empty($optionsAndAttributes['id'])) {
            $optionsAndAttributes['id'] = uniqid('twbs-carousel-');
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes)
            ->offsetsUnset(static::$allowedOptions)
            ->merge([
                'data-bs-ride' => 'carousel',
                'class' => ['carousel', 'slide'],
            ]);

        if (!empty($optionsAndAttributes['crossfade'])) {
            $attributes['class']->merge(['carousel-fade']);
        }

        if (!empty($optionsAndAttributes['variant'])) {
            $attributes['class']->merge($this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                $optionsAndAttributes['variant'],
                'carousel'
            ));
        }

        $slides = $this->parseSlides($slides);
        $hasIndicators = !empty($optionsAndAttributes['indicators'])
            || array_reduce($slides, function ($hasIndicators, $slide) {
                return $hasIndicators || !empty($slide['indicator']);
            });

        $disableInterval = isset($optionsAndAttributes['interval'])
            && $optionsAndAttributes['interval'] === false
            && !isset($optionsAndAttributes['data-bs-interval']);

        if ($disableInterval) {
            $attributes['data-bs-interval'] = 'false';
        }

        $disableSwipe = isset($optionsAndAttributes['swiping'])
            && $optionsAndAttributes['swiping'] === false
            && !isset($optionsAndAttributes['data-bs-touch']);

        if ($disableSwipe) {
            $attributes['data-bs-touch'] = 'false';
        }

        $content = $this->renderSlides($slides, $escape);

        if ($content) {
            if ($hasIndicators) {
                $content = $this->renderIndicators(
                    $optionsAndAttributes['id'],
                    $slides,
                    $escape
                ) . PHP_EOL . $content;
            }
            if (!empty($optionsAndAttributes['controls'])) {
                $content .= PHP_EOL . $this->renderControls(
                    $optionsAndAttributes['id'],
                    $optionsAndAttributes['controls'],
                    $escape
                );
            }
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }

    protected function parseSlides(iterable $slides)
    {
        $parsedSlides = [];
        foreach ($slides as $key => $slide) {
            if (is_string($slide)) {
                if (is_string($key)) {
                    $slide = ['src' => $key, 'caption' => $slide];
                } else {
                    $slide = ['src' => $slide];
                }
            } elseif (is_iterable($slide)) {
                if (is_string($key)) {
                    if (!isset($slide['src'])) {
                        $slide['src'] = $key;
                    }
                }
            }

            $parsedSlides[] = $slide;
        }
        return $parsedSlides;
    }

    protected function renderSlides(array $slides, bool $escape = true)
    {
        $slidesContent = '';
        foreach ($slides as $slide) {
            $slidesContent .= ($slidesContent ? PHP_EOL : '') . $this->renderSlide($slide, $escape);
        }

        if ($slidesContent) {
            $slidesContent = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                ['class' => 'carousel-inner'],
                $slidesContent,
                $escape
            );
        }
        return $slidesContent;
    }

    protected function renderSlide(iterable $slide, bool $escape = true)
    {
        $slideContent = '';
        if (!empty($slide['caption'])) {
            $slideContent = $this->renderSlideCaption(
                $slide['caption'],
                $escape
            );
        }

        // Generate image
        $src = $slide['src'] ?? '';

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($slide)
            ->offsetsUnset(static::$allowedSlideOptions)
            ->merge(['class' => ['d-block', 'w-100']]);

        $slideContent = $this->getView()->plugin('image')->__invoke(
            $src,
            $attributes,
        ) . ($slideContent ? PHP_EOL . $slideContent : '');


        return $this->renderSlideContainer($slide, $slideContent, $escape);
    }

    protected function renderSlideCaption($captionContent, bool $escape = true)
    {
        if (is_array($captionContent)) {
            $content = '';
            foreach ($captionContent as $key => $captionPartContent) {
                switch (true) {
                    case $key === 'title':
                        $captionPartContent = $this->getView()->plugin('htmlElement')->__invoke(
                            'h5',
                            [],
                            $captionPartContent
                        );
                        break;
                    case $key === 'text':
                        $captionPartContent = $this->getView()->plugin('htmlElement')->__invoke(
                            'p',
                            [],
                            $captionPartContent
                        );
                        break;
                    case is_int($key):
                        break;
                    default:
                        throw new \InvalidArgumentException(sprintf(
                            'Caption part "%s" is not supported',
                            $key
                        ));
                }

                $content .= ($content ? PHP_EOL : '') . $captionPartContent;
            }
            $captionContent = $content;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => ['carousel-caption', 'd-none', 'd-md-block']],
            $captionContent,
            $escape
        );
    }

    protected function renderSlideContainer(iterable $slide, string $slideContent, bool $escape): string
    {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke([]);
        $classes = ['carousel-item'];

        if (!empty($slide['active'])) {
            $classes[] = 'active';
        }

        if (!empty($slide['interval'])) {
            $attributes['data-bs-interval'] = $slide['interval'];
        }

        $attributes->merge(['class' => $classes]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $slideContent,
            $escape
        );
    }

    protected function renderIndicators(string $id, array $slides, bool $escape = true): string
    {
        $indicatorsContent = '';
        $iterator = -1;
        foreach ($slides as $slide) {
            $indicatorsContent .= ($indicatorsContent ? PHP_EOL : '') . $this->renderIndicator(
                $id,
                ++$iterator,
                $slide,
                $escape
            );
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'ol',
            ['class' => ['carousel-indicators']],
            $indicatorsContent,
            $escape
        );
    }

    protected function renderIndicator(string $id, int $iterator, $slide, bool $escape = true): string
    {
        $active = !empty($slide['active']);
        $label = $slide['indicator'] ?? '';
        if ($label && $this->hasTranslator()) {
            $label = $this->getTranslator()->translate($label);
        }

        $attributes = $this->getView()->plugin('htmlattributes')->__invoke([
            'data-bs-target' => '#' . $id,
            'data-bs-slide-to' => $iterator,
            'aria-label' => $label,
        ]);

        if ($active) {
            $attributes->merge(['class' => ['active']]);
            $attributes['aria-current'] = "true";
        }

        return $this->getView()->plugin('formButton')->renderSpec([
            'name' => 'carousel-indicator-' . $iterator,
            'options' => [
                'disable_twbs' => true,
            ],
            'attributes' => $attributes,
        ], '');
    }

    protected function renderControls(string $id, $controls, bool $escape = true): string
    {
        switch (true) {
            case is_iterable($controls):
                break;
            case $controls === true:
                $controls = [
                    self::CONTROL_PREVIOUS => 'Previous',
                    self::CONTROL_NEXT => 'Next',
                ];
                break;
            default:
                throw new \InvalidArgumentException(sprintf(
                    'Option "controls" of type "%s" is not supported',
                    gettype($controls)
                ));
        }

        $controlsContent = '';
        foreach ($controls as $control => $label) {
            $controlsContent .= ($controlsContent ? PHP_EOL : '') . $this->renderControl(
                $id,
                $control,
                $label,
                $escape
            );
        }

        return $controlsContent;
    }

    protected function renderControl(string $id, string $control, string $label, bool $escape = true): string
    {

        $htmlElementHelper = $this->getView()->plugin('htmlElement');
        $controlContent =
            $htmlElementHelper->__invoke(
                'span',
                ['class' => 'carousel-control-' . $control . '-icon', 'aria-hidden' => 'true'],
                ''
            ) . PHP_EOL .
            $htmlElementHelper->__invoke('span', ['class' => 'visually-hidden'], $label, $escape);


        return $this->getView()->plugin('formButton')->renderSpec([
            'name' => 'carousel-control-' . $control,
            'options' => [
                'label' => $controlContent,
                'disable_twbs' => true,
            ],
            'attributes' =>  [
                'class' => 'carousel-control-' . $control,
                'data-bs-slide' => $control,
                'data-bs-target' => '#' . $id,
            ],
        ]);
    }
}
