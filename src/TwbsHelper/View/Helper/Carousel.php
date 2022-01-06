<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering carousels
 */
class Carousel extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const CONTROL_PREVIOUS = 'prev';
    public const CONTROL_NEXT = 'next';

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
        if (!isset($optionsAndAttributes['data-ride'])) {
            $optionsAndAttributes['data-ride'] = 'carousel';
        }

        $classes = ['carousel', 'slide'];
        if (!empty($optionsAndAttributes['crossfade'])) {
            $classes[] = 'carousel-fade';
        }

        $slides = $this->parseSlides($slides);
        $content = $this->renderSlides($slides, $escape);
        if ($content) {
            if (!empty($optionsAndAttributes['indicators'])) {
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
        unset(
            $optionsAndAttributes['indicators'],
            $optionsAndAttributes['controls'],
            $optionsAndAttributes['crossfade']
        );

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($optionsAndAttributes, $classes),
            $content,
            $escape
        );
    }

    protected function parseSlides(array $slides)
    {
        $parsedSlides = [];
        foreach ($slides as $key => $slide) {
            if (is_string($slide)) {
                if (is_string($key)) {
                    $slide = ['src' => $key, 'optionsAndAttributes' => ['caption' => $slide]];
                } else {
                    $slide = ['src' => $slide, 'optionsAndAttributes' => []];
                }
            } elseif (is_array($slide)) {
                if (is_string($key)) {
                    $slide = ['src' => $key, 'optionsAndAttributes' => $slide];
                } else {
                    if (\Laminas\Stdlib\ArrayUtils::isList($slide)) {
                        $slide = ['src' => $slide[0], 'optionsAndAttributes' => $slide[1] ?? []];
                    } else {
                        if (isset($slide['options'])) {
                            $slide['optionsAndAttributes'] = array_merge(
                                $slide['optionsAndAttributes'] ?? [],
                                $slide['options']
                            );
                            unset($slide['options']);
                        }
                        if (isset($slide['attributes'])) {
                            $slide['optionsAndAttributes'] = array_merge(
                                $slide['optionsAndAttributes'] ?? [],
                                $slide['attributes']
                            );
                            unset($slide['attributes']);
                        }
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
            $slidesContent = $this->htmlElement('div', ['class' => 'carousel-inner'], $slidesContent, $escape);
        }
        return $slidesContent;
    }

    protected function renderSlide($slide, bool $escape = true)
    {
        $classes = ['carousel-item'];
        $attributes = [];

        $slide['optionsAndAttributes'] = $this->setClassesToAttributes(
            $slide['optionsAndAttributes'] ?? [],
            ['d-block', 'w-100']
        );

        if (!empty($slide['optionsAndAttributes']['active'])) {
            $classes[] = 'active';
        }
        unset($slide['optionsAndAttributes']['active']);

        if (!empty($slide['optionsAndAttributes']['interval'])) {
            $attributes['data-interval'] = $slide['optionsAndAttributes']['interval'];
        }
        unset($slide['optionsAndAttributes']['interval']);

        $slideContent = '';
        if (!empty($slide['optionsAndAttributes']['caption'])) {
            $slideContent = $this->renderSlideCaption(
                $slide['optionsAndAttributes']['caption'],
                $escape
            );
        }
        unset($slide['optionsAndAttributes']['caption']);

        // Generate image
        $slideContent = $this->getView()->plugin('image')->__invoke(
            $slide['src'],
            $slide['optionsAndAttributes']
        ) . ($slideContent ? PHP_EOL . $slideContent : '');

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($attributes, $classes),
            $slideContent,
            $escape
        );
    }

    protected function renderSlideCaption($captionContent, bool $escape = true)
    {
        if (is_array($captionContent)) {
            $content = '';
            foreach ($captionContent as $key => $captionPartContent) {
                switch (true) {
                    case $key === 'title':
                        $captionPartContent = $this->htmlElement('h5', [], $captionPartContent);
                        break;
                    case $key === 'text':
                        $captionPartContent = $this->htmlElement('p', [], $captionPartContent);
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

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], ['carousel-caption', 'd-none', 'd-md-block']),
            $captionContent,
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

        return $this->htmlElement(
            'ol',
            $this->setClassesToAttributes([], ['carousel-indicators']),
            $indicatorsContent,
            $escape
        );
    }

    protected function renderIndicator(string $id, int $iterator, $slide, bool $escape = true): string
    {
        return $this->htmlElement(
            'li',
            $this->setClassesToAttributes([
                'data-target' => '#' . $id,
                'data-slide-to' => $iterator,
            ], !empty($slide['optionsAndAttributes']['active']) ? ['active'] : []),
            '',
            $escape
        );
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

        $controlContent =
            $this->htmlElement(
                'span',
                ['class' => 'carousel-control-' . $control . '-icon', 'aria-hidden' => 'true'],
                ''
            ) . PHP_EOL .
            $this->htmlElement('span', ['class' => 'sr-only'], $label, $escape);

        return $this->htmlElement(
            'a',
            [
                'class' => 'carousel-control-' . $control,
                'href' => '#' . $id,
                'role' => 'button',
                'data-slide' => $control,
            ],
            $controlContent,
            $escape
        );
    }
}
