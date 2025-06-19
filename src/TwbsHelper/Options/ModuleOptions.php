<?php

namespace TwbsHelper\Options;

use Laminas\Stdlib\AbstractOptions;

/**
 * ModuleOptions
 * Hold options for TwbsHelper module
 *
 * @uses AbstractOptions
 */
class ModuleOptions extends AbstractOptions
{
    // @var array
    protected $ignoredViewHelpers = [];

    // @var array
    protected $validTagAttributes = [];

    // @var array
    protected $validTagAttributePrefixes = [];

    // @var array
    protected $classMap = [];

    // @var array
    protected $typeMap = [];

    // @var string
    protected $defaultRowSpacingClass;

    /**
     * @return string
     */
    public function getDefaultRowSpacingClass(): string
    {
        return $this->defaultRowSpacingClass;
    }

    /**
     * @param string $defaultRowSpacingClass
     * @return ModuleOptions
     */
    public function setDefaultRowSpacingClass(string $defaultRowSpacingClass): ModuleOptions
    {
        $this->defaultRowSpacingClass = $defaultRowSpacingClass;

        return $this;
    }

    /**
     * @return array
     */
    public function getIgnoredViewHelpers(): array
    {
        return $this->ignoredViewHelpers;
    }

    /**
     * @param  array $ignoredViewHelpers
     * @return ModuleOptions
     */
    public function setIgnoredViewHelpers(array $ignoredViewHelpers): ModuleOptions
    {
        $this->ignoredViewHelpers = $ignoredViewHelpers;

        return $this;
    }

    /**
     * @return array
     */
    public function getValidTagAttributes(): array
    {
        return $this->validTagAttributes;
    }

    /**
     * @param  array $validTagAttributes
     * @return ModuleOptions
     */
    public function setValidTagAttributes(array $validTagAttributes): ModuleOptions
    {
        $this->validTagAttributes = $validTagAttributes;

        return $this;
    }

    /**
     * @return array
     */
    public function getValidTagAttributePrefixes(): array
    {
        return $this->validTagAttributePrefixes;
    }

    /**
     * @param  array $validTagAttributePrefixes
     * @return ModuleOptions
     */
    public function setValidTagAttributePrefixes(array $validTagAttributePrefixes): ModuleOptions
    {
        $this->validTagAttributePrefixes = $validTagAttributePrefixes;

        return $this;
    }

    /**
     * @return array
     */
    public function getClassMap(): array
    {
        return $this->classMap;
    }

    /**
     * @param  array $classMap
     * @return ModuleOptions
     */
    public function setClassMap(array $classMap): ModuleOptions
    {
        $this->classMap = $classMap;

        return $this;
    }

    /**
     * @return array
     */
    public function getTypeMap(): array
    {
        return $this->typeMap;
    }

    /**
     * @param  array $typeMap
     * @return ModuleOptions
     */
    public function setTypeMap(array $typeMap): ModuleOptions
    {
        $this->typeMap = $typeMap;

        return $this;
    }
}
