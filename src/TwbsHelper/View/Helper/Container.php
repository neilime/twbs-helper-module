<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for rendering containers
 */
class Container extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    /**
     * Generates a 'container' element
     *
     * @param string  $content    The content of the abbreviation
     * @param bool|string  $container  The type of container
     * @param iterable   $attributes Html attributes of the "<abbr>" element
     * @param bool    $escape     True espace html content '$content'. Default True
     * @return string The container XHTML.
     */
    public function __invoke(
        string $content,
        $container = true,
        iterable $attributes = [],
        bool $escape = true
    ) {
        switch (true) {
            case $container === true:
                $containerClasses = ['container'];
                break;
            case $container === 'fluid':
                $containerClasses = ['container-' . $container];
                break;
            default:
                $containerClasses = $this->getView()->plugin('htmlClass')->plugin('size')->getClassesFromOption(
                    $container,
                    'container'
                );
                break;
        }

        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->merge(['class' => $containerClasses]);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }
}
