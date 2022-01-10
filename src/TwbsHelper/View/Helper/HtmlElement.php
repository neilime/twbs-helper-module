<?php

namespace TwbsHelper\View\Helper;

class HtmlElement extends \Laminas\View\Helper\AbstractHtmlElement
{
    protected $htmlElementFormat = '<%s%s>%s</%s>';

    protected $indentation = '    ';

    protected $forcedIndentationTags = [
        'div',
        'blockquote',
        'figure',
        'ul',
        'fieldset',
        'nav'
    ];

    /**
     * Generates an 'html' element
     *
     * @param  string  $tag     The tag of the element
     * @param  iterable   $attributes  Html attributes of the element
     * @param  string  $content     The content of the alert
     * @param  boolean $escape      True espace html content '$content'. Default True
     * @return string The element XHTML.
     */
    public function __invoke(
        string $tag,
        iterable $attributes = [],
        string $content = null,
        bool $escape = true
    ): string {

        $attributes = $this->htmlAttribs($attributes);

        $elementContent = '<' . $tag . $attributes;
        if ($content === null) {
            return $elementContent . $this->getClosingBracket();
        }

        if ($escape && !$this->isHTML($content)) {
            $content = $this->getView()->plugin('escapeHtml')->__invoke($content);
        }

        $tag = strtolower($tag);

        $forceIndentation = in_array(
            $tag,
            $this->forcedIndentationTags,
            true
        );

        return sprintf(
            $this->htmlElementFormat,
            $tag,
            $attributes,
            $this->addProperIndentation($content, $forceIndentation),
            $tag
        );
    }

    public function addProperIndentation(
        string $content,
        bool $forceIndentation = false,
        int $indentation = null
    ): string {

        if (!$content) {
            return $content;
        }

        // Divs must start on  new line
        $content = preg_replace('/<\/div>([^\s].*)/', '</div>' . PHP_EOL . '$1', $content);

        $lines = explode(
            PHP_EOL,
            $content
        );

        if (count($lines) === 1 && !$forceIndentation) {
            return $content;
        }

        if ($indentation === null) {
            $indentation = $this->indentation;
        } else {
            $indentation = str_repeat($this->indentation, $indentation);
        }


        $content = '';
        $shouldIndent = true;
        foreach ($lines as $line) {
            if ($line && $shouldIndent) {
                $line = $indentation . $line;
            }

            $isStartOfTextArea = !!preg_match('/<textarea[^>]*>/i', $line);
            if ($isStartOfTextArea) {
                $shouldIndent = false;
            }

            $isEndOfTextArea = !!preg_match('/<\/textarea[^>]*>/i', $line);
            if ($isEndOfTextArea) {
                $shouldIndent = true;
            }

            $content .= $line . PHP_EOL;
        }

        return PHP_EOL . $content;
    }

    protected function removeIndentation(string $content): string
    {
        return implode(PHP_EOL, array_map('ltrim', explode(
            PHP_EOL,
            $content
        )));
    }

    public function isHTML(string $string): bool
    {
        return $string !== strip_tags($string);
    }

    /**
     * Converts an associative array to a string of tag attributes.
     *
     * @param array $attribs From this array, each key-value pair is
     * converted to an attribute name and value.
     *
     * @return string The XHTML for the attributes.
     */
    protected function htmlAttribs($attribs)
    {
        foreach ((array) $attribs as $key => $val) {
            if ('id' == $key) {
                $attribs[$key] = $this->normalizeId($val);
            }
        }

        $attribs = $this->getView()->plugin('htmlAttributes')($attribs);

        return (string) $attribs;
    }
}
