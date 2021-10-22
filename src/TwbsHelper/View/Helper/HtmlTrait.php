<?php

namespace TwbsHelper\View\Helper;

trait HtmlTrait
{
    use \TwbsHelper\View\Helper\StyleAttributeTrait;
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    protected $indentation = '    ';

    public function htmlElement(
        string $tag,
        iterable $attributes = [],
        string $content = null,
        bool $escape = true
    ): string {

        $attributes = $this->attributesToString($attributes, $tag);

        $elementContent = '<' . $tag . $attributes;
        if ($content === null) {
            return $elementContent . $this->getView()->plugin('HtmlTag')->getClosingBracket();
        }

        if ($escape && !$this->isHTML($content)) {
            $content = $this->getView()->plugin('escapeHtml')->__invoke($content);
        }

        $tag = strtolower($tag);

        $forceIndentation = in_array(
            $tag,
            ['div', 'blockquote', 'figure', 'ul', 'fieldset', 'nav'],
            true
        );

        return sprintf(
            '<%s%s>%s</%s>',
            $tag,
            $attributes,
            $this->addProperIndentation($content, $forceIndentation),
            $tag
        );
    }

    public function addProperIndentation(
        string $content,
        bool $forceIndentation = false,
        string $indentation = null
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

    public function removeIndentation(string $content): string
    {
        return implode(PHP_EOL, array_map('ltrim', explode(
            PHP_EOL,
            $content
        )));
    }

    protected function isHTML(string $string): bool
    {
        return $string !== strip_tags($string);
    }

    public function attributesToString(iterable $attributes, string $tag): string
    {
        // Clean attributes
        if (!empty($attributes['class'])) {
            $attributes = $this->setClassesToAttributes($attributes);
        }

        if (!empty($attributes['style'])) {
            $attributes = $this->setStylesToAttributes($attributes);
        }

        if (!is_array($attributes)) {
            $attributes = iterator_to_array($attributes);
        }

        ksort($attributes);

        $possibleHelpers = [
            [$this, 'createAttributesString'],
            [$this, 'htmlAttribs'],
        ];
        if ($tag === 'button') {
            array_unshift(
                $possibleHelpers,
                [$this->getView()->plugin('formButton'), 'createAttributesString']
            );
        }

        foreach ($possibleHelpers as $possibleHelper) {
            if (!is_callable($possibleHelper)) {
                continue;
            }

            try {
                $markup = trim(call_user_func($possibleHelper, $attributes));
                return $markup ? ' ' . $markup : '';
            } catch (\Throwable $throwable) {
                if ($throwable instanceof \BadMethodCallException) {
                    continue;
                }

                throw $throwable;
            }
        }

        $helper = $this->getView()->plugin('HtmlTag');
        $reflectionClass = new \ReflectionClass($helper);
        $reflectionMethod = $reflectionClass->getMethod('htmlAttribs');
        $reflectionMethod->setAccessible(true);

        $markup = trim($reflectionMethod->invoke($helper, $attributes));
        return $markup ? ' ' . $markup : '';
    }
}
