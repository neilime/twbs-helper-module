<?php

namespace TwbsHelper\Form\View;

use Laminas\Form\ElementInterface;
use ReflectionMethod;

trait ElementHelperTrait
{
    protected function prepareAttributes(array $attributes): array
    {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($attributes)->getArrayCopy();

        $parentClass = get_parent_class($this);
        if ($parentClass === false) {
            return $attributes;
        }

        $prepareAttributesMethod = new ReflectionMethod($parentClass, 'prepareAttributes');

        return $prepareAttributesMethod->invoke($this, $attributes);
    }

    protected function setClassesToElement(
        ElementInterface $element,
        iterable $addClasses = [],
        iterable $removeClasses = []
    ): ElementInterface {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($element->getAttributes());

        if ($addClasses) {
            $attributes->merge(['class' => $addClasses]);
        }

        if ($removeClasses && $attributes->offsetExists('class')) {
            $classAttributeSet = $attributes->offsetGet('class');
            foreach ($removeClasses as $removeClass) {
                $classAttributeSet->remove($removeClass);
            }
        }

        return $element->setAttributes($attributes);
    }
}
