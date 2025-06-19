<?php

namespace TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;

use Laminas\ServiceManager\ConfigInterface;
use Laminas\ServiceManager\AbstractPluginManager;
use Laminas\ServiceManager\Exception\InvalidServiceException;
use Laminas\ServiceManager\Factory\InvokableFactory;
use Psr\Container\ContainerInterface;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Align;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Column;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\ColumnCounterpart;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\ColumnOffsetCounterpart;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Gutter;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\JustifyContent;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Offset;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Size;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Spacing;
use TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\Variant;

/**
 * Plugin manager implementation for HTML class attribute helpers
 *
 * Enforces that helpers retrieved are instances of
 * Helper\HelperInterface. Additionally, it registers a number of default
 * helpers.
 * @extends \Laminas\ServiceManager\AbstractPluginManager<\TwbsHelper\View\Helper\HtmlAttributes\HtmlClass\Helper\HelperInterface>
 */
class HelperPluginManager extends AbstractPluginManager
{
    /**
     * Default helper aliases
     *
     * @var string[]
     */
    protected $aliases = [
        'align' => Align::class,
        'column' => Column::class,
        'columnCounterpart' => ColumnCounterpart::class,
        'columnOffsetCounterpart'
        => ColumnOffsetCounterpart::class,
        'gutter' => Gutter::class,
        'justifyContent' => JustifyContent::class,
        'offset' => Offset::class,
        'size' => Size::class,
        'spacing' => Spacing::class,
        'variant' => Variant::class,
    ];

    /**
     * Default factories
     *
     * @var array
     */
    protected $factories = [
        Align::class
        => InvokableFactory::class,
        Column::class
        => InvokableFactory::class,
        ColumnCounterpart::class
        => InvokableFactory::class,
        ColumnOffsetCounterpart::class
        => InvokableFactory::class,
        Gutter::class
        => InvokableFactory::class,
        JustifyContent::class
        => InvokableFactory::class,
        Offset::class
        => InvokableFactory::class,
        Size::class
        => InvokableFactory::class,
        Spacing::class
        => InvokableFactory::class,
        Variant::class
        => InvokableFactory::class,
    ];

    /**
     * @var HtmlClass|null
     */
    protected $htmlclasshelper;

    /**
     * Sets the provided $parentLocator as the creation context for all
     * factories; for $config, {@see \Laminas\ServiceManager\ServiceManager::configure()}
     * for details on its accepted structure.
     * @param null|ConfigInterface|ContainerInterface $configInstanceOrParentLocator
     * @param array $config
     */
    public function __construct($configInstanceOrParentLocator = null, array $config = [])
    {
        $this->initializers[] = $this->injectHtmlClassHelper(...);

        parent::__construct($configInstanceOrParentLocator, $config);
    }

    /**
     * Inject a helper instance with the registered htmlclasshelper
     */
    public function injectHtmlClassHelper($first, $second)
    {
        $helper = ($first instanceof ContainerInterface)
            ? $second
            : $first;

        if (!$helper instanceof HelperInterface) {
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
     * @param HtmlClass $htmlclasshelper
     * @return HelperPluginManager
     */
    public function setHtmlClassHelper(
        HtmlClass $htmlclasshelper
    ): HelperPluginManager {
        $this->htmlclasshelper = $htmlclasshelper;
        return $this;
    }

    /**
     * Retrieve HtmlClass helper instance
     *
     * @return null|HtmlClass
     */
    public function getHtmlClassHelper(): ?HtmlClass
    {
        return $this->htmlclasshelper;
    }

    /**
     * Validate the plugin is of the expected type.
     *
     * Validates against callables and HelperInterface implementations.
     *
     * @param HelperInterface|callable|mixed $instance
     * @throws InvalidServiceException
     */
    public function validate($instance)
    {
        if (
            !is_callable($instance)
            && !$instance instanceof HelperInterface
        ) {
            throw new InvalidServiceException(
                sprintf(
                    '%s can only create instances of %s and/or callables; %s is invalid',
                    static::class,
                    HelperInterface::class,
                    (get_debug_type($instance))
                )
            );
        }
    }
}
