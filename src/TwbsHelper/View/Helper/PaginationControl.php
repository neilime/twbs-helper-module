<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering pagination
 */
class PaginationControl extends \Laminas\View\Helper\PaginationControl
{
    use \Laminas\I18n\Translator\TranslatorAwareTrait;

    public const SWAP_OUT_STATE = 'swap_out';

    /**
     * Default view partial
     *
     * @var string|array
     */
    protected static $defaultViewPartial = 'TwbsHelper/pagination_control';

    public function renderPageItem(
        $route,
        int $page,
        ?int $current = null,
        $activeStates = null
    ): string {
        $liAttributes = $this->getView()->plugin('htmlattributes')->__invoke([
            'class' => 'page-item',
        ]);
        $linkAttributes = ['class' => 'page-link'];
        $linkContent = (string)$page;

        $swapout = false;

        if ($page != $current) {
            $linkAttributes['href'] = $this->getView()->plugin('url')->__invoke($route, ['page' => $page]);
        } else {
            $linkAttributes['href'] = '#';
            if ($activeStates) {
                $swapout = $activeStates === self::SWAP_OUT_STATE;
                $liAttributes->merge(['class' => ['active']]);
                $liAttributes['aria-current'] = 'page';
            }
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'li',
            $liAttributes,
            $this->renderLink(
                $this->translate($linkContent),
                $linkAttributes,
                $swapout,
            )
        );
    }

    public function renderNavigationItem(
        $route,
        $link,
        ?int $linkPage = null,
        $disabledStates = false
    ): string {
        $liAttributes = $this->getView()->plugin('htmlattributes')->__invoke(['class' => 'page-item']);

        $linkContent = '';
        if (is_iterable($link)) {
            $linkAttributes = $link;
            if (!empty($linkAttributes['icon'])) {
                $linkContent = $this->getView()->plugin('htmlElement')->__invoke(
                    'span',
                    ['aria-hidden' => 'true'],
                    $linkAttributes['icon'],
                    false
                );
            }
            unset($linkAttributes['icon']);

            if (!empty($linkAttributes['content'])) {
                $linkContent = $this->translate($linkAttributes['content']);
            }
            unset($linkAttributes['content']);
        } else {
            $linkContent = $this->translate($link);
            $linkAttributes = [];
        }

        $swapout = false;

        $linkAttributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($linkAttributes)
            ->merge(['class' => ['page-link']]);

        if ($linkPage !== null) {
            $linkAttributes['href'] = $this->getView()->plugin('url')->__invoke($route, ['page' => $linkPage]);
        } else {
            $linkAttributes['href'] = '#';

            if ($disabledStates) {
                $liAttributes->merge(['class' => ['disabled']]);
                $linkAttributes['tabindex'] = '-1';
                $swapout = $disabledStates === self::SWAP_OUT_STATE;
            }
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'li',
            $liAttributes,
            $this->renderLink(
                $linkContent,
                $linkAttributes,
                $swapout
            )
        );
    }

    protected function renderLink(string $content, iterable $attributes, bool $swapout)
    {
        if ($swapout) {
            unset($attributes['href'], $attributes['tabindex']);
        }
        return $this->getView()->plugin('htmlElement')->__invoke(
            $swapout ? 'span' : 'a',
            $attributes,
            $content
        );
    }

    protected function translate(string $content): string
    {
        if (!$this->hasTranslator()) {
            return $content;
        }
        return $this->getTranslator()->translate($content);
    }
}
