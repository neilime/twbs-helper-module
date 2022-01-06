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
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setIgnoredViewHelpers(array $ignoredViewHelpers)
    {
        $this->ignoredViewHelpers = $ignoredViewHelpers;

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
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setValidTagAttributes(array $validTagAttributes)
    {
        $this->validTagAttributes = $validTagAttributes;

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
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setValidTagAttributePrefixes(array $validTagAttributePrefixes)
    {
        $this->validTagAttributePrefixes = $validTagAttributePrefixes;

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
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setClassMap(array $classMap)
    {
        $this->classMap = $classMap;

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
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setTypeMap(array $typeMap)
    {
        $this->typeMap = $typeMap;

        return $this;
    }
}
