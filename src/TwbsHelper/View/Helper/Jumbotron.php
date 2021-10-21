<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering jumbotrons
 */
class Jumbotron extends \TwbsHelper\View\Helper\AbstractHtmlElement
{

    public const JUMBOTRON_TITLE = 'title';
    public const JUMBOTRON_LEAD = 'lead';
    public const JUMBOTRON_TEXT = 'text';
    public const JUMBOTRON_LINK = 'link';
    public const JUMBOTRON_BUTTON = 'button';
    public const JUMBOTRON_DIVIDER = '---';

    /**
     * Generates a 'jumbotron' element
     *
     * @param string|array  $content The content of the alert
     * @param array  $optionsAndAttributes Options & Html attributes
     * @param boolean $escape True espace html content '$content'. Default True
     * @return string The jumbotron XHTML.
     */
    public function __invoke(
        $content,
        array $optionsAndAttributes = [],
        bool $escape = true
    ): string {
        $fluid = !empty($optionsAndAttributes['fluid']);
        unset($optionsAndAttributes['fluid']);
        if ($fluid) {
            $optionsAndAttributes = $this->setClassesToAttributes($optionsAndAttributes, ['jumbotron-fluid']);
        }

        if (is_array($content)) {
            $content = $this->renderJumbotronParts($content, $escape);
        }

        if ($fluid) {
            $content = $this->htmlElement(
                'div',
                ['class' => 'container'],
                $content,
                $escape
            );
        }

        return $this->htmlElement(
            'div',
            $this->setClassesToAttributes($optionsAndAttributes, ['jumbotron']),
            $content,
            $escape
        );
    }

    protected function renderJumbotronParts(array $parts = [], bool $escape = true): string
    {
        $content = '';

        foreach ($parts as $key => $partContent) {
            $type = is_numeric($key) ? self::JUMBOTRON_TEXT : $key;
            if (is_string($partContent)) {
                $options = [];
                if ($partContent === self::JUMBOTRON_DIVIDER) {
                    $type =  self::JUMBOTRON_DIVIDER;
                } else {
                    $options['content'] = $partContent;
                }
            } elseif (is_array($partContent)) {
                $options = $partContent;
            }

            $content .= ($content ? PHP_EOL : '') . $this->renderJumbotronPart(
                $type,
                $options ?? [],
                $escape
            );
        }

        return $content;
    }

    protected function renderJumbotronPart(
        string $type,
        array $options = [],
        bool $escape = true
    ): string {

        $attributes = $options['attributes'] ?? [];
        switch ($type) {
            case self::JUMBOTRON_TITLE:
                $tag = 'h1';
                $attributes = $this->setClassesToAttributes(
                    $attributes,
                    ['display-' . ($options['size'] ?? 4)]
                );
                break;

            case self::JUMBOTRON_LEAD:
                $tag = 'p';
                $attributes = $this->setClassesToAttributes($attributes, ['lead']);
                break;

            case self::JUMBOTRON_TEXT:
                $tag = 'p';
                break;

            case self::JUMBOTRON_BUTTON:
                return $this->getView()->plugin('formButton')->renderSpec($options);

            case self::JUMBOTRON_DIVIDER:
                $tag = 'hr';
                break;

            default:
                throw new \DomainException('Jumbotron part type "' . $type . '" is not supported');
        }


        if (empty($options['content']) && $type !== self::JUMBOTRON_DIVIDER) {
            throw new \DomainException('Jumbotron part type "' . $type . '" expects a content, none given');
        }

        return $this->htmlElement(
            $tag,
            $attributes,
            $options['content'] ?? null,
            $escape
        );
    }
}
