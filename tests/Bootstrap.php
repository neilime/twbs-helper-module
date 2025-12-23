<?php

namespace TestSuite;

use Laminas\Http\PhpEnvironment\Request;
use Laminas\Navigation\View\HelperConfig as NavigationHelperConfig;
use Laminas\Router\Http\TreeRouteStack;
use Laminas\Router\RouteMatch;
use Laminas\Router\RouteStackInterface;
use Laminas\ServiceManager\Config as ServiceManagerConfig;
use Laminas\ServiceManager\ServiceManager;
use Laminas\Stdlib\ArrayUtils;
use Laminas\View\Helper\Doctype;
use Laminas\View\Helper\Url;
use Laminas\View\Renderer\PhpRenderer;
use Laminas\View\Renderer\RendererInterface;
use Laminas\View\Resolver\AggregateResolver;
use Laminas\View\Resolver\TemplateMapResolver;
use Laminas\View\HelperPluginManager;
use LogicException;
use TwbsHelper\ConfigProvider as TwbsHelperConfigProvider;

class Bootstrap
{
    /**
     * @var ServiceManager
     */
    protected static $serviceManager;

    /**
     * @var array
     */
    protected static $config;

    /**
     * Initialize bootstrap
     */
    public static function init()
    {
        static::$config = self::loadApplicationConfig();

        $mergedConfig = self::getMergedConfig();
        $serviceManager = self::createServiceManager(static::$config, $mergedConfig);

        self::registerViewServices($serviceManager);
        self::registerApplicationServices($serviceManager, $mergedConfig);

        static::$serviceManager = $serviceManager;
    }

    private static function loadApplicationConfig(): array
    {
        $applicationConfigPath = __DIR__ . '/config/application-config.php';
        if (!file_exists($applicationConfigPath)) {
            throw new LogicException(sprintf(
                'Application configuration file "%s" does not exist',
                $applicationConfigPath
            ));
        }

        $applicationConfig = include $applicationConfigPath;
        if (false === $applicationConfig) {
            throw new LogicException(sprintf(
                'An error occured while including application configuration file "%"',
                $applicationConfigPath
            ));
        }

        return $applicationConfig;
    }

    private static function getMergedConfig(): array
    {
        $mergedConfig = [];
        $mergedConfig = ArrayUtils::merge($mergedConfig, (new TwbsHelperConfigProvider())());

        return ArrayUtils::merge($mergedConfig, require __DIR__ . '/config/module-config.php');
    }

    private static function createServiceManager(array $applicationConfig, array $mergedConfig): ServiceManager
    {
        $serviceManager = new ServiceManager();
        $serviceManager->setAllowOverride(true);
        $serviceManager->setService('ApplicationConfig', $applicationConfig);
        $serviceManager->setService('config', $mergedConfig);

        $dependenciesConfig = $mergedConfig['dependencies'] ?? [];
        $serviceManagerConfig = new ServiceManagerConfig($dependenciesConfig);
        $serviceManagerConfig->configureServiceManager($serviceManager);

        return $serviceManager;
    }

    private static function registerViewServices(ServiceManager $serviceManager): void
    {
        // Base services that were previously provided by laminas-mvc.
        $serviceManager->setFactory('ViewHelperManager', static function (ServiceManager $container): HelperPluginManager {
            $helperManager = new HelperPluginManager($container);

            $config = $container->has('config') ? $container->get('config') : [];
            $viewHelpersConfig = $config['view_helpers'] ?? [];
            $viewHelpersConfigManager = new ServiceManagerConfig($viewHelpersConfig);
            $viewHelpersConfigManager->configureServiceManager($helperManager);
            $navigationHelperConfig = new NavigationHelperConfig();
            $navigationHelperConfig->configureServiceManager($helperManager);

            $viewManagerConfig = $config['view_manager'] ?? [];
            if (isset($viewManagerConfig['doctype']) && is_string($viewManagerConfig['doctype'])) {
                $doctypeHelper = $helperManager->get('doctype');
                if ($doctypeHelper instanceof Doctype) {
                    $doctypeHelper->setDoctype($viewManagerConfig['doctype']);
                }
            }

            return $helperManager;
        });
        $serviceManager->setFactory('ViewResolver', static function (ServiceManager $container): AggregateResolver {
            $config = $container->has('config') ? $container->get('config') : [];
            $viewManagerConfig = $config['view_manager'] ?? [];

            $resolver = new AggregateResolver();
            if (isset($viewManagerConfig['template_map']) && is_array($viewManagerConfig['template_map'])) {
                $resolver->attach(new TemplateMapResolver($viewManagerConfig['template_map']), 100);
            }

            return $resolver;
        });
        $serviceManager->setFactory('ViewPhpRenderer', static function (ServiceManager $container): PhpRenderer {
            $renderer = new PhpRenderer();
            $renderer->setResolver($container->get('ViewResolver'));
            $helperManager = $container->get('ViewHelperManager');
            $renderer->setHelperPluginManager($helperManager);
            $helperManager->setRenderer($renderer);

            $urlHelper = $helperManager->get('url');
            if ($urlHelper instanceof Url && $container->has('Application')) {
                $mvcEvent = $container->get('Application')->getMvcEvent();
                $urlHelper->setRouter($mvcEvent->getRouter());

                $routeMatch = $mvcEvent->getRouteMatch();
                if ($routeMatch instanceof RouteMatch) {
                    $urlHelper->setRouteMatch($routeMatch);
                }
            }

            $config = $container->has('config') ? $container->get('config') : [];
            $viewManagerConfig = $config['view_manager'] ?? [];
            if (isset($viewManagerConfig['doctype']) && is_string($viewManagerConfig['doctype'])) {
                $doctypeHelper = $renderer->plugin('doctype');
                if ($doctypeHelper instanceof Doctype) {
                    $doctypeHelper->setDoctype($viewManagerConfig['doctype']);
                }
            }

            return $renderer;
        });
        $serviceManager->setAlias(PhpRenderer::class, 'ViewPhpRenderer');
        $serviceManager->setAlias(RendererInterface::class, 'ViewPhpRenderer');
    }

    private static function registerApplicationServices(ServiceManager $serviceManager, array $mergedConfig): void
    {
        $router = self::createRouter($mergedConfig);
        $request = new Request();

        // Router + request are needed for laminas-navigation factories.
        $serviceManager->setService(RouteStackInterface::class, $router);
        $serviceManager->setAlias('Router', RouteStackInterface::class);
        $serviceManager->setAlias('router', RouteStackInterface::class);

        // Minimal Application + "MvcEvent" stubs to satisfy laminas-navigation expectations.
        $mvcEvent = new class ($router, $request) {
            private ?RouteMatch $routeMatch = null;

            public function __construct(
                private readonly object $router,
                private readonly Request $request
            ) {
            }

            public function setRouteMatch(RouteMatch $routeMatch): void
            {
                $this->routeMatch = $routeMatch;
            }

            public function getRouteMatch(): ?RouteMatch
            {
                return $this->routeMatch;
            }

            public function getRouter(): object
            {
                return $this->router;
            }

            public function getRequest(): Request
            {
                return $this->request;
            }
        };

        $application = new class ($mvcEvent) {
            public function __construct(private readonly object $mvcEvent)
            {
            }

            public function bootstrap(): void
            {
                // No-op: kept for backwards compatibility with existing tests.
            }

            public function getMvcEvent(): object
            {
                return $this->mvcEvent;
            }
        };

        $serviceManager->setService('Application', $application);

        self::configureUrlHelper($serviceManager, $router);
    }

    private static function createRouter(array $mergedConfig): object
    {
        $routerConfig = $mergedConfig['router'] ?? [];
        $routerClass = $routerConfig['router_class'] ?? TreeRouteStack::class;

        return method_exists($routerClass, 'factory') ? $routerClass::factory($routerConfig) : new TreeRouteStack();
    }

    private static function configureUrlHelper(ServiceManager $serviceManager, object $router): void
    {
        $viewHelperManager = $serviceManager->get('ViewHelperManager');
        $urlHelper = $viewHelperManager->get('url');
        if ($urlHelper instanceof Url) {
            $urlHelper->setRouter($router);
        }
    }

    /**
     * @return ServiceManager
     */
    public static function getServiceManager()
    {
        return static::$serviceManager;
    }

    /**
     * @return array
     */
    public static function getConfig()
    {
        return static::$config;
    }

    /**
     * Retrieve parent for a given path
     * @param string $path
     * @return boolean|string
     */
    protected static function findParentPath($path)
    {
        $currentDir = __DIR__;
        $previousDir = '.';
        while (!is_dir($previousDir . '/' . $path)) {
            $currentDir = dirname($currentDir);
            if ($previousDir === $currentDir) {
                return false;
            }
            $previousDir = $currentDir;
        }
        return $currentDir . '/' . $path;
    }
}

error_reporting(E_ALL);

// Composer autoloading
if (!file_exists($composerAutoloadPath = __DIR__ . '/../vendor/autoload.php')) {
    throw new LogicException('Composer autoload file "' . $composerAutoloadPath . '" does not exist');
}
if (false === (include $composerAutoloadPath)) {
    throw new LogicException(sprintf(
        'An error occured while including composer autoload file "%s"',
        $composerAutoloadPath
    ));
}

Bootstrap::init();
