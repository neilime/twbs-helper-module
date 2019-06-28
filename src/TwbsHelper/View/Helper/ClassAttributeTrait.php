<?php
namespace TwbsHelper\View\Helper;

trait ClassAttributeTrait
{
    protected function getClassesAttribute(string $sClassAttribute, $bCleanClasses = true): array
    {
        $aClasses = explode(' ', $sClassAttribute);
        return $bCleanClasses ? $this->cleanClassesAttribute($aClasses) : $aClasses;
    }

    protected function addClassesAttribute(string $sClassAttribute, array $aClasses): array
    {
        return $this->cleanClassesAttribute(array_merge(
            $this->getClassesAttribute($sClassAttribute, false),
            $aClasses
        ));
    }

    protected function cleanClassesAttribute(array $aClasses): array
    {
        $aClasses = array_unique(array_filter($aClasses, function ($sClass) {
            return !!trim($sClass);
        }));
        sort($aClasses);
        return $aClasses;
    }
}
