<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering carousels
 */
class Carousel extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    const CONTROL_PREVIOUS = 'prev';
    const CONTROL_NEXT = 'next';

    /**
     * Generates a 'carousel' element
     *
     * @param array $aSlides    The slides of the carousel
     * @param array  $aAttributes Html attributes of the "<div>" element
     * @param boolean $bEscape     True espace html content. Default True
     * @return string The carousel XHTML.
     */
    public function __invoke(
        array $aSlides,
        array $aOptionsAndAttributes = [],
        bool  $bEscape = true
    ): string {


        if (empty($aOptionsAndAttributes['id'])) {
            $aOptionsAndAttributes['id'] = uniqid('twbs-carousel');
        }
        if (!isset($aOptionsAndAttributes['data-ride'])) {
            $aOptionsAndAttributes['data-ride'] = 'carousel';
        }

        $aClasses = ['carousel', 'slide'];
        if (!empty($aOptionsAndAttributes['crossfade'])) {
            $aClasses[] = 'carousel-fade';
        }

        $aSlides = $this->parseSlides($aSlides);
        $sContent = $this->renderSlides($aSlides, $bEscape);
        if ($sContent) {
            if (!empty($aOptionsAndAttributes['indicators'])) {
                $sContent = $this->renderIndicators(
                    $aOptionsAndAttributes['id'],
                    $aSlides,
                    $aOptionsAndAttributes['controls'],
                    $bEscape
                ) . PHP_EOL . $sContent;
            }
            if (!empty($aOptionsAndAttributes['controls'])) {
                $sContent .= PHP_EOL . $this->renderControls(
                    $aOptionsAndAttributes['id'],
                    $aOptionsAndAttributes['controls'],
                    $bEscape
                );
            }
        }
        unset(
            $aOptionsAndAttributes['indicators'],
            $aOptionsAndAttributes['controls'],
            $aOptionsAndAttributes['crossfade']
        );

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aOptionsAndAttributes, $aClasses),
            $sContent,
            $bEscape
        );
    }

    protected function parseSlides(array $aSlides)
    {
        $aParsedSlides = [];
        foreach ($aSlides as $sKey => $aSlide) {
            if (is_string($aSlide)) {
                if (is_string($sKey)) {
                    $aSlide = ['src' => $sKey, 'optionsAndAttributes' => ['caption' => $sKey]];
                } else {
                    $aSlide = ['src' => $sKey, 'optionsAndAttributes' => []];
                }
            } elseif (is_array($aSlide)) {
                if (is_string($sKey)) {
                    $aSlide = ['src' => $sKey, 'optionsAndAttributes' => $aSlide];
                } else {
                    if (\Zend\Stdlib\ArrayUtils::isList($aSlide)) {
                        $aSlide = ['src' => $aSlide[0], 'optionsAndAttributes' => $aSlide[1] ?? []];
                    } else {
                        if (isset($aSlide['options'])) {
                            $aSlide['optionsAndAttributes'] = array_merge(
                                $aSlide['optionsAndAttributes'] ?? [],
                                $aSlide['options']
                            );
                        }
                        if (isset($aSlide['attributes'])) {
                            $aSlide['optionsAndAttributes'] = array_merge(
                                $aSlide['optionsAndAttributes'] ?? [],
                                $aSlide['attributes']
                            );
                        }
                    }
                }
            }


            $aParsedSlides[] = $aSlide;
        }
        return $aParsedSlides;
    }

    protected function renderSlides(array $aSlides, bool  $bEscape = true)
    {
        $sSlidesContent = '';
        foreach ($aSlides as $aSlide) {
            $sSlidesContent .= ($sSlidesContent ? PHP_EOL : '') . $this->renderSlide($aSlide, $bEscape);
        }

        if ($sSlidesContent) {
            $sSlidesContent = $this->htmlElement('div', ['class' => 'carousel-inner'], $sSlidesContent, $bEscape);
        }
        return $sSlidesContent;
    }

    protected function renderSlide($aSlide, bool  $bEscape = true)
    {
        $aClasses = ['carousel-item'];
        $aAttributes = [];

        $aSlide['optionsAndAttributes'] = $this->setClassesToAttributes(
            $aSlide['optionsAndAttributes'] ?? [],
            ['d-block', 'w-100']
        );

        if (!empty($aSlide['optionsAndAttributes']['active'])) {
            $aClasses[] = 'active';
        }
        unset($aSlide['optionsAndAttributes']['active']);

        if (!empty($aSlide['optionsAndAttributes']['interval'])) {
            $aAttributes['data-interval'] = $aSlide['optionsAndAttributes']['interval'];
        }
        unset($aSlide['optionsAndAttributes']['interval']);

        $sSlideContent = '';
        if (!empty($aSlide['optionsAndAttributes']['caption'])) {
            $sSlideContent = $this->renderSlideCaption(
                $aSlide['optionsAndAttributes']['caption'],
                $bEscape
            );
        }
        unset($aSlide['optionsAndAttributes']['caption']);

        // Generate image
        $sSlideContent = $this->getView()->plugin('image')->__invoke(
            $aSlide['src'],
            $aSlide['optionsAndAttributes']
        ) . ($sSlideContent ? PHP_EOL . $sSlideContent : '');

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($aAttributes, $aClasses),
            $sSlideContent,
            $bEscape
        );
    }

    protected function renderSlideCaption($sCaptionContent, bool  $bEscape = true)
    {
        if (is_array($sCaptionContent)) {
            $sContent = '';
            foreach ($sCaptionContent as $sKey => $sCaptionPartContent) {
                switch (true) {
                    case $sKey === 'title':
                        $sCaptionPartContent = $this->htmlElement('h5', [], $sCaptionPartContent);
                        break;
                    case $sKey === 'text':
                        $sCaptionPartContent = $this->htmlElement('p', [], $sCaptionPartContent);
                        break;
                    case is_int($sKey):
                        break;
                    default:
                        throw new \InvalidArgumentException(sprintf(
                            'Caption part "%s" is not supported',
                            $sKey
                        ));
                }

                $sContent .= ($sContent ? PHP_EOL : '') . $sCaptionPartContent;
            }
            $sCaptionContent = $sContent;
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes([], ['carousel-caption', 'd-none', 'd-md-block']),
            $sCaptionContent,
            $bEscape
        );
    }

    protected function renderIndicators(string $sId, array $aSlides, $aIndicators, bool  $bEscape = true): string
    {
        switch (true) {
            case $aIndicators === true:
                break;
            default:
                throw new \InvalidArgumentException(sprintf(
                    'Option "controls" of type "%s" is not supported',
                    gettype($aIndicators)
                ));
        }

        $sIndicatorsContent = '';
        $iIterator = -1;
        foreach ($aSlides as $aSlide) {
            $sIndicatorsContent .= ($sIndicatorsContent ? PHP_EOL : '') . $this->renderIndicator(
                $sId,
                ++$iIterator,
                $aSlide,
                $bEscape
            );
        }

        return $this->htmlElement(
            'ol',
            $this->setClassesToAttributes([], ['carousel-indicators']),
            $sIndicatorsContent,
            $bEscape
        );
    }

    protected function renderIndicator(string $sId, int $iIterator, $aSlide, bool  $bEscape = true): string
    {
        return $this->htmlElement(
            'li',
            $this->setClassesToAttributes([
                'data-target' => '#' . $sId,
                'data-slide-to' => $iIterator,
            ], !empty($aSlide['optionsAndAttributes']['active']) ? ['active'] : []),
            '',
            $bEscape
        );
    }

    protected function renderControls(string $sId, $aControls, bool  $bEscape = true): string
    {
        switch (true) {
            case $aControls === true:
                $aControls = [
                    self::CONTROL_PREVIOUS => 'Previous',
                    self::CONTROL_NEXT => 'Next',
                ];
                break;
            default:
                throw new \InvalidArgumentException(sprintf(
                    'Option "controls" of type "%s" is not supported',
                    gettype($aControls)
                ));
        }

        $sControlsContent = '';
        foreach ($aControls as $sControl => $sLabel) {
            $sControlsContent .= ($sControlsContent ? PHP_EOL : '') . $this->renderControl(
                $sId,
                $sControl,
                $sLabel,
                $bEscape
            );
        }

        return $sControlsContent;
    }

    protected function renderControl(string $sId, string $sControl, string $sLabel, bool  $bEscape = true): string
    {

        $sControlContent =
            $this->htmlElement(
                'span',
                ['class' => 'carousel-control-' . $sControl . '-icon', 'aria-hidden' => 'true'],
                ''
            ) . PHP_EOL .
            $this->htmlElement('span', ['class' => 'sr-only'], $sLabel, $bEscape);

        return $this->htmlElement(
            'a',
            [
                'class' => 'carousel-control-' . $sControl,
                'href' => '#' . $sId,
                'role' => 'button',
                'data-slide' => $sControl,
            ],
            $sControlContent,
            $bEscape
        );
    }
}
