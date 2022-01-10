<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for Accordion
 */
class Accordion extends \TwbsHelper\View\Helper\AbstractGroup
{
    protected static $groupClass = 'accordion';

    protected static $groupTag = 'div';

    protected static $allowedOptions = ['flush', 'always_open'];
    protected static $allowedItemOptions = ['show'];

    protected function prepareAttributes(iterable $optionsAndAttributes): \TwbsHelper\View\HtmlAttributesSet
    {
        $attributes = parent::prepareAttributes($optionsAndAttributes);
        if (isset($optionsAndAttributes['flush'])) {
            $attributes->merge(['class' => ['accordion-flush']]);
        }
        return $attributes;
    }

    protected function renderGroupItem(
        $itemKey,
        $itemSpec,
        iterable $attributes,
        iterable $options,
        bool $escape
    ): string {
        $isShown = $attributes['show'] ?? $itemKey === 0;

        $header = $this->prepareHeaderSpec(
            $itemSpec['header'] ?? '',
            $itemKey,
            $isShown
        );
        $headingId = $header['attributes']['id'];

        $parentId = isset($options['id']) && empty($options['always_open']) ? $options['id'] : '';

        $body = $this->prepareBodySpec(
            $itemSpec['body'] ?? '',
            $itemKey,
            $parentId,
            $headingId,
            $isShown
        );

        $bodyContent = $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            ['class' => 'accordion-body'],
            $body['content'] ?? '',
            $escape
        );
        $body['content'] = $bodyContent;

        $content = $this->getView()->plugin('collapse')->__invoke([
            'show' => $isShown,
            'triggers' => $header,
            'targets' => ['items' => [$body]],
        ]);

        return $this->renderContainer($content, $attributes, $escape);
    }

    protected function prepareHeaderSpec($header, $itemKey, bool $isShown): iterable
    {
        $headerSpec = [
            'tag' => 'h2',
            'attributes' => [
                'class' => 'accordion-header',
            ],
            'items' => [
                [
                    'options' => [
                        'disable_twbs' => true,
                    ],
                    'attributes' => ['class' => 'accordion-button'],
                ],
            ],
        ];

        if (is_scalar($header)) {
            $headerSpec['items'][0]['options']['label'] = $header;
        } elseif (is_iterable($header)) {
            $headerSpec = \Laminas\Stdlib\ArrayUtils::merge(
                $headerSpec,
                \Laminas\Stdlib\ArrayUtils::iteratorToArray($header)
            );
        } elseif ($header) {
            throw new \InvalidArgumentException(sprintf(
                'Item "header" option expects a scalar or an iterable value, "%s" given',
                is_object($header)
                    ? get_class($header)
                    : gettype($header)
            ));
        }




        if (!$isShown) {
            $headerSpec['items'][0]['attributes'] = $this->getView()->plugin('htmlattributes')
                ->__invoke($headerSpec['items'][0]['attributes'])
                ->merge(['class' => ['collapsed']]);
        }

        if (empty($header['attributes']['id'])) {
            $header['attributes']['id'] = 'heading' . $itemKey;
        }

        $headerSpec['attributes'] = $this->getView()->plugin('htmlattributes')
            ->__invoke($headerSpec['attributes'])
            ->merge(['class' => ['accordion-header']]);

        return $headerSpec;
    }

    protected function prepareBodySpec($body, $itemKey, string $parentId, string $headingId, bool $isShown): iterable
    {
        if (!$body) {
            $body = ['content' => '', 'attributes' => []];
        } elseif (is_scalar($body)) {
            $body = ['content' => $body, 'attributes' => []];
        } elseif (is_iterable($body)) {
            if (empty($body['attributes'])) {
                $body['attributes'] = [];
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Item "body" option expects a scalar or an iterable value, "%s" given',
                is_object($body)
                    ? get_class($body)
                    : gettype($body)
            ));
        }

        if ($parentId && empty($body['attributes']['data-bs-parent'])) {
            $body['attributes']['data-bs-parent'] = '#' . $parentId;
        }

        if (empty($body['attributes']['aria-labelledby'])) {
            $body['attributes']['aria-labelledby'] = $headingId;
        }

        $body['attributes'] = $this->getView()->plugin('htmlattributes')
            ->__invoke($body['attributes'])
            ->merge(['class' => ['accordion-collapse']]);

        return $body;
    }

    protected function renderContainer(string $content, iterable $attributes, bool $escape = true): string
    {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->offsetsUnset(static::$allowedItemOptions)
            ->merge(['class' => ['accordion-item']]);

        return $this->getView()->plugin('htmlElement')->__invoke('div', $attributes, $content, $escape);
    }
}
