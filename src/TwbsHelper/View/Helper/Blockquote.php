<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering blockquotes
 */
class Blockquote extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    protected static $allowedOptions = [
        'tag',
    ];

    /**
     * Generates a 'blockquote' element
     *
     * @param  string  $content           The content of the blockquote
     * @param  string  $footer            The content of the footer of the blockquote. Default : empty
     * @param  array   $attributes        Html attributes of the "<blockquote>" element. Default : empty
     * @param  array   $contentAttributes Html attributes of the "<p>" (content) element. Default : empty
     * @param  array   $footerAttributes  Html attributes of the "<footer>" (footer) element. Default : empty
     * @param  boolean $escape            True espace html content '$content'. Default True
     * @return string The blockquote XHTML.
     */
    public function __invoke(
        string $content,
        string $footer = '',
        iterable $attributes = [],
        iterable $contentAttributes = [],
        iterable $footerAttributes = [],
        iterable $figureAttributes = [],
        bool $escape = true
    ) {

        $htmlattributesHelper = $this->getView()->plugin('htmlattributes');

        $blockquoteContent = $this->renderContent(
            $content,
            $htmlattributesHelper->__invoke($contentAttributes),
            $escape
        );

        $footerAttributes['tag'] = $footerAttributes['tag'] ?? 'figcaption';
        $footerContent = $this->renderFooter(
            $footer,
            $htmlattributesHelper->__invoke($footerAttributes),
            $escape
        );

        $useFigure = $footerAttributes['tag'] === 'figcaption';

        $attributes = $htmlattributesHelper->__invoke($attributes);

        if ($useFigure) {
            return $this->renderContainerWithFigure(
                $blockquoteContent,
                $footerContent,
                $attributes,
                $htmlattributesHelper->__invoke($figureAttributes),
                $escape
            );
        }

        return $this->renderContainerWithoutFigure(
            $blockquoteContent,
            $footerContent,
            $attributes,
            $escape
        );
    }

    protected function renderContent(
        string $content,
        \TwbsHelper\View\HtmlAttributesSet $contentAttributes,
        bool $escape
    ): string {
        if (!$content) {
            return '';
        }

        $tag = $contentAttributes['tag'] ?? 'p';

        $contentAttributes->offsetsUnset(static::$allowedOptions);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $tag,
            $contentAttributes,
            $content,
            $escape
        );
    }

    protected function renderFooter(
        string $footer,
        \TwbsHelper\View\HtmlAttributesSet $footerAttributes,
        bool $escape
    ): string {
        if (!$footer) {
            return '';
        }

        $tag = $footerAttributes['tag'];

        $footerAttributes->merge(['class' => ['blockquote-footer']]);

        $footerAttributes->offsetsUnset(static::$allowedOptions);

        return $this->getView()->plugin('htmlElement')->__invoke(
            $tag,
            $footerAttributes,
            $footer,
            $escape
        );
    }

    protected function renderContainerWithFigure(
        string $blockquoteContent,
        string $footerContent,
        \TwbsHelper\View\HtmlAttributesSet $attributes,
        \TwbsHelper\View\HtmlAttributesSet $figureAttributes,
        bool $escape
    ): string {

        $renderedBlockquote = $this->renderContainer($blockquoteContent, $attributes, $escape);

        if (!$footerContent) {
            return $renderedBlockquote;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            'figure',
            $figureAttributes,
            $renderedBlockquote . PHP_EOL . $footerContent,
            $escape
        );
    }

    protected function renderContainerWithoutFigure(
        string $blockquoteContent,
        string $footerContent,
        \TwbsHelper\View\HtmlAttributesSet $attributes,
        bool $escape
    ): string {

        if ($footerContent) {
            $blockquoteContent = $blockquoteContent .= PHP_EOL . $footerContent;
        }

        return $this->renderContainer($blockquoteContent, $attributes, $escape);
    }

    protected function renderContainer(string $content, \TwbsHelper\View\HtmlAttributesSet $attributes, bool $escape)
    {
        $attributes->merge(['class' => ['blockquote']]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'blockquote',
            $attributes,
            $content,
            $escape
        );
    }
}
