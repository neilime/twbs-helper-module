<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering toast
 */
class Toast extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const PLACEMENT_TOP_LEFT = 'top-left';
    public const PLACEMENT_TOP_CENTER = 'top-center';
    public const PLACEMENT_TOP_RIGHT = 'top-right';
    public const PLACEMENT_MIDDLE_LEFT = 'middle-left';
    public const PLACEMENT_MIDDLE_CENTER = 'middle-center';
    public const PLACEMENT_MIDDLE_RIGHT = 'middle-right';
    public const PLACEMENT_BOTTOM_LEFT = 'bottom-left';
    public const PLACEMENT_BOTTOM_CENTER = 'bottom-center';
    public const PLACEMENT_BOTTOM_RIGHT = 'bottom-right';

    /**
     * Generates a 'toast' element
     * @return string|\TwbsHelper\View\Helper\Toast
     */
    public function __invoke(?iterable $options = null)
    {
        if ($options === null) {
            return $this;
        }

        return $this->render($options);
    }

    public function render(iterable $options): string
    {
        $toastContent = $this->renderHeader($options);
        $toastContent .= ($toastContent ? PHP_EOL : '') . $this->renderBody($options);

        return $this->renderContainer($toastContent, $options);
    }

    protected function renderHeader(iterable $options): string
    {
        if (empty($options['header'])) {
            return '';
        }

        $headerOptions = $options['header'];
        $toastHeader = '';

        if (!empty($headerOptions['image'])) {
            $toastHeader .= $this->getView()->plugin('image')->__invoke(
                ...$headerOptions['image']
            );
        }

        if (!empty($headerOptions['title'])) {
            $titleOptions = is_array($headerOptions['title'])
                ? $headerOptions['title']
                : ['content' => $headerOptions['title']];

            $titleAttributes = $this->getView()->plugin('htmlattributes')
                ->__invoke($titleOptions['attributes'] ?? [])
                ->merge(['class' => ['me-auto']]);

            $toastHeader .= ($toastHeader ? PHP_EOL : '') . $this->getView()->plugin('htmlElement')->__invoke(
                'strong',
                $titleAttributes,
                $titleOptions['content']
            );
        }

        if (!empty($headerOptions['subtitle'])) {
            $subtitleOptions = is_array($headerOptions['subtitle'])
                ? $headerOptions['subtitle']
                : ['content' => $headerOptions['subtitle']];


            $toastHeader .= ($toastHeader ? PHP_EOL : '') . $this->getView()->plugin('htmlElement')->__invoke(
                'small',
                $subtitleOptions['attributes'] ?? [],
                $subtitleOptions['content']
            );
        }

        if (!$toastHeader) {
            return '';
        }

        // Close button
        $closeButton = $this->renderCloseButton($options);
        if ($closeButton) {
            $toastHeader .= PHP_EOL . $closeButton;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => ['toast-header']],
            $toastHeader
        );
    }

    protected function renderBody(iterable $options): string
    {
        if (empty($options['body'])) {
            return '';
        }

        $bodyOptions = $options['body'];

        if (is_string($bodyOptions)) {
            $bodyOptions = ['content' => $bodyOptions];
        }

        $toastBody = $bodyOptions['content'] ?? '';

        if (!empty($bodyOptions['buttons'])) {
            $toastBodyButtons = $this->renderBodyButtons($bodyOptions['buttons']);
            if ($toastBodyButtons) {
                $toastBody .= ($toastBody ? PHP_EOL : '') . $toastBodyButtons;
            }
        }

        $toastBody = $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => ['toast-body']],
            $toastBody
        );

        $hasNoHeader = empty($options['header']);
        $hasCloseButton = false;
        if ($hasNoHeader) {
            $closeButton = $this->renderCloseButton($options);

            if ($closeButton) {
                $hasCloseButton = true;
                $toastBody .= PHP_EOL . $closeButton;
            }
        }

        if ($hasCloseButton) {
            $toastBody = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                ['class' => ['d-flex']],
                $toastBody
            );
        }

        return $toastBody;
    }

    protected function renderBodyButtons(iterable $buttons): string
    {
        $toastBodyButtons = '';
        foreach ($buttons as $buttonSpec) {
            $buttonContent = $this->renderBodyButton($buttonSpec);
            if ($buttonContent) {
                $toastBodyButtons .= ($toastBodyButtons ? PHP_EOL : '') . $buttonContent;
            }
        }

        if (!$toastBodyButtons) {
            return '';
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => 'border-top mt-2 pt-2'],
            $toastBodyButtons
        );
    }


    protected function renderBodyButton(iterable $buttonSpec): string
    {
        return $this->getView()->plugin('formButton')->renderSpec($buttonSpec);
    }

    protected function renderCloseButton(iterable $options): string
    {
        $hasCloseButton = (!isset($options['close']) || $options['close']);
        if (!$hasCloseButton) {
            return '';
        }

        $close = $options['close'] ?? true;

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke([
                'data-bs-dismiss' => 'toast',
            ]);

        if (is_iterable($close)) {
            if (isset($close['attributes'])) {
                $attributes = $this->getView()->plugin('htmlattributes')
                    ->__invoke($close['attributes'])
                    ->merge($attributes);
                $close = $close['content'] ?? true;
            }
        }

        if (empty($options['header'])) {
            $attributes->merge(['class' => ['m-auto me-2']]);
        }

        return $this->getView()->plugin('formButton')->renderSpec(
            [
                'options' => ['close' => $close],
                'attributes' => $attributes,
            ],
            ''
        );
    }

    protected function renderContainer(string $content, iterable $options): string
    {
        $attributes = $this->getContainerAttributes($options);
        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content
        );
    }

    protected function getContainerAttributes(iterable $options): iterable
    {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($options['attributes'] ?? []);
        $attributes->merge([
            'class' => $this->getContainerClasses($options),
            'style' => $this->getContainerStyles($options),
        ]);

        $defaultAttributes = [
            'role' => 'alert',
            'aria-live' => 'assertive',
            'aria-atomic' => 'true',
        ];

        if (isset($options['autohide'])) {
            $defaultAttributes['data-bs-autohide'] = $options['autohide'] ? 'true' : 'false';
        }

        return $attributes->merge($defaultAttributes);
    }

    protected function getContainerClasses(iterable $options): iterable
    {
        $classes = ['toast'];

        if (!empty($options['show'])) {
            $classes[] = 'show';
        }

        if (!empty($options['fade'])) {
            $classes[] = 'fade';
        }


        $hasCloseButton = (!isset($options['close']) || $options['close']);
        if (empty($options['header']) && $hasCloseButton) {
            $classes[] = 'align-items-center';
        }

        if (!empty($options['placement'])) {
            $classes = array_merge(
                $classes,
                $this->getContainerPlacementClasses($options['placement'])
            );
        }

        return $classes;
    }

    public function getContainerPlacementClasses(string $placement): iterable
    {
        $classes[] = 'position-fixed';
        $classes[] = 'p-3';

        switch ($placement) {
            case self::PLACEMENT_TOP_LEFT:
                $classes[] = 'top-0';
                $classes[] = 'start-0';
                break;
            case self::PLACEMENT_TOP_CENTER:
                $classes[] = 'top-0';
                $classes[] = 'start-50';
                $classes[] = 'translate-middle-x';
                break;
            case self::PLACEMENT_TOP_RIGHT:
                $classes[] = 'top-0';
                $classes[] = 'end-0';
                break;
            case self::PLACEMENT_MIDDLE_LEFT:
                $classes[] = 'top-50';
                $classes[] = 'start-0';
                $classes[] = 'translate-middle-y';
                break;
            case self::PLACEMENT_MIDDLE_CENTER:
                $classes[] = 'top-50';
                $classes[] = 'start-50';
                $classes[] = 'translate-middle';
                break;
            case self::PLACEMENT_MIDDLE_RIGHT:
                $classes[] = 'top-50';
                $classes[] = 'end-0';
                $classes[] = 'translate-middle-y';
                break;
            case self::PLACEMENT_BOTTOM_LEFT:
                $classes[] = 'bottom-0';
                $classes[] = 'start-0';
                break;
            case self::PLACEMENT_BOTTOM_CENTER:
                $classes[] = 'bottom-0';
                $classes[] = 'start-50';
                $classes[] = 'translate-middle-x';
                break;
            case self::PLACEMENT_BOTTOM_RIGHT:
                $classes[] = 'bottom-0';
                $classes[] = 'end-0';
                break;
            default:
                throw new \InvalidArgumentException(sprintf(
                    'Option "placement" "%s" is not supported',
                    $placement
                ));
        }

        return $classes;
    }

    protected function getContainerStyles(iterable $options): iterable
    {
        $styles = [];

        return $styles;
    }
}
