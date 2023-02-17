<?php

namespace TwbsHelper\Form\View;

trait ElementHelperTrait
{
    protected function prepareAttributes(array $attributes): array
    {
        $attributes = $this->getView()->plugin('htmlattributes')->__invoke($attributes)->getArrayCopy();

        $callParentPrepareAttributes = parent::class . '::prepareAttributes';
        if (is_callable($callParentPrepareAttributes)) {
            $attributes = call_user_func($callParentPrepareAttributes, $attributes);
        }

        return $attributes;
    }

    protected function setClassesToElement(
        \Laminas\Form\ElementInterface $element,
        iterable $addClasses = [],
        iterable $removeClasses = []
    ): \Laminas\Form\ElementInterface {
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
