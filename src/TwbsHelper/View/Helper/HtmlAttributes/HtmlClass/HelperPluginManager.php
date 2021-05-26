<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;

/**
 * Plugin manager implementation for HTML class attribute helpers
 *
 * Enforces that helpers retrieved are instances of
 * Helper\HelperInterface. Additionally, it registers a number of default
 * helpers.
 */
class HelperPluginManager extends \Laminas\ServiceManager\AbstractPluginManager
{
    /**
     * Default helper aliases
     *
     * @var string[]
     */
    protected $aliases = [
        'align' => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Align::class,
        'column' => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column::class,
        'columnCounterpart' => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\ColumnCounterpart::class,
        'columnOffsetCounterpart'
        => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\ColumnOffsetCounterpart::class,
        'gutter' => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Gutter::class,
        'justifyContent' => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\JustifyContent::class,
        'offset' => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Offset::class,
        'size' => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Size::class,
        'variant' => \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant::class,
    ];

    /**
     * Default factories
     * @var array
     */
    protected $factories = [
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Align::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\ColumnCounterpart::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\ColumnOffsetCounterpart::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Gutter::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\JustifyContent::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Offset::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Size::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant::class
        => \Laminas\ServiceManager\Factory\InvokableFactory::class,
    ];

    /**
     * @var \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass|null
     */
    protected $htmlclasshelper;

    /**
     * Sets the provided $parentLocator as the creation context for all
     * factories; for $config, {@see \Laminas\ServiceManager\ServiceManager::configure()}
     * for details on its accepted structure.
     */
    public function __construct($configInstanceOrParentLocator = null, array $config = [])
    {
        $this->initializers[] = [$this, 'injectHtmlClassHelper'];

        parent::__construct($configInstanceOrParentLocator, $config);
    }

    /**
     * Inject a helper instance with the registered htmlclasshelper
     */
    public function injectHtmlClassHelper($first, $second)
    {
        $helper = ($first instanceof \Interop\Container\ContainerInterface)
            ? $second
            : $first;

        if (!$helper instanceof \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface) {
            return;
        }

        $htmlClassHelper = $this->getHtmlClassHelper();
        if (null === $htmlClassHelper) {
            return;
        }
        $helper->setHtmlClassHelper($htmlClassHelper);
    }

    /**
     * Set htmlclasshelper
     *
     * @param \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlclasshelper
     * @return \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager
     */
    public function setHtmlClassHelper(
        \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass $htmlclasshelper
    ): \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\HelperPluginManager {
        $this->htmlclasshelper = $htmlclasshelper;
        return $this;
    }

    /**
     * Retrieve HtmlClass helper instance
     *
     * @return null|\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
     */
    public function getHtmlClassHelper(): ?\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass
    {
        return $this->htmlclasshelper;
    }

    /**
     * Validate the plugin is of the expected type.
     *
     * Validates against callables and HelperInterface implementations.
     *
     * @param mixed $instance
     * @throws \Laminas\ServiceManager\Exception\InvalidServiceException
     */
    public function validate($instance)
    {
        if (
            !is_callable($instance)
            && !$instance instanceof \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface
        ) {
            throw new \Laminas\ServiceManager\Exception\InvalidServiceException(
                sprintf(
                    '%s can only create instances of %s and/or callables; %s is invalid',
                    get_class($this),
                    \TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface::class,
                    (is_object($instance) ? get_class($instance) : gettype($instance))
                )
            );
        }
    }
}
