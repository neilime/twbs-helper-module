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
     * @param string $sDefaultRowSpacingClass
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setDefaultRowSpacingClass(string $sDefaultRowSpacingClass): \TwbsHelper\Options\ModuleOptions
    {
        $this->defaultRowSpacingClass = $sDefaultRowSpacingClass;

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
     * @param  array $aIgnoredViewHelpers
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setIgnoredViewHelpers(array $aIgnoredViewHelpers): \TwbsHelper\Options\ModuleOptions
    {
        $this->ignoredViewHelpers = $aIgnoredViewHelpers;

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
     * @param  array $aValidTagAttributes
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setValidTagAttributes(array $aValidTagAttributes): \TwbsHelper\Options\ModuleOptions
    {
        $this->validTagAttributes = $aValidTagAttributes;

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
     * @param  array $aValidTagAttributePrefixes
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setValidTagAttributePrefixes(array $aValidTagAttributePrefixes): \TwbsHelper\Options\ModuleOptions
    {
        $this->validTagAttributePrefixes = $aValidTagAttributePrefixes;

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
     * @param  array $aClassMap
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setClassMap(array $aClassMap): \TwbsHelper\Options\ModuleOptions
    {
        $this->classMap = $aClassMap;

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
     * @param  array $aTypeMap
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setTypeMap(array $aTypeMap): \TwbsHelper\Options\ModuleOptions
    {
        $this->typeMap = $aTypeMap;

        return $this;
    }
}
