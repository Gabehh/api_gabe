<?php

namespace ContainerRIRjvig;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelTestDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\ApiResultController' => 'getApiResultControllerService',
            'App\\Controller\\ApiUsersController' => 'getApiUsersControllerService',
            'App\\Controller\\DefaultController' => 'getDefaultControllerService',
            'App\\Controller\\SecurityController' => 'getSecurityControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'hateoas.configuration.metadata_driver' => 'getHateoas_Configuration_MetadataDriverService',
            'hateoas.configuration.provider' => 'getHateoas_Configuration_ProviderService',
            'hateoas.event_listener.json' => 'getHateoas_EventListener_JsonService',
            'hateoas.event_listener.xml' => 'getHateoas_EventListener_XmlService',
            'hateoas.generator.registry' => 'getHateoas_Generator_RegistryService',
            'hateoas.helper.link' => 'getHateoas_Helper_LinkService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService',
            'lexik_jwt_authentication.check_config_command' => 'getLexikJwtAuthentication_CheckConfigCommandService',
            'lexik_jwt_authentication.encoder' => 'getLexikJwtAuthentication_EncoderService',
            'lexik_jwt_authentication.generate_token_command' => 'getLexikJwtAuthentication_GenerateTokenCommandService',
            'lexik_jwt_authentication.jwt_manager' => 'getLexikJwtAuthentication_JwtManagerService',
            'lexik_jwt_authentication.key_loader' => 'getLexikJwtAuthentication_KeyLoaderService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'test.client' => 'getTest_ClientService',
            'test.private_services_locator' => 'getTest_PrivateServicesLocatorService',
            'test.service_container' => 'getTest_ServiceContainerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\KernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Kernel\\MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'\\src\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\EventListener\\ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ErrorListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\container\\src\\ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\RequestStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\UrlHelper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ResetInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractTestSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\TestSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\Profiler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ProfilerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\EventDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\DataCollector\\RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DataCollector\\CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\stopwatch\\Stopwatch.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Log\\DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Processor\\DebugProcessor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContext.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ControllerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\expression-language\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Templating\\TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\TemplateListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\SecurityListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Security\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Logger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Logger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\DataCollector\\DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\DataCollector\\DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Registry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\SQLLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\DebugStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Environment.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\Loader\\NativeFilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Profiler\\Profile.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\DataCollector\\TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\DebugExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src\\MissingExtensionSuggestor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Twig\\WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\DumperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\AbstractDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\CliDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\HtmlDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Role\\RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Role\\RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallMap.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\RememberMe\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\DataCollector\\SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\EventListener\\FirewallListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Debug\\TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Expression\\CompilableExpressionEvaluatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Expression\\ExpressionEvaluatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Expression\\ExpressionEvaluator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\expression-language\\ExpressionFunctionProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer-bundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Twig\\SerializerRuntimeExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Factory\\LinkFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\DriverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\LazyLoadingDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Cache\\CacheInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Cache\\FileCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\AdvancedMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\MetadataFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\UrlGenerator\\UrlGeneratorRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\UrlGenerator\\UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\UrlGenerator\\SymfonyUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Helper\\LinkHelper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas-bundle\\Expression\\LinkExpressionFunction.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Twig\\Extension\\LinkExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\NullHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher-contracts\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ArrayTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RouterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\DependencyInjection\\CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /**
     * Gets the public 'App\Controller\ApiResultController' shared autowired service.
     *
     * @return \App\Controller\ApiResultController
     */
    protected function getApiResultControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\ApiResultController.php';

        $this->services['App\\Controller\\ApiResultController'] = $instance = new \App\Controller\ApiResultController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\ApiResultController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\ApiUsersController' shared autowired service.
     *
     * @return \App\Controller\ApiUsersController
     */
    protected function getApiUsersControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\ApiUsersController.php';

        $this->services['App\\Controller\\ApiUsersController'] = $instance = new \App\Controller\ApiUsersController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\ApiUsersController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\DefaultController' shared autowired service.
     *
     * @return \App\Controller\DefaultController
     */
    protected function getDefaultControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\DefaultController.php';

        return $this->services['App\\Controller\\DefaultController'] = new \App\Controller\DefaultController();
    }

    /**
     * Gets the public 'App\Controller\SecurityController' shared autowired service.
     *
     * @return \App\Controller\SecurityController
     */
    protected function getSecurityControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\SecurityController.php';

        $this->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController(($this->privates['lexik_jwt_authentication.handler.authentication_success'] ?? $this->getLexikJwtAuthentication_Handler_AuthenticationSuccessService()), ($this->privates['lexik_jwt_authentication.handler.authentication_failure'] ?? $this->getLexikJwtAuthentication_Handler_AuthenticationFailureService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\SecurityController', $this));

        return $instance;
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), NULL);
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.app.recorder_inner'] ?? $this->getCache_App_RecorderInnerService()));
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService())]);
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.query.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.query.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.result.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.result.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()), 'cache.doctrine.orm.default.metadata' => ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()), 'cache.doctrine.orm.default.result' => ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()), 'cache.doctrine.orm.default.query' => ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.system.recorder_inner'] ?? $this->getCache_System_RecorderInnerService()));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 1 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 2 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
            yield 3 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
        }, 4), true, ($this->targetDir.''.'/srcApp_KernelTestDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Command\\CreateUserCommand' => ['privates', 'App\\Command\\CreateUserCommand', 'getCreateUserCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'lexik_jwt_authentication.check_config_command' => ['services', 'lexik_jwt_authentication.check_config_command', 'getLexikJwtAuthentication_CheckConfigCommandService', false],
            'lexik_jwt_authentication.generate_token_command' => ['services', 'lexik_jwt_authentication.generate_token_command', 'getLexikJwtAuthentication_GenerateTokenCommandService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
        ], [
            'App\\Command\\CreateUserCommand' => 'App\\Command\\CreateUserCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'lexik_jwt_authentication.check_config_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\CheckConfigCommand',
            'lexik_jwt_authentication.generate_token_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\GenerateTokenCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['miw:create-user' => 'App\\Command\\CreateUserCommand', 'about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'security:encode-password' => 'security.command.user_password_encoder', 'lexik:jwt:check-config' => 'lexik_jwt_authentication.check_config_command', 'lexik:jwt:generate-token' => 'lexik_jwt_authentication.generate_token_command']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';

        return $this->services['doctrine.dbal.default_connection'] = ($this->privates['doctrine.dbal.connection_factory'] ?? ($this->privates['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([])))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driver' => 'pdo_mysql', 'driverOptions' => [], 'defaultTableOptions' => []], ($this->privates['doctrine.dbal.default_connection.configuration'] ?? $this->getDoctrine_Dbal_DefaultConnection_ConfigurationService()), ($this->privates['doctrine.dbal.default_connection.event_manager'] ?? $this->getDoctrine_Dbal_DefaultConnection_EventManagerService()), []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php';

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->privates['doctrine.orm.default_configuration'] ?? $this->getDoctrine_Orm_DefaultConfigurationService()));

        ($this->privates['doctrine.orm.default_manager_configurator'] ?? ($this->privates['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], [])))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ErrorController.php';

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', ($this->privates['twig.error_renderer.html'] ?? $this->getTwig_ErrorRenderer_HtmlService()));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(($this->privates['debug.event_dispatcher.inner'] ?? ($this->privates['debug.event_dispatcher.inner'] = new \Symfony\Component\EventDispatcher\EventDispatcher())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['monolog.logger.event'] ?? $this->getMonolog_Logger_EventService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['App\\EventListener\\ExceptionListener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('lexik_jwt_authentication.on_jwt_created', [0 => function () {
            return ($this->privates['api_miw.event.jwt_created_listener'] ?? ($this->privates['api_miw.event.jwt_created_listener'] = new \App\EventListener\JWTCreatedListener()));
        }, 1 => 'onJWTCreated'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelRequest'], 192);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->getDebug_Security_Voter_VoteListenerService());
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'hateoas.configuration.metadata_driver' shared service.
     *
     * @return \Metadata\Driver\DriverChain
     */
    protected function getHateoas_Configuration_MetadataDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\DriverChain.php';

        return $this->services['hateoas.configuration.metadata_driver'] = new \Metadata\Driver\DriverChain([0 => ($this->privates['hateoas.configuration.metadata.yaml_driver'] ?? $this->getHateoas_Configuration_Metadata_YamlDriverService()), 1 => ($this->privates['hateoas.configuration.metadata.xml_driver'] ?? $this->getHateoas_Configuration_Metadata_XmlDriverService()), 2 => ($this->privates['hateoas.configuration.metadata.extension_driver'] ?? $this->getHateoas_Configuration_Metadata_ExtensionDriverService())]);
    }

    /**
     * Gets the public 'hateoas.configuration.provider' shared service.
     *
     * @return \Hateoas\Configuration\Provider\ChainProvider
     */
    protected function getHateoas_Configuration_ProviderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Provider\\RelationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Provider\\ChainProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Provider\\FunctionProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Provider\\StaticMethodProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Provider\\ExpressionEvaluatorProvider.php';

        return $this->services['hateoas.configuration.provider'] = new \Hateoas\Configuration\Provider\ChainProvider([0 => new \Hateoas\Configuration\Provider\FunctionProvider(), 1 => new \Hateoas\Configuration\Provider\StaticMethodProvider(), 2 => new \Hateoas\Configuration\Provider\ExpressionEvaluatorProvider(($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()))]);
    }

    /**
     * Gets the public 'hateoas.event_listener.json' shared service.
     *
     * @return \Hateoas\Serializer\AddRelationsListener
     */
    protected function getHateoas_EventListener_JsonService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\AddRelationsListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\JsonHalSerializer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\Metadata\\InlineDeferrer.php';

        return $this->services['hateoas.event_listener.json'] = new \Hateoas\Serializer\AddRelationsListener(($this->privates['hateoas.serializer.json_hal'] ?? ($this->privates['hateoas.serializer.json_hal'] = new \Hateoas\Serializer\JsonHalSerializer())), ($this->privates['hateoas.links_factory'] ?? $this->getHateoas_LinksFactoryService()), ($this->privates['hateoas.embeds_factory'] ?? $this->getHateoas_EmbedsFactoryService()), ($this->privates['hateoas.inline_deferrer.embeds'] ?? ($this->privates['hateoas.inline_deferrer.embeds'] = new \Hateoas\Serializer\Metadata\InlineDeferrer())), ($this->privates['hateoas.inline_deferrer.links'] ?? ($this->privates['hateoas.inline_deferrer.links'] = new \Hateoas\Serializer\Metadata\InlineDeferrer())));
    }

    /**
     * Gets the public 'hateoas.event_listener.xml' shared service.
     *
     * @return \Hateoas\Serializer\AddRelationsListener
     */
    protected function getHateoas_EventListener_XmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\AddRelationsListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\XmlSerializer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\Metadata\\InlineDeferrer.php';

        return $this->services['hateoas.event_listener.xml'] = new \Hateoas\Serializer\AddRelationsListener(($this->privates['hateoas.serializer.xml'] ?? ($this->privates['hateoas.serializer.xml'] = new \Hateoas\Serializer\XmlSerializer())), ($this->privates['hateoas.links_factory'] ?? $this->getHateoas_LinksFactoryService()), ($this->privates['hateoas.embeds_factory'] ?? $this->getHateoas_EmbedsFactoryService()), ($this->privates['hateoas.inline_deferrer.embeds'] ?? ($this->privates['hateoas.inline_deferrer.embeds'] = new \Hateoas\Serializer\Metadata\InlineDeferrer())), ($this->privates['hateoas.inline_deferrer.links'] ?? ($this->privates['hateoas.inline_deferrer.links'] = new \Hateoas\Serializer\Metadata\InlineDeferrer())));
    }

    /**
     * Gets the public 'hateoas.generator.registry' shared service.
     *
     * @return \Hateoas\UrlGenerator\UrlGeneratorRegistry
     */
    protected function getHateoas_Generator_RegistryService()
    {
        return $this->services['hateoas.generator.registry'] = new \Hateoas\UrlGenerator\UrlGeneratorRegistry(($this->privates['hateoas.generator.symfony'] ?? $this->getHateoas_Generator_SymfonyService()));
    }

    /**
     * Gets the public 'hateoas.helper.link' shared service.
     *
     * @return \Hateoas\Helper\LinkHelper
     */
    protected function getHateoas_Helper_LinkService()
    {
        return $this->services['hateoas.helper.link'] = new \Hateoas\Helper\LinkHelper(($this->privates['hateoas.link_factory'] ?? $this->getHateoas_LinkFactoryService()), ($this->privates['hateoas.configuration.metadata_factory'] ?? $this->getHateoas_Configuration_MetadataFactoryService()));
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['debug.argument_resolver'] ?? $this->getDebug_ArgumentResolverService()));
    }

    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getJmsSerializerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\ArrayTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Serializer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\XmlDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\ContextFactory\\SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\ContextFactory\\DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer-bundle\\ContextFactory\\ConfiguredContextFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer(($this->privates['jms_serializer.metadata_factory'] ?? $this->getJmsSerializer_MetadataFactoryService()), [2 => ($this->privates['jms_serializer.deserialization_graph_navigator_factory'] ?? $this->getJmsSerializer_DeserializationGraphNavigatorFactoryService()), 1 => ($this->privates['jms_serializer.serialization_graph_navigator_factory'] ?? $this->getJmsSerializer_SerializationGraphNavigatorFactoryService())], ['json' => ($this->privates['jms_serializer.json_serialization_visitor'] ?? $this->getJmsSerializer_JsonSerializationVisitorService()), 'xml' => ($this->privates['jms_serializer.xml_serialization_visitor'] ?? $this->getJmsSerializer_XmlSerializationVisitorService())], ['json' => ($this->privates['jms_serializer.json_deserialization_visitor'] ?? $this->getJmsSerializer_JsonDeserializationVisitorService()), 'xml' => ($this->privates['jms_serializer.xml_deserialization_visitor'] ?? ($this->privates['jms_serializer.xml_deserialization_visitor'] = new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()))], ($this->services['jms_serializer.serialization_context_factory'] ?? ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->services['jms_serializer.deserialization_context_factory'] ?? ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /**
     * Gets the public 'jms_serializer.deserialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\ContextFactory\\SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\ContextFactory\\DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer-bundle\\ContextFactory\\ConfiguredContextFactory.php';

        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.metadata_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Metadata\\Driver\\AbstractDoctrineTypeDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Metadata\\Driver\\DoctrineTypeDriver.php';

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(($this->privates['jms_serializer.metadata.chain_driver'] ?? $this->getJmsSerializer_Metadata_ChainDriverService()), ($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the public 'jms_serializer.object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Construction\\ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Construction\\DoctrineObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Construction\\UnserializeObjectConstructor.php';

        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['jms_serializer.unserialize_object_constructor'] ?? ($this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor())), 'null');
    }

    /**
     * Gets the public 'jms_serializer.serialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\ContextFactory\\SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\ContextFactory\\DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer-bundle\\ContextFactory\\ConfiguredContextFactory.php';

        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.twig_extension.serializer_runtime_helper' shared service.
     *
     * @return \JMS\Serializer\Twig\SerializerRuntimeHelper
     */
    protected function getJmsSerializer_TwigExtension_SerializerRuntimeHelperService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Twig\\SerializerRuntimeHelper.php';

        return $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] = new \JMS\Serializer\Twig\SerializerRuntimeHelper(($this->services['jms_serializer'] ?? $this->getJmsSerializerService()));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.check_config_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand
     */
    protected function getLexikJwtAuthentication_CheckConfigCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Command\\CheckConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\RawKeyLoader.php';

        $this->services['lexik_jwt_authentication.check_config_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand(($this->services['lexik_jwt_authentication.key_loader'] ?? ($this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), $this->getEnv('JWT_PASSPHRASE')))), 'RS256');

        $instance->setName('lexik:jwt:check-config');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.encoder' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder
     */
    protected function getLexikJwtAuthentication_EncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Encoder\\JWTEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Encoder\\HeaderAwareJWTEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Encoder\\LcobucciJWTEncoder.php';

        return $this->services['lexik_jwt_authentication.encoder'] = new \Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder(($this->privates['lexik_jwt_authentication.jws_provider.lcobucci'] ?? $this->getLexikJwtAuthentication_JwsProvider_LcobucciService()));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.generate_token_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand
     */
    protected function getLexikJwtAuthentication_GenerateTokenCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Command\\GenerateTokenCommand.php';

        $this->services['lexik_jwt_authentication.generate_token_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
        }, 1));

        $instance->setName('lexik:jwt:generate-token');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.jwt_manager' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager
     */
    protected function getLexikJwtAuthentication_JwtManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\JWTManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\JWTTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\JWTManager.php';

        $this->services['lexik_jwt_authentication.jwt_manager'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager(($this->services['lexik_jwt_authentication.encoder'] ?? $this->getLexikJwtAuthentication_EncoderService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'username');

        $instance->setUserIdentityField('username');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.key_loader' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader
     */
    protected function getLexikJwtAuthentication_KeyLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\RawKeyLoader.php';

        return $this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), $this->getEnv('JWT_PASSPHRASE'));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(($this->privates['profiler.storage'] ?? ($this->privates['profiler.storage'] = new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')))), ($this->privates['monolog.logger.profiler'] ?? $this->getMonolog_Logger_ProfilerService()), false);

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(($this->privates['data_collector.time'] ?? $this->getDataCollector_TimeService()));
        $instance->add(($this->privates['data_collector.memory'] ?? ($this->privates['data_collector.memory'] = new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector())));
        $instance->add(($this->privates['data_collector.ajax'] ?? ($this->privates['data_collector.ajax'] = new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector())));
        $instance->add(($this->privates['data_collector.exception'] ?? ($this->privates['data_collector.exception'] = new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector())));
        $instance->add(($this->privates['data_collector.logger'] ?? $this->getDataCollector_LoggerService()));
        $instance->add(($this->privates['data_collector.events'] ?? $this->getDataCollector_EventsService()));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add(($this->privates['data_collector.cache'] ?? $this->getDataCollector_CacheService()));
        $instance->add(($this->privates['data_collector.security'] ?? $this->getDataCollector_SecurityService()));
        $instance->add(($this->privates['data_collector.twig'] ?? $this->getDataCollector_TwigService()));
        $instance->add(($this->privates['data_collector.doctrine'] ?? $this->getDataCollector_DoctrineService()));
        $instance->add(($this->privates['data_collector.config'] ?? $this->getDataCollector_ConfigService()));

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['monolog.logger.router'] ?? $this->getMonolog_Logger_RouterService()), 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\DelegatingLoader.php';

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['routing.resolver'] ?? $this->getRouting_ResolverService()), [], ['utf8' => true]);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\UriSafeTokenGenerator.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(($this->privates['security.csrf.token_generator'] ?? ($this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator())), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($this->services['profiler'])) {
                yield 'profiler' => ($this->services['profiler'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($this->services['event_dispatcher'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['event_dispatcher'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'cache.messenger.restart_workers_signal' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Session.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBag.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.mock_file'] ?? $this->getSession_Storage_MockFileService()), ($this->privates['session.attribute_bag'] ?? ($this->privates['session.attribute_bag'] = new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag())), ($this->privates['session.flash_bag'] ?? ($this->privates['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag())));
    }

    /**
     * Gets the public 'test.client' service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\KernelBrowser
     */
    protected function getTest_ClientService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\Client.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\AbstractBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Client.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernelBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Client.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\KernelBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\History.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\CookieJar.php';

        return new \Symfony\Bundle\FrameworkBundle\KernelBrowser(($this->services['kernel'] ?? $this->get('kernel', 1)), [], (new \Symfony\Component\BrowserKit\History()), (new \Symfony\Component\BrowserKit\CookieJar()));
    }

    /**
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getTest_PrivateServicesLocatorService()
    {
        return $this->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Command\\CreateUserCommand' => ['privates', 'App\\Command\\CreateUserCommand', 'getCreateUserCommandService', false],
            'App\\EventListener\\ExceptionListener' => ['privates', 'App\\EventListener\\ExceptionListener', 'getExceptionListenerService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
            'Doctrine\\Common\\Annotations\\Reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'Doctrine\\DBAL\\Connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'Doctrine\\DBAL\\Driver\\Connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'Doctrine\\ORM\\EntityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'Doctrine\\Persistence\\ManagerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'JMS\\Serializer\\ArrayTransformerInterface' => ['services', 'jms_serializer', 'getJmsSerializerService', false],
            'JMS\\Serializer\\ContextFactory\\DeserializationContextFactoryInterface' => ['services', 'jms_serializer.deserialization_context_factory', 'getJmsSerializer_DeserializationContextFactoryService', false],
            'JMS\\Serializer\\ContextFactory\\SerializationContextFactoryInterface' => ['services', 'jms_serializer.serialization_context_factory', 'getJmsSerializer_SerializationContextFactoryService', false],
            'JMS\\Serializer\\SerializerInterface' => ['services', 'jms_serializer', 'getJmsSerializerService', false],
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Encoder\\JWTEncoderInterface' => ['services', 'lexik_jwt_authentication.encoder', 'getLexikJwtAuthentication_EncoderService', false],
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationFailureHandler' => ['privates', 'lexik_jwt_authentication.handler.authentication_failure', 'getLexikJwtAuthentication_Handler_AuthenticationFailureService', false],
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationSuccessHandler' => ['privates', 'lexik_jwt_authentication.handler.authentication_success', 'getLexikJwtAuthentication_Handler_AuthenticationSuccessService', false],
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWSProvider\\JWSProviderInterface' => ['privates', 'lexik_jwt_authentication.jws_provider.lcobucci', 'getLexikJwtAuthentication_JwsProvider_LcobucciService', false],
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenInterface' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', false],
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', false],
            'Lexik\\Bundle\\JWTAuthenticationBundle\\TokenExtractor\\TokenExtractorInterface' => ['privates', 'lexik_jwt_authentication.extractor.chain_extractor', 'getLexikJwtAuthentication_Extractor_ChainExtractorService', false],
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Psr\\Log\\LoggerInterface' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'Psr\\Log\\LoggerInterface $cacheLogger' => ['privates', 'monolog.logger.cache', 'getMonolog_Logger_CacheService', false],
            'Psr\\Log\\LoggerInterface $consoleLogger' => ['privates', 'monolog.logger.console', 'getMonolog_Logger_ConsoleService', false],
            'Psr\\Log\\LoggerInterface $doctrineLogger' => ['privates', 'monolog.logger.doctrine', 'getMonolog_Logger_DoctrineService', false],
            'Psr\\Log\\LoggerInterface $eventLogger' => ['privates', 'monolog.logger.event', 'getMonolog_Logger_EventService', false],
            'Psr\\Log\\LoggerInterface $phpLogger' => ['privates', 'monolog.logger.php', 'getMonolog_Logger_PhpService', false],
            'Psr\\Log\\LoggerInterface $profilerLogger' => ['privates', 'monolog.logger.profiler', 'getMonolog_Logger_ProfilerService', false],
            'Psr\\Log\\LoggerInterface $requestLogger' => ['privates', 'monolog.logger.request', 'getMonolog_Logger_RequestService', false],
            'Psr\\Log\\LoggerInterface $routerLogger' => ['privates', 'monolog.logger.router', 'getMonolog_Logger_RouterService', false],
            'Psr\\Log\\LoggerInterface $securityLogger' => ['privates', 'monolog.logger.security', 'getMonolog_Logger_SecurityService', false],
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\Filesystem\\Filesystem' => ['services', 'filesystem', 'getFilesystemService', false],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => ['privates', 'session.flash_bag', 'getSession_FlashBagService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => ['services', 'session', 'getSessionService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'Symfony\\Component\\HttpFoundation\\UrlHelper' => ['privates', 'url_helper', 'getUrlHelperService', false],
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', false],
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface' => ['privates', 'security.authentication.manager', 'getSecurity_Authentication_ManagerService', false],
            'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface' => ['privates', 'security.role_hierarchy', 'getSecurity_RoleHierarchyService', false],
            'Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'Symfony\\Component\\Security\\Core\\User\\UserProviderInterface' => ['privates', 'security.user.provider.concrete.app_user_provider', 'getSecurity_User_Provider_Concrete_AppUserProviderService', false],
            'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', false],
            'Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface' => ['privates', 'security.csrf.token_storage', 'getSecurity_Csrf_TokenStorageService', false],
            'Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', false],
            'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
            'Symfony\\Component\\Security\\Http\\Firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'Symfony\\Component\\Security\\Http\\HttpUtils' => ['privates', 'security.http_utils', 'getSecurity_HttpUtilsService', false],
            'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'Symfony\\Component\\Stopwatch\\Stopwatch' => ['privates', 'debug.stopwatch', 'getDebug_StopwatchService', false],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Twig\\Environment' => ['services', 'twig', 'getTwigService', false],
            'Twig_Environment' => ['services', 'twig', 'getTwigService', false],
            'annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.cache' => ['privates', 'annotations.cache', 'getAnnotations_CacheService', false],
            'annotations.cache_warmer' => ['privates', 'annotations.cache_warmer', 'getAnnotations_CacheWarmerService', false],
            'annotations.cached_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.dummy_registry' => ['privates', 'annotations.dummy_registry', 'getAnnotations_DummyRegistryService', false],
            'annotations.reader' => ['privates', 'annotations.reader', 'getAnnotations_ReaderService', false],
            'api_miw.event.jwt_created_listener' => ['privates', 'api_miw.event.jwt_created_listener', 'getApiMiw_Event_JwtCreatedListenerService', false],
            'api_miw.jwt_token_authenticator' => ['privates', 'api_miw.jwt_token_authenticator', 'getApiMiw_JwtTokenAuthenticatorService', false],
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.I3K77mT', 'get_ServiceLocator_I3K77mTService', false],
            'argument_resolver.default' => ['privates', 'debug.argument_resolver.default', 'getDebug_ArgumentResolver_DefaultService', false],
            'argument_resolver.not_tagged_controller' => ['privates', 'debug.argument_resolver.not_tagged_controller', 'getDebug_ArgumentResolver_NotTaggedControllerService', false],
            'argument_resolver.request' => ['privates', 'debug.argument_resolver.request', 'getDebug_ArgumentResolver_RequestService', false],
            'argument_resolver.request_attribute' => ['privates', 'debug.argument_resolver.request_attribute', 'getDebug_ArgumentResolver_RequestAttributeService', false],
            'argument_resolver.service' => ['privates', 'debug.argument_resolver.service', 'getDebug_ArgumentResolver_ServiceService', false],
            'argument_resolver.session' => ['privates', 'debug.argument_resolver.session', 'getDebug_ArgumentResolver_SessionService', false],
            'argument_resolver.variadic' => ['privates', 'debug.argument_resolver.variadic', 'getDebug_ArgumentResolver_VariadicService', false],
            'cache.annotations' => ['privates', 'cache.annotations', 'getCache_AnnotationsService', false],
            'cache.annotations.recorder_inner' => ['privates', 'cache.annotations.recorder_inner', 'getCache_Annotations_RecorderInnerService', false],
            'cache.app.recorder_inner' => ['privates', 'cache.app.recorder_inner', 'getCache_App_RecorderInnerService', false],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', false],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', false],
            'cache.default_pdo_provider' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'cache.doctrine.orm.default.metadata.recorder_inner' => ['privates', 'cache.doctrine.orm.default.metadata.recorder_inner', 'getCache_Doctrine_Orm_Default_Metadata_RecorderInnerService', false],
            'cache.doctrine.orm.default.query.recorder_inner' => ['privates', 'cache.doctrine.orm.default.query.recorder_inner', 'getCache_Doctrine_Orm_Default_Query_RecorderInnerService', false],
            'cache.doctrine.orm.default.result.recorder_inner' => ['privates', 'cache.doctrine.orm.default.result.recorder_inner', 'getCache_Doctrine_Orm_Default_Result_RecorderInnerService', false],
            'cache.messenger.restart_workers_signal' => ['privates', 'cache.messenger.restart_workers_signal', 'getCache_Messenger_RestartWorkersSignalService', false],
            'cache.messenger.restart_workers_signal.recorder_inner' => ['privates', 'cache.messenger.restart_workers_signal.recorder_inner', 'getCache_Messenger_RestartWorkersSignal_RecorderInnerService', false],
            'cache.property_info' => ['privates', 'cache.property_info', 'getCache_PropertyInfoService', false],
            'cache.property_info.recorder_inner' => ['privates', 'cache.property_info.recorder_inner', 'getCache_PropertyInfo_RecorderInnerService', false],
            'cache.security_expression_language' => ['privates', 'cache.security_expression_language', 'getCache_SecurityExpressionLanguageService', false],
            'cache.security_expression_language.recorder_inner' => ['privates', 'cache.security_expression_language.recorder_inner', 'getCache_SecurityExpressionLanguage_RecorderInnerService', false],
            'cache.serializer' => ['privates', 'cache.serializer', 'getCache_SerializerService', false],
            'cache.serializer.recorder_inner' => ['privates', 'cache.serializer.recorder_inner', 'getCache_Serializer_RecorderInnerService', false],
            'cache.system.recorder_inner' => ['privates', 'cache.system.recorder_inner', 'getCache_System_RecorderInnerService', false],
            'cache.validator' => ['privates', 'cache.validator', 'getCache_ValidatorService', false],
            'cache.validator.recorder_inner' => ['privates', 'cache.validator.recorder_inner', 'getCache_Validator_RecorderInnerService', false],
            'config.resource.self_checking_resource_checker' => ['privates', 'config.resource.self_checking_resource_checker', 'getConfig_Resource_SelfCheckingResourceCheckerService', false],
            'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'console.error_listener' => ['privates', 'console.error_listener', 'getConsole_ErrorListenerService', false],
            'console.suggest_missing_package_subscriber' => ['privates', 'console.suggest_missing_package_subscriber', 'getConsole_SuggestMissingPackageSubscriberService', false],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'controller_name_converter' => ['privates', '.legacy_controller_name_converter', 'get_LegacyControllerNameConverterService', false],
            'controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
            'data_collector.ajax' => ['privates', 'data_collector.ajax', 'getDataCollector_AjaxService', false],
            'data_collector.cache' => ['privates', 'data_collector.cache', 'getDataCollector_CacheService', false],
            'data_collector.config' => ['privates', 'data_collector.config', 'getDataCollector_ConfigService', false],
            'data_collector.doctrine' => ['privates', 'data_collector.doctrine', 'getDataCollector_DoctrineService', false],
            'data_collector.events' => ['privates', 'data_collector.events', 'getDataCollector_EventsService', false],
            'data_collector.exception' => ['privates', 'data_collector.exception', 'getDataCollector_ExceptionService', false],
            'data_collector.logger' => ['privates', 'data_collector.logger', 'getDataCollector_LoggerService', false],
            'data_collector.memory' => ['privates', 'data_collector.memory', 'getDataCollector_MemoryService', false],
            'data_collector.request' => ['privates', 'data_collector.request', 'getDataCollector_RequestService', false],
            'data_collector.router' => ['privates', 'data_collector.router', 'getDataCollector_RouterService', false],
            'data_collector.security' => ['privates', 'data_collector.security', 'getDataCollector_SecurityService', false],
            'data_collector.time' => ['privates', 'data_collector.time', 'getDataCollector_TimeService', false],
            'data_collector.twig' => ['privates', 'data_collector.twig', 'getDataCollector_TwigService', false],
            'debug.argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
            'debug.argument_resolver.default' => ['privates', 'debug.argument_resolver.default', 'getDebug_ArgumentResolver_DefaultService', false],
            'debug.argument_resolver.default.inner' => ['privates', 'debug.argument_resolver.default.inner', 'getDebug_ArgumentResolver_Default_InnerService', false],
            'debug.argument_resolver.inner' => ['privates', 'debug.argument_resolver.inner', 'getDebug_ArgumentResolver_InnerService', false],
            'debug.argument_resolver.not_tagged_controller' => ['privates', 'debug.argument_resolver.not_tagged_controller', 'getDebug_ArgumentResolver_NotTaggedControllerService', false],
            'debug.argument_resolver.not_tagged_controller.inner' => ['privates', 'debug.argument_resolver.not_tagged_controller.inner', 'getDebug_ArgumentResolver_NotTaggedController_InnerService', false],
            'debug.argument_resolver.request' => ['privates', 'debug.argument_resolver.request', 'getDebug_ArgumentResolver_RequestService', false],
            'debug.argument_resolver.request.inner' => ['privates', 'debug.argument_resolver.request.inner', 'getDebug_ArgumentResolver_Request_InnerService', false],
            'debug.argument_resolver.request_attribute' => ['privates', 'debug.argument_resolver.request_attribute', 'getDebug_ArgumentResolver_RequestAttributeService', false],
            'debug.argument_resolver.request_attribute.inner' => ['privates', 'debug.argument_resolver.request_attribute.inner', 'getDebug_ArgumentResolver_RequestAttribute_InnerService', false],
            'debug.argument_resolver.service' => ['privates', 'debug.argument_resolver.service', 'getDebug_ArgumentResolver_ServiceService', false],
            'debug.argument_resolver.service.inner' => ['privates', 'debug.argument_resolver.service.inner', 'getDebug_ArgumentResolver_Service_InnerService', false],
            'debug.argument_resolver.session' => ['privates', 'debug.argument_resolver.session', 'getDebug_ArgumentResolver_SessionService', false],
            'debug.argument_resolver.session.inner' => ['privates', 'debug.argument_resolver.session.inner', 'getDebug_ArgumentResolver_Session_InnerService', false],
            'debug.argument_resolver.variadic' => ['privates', 'debug.argument_resolver.variadic', 'getDebug_ArgumentResolver_VariadicService', false],
            'debug.argument_resolver.variadic.inner' => ['privates', 'debug.argument_resolver.variadic.inner', 'getDebug_ArgumentResolver_Variadic_InnerService', false],
            'debug.controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
            'debug.controller_resolver.inner' => ['privates', 'debug.controller_resolver.inner', 'getDebug_ControllerResolver_InnerService', false],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'debug.event_dispatcher.inner' => ['privates', 'debug.event_dispatcher.inner', 'getDebug_EventDispatcher_InnerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'debug.file_link_formatter.url_format' => ['privates', 'debug.file_link_formatter.url_format', 'getDebug_FileLinkFormatter_UrlFormatService', false],
            'debug.log_processor' => ['privates', 'debug.log_processor', 'getDebug_LogProcessorService', false],
            'debug.security.access.decision_manager' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'debug.security.access.decision_manager.inner' => ['privates', 'debug.security.access.decision_manager.inner', 'getDebug_Security_Access_DecisionManager_InnerService', false],
            'debug.security.firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'debug.security.user_value_resolver' => ['privates', 'debug.security.user_value_resolver', 'getDebug_Security_UserValueResolverService', false],
            'debug.security.user_value_resolver.inner' => ['privates', 'debug.security.user_value_resolver.inner', 'getDebug_Security_UserValueResolver_InnerService', false],
            'debug.security.voter.security.access.authenticated_voter' => ['privates', 'debug.security.voter.security.access.authenticated_voter', 'getDebug_Security_Voter_Security_Access_AuthenticatedVoterService', false],
            'debug.security.voter.security.access.expression_voter' => ['privates', 'debug.security.voter.security.access.expression_voter', 'getDebug_Security_Voter_Security_Access_ExpressionVoterService', false],
            'debug.security.voter.security.access.simple_role_voter' => ['privates', 'debug.security.voter.security.access.simple_role_voter', 'getDebug_Security_Voter_Security_Access_SimpleRoleVoterService', false],
            'debug.security.voter.vote_listener' => ['privates', 'debug.security.voter.vote_listener', 'getDebug_Security_Voter_VoteListenerService', false],
            'debug.stopwatch' => ['privates', 'debug.stopwatch', 'getDebug_StopwatchService', false],
            'dependency_injection.config.container_parameters_resource_checker' => ['privates', 'dependency_injection.config.container_parameters_resource_checker', 'getDependencyInjection_Config_ContainerParametersResourceCheckerService', false],
            'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.dbal.connection_factory' => ['privates', 'doctrine.dbal.connection_factory', 'getDoctrine_Dbal_ConnectionFactoryService', false],
            'doctrine.dbal.default_connection.configuration' => ['privates', 'doctrine.dbal.default_connection.configuration', 'getDoctrine_Dbal_DefaultConnection_ConfigurationService', false],
            'doctrine.dbal.default_connection.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.dbal.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.dbal.logger' => ['privates', 'doctrine.dbal.logger', 'getDoctrine_Dbal_LoggerService', false],
            'doctrine.dbal.logger.chain.default' => ['privates', 'doctrine.dbal.logger.chain.default', 'getDoctrine_Dbal_Logger_Chain_DefaultService', false],
            'doctrine.dbal.logger.profiling.default' => ['privates', 'doctrine.dbal.logger.profiling.default', 'getDoctrine_Dbal_Logger_Profiling_DefaultService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService', false],
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService', false],
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService', false],
            'doctrine.orm.container_repository_factory' => ['privates', 'doctrine.orm.container_repository_factory', 'getDoctrine_Orm_ContainerRepositoryFactoryService', false],
            'doctrine.orm.default_annotation_metadata_driver' => ['privates', 'doctrine.orm.default_annotation_metadata_driver', 'getDoctrine_Orm_DefaultAnnotationMetadataDriverService', false],
            'doctrine.orm.default_configuration' => ['privates', 'doctrine.orm.default_configuration', 'getDoctrine_Orm_DefaultConfigurationService', false],
            'doctrine.orm.default_entity_listener_resolver' => ['privates', 'doctrine.orm.default_entity_listener_resolver', 'getDoctrine_Orm_DefaultEntityListenerResolverService', false],
            'doctrine.orm.default_entity_manager.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
            'doctrine.orm.default_manager_configurator' => ['privates', 'doctrine.orm.default_manager_configurator', 'getDoctrine_Orm_DefaultManagerConfiguratorService', false],
            'doctrine.orm.default_metadata_cache' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService', false],
            'doctrine.orm.default_metadata_driver' => ['privates', 'doctrine.orm.default_metadata_driver', 'getDoctrine_Orm_DefaultMetadataDriverService', false],
            'doctrine.orm.default_query_cache' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService', false],
            'doctrine.orm.default_result_cache' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService', false],
            'doctrine.orm.metadata.annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'doctrine.orm.naming_strategy.underscore_number_aware' => ['privates', 'doctrine.orm.naming_strategy.underscore_number_aware', 'getDoctrine_Orm_NamingStrategy_UnderscoreNumberAwareService', false],
            'doctrine.orm.proxy_cache_warmer' => ['privates', 'doctrine.orm.proxy_cache_warmer', 'getDoctrine_Orm_ProxyCacheWarmerService', false],
            'doctrine.orm.quote_strategy.default' => ['privates', 'doctrine.orm.quote_strategy.default', 'getDoctrine_Orm_QuoteStrategy_DefaultService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine.twig.doctrine_extension' => ['privates', 'doctrine.twig.doctrine_extension', 'getDoctrine_Twig_DoctrineExtensionService', false],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'error_renderer' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'error_renderer.html' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListener2Service', false],
            'file_locator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'fragment.handler' => ['privates', 'fragment.handler', 'getFragment_HandlerService', false],
            'fragment.renderer.inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
            'framework_extra_bundle.argument_name_convertor' => ['privates', 'framework_extra_bundle.argument_name_convertor', 'getFrameworkExtraBundle_ArgumentNameConvertorService', false],
            'framework_extra_bundle.date_time_param_converter' => ['privates', 'framework_extra_bundle.date_time_param_converter', 'getFrameworkExtraBundle_DateTimeParamConverterService', false],
            'framework_extra_bundle.event.is_granted' => ['privates', 'framework_extra_bundle.event.is_granted', 'getFrameworkExtraBundle_Event_IsGrantedService', false],
            'hateoas.configuration.metadata.annotation_driver' => ['privates', 'hateoas.configuration.metadata.annotation_driver', 'getHateoas_Configuration_Metadata_AnnotationDriverService', false],
            'hateoas.configuration.metadata.cache' => ['privates', 'hateoas.configuration.metadata.cache.file_cache', 'getHateoas_Configuration_Metadata_Cache_FileCacheService', false],
            'hateoas.configuration.metadata.cache.file_cache' => ['privates', 'hateoas.configuration.metadata.cache.file_cache', 'getHateoas_Configuration_Metadata_Cache_FileCacheService', false],
            'hateoas.configuration.metadata.chain_driver' => ['services', 'hateoas.configuration.metadata_driver', 'getHateoas_Configuration_MetadataDriverService', false],
            'hateoas.configuration.metadata.extension_driver' => ['privates', 'hateoas.configuration.metadata.extension_driver', 'getHateoas_Configuration_Metadata_ExtensionDriverService', false],
            'hateoas.configuration.metadata.lazy_loading_driver' => ['privates', 'hateoas.configuration.metadata.lazy_loading_driver', 'getHateoas_Configuration_Metadata_LazyLoadingDriverService', false],
            'hateoas.configuration.metadata.xml_driver' => ['privates', 'hateoas.configuration.metadata.xml_driver', 'getHateoas_Configuration_Metadata_XmlDriverService', false],
            'hateoas.configuration.metadata.yaml_driver' => ['privates', 'hateoas.configuration.metadata.yaml_driver', 'getHateoas_Configuration_Metadata_YamlDriverService', false],
            'hateoas.configuration.metadata_factory' => ['privates', 'hateoas.configuration.metadata_factory', 'getHateoas_Configuration_MetadataFactoryService', false],
            'hateoas.configuration.provider.chain' => ['services', 'hateoas.configuration.provider', 'getHateoas_Configuration_ProviderService', false],
            'hateoas.embeds_factory' => ['privates', 'hateoas.embeds_factory', 'getHateoas_EmbedsFactoryService', false],
            'hateoas.expression.link_expression_function' => ['privates', 'hateoas.expression.link_expression_function', 'getHateoas_Expression_LinkExpressionFunctionService', false],
            'hateoas.generator.symfony' => ['privates', 'hateoas.generator.symfony', 'getHateoas_Generator_SymfonyService', false],
            'hateoas.inline_deferrer.embeds' => ['privates', 'hateoas.inline_deferrer.embeds', 'getHateoas_InlineDeferrer_EmbedsService', false],
            'hateoas.inline_deferrer.links' => ['privates', 'hateoas.inline_deferrer.links', 'getHateoas_InlineDeferrer_LinksService', false],
            'hateoas.link_factory' => ['privates', 'hateoas.link_factory', 'getHateoas_LinkFactoryService', false],
            'hateoas.links_factory' => ['privates', 'hateoas.links_factory', 'getHateoas_LinksFactoryService', false],
            'hateoas.serializer.exclusion.expression_language_strategy' => ['privates', 'hateoas.serializer.exclusion.expression_language_strategy', 'getHateoas_Serializer_Exclusion_ExpressionLanguageStrategyService', false],
            'hateoas.serializer.exclusion_manager' => ['privates', 'hateoas.serializer.exclusion_manager', 'getHateoas_Serializer_ExclusionManagerService', false],
            'hateoas.serializer.json_hal' => ['privates', 'hateoas.serializer.json_hal', 'getHateoas_Serializer_JsonHalService', false],
            'hateoas.serializer.xml' => ['privates', 'hateoas.serializer.xml', 'getHateoas_Serializer_XmlService', false],
            'hateoas.twig.link' => ['privates', 'hateoas.twig.link', 'getHateoas_Twig_LinkService', false],
            'jms_serializer.accessor_strategy' => ['privates', 'jms_serializer.accessor_strategy.default', 'getJmsSerializer_AccessorStrategy_DefaultService', false],
            'jms_serializer.accessor_strategy.default' => ['privates', 'jms_serializer.accessor_strategy.default', 'getJmsSerializer_AccessorStrategy_DefaultService', false],
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', false],
            'jms_serializer.camel_case_naming_strategy' => ['privates', 'jms_serializer.camel_case_naming_strategy', 'getJmsSerializer_CamelCaseNamingStrategyService', false],
            'jms_serializer.configured_deserialization_context_factory' => ['services', 'jms_serializer.deserialization_context_factory', 'getJmsSerializer_DeserializationContextFactoryService', false],
            'jms_serializer.configured_serialization_context_factory' => ['services', 'jms_serializer.serialization_context_factory', 'getJmsSerializer_SerializationContextFactoryService', false],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', false],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', false],
            'jms_serializer.deserialization_graph_navigator_factory' => ['privates', 'jms_serializer.deserialization_graph_navigator_factory', 'getJmsSerializer_DeserializationGraphNavigatorFactoryService', false],
            'jms_serializer.doctrine_object_constructor' => ['services', 'jms_serializer.object_constructor', 'getJmsSerializer_ObjectConstructorService', false],
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', false],
            'jms_serializer.event_dispatcher' => ['privates', 'jms_serializer.event_dispatcher', 'getJmsSerializer_EventDispatcherService', false],
            'jms_serializer.expression_evaluator' => ['privates', 'jms_serializer.expression_evaluator', 'getJmsSerializer_ExpressionEvaluatorService', false],
            'jms_serializer.expression_language' => ['privates', 'jms_serializer.expression_language', 'getJmsSerializer_ExpressionLanguageService', false],
            'jms_serializer.expression_language.function_provider' => ['privates', 'jms_serializer.expression_language.function_provider', 'getJmsSerializer_ExpressionLanguage_FunctionProviderService', false],
            'jms_serializer.form_error_handler' => ['privates', 'jms_serializer.form_error_handler', 'getJmsSerializer_FormErrorHandlerService', false],
            'jms_serializer.handler_registry' => ['privates', 'jms_serializer.handler_registry', 'getJmsSerializer_HandlerRegistryService', false],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', false],
            'jms_serializer.json_deserialization_visitor' => ['privates', 'jms_serializer.json_deserialization_visitor', 'getJmsSerializer_JsonDeserializationVisitorService', false],
            'jms_serializer.json_serialization_visitor' => ['privates', 'jms_serializer.json_serialization_visitor', 'getJmsSerializer_JsonSerializationVisitorService', false],
            'jms_serializer.metadata.annotation_driver' => ['privates', 'jms_serializer.metadata.annotation_driver', 'getJmsSerializer_Metadata_AnnotationDriverService', false],
            'jms_serializer.metadata.cache' => ['privates', 'jms_serializer.metadata.cache.file_cache', 'getJmsSerializer_Metadata_Cache_FileCacheService', false],
            'jms_serializer.metadata.cache.file_cache' => ['privates', 'jms_serializer.metadata.cache.file_cache', 'getJmsSerializer_Metadata_Cache_FileCacheService', false],
            'jms_serializer.metadata.chain_driver' => ['privates', 'jms_serializer.metadata.chain_driver', 'getJmsSerializer_Metadata_ChainDriverService', false],
            'jms_serializer.metadata.doctrine_type_driver' => ['services', 'jms_serializer.metadata_driver', 'getJmsSerializer_MetadataDriverService', false],
            'jms_serializer.metadata.file_locator' => ['privates', 'jms_serializer.metadata.file_locator', 'getJmsSerializer_Metadata_FileLocatorService', false],
            'jms_serializer.metadata.lazy_loading_driver' => ['privates', 'jms_serializer.metadata.lazy_loading_driver', 'getJmsSerializer_Metadata_LazyLoadingDriverService', false],
            'jms_serializer.metadata.xml_driver' => ['privates', 'jms_serializer.metadata.xml_driver', 'getJmsSerializer_Metadata_XmlDriverService', false],
            'jms_serializer.metadata.yaml_driver' => ['privates', 'jms_serializer.metadata.yaml_driver', 'getJmsSerializer_Metadata_YamlDriverService', false],
            'jms_serializer.metadata_factory' => ['privates', 'jms_serializer.metadata_factory', 'getJmsSerializer_MetadataFactoryService', false],
            'jms_serializer.naming_strategy' => ['privates', 'jms_serializer.serialized_name_annotation_strategy', 'getJmsSerializer_SerializedNameAnnotationStrategyService', false],
            'jms_serializer.serialization_graph_navigator_factory' => ['privates', 'jms_serializer.serialization_graph_navigator_factory', 'getJmsSerializer_SerializationGraphNavigatorFactoryService', false],
            'jms_serializer.serialized_name_annotation_strategy' => ['privates', 'jms_serializer.serialized_name_annotation_strategy', 'getJmsSerializer_SerializedNameAnnotationStrategyService', false],
            'jms_serializer.serializer' => ['services', 'jms_serializer', 'getJmsSerializerService', false],
            'jms_serializer.stopwatch_subscriber' => ['privates', 'jms_serializer.stopwatch_subscriber', 'getJmsSerializer_StopwatchSubscriberService', false],
            'jms_serializer.twig_extension.serializer' => ['privates', 'jms_serializer.twig_extension.serializer', 'getJmsSerializer_TwigExtension_SerializerService', false],
            'jms_serializer.type_parser' => ['privates', 'jms_serializer.type_parser', 'getJmsSerializer_TypeParserService', false],
            'jms_serializer.unserialize_object_constructor' => ['privates', 'jms_serializer.unserialize_object_constructor', 'getJmsSerializer_UnserializeObjectConstructorService', false],
            'jms_serializer.xml_deserialization_visitor' => ['privates', 'jms_serializer.xml_deserialization_visitor', 'getJmsSerializer_XmlDeserializationVisitorService', false],
            'jms_serializer.xml_serialization_visitor' => ['privates', 'jms_serializer.xml_serialization_visitor', 'getJmsSerializer_XmlSerializationVisitorService', false],
            'lexik_jwt_authentication.encoder.lcobucci' => ['services', 'lexik_jwt_authentication.encoder', 'getLexikJwtAuthentication_EncoderService', false],
            'lexik_jwt_authentication.extractor.authorization_header_extractor' => ['privates', 'lexik_jwt_authentication.extractor.authorization_header_extractor', 'getLexikJwtAuthentication_Extractor_AuthorizationHeaderExtractorService', false],
            'lexik_jwt_authentication.extractor.chain_extractor' => ['privates', 'lexik_jwt_authentication.extractor.chain_extractor', 'getLexikJwtAuthentication_Extractor_ChainExtractorService', false],
            'lexik_jwt_authentication.handler.authentication_failure' => ['privates', 'lexik_jwt_authentication.handler.authentication_failure', 'getLexikJwtAuthentication_Handler_AuthenticationFailureService', false],
            'lexik_jwt_authentication.handler.authentication_success' => ['privates', 'lexik_jwt_authentication.handler.authentication_success', 'getLexikJwtAuthentication_Handler_AuthenticationSuccessService', false],
            'lexik_jwt_authentication.jws_provider.lcobucci' => ['privates', 'lexik_jwt_authentication.jws_provider.lcobucci', 'getLexikJwtAuthentication_JwsProvider_LcobucciService', false],
            'lexik_jwt_authentication.key_loader.raw' => ['services', 'lexik_jwt_authentication.key_loader', 'getLexikJwtAuthentication_KeyLoaderService', false],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'monolog.handler.main' => ['privates', 'monolog.handler.main', 'getMonolog_Handler_MainService', false],
            'monolog.handler.null_internal' => ['privates', 'monolog.handler.null_internal', 'getMonolog_Handler_NullInternalService', false],
            'monolog.logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'monolog.logger.cache' => ['privates', 'monolog.logger.cache', 'getMonolog_Logger_CacheService', false],
            'monolog.logger.console' => ['privates', 'monolog.logger.console', 'getMonolog_Logger_ConsoleService', false],
            'monolog.logger.doctrine' => ['privates', 'monolog.logger.doctrine', 'getMonolog_Logger_DoctrineService', false],
            'monolog.logger.event' => ['privates', 'monolog.logger.event', 'getMonolog_Logger_EventService', false],
            'monolog.logger.php' => ['privates', 'monolog.logger.php', 'getMonolog_Logger_PhpService', false],
            'monolog.logger.profiler' => ['privates', 'monolog.logger.profiler', 'getMonolog_Logger_ProfilerService', false],
            'monolog.logger.request' => ['privates', 'monolog.logger.request', 'getMonolog_Logger_RequestService', false],
            'monolog.logger.router' => ['privates', 'monolog.logger.router', 'getMonolog_Logger_RouterService', false],
            'monolog.logger.security' => ['privates', 'monolog.logger.security', 'getMonolog_Logger_SecurityService', false],
            'monolog.processor.psr_log_message' => ['privates', 'monolog.processor.psr_log_message', 'getMonolog_Processor_PsrLogMessageService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'profiler.storage' => ['privates', 'profiler.storage', 'getProfiler_StorageService', false],
            'profiler_listener' => ['privates', 'profiler_listener', 'getProfilerListenerService', false],
            'resolve_controller_name_subscriber' => ['privates', '.legacy_resolve_controller_name_subscriber', 'get_LegacyResolveControllerNameSubscriberService', false],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService', false],
            'router.default' => ['services', 'router', 'getRouterService', false],
            'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
            'routing.loader.annotation' => ['privates', 'routing.loader.annotation', 'getRouting_Loader_AnnotationService', false],
            'routing.loader.annotation.directory' => ['privates', 'routing.loader.annotation.directory', 'getRouting_Loader_Annotation_DirectoryService', false],
            'routing.loader.annotation.file' => ['privates', 'routing.loader.annotation.file', 'getRouting_Loader_Annotation_FileService', false],
            'routing.loader.container' => ['privates', 'routing.loader.container', 'getRouting_Loader_ContainerService', false],
            'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService', false],
            'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService', false],
            'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService', false],
            'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService', false],
            'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService', false],
            'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService', false],
            'secrets.local_vault' => ['privates', 'secrets.local_vault', 'getSecrets_LocalVaultService', false],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', false],
            'security.access.authenticated_voter' => ['privates', 'security.access.authenticated_voter', 'getSecurity_Access_AuthenticatedVoterService', false],
            'security.access.decision_manager' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'security.access.expression_voter' => ['privates', 'security.access.expression_voter', 'getSecurity_Access_ExpressionVoterService', false],
            'security.access.simple_role_voter' => ['privates', 'security.access.simple_role_voter', 'getSecurity_Access_SimpleRoleVoterService', false],
            'security.access_listener' => ['privates', 'security.access_listener', 'getSecurity_AccessListenerService', false],
            'security.access_map' => ['privates', 'security.access_map', 'getSecurity_AccessMapService', false],
            'security.authentication.guard_handler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', false],
            'security.authentication.listener.anonymous.api_miw' => ['privates', 'security.authentication.listener.anonymous.api_miw', 'getSecurity_Authentication_Listener_Anonymous_ApiMiwService', false],
            'security.authentication.listener.anonymous.login_check' => ['privates', 'security.authentication.listener.anonymous.login_check', 'getSecurity_Authentication_Listener_Anonymous_LoginCheckService', false],
            'security.authentication.listener.anonymous.main' => ['privates', 'security.authentication.listener.anonymous.main', 'getSecurity_Authentication_Listener_Anonymous_MainService', false],
            'security.authentication.listener.guard.api_miw' => ['privates', 'security.authentication.listener.guard.api_miw', 'getSecurity_Authentication_Listener_Guard_ApiMiwService', false],
            'security.authentication.manager' => ['privates', 'security.authentication.manager', 'getSecurity_Authentication_ManagerService', false],
            'security.authentication.provider.anonymous.api_miw' => ['privates', 'security.authentication.provider.anonymous.api_miw', 'getSecurity_Authentication_Provider_Anonymous_ApiMiwService', false],
            'security.authentication.provider.anonymous.login_check' => ['privates', 'security.authentication.provider.anonymous.login_check', 'getSecurity_Authentication_Provider_Anonymous_LoginCheckService', false],
            'security.authentication.provider.anonymous.main' => ['privates', 'security.authentication.provider.anonymous.main', 'getSecurity_Authentication_Provider_Anonymous_MainService', false],
            'security.authentication.provider.guard.api_miw' => ['privates', 'security.authentication.provider.guard.api_miw', 'getSecurity_Authentication_Provider_Guard_ApiMiwService', false],
            'security.authentication.retry_entry_point' => ['privates', 'security.authentication.retry_entry_point', 'getSecurity_Authentication_RetryEntryPointService', false],
            'security.authentication.session_strategy' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'security.authentication.session_strategy.main' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'security.authentication.trust_resolver' => ['privates', 'security.authentication.trust_resolver', 'getSecurity_Authentication_TrustResolverService', false],
            'security.channel_listener' => ['privates', 'security.channel_listener', 'getSecurity_ChannelListenerService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'security.context_listener.0' => ['privates', 'security.context_listener.0', 'getSecurity_ContextListener_0Service', false],
            'security.csrf.token_generator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', false],
            'security.csrf.token_storage' => ['privates', 'security.csrf.token_storage', 'getSecurity_Csrf_TokenStorageService', false],
            'security.encoder_factory' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'security.encoder_factory.generic' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'security.exception_listener.api_miw' => ['privates', 'security.exception_listener.api_miw', 'getSecurity_ExceptionListener_ApiMiwService', false],
            'security.exception_listener.login_check' => ['privates', 'security.exception_listener.login_check', 'getSecurity_ExceptionListener_LoginCheckService', false],
            'security.exception_listener.main' => ['privates', 'security.exception_listener.main', 'getSecurity_ExceptionListener_MainService', false],
            'security.expression_language' => ['privates', 'security.expression_language', 'getSecurity_ExpressionLanguageService', false],
            'security.firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'security.firewall.map' => ['privates', 'security.firewall.map', 'getSecurity_Firewall_MapService', false],
            'security.firewall.map.config.api_miw' => ['privates', 'security.firewall.map.config.api_miw', 'getSecurity_Firewall_Map_Config_ApiMiwService', false],
            'security.firewall.map.config.dev' => ['privates', 'security.firewall.map.config.dev', 'getSecurity_Firewall_Map_Config_DevService', false],
            'security.firewall.map.config.login_check' => ['privates', 'security.firewall.map.config.login_check', 'getSecurity_Firewall_Map_Config_LoginCheckService', false],
            'security.firewall.map.config.main' => ['privates', 'security.firewall.map.config.main', 'getSecurity_Firewall_Map_Config_MainService', false],
            'security.firewall.map.context.api_miw' => ['privates', 'security.firewall.map.context.api_miw', 'getSecurity_Firewall_Map_Context_ApiMiwService', false],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.login_check' => ['privates', 'security.firewall.map.context.login_check', 'getSecurity_Firewall_Map_Context_LoginCheckService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
            'security.http_utils' => ['privates', 'security.http_utils', 'getSecurity_HttpUtilsService', false],
            'security.logout_url_generator' => ['privates', 'security.logout_url_generator', 'getSecurity_LogoutUrlGeneratorService', false],
            'security.rememberme.response_listener' => ['privates', 'security.rememberme.response_listener', 'getSecurity_Rememberme_ResponseListenerService', false],
            'security.role_hierarchy' => ['privates', 'security.role_hierarchy', 'getSecurity_RoleHierarchyService', false],
            'security.untracked_token_storage' => ['privates', 'security.untracked_token_storage', 'getSecurity_UntrackedTokenStorageService', false],
            'security.user.provider.concrete.app_user_provider' => ['privates', 'security.user.provider.concrete.app_user_provider', 'getSecurity_User_Provider_Concrete_AppUserProviderService', false],
            'security.user_checker' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'security.user_checker.api_miw' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'security.user_checker.login_check' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'security.user_checker.main' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'security.user_password_encoder.generic' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'security.user_value_resolver' => ['privates', 'debug.security.user_value_resolver', 'getDebug_Security_UserValueResolverService', false],
            'sensio_framework_extra.cache.listener' => ['privates', 'sensio_framework_extra.cache.listener', 'getSensioFrameworkExtra_Cache_ListenerService', false],
            'sensio_framework_extra.controller.listener' => ['privates', 'sensio_framework_extra.controller.listener', 'getSensioFrameworkExtra_Controller_ListenerService', false],
            'sensio_framework_extra.converter.doctrine.orm' => ['privates', 'sensio_framework_extra.converter.doctrine.orm', 'getSensioFrameworkExtra_Converter_Doctrine_OrmService', false],
            'sensio_framework_extra.converter.doctrine.orm.expression_language' => ['privates', 'sensio_framework_extra.converter.doctrine.orm.expression_language.default', 'getSensioFrameworkExtra_Converter_Doctrine_Orm_ExpressionLanguage_DefaultService', false],
            'sensio_framework_extra.converter.doctrine.orm.expression_language.default' => ['privates', 'sensio_framework_extra.converter.doctrine.orm.expression_language.default', 'getSensioFrameworkExtra_Converter_Doctrine_Orm_ExpressionLanguage_DefaultService', false],
            'sensio_framework_extra.converter.listener' => ['privates', 'sensio_framework_extra.converter.listener', 'getSensioFrameworkExtra_Converter_ListenerService', false],
            'sensio_framework_extra.converter.manager' => ['privates', 'sensio_framework_extra.converter.manager', 'getSensioFrameworkExtra_Converter_ManagerService', false],
            'sensio_framework_extra.security.expression_language' => ['privates', 'sensio_framework_extra.security.expression_language.default', 'getSensioFrameworkExtra_Security_ExpressionLanguage_DefaultService', false],
            'sensio_framework_extra.security.expression_language.default' => ['privates', 'sensio_framework_extra.security.expression_language.default', 'getSensioFrameworkExtra_Security_ExpressionLanguage_DefaultService', false],
            'sensio_framework_extra.security.listener' => ['privates', 'sensio_framework_extra.security.listener', 'getSensioFrameworkExtra_Security_ListenerService', false],
            'sensio_framework_extra.view.guesser' => ['privates', 'sensio_framework_extra.view.guesser', 'getSensioFrameworkExtra_View_GuesserService', false],
            'sensio_framework_extra.view.listener' => ['privates', 'sensio_framework_extra.view.listener', 'getSensioFrameworkExtra_View_ListenerService', false],
            'session.attribute_bag' => ['privates', 'session.attribute_bag', 'getSession_AttributeBagService', false],
            'session.flash_bag' => ['privates', 'session.flash_bag', 'getSession_FlashBagService', false],
            'session.storage' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session.storage.filesystem' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session.storage.metadata_bag' => ['privates', 'session.storage.metadata_bag', 'getSession_Storage_MetadataBagService', false],
            'session.storage.mock_file' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session_listener' => ['privates', 'session_listener', 'getSessionListenerService', false],
            'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
            'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService', false],
            'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService', false],
            'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'twig.app_variable' => ['privates', 'twig.app_variable', 'getTwig_AppVariableService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'twig.configurator.environment' => ['privates', 'twig.configurator.environment', 'getTwig_Configurator_EnvironmentService', false],
            'twig.error_renderer.html' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'twig.error_renderer.html.inner' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'twig.extension.code' => ['privates', 'twig.extension.code', 'getTwig_Extension_CodeService', false],
            'twig.extension.debug' => ['privates', 'twig.extension.debug', 'getTwig_Extension_DebugService', false],
            'twig.extension.debug.stopwatch' => ['privates', 'twig.extension.debug.stopwatch', 'getTwig_Extension_Debug_StopwatchService', false],
            'twig.extension.expression' => ['privates', 'twig.extension.expression', 'getTwig_Extension_ExpressionService', false],
            'twig.extension.httpfoundation' => ['privates', 'twig.extension.httpfoundation', 'getTwig_Extension_HttpfoundationService', false],
            'twig.extension.httpkernel' => ['privates', 'twig.extension.httpkernel', 'getTwig_Extension_HttpkernelService', false],
            'twig.extension.logout_url' => ['privates', 'twig.extension.logout_url', 'getTwig_Extension_LogoutUrlService', false],
            'twig.extension.profiler' => ['privates', 'twig.extension.profiler', 'getTwig_Extension_ProfilerService', false],
            'twig.extension.routing' => ['privates', 'twig.extension.routing', 'getTwig_Extension_RoutingService', false],
            'twig.extension.security' => ['privates', 'twig.extension.security', 'getTwig_Extension_SecurityService', false],
            'twig.extension.security_csrf' => ['privates', 'twig.extension.security_csrf', 'getTwig_Extension_SecurityCsrfService', false],
            'twig.extension.trans' => ['privates', 'twig.extension.trans', 'getTwig_Extension_TransService', false],
            'twig.extension.webprofiler' => ['privates', 'twig.extension.webprofiler', 'getTwig_Extension_WebprofilerService', false],
            'twig.extension.yaml' => ['privates', 'twig.extension.yaml', 'getTwig_Extension_YamlService', false],
            'twig.loader' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.loader.filesystem' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.loader.native_filesystem' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.missing_extension_suggestor' => ['privates', 'twig.missing_extension_suggestor', 'getTwig_MissingExtensionSuggestorService', false],
            'twig.profile' => ['privates', 'twig.profile', 'getTwig_ProfileService', false],
            'twig.runtime.httpkernel' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'twig.runtime.security_csrf' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'twig.runtime_loader' => ['privates', 'twig.runtime_loader', 'getTwig_RuntimeLoaderService', false],
            'twig.template_cache_warmer' => ['privates', 'twig.template_cache_warmer', 'getTwig_TemplateCacheWarmerService', false],
            'twig.template_iterator' => ['privates', 'twig.template_iterator', 'getTwig_TemplateIteratorService', false],
            'url_helper' => ['privates', 'url_helper', 'getUrlHelperService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
            'web_profiler.csp.handler' => ['privates', 'web_profiler.csp.handler', 'getWebProfiler_Csp_HandlerService', false],
        ], [
            'App\\Command\\CreateUserCommand' => '?',
            'App\\EventListener\\ExceptionListener' => '?',
            'App\\Repository\\UserRepository' => '?',
            'Doctrine\\Common\\Annotations\\Reader' => '?',
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => '?',
            'Doctrine\\DBAL\\Connection' => '?',
            'Doctrine\\DBAL\\Driver\\Connection' => '?',
            'Doctrine\\ORM\\EntityManagerInterface' => '?',
            'Doctrine\\Persistence\\ManagerRegistry' => '?',
            'JMS\\Serializer\\ArrayTransformerInterface' => '?',
            'JMS\\Serializer\\ContextFactory\\DeserializationContextFactoryInterface' => '?',
            'JMS\\Serializer\\ContextFactory\\SerializationContextFactoryInterface' => '?',
            'JMS\\Serializer\\SerializerInterface' => '?',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Encoder\\JWTEncoderInterface' => '?',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationFailureHandler' => '?',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationSuccessHandler' => '?',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWSProvider\\JWSProviderInterface' => '?',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenInterface' => '?',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface' => '?',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\TokenExtractor\\TokenExtractorInterface' => '?',
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Psr\\Container\\ContainerInterface' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
            'Psr\\Log\\LoggerInterface $cacheLogger' => '?',
            'Psr\\Log\\LoggerInterface $consoleLogger' => '?',
            'Psr\\Log\\LoggerInterface $doctrineLogger' => '?',
            'Psr\\Log\\LoggerInterface $eventLogger' => '?',
            'Psr\\Log\\LoggerInterface $phpLogger' => '?',
            'Psr\\Log\\LoggerInterface $profilerLogger' => '?',
            'Psr\\Log\\LoggerInterface $requestLogger' => '?',
            'Psr\\Log\\LoggerInterface $routerLogger' => '?',
            'Psr\\Log\\LoggerInterface $securityLogger' => '?',
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\Filesystem\\Filesystem' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\UrlHelper' => '?',
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContext' => '?',
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
            'Symfony\\Component\\Routing\\RouterInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface' => '?',
            'Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\User\\UserProviderInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface' => '?',
            'Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler' => '?',
            'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils' => '?',
            'Symfony\\Component\\Security\\Http\\Firewall' => '?',
            'Symfony\\Component\\Security\\Http\\HttpUtils' => '?',
            'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface' => '?',
            'Symfony\\Component\\Stopwatch\\Stopwatch' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Twig\\Environment' => '?',
            'Twig_Environment' => '?',
            'annotation_reader' => '?',
            'annotations.cache' => '?',
            'annotations.cache_warmer' => '?',
            'annotations.cached_reader' => '?',
            'annotations.dummy_registry' => '?',
            'annotations.reader' => '?',
            'api_miw.event.jwt_created_listener' => '?',
            'api_miw.jwt_token_authenticator' => '?',
            'argument_metadata_factory' => '?',
            'argument_resolver' => '?',
            'argument_resolver.controller_locator' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.not_tagged_controller' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.variadic' => '?',
            'cache.annotations' => '?',
            'cache.annotations.recorder_inner' => '?',
            'cache.app.recorder_inner' => '?',
            'cache.default_clearer' => '?',
            'cache.default_marshaller' => '?',
            'cache.default_pdo_provider' => '?',
            'cache.doctrine.orm.default.metadata.recorder_inner' => '?',
            'cache.doctrine.orm.default.query.recorder_inner' => '?',
            'cache.doctrine.orm.default.result.recorder_inner' => '?',
            'cache.messenger.restart_workers_signal' => '?',
            'cache.messenger.restart_workers_signal.recorder_inner' => '?',
            'cache.property_info' => '?',
            'cache.property_info.recorder_inner' => '?',
            'cache.security_expression_language' => '?',
            'cache.security_expression_language.recorder_inner' => '?',
            'cache.serializer' => '?',
            'cache.serializer.recorder_inner' => '?',
            'cache.system.recorder_inner' => '?',
            'cache.validator' => '?',
            'cache.validator.recorder_inner' => '?',
            'config.resource.self_checking_resource_checker' => '?',
            'config_cache_factory' => '?',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_set' => '?',
            'console.command.yaml_lint' => '?',
            'console.error_listener' => '?',
            'console.suggest_missing_package_subscriber' => '?',
            'container.env_var_processor' => '?',
            'controller_name_converter' => '?',
            'controller_resolver' => '?',
            'data_collector.ajax' => '?',
            'data_collector.cache' => '?',
            'data_collector.config' => '?',
            'data_collector.doctrine' => '?',
            'data_collector.events' => '?',
            'data_collector.exception' => '?',
            'data_collector.logger' => '?',
            'data_collector.memory' => '?',
            'data_collector.request' => '?',
            'data_collector.router' => '?',
            'data_collector.security' => '?',
            'data_collector.time' => '?',
            'data_collector.twig' => '?',
            'debug.argument_resolver' => '?',
            'debug.argument_resolver.default' => '?',
            'debug.argument_resolver.default.inner' => '?',
            'debug.argument_resolver.inner' => '?',
            'debug.argument_resolver.not_tagged_controller' => '?',
            'debug.argument_resolver.not_tagged_controller.inner' => '?',
            'debug.argument_resolver.request' => '?',
            'debug.argument_resolver.request.inner' => '?',
            'debug.argument_resolver.request_attribute' => '?',
            'debug.argument_resolver.request_attribute.inner' => '?',
            'debug.argument_resolver.service' => '?',
            'debug.argument_resolver.service.inner' => '?',
            'debug.argument_resolver.session' => '?',
            'debug.argument_resolver.session.inner' => '?',
            'debug.argument_resolver.variadic' => '?',
            'debug.argument_resolver.variadic.inner' => '?',
            'debug.controller_resolver' => '?',
            'debug.controller_resolver.inner' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.event_dispatcher' => '?',
            'debug.event_dispatcher.inner' => '?',
            'debug.file_link_formatter' => '?',
            'debug.file_link_formatter.url_format' => '?',
            'debug.log_processor' => '?',
            'debug.security.access.decision_manager' => '?',
            'debug.security.access.decision_manager.inner' => '?',
            'debug.security.firewall' => '?',
            'debug.security.user_value_resolver' => '?',
            'debug.security.user_value_resolver.inner' => '?',
            'debug.security.voter.security.access.authenticated_voter' => '?',
            'debug.security.voter.security.access.expression_voter' => '?',
            'debug.security.voter.security.access.simple_role_voter' => '?',
            'debug.security.voter.vote_listener' => '?',
            'debug.stopwatch' => '?',
            'dependency_injection.config.container_parameters_resource_checker' => '?',
            'disallow_search_engine_index_response_listener' => '?',
            'doctrine.cache_clear_metadata_command' => '?',
            'doctrine.cache_clear_query_cache_command' => '?',
            'doctrine.cache_clear_result_command' => '?',
            'doctrine.cache_collection_region_command' => '?',
            'doctrine.clear_entity_region_command' => '?',
            'doctrine.clear_query_region_command' => '?',
            'doctrine.database_create_command' => '?',
            'doctrine.database_drop_command' => '?',
            'doctrine.database_import_command' => '?',
            'doctrine.dbal.connection_factory' => '?',
            'doctrine.dbal.default_connection.configuration' => '?',
            'doctrine.dbal.default_connection.event_manager' => '?',
            'doctrine.dbal.event_manager' => '?',
            'doctrine.dbal.logger' => '?',
            'doctrine.dbal.logger.chain.default' => '?',
            'doctrine.dbal.logger.profiling.default' => '?',
            'doctrine.ensure_production_settings_command' => '?',
            'doctrine.mapping_convert_command' => '?',
            'doctrine.mapping_import_command' => '?',
            'doctrine.mapping_info_command' => '?',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => '?',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => '?',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => '?',
            'doctrine.orm.container_repository_factory' => '?',
            'doctrine.orm.default_annotation_metadata_driver' => '?',
            'doctrine.orm.default_configuration' => '?',
            'doctrine.orm.default_entity_listener_resolver' => '?',
            'doctrine.orm.default_entity_manager.event_manager' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.default_manager_configurator' => '?',
            'doctrine.orm.default_metadata_cache' => '?',
            'doctrine.orm.default_metadata_driver' => '?',
            'doctrine.orm.default_query_cache' => '?',
            'doctrine.orm.default_result_cache' => '?',
            'doctrine.orm.metadata.annotation_reader' => '?',
            'doctrine.orm.naming_strategy.underscore_number_aware' => '?',
            'doctrine.orm.proxy_cache_warmer' => '?',
            'doctrine.orm.quote_strategy.default' => '?',
            'doctrine.query_dql_command' => '?',
            'doctrine.query_sql_command' => '?',
            'doctrine.schema_create_command' => '?',
            'doctrine.schema_drop_command' => '?',
            'doctrine.schema_update_command' => '?',
            'doctrine.schema_validate_command' => '?',
            'doctrine.twig.doctrine_extension' => '?',
            'error_handler.error_renderer.html' => '?',
            'error_renderer' => '?',
            'error_renderer.html' => '?',
            'exception_listener' => '?',
            'file_locator' => '?',
            'fragment.handler' => '?',
            'fragment.renderer.inline' => '?',
            'framework_extra_bundle.argument_name_convertor' => '?',
            'framework_extra_bundle.date_time_param_converter' => '?',
            'framework_extra_bundle.event.is_granted' => '?',
            'hateoas.configuration.metadata.annotation_driver' => '?',
            'hateoas.configuration.metadata.cache' => '?',
            'hateoas.configuration.metadata.cache.file_cache' => '?',
            'hateoas.configuration.metadata.chain_driver' => '?',
            'hateoas.configuration.metadata.extension_driver' => '?',
            'hateoas.configuration.metadata.lazy_loading_driver' => '?',
            'hateoas.configuration.metadata.xml_driver' => '?',
            'hateoas.configuration.metadata.yaml_driver' => '?',
            'hateoas.configuration.metadata_factory' => '?',
            'hateoas.configuration.provider.chain' => '?',
            'hateoas.embeds_factory' => '?',
            'hateoas.expression.link_expression_function' => '?',
            'hateoas.generator.symfony' => '?',
            'hateoas.inline_deferrer.embeds' => '?',
            'hateoas.inline_deferrer.links' => '?',
            'hateoas.link_factory' => '?',
            'hateoas.links_factory' => '?',
            'hateoas.serializer.exclusion.expression_language_strategy' => '?',
            'hateoas.serializer.exclusion_manager' => '?',
            'hateoas.serializer.json_hal' => '?',
            'hateoas.serializer.xml' => '?',
            'hateoas.twig.link' => '?',
            'jms_serializer.accessor_strategy' => '?',
            'jms_serializer.accessor_strategy.default' => '?',
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.camel_case_naming_strategy' => '?',
            'jms_serializer.configured_deserialization_context_factory' => '?',
            'jms_serializer.configured_serialization_context_factory' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.deserialization_graph_navigator_factory' => '?',
            'jms_serializer.doctrine_object_constructor' => '?',
            'jms_serializer.doctrine_proxy_subscriber' => '?',
            'jms_serializer.event_dispatcher' => '?',
            'jms_serializer.expression_evaluator' => '?',
            'jms_serializer.expression_language' => '?',
            'jms_serializer.expression_language.function_provider' => '?',
            'jms_serializer.form_error_handler' => '?',
            'jms_serializer.handler_registry' => '?',
            'jms_serializer.iterator_handler' => '?',
            'jms_serializer.json_deserialization_visitor' => '?',
            'jms_serializer.json_serialization_visitor' => '?',
            'jms_serializer.metadata.annotation_driver' => '?',
            'jms_serializer.metadata.cache' => '?',
            'jms_serializer.metadata.cache.file_cache' => '?',
            'jms_serializer.metadata.chain_driver' => '?',
            'jms_serializer.metadata.doctrine_type_driver' => '?',
            'jms_serializer.metadata.file_locator' => '?',
            'jms_serializer.metadata.lazy_loading_driver' => '?',
            'jms_serializer.metadata.xml_driver' => '?',
            'jms_serializer.metadata.yaml_driver' => '?',
            'jms_serializer.metadata_factory' => '?',
            'jms_serializer.naming_strategy' => '?',
            'jms_serializer.serialization_graph_navigator_factory' => '?',
            'jms_serializer.serialized_name_annotation_strategy' => '?',
            'jms_serializer.serializer' => '?',
            'jms_serializer.stopwatch_subscriber' => '?',
            'jms_serializer.twig_extension.serializer' => '?',
            'jms_serializer.type_parser' => '?',
            'jms_serializer.unserialize_object_constructor' => '?',
            'jms_serializer.xml_deserialization_visitor' => '?',
            'jms_serializer.xml_serialization_visitor' => '?',
            'lexik_jwt_authentication.encoder.lcobucci' => '?',
            'lexik_jwt_authentication.extractor.authorization_header_extractor' => '?',
            'lexik_jwt_authentication.extractor.chain_extractor' => '?',
            'lexik_jwt_authentication.handler.authentication_failure' => '?',
            'lexik_jwt_authentication.handler.authentication_success' => '?',
            'lexik_jwt_authentication.jws_provider.lcobucci' => '?',
            'lexik_jwt_authentication.key_loader.raw' => '?',
            'locale_listener' => '?',
            'logger' => '?',
            'monolog.handler.main' => '?',
            'monolog.handler.null_internal' => '?',
            'monolog.logger' => '?',
            'monolog.logger.cache' => '?',
            'monolog.logger.console' => '?',
            'monolog.logger.doctrine' => '?',
            'monolog.logger.event' => '?',
            'monolog.logger.php' => '?',
            'monolog.logger.profiler' => '?',
            'monolog.logger.request' => '?',
            'monolog.logger.router' => '?',
            'monolog.logger.security' => '?',
            'monolog.processor.psr_log_message' => '?',
            'parameter_bag' => '?',
            'profiler.storage' => '?',
            'profiler_listener' => '?',
            'resolve_controller_name_subscriber' => '?',
            'response_listener' => '?',
            'router.cache_warmer' => '?',
            'router.default' => '?',
            'router.request_context' => '?',
            'router_listener' => '?',
            'routing.loader.annotation' => '?',
            'routing.loader.annotation.directory' => '?',
            'routing.loader.annotation.file' => '?',
            'routing.loader.container' => '?',
            'routing.loader.directory' => '?',
            'routing.loader.glob' => '?',
            'routing.loader.php' => '?',
            'routing.loader.xml' => '?',
            'routing.loader.yml' => '?',
            'routing.resolver' => '?',
            'secrets.local_vault' => '?',
            'secrets.vault' => '?',
            'security.access.authenticated_voter' => '?',
            'security.access.decision_manager' => '?',
            'security.access.expression_voter' => '?',
            'security.access.simple_role_voter' => '?',
            'security.access_listener' => '?',
            'security.access_map' => '?',
            'security.authentication.guard_handler' => '?',
            'security.authentication.listener.anonymous.api_miw' => '?',
            'security.authentication.listener.anonymous.login_check' => '?',
            'security.authentication.listener.anonymous.main' => '?',
            'security.authentication.listener.guard.api_miw' => '?',
            'security.authentication.manager' => '?',
            'security.authentication.provider.anonymous.api_miw' => '?',
            'security.authentication.provider.anonymous.login_check' => '?',
            'security.authentication.provider.anonymous.main' => '?',
            'security.authentication.provider.guard.api_miw' => '?',
            'security.authentication.retry_entry_point' => '?',
            'security.authentication.session_strategy' => '?',
            'security.authentication.session_strategy.main' => '?',
            'security.authentication.trust_resolver' => '?',
            'security.channel_listener' => '?',
            'security.command.user_password_encoder' => '?',
            'security.context_listener.0' => '?',
            'security.csrf.token_generator' => '?',
            'security.csrf.token_storage' => '?',
            'security.encoder_factory' => '?',
            'security.encoder_factory.generic' => '?',
            'security.exception_listener.api_miw' => '?',
            'security.exception_listener.login_check' => '?',
            'security.exception_listener.main' => '?',
            'security.expression_language' => '?',
            'security.firewall' => '?',
            'security.firewall.map' => '?',
            'security.firewall.map.config.api_miw' => '?',
            'security.firewall.map.config.dev' => '?',
            'security.firewall.map.config.login_check' => '?',
            'security.firewall.map.config.main' => '?',
            'security.firewall.map.context.api_miw' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.login_check' => '?',
            'security.firewall.map.context.main' => '?',
            'security.http_utils' => '?',
            'security.logout_url_generator' => '?',
            'security.rememberme.response_listener' => '?',
            'security.role_hierarchy' => '?',
            'security.untracked_token_storage' => '?',
            'security.user.provider.concrete.app_user_provider' => '?',
            'security.user_checker' => '?',
            'security.user_checker.api_miw' => '?',
            'security.user_checker.login_check' => '?',
            'security.user_checker.main' => '?',
            'security.user_password_encoder.generic' => '?',
            'security.user_value_resolver' => '?',
            'sensio_framework_extra.cache.listener' => '?',
            'sensio_framework_extra.controller.listener' => '?',
            'sensio_framework_extra.converter.doctrine.orm' => '?',
            'sensio_framework_extra.converter.doctrine.orm.expression_language' => '?',
            'sensio_framework_extra.converter.doctrine.orm.expression_language.default' => '?',
            'sensio_framework_extra.converter.listener' => '?',
            'sensio_framework_extra.converter.manager' => '?',
            'sensio_framework_extra.security.expression_language' => '?',
            'sensio_framework_extra.security.expression_language.default' => '?',
            'sensio_framework_extra.security.listener' => '?',
            'sensio_framework_extra.view.guesser' => '?',
            'sensio_framework_extra.view.listener' => '?',
            'session.attribute_bag' => '?',
            'session.flash_bag' => '?',
            'session.storage' => '?',
            'session.storage.filesystem' => '?',
            'session.storage.metadata_bag' => '?',
            'session.storage.mock_file' => '?',
            'session_listener' => '?',
            'streamed_response_listener' => '?',
            'test.client.cookiejar' => '?',
            'test.client.history' => '?',
            'test.session.listener' => '?',
            'twig.app_variable' => '?',
            'twig.command.debug' => '?',
            'twig.command.lint' => '?',
            'twig.configurator.environment' => '?',
            'twig.error_renderer.html' => '?',
            'twig.error_renderer.html.inner' => '?',
            'twig.extension.code' => '?',
            'twig.extension.debug' => '?',
            'twig.extension.debug.stopwatch' => '?',
            'twig.extension.expression' => '?',
            'twig.extension.httpfoundation' => '?',
            'twig.extension.httpkernel' => '?',
            'twig.extension.logout_url' => '?',
            'twig.extension.profiler' => '?',
            'twig.extension.routing' => '?',
            'twig.extension.security' => '?',
            'twig.extension.security_csrf' => '?',
            'twig.extension.trans' => '?',
            'twig.extension.webprofiler' => '?',
            'twig.extension.yaml' => '?',
            'twig.loader' => '?',
            'twig.loader.filesystem' => '?',
            'twig.loader.native_filesystem' => '?',
            'twig.missing_extension_suggestor' => '?',
            'twig.profile' => '?',
            'twig.runtime.httpkernel' => '?',
            'twig.runtime.security_csrf' => '?',
            'twig.runtime_loader' => '?',
            'twig.template_cache_warmer' => '?',
            'twig.template_iterator' => '?',
            'url_helper' => '?',
            'validate_request_listener' => '?',
            'web_profiler.csp.handler' => '?',
        ]);
    }

    /**
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    protected function getTest_ServiceContainerService()
    {
        return $this->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($this->services['kernel'] ?? $this->get('kernel', 1)), 'test.private_services_locator');
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()), ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $a = ($this->privates['twig.missing_extension_suggestor'] ?? ($this->privates['twig.missing_extension_suggestor'] = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor()));

        $instance->addExtension(($this->privates['twig.extension.security_csrf'] ?? ($this->privates['twig.extension.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfExtension())));
        $instance->addExtension(($this->privates['twig.extension.profiler'] ?? $this->getTwig_Extension_ProfilerService()));
        $instance->addExtension(($this->privates['twig.extension.trans'] ?? ($this->privates['twig.extension.trans'] = new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL))));
        $instance->addExtension(($this->privates['twig.extension.code'] ?? $this->getTwig_Extension_CodeService()));
        $instance->addExtension(($this->privates['twig.extension.routing'] ?? $this->getTwig_Extension_RoutingService()));
        $instance->addExtension(($this->privates['twig.extension.yaml'] ?? ($this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension())));
        $instance->addExtension(($this->privates['twig.extension.debug.stopwatch'] ?? $this->getTwig_Extension_Debug_StopwatchService()));
        $instance->addExtension(($this->privates['twig.extension.expression'] ?? ($this->privates['twig.extension.expression'] = new \Symfony\Bridge\Twig\Extension\ExpressionExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpkernel'] ?? ($this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpfoundation'] ?? $this->getTwig_Extension_HttpfoundationService()));
        $instance->addExtension(($this->privates['twig.extension.logout_url'] ?? $this->getTwig_Extension_LogoutUrlService()));
        $instance->addExtension(($this->privates['twig.extension.security'] ?? $this->getTwig_Extension_SecurityService()));
        $instance->addExtension(($this->privates['doctrine.twig.doctrine_extension'] ?? ($this->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension())));
        $instance->addExtension(($this->privates['twig.extension.debug'] ?? ($this->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension())));
        $instance->addExtension(($this->privates['twig.extension.webprofiler'] ?? $this->getTwig_Extension_WebprofilerService()));
        $instance->addExtension(($this->privates['jms_serializer.twig_extension.serializer'] ?? ($this->privates['jms_serializer.twig_extension.serializer'] = new \JMS\Serializer\Twig\SerializerRuntimeExtension())));
        $instance->addExtension(($this->privates['hateoas.twig.link'] ?? $this->getHateoas_Twig_LinkService()));
        $instance->addGlobal('app', ($this->privates['twig.app_variable'] ?? $this->getTwig_AppVariableService()));
        $instance->addRuntimeLoader(($this->privates['twig.runtime_loader'] ?? $this->getTwig_RuntimeLoaderService()));
        $instance->registerUndefinedFilterCallback([0 => $a, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $a, 1 => 'suggestFunction']);
        ($this->privates['twig.configurator.environment'] ?? $this->getTwig_Configurator_EnvironmentService())->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     *
     * @deprecated The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        @trigger_error('The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.', E_USER_DEPRECATED);

        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()));
    }

    /**
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    protected function getWebProfiler_Controller_ExceptionPanelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ExceptionPanelController.php';

        return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ProfilerController.php';

        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($this->services['router'] ?? $this->getRouterService()), ($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), $this->parameters['data_collector.templates'], ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\RouterController.php';

        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private '.legacy_controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function get_LegacyControllerNameConverterService()
    {
        return $this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false);
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private '.service_locator.I3K77mT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_I3K77mTService()
    {
        return $this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []);
    }

    /**
     * Gets the private '.service_locator.vdmMuyE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VdmMuyEService()
    {
        return $this->privates['.service_locator.vdmMuyE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /**
     * Gets the private 'App\Command\CreateUserCommand' shared autowired service.
     *
     * @return \App\Command\CreateUserCommand
     */
    protected function getCreateUserCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\src\\Command\\CreateUserCommand.php';

        $this->privates['App\\Command\\CreateUserCommand'] = $instance = new \App\Command\CreateUserCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setName('miw:create-user');

        return $instance;
    }

    /**
     * Gets the private 'App\EventListener\ExceptionListener' shared autowired service.
     *
     * @return \App\EventListener\ExceptionListener
     */
    protected function getExceptionListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\EventListener\\ExceptionListener.php';

        return $this->privates['App\\EventListener\\ExceptionListener'] = new \App\EventListener\ExceptionListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\UserRepository.php';

        return $this->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\PhpArrayTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\PhpArrayAdapter.php';

        return $this->privates['annotations.cache'] = new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->privates['annotations.cache'] ?? $this->getAnnotations_CacheService()), true);
    }

    /**
     * Gets the private 'annotations.dummy_registry' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationRegistry
     */
    protected function getAnnotations_DummyRegistryService()
    {
        $this->privates['annotations.dummy_registry'] = $instance = new \Doctrine\Common\Annotations\AnnotationRegistry();

        $instance->registerUniqueLoader('class_exists');

        return $instance;
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', ($this->privates['annotations.dummy_registry'] ?? $this->getAnnotations_DummyRegistryService()));

        return $instance;
    }

    /**
     * Gets the private 'api_miw.event.jwt_created_listener' shared autowired service.
     *
     * @return \App\EventListener\JWTCreatedListener
     */
    protected function getApiMiw_Event_JwtCreatedListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\EventListener\\JWTCreatedListener.php';

        return $this->privates['api_miw.event.jwt_created_listener'] = new \App\EventListener\JWTCreatedListener();
    }

    /**
     * Gets the private 'api_miw.jwt_token_authenticator' shared autowired service.
     *
     * @return \App\Security\JWTTokenAuthenticator
     */
    protected function getApiMiw_JwtTokenAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\src\\Security\\JWTTokenAuthenticator.php';

        return $this->privates['api_miw.jwt_token_authenticator'] = new \App\Security\JWTTokenAuthenticator(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->privates['lexik_jwt_authentication.extractor.chain_extractor'] ?? $this->getLexikJwtAuthentication_Extractor_ChainExtractorService()));
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.annotations.recorder_inner'] ?? $this->getCache_Annotations_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.annotations.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Annotations_RecorderInnerService()
    {
        return $this->privates['cache.annotations.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('C6-Sv1ZjgU', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.app.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_App_RecorderInnerService()
    {
        $this->privates['cache.app.recorder_inner'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('ZUR0IUMpZr', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /**
     * Gets the private 'cache.default_marshaller' shared service.
     *
     * @return \Symfony\Component\Cache\Marshaller\DefaultMarshaller
     */
    protected function getCache_DefaultMarshallerService()
    {
        return $this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL);
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Metadata_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Query_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.query.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Result_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.result.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Messenger_RestartWorkersSignalService()
    {
        return $this->privates['cache.messenger.restart_workers_signal'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.messenger.restart_workers_signal.recorder_inner'] ?? $this->getCache_Messenger_RestartWorkersSignal_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.messenger.restart_workers_signal.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_Messenger_RestartWorkersSignal_RecorderInnerService()
    {
        $this->privates['cache.messenger.restart_workers_signal.recorder_inner'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('dYRF-GjwkM', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.property_info.recorder_inner'] ?? $this->getCache_PropertyInfo_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.property_info.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyInfo_RecorderInnerService()
    {
        return $this->privates['cache.property_info.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('kYIvmQ6VlF', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.security_expression_language.recorder_inner'] ?? $this->getCache_SecurityExpressionLanguage_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.security_expression_language.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SecurityExpressionLanguage_RecorderInnerService()
    {
        return $this->privates['cache.security_expression_language.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('tEYPdpD0nK', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.serializer.recorder_inner'] ?? $this->getCache_Serializer_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.serializer.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Serializer_RecorderInnerService()
    {
        return $this->privates['cache.serializer.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('5DAvVpT3oP', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.system.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_System_RecorderInnerService()
    {
        return $this->privates['cache.system.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ZfCjlWDdag', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.validator.recorder_inner'] ?? $this->getCache_Validator_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.validator.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Validator_RecorderInnerService()
    {
        return $this->privates['cache.validator.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('w9S1DhIDCf', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'config.resource.self_checking_resource_checker' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function getConfig_Resource_SelfCheckingResourceCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Resource\\SelfCheckingResourceChecker.php';

        return $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal', 7 => 'cache.doctrine.orm.default.metadata', 8 => 'cache.doctrine.orm.default.result', 9 => 'cache.doctrine.orm.default.query', 10 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
            yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
            yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
            yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
            yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
            yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService());
            yield 'cache.doctrine.orm.default.metadata' => ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService());
            yield 'cache.doctrine.orm.default.result' => ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
            yield 'cache.doctrine.orm.default.query' => ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
            yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
        }, 11));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\yaml\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\EventListener\\ErrorListener.php';

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['monolog.logger.console'] ?? $this->getMonolog_Logger_ConsoleService()));
    }

    /**
     * Gets the private 'console.suggest_missing_package_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber
     */
    protected function getConsole_SuggestMissingPackageSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\EventListener\\SuggestMissingPackageSubscriber.php';

        return $this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber();
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'data_collector.ajax' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector
     */
    protected function getDataCollector_AjaxService()
    {
        return $this->privates['data_collector.ajax'] = new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector();
    }

    /**
     * Gets the private 'data_collector.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DataCollector\CacheDataCollector
     */
    protected function getDataCollector_CacheService()
    {
        $this->privates['data_collector.cache'] = $instance = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();

        $instance->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $instance->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $instance->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $instance->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $instance->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $instance->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $instance->addInstance('cache.messenger.restart_workers_signal', ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()));
        $instance->addInstance('cache.doctrine.orm.default.metadata', ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $instance->addInstance('cache.doctrine.orm.default.result', ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $instance->addInstance('cache.doctrine.orm.default.query', ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $instance->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.config' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector
     */
    protected function getDataCollector_ConfigService()
    {
        $this->privates['data_collector.config'] = $instance = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();

        if ($this->has('kernel')) {
            $instance->setKernel(($this->services['kernel'] ?? $this->get('kernel', 3)));
        }

        return $instance;
    }

    /**
     * Gets the private 'data_collector.doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector
     */
    protected function getDataCollector_DoctrineService()
    {
        $this->privates['data_collector.doctrine'] = $instance = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.events' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\EventDataCollector
     */
    protected function getDataCollector_EventsService()
    {
        return $this->privates['data_collector.events'] = new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'data_collector.exception' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector
     */
    protected function getDataCollector_ExceptionService()
    {
        return $this->privates['data_collector.exception'] = new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector();
    }

    /**
     * Gets the private 'data_collector.logger' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector
     */
    protected function getDataCollector_LoggerService()
    {
        return $this->privates['data_collector.logger'] = new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector(($this->privates['monolog.logger.profiler'] ?? $this->getMonolog_Logger_ProfilerService()), ($this->targetDir.''.'/srcApp_KernelTestDebugContainer'), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'data_collector.memory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector
     */
    protected function getDataCollector_MemoryService()
    {
        return $this->privates['data_collector.memory'] = new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector
     */
    protected function getDataCollector_SecurityService()
    {
        return $this->privates['data_collector.security'] = new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService()));
    }

    /**
     * Gets the private 'data_collector.time' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector
     */
    protected function getDataCollector_TimeService()
    {
        return $this->privates['data_collector.time'] = new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector(($this->services['kernel'] ?? $this->get('kernel', 3)), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'data_collector.twig' shared service.
     *
     * @return \Symfony\Bridge\Twig\DataCollector\TwigDataCollector
     */
    protected function getDataCollector_TwigService()
    {
        return $this->privates['data_collector.twig'] = new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->privates['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(($this->privates['debug.argument_resolver.inner'] ?? $this->getDebug_ArgumentResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.default.inner'] ?? ($this->privates['debug.argument_resolver.default.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.default.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getDebug_ArgumentResolver_Default_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver
     */
    protected function getDebug_ArgumentResolver_InnerService()
    {
        return $this->privates['debug.argument_resolver.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->getDebug_ArgumentResolver_RequestAttributeService());
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->getDebug_ArgumentResolver_RequestService());
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->getDebug_ArgumentResolver_SessionService());
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->getDebug_Security_UserValueResolverService());
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->getDebug_ArgumentResolver_ServiceService());
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->getDebug_ArgumentResolver_DefaultService());
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->getDebug_ArgumentResolver_VariadicService());
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->getDebug_ArgumentResolver_NotTaggedControllerService());
        }, 8));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.not_tagged_controller.inner'] ?? $this->getDebug_ArgumentResolver_NotTaggedController_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedController_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.request.inner'] ?? ($this->privates['debug.argument_resolver.request.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getDebug_ArgumentResolver_Request_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.request_attribute.inner'] ?? ($this->privates['debug.argument_resolver.request_attribute.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttribute_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.service.inner'] ?? $this->getDebug_ArgumentResolver_Service_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.service.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getDebug_ArgumentResolver_Service_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

        return $this->privates['debug.argument_resolver.service.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /**
     * Gets the private 'debug.argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.session.inner'] ?? ($this->privates['debug.argument_resolver.session.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.session.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getDebug_ArgumentResolver_Session_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.variadic.inner'] ?? ($this->privates['debug.argument_resolver.variadic.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getDebug_ArgumentResolver_Variadic_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->privates['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(($this->privates['debug.controller_resolver.inner'] ?? $this->getDebug_ControllerResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.controller_resolver.inner' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getDebug_ControllerResolver_InnerService()
    {
        return $this->privates['debug.controller_resolver.inner'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['monolog.logger.php'] ?? $this->getMonolog_Logger_PhpService()), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.event_dispatcher.inner' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getDebug_EventDispatcher_InnerService()
    {
        return $this->privates['debug.event_dispatcher.inner'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->getDebug_FileLinkFormatter_UrlFormatService());
        });
    }

    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    protected function getDebug_FileLinkFormatter_UrlFormatService()
    {
        return $this->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($this->services['router'] ?? $this->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(($this->privates['debug.security.access.decision_manager.inner'] ?? $this->getDebug_Security_Access_DecisionManager_InnerService()));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager.inner' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManager_InnerService()
    {
        return $this->privates['debug.security.access.decision_manager.inner'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->getDebug_Security_Voter_Security_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->getDebug_Security_Voter_Security_Access_SimpleRoleVoterService());
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->getDebug_Security_Voter_Security_Access_ExpressionVoterService());
        }, 3), 'affirmative', false, true);
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_Security_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.security.user_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.security.user_value_resolver.inner'] ?? $this->getDebug_Security_UserValueResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver.inner' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getDebug_Security_UserValueResolver_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Controller\\UserValueResolver.php';

        return $this->privates['debug.security.user_value_resolver.inner'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';

        return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.authenticated_voter'] ?? $this->getSecurity_Access_AuthenticatedVoterService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';

        return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.expression_voter'] ?? $this->getSecurity_Access_ExpressionVoterService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_SimpleRoleVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\RoleVoter.php';

        return $this->privates['debug.security.voter.security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    protected function getDebug_Security_Voter_VoteListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\EventListener\\VoteListener.php';

        return $this->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'dependency_injection.config.container_parameters_resource_checker' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function getDependencyInjection_Config_ContainerParametersResourceCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\Config\\ContainerParametersResourceChecker.php';

        return $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private 'disallow_search_engine_index_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener
     */
    protected function getDisallowSearchEngineIndexResponseListenerService()
    {
        return $this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener();
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';

        return $this->privates['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]);
    }

    /**
     * Gets the private 'doctrine.dbal.default_connection.configuration' shared service.
     *
     * @return \Doctrine\DBAL\Configuration
     */
    protected function getDoctrine_Dbal_DefaultConnection_ConfigurationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';

        $this->privates['doctrine.dbal.default_connection.configuration'] = $instance = new \Doctrine\DBAL\Configuration();

        $instance->setSQLLogger(($this->privates['doctrine.dbal.logger.chain.default'] ?? $this->getDoctrine_Dbal_Logger_Chain_DefaultService()));

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.default_connection.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    protected function getDoctrine_Dbal_DefaultConnection_EventManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php';

        $this->privates['doctrine.dbal.default_connection.event_manager'] = $instance = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $instance->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.logger' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Logger\DbalLogger
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Logger\\DbalLogger.php';

        return $this->privates['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger(($this->privates['monolog.logger.doctrine'] ?? $this->getMonolog_Logger_DoctrineService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.chain.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\LoggerChain
     */
    protected function getDoctrine_Dbal_Logger_Chain_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\LoggerChain.php';

        $this->privates['doctrine.dbal.logger.chain.default'] = $instance = new \Doctrine\DBAL\Logging\LoggerChain();

        $instance->addLogger(($this->privates['doctrine.dbal.logger'] ?? $this->getDoctrine_Dbal_LoggerService()));
        $instance->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DoctrineProvider.php';

        return $this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DoctrineProvider.php';

        return $this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DoctrineProvider.php';

        return $this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
    }

    /**
     * Gets the private 'doctrine.orm.container_repository_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory
     */
    protected function getDoctrine_Orm_ContainerRepositoryFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php';

        return $this->privates['doctrine.orm.container_repository_factory'] = new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'App\\Repository\\UserRepository' => '?',
        ]));
    }

    /**
     * Gets the private 'doctrine.orm.default_annotation_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\AnnotationDriver
     */
    protected function getDoctrine_Orm_DefaultAnnotationMetadataDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver.php';

        return $this->privates['doctrine.orm.default_annotation_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'\\src\\Entity')]);
    }

    /**
     * Gets the private 'doctrine.orm.default_configuration' shared service.
     *
     * @return \Doctrine\ORM\Configuration
     */
    protected function getDoctrine_Orm_DefaultConfigurationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Configuration.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ContainerEntityListenerResolver.php';

        $this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

        $instance->setEntityNamespaces(['App' => 'App\\Entity']);
        $instance->setMetadataCacheImpl(($this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] ?? $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()));
        $instance->setQueryCacheImpl(($this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] ?? $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()));
        $instance->setResultCacheImpl(($this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] ?? $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()));
        $instance->setMetadataDriverImpl(($this->privates['doctrine.orm.default_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultMetadataDriverService()));
        $instance->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(true);
        $instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $instance->setNamingStrategy(($this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] ?? ($this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true))));
        $instance->setQuoteStrategy(($this->privates['doctrine.orm.quote_strategy.default'] ?? ($this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy())));
        $instance->setEntityListenerResolver(($this->privates['doctrine.orm.default_entity_listener_resolver'] ?? ($this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))));
        $instance->setRepositoryFactory(($this->privates['doctrine.orm.container_repository_factory'] ?? $this->getDoctrine_Orm_ContainerRepositoryFactoryService()));

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ContainerEntityListenerResolver.php';

        return $this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php';

        return $this->privates['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /**
     * Gets the private 'doctrine.orm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain
     */
    protected function getDoctrine_Orm_DefaultMetadataDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain.php';

        $this->privates['doctrine.orm.default_metadata_driver'] = $instance = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $instance->addDriver(($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultAnnotationMetadataDriverService()), 'App\\Entity');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.naming_strategy.underscore_number_aware' shared service.
     *
     * @return \Doctrine\ORM\Mapping\UnderscoreNamingStrategy
     */
    protected function getDoctrine_Orm_NamingStrategy_UnderscoreNumberAwareService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy.php';

        return $this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true);
    }

    /**
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\CacheWarmer\\ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.quote_strategy.default' shared service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultQuoteStrategy
     */
    protected function getDoctrine_Orm_QuoteStrategy_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy.php';

        return $this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy();
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.twig.doctrine_extension' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension
     */
    protected function getDoctrine_Twig_DoctrineExtensionService()
    {
        return $this->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension();
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListener2Service()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'\\src/Resources'), [0 => (\dirname(__DIR__, 4).'\\src')], false);
    }

    /**
     * Gets the private 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\LazyLoadingFragmentHandler.php';

        return $this->privates['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true);
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.date_time_param_converter' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getFrameworkExtraBundle_DateTimeParamConverterService()
    {
        return $this->privates['framework_extra_bundle.date_time_param_converter'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'hateoas.configuration.metadata.annotation_driver' shared service.
     *
     * @return \Hateoas\Configuration\Metadata\Driver\AnnotationDriver
     */
    protected function getHateoas_Configuration_Metadata_AnnotationDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Metadata\\Driver\\CheckExpressionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Metadata\\Driver\\AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

        return $this->privates['hateoas.configuration.metadata.annotation_driver'] = new \Hateoas\Configuration\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), ($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()), ($this->services['hateoas.configuration.provider'] ?? $this->getHateoas_Configuration_ProviderService()), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /**
     * Gets the private 'hateoas.configuration.metadata.cache.file_cache' shared service.
     *
     * @return \Metadata\Cache\FileCache
     */
    protected function getHateoas_Configuration_Metadata_Cache_FileCacheService()
    {
        return $this->privates['hateoas.configuration.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($this->targetDir.''.'/hateoas'));
    }

    /**
     * Gets the private 'hateoas.configuration.metadata.extension_driver' shared service.
     *
     * @return \Hateoas\Configuration\Metadata\Driver\ExtensionDriver
     */
    protected function getHateoas_Configuration_Metadata_ExtensionDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Metadata\\Driver\\ExtensionDriver.php';

        return $this->privates['hateoas.configuration.metadata.extension_driver'] = new \Hateoas\Configuration\Metadata\Driver\ExtensionDriver(($this->privates['hateoas.configuration.metadata.annotation_driver'] ?? $this->getHateoas_Configuration_Metadata_AnnotationDriverService()));
    }

    /**
     * Gets the private 'hateoas.configuration.metadata.lazy_loading_driver' shared service.
     *
     * @return \Metadata\Driver\LazyLoadingDriver
     */
    protected function getHateoas_Configuration_Metadata_LazyLoadingDriverService()
    {
        return $this->privates['hateoas.configuration.metadata.lazy_loading_driver'] = new \Metadata\Driver\LazyLoadingDriver($this, 'hateoas.configuration.metadata_driver');
    }

    /**
     * Gets the private 'hateoas.configuration.metadata.xml_driver' shared service.
     *
     * @return \Hateoas\Configuration\Metadata\Driver\XmlDriver
     */
    protected function getHateoas_Configuration_Metadata_XmlDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Metadata\\Driver\\CheckExpressionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Metadata\\Driver\\XmlDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

        return $this->privates['hateoas.configuration.metadata.xml_driver'] = new \Hateoas\Configuration\Metadata\Driver\XmlDriver(($this->privates['jms_serializer.metadata.file_locator'] ?? ($this->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]))), ($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()), ($this->services['hateoas.configuration.provider'] ?? $this->getHateoas_Configuration_ProviderService()), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /**
     * Gets the private 'hateoas.configuration.metadata.yaml_driver' shared service.
     *
     * @return \Hateoas\Configuration\Metadata\Driver\YamlDriver
     */
    protected function getHateoas_Configuration_Metadata_YamlDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Metadata\\Driver\\CheckExpressionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Configuration\\Metadata\\Driver\\YamlDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

        return $this->privates['hateoas.configuration.metadata.yaml_driver'] = new \Hateoas\Configuration\Metadata\Driver\YamlDriver(($this->privates['jms_serializer.metadata.file_locator'] ?? ($this->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]))), ($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()), ($this->services['hateoas.configuration.provider'] ?? $this->getHateoas_Configuration_ProviderService()), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /**
     * Gets the private 'hateoas.configuration.metadata_factory' shared service.
     *
     * @return \Metadata\MetadataFactory
     */
    protected function getHateoas_Configuration_MetadataFactoryService()
    {
        $this->privates['hateoas.configuration.metadata_factory'] = $instance = new \Metadata\MetadataFactory(($this->privates['hateoas.configuration.metadata.lazy_loading_driver'] ?? ($this->privates['hateoas.configuration.metadata.lazy_loading_driver'] = new \Metadata\Driver\LazyLoadingDriver($this, 'hateoas.configuration.metadata_driver'))), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(($this->privates['hateoas.configuration.metadata.cache.file_cache'] ?? ($this->privates['hateoas.configuration.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($this->targetDir.''.'/hateoas')))));

        return $instance;
    }

    /**
     * Gets the private 'hateoas.embeds_factory' shared service.
     *
     * @return \Hateoas\Factory\EmbeddedsFactory
     */
    protected function getHateoas_EmbedsFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Factory\\EmbeddedsFactory.php';

        return $this->privates['hateoas.embeds_factory'] = new \Hateoas\Factory\EmbeddedsFactory(($this->privates['hateoas.configuration.metadata_factory'] ?? $this->getHateoas_Configuration_MetadataFactoryService()), ($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()), ($this->privates['hateoas.serializer.exclusion_manager'] ?? $this->getHateoas_Serializer_ExclusionManagerService()));
    }

    /**
     * Gets the private 'hateoas.expression.link_expression_function' shared service.
     *
     * @return \Bazinga\Bundle\HateoasBundle\Expression\LinkExpressionFunction
     */
    protected function getHateoas_Expression_LinkExpressionFunctionService()
    {
        return $this->privates['hateoas.expression.link_expression_function'] = new \Bazinga\Bundle\HateoasBundle\Expression\LinkExpressionFunction();
    }

    /**
     * Gets the private 'hateoas.generator.symfony' shared service.
     *
     * @return \Hateoas\UrlGenerator\SymfonyUrlGenerator
     */
    protected function getHateoas_Generator_SymfonyService()
    {
        return $this->privates['hateoas.generator.symfony'] = new \Hateoas\UrlGenerator\SymfonyUrlGenerator(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'hateoas.inline_deferrer.embeds' shared service.
     *
     * @return \Hateoas\Serializer\Metadata\InlineDeferrer
     */
    protected function getHateoas_InlineDeferrer_EmbedsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\Metadata\\InlineDeferrer.php';

        return $this->privates['hateoas.inline_deferrer.embeds'] = new \Hateoas\Serializer\Metadata\InlineDeferrer();
    }

    /**
     * Gets the private 'hateoas.inline_deferrer.links' shared service.
     *
     * @return \Hateoas\Serializer\Metadata\InlineDeferrer
     */
    protected function getHateoas_InlineDeferrer_LinksService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\Metadata\\InlineDeferrer.php';

        return $this->privates['hateoas.inline_deferrer.links'] = new \Hateoas\Serializer\Metadata\InlineDeferrer();
    }

    /**
     * Gets the private 'hateoas.link_factory' shared service.
     *
     * @return \Hateoas\Factory\LinkFactory
     */
    protected function getHateoas_LinkFactoryService()
    {
        return $this->privates['hateoas.link_factory'] = new \Hateoas\Factory\LinkFactory(($this->services['hateoas.generator.registry'] ?? $this->getHateoas_Generator_RegistryService()), ($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()));
    }

    /**
     * Gets the private 'hateoas.links_factory' shared service.
     *
     * @return \Hateoas\Factory\LinksFactory
     */
    protected function getHateoas_LinksFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Factory\\LinksFactory.php';

        return $this->privates['hateoas.links_factory'] = new \Hateoas\Factory\LinksFactory(($this->privates['hateoas.configuration.metadata_factory'] ?? $this->getHateoas_Configuration_MetadataFactoryService()), ($this->privates['hateoas.link_factory'] ?? $this->getHateoas_LinkFactoryService()), ($this->privates['hateoas.serializer.exclusion_manager'] ?? $this->getHateoas_Serializer_ExclusionManagerService()));
    }

    /**
     * Gets the private 'hateoas.serializer.exclusion.expression_language_strategy' shared service.
     *
     * @return \JMS\Serializer\Exclusion\ExpressionLanguageExclusionStrategy
     */
    protected function getHateoas_Serializer_Exclusion_ExpressionLanguageStrategyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Exclusion\\ExpressionLanguageExclusionStrategy.php';

        return $this->privates['hateoas.serializer.exclusion.expression_language_strategy'] = new \JMS\Serializer\Exclusion\ExpressionLanguageExclusionStrategy(($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()));
    }

    /**
     * Gets the private 'hateoas.serializer.exclusion_manager' shared service.
     *
     * @return \Hateoas\Serializer\ExclusionManager
     */
    protected function getHateoas_Serializer_ExclusionManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\ExclusionManager.php';

        return $this->privates['hateoas.serializer.exclusion_manager'] = new \Hateoas\Serializer\ExclusionManager(($this->privates['hateoas.serializer.exclusion.expression_language_strategy'] ?? $this->getHateoas_Serializer_Exclusion_ExpressionLanguageStrategyService()));
    }

    /**
     * Gets the private 'hateoas.serializer.json_hal' shared service.
     *
     * @return \Hateoas\Serializer\JsonHalSerializer
     */
    protected function getHateoas_Serializer_JsonHalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\JsonHalSerializer.php';

        return $this->privates['hateoas.serializer.json_hal'] = new \Hateoas\Serializer\JsonHalSerializer();
    }

    /**
     * Gets the private 'hateoas.serializer.xml' shared service.
     *
     * @return \Hateoas\Serializer\XmlSerializer
     */
    protected function getHateoas_Serializer_XmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas\\src\\Serializer\\XmlSerializer.php';

        return $this->privates['hateoas.serializer.xml'] = new \Hateoas\Serializer\XmlSerializer();
    }

    /**
     * Gets the private 'hateoas.twig.link' shared service.
     *
     * @return \Hateoas\Twig\Extension\LinkExtension
     */
    protected function getHateoas_Twig_LinkService()
    {
        return $this->privates['hateoas.twig.link'] = new \Hateoas\Twig\Extension\LinkExtension(($this->services['hateoas.helper.link'] ?? $this->getHateoas_Helper_LinkService()));
    }

    /**
     * Gets the private 'jms_serializer.accessor_strategy.default' shared service.
     *
     * @return \JMS\Serializer\Accessor\DefaultAccessorStrategy
     */
    protected function getJmsSerializer_AccessorStrategy_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Accessor\\AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Accessor\\DefaultAccessorStrategy.php';

        return $this->privates['jms_serializer.accessor_strategy.default'] = new \JMS\Serializer\Accessor\DefaultAccessorStrategy(($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()));
    }

    /**
     * Gets the private 'jms_serializer.array_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\ArrayCollectionHandler.php';

        return $this->privates['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(false);
    }

    /**
     * Gets the private 'jms_serializer.camel_case_naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\CamelCaseNamingStrategy
     */
    protected function getJmsSerializer_CamelCaseNamingStrategyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Naming\\PropertyNamingStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Naming\\CamelCaseNamingStrategy.php';

        return $this->privates['jms_serializer.camel_case_naming_strategy'] = new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true);
    }

    /**
     * Gets the private 'jms_serializer.constraint_violation_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\ConstraintViolationHandler.php';

        return $this->privates['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the private 'jms_serializer.datetime_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\DateHandler
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\DateHandler.php';

        return $this->privates['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sP', 'Europe/Berlin', true);
    }

    /**
     * Gets the private 'jms_serializer.deserialization_graph_navigator_factory' shared service.
     *
     * @return \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory
     */
    protected function getJmsSerializer_DeserializationGraphNavigatorFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\DeserializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Construction\\ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Construction\\UnserializeObjectConstructor.php';

        return $this->privates['jms_serializer.deserialization_graph_navigator_factory'] = new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory(($this->privates['jms_serializer.metadata_factory'] ?? $this->getJmsSerializer_MetadataFactoryService()), ($this->privates['jms_serializer.handler_registry'] ?? $this->getJmsSerializer_HandlerRegistryService()), ($this->privates['jms_serializer.unserialize_object_constructor'] ?? ($this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor())), ($this->privates['jms_serializer.accessor_strategy.default'] ?? $this->getJmsSerializer_AccessorStrategy_DefaultService()), ($this->privates['jms_serializer.event_dispatcher'] ?? $this->getJmsSerializer_EventDispatcherService()), ($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()));
    }

    /**
     * Gets the private 'jms_serializer.doctrine_proxy_subscriber' shared service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\EventDispatcher\\EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber.php';

        return $this->privates['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false);
    }

    /**
     * Gets the private 'jms_serializer.event_dispatcher' shared service.
     *
     * @return \JMS\Serializer\EventDispatcher\LazyEventDispatcher
     */
    protected function getJmsSerializer_EventDispatcherService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\EventDispatcher\\EventDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\EventDispatcher\\EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\EventDispatcher\\LazyEventDispatcher.php';

        $this->privates['jms_serializer.event_dispatcher'] = $instance = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'hateoas.event_listener.json' => ['services', 'hateoas.event_listener.json', 'getHateoas_EventListener_JsonService', false],
            'hateoas.event_listener.xml' => ['services', 'hateoas.event_listener.xml', 'getHateoas_EventListener_XmlService', false],
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', false],
            'jms_serializer.stopwatch_subscriber' => ['privates', 'jms_serializer.stopwatch_subscriber', 'getJmsSerializer_StopwatchSubscriberService', false],
        ], [
            'hateoas.event_listener.json' => '?',
            'hateoas.event_listener.xml' => '?',
            'jms_serializer.doctrine_proxy_subscriber' => '?',
            'jms_serializer.stopwatch_subscriber' => '?',
        ]));

        $instance->setListeners(['serializer.post_serialize' => [0 => [0 => [0 => 'hateoas.event_listener.xml', 1 => 'onPostSerialize'], 1 => NULL, 2 => 'xml'], 1 => [0 => [0 => 'hateoas.event_listener.json', 1 => 'onPostSerialize'], 1 => NULL, 2 => 'json'], 2 => [0 => [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'], 1 => NULL, 2 => NULL, 3 => NULL]], 'serializer.pre_serialize' => [0 => [0 => [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => NULL], 1 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 2 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ORM\\PersistentCollection'], 3 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\MongoDB\\PersistentCollection'], 4 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\PHPCR\\PersistentCollection'], 5 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 6 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'ProxyManager\\Proxy\\LazyLoadingInterface']]]);

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.expression_evaluator' shared service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator
     */
    protected function getJmsSerializer_ExpressionEvaluatorService()
    {
        return $this->privates['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator(($this->privates['jms_serializer.expression_language'] ?? $this->getJmsSerializer_ExpressionLanguageService()), ['container' => $this]);
    }

    /**
     * Gets the private 'jms_serializer.expression_language' shared service.
     *
     * @return \Symfony\Component\ExpressionLanguage\ExpressionLanguage
     */
    protected function getJmsSerializer_ExpressionLanguageService()
    {
        $this->privates['jms_serializer.expression_language'] = $instance = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();

        $instance->registerProvider(($this->privates['jms_serializer.expression_language.function_provider'] ?? ($this->privates['jms_serializer.expression_language.function_provider'] = new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider())));
        $instance->registerProvider(($this->privates['hateoas.expression.link_expression_function'] ?? ($this->privates['hateoas.expression.link_expression_function'] = new \Bazinga\Bundle\HateoasBundle\Expression\LinkExpressionFunction())));

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.expression_language.function_provider' shared service.
     *
     * @return \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider
     */
    protected function getJmsSerializer_ExpressionLanguage_FunctionProviderService()
    {
        return $this->privates['jms_serializer.expression_language.function_provider'] = new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider();
    }

    /**
     * Gets the private 'jms_serializer.form_error_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\FormErrorHandler.php';

        return $this->privates['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler(NULL);
    }

    /**
     * Gets the private 'jms_serializer.handler_registry' shared service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\HandlerRegistry.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\LazyHandlerRegistry.php';

        return $this->privates['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', false],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', false],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', false],
            'jms_serializer.form_error_handler' => ['privates', 'jms_serializer.form_error_handler', 'getJmsSerializer_FormErrorHandlerService', false],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', false],
        ], [
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.form_error_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
        ]), [1 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Symfony\\Component\\Validator\\ConstraintViolationList' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']], 'Symfony\\Component\\Validator\\ConstraintViolation' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']], 'Symfony\\Component\\Form\\Form' => ['xml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'], 'json' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson']], 'Symfony\\Component\\Form\\FormError' => ['xml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'], 'json' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']]], 2 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']]]]);
    }

    /**
     * Gets the private 'jms_serializer.iterator_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\IteratorHandler
     */
    protected function getJmsSerializer_IteratorHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Handler\\IteratorHandler.php';

        return $this->privates['jms_serializer.iterator_handler'] = new \JMS\Serializer\Handler\IteratorHandler();
    }

    /**
     * Gets the private 'jms_serializer.json_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\JsonDeserializationVisitorFactory.php';

        $this->privates['jms_serializer.json_deserialization_visitor'] = $instance = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.json_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\SerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\JsonSerializationVisitorFactory.php';

        $this->privates['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();

        $instance->setOptions(1024);

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.metadata.annotation_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\AnnotationDriver
     */
    protected function getJmsSerializer_Metadata_AnnotationDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Metadata\\Driver\\ExpressionMetadataTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Metadata\\Driver\\AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

        return $this->privates['jms_serializer.metadata.annotation_driver'] = new \JMS\Serializer\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), ($this->privates['jms_serializer.serialized_name_annotation_strategy'] ?? $this->getJmsSerializer_SerializedNameAnnotationStrategyService()), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /**
     * Gets the private 'jms_serializer.metadata.cache.file_cache' shared service.
     *
     * @return \Metadata\Cache\FileCache
     */
    protected function getJmsSerializer_Metadata_Cache_FileCacheService()
    {
        return $this->privates['jms_serializer.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($this->targetDir.''.'/jms_serializer'));
    }

    /**
     * Gets the private 'jms_serializer.metadata.chain_driver' shared service.
     *
     * @return \Metadata\Driver\DriverChain
     */
    protected function getJmsSerializer_Metadata_ChainDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\DriverChain.php';

        return $this->privates['jms_serializer.metadata.chain_driver'] = new \Metadata\Driver\DriverChain([0 => ($this->privates['jms_serializer.metadata.yaml_driver'] ?? $this->getJmsSerializer_Metadata_YamlDriverService()), 1 => ($this->privates['jms_serializer.metadata.xml_driver'] ?? $this->getJmsSerializer_Metadata_XmlDriverService()), 2 => ($this->privates['jms_serializer.metadata.annotation_driver'] ?? $this->getJmsSerializer_Metadata_AnnotationDriverService())]);
    }

    /**
     * Gets the private 'jms_serializer.metadata.file_locator' shared service.
     *
     * @return \Metadata\Driver\FileLocator
     */
    protected function getJmsSerializer_Metadata_FileLocatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocator.php';

        return $this->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]);
    }

    /**
     * Gets the private 'jms_serializer.metadata.lazy_loading_driver' shared service.
     *
     * @return \Metadata\Driver\LazyLoadingDriver
     */
    protected function getJmsSerializer_Metadata_LazyLoadingDriverService()
    {
        return $this->privates['jms_serializer.metadata.lazy_loading_driver'] = new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver');
    }

    /**
     * Gets the private 'jms_serializer.metadata.xml_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\XmlDriver
     */
    protected function getJmsSerializer_Metadata_XmlDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Metadata\\Driver\\ExpressionMetadataTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Metadata\\Driver\\XmlDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

        return $this->privates['jms_serializer.metadata.xml_driver'] = new \JMS\Serializer\Metadata\Driver\XmlDriver(($this->privates['jms_serializer.metadata.file_locator'] ?? ($this->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]))), ($this->privates['jms_serializer.serialized_name_annotation_strategy'] ?? $this->getJmsSerializer_SerializedNameAnnotationStrategyService()), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /**
     * Gets the private 'jms_serializer.metadata.yaml_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\YamlDriver
     */
    protected function getJmsSerializer_Metadata_YamlDriverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Metadata\\Driver\\ExpressionMetadataTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Metadata\\Driver\\YamlDriver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

        return $this->privates['jms_serializer.metadata.yaml_driver'] = new \JMS\Serializer\Metadata\Driver\YamlDriver(($this->privates['jms_serializer.metadata.file_locator'] ?? ($this->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]))), ($this->privates['jms_serializer.serialized_name_annotation_strategy'] ?? $this->getJmsSerializer_SerializedNameAnnotationStrategyService()), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /**
     * Gets the private 'jms_serializer.metadata_factory' shared service.
     *
     * @return \Metadata\MetadataFactory
     */
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->privates['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(($this->privates['jms_serializer.metadata.lazy_loading_driver'] ?? ($this->privates['jms_serializer.metadata.lazy_loading_driver'] = new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'))), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(($this->privates['jms_serializer.metadata.cache.file_cache'] ?? ($this->privates['jms_serializer.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($this->targetDir.''.'/jms_serializer')))));

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.serialization_graph_navigator_factory' shared service.
     *
     * @return \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory
     */
    protected function getJmsSerializer_SerializationGraphNavigatorFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\SerializationGraphNavigatorFactory.php';

        return $this->privates['jms_serializer.serialization_graph_navigator_factory'] = new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory(($this->privates['jms_serializer.metadata_factory'] ?? $this->getJmsSerializer_MetadataFactoryService()), ($this->privates['jms_serializer.handler_registry'] ?? $this->getJmsSerializer_HandlerRegistryService()), ($this->privates['jms_serializer.accessor_strategy.default'] ?? $this->getJmsSerializer_AccessorStrategy_DefaultService()), ($this->privates['jms_serializer.event_dispatcher'] ?? $this->getJmsSerializer_EventDispatcherService()), ($this->privates['jms_serializer.expression_evaluator'] ?? $this->getJmsSerializer_ExpressionEvaluatorService()));
    }

    /**
     * Gets the private 'jms_serializer.serialized_name_annotation_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\SerializedNameAnnotationStrategy
     */
    protected function getJmsSerializer_SerializedNameAnnotationStrategyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Naming\\PropertyNamingStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Naming\\SerializedNameAnnotationStrategy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Naming\\CamelCaseNamingStrategy.php';

        return $this->privates['jms_serializer.serialized_name_annotation_strategy'] = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(($this->privates['jms_serializer.camel_case_naming_strategy'] ?? ($this->privates['jms_serializer.camel_case_naming_strategy'] = new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true))));
    }

    /**
     * Gets the private 'jms_serializer.stopwatch_subscriber' shared service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\EventDispatcher\\EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer-bundle\\Serializer\\StopwatchEventSubscriber.php';

        return $this->privates['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'jms_serializer.twig_extension.serializer' shared service.
     *
     * @return \JMS\Serializer\Twig\SerializerRuntimeExtension
     */
    protected function getJmsSerializer_TwigExtension_SerializerService()
    {
        return $this->privates['jms_serializer.twig_extension.serializer'] = new \JMS\Serializer\Twig\SerializerRuntimeExtension();
    }

    /**
     * Gets the private 'jms_serializer.type_parser' shared service.
     *
     * @return \JMS\Serializer\Type\Parser
     */
    protected function getJmsSerializer_TypeParserService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

        return $this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser();
    }

    /**
     * Gets the private 'jms_serializer.unserialize_object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Construction\\ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Construction\\UnserializeObjectConstructor.php';

        return $this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the private 'jms_serializer.xml_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\XmlDeserializationVisitorFactory.php';

        return $this->privates['jms_serializer.xml_deserialization_visitor'] = new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory();
    }

    /**
     * Gets the private 'jms_serializer.xml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\SerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\XmlSerializationVisitorFactory.php';

        $this->privates['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory();

        $instance->setFormatOutput(true);

        return $instance;
    }

    /**
     * Gets the private 'lexik_jwt_authentication.extractor.authorization_header_extractor' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor
     */
    protected function getLexikJwtAuthentication_Extractor_AuthorizationHeaderExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\TokenExtractor\\TokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\TokenExtractor\\AuthorizationHeaderTokenExtractor.php';

        return $this->privates['lexik_jwt_authentication.extractor.authorization_header_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization');
    }

    /**
     * Gets the private 'lexik_jwt_authentication.extractor.chain_extractor' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor
     */
    protected function getLexikJwtAuthentication_Extractor_ChainExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\TokenExtractor\\TokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\TokenExtractor\\ChainTokenExtractor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\TokenExtractor\\AuthorizationHeaderTokenExtractor.php';

        return $this->privates['lexik_jwt_authentication.extractor.chain_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor([0 => ($this->privates['lexik_jwt_authentication.extractor.authorization_header_extractor'] ?? ($this->privates['lexik_jwt_authentication.extractor.authorization_header_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization')))]);
    }

    /**
     * Gets the private 'lexik_jwt_authentication.handler.authentication_failure' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler
     */
    protected function getLexikJwtAuthentication_Handler_AuthenticationFailureService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Security\\Http\\Authentication\\AuthenticationFailureHandler.php';

        return $this->privates['lexik_jwt_authentication.handler.authentication_failure'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'lexik_jwt_authentication.handler.authentication_success' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler
     */
    protected function getLexikJwtAuthentication_Handler_AuthenticationSuccessService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Security\\Http\\Authentication\\AuthenticationSuccessHandler.php';

        return $this->privates['lexik_jwt_authentication.handler.authentication_success'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'lexik_jwt_authentication.jws_provider.lcobucci' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider
     */
    protected function getLexikJwtAuthentication_JwsProvider_LcobucciService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\JWSProvider\\JWSProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\JWSProvider\\LcobucciJWSProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\RawKeyLoader.php';

        return $this->privates['lexik_jwt_authentication.jws_provider.lcobucci'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider(($this->services['lexik_jwt_authentication.key_loader'] ?? ($this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), $this->getEnv('JWT_PASSPHRASE')))), 'openssl', 'RS256', 3600, 0);
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'\\log/test.log'), 100, true, NULL, false);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->privates['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->privates['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->privates['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->privates['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->privates['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->privates['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler.storage' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage
     */
    protected function getProfiler_StorageService()
    {
        return $this->privates['profiler.storage'] = new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler'));
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'routing.loader.annotation' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader
     */
    protected function getRouting_Loader_AnnotationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\AnnotatedRouteControllerLoader.php';

        return $this->privates['routing.loader.annotation'] = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'routing.loader.annotation.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader
     */
    protected function getRouting_Loader_Annotation_DirectoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationDirectoryLoader.php';

        return $this->privates['routing.loader.annotation.directory'] = new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /**
     * Gets the private 'routing.loader.annotation.file' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationFileLoader
     */
    protected function getRouting_Loader_Annotation_FileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';

        return $this->privates['routing.loader.annotation.file'] = new \Symfony\Component\Routing\Loader\AnnotationFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /**
     * Gets the private 'routing.loader.container' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\ContainerLoader
     */
    protected function getRouting_Loader_ContainerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\LegacyRouteLoaderContainer.php';

        return $this->privates['routing.loader.container'] = new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ])));
    }

    /**
     * Gets the private 'routing.loader.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\DirectoryLoader
     */
    protected function getRouting_Loader_DirectoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\DirectoryLoader.php';

        return $this->privates['routing.loader.directory'] = new \Symfony\Component\Routing\Loader\DirectoryLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.glob' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\GlobFileLoader
     */
    protected function getRouting_Loader_GlobService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\GlobFileLoader.php';

        return $this->privates['routing.loader.glob'] = new \Symfony\Component\Routing\Loader\GlobFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    protected function getRouting_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\PhpFileLoader.php';

        return $this->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.xml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\XmlFileLoader
     */
    protected function getRouting_Loader_XmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\XmlFileLoader.php';

        return $this->privates['routing.loader.xml'] = new \Symfony\Component\Routing\Loader\XmlFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.yml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\YamlFileLoader.php';

        return $this->privates['routing.loader.yml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    protected function getRouting_ResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolver.php';

        $this->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($this->privates['routing.loader.xml'] ?? $this->getRouting_Loader_XmlService()));
        $instance->addLoader(($this->privates['routing.loader.yml'] ?? $this->getRouting_Loader_YmlService()));
        $instance->addLoader(($this->privates['routing.loader.php'] ?? $this->getRouting_Loader_PhpService()));
        $instance->addLoader(($this->privates['routing.loader.glob'] ?? $this->getRouting_Loader_GlobService()));
        $instance->addLoader(($this->privates['routing.loader.directory'] ?? $this->getRouting_Loader_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.container'] ?? $this->getRouting_Loader_ContainerService()));
        $instance->addLoader(($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.directory'] ?? $this->getRouting_Loader_Annotation_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.file'] ?? $this->getRouting_Loader_Annotation_FileService()));

        return $instance;
    }

    /**
     * Gets the private 'secrets.local_vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault
     */
    protected function getSecrets_LocalVaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        return $this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local'));
    }

    /**
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    protected function getSecrets_VaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';

        return $this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'));
    }

    /**
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\AuthenticatedVoter.php';

        return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))));
    }

    /**
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\ExpressionVoter.php';

        return $this->privates['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(($this->privates['security.expression_language'] ?? $this->getSecurity_ExpressionLanguageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))));
    }

    /**
     * Gets the private 'security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter
     */
    protected function getSecurity_Access_SimpleRoleVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\RoleVoter.php';

        return $this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter();
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AccessListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';

        return $this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap();
    }

    /**
     * Gets the private 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

        $this->privates['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), [0 => 'login_check', 1 => 'api_miw']);

        $instance->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.api_miw' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_ApiMiwService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.api_miw'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.login_check' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_LoginCheckService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.login_check'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.guard.api_miw' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_ApiMiwService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Firewall\\GuardAuthenticationListener.php';

        return $this->privates['security.authentication.listener.guard.api_miw'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(($this->privates['security.authentication.guard_handler'] ?? $this->getSecurity_Authentication_GuardHandlerService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'api_miw', new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_miw.jwt_token_authenticator'] ?? $this->getApiMiw_JwtTokenAuthenticatorService());
        }, 1), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.anonymous.login_check'] ?? ($this->privates['security.authentication.provider.anonymous.login_check'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 1 => ($this->privates['security.authentication.provider.guard.api_miw'] ?? $this->getSecurity_Authentication_Provider_Guard_ApiMiwService());
            yield 2 => ($this->privates['security.authentication.provider.anonymous.api_miw'] ?? ($this->privates['security.authentication.provider.anonymous.api_miw'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 3 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 4), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.api_miw' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_ApiMiwService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AnonymousAuthenticationProvider.php';

        return $this->privates['security.authentication.provider.anonymous.api_miw'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'));
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.login_check' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_LoginCheckService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AnonymousAuthenticationProvider.php';

        return $this->privates['security.authentication.provider.anonymous.login_check'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'));
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AnonymousAuthenticationProvider.php';

        return $this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'));
    }

    /**
     * Gets the private 'security.authentication.provider.guard.api_miw' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_ApiMiwService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Provider\\GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

        return $this->privates['security.authentication.provider.guard.api_miw'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_miw.jwt_token_authenticator'] ?? $this->getApiMiw_JwtTokenAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService()), 'api_miw', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'security.authentication.retry_entry_point' shared service.
     *
     * @return \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint
     */
    protected function getSecurity_Authentication_RetryEntryPointService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\RetryAuthenticationEntryPoint.php';

        return $this->privates['security.authentication.retry_entry_point'] = new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443);
    }

    /**
     * Gets the private 'security.authentication.session_strategy' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

        return $this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL);
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ChannelListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\RetryAuthenticationEntryPoint.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.retry_entry_point'] ?? ($this->privates['security.authentication.retry_entry_point'] = new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443))), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Command\\UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Entity\\User']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ContextListener.php';

        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
        }, 1), 'main', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /**
     * Gets the private 'security.csrf.token_generator' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator
     */
    protected function getSecurity_Csrf_TokenGeneratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\UriSafeTokenGenerator.php';

        return $this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator();
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\SessionTokenStorage.php';

        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\User' => ['algorithm' => 'auto', 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => NULL, 'memory_cost' => NULL, 'time_cost' => NULL, 'threads' => NULL]]);
    }

    /**
     * Gets the private 'security.exception_listener.api_miw' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    protected function getSecurity_ExceptionListener_ApiMiwService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ExceptionListener.php';

        return $this->privates['security.exception_listener.api_miw'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'api_miw', ($this->privates['api_miw.jwt_token_authenticator'] ?? $this->getApiMiw_JwtTokenAuthenticatorService()), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true);
    }

    /**
     * Gets the private 'security.exception_listener.login_check' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    protected function getSecurity_ExceptionListener_LoginCheckService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ExceptionListener.php';

        return $this->privates['security.exception_listener.login_check'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'login_check', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true);
    }

    /**
     * Gets the private 'security.exception_listener.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    protected function getSecurity_ExceptionListener_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ExceptionListener.php';

        return $this->privates['security.exception_listener.main'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'main', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false);
    }

    /**
     * Gets the private 'security.expression_language' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\ExpressionLanguage
     */
    protected function getSecurity_ExpressionLanguageService()
    {
        return $this->privates['security.expression_language'] = new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.api_miw' => ['privates', 'security.firewall.map.context.api_miw', 'getSecurity_Firewall_Map_Context_ApiMiwService', false],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.login_check' => ['privates', 'security.firewall.map.context.login_check', 'getSecurity_Firewall_Map_Context_LoginCheckService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.api_miw' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.login_check' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.login_check' => ($this->privates['.security.request_matcher.x4Ir3Nd'] ?? ($this->privates['.security.request_matcher.x4Ir3Nd'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/v1/login_check')));
            yield 'security.firewall.map.context.api_miw' => ($this->privates['.security.request_matcher.tbdzgbx'] ?? ($this->privates['.security.request_matcher.tbdzgbx'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/v1')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 4));
    }

    /**
     * Gets the private 'security.firewall.map.config.api_miw' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    protected function getSecurity_Firewall_Map_Config_ApiMiwService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.config.api_miw'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api_miw', 'security.user_checker', '.security.request_matcher.tbdzgbx', true, true, 'security.user.provider.concrete.app_user_provider', NULL, 'api_miw.jwt_token_authenticator', NULL, NULL, [0 => 'guard', 1 => 'anonymous'], NULL);
    }

    /**
     * Gets the private 'security.firewall.map.config.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    protected function getSecurity_Firewall_Map_Config_DevService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.config.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL);
    }

    /**
     * Gets the private 'security.firewall.map.config.login_check' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    protected function getSecurity_Firewall_Map_Config_LoginCheckService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.config.login_check'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('login_check', 'security.user_checker', '.security.request_matcher.x4Ir3Nd', true, true, 'security.user.provider.concrete.app_user_provider', NULL, NULL, NULL, NULL, [0 => 'anonymous'], NULL);
    }

    /**
     * Gets the private 'security.firewall.map.config.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    protected function getSecurity_Firewall_Map_Config_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.config.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.app_user_provider', 'main', NULL, NULL, NULL, [0 => 'anonymous'], NULL);
    }

    /**
     * Gets the private 'security.firewall.map.context.api_miw' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_ApiMiwService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';

        return $this->privates['security.firewall.map.context.api_miw'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.authentication.listener.guard.api_miw'] ?? $this->getSecurity_Authentication_Listener_Guard_ApiMiwService());
            yield 2 => ($this->privates['security.authentication.listener.anonymous.api_miw'] ?? $this->getSecurity_Authentication_Listener_Anonymous_ApiMiwService());
            yield 3 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 4), ($this->privates['security.exception_listener.api_miw'] ?? $this->getSecurity_ExceptionListener_ApiMiwService()), NULL, ($this->privates['security.firewall.map.config.api_miw'] ?? $this->getSecurity_Firewall_Map_Config_ApiMiwService()));
    }

    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, ($this->privates['security.firewall.map.config.dev'] ?? $this->getSecurity_Firewall_Map_Config_DevService()));
    }

    /**
     * Gets the private 'security.firewall.map.context.login_check' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_LoginCheckService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';

        return $this->privates['security.firewall.map.context.login_check'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.authentication.listener.anonymous.login_check'] ?? $this->getSecurity_Authentication_Listener_Anonymous_LoginCheckService());
            yield 2 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 3), ($this->privates['security.exception_listener.login_check'] ?? $this->getSecurity_ExceptionListener_LoginCheckService()), NULL, ($this->privates['security.firewall.map.config.login_check'] ?? $this->getSecurity_Firewall_Map_Config_LoginCheckService()));
    }

    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\LazyFirewallContext.php';

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 3 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 4), ($this->privates['security.exception_listener.main'] ?? $this->getSecurity_ExceptionListener_MainService()), NULL, ($this->privates['security.firewall.map.config.main'] ?? $this->getSecurity_Firewall_Map_Config_MainService()), ($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\HttpUtils.php';

        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->privates['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]);
    }

    /**
     * Gets the private 'security.untracked_token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_UntrackedTokenStorageService()
    {
        return $this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the private 'security.user.provider.concrete.app_user_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AppUserProviderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Security\\User\\EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.app_user_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\User', 'email', NULL);
    }

    /**
     * Gets the private 'security.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

        return $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->privates['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['sensio_framework_extra.converter.doctrine.orm.expression_language.default'] ?? ($this->privates['sensio_framework_extra.converter.doctrine.orm.expression_language.default'] = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage())));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm.expression_language.default' shared service.
     *
     * @return \Symfony\Component\ExpressionLanguage\ExpressionLanguage
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_Orm_ExpressionLanguage_DefaultService()
    {
        return $this->privates['sensio_framework_extra.converter.doctrine.orm.expression_language.default'] = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(($this->privates['sensio_framework_extra.converter.manager'] ?? $this->getSensioFrameworkExtra_Converter_ManagerService()), true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->privates['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(($this->privates['sensio_framework_extra.converter.doctrine.orm'] ?? $this->getSensioFrameworkExtra_Converter_Doctrine_OrmService()), 0, 'doctrine.orm');
        $instance->add(($this->privates['framework_extra_bundle.date_time_param_converter'] ?? ($this->privates['framework_extra_bundle.date_time_param_converter'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter())), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.expression_language.default' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage
     */
    protected function getSensioFrameworkExtra_Security_ExpressionLanguage_DefaultService()
    {
        return $this->privates['sensio_framework_extra.security.expression_language.default'] = new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage();
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->privates['sensio_framework_extra.security.expression_language.default'] ?? ($this->privates['sensio_framework_extra.security.expression_language.default'] = new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->privates['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(($this->privates['sensio_framework_extra.view.guesser'] ?? ($this->privates['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session.attribute_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag
     */
    protected function getSession_AttributeBagService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBag.php';

        return $this->privates['session.attribute_bag'] = new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag();
    }

    /**
     * Gets the private 'session.flash_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Flash\FlashBag
     */
    protected function getSession_FlashBagService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';

        return $this->privates['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag();
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';

        return $this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0);
    }

    /**
     * Gets the private 'session.storage.mock_file' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_MockFileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MockArraySessionStorage.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MockFileSessionStorage.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';

        return $this->privates['session.storage.mock_file'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage(($this->targetDir.''.'/sessions'), 'MOCKSESSID', ($this->privates['session.storage.metadata_bag'] ?? ($this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0))));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'test.client.cookiejar' service.
     *
     * @return \Symfony\Component\BrowserKit\CookieJar
     */
    protected function getTest_Client_CookiejarService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\CookieJar.php';

        return new \Symfony\Component\BrowserKit\CookieJar();
    }

    /**
     * Gets the private 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    protected function getTest_Client_HistoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\History.php';

        return new \Symfony\Component\BrowserKit\History();
    }

    /**
     * Gets the private 'test.session.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TestSessionListener
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->privates['test.session.listener'] = new \Symfony\Component\HttpKernel\EventListener\TestSessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]), $this->parameters['session.storage.options']);
    }

    /**
     * Gets the private 'twig.app_variable' shared service.
     *
     * @return \Symfony\Bridge\Twig\AppVariable
     */
    protected function getTwig_AppVariableService()
    {
        $this->privates['twig.app_variable'] = $instance = new \Symfony\Bridge\Twig\AppVariable();

        $instance->setEnvironment('test');
        $instance->setDebug(true);
        if ($this->has('security.token_storage')) {
            $instance->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $instance->setRequestStack(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        }

        return $instance;
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), (\dirname(__DIR__, 4).'\\src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\Command\\LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.configurator.environment' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator
     */
    protected function getTwig_Configurator_EnvironmentService()
    {
        return $this->privates['twig.configurator.environment'] = new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ',');
    }

    /**
     * Gets the private 'twig.error_renderer.html' shared service.
     *
     * @return \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer
     */
    protected function getTwig_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\ErrorRenderer\\TwigErrorRenderer.php';

        return $this->privates['twig.error_renderer.html'] = new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.extension.code' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CodeExtension
     */
    protected function getTwig_Extension_CodeService()
    {
        return $this->privates['twig.extension.code'] = new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), 'UTF-8');
    }

    /**
     * Gets the private 'twig.extension.debug' shared service.
     *
     * @return \Twig\Extension\DebugExtension
     */
    protected function getTwig_Extension_DebugService()
    {
        return $this->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension();
    }

    /**
     * Gets the private 'twig.extension.debug.stopwatch' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\StopwatchExtension
     */
    protected function getTwig_Extension_Debug_StopwatchService()
    {
        return $this->privates['twig.extension.debug.stopwatch'] = new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), true);
    }

    /**
     * Gets the private 'twig.extension.expression' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ExpressionExtension
     */
    protected function getTwig_Extension_ExpressionService()
    {
        return $this->privates['twig.extension.expression'] = new \Symfony\Bridge\Twig\Extension\ExpressionExtension();
    }

    /**
     * Gets the private 'twig.extension.httpfoundation' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpFoundationExtension
     */
    protected function getTwig_Extension_HttpfoundationService()
    {
        return $this->privates['twig.extension.httpfoundation'] = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(($this->privates['url_helper'] ?? $this->getUrlHelperService()));
    }

    /**
     * Gets the private 'twig.extension.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelExtension
     */
    protected function getTwig_Extension_HttpkernelService()
    {
        return $this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension();
    }

    /**
     * Gets the private 'twig.extension.logout_url' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\LogoutUrlExtension
     */
    protected function getTwig_Extension_LogoutUrlService()
    {
        return $this->privates['twig.extension.logout_url'] = new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'twig.extension.profiler' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ProfilerExtension
     */
    protected function getTwig_Extension_ProfilerService()
    {
        return $this->privates['twig.extension.profiler'] = new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'twig.extension.routing' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\RoutingExtension
     */
    protected function getTwig_Extension_RoutingService()
    {
        return $this->privates['twig.extension.routing'] = new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'twig.extension.security' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\SecurityExtension
     */
    protected function getTwig_Extension_SecurityService()
    {
        return $this->privates['twig.extension.security'] = new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'twig.extension.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfExtension
     */
    protected function getTwig_Extension_SecurityCsrfService()
    {
        return $this->privates['twig.extension.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfExtension();
    }

    /**
     * Gets the private 'twig.extension.trans' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\TranslationExtension
     */
    protected function getTwig_Extension_TransService()
    {
        return $this->privates['twig.extension.trans'] = new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL);
    }

    /**
     * Gets the private 'twig.extension.webprofiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension
     */
    protected function getTwig_Extension_WebprofilerService()
    {
        $a = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $a->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $this->privates['twig.extension.webprofiler'] = new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($a);
    }

    /**
     * Gets the private 'twig.extension.yaml' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\YamlExtension
     */
    protected function getTwig_Extension_YamlService()
    {
        return $this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension();
    }

    /**
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader
     */
    protected function getTwig_Loader_NativeFilesystemService()
    {
        $this->privates['twig.loader.native_filesystem'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader([], \dirname(__DIR__, 4));

        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/Resources/views'), 'Twig');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/Resources/views'), '!Twig');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), 'WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), '!WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), 'Security');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), '!Security');
        $instance->addPath((\dirname(__DIR__, 4).'/templates'));

        return $instance;
    }

    /**
     * Gets the private 'twig.missing_extension_suggestor' shared service.
     *
     * @return \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor
     */
    protected function getTwig_MissingExtensionSuggestorService()
    {
        return $this->privates['twig.missing_extension_suggestor'] = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->privates['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelRuntime.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(($this->privates['fragment.handler'] ?? $this->getFragment_HandlerService()));
    }

    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.runtime_loader' shared service.
     *
     * @return \Twig\RuntimeLoader\ContainerRuntimeLoader
     */
    protected function getTwig_RuntimeLoaderService()
    {
        return $this->privates['twig.runtime_loader'] = new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => ['services', 'jms_serializer.twig_extension.serializer_runtime_helper', 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService', false],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
        ], [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
        ]));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\CompatibilityServiceSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheWarmer.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), ($this->privates['twig.template_iterator'] ?? $this->getTwig_TemplateIteratorService()));
    }

    /**
     * Gets the private 'twig.template_iterator' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TemplateIterator
     */
    protected function getTwig_TemplateIteratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\TemplateIterator.php';

        return $this->privates['twig.template_iterator'] = new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'\\src'), [], (\dirname(__DIR__, 4).'/templates'));
    }

    /**
     * Gets the private 'url_helper' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UrlHelper
     */
    protected function getUrlHelperService()
    {
        return $this->privates['url_helper'] = new \Symfony\Component\HttpFoundation\UrlHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Csp\\ContentSecurityPolicyHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Csp\\NonceGenerator.php';

        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'doctrine.orm.proxy_dir' => false,
        'lexik_jwt_authentication.pass_phrase' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcApp_KernelTestDebugContainer.xml'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'lexik_jwt_authentication.pass_phrase': $value = $this->getEnv('JWT_PASSPHRASE'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'\\src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'test',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'\\log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle',
                'BazingaHateoasBundle' => 'Bazinga\\Bundle\\HateoasBundle\\BazingaHateoasBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'JMSSerializerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\jms\\serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ],
                'LexikJWTAuthenticationBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\lexik\\jwt-authentication-bundle'),
                    'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle',
                ],
                'BazingaHateoasBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\willdurand\\hateoas-bundle'),
                    'namespace' => 'Bazinga\\Bundle\\HateoasBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelTestDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'test.client.parameters' => [

            ],
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelTestDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'lexik_jwt_authentication.token_ttl' => 3600,
            'lexik_jwt_authentication.clock_skew' => 0,
            'lexik_jwt_authentication.user_identity_field' => 'username',
            'lexik_jwt_authentication.user_id_claim' => 'username',
            'lexik_jwt_authentication.encoder.signature_algorithm' => 'RS256',
            'lexik_jwt_authentication.encoder.crypto_engine' => 'openssl',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [

            ],
        ];
    }
}
