<?php

namespace TwbsHelper\View\Helper\HtmlAttributes;

use Laminas\ServiceManager\ServiceManager;
use Laminas\View\Helper\AbstractHelper;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface;
use InvalidArgumentException;

/**
 * Helper for rendering abbreviations
 */
class HtmlClass extends AbstractHelper
{
    /**
     * Helper plugin manager
     *
     * @var HelperPluginManager
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
     * @param  string|HelperPluginManager $helperPluginManager
     * @return HtmlClass
     * @throws InvalidArgumentException
     */
    public function setHelperPluginManager($helperPluginManager)
    {
        if (is_string($helperPluginManager)) {
            if (!class_exists($helperPluginManager)) {
                throw new InvalidArgumentException(sprintf(
                    'Invalid helper helpers class provided (%s)',
                    $helperPluginManager
                ));
            }
            $helperPluginManager = new $helperPluginManager(new ServiceManager());
        }

        if (!$helperPluginManager instanceof HelperPluginManager) {
            throw new InvalidArgumentException(sprintf(
                'Helper helpers must extend %s; got type "%s" instead',
                HelperPluginManager::class,
                $helperPluginManager::class
            ));
        }
        $this->helperPluginManager = $helperPluginManager;

        $this->helperPluginManager->setHtmlClassHelper($this);

        return $this;
    }

    /**
     * Get helper plugin manager instance
     *
     * @return HelperPluginManager
     */
    public function getHelperPluginManager()
    {
        if (null === $this->helperPluginManager) {
            $this->setHelperPluginManager(
                new HelperPluginManager(
                    new ServiceManager()
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
     * @return HelperInterface
     */
    public function plugin($name, ?array $options = null)
    {
        return $this->getHelperPluginManager()->get($name, $options);
    }
}
