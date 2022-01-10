<?php

namespace TwbsHelper\View\Helper\HtmlAttributes;

/**
 * Helper for rendering abbreviations
 */
class HtmlClass extends \Laminas\View\Helper\AbstractHelper
{
    /**
     * Helper plugin manager
     *
     * @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager
     */
    protected $helperPluginManager;

    protected $classSeparator = '-';

    public function getPrefixedClass(string $class, string $prefix): string
    {
        return $prefix . $this->classSeparator . $class;
    }

    public function trimClassPrefix(string $class, string $prefix): string
    {
        return preg_replace('/^' . preg_quote($prefix . $this->classSeparator) . '/', '', $class);
    }

    public function getSuffixedClass(string $class, string $suffix): string
    {
        return $class . $this->classSeparator . $suffix;
    }

    /**
     * Set helper plugin manager instance
     *
     * @param  string|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager $helperPluginManager
     * @return \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
     * @throws \InvalidArgumentException
     */
    public function setHelperPluginManager($helperPluginManager)
    {
        if (is_string($helperPluginManager)) {
            if (!class_exists($helperPluginManager)) {
                throw new \InvalidArgumentException(sprintf(
                    'Invalid helper helpers class provided (%s)',
                    $helperPluginManager
                ));
            }
            $helperPluginManager = new $helperPluginManager(new \Laminas\ServiceManager\ServiceManager());
        }
        if (!$helperPluginManager instanceof \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager) {
            throw new \InvalidArgumentException(sprintf(
                'Helper helpers must extend %s; got type "%s" instead',
                \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager::class,
                (is_object($helperPluginManager) ? get_class($helperPluginManager) : gettype($helperPluginManager))
            ));
        }
        $this->helperPluginManager = $helperPluginManager;

        $this->helperPluginManager->setHtmlClassHelper($this);

        return $this;
    }

    /**
     * Get helper plugin manager instance
     *
     * @return \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager
     */
    public function getHelperPluginManager()
    {
        if (null === $this->helperPluginManager) {
            $this->setHelperPluginManager(
                new \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager(
                    new \Laminas\ServiceManager\ServiceManager()
                )
            );
        }
        return $this->helperPluginManager;
    }

    /**
     * Get plugin instance
     *
     * @param  string     $name Name of plugin to return
     * @param  null|array $options Options to pass to plugin constructor (if not already instantiated)
     * @return \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface
     */
    public function plugin($name, array $options = null)
    {
        return $this->getHelperPluginManager()->get($name, $options);
    }
}
