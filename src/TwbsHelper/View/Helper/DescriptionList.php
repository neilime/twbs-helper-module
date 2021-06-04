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
     * @param  array   $aItems      Array with the elements of the list
     * @param  array   $aOptionsAndAttributes Attributes for the ol/ul tag.
     * If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param  boolean $bEscape     Escape the items.
     * @throws \InvalidArgumentException
     * @return \TwbsHelper\View\Helper\DescriptionList|string
     */
    public function __invoke(array $aItems = null, iterable $aOptionsAndAttributes = [], bool $bEscape = true)
    {
        return $aItems ? $this->render($aItems, $aOptionsAndAttributes, $bEscape) : $this;
    }

    /**
     * Generates a 'Description List' element. Manage indentation of Xhtml markup
     *
     * @param  array   $aItems      Array with the elements of the list
     * @param  array   $aOptionsAndAttributes Attributes for the ol/ul tag.
     * If class attributes contains "list-inline", so the li will have the class "list-inline-item"
     * @param  boolean $bEscape     Escape the items.
     * @throws \InvalidArgumentException
     * @return string The list XHTML.
     */
    public function render(array $aItems, iterable $aOptionsAndAttributes = [], bool $bEscape = true)
    {
        if (empty($aItems)) {
            throw new \InvalidArgumentException('Argument "$aItems" must not be empty');
        }

        $sListContent = '';
        foreach ($aItems as $sKey => $sItem) {
            $sListContent .= ($sListContent ? PHP_EOL : '') . $this->renderListItem(
                $sKey,
                $sItem,
                $aOptionsAndAttributes,
                $bEscape,
            );
        }

        return $this->renderContainer(
            'dl',
            $this->setClassesToAttributes($aOptionsAndAttributes, ['row']),
            $sListContent,
            $bEscape
        );
    }

    protected function renderContainer(
        string $sTag,
        iterable $aOptionsAndAttributes,
        string $sListContent,
        bool $bEscape = true
    ) {
        return $this->htmlElement(
            $sTag,
            $aOptionsAndAttributes,
            $sListContent,
            $bEscape
        );
    }

    protected function renderListItem(
        $sItemKey,
        $sItemValue,
        iterable $aOptionsAndAttributes = [],
        bool $bEscape = true
    ): string {

        $aTermOptionsAndAttributes = [];
        $aDetailOptionsAndAttributes = [];

        if (is_string($sItemKey)) {
            $aTermOptionsAndAttributes = [
                'data' => $sItemKey,
            ];
        }

        if (is_string($sItemValue)) {
            $aDetailOptionsAndAttributes = [
                'data' => $sItemValue
            ];
        } elseif (is_array($sItemValue)) {
            if (!empty($sItemValue['term'])) {
                if (is_string($sItemValue['term'])) {
                    $aTermOptionsAndAttributes = [
                        'data' => $sItemValue['term'],
                    ];
                } elseif (is_array($sItemValue['term'])) {
                    $aTermOptionsAndAttributes = \Laminas\Stdlib\ArrayUtils::merge(
                        $aTermOptionsAndAttributes,
                        $sItemValue['term']
                    );
                } else {
                    throw new \InvalidArgumentException(
                        sprintf(
                            'Argument "%s" expects a string or an array, "%s" given',
                            '$aItems[' . $sItemKey . '][term]',
                            is_object($sItemValue['term'])
                                ? get_class($sItemValue['term'])
                                : gettype($sItemValue['term'])
                        )
                    );
                }
            }

            if (!empty($sItemValue['detail'])) {
                if (is_string($sItemValue['detail'])) {
                    $aDetailOptionsAndAttributes = [
                        'data' => $sItemValue['detail'],
                    ];
                } elseif (is_array($sItemValue['detail'])) {
                    $aDetailOptionsAndAttributes = \Laminas\Stdlib\ArrayUtils::merge(
                        $aDetailOptionsAndAttributes,
                        $sItemValue['detail']
                    );
                } else {
                    throw new \InvalidArgumentException(
                        sprintf(
                            'Argument "%s" expects a string or an array, "%s" given',
                            '$aItems[' . $sItemKey . '][detail]',
                            is_object($sItemValue['detail'])
                                ? get_class($sItemValue['detail'])
                                : gettype($sItemValue['detail'])
                        )
                    );
                }
            }
        } else {
            throw new \InvalidArgumentException(
                sprintf(
                    'Argument "%s" expects a string or an array, "%s" given',
                    '$aItems[' . $sItemKey . ']',
                    is_object($sItemValue) ? get_class($sItemValue) : gettype($sItemValue)
                )
            );
        }

        $sTermContent = $this->renderListItemTerm($aTermOptionsAndAttributes, $aOptionsAndAttributes, $bEscape);
        $sDetailContent = $this->renderListItemDetail($aDetailOptionsAndAttributes, $aOptionsAndAttributes, $bEscape);

        return $sTermContent . PHP_EOL . $sDetailContent;
    }

    protected function renderListItemTerm(
        iterable $aTermOptionsAndAttributes,
        iterable $aOptionsAndAttributes = [],
        bool $bEscape = true
    ): string {

        $sData = $aTermOptionsAndAttributes['data'];
        unset($aTermOptionsAndAttributes['data']);

        if ($bEscape && !$this->isHTML($sData)) {
            $sData = $this->getView()->plugin('escapeHtml')->__invoke($sData);
        }

        $sColumSize = $aTermOptionsAndAttributes['column'] ?? 'sm-3';
        unset($aTermOptionsAndAttributes['column']);

        return $this->htmlElement(
            'dt',
            $this->setClassesToAttributes(
                $aTermOptionsAndAttributes ?? [],
                [$this->getColumnClass($sColumSize)],
            ),
            $sData,
            $bEscape
        );
    }

    protected function renderListItemDetail(
        iterable $aDetailOptionsAndAttributes,
        iterable $aOptionsAndAttributes = [],
        bool $bEscape = true
    ): string {

        $sData = $aDetailOptionsAndAttributes['data'];
        unset($aDetailOptionsAndAttributes['data']);

        if (is_array($sData)) {
            $sData = $this->__invoke($sData, $aOptionsAndAttributes, $bEscape);
        } elseif ($bEscape && !$this->isHTML($sData)) {
            $sData = $this->getView()->plugin('escapeHtml')->__invoke($sData);
        }

        $sColumSize = $aDetailOptionsAndAttributes['column'] ?? 'sm-9';
        unset($aDetailOptionsAndAttributes['column']);

        return $this->htmlElement(
            'dd',
            $this->setClassesToAttributes(
                $aDetailOptionsAndAttributes ?? [],
                [$this->getColumnClass($sColumSize)],
            ),
            $sData,
            $bEscape
        );
    }
}
