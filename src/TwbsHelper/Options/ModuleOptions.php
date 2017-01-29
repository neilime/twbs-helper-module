<?php

namespace TwbsHelper\Options;

/**
 * Hold options for TwbsHelper module
 */
class ModuleOptions extends \Zend\Stdlib\AbstractOptions {

    /**
     * @var array
     */
    protected $ignoredViewHelpers;

    /**
     * @var array
     */
    protected $classMap;

    /**
     * @var array
     */
    protected $typeMap;

    /**
     * @return array
     */
    public function getIgnoredViewHelpers() {
        return $this->ignoredViewHelpers;
    }

    /**
     * @param array $aIgnoredViewHelpers
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setIgnoredViewHelpers(array $aIgnoredViewHelpers) {
        $this->ignoredViewHelpers = $aIgnoredViewHelpers;
        return $this;
    }

    /**
     * @return array
     */
    public function getClassMap() {
        return $this->classMap;
    }

    /**
     * @param array $aClassMap
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setClassMap(array $aClassMap) {
        $this->classMap = $aClassMap;
        return $this;
    }

    /**
     * @return array
     */
    public function getTypeMap() {
        return $this->typeMap;
    }

    /**
     * @param array $aTypeMap
     * @return \TwbsHelper\Options\ModuleOptions
     */
    public function setTypeMap(array $aTypeMap) {
        $this->typeMap = $aTypeMap;
        return $this;
    }

}
