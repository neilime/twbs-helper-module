<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for ordered and unordered lists
 */
class DescriptionList extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'Description List' element. Manage indentation of Xhtml markup
     *
     * @param  array   $items      Array with the elements of the list
     * @param  array   $optionsAndAttributes Attributes for the ol/ul tag.
     * If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param  boolean $escape     Escape the items.
     * @throws \InvalidArgumentException
     * @return \TwbsHelper\View\Helper\DescriptionList|string
     */
    public function __invoke(?array $items = null, iterable $optionsAndAttributes = [], bool $escape = true)
    {
        return $items ? $this->render($items, $optionsAndAttributes, $escape) : $this;
    }

    /**
     * Generates a 'Description List' element. Manage indentation of Xhtml markup
     *
     * @param  array   $items      Array with the elements of the list
     * @param  array   $optionsAndAttributes Attributes for the ol/ul tag.
     * If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param  boolean $escape     Escape the items.
     * @throws \InvalidArgumentException
     * @return string The list XHTML.
     */
    public function render(array $items, iterable $optionsAndAttributes = [], bool $escape = true)
    {
        if (empty($items)) {
            throw new \InvalidArgumentException('Argument "$items" must not be empty');
        }

        $listContent = '';
        foreach ($items as $key => $item) {
            $listContent .= ($listContent ? PHP_EOL : '') . $this->renderListItem(
                $key,
                $item,
                $optionsAndAttributes,
                $escape,
            );
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($optionsAndAttributes ?: [])
            ->merge(['class' => ['row']]);

        return $this->renderContainer(
            'dl',
            $attributes,
            $listContent,
            $escape
        );
    }

    protected function renderContainer(
        string $tag,
        iterable $optionsAndAttributes,
        string $listContent,
        bool $escape = true
    ) {
        return $this->getView()->plugin('htmlElement')->__invoke(
            $tag,
            $optionsAndAttributes,
            $listContent,
            $escape
        );
    }

    protected function renderListItem(
        $itemKey,
        $itemValue,
        iterable $optionsAndAttributes = [],
        bool $escape = true
    ): string {

        $termOptionsAndAttributes = [];
        $detailOptionsAndAttributes = [];

        if (is_string($itemKey)) {
            $termOptionsAndAttributes = [
                'data' => $itemKey,
            ];
        }

        if (is_string($itemValue)) {
            $detailOptionsAndAttributes = [
                'data' => $itemValue,
            ];
        } elseif (is_array($itemValue)) {
            if (!empty($itemValue['term'])) {
                if (is_string($itemValue['term'])) {
                    $termOptionsAndAttributes = [
                        'data' => $itemValue['term'],
                    ];
                } elseif (is_array($itemValue['term'])) {
                    $termOptionsAndAttributes = \Laminas\Stdlib\ArrayUtils::merge(
                        $termOptionsAndAttributes,
                        $itemValue['term']
                    );
                } else {
                    throw new \InvalidArgumentException(
                        sprintf(
                            'Argument "%s" expects a string or an array, "%s" given',
                            '$items[' . $itemKey . '][term]',
                            is_object($itemValue['term'])
                                ? get_class($itemValue['term'])
                                : gettype($itemValue['term'])
                        )
                    );
                }
            }

            if (!empty($itemValue['detail'])) {
                if (is_string($itemValue['detail'])) {
                    $detailOptionsAndAttributes = [
                        'data' => $itemValue['detail'],
                    ];
                } elseif (is_array($itemValue['detail'])) {
                    $detailOptionsAndAttributes = \Laminas\Stdlib\ArrayUtils::merge(
                        $detailOptionsAndAttributes,
                        $itemValue['detail']
                    );
                } else {
                    throw new \InvalidArgumentException(
                        sprintf(
                            'Argument "%s" expects a string or an array, "%s" given',
                            '$items[' . $itemKey . '][detail]',
                            is_object($itemValue['detail'])
                                ? get_class($itemValue['detail'])
                                : gettype($itemValue['detail'])
                        )
                    );
                }
            }
        } else {
            throw new \InvalidArgumentException(
                sprintf(
                    'Argument "%s" expects a string or an array, "%s" given',
                    '$items[' . $itemKey . ']',
                    is_object($itemValue) ? get_class($itemValue) : gettype($itemValue)
                )
            );
        }

        $termContent = $this->renderListItemTerm($termOptionsAndAttributes, $optionsAndAttributes, $escape);
        $detailContent = $this->renderListItemDetail($detailOptionsAndAttributes, $optionsAndAttributes, $escape);

        return $termContent . PHP_EOL . $detailContent;
    }

    protected function renderListItemTerm(
        iterable $termOptionsAndAttributes,
        iterable $optionsAndAttributes = [],
        bool $escape = true
    ): string {

        $data = $termOptionsAndAttributes['data'];
        unset($termOptionsAndAttributes['data']);

        $htmlElementHelper = $this->getView()->plugin('htmlElement');

        if ($escape && !$htmlElementHelper->isHTML($data)) {
            $data = $this->getView()->plugin('escapeHtml')->__invoke($data);
        }

        $columSize = $termOptionsAndAttributes['column'] ?? 'sm-3';
        unset($termOptionsAndAttributes['column']);

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($termOptionsAndAttributes ?: [])
            ->merge([
                'class' => $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption(
                    $columSize
                ),
            ]);

        return $htmlElementHelper->__invoke(
            'dt',
            $attributes,
            $data,
            $escape
        );
    }

    protected function renderListItemDetail(
        iterable $detailOptionsAndAttributes,
        iterable $optionsAndAttributes = [],
        bool $escape = true
    ): string {

        $data = $detailOptionsAndAttributes['data'];
        unset($detailOptionsAndAttributes['data']);

        $htmlElementHelper = $this->getView()->plugin('htmlElement');

        if (is_array($data)) {
            $data = $this->__invoke($data, $optionsAndAttributes, $escape);
        } elseif ($escape && !$htmlElementHelper->isHTML($data)) {
            $data = $this->getView()->plugin('escapeHtml')->__invoke($data);
        }

        $columSize = $detailOptionsAndAttributes['column'] ?? 'sm-9';
        unset($detailOptionsAndAttributes['column']);

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($detailOptionsAndAttributes ?: [])
            ->merge([
                'class' => $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption(
                    $columSize
                ),
            ]);

        return $htmlElementHelper->__invoke(
            'dd',
            $attributes,
            $data,
            $escape
        );
    }
}
