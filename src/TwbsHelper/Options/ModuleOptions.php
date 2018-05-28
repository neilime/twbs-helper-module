<?php
namespace TwbsHelper\Options;

use Zend\Stdlib\AbstractOptions;


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
    protected $classMap;

    // @var array
    protected $typeMap;

    /**
     * getIgnoredViewHelpers 
     * 
     * @access public
     * @return array
     */
    public function getIgnoredViewHelpers() {
        return $this->ignoredViewHelpers;
    }


    /**
     * setIgnoredViewHelpers 
     * 
     * @param array $aIgnoredViewHelpers 
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setIgnoredViewHelpers(array $aIgnoredViewHelpers) {
        $this->ignoredViewHelpers = $aIgnoredViewHelpers;

        return $this;
    }


    /**
     * getClassMap 
     * 
     * @access public
     * @return array
     */
    public function getClassMap() {
        return $this->classMap;
    }


    /**
     * setClassMap 
     * 
     * @param array $aClassMap 
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setClassMap(array $aClassMap) {
        $this->classMap = $aClassMap;

        return $this;
    }


    /**
     * getTypeMap 
     * 
     * @access public
     * @return array
     */
    public function getTypeMap() {
        return $this->typeMap;
    }


    /**
     * setTypeMap 
     * 
     * @param array $aTypeMap 
     * @access public
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setTypeMap(array $aTypeMap) {
        $this->typeMap = $aTypeMap;

        return $this;
    }
}

