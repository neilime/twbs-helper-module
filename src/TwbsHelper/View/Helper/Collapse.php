<?php

namespace TwbsHelper\View\Helper;

/**
 * Helper for Collapse
 */
class Collapse extends \TwbsHelper\View\Helper\AbstractHtmlElement
{
    protected static $allowedOptions = ['show', 'horizontal', 'triggers', 'targets'];

    /**
     * Render
     * @param iterable $options Array with the options to render collapse.
     * @param boolean $escape Escape the items.
     * @return string The group XHTML.
     */
    public function __invoke(
        iterable $options,
        bool $escape = true
    ): string {

        $isShown = !empty($options['show']);
        $horizontal = $options['horizontal'] ?? false;

        $triggers = $this->prepareTriggersSpec(
            $options['triggers'] ?? [],
        );

        $targets = $this->prepareTargetsSpec(
            $options['targets'] ?? [],
            $isShown,
            $horizontal
        );

        $triggerContent = $this->renderTriggers($triggers, $targets, $isShown, $escape);
        $targetContent = $this->renderTargets($targets, $escape);

        if (is_iterable($horizontal)) {
            $targetContent = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                $horizontal,
                $targetContent
            );
        }

        return $triggerContent . PHP_EOL . $targetContent;
    }

    protected function prepareTriggersSpec($triggers): iterable
    {
        if (\Laminas\Stdlib\ArrayUtils::isList($triggers)) {
            $triggers = ['items' => $triggers];
        }

        $triggerItems = [];
        foreach ($triggers['items'] ?? [] as $trigger) {
            $triggerItems[] = $this->prepareTriggerSpec($trigger);
        }

        $triggers['items'] = $triggerItems;

        $triggers['tag'] ??= 'p';
        $triggers['attributes'] ??= [];

        return $triggers;
    }

    protected function prepareTriggerSpec($trigger): iterable
    {
        if (!$trigger) {
            $trigger = ['content' => '', 'attributes' => []];
        } elseif (is_scalar($trigger)) {
            $trigger = ['content' => $trigger, 'attributes' => []];
        } elseif (is_iterable($trigger)) {
            if (empty($trigger['attributes'])) {
                $trigger['attributes'] = [];
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                '"trigger" option expects a scalar or an iterable value, "%s" given',
                is_object($trigger)
                    ? get_class($trigger)
                    : gettype($trigger)
            ));
        }

        return $trigger;
    }

    protected function prepareTargetsSpec($targets, bool $isShown, $horizontal): iterable
    {
        if (\Laminas\Stdlib\ArrayUtils::isList($targets)) {
            $targets = ['items' => $targets];
        }

        $targetItems = [];
        foreach ($targets['items'] ?? [] as $target) {
            $targetItems[] = $this->prepareTargetSpec($target, $isShown, $horizontal);
        }

        $targets['items'] = $targetItems;

        return $targets;
    }

    protected function prepareTargetSpec($target, bool $isShown, $horizontal): iterable
    {
        if (!$target) {
            $target = ['content' => '', 'attributes' => []];
        } elseif (is_scalar($target)) {
            $target = ['content' => $target, 'attributes' => []];
        } elseif (is_iterable($target)) {
            if (empty($target['attributes'])) {
                $target['attributes'] = [];
            }
        } else {
            throw new \InvalidArgumentException(sprintf(
                '"target" option expects a scalar or an iterable value, "%s" given',
                is_object($target)
                    ? get_class($target)
                    : gettype($target)
            ));
        }

        if (empty($target['attributes']['id'])) {
            $target['attributes']['id'] = uniqid('collapse');
        }

        $target['attributes'] = $this->getView()->plugin('htmlattributes')
            ->__invoke($target['attributes'])
            ->merge(['class' => ['collapse']]);


        if ($isShown) {
            $target['attributes']->merge(['class' => ['show']]);
        }

        if ($horizontal) {
            $target['attributes']->merge(['class' => ['collapse-horizontal']]);
        }

        return $target;
    }

    protected function renderTriggers(
        iterable $triggers,
        iterable $targets,
        bool $isShown,
        bool $escape
    ): string {
        $content = '';
        foreach ($triggers['items'] as $key => $trigger) {
            $collapseId = $this->getCollapseId($key, $targets);

            $triggerContent = $this->renderTrigger($trigger, $collapseId, $isShown);
            if ($content) {
                $content .= PHP_EOL;
            }
            $content .= $triggerContent;
        }

        if (!$content) {
            return $content;
        }

        return $this->getView()->plugin('htmlElement')->__invoke(
            $triggers['tag'],
            $triggers['attributes'],
            $content,
            $escape
        );
    }

    protected function getCollapseId($key, iterable $targets): string
    {
        if (!empty($targets['items'][$key]['attributes']['id'])) {
            return $targets['items'][$key]['attributes']['id'];
        }

        if (!empty($targets['items'][0]['attributes']['id'])) {
            return $targets['items'][0]['attributes']['id'];
        }

        return uniqid('collapse');
    }

    protected function renderTrigger(
        iterable $trigger,
        string $collapseId,
        bool $isShown
    ): string {

        $triggerAttributes = [
            'data-bs-toggle' => 'collapse',
            'aria-controls' => $collapseId,
            'aria-expanded' => $isShown ? 'true' : 'false',
        ];

        $target = '#' . $collapseId;
        $isLinkWithHref = isset($trigger['options']['tag']) && $trigger['options']['tag'] === 'a';
        if ($isLinkWithHref) {
            $triggerAttributes['href'] = $target;
        } else {
            $triggerAttributes['data-bs-target'] = $target;
        }

        $trigger['attributes'] = $this->getView()->plugin('htmlattributes')
            ->__invoke($trigger['attributes'] ?? [])
            ->merge($triggerAttributes);

        return $this->getView()->plugin('formButton')->renderSpec(
            $trigger,
            empty($trigger['options']['label']) ? '' : null
        );
    }

    protected function renderTargets(iterable $targets, bool $escape): string
    {
        $content = '';
        foreach ($targets['items'] as $target) {
            $targetContent = $this->renderTarget($target, $escape);
            if ($content) {
                $content .= PHP_EOL;
            }
            $content .= $targetContent;
        }

        $hasColumn = !empty($targets['column'])
            || array_reduce($targets['items'], function ($hasColumn, $target) {
                return $hasColumn || !empty($target['column']);
            });

        if ($hasColumn) {
            $attributes = $this->getView()->plugin('htmlattributes')
                ->__invoke($targets['attributes'] ?? [])
                ->merge(['class' => 'row']);

            $content = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                $attributes,
                $content,
                $escape
            );
        }

        return $content;
    }

    protected function renderTarget(iterable $target, bool $escape): string
    {
        $content = $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $target['attributes'],
            $target['content'] ?? '',
            $escape
        );

        if (!empty($target['column'])) {
            $content = $this->getView()->plugin('htmlElement')->__invoke(
                'div',
                [
                    'class' => $this->getView()->plugin('htmlClass')->plugin('column')->getClassesFromOption(
                        $target['column']
                    ),
                ],
                $content,
                $escape
            );
        }

        return $content;
    }

    protected function renderContainer(string $content, iterable $attributes, bool $escape): string
    {
        $attributes = $this->getView()->plugin('htmlattributes')
            ->__invoke($attributes)
            ->offsetsUnset(static::$allowedOptions);

        return $this->getView()->plugin('htmlElement')->__invoke(
            'div',
            $attributes,
            $content,
            $escape
        );
    }
}
