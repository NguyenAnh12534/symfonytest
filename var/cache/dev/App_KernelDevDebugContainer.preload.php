<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerUtKC9FV\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerUtKC9FV/EntityManager_9a5be93.php';
require __DIR__.'/ContainerUtKC9FV/getWebpackEncore_TagRendererService.php';
require __DIR__.'/ContainerUtKC9FV/getWebpackEncore_ExceptionListenerService.php';
require __DIR__.'/ContainerUtKC9FV/getWebpackEncore_EntrypointLookupDefaultService.php';
require __DIR__.'/ContainerUtKC9FV/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerUtKC9FV/getTwigService.php';
require __DIR__.'/ContainerUtKC9FV/getSession_FactoryService.php';
require __DIR__.'/ContainerUtKC9FV/getServicesResetterService.php';
require __DIR__.'/ContainerUtKC9FV/getSecrets_VaultService.php';
require __DIR__.'/ContainerUtKC9FV/getRouting_LoaderService.php';
require __DIR__.'/ContainerUtKC9FV/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerUtKC9FV/getErrorControllerService.php';
require __DIR__.'/ContainerUtKC9FV/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerUtKC9FV/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerUtKC9FV/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerUtKC9FV/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerUtKC9FV/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerUtKC9FV/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerUtKC9FV/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerUtKC9FV/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerUtKC9FV/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerUtKC9FV/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerUtKC9FV/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerUtKC9FV/getCache_SystemClearerService.php';
require __DIR__.'/ContainerUtKC9FV/getCache_SystemService.php';
require __DIR__.'/ContainerUtKC9FV/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerUtKC9FV/getCache_AppClearerService.php';
require __DIR__.'/ContainerUtKC9FV/getCache_AppService.php';
require __DIR__.'/ContainerUtKC9FV/getAssets_PackagesService.php';
require __DIR__.'/ContainerUtKC9FV/getTemplateControllerService.php';
require __DIR__.'/ContainerUtKC9FV/getRedirectControllerService.php';
require __DIR__.'/ContainerUtKC9FV/getStudioRepositoryService.php';
require __DIR__.'/ContainerUtKC9FV/getMovieRepositoryService.php';
require __DIR__.'/ContainerUtKC9FV/getCategoryRepositoryService.php';
require __DIR__.'/ContainerUtKC9FV/getActorRepositoryService.php';
require __DIR__.'/ContainerUtKC9FV/getVinylControllerService.php';
require __DIR__.'/ContainerUtKC9FV/getMoviesControllerService.php';
require __DIR__.'/ContainerUtKC9FV/getMovieControllerService.php';
require __DIR__.'/ContainerUtKC9FV/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerUtKC9FV/get_ServiceLocator_O3sqUs1Service.php';
require __DIR__.'/ContainerUtKC9FV/get_ServiceLocator_JIxfAsiService.php';
require __DIR__.'/ContainerUtKC9FV/get_ServiceLocator_BRdave9Service.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\WebpackEncoreBundle\WebpackEncoreBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\MovieController';
$classes[] = 'App\Controller\MoviesController';
$classes[] = 'App\Controller\VinylController';
$classes[] = 'App\Repository\ActorRepository';
$classes[] = 'App\Repository\CategoryRepository';
$classes[] = 'App\Repository\MovieRepository';
$classes[] = 'App\Repository\StudioRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ResetAssetsEventListener';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookup';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ExceptionListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\TagRenderer';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/c0/c027e295374e120a9d3ac66b2ba506ee.php';
require_once __DIR__.'/twig/28/28f084c105968cce22e51092732f443e.php';
require_once __DIR__.'/twig/23/2367450530310d2e7b03611f457f1463.php';
require_once __DIR__.'/twig/6a/6a5999ec003a98f457c34073e4459422.php';
require_once __DIR__.'/twig/36/36a1f0e0ad91d730522225eee450f1a7.php';
require_once __DIR__.'/twig/f8/f823f57adcea298c93476d1a9dd1aa6d.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Routing\\Annotation\\Route';
$preloaded = Preloader::preload($classes, $preloaded);
