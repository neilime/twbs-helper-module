<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering spinner
 */
class Spinner extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    public const PLACEMENT_CENTER = 'center';
    public const PLACEMENT_END = 'end';
    public const PLACEMENT_TEXT_CENTER = 'text-center';

    /**
     * Generates a 'spinner' element
     */
    public function __invoke($label = null): string
    {
        if (is_array($label)) {
            $options = $label;
        } elseif ($label) {
            $options = ['label' => $label];
        } else {
            $options = [];
        }

        return $this->render($options);
    }

    public function render(iterable $options): string
    {
        $label = $this->renderSpinnerLabel($options);

        $container = $this->renderSpinnerContainer($label, $options);

        return $this->renderSpinnerWithPlacement($label, $container, $options);
    }

    protected function renderSpinnerLabel(iterable $options): string
    {
        $labelContent = $options['label'] ?? '';
        $showLabel = !empty($options['show_label']);

        if (!$labelContent) {
            return '';
        }

        if ($showLabel) {
            return $this->getView()->plugin('htmlElement')->__invoke(
                'strong',
                [],
                $labelContent
            );
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'span',
            ['class' => 'visually-hidden'],
            $labelContent
        );
    }

    protected function renderSpinnerContainer(string $label, iterable $options): string
    {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($options['attributes'] ?? [])
            ->merge(['role' => 'status']);

        $classes = [];

        $typeClass = $this->getView()->plugin('htmlClass')->getPrefixedClass($options['type'] ?? 'border', 'spinner');
        $classes[] = $typeClass;

        if (!empty($options['size'])) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $options['size'],
                    $typeClass
                )
            );
        }

        if (!empty($options['variant'])) {
            $attributes['class']->merge(
                $this->getView()->plugin('htmlClass')->plugin('variant')->getClassesFromOption(
                    $options['variant'],
                    'text'
                )
            );
        }

        if (!empty($options['margin'])) {
            $classes[] = $this->getView()->plugin('htmlClass')->getPrefixedClass($options['margin'], 'm');
        }

        $placement = $options['placement'] ?? null;
        $showLabel = !empty($options['show_label']);

        if ($placement == static::PLACEMENT_CENTER) {
            if ($showLabel) {
                $classes[] = 'ms-auto';
            }
        } elseif ($placement == static::PLACEMENT_END) {
            $classes[] = 'float-end';
        }
        $attributes['class']->merge($classes);

        if (!$label || ($placement === static::PLACEMENT_CENTER && $showLabel)) {
            $attributes['aria-hidden'] = 'true';
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            $options['tag'] ?? 'div',
            $attributes,
            $label && !($placement === static::PLACEMENT_CENTER && $showLabel) ? $label : ''
        );
    }

    protected function renderSpinnerWithPlacement(string $label, string $container, iterable $options): string
    {
        $placement = $options['placement'] ?? null;

        if (!$placement) {
            return $container;
        }

        $showLabel = !empty($options['show_label']);

        $classes = [];
        switch ($placement) {
            case static::PLACEMENT_CENTER:
                $classes[] = 'd-flex';
                if ($label && $showLabel) {
                    $container = $label . PHP_EOL . $container;
                    $classes[] = 'align-items-center';
                } else {
                    $classes[] = 'justify-content-center';
                }

                break;
            case static::PLACEMENT_END:
                $classes[] = 'clearfix';
                break;
            case static::PLACEMENT_TEXT_CENTER:
                $classes[] = 'text-center';
                break;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => $classes],
            $container
        );
    }
}
