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
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setDefaultRowSpacingClass(string $defaultRowSpacingClass): \TwbsHelper\Options\ModuleOptions
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
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setIgnoredViewHelpers(array $ignoredViewHelpers): \TwbsHelper\Options\ModuleOptions
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
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setValidTagAttributes(array $validTagAttributes): \TwbsHelper\Options\ModuleOptions
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
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setValidTagAttributePrefixes(array $validTagAttributePrefixes): \TwbsHelper\Options\ModuleOptions
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
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setClassMap(array $classMap): \TwbsHelper\Options\ModuleOptions
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
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setTypeMap(array $typeMap): \TwbsHelper\Options\ModuleOptions
    {
        $this->typeMap = $typeMap;

        return $this;
    }
}
