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
    protected $ignoredViewHelpers;

    // @var array
    protected $validTagAttributes;

    // @var array
    protected $validTagAttributePrefixes;

    // @var array
    protected $classMap;

    // @var array
    protected $typeMap;

    // @var string
    protected $defaultRowSpacingClass;

    /**
     * getDefaultRowSpacingClass
     *
     * @access public
     * @return array
     */
    public function getDefaultRowSpacingClass()
    {
        return $this->defaultRowSpacingClass;
    }

    /**
     * setDefaultRowSpacingClass
     *
     * @param  strgin $sDefaultRowSpacingClass
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setDefaultRowSpacingClass(string $sDefaultRowSpacingClass)
    {
        $this->defaultRowSpacingClass = $sDefaultRowSpacingClass;
        
        return $this;
    }


    /**
     * getIgnoredViewHelpers
     *
     * @access public
     * @return array
     */
    public function getIgnoredViewHelpers()
    {
        return $this->ignoredViewHelpers;
    }


    /**
     * setIgnoredViewHelpers
     *
     * @param  array $aIgnoredViewHelpers
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setIgnoredViewHelpers(array $aIgnoredViewHelpers)
    {
        $this->ignoredViewHelpers = $aIgnoredViewHelpers;

        return $this;
    }


    /**
     * getValidTagAttributes
     *
     * @access public
     * @return array
     */
    public function getValidTagAttributes()
    {
        return $this->validTagAttributes;
    }


    /**
     * setIgnoredViewHelpers
     *
     * @param  array $aValidTagAttributes
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setValidTagAttributes(array $aValidTagAttributes)
    {
        $this->validTagAttributes = $aValidTagAttributes;

        return $this;
    }


    /**
     * getValidTagAttributePrefixes
     *
     * @access public
     * @return array
     */
    public function getValidTagAttributePrefixes()
    {
        return $this->validTagAttributePrefixes;
    }


    /**
     * setValidTagAttributePrefixes
     *
     * @param  array $aValidTagAttributePrefixes
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setValidTagAttributePrefixes(array $aValidTagAttributePrefixes)
    {
        $this->validTagAttributePrefixes = $aValidTagAttributePrefixes;

        return $this;
    }


    /**
     * getClassMap
     *
     * @access public
     * @return array
     */
    public function getClassMap()
    {
        return $this->classMap;
    }


    /**
     * setClassMap
     *
     * @param  array $aClassMap
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setClassMap(array $aClassMap)
    {
        $this->classMap = $aClassMap;

        return $this;
    }


    /**
     * getTypeMap
     *
     * @access public
     * @return array
     */
    public function getTypeMap()
    {
        return $this->typeMap;
    }


    /**
     * setTypeMap
     *
     * @param  array $aTypeMap
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setTypeMap(array $aTypeMap)
    {
        $this->typeMap = $aTypeMap;

        return $this;
    }
}
