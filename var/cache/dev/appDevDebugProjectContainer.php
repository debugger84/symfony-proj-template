<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'admin.admin_page.city_page' => 'getAdmin_AdminPage_CityPageService',
            'admin.admin_page.country_page' => 'getAdmin_AdminPage_CountryPageService',
            'admin.admin_page.region_page' => 'getAdmin_AdminPage_RegionPageService',
            'annotation_reader' => 'getAnnotationReaderService',
            'api.normalizer.city_denormalizer' => 'getApi_Normalizer_CityDenormalizerService',
            'api.normalizer.city_normalizer' => 'getApi_Normalizer_CityNormalizerService',
            'api.serializer.default' => 'getApi_Serializer_DefaultService',
            'app.command.handler.add_city_handler' => 'getApp_Command_Handler_AddCityHandlerService',
            'app.command.handler.change_city_handler' => 'getApp_Command_Handler_ChangeCityHandlerService',
            'app.command.handler.delete_city_handler' => 'getApp_Command_Handler_DeleteCityHandlerService',
            'app.repository.city_repository' => 'getApp_Repository_CityRepositoryService',
            'app.repository.region_repository' => 'getApp_Repository_RegionRepositoryService',
            'app.service.address_service' => 'getApp_Service_AddressServiceService',
            'app.validator.constraint.unique_city_of_region' => 'getApp_Validator_Constraint_UniqueCityOfRegionService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.app' => 'getCache_AppService',
            'cache.system' => 'getCache_SystemService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'command_bus' => 'getCommandBusService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'dms.filter' => 'getDms_FilterService',
            'dms.filter.container_filter' => 'getDms_Filter_ContainerFilterService',
            'dms.filter.container_loader' => 'getDms_Filter_ContainerLoaderService',
            'dms.filter.inner.filter' => 'getDms_Filter_Inner_FilterService',
            'dms.filter.mapping.factory' => 'getDms_Filter_Mapping_FactoryService',
            'dms.filter.mapping.loader' => 'getDms_Filter_Mapping_LoaderService',
            'dms.filter.type_extension' => 'getDms_Filter_TypeExtensionService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'event_bus' => 'getEventBusService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.extension' => 'getForm_ExtensionService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_oauth_server.access_token_manager.default' => 'getFosOauthServer_AccessTokenManager_DefaultService',
            'fos_oauth_server.auth_code_manager.default' => 'getFosOauthServer_AuthCodeManager_DefaultService',
            'fos_oauth_server.authorize.form' => 'getFosOauthServer_Authorize_FormService',
            'fos_oauth_server.authorize.form.handler.default' => 'getFosOauthServer_Authorize_Form_Handler_DefaultService',
            'fos_oauth_server.authorize.form.type' => 'getFosOauthServer_Authorize_Form_TypeService',
            'fos_oauth_server.client_manager.default' => 'getFosOauthServer_ClientManager_DefaultService',
            'fos_oauth_server.controller.token' => 'getFosOauthServer_Controller_TokenService',
            'fos_oauth_server.entity_manager' => 'getFosOauthServer_EntityManagerService',
            'fos_oauth_server.refresh_token_manager.default' => 'getFosOauthServer_RefreshTokenManager_DefaultService',
            'fos_oauth_server.server' => 'getFosOauthServer_ServerService',
            'fos_oauth_server.storage' => 'getFosOauthServer_StorageService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.inflector' => 'getFosRest_InflectorService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.serializer' => 'getFosRest_SerializerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'httplug.auto_discovery.auto_discovered_client' => 'getHttplug_AutoDiscovery_AutoDiscoveredClientService',
            'httplug.client.acme' => 'getHttplug_Client_AcmeService',
            'httplug.collector.collector' => 'getHttplug_Collector_CollectorService',
            'httplug.collector.formatter' => 'getHttplug_Collector_FormatterService',
            'httplug.message_factory.default' => 'getHttplug_MessageFactory_DefaultService',
            'httplug.plugin.stopwatch.debug' => 'getHttplug_Plugin_Stopwatch_DebugService',
            'httplug.strategy' => 'getHttplug_StrategyService',
            'httplug.stream_factory.default' => 'getHttplug_StreamFactory_DefaultService',
            'httplug.uri_factory.default' => 'getHttplug_UriFactory_DefaultService',
            'ivory.google_map.form.type.place_autocomplete' => 'getIvory_GoogleMap_Form_Type_PlaceAutocompleteService',
            'ivory.google_map.geocoder' => 'getIvory_GoogleMap_GeocoderService',
            'ivory.google_map.helper.api' => 'getIvory_GoogleMap_Helper_ApiService',
            'ivory.google_map.helper.api.event_dispatcher' => 'getIvory_GoogleMap_Helper_Api_EventDispatcherService',
            'ivory.google_map.helper.collector.base.bound' => 'getIvory_GoogleMap_Helper_Collector_Base_BoundService',
            'ivory.google_map.helper.collector.base.coordinate' => 'getIvory_GoogleMap_Helper_Collector_Base_CoordinateService',
            'ivory.google_map.helper.collector.base.point' => 'getIvory_GoogleMap_Helper_Collector_Base_PointService',
            'ivory.google_map.helper.collector.base.size' => 'getIvory_GoogleMap_Helper_Collector_Base_SizeService',
            'ivory.google_map.helper.collector.control.custom' => 'getIvory_GoogleMap_Helper_Collector_Control_CustomService',
            'ivory.google_map.helper.collector.event.dom_event' => 'getIvory_GoogleMap_Helper_Collector_Event_DomEventService',
            'ivory.google_map.helper.collector.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService',
            'ivory.google_map.helper.collector.event.event' => 'getIvory_GoogleMap_Helper_Collector_Event_EventService',
            'ivory.google_map.helper.collector.event.event_once' => 'getIvory_GoogleMap_Helper_Collector_Event_EventOnceService',
            'ivory.google_map.helper.collector.layer.geo_json' => 'getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService',
            'ivory.google_map.helper.collector.layer.heatmap' => 'getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService',
            'ivory.google_map.helper.collector.layer.kml' => 'getIvory_GoogleMap_Helper_Collector_Layer_KmlService',
            'ivory.google_map.helper.collector.overlay.circle' => 'getIvory_GoogleMap_Helper_Collector_Overlay_CircleService',
            'ivory.google_map.helper.collector.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.collector.overlay.extendable' => 'getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService',
            'ivory.google_map.helper.collector.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService',
            'ivory.google_map.helper.collector.overlay.icon' => 'getIvory_GoogleMap_Helper_Collector_Overlay_IconService',
            'ivory.google_map.helper.collector.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService',
            'ivory.google_map.helper.collector.overlay.info_box' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService',
            'ivory.google_map.helper.collector.overlay.info_window' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService',
            'ivory.google_map.helper.collector.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.collector.overlay.marker' => 'getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService',
            'ivory.google_map.helper.collector.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService',
            'ivory.google_map.helper.collector.overlay.polygon' => 'getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService',
            'ivory.google_map.helper.collector.overlay.polyline' => 'getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService',
            'ivory.google_map.helper.collector.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService',
            'ivory.google_map.helper.collector.overlay.symbol' => 'getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService',
            'ivory.google_map.helper.collector.place.autocomplete.base.bound' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService',
            'ivory.google_map.helper.collector.place.autocomplete.base.coordinate' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService',
            'ivory.google_map.helper.collector.place.autocomplete.event.dom_event' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService',
            'ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService',
            'ivory.google_map.helper.collector.place.autocomplete.event.event' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService',
            'ivory.google_map.helper.collector.place.autocomplete.event.event_once' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService',
            'ivory.google_map.helper.collector.static.encoded_polyline' => 'getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService',
            'ivory.google_map.helper.collector.static.extendable' => 'getIvory_GoogleMap_Helper_Collector_Static_ExtendableService',
            'ivory.google_map.helper.collector.static.marker' => 'getIvory_GoogleMap_Helper_Collector_Static_MarkerService',
            'ivory.google_map.helper.collector.static.polyline' => 'getIvory_GoogleMap_Helper_Collector_Static_PolylineService',
            'ivory.google_map.helper.formatter' => 'getIvory_GoogleMap_Helper_FormatterService',
            'ivory.google_map.helper.json_builder' => 'getIvory_GoogleMap_Helper_JsonBuilderService',
            'ivory.google_map.helper.map' => 'getIvory_GoogleMap_Helper_MapService',
            'ivory.google_map.helper.map.event_dispatcher' => 'getIvory_GoogleMap_Helper_Map_EventDispatcherService',
            'ivory.google_map.helper.map.static' => 'getIvory_GoogleMap_Helper_Map_StaticService',
            'ivory.google_map.helper.map.static.event_dispatcher' => 'getIvory_GoogleMap_Helper_Map_Static_EventDispatcherService',
            'ivory.google_map.helper.place_autocomplete' => 'getIvory_GoogleMap_Helper_PlaceAutocompleteService',
            'ivory.google_map.helper.place_autocomplete.event_dispatcher' => 'getIvory_GoogleMap_Helper_PlaceAutocomplete_EventDispatcherService',
            'ivory.google_map.helper.renderer.api' => 'getIvory_GoogleMap_Helper_Renderer_ApiService',
            'ivory.google_map.helper.renderer.api_init' => 'getIvory_GoogleMap_Helper_Renderer_ApiInitService',
            'ivory.google_map.helper.renderer.base.bound' => 'getIvory_GoogleMap_Helper_Renderer_Base_BoundService',
            'ivory.google_map.helper.renderer.base.coordinate' => 'getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService',
            'ivory.google_map.helper.renderer.base.point' => 'getIvory_GoogleMap_Helper_Renderer_Base_PointService',
            'ivory.google_map.helper.renderer.base.size' => 'getIvory_GoogleMap_Helper_Renderer_Base_SizeService',
            'ivory.google_map.helper.renderer.control.custom' => 'getIvory_GoogleMap_Helper_Renderer_Control_CustomService',
            'ivory.google_map.helper.renderer.control.fullscreen' => 'getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService',
            'ivory.google_map.helper.renderer.control.manager' => 'getIvory_GoogleMap_Helper_Renderer_Control_ManagerService',
            'ivory.google_map.helper.renderer.control.map_type' => 'getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService',
            'ivory.google_map.helper.renderer.control.map_type_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService',
            'ivory.google_map.helper.renderer.control.position' => 'getIvory_GoogleMap_Helper_Renderer_Control_PositionService',
            'ivory.google_map.helper.renderer.control.rotate' => 'getIvory_GoogleMap_Helper_Renderer_Control_RotateService',
            'ivory.google_map.helper.renderer.control.scale' => 'getIvory_GoogleMap_Helper_Renderer_Control_ScaleService',
            'ivory.google_map.helper.renderer.control.scale_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService',
            'ivory.google_map.helper.renderer.control.street_view' => 'getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService',
            'ivory.google_map.helper.renderer.control.zoom' => 'getIvory_GoogleMap_Helper_Renderer_Control_ZoomService',
            'ivory.google_map.helper.renderer.control.zoom_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService',
            'ivory.google_map.helper.renderer.event.dom_event' => 'getIvory_GoogleMap_Helper_Renderer_Event_DomEventService',
            'ivory.google_map.helper.renderer.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService',
            'ivory.google_map.helper.renderer.event.event' => 'getIvory_GoogleMap_Helper_Renderer_Event_EventService',
            'ivory.google_map.helper.renderer.event.event_once' => 'getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService',
            'ivory.google_map.helper.renderer.geometry.encoding' => 'getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService',
            'ivory.google_map.helper.renderer.html.javascript_tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService',
            'ivory.google_map.helper.renderer.html.stylesheet' => 'getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService',
            'ivory.google_map.helper.renderer.html.stylesheet_tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService',
            'ivory.google_map.helper.renderer.html.tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_TagService',
            'ivory.google_map.helper.renderer.layer.geo_json' => 'getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService',
            'ivory.google_map.helper.renderer.layer.heatmap' => 'getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService',
            'ivory.google_map.helper.renderer.layer.kml' => 'getIvory_GoogleMap_Helper_Renderer_Layer_KmlService',
            'ivory.google_map.helper.renderer.loader' => 'getIvory_GoogleMap_Helper_Renderer_LoaderService',
            'ivory.google_map.helper.renderer.map' => 'getIvory_GoogleMap_Helper_Renderer_MapService',
            'ivory.google_map.helper.renderer.map_bound' => 'getIvory_GoogleMap_Helper_Renderer_MapBoundService',
            'ivory.google_map.helper.renderer.map_center' => 'getIvory_GoogleMap_Helper_Renderer_MapCenterService',
            'ivory.google_map.helper.renderer.map_container' => 'getIvory_GoogleMap_Helper_Renderer_MapContainerService',
            'ivory.google_map.helper.renderer.map_html' => 'getIvory_GoogleMap_Helper_Renderer_MapHtmlService',
            'ivory.google_map.helper.renderer.map_type_id' => 'getIvory_GoogleMap_Helper_Renderer_MapTypeIdService',
            'ivory.google_map.helper.renderer.overlay.animation' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService',
            'ivory.google_map.helper.renderer.overlay.circle' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService',
            'ivory.google_map.helper.renderer.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.renderer.overlay.extendable' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_ExtendableService',
            'ivory.google_map.helper.renderer.overlay.extendable.bounds' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService',
            'ivory.google_map.helper.renderer.overlay.extendable.default_viewport' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService',
            'ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService',
            'ivory.google_map.helper.renderer.overlay.extendable.path' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService',
            'ivory.google_map.helper.renderer.overlay.extendable.position' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService',
            'ivory.google_map.helper.renderer.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService',
            'ivory.google_map.helper.renderer.overlay.icon' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_IconService',
            'ivory.google_map.helper.renderer.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService',
            'ivory.google_map.helper.renderer.overlay.info_box' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService',
            'ivory.google_map.helper.renderer.overlay.info_window.close' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService',
            'ivory.google_map.helper.renderer.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.renderer.overlay.info_window.open' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService',
            'ivory.google_map.helper.renderer.overlay.marker' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService',
            'ivory.google_map.helper.renderer.overlay.marker_clusterer' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService',
            'ivory.google_map.helper.renderer.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService',
            'ivory.google_map.helper.renderer.overlay.polygon' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService',
            'ivory.google_map.helper.renderer.overlay.polyline' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService',
            'ivory.google_map.helper.renderer.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService',
            'ivory.google_map.helper.renderer.overlay.symbol' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService',
            'ivory.google_map.helper.renderer.overlay.symbol_path' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService',
            'ivory.google_map.helper.renderer.place.autocomplete' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService',
            'ivory.google_map.helper.renderer.place.autocomplete_container' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService',
            'ivory.google_map.helper.renderer.place.autocomplete_html' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService',
            'ivory.google_map.helper.renderer.static.base.coordinate' => 'getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService',
            'ivory.google_map.helper.renderer.static.base.point' => 'getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService',
            'ivory.google_map.helper.renderer.static.overlay.extendable' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService',
            'ivory.google_map.helper.renderer.static.overlay.marker' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService',
            'ivory.google_map.helper.renderer.static.overlay.marker.location' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService',
            'ivory.google_map.helper.renderer.static.overlay.marker.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService',
            'ivory.google_map.helper.renderer.static.overlay.polyline' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService',
            'ivory.google_map.helper.renderer.static.overlay.polyline.location' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService',
            'ivory.google_map.helper.renderer.static.overlay.polyline.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService',
            'ivory.google_map.helper.renderer.static.size' => 'getIvory_GoogleMap_Helper_Renderer_Static_SizeService',
            'ivory.google_map.helper.renderer.utility.callback' => 'getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService',
            'ivory.google_map.helper.renderer.utility.object_to_array' => 'getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService',
            'ivory.google_map.helper.renderer.utility.requirement' => 'getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService',
            'ivory.google_map.helper.renderer.utility.requirement_loader' => 'getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService',
            'ivory.google_map.helper.renderer.utility.source' => 'getIvory_GoogleMap_Helper_Renderer_Utility_SourceService',
            'ivory.google_map.helper.subscriber.api_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService',
            'ivory.google_map.helper.subscriber.base' => 'getIvory_GoogleMap_Helper_Subscriber_BaseService',
            'ivory.google_map.helper.subscriber.base.bound' => 'getIvory_GoogleMap_Helper_Subscriber_Base_BoundService',
            'ivory.google_map.helper.subscriber.base.coordinate' => 'getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService',
            'ivory.google_map.helper.subscriber.base.point' => 'getIvory_GoogleMap_Helper_Subscriber_Base_PointService',
            'ivory.google_map.helper.subscriber.base.size' => 'getIvory_GoogleMap_Helper_Subscriber_Base_SizeService',
            'ivory.google_map.helper.subscriber.control' => 'getIvory_GoogleMap_Helper_Subscriber_ControlService',
            'ivory.google_map.helper.subscriber.control.custom' => 'getIvory_GoogleMap_Helper_Subscriber_Control_CustomService',
            'ivory.google_map.helper.subscriber.event' => 'getIvory_GoogleMap_Helper_Subscriber_EventService',
            'ivory.google_map.helper.subscriber.event.dom_event' => 'getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService',
            'ivory.google_map.helper.subscriber.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService',
            'ivory.google_map.helper.subscriber.event.event' => 'getIvory_GoogleMap_Helper_Subscriber_Event_EventService',
            'ivory.google_map.helper.subscriber.event.event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService',
            'ivory.google_map.helper.subscriber.layer' => 'getIvory_GoogleMap_Helper_Subscriber_LayerService',
            'ivory.google_map.helper.subscriber.layer.geo_json' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService',
            'ivory.google_map.helper.subscriber.layer.heatmap' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService',
            'ivory.google_map.helper.subscriber.layer.kml' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService',
            'ivory.google_map.helper.subscriber.map' => 'getIvory_GoogleMap_Helper_Subscriber_MapService',
            'ivory.google_map.helper.subscriber.map_bound' => 'getIvory_GoogleMap_Helper_Subscriber_MapBoundService',
            'ivory.google_map.helper.subscriber.map_center' => 'getIvory_GoogleMap_Helper_Subscriber_MapCenterService',
            'ivory.google_map.helper.subscriber.map_container' => 'getIvory_GoogleMap_Helper_Subscriber_MapContainerService',
            'ivory.google_map.helper.subscriber.map_html' => 'getIvory_GoogleMap_Helper_Subscriber_MapHtmlService',
            'ivory.google_map.helper.subscriber.map_init' => 'getIvory_GoogleMap_Helper_Subscriber_MapInitService',
            'ivory.google_map.helper.subscriber.map_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService',
            'ivory.google_map.helper.subscriber.map_stylehseet' => 'getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService',
            'ivory.google_map.helper.subscriber.overlay' => 'getIvory_GoogleMap_Helper_Subscriber_OverlayService',
            'ivory.google_map.helper.subscriber.overlay.circle' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService',
            'ivory.google_map.helper.subscriber.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.subscriber.overlay.extendable' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService',
            'ivory.google_map.helper.subscriber.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService',
            'ivory.google_map.helper.subscriber.overlay.icon' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService',
            'ivory.google_map.helper.subscriber.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService',
            'ivory.google_map.helper.subscriber.overlay.info_box' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService',
            'ivory.google_map.helper.subscriber.overlay.info_window.close' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService',
            'ivory.google_map.helper.subscriber.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.subscriber.overlay.info_window.open' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService',
            'ivory.google_map.helper.subscriber.overlay.marker' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService',
            'ivory.google_map.helper.subscriber.overlay.marker.info_window.open' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService',
            'ivory.google_map.helper.subscriber.overlay.marker_clusterer' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService',
            'ivory.google_map.helper.subscriber.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService',
            'ivory.google_map.helper.subscriber.overlay.polygon' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService',
            'ivory.google_map.helper.subscriber.overlay.polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService',
            'ivory.google_map.helper.subscriber.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService',
            'ivory.google_map.helper.subscriber.overlay.symbol' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService',
            'ivory.google_map.helper.subscriber.place.autocomplete' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base.bound' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService',
            'ivory.google_map.helper.subscriber.place.autocomplete_container' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService',
            'ivory.google_map.helper.subscriber.place.autocomplete_html' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService',
            'ivory.google_map.helper.subscriber.place.autocomplete_init' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService',
            'ivory.google_map.helper.subscriber.place.autocomplete_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService',
            'ivory.google_map.helper.subscriber.static' => 'getIvory_GoogleMap_Helper_Subscriber_StaticService',
            'ivory.google_map.helper.subscriber.static.center' => 'getIvory_GoogleMap_Helper_Subscriber_Static_CenterService',
            'ivory.google_map.helper.subscriber.static.encoded_polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService',
            'ivory.google_map.helper.subscriber.static.extendable' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService',
            'ivory.google_map.helper.subscriber.static.format' => 'getIvory_GoogleMap_Helper_Subscriber_Static_FormatService',
            'ivory.google_map.helper.subscriber.static.key' => 'getIvory_GoogleMap_Helper_Subscriber_Static_KeyService',
            'ivory.google_map.helper.subscriber.static.marker' => 'getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService',
            'ivory.google_map.helper.subscriber.static.polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService',
            'ivory.google_map.helper.subscriber.static.scale' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService',
            'ivory.google_map.helper.subscriber.static.size' => 'getIvory_GoogleMap_Helper_Subscriber_Static_SizeService',
            'ivory.google_map.helper.subscriber.static.type' => 'getIvory_GoogleMap_Helper_Subscriber_Static_TypeService',
            'ivory.google_map.helper.subscriber.static.zoom' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService',
            'ivory.google_map.helper.subscriber.utility.object_to_array' => 'getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService',
            'ivory.google_map.serializer.loader' => 'getIvory_GoogleMap_Serializer_LoaderService',
            'ivory.google_map.twig.extension.api' => 'getIvory_GoogleMap_Twig_Extension_ApiService',
            'ivory.google_map.twig.extension.map' => 'getIvory_GoogleMap_Twig_Extension_MapService',
            'ivory.google_map.twig.extension.map.static' => 'getIvory_GoogleMap_Twig_Extension_Map_StaticService',
            'ivory.google_map.twig.extension.place_autocomplete' => 'getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService',
            'ivory.serializer' => 'getIvory_SerializerService',
            'ivory.serializer.accessor' => 'getIvory_Serializer_AccessorService',
            'ivory.serializer.event.dispatcher' => 'getIvory_Serializer_Event_DispatcherService',
            'ivory.serializer.instantiator' => 'getIvory_Serializer_InstantiatorService',
            'ivory.serializer.mapping.factory.default' => 'getIvory_Serializer_Mapping_Factory_DefaultService',
            'ivory.serializer.mapping.factory.event' => 'getIvory_Serializer_Mapping_Factory_EventService',
            'ivory.serializer.mapping.loader' => 'getIvory_Serializer_Mapping_LoaderService',
            'ivory.serializer.mapping.loader.annotation' => 'getIvory_Serializer_Mapping_Loader_AnnotationService',
            'ivory.serializer.mapping.loader.reflection' => 'getIvory_Serializer_Mapping_Loader_ReflectionService',
            'ivory.serializer.mutator' => 'getIvory_Serializer_MutatorService',
            'ivory.serializer.navigator.default' => 'getIvory_Serializer_Navigator_DefaultService',
            'ivory.serializer.navigator.event' => 'getIvory_Serializer_Navigator_EventService',
            'ivory.serializer.registry.type' => 'getIvory_Serializer_Registry_TypeService',
            'ivory.serializer.registry.visitor' => 'getIvory_Serializer_Registry_VisitorService',
            'ivory.serializer.type.array' => 'getIvory_Serializer_Type_ArrayService',
            'ivory.serializer.type.boolean' => 'getIvory_Serializer_Type_BooleanService',
            'ivory.serializer.type.closure' => 'getIvory_Serializer_Type_ClosureService',
            'ivory.serializer.type.date_time' => 'getIvory_Serializer_Type_DateTimeService',
            'ivory.serializer.type.exception' => 'getIvory_Serializer_Type_ExceptionService',
            'ivory.serializer.type.float' => 'getIvory_Serializer_Type_FloatService',
            'ivory.serializer.type.form' => 'getIvory_Serializer_Type_FormService',
            'ivory.serializer.type.form_error' => 'getIvory_Serializer_Type_FormErrorService',
            'ivory.serializer.type.guesser' => 'getIvory_Serializer_Type_GuesserService',
            'ivory.serializer.type.integer' => 'getIvory_Serializer_Type_IntegerService',
            'ivory.serializer.type.lexer' => 'getIvory_Serializer_Type_LexerService',
            'ivory.serializer.type.null' => 'getIvory_Serializer_Type_NullService',
            'ivory.serializer.type.object' => 'getIvory_Serializer_Type_ObjectService',
            'ivory.serializer.type.parser' => 'getIvory_Serializer_Type_ParserService',
            'ivory.serializer.type.resource' => 'getIvory_Serializer_Type_ResourceService',
            'ivory.serializer.type.std_class' => 'getIvory_Serializer_Type_StdClassService',
            'ivory.serializer.type.string' => 'getIvory_Serializer_Type_StringService',
            'ivory.serializer.visitor.csv.deserialization' => 'getIvory_Serializer_Visitor_Csv_DeserializationService',
            'ivory.serializer.visitor.csv.serialization' => 'getIvory_Serializer_Visitor_Csv_SerializationService',
            'ivory.serializer.visitor.json.deserialization' => 'getIvory_Serializer_Visitor_Json_DeserializationService',
            'ivory.serializer.visitor.json.serialization' => 'getIvory_Serializer_Visitor_Json_SerializationService',
            'ivory.serializer.visitor.xml.deserialization' => 'getIvory_Serializer_Visitor_Xml_DeserializationService',
            'ivory.serializer.visitor.xml.serialization' => 'getIvory_Serializer_Visitor_Xml_SerializationService',
            'ivory.serializer.visitor.yaml.deserialization' => 'getIvory_Serializer_Visitor_Yaml_DeserializationService',
            'ivory.serializer.visitor.yaml.serialization' => 'getIvory_Serializer_Visitor_Yaml_SerializationService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'nelmio_api_doc.doc_comment_extractor' => 'getNelmioApiDoc_DocCommentExtractorService',
            'nelmio_api_doc.event_listener.request' => 'getNelmioApiDoc_EventListener_RequestService',
            'nelmio_api_doc.extractor.api_doc_extractor' => 'getNelmioApiDoc_Extractor_ApiDocExtractorService',
            'nelmio_api_doc.form.extension.description_form_type_extension' => 'getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService',
            'nelmio_api_doc.formatter.html_formatter' => 'getNelmioApiDoc_Formatter_HtmlFormatterService',
            'nelmio_api_doc.formatter.markdown_formatter' => 'getNelmioApiDoc_Formatter_MarkdownFormatterService',
            'nelmio_api_doc.formatter.simple_formatter' => 'getNelmioApiDoc_Formatter_SimpleFormatterService',
            'nelmio_api_doc.formatter.swagger_formatter' => 'getNelmioApiDoc_Formatter_SwaggerFormatterService',
            'nelmio_api_doc.parser.collection_parser' => 'getNelmioApiDoc_Parser_CollectionParserService',
            'nelmio_api_doc.parser.form_errors_parser' => 'getNelmioApiDoc_Parser_FormErrorsParserService',
            'nelmio_api_doc.parser.form_type_parser' => 'getNelmioApiDoc_Parser_FormTypeParserService',
            'nelmio_api_doc.parser.json_serializable_parser' => 'getNelmioApiDoc_Parser_JsonSerializableParserService',
            'nelmio_api_doc.parser.validation_parser' => 'getNelmioApiDoc_Parser_ValidationParserService',
            'nelmio_api_doc.twig.extension.extra_markdown' => 'getNelmioApiDoc_Twig_Extension_ExtraMarkdownService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.api' => 'getSecurity_Firewall_Map_Context_ApiService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.firewall.map.context.oauth_authorize' => 'getSecurity_Firewall_Map_Context_OauthAuthorizeService',
            'security.firewall.map.context.oauth_token' => 'getSecurity_Firewall_Map_Context_OauthTokenService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.api' => 'getSecurity_UserChecker_ApiService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'serializer' => 'getSerializerService',
            'serializer.encoder.json' => 'getSerializer_Encoder_JsonService',
            'serializer.encoder.xml' => 'getSerializer_Encoder_XmlService',
            'serializer.normalizer.object' => 'getSerializer_Normalizer_ObjectService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'simple_bus.command_bus.command_name_resolver' => 'getSimpleBus_CommandBus_CommandNameResolverService',
            'simple_bus.event_bus.event_name_resolver' => 'getSimpleBus_EventBus_EventNameResolverService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.core.validator.inline' => 'getSonata_Core_Validator_InlineService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_oauth_server.access_token_manager' => 'fos_oauth_server.access_token_manager.default',
            'fos_oauth_server.auth_code_manager' => 'fos_oauth_server.auth_code_manager.default',
            'fos_oauth_server.authorize.form.handler' => 'fos_oauth_server.authorize.form.handler.default',
            'fos_oauth_server.client_manager' => 'fos_oauth_server.client_manager.default',
            'fos_oauth_server.refresh_token_manager' => 'fos_oauth_server.refresh_token_manager.default',
            'fos_rest.router' => 'router',
            'fos_rest.templating' => 'templating',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'httplug.client' => 'httplug.client.acme',
            'httplug.client.default' => 'httplug.client.acme',
            'httplug.message_factory' => 'httplug.message_factory.default',
            'httplug.stream_factory' => 'httplug.stream_factory.default',
            'httplug.uri_factory' => 'httplug.uri_factory.default',
            'ivory.serializer.mapping.factory' => 'ivory.serializer.mapping.factory.default',
            'ivory.serializer.navigator' => 'ivory.serializer.navigator.event',
            'mailer' => 'swiftmailer.mailer.default',
            'security.user_checker.main' => 'security.user_checker.api',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the 'admin.admin_page.city_page' service.
     *
     * @return \AdminBundle\AdminPage\CityPage A AdminBundle\AdminPage\CityPage instance
     */
    protected function getAdmin_AdminPage_CityPageService()
    {
        $instance = new \AdminBundle\AdminPage\CityPage('admin.admin_page.city_page', 'AppBundle\\Entity\\City', 'SonataAdminBundle:CRUD');

        $instance->setValidator($this->get('validator'));
        $instance->setChangeCityHandler($this->get('app.command.handler.change_city_handler'));
        $instance->setAddCityHandler($this->get('app.command.handler.add_city_handler'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setPagerType('default');
        $instance->setLabel('City');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'SonataAdminBundle:CRUD:list_outer_rows_tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'ALL' => array(0 => 'ALL')));
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'admin.admin_page.country_page' service.
     *
     * @return \AdminBundle\AdminPage\CountryPage A AdminBundle\AdminPage\CountryPage instance
     */
    protected function getAdmin_AdminPage_CountryPageService()
    {
        $instance = new \AdminBundle\AdminPage\CountryPage('admin.admin_page.country_page', 'AppBundle\\Entity\\Country', 'SonataAdminBundle:CRUD');

        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setPagerType('default');
        $instance->setLabel('Country');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'SonataAdminBundle:CRUD:list_outer_rows_tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'ALL' => array(0 => 'ALL')));
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'admin.admin_page.region_page' service.
     *
     * @return \AdminBundle\AdminPage\RegionPage A AdminBundle\AdminPage\RegionPage instance
     */
    protected function getAdmin_AdminPage_RegionPageService()
    {
        $instance = new \AdminBundle\AdminPage\RegionPage('admin.admin_page.region_page', 'AppBundle\\Entity\\Region', 'SonataAdminBundle:CRUD');

        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setPagerType('default');
        $instance->setLabel('Region');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'SonataAdminBundle:CRUD:list_outer_rows_tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'ALL' => array(0 => 'ALL')));
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the 'api.normalizer.city_denormalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ApiBundle\Normalizer\CityDenormalizer A ApiBundle\Normalizer\CityDenormalizer instance
     */
    protected function getApi_Normalizer_CityDenormalizerService()
    {
        return $this->services['api.normalizer.city_denormalizer'] = new \ApiBundle\Normalizer\CityDenormalizer($this->get('app.repository.region_repository'));
    }

    /**
     * Gets the 'api.normalizer.city_normalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ApiBundle\Normalizer\CityNormalizer A ApiBundle\Normalizer\CityNormalizer instance
     */
    protected function getApi_Normalizer_CityNormalizerService()
    {
        return $this->services['api.normalizer.city_normalizer'] = new \ApiBundle\Normalizer\CityNormalizer();
    }

    /**
     * Gets the 'api.serializer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getApi_Serializer_DefaultService()
    {
        return $this->services['api.serializer.default'] = new \Symfony\Component\Serializer\Serializer(array(0 => $this->get('api.normalizer.city_normalizer'), 1 => $this->get('api.normalizer.city_denormalizer'), 2 => $this->get('serializer.normalizer.object')), array(0 => $this->get('serializer.encoder.json'), 1 => $this->get('serializer.encoder.xml')));
    }

    /**
     * Gets the 'app.command.handler.add_city_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Command\City\AddCityHandler A AppBundle\Command\City\AddCityHandler instance
     */
    protected function getApp_Command_Handler_AddCityHandlerService()
    {
        return $this->services['app.command.handler.add_city_handler'] = new \AppBundle\Command\City\AddCityHandler($this->get('app.repository.city_repository'));
    }

    /**
     * Gets the 'app.command.handler.change_city_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Command\City\ChangeCityHandler A AppBundle\Command\City\ChangeCityHandler instance
     */
    protected function getApp_Command_Handler_ChangeCityHandlerService()
    {
        return $this->services['app.command.handler.change_city_handler'] = new \AppBundle\Command\City\ChangeCityHandler($this->get('app.repository.city_repository'));
    }

    /**
     * Gets the 'app.command.handler.delete_city_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Command\City\DeleteCityHandler A AppBundle\Command\City\DeleteCityHandler instance
     */
    protected function getApp_Command_Handler_DeleteCityHandlerService()
    {
        return $this->services['app.command.handler.delete_city_handler'] = new \AppBundle\Command\City\DeleteCityHandler($this->get('app.repository.city_repository'));
    }

    /**
     * Gets the 'app.repository.city_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Repository\CityRepository A AppBundle\Repository\CityRepository instance
     */
    protected function getApp_Repository_CityRepositoryService()
    {
        return $this->services['app.repository.city_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('AppBundle\\Entity\\City');
    }

    /**
     * Gets the 'app.repository.region_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Repository\RegionRepository A AppBundle\Repository\RegionRepository instance
     */
    protected function getApp_Repository_RegionRepositoryService()
    {
        return $this->services['app.repository.region_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('AppBundle\\Entity\\Region');
    }

    /**
     * Gets the 'app.service.address_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Service\AddressService A AppBundle\Service\AddressService instance
     */
    protected function getApp_Service_AddressServiceService()
    {
        return $this->services['app.service.address_service'] = new \AppBundle\Service\AddressService($this->get('ivory.google_map.geocoder'));
    }

    /**
     * Gets the 'app.validator.constraint.unique_city_of_region' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Validator\UniqueCityOfRegionValidator A AppBundle\Validator\UniqueCityOfRegionValidator instance
     */
    protected function getApp_Validator_Constraint_UniqueCityOfRegionService()
    {
        $this->services['app.validator.constraint.unique_city_of_region'] = $instance = new \AppBundle\Validator\UniqueCityOfRegionValidator();

        $instance->setCityRepository($this->get('app.repository.city_repository'));

        return $instance;
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('config' => new \Symfony\Bundle\AsseticBundle\Factory\Loader\ConfigurationLoader(), 'twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\ConfigurationResource(array('bootstrap_js' => array(0 => array(0 => ($this->targetDirs[3].'/app/../vendor/twitter/bootstrap/dist/js/bootstrap.js')), 1 => array(), 2 => array()), 'bootstrap_css' => array(0 => array(0 => ($this->targetDirs[3].'/app/../vendor/twitter/bootstrap/dist/css/bootstrap.css'), 1 => ($this->targetDirs[3].'/app/../vendor/twitter/bootstrap/dist/css/bootstrap-theme.css')), 1 => array(0 => 'cssrewrite'), 2 => array()), 'bootstrap_glyphicons_ttf' => array(0 => array(0 => ($this->targetDirs[3].'/app/../vendor/twitter/bootstrap/dist/fonts/glyphicons-halflings-regular.ttf')), 1 => array(), 2 => array('output' => 'fonts/glyphicons-halflings-regular.ttf')), 'bootstrap_glyphicons_eot' => array(0 => array(0 => ($this->targetDirs[3].'/app/../vendor/twitter/bootstrap/dist/fonts/glyphicons-halflings-regular.eot')), 1 => array(), 2 => array('output' => 'fonts/glyphicons-halflings-regular.eot')), 'bootstrap_glyphicons_svg' => array(0 => array(0 => ($this->targetDirs[3].'/app/../vendor/twitter/bootstrap/dist/fonts/glyphicons-halflings-regular.svg')), 1 => array(), 2 => array('output' => 'fonts/glyphicons-halflings-regular.svg')), 'bootstrap_glyphicons_woff' => array(0 => array(0 => ($this->targetDirs[3].'/app/../vendor/twitter/bootstrap/dist/fonts/glyphicons-halflings-regular.woff')), 1 => array(), 2 => array('output' => 'fonts/glyphicons-halflings-regular.woff')), 'jquery' => array(0 => array(0 => ($this->targetDirs[3].'/app/../vendor/components/jquery/jquery.js')), 1 => array(), 2 => array()))), 'config');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'/app/Resources/AppBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'/src/AppBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[3].'/app/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'cache.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter A Symfony\Component\Cache\Adapter\FilesystemAdapter instance
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('oNBVBKzAEp', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger($this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'cache.system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('UnQBk2Nb3n', 0, 'RaQS1yjrJs8zm6Ci-NNOrf', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        $a = $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $b = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer();
        $b->addPool($this->get('cache.app'));
        $b->addPool($this->get('cache.system'));
        $b->addPool(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('FaSWwyWFAj', 0, 'RaQS1yjrJs8zm6Ci-NNOrf', (__DIR__.'/pools'), $a));
        $b->addPool(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('GHDJoFX+y6', 0, 'RaQS1yjrJs8zm6Ci-NNOrf', (__DIR__.'/pools'), $a));

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $b));
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => $this->get('kernel.class_cache.cache_warmer'), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 7 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 8 => $this->get('sonata.admin.route.cache_warmup')));
    }

    /**
     * Gets the 'command_bus' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleBus\Message\Bus\Middleware\MessageBusSupportingMiddleware A SimpleBus\Message\Bus\Middleware\MessageBusSupportingMiddleware instance
     */
    protected function getCommandBusService()
    {
        $this->services['command_bus'] = $instance = new \SimpleBus\Message\Bus\Middleware\MessageBusSupportingMiddleware();

        $instance->appendMiddleware(new \SimpleBus\Message\Bus\Middleware\FinishesHandlingMessageBeforeHandlingNext());
        $instance->appendMiddleware(new \SimpleBus\Message\Recorder\HandlesRecordedMessagesMiddleware(new \SimpleBus\Message\Recorder\AggregatesRecordedMessages(array(0 => new \SimpleBus\Message\Recorder\PublicMessageRecorder())), $this->get('event_bus')));
        $instance->appendMiddleware(new \SimpleBus\Message\Handler\DelegatesToMessageHandlerMiddleware(new \SimpleBus\Message\Handler\Resolver\NameBasedMessageHandlerResolver($this->get('simple_bus.command_bus.command_name_resolver'), new \SimpleBus\Message\CallableResolver\CallableMap(array(), new \SimpleBus\Message\CallableResolver\ServiceLocatorAwareCallableResolver(array(0 => $this, 1 => 'get'))))));

        return $instance;
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector instance
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the 'debug.argument_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver A Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver instance
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), array(0 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), 1 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), 2 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), 3 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'), $this->get('debug.argument_resolver'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), 28586, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('var_dumper.cli_dumper'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('kernel.request', array(0 => 'nelmio_api_doc.event_listener.request', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('httplug.strategy', 'Http\\HttplugBundle\\Discovery\\ConfiguredClientsStrategy');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'dms.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DMS\Bundle\FilterBundle\Service\Filter A DMS\Bundle\FilterBundle\Service\Filter instance
     */
    protected function getDms_FilterService()
    {
        return $this->services['dms.filter'] = new \DMS\Bundle\FilterBundle\Service\Filter($this->get('dms.filter.inner.filter'));
    }

    /**
     * Gets the 'dms.filter.container_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DMS\Bundle\FilterBundle\Filter\ContainerFilter A DMS\Bundle\FilterBundle\Filter\ContainerFilter instance
     */
    protected function getDms_Filter_ContainerFilterService()
    {
        $this->services['dms.filter.container_filter'] = $instance = new \DMS\Bundle\FilterBundle\Filter\ContainerFilter();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'dms.filter.container_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DMS\Bundle\FilterBundle\Loader\ContainerAwareLoader A DMS\Bundle\FilterBundle\Loader\ContainerAwareLoader instance
     */
    protected function getDms_Filter_ContainerLoaderService()
    {
        $this->services['dms.filter.container_loader'] = $instance = new \DMS\Bundle\FilterBundle\Loader\ContainerAwareLoader();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'dms.filter.inner.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DMS\Filter\Filter A DMS\Filter\Filter instance
     */
    protected function getDms_Filter_Inner_FilterService()
    {
        return $this->services['dms.filter.inner.filter'] = new \DMS\Filter\Filter($this->get('dms.filter.mapping.factory'), $this->get('dms.filter.container_loader'));
    }

    /**
     * Gets the 'dms.filter.mapping.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DMS\Filter\Mapping\ClassMetadataFactory A DMS\Filter\Mapping\ClassMetadataFactory instance
     */
    protected function getDms_Filter_Mapping_FactoryService()
    {
        return $this->services['dms.filter.mapping.factory'] = new \DMS\Filter\Mapping\ClassMetadataFactory($this->get('dms.filter.mapping.loader'));
    }

    /**
     * Gets the 'dms.filter.mapping.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DMS\Filter\Mapping\Loader\AnnotationLoader A DMS\Filter\Mapping\Loader\AnnotationLoader instance
     */
    protected function getDms_Filter_Mapping_LoaderService()
    {
        return $this->services['dms.filter.mapping.loader'] = new \DMS\Filter\Mapping\Loader\AnnotationLoader($this->get('annotation_reader'));
    }

    /**
     * Gets the 'dms.filter.type_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DMS\Bundle\FilterBundle\Form\Type\FormTypeFilterExtension A DMS\Bundle\FilterBundle\Form\Type\FormTypeFilterExtension instance
     */
    protected function getDms_Filter_TypeExtensionService()
    {
        return $this->services['dms.filter.type_extension'] = new \DMS\Bundle\FilterBundle\Form\Type\FormTypeFilterExtension($this->get('dms.filter'), false);
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener($this->get('fos_user.util.password_updater'), $this->get('fos_user.util.canonical_fields_updater')));
        $c->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'test', 'user' => 'root', 'password' => 123, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    public function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['doctrine.orm.default_entity_manager'] = new DoctrineORMEntityManager_0000000070317dec00000000264ab5ee4e880008c4bad91b13f5820077384702(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/doctrine') => 'FOS\\OAuthServerBundle\\Entity'));
        $a->setGlobalBasename('mapping');

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[3].'/src/AppBundle/Entity'))), 'AppBundle\\Entity');
        $b->addDriver($a, 'FOS\\OAuthServerBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity', 'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\Entity'));
        $c->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $c->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $c->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(true);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $c);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /**
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_56c6c522ab11aff12afb50a700f1ab797437d890caad608fca708567383bb607');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_56c6c522ab11aff12afb50a700f1ab797437d890caad608fca708567383bb607');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_56c6c522ab11aff12afb50a700f1ab797437d890caad608fca708567383bb607');

        return $instance;
    }

    /**
     * Gets the 'event_bus' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleBus\Message\Bus\Middleware\MessageBusSupportingMiddleware A SimpleBus\Message\Bus\Middleware\MessageBusSupportingMiddleware instance
     */
    protected function getEventBusService()
    {
        $this->services['event_bus'] = $instance = new \SimpleBus\Message\Bus\Middleware\MessageBusSupportingMiddleware();

        $instance->appendMiddleware(new \SimpleBus\Message\Bus\Middleware\FinishesHandlingMessageBeforeHandlingNext());
        $instance->appendMiddleware(new \SimpleBus\Message\Subscriber\NotifiesMessageSubscribersMiddleware(new \SimpleBus\Message\Subscriber\Resolver\NameBasedMessageSubscriberResolver($this->get('simple_bus.event_bus.event_name_resolver'), new \SimpleBus\Message\CallableResolver\CallableCollection(array(), new \SimpleBus\Message\CallableResolver\ServiceLocatorAwareCallableResolver(array(0 => $this, 1 => 'get')))), NULL, NULL));

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[3].'/app/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension A Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension instance
     */
    protected function getForm_ExtensionService()
    {
        return $this->services['form.extension'] = new \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension($this, array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType' => 'fos_oauth_server.authorize.form.type', 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => 'sonata.core.form.type.array', 'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => 'sonata.core.form.type.boolean', 'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => 'sonata.core.form.type.collection', 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => 'sonata.core.form.type.translatable_choice', 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => 'sonata.core.form.type.date_range', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => 'sonata.core.form.type.datetime_range', 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => 'sonata.core.form.type.date_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => 'sonata.core.form.type.datetime_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => 'sonata.core.form.type.date_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => 'sonata.core.form.type.datetime_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\EqualType' => 'sonata.core.form.type.equal', 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => 'sonata.core.form.type.color_selector', 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => 'sonata.block.form.type.block', 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => 'sonata.block.form.type.container_template', 'Sonata\\AdminBundle\\Form\\Type\\AdminType' => 'sonata.admin.form.type.admin', 'Sonata\\AdminBundle\\Form\\Type\\ModelType' => 'sonata.admin.form.type.model_choice', 'Sonata\\AdminBundle\\Form\\Type\\ModelTypeList' => 'sonata.admin.form.type.model_list', 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => 'sonata.admin.form.type.model_reference', 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => 'sonata.admin.form.type.model_hidden', 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => 'sonata.admin.form.type.model_autocomplete', 'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => 'sonata.admin.form.type.collection', 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => 'sonata.admin.form.filter.type.number', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => 'sonata.admin.form.filter.type.choice', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => 'sonata.admin.form.filter.type.default', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => 'sonata.admin.form.filter.type.date', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => 'sonata.admin.form.filter.type.daterange', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => 'sonata.admin.form.filter.type.datetime', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => 'sonata.admin.form.filter.type.datetime_range', 'Ivory\\GoogleMapBundle\\Form\\Type\\PlaceAutocompleteType' => 'ivory.google_map.form.type.place_autocomplete'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'form.type_extension.form.data_collector', 5 => 'dms.filter.type_extension', 6 => 'nelmio_api_doc.form.extension.description_form_type_extension', 7 => 'sonata.admin.form.extension.field', 8 => 'sonata.admin.form.extension.field.mopa'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => array(0 => 'sonata.admin.form.extension.choice')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'), array('form' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'birthday' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType', 'checkbox' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType', 'choice' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'collection' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType', 'country' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType', 'date' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType', 'datetime' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType', 'email' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType', 'file' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'hidden' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType', 'integer' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType', 'language' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType', 'locale' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType', 'money' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType', 'number' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType', 'password' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType', 'percent' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType', 'radio' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType', 'repeated' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType', 'search' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType', 'textarea' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType', 'text' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', 'time' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType', 'timezone' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType', 'url' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType', 'button' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType', 'submit' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType', 'reset' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType', 'currency' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType', 'entity' => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 'sonata_type_immutable_array' => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 'sonata_type_boolean' => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 'sonata_type_collection' => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 'sonata_type_translatable_choice' => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 'sonata_type_date_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 'sonata_type_datetime_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 'sonata_type_date_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 'sonata_type_datetime_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 'sonata_type_date_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 'sonata_type_datetime_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 'sonata_type_equal' => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 'sonata_type_color_selector' => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 'sonata_block_service_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 'sonata_type_container_template_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 'sonata_type_admin' => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 'sonata_type_model' => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 'sonata_type_model_list' => 'Sonata\\AdminBundle\\Form\\Type\\ModelTypeList', 'sonata_type_model_reference' => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 'sonata_type_model_hidden' => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 'sonata_type_model_autocomplete' => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 'sonata_type_native_collection' => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 'sonata_type_choice_field_mask' => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 'sonata_type_filter_number' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 'sonata_type_filter_choice' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 'sonata_type_filter_default' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 'sonata_type_filter_date' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 'sonata_type_filter_date_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 'sonata_type_filter_datetime' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 'sonata_type_filter_datetime_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 'tab' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\TabType'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'nelmio_api_doc.form.extension.description_form_type_extension', 5 => 'sonata.admin.form.extension.field', 6 => 'mopa_bootstrap.form.type_extension.help', 7 => 'mopa_bootstrap.form.type_extension.legend', 8 => 'mopa_bootstrap.form.type_extension.error', 9 => 'mopa_bootstrap.form.type_extension.widget', 10 => 'mopa_bootstrap.form.type_extension.horizontal', 11 => 'mopa_bootstrap.form.type_extension.widget_collection', 12 => 'mopa_bootstrap.form.type_extension.tabbed', 13 => 'form.type_extension.form.http_foundation', 14 => 'form.type_extension.form.validator', 15 => 'form.type_extension.csrf', 16 => 'form.type_extension.form.data_collector', 17 => 'nelmio_api_doc.form.extension.description_form_type_extension', 18 => 'sonata.admin.form.extension.field', 19 => 'mopa_bootstrap.form.type_extension.help', 20 => 'mopa_bootstrap.form.type_extension.legend', 21 => 'mopa_bootstrap.form.type_extension.error', 22 => 'mopa_bootstrap.form.type_extension.widget', 23 => 'mopa_bootstrap.form.type_extension.horizontal', 24 => 'mopa_bootstrap.form.type_extension.widget_collection', 25 => 'mopa_bootstrap.form.type_extension.tabbed'), 'repeated' => array(0 => 'form.type_extension.repeated.validator', 1 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator', 1 => 'form.type_extension.submit.validator'), 'choice' => array(0 => 'sonata.admin.form.extension.choice', 1 => 'sonata.admin.form.extension.choice'), 'button' => array(0 => 'mopa_bootstrap.form.type_extension.button', 1 => 'mopa_bootstrap.form.type_extension.button'), 'date' => array(0 => 'mopa_bootstrap.form.type_extension.date', 1 => 'mopa_bootstrap.form.type_extension.date')), array());
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => $this->get('form.extension')), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_oauth_server.access_token_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\OAuthServerBundle\Entity\AccessTokenManager A FOS\OAuthServerBundle\Entity\AccessTokenManager instance
     */
    protected function getFosOauthServer_AccessTokenManager_DefaultService()
    {
        return $this->services['fos_oauth_server.access_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\AccessTokenManager($this->get('fos_oauth_server.entity_manager'), 'AppBundle\\Entity\\AccessToken');
    }

    /**
     * Gets the 'fos_oauth_server.auth_code_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\OAuthServerBundle\Entity\AuthCodeManager A FOS\OAuthServerBundle\Entity\AuthCodeManager instance
     */
    protected function getFosOauthServer_AuthCodeManager_DefaultService()
    {
        return $this->services['fos_oauth_server.auth_code_manager.default'] = new \FOS\OAuthServerBundle\Entity\AuthCodeManager($this->get('fos_oauth_server.entity_manager'), 'AppBundle\\Entity\\AuthCode');
    }

    /**
     * Gets the 'fos_oauth_server.authorize.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance
     */
    protected function getFosOauthServer_Authorize_FormService()
    {
        return $this->services['fos_oauth_server.authorize.form'] = $this->get('form.factory')->createNamed('fos_oauth_server_authorize_form', 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', NULL, array('validation_groups' => array(0 => 'Authorize', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_oauth_server.authorize.form.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler A FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler instance
     */
    protected function getFosOauthServer_Authorize_Form_Handler_DefaultService()
    {
        return $this->services['fos_oauth_server.authorize.form.handler.default'] = new \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler($this->get('fos_oauth_server.authorize.form'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_oauth_server.authorize.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\OAuthServerBundle\Form\Type\AuthorizeFormType A FOS\OAuthServerBundle\Form\Type\AuthorizeFormType instance
     */
    protected function getFosOauthServer_Authorize_Form_TypeService()
    {
        return $this->services['fos_oauth_server.authorize.form.type'] = new \FOS\OAuthServerBundle\Form\Type\AuthorizeFormType();
    }

    /**
     * Gets the 'fos_oauth_server.client_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\OAuthServerBundle\Entity\ClientManager A FOS\OAuthServerBundle\Entity\ClientManager instance
     */
    protected function getFosOauthServer_ClientManager_DefaultService()
    {
        return $this->services['fos_oauth_server.client_manager.default'] = new \FOS\OAuthServerBundle\Entity\ClientManager($this->get('fos_oauth_server.entity_manager'), 'AppBundle\\Entity\\Client');
    }

    /**
     * Gets the 'fos_oauth_server.controller.token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\OAuthServerBundle\Controller\TokenController A FOS\OAuthServerBundle\Controller\TokenController instance
     */
    protected function getFosOauthServer_Controller_TokenService()
    {
        return $this->services['fos_oauth_server.controller.token'] = new \FOS\OAuthServerBundle\Controller\TokenController($this->get('fos_oauth_server.server'));
    }

    /**
     * Gets the 'fos_oauth_server.refresh_token_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\OAuthServerBundle\Entity\RefreshTokenManager A FOS\OAuthServerBundle\Entity\RefreshTokenManager instance
     */
    protected function getFosOauthServer_RefreshTokenManager_DefaultService()
    {
        return $this->services['fos_oauth_server.refresh_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\RefreshTokenManager($this->get('fos_oauth_server.entity_manager'), 'AppBundle\\Entity\\RefreshToken');
    }

    /**
     * Gets the 'fos_oauth_server.server' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\OAuth2 A OAuth2\OAuth2 instance
     */
    protected function getFosOauthServer_ServerService()
    {
        return $this->services['fos_oauth_server.server'] = new \OAuth2\OAuth2($this->get('fos_oauth_server.storage'), array());
    }

    /**
     * Gets the 'fos_oauth_server.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\OAuthServerBundle\Storage\OAuthStorage A FOS\OAuthServerBundle\Storage\OAuthStorage instance
     */
    protected function getFosOauthServer_StorageService()
    {
        return $this->services['fos_oauth_server.storage'] = new \FOS\OAuthServerBundle\Storage\OAuthStorage($this->get('fos_oauth_server.client_manager.default'), $this->get('fos_oauth_server.access_token_manager.default'), $this->get('fos_oauth_server.refresh_token_manager.default'), $this->get('fos_oauth_server.auth_code_manager.default'), $this->get('fos_user.user_provider.username', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'fos_rest.body_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener A FOS\RestBundle\EventListener\BodyListener instance
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.decoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder A FOS\RestBundle\Decoder\JsonDecoder instance
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.jsontoform' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder A FOS\RestBundle\Decoder\JsonToFormDecoder instance
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder A FOS\RestBundle\Decoder\XmlDecoder instance
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider A FOS\RestBundle\Decoder\ContainerDecoderProvider instance
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->services['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider($this, array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /**
     * Gets the 'fos_rest.inflector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Inflector\DoctrineInflector A FOS\RestBundle\Inflector\DoctrineInflector instance
     */
    protected function getFosRest_InflectorService()
    {
        return $this->services['fos_rest.inflector'] = new \FOS\RestBundle\Inflector\DoctrineInflector();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer A FOS\RestBundle\Normalizer\CamelKeysNormalizer instance
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys_with_leading_underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore A FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore instance
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher A FOS\RestBundle\Request\ParamFetcher instance
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this, $this->get('fos_rest.request.param_fetcher.reader'), $this->get('request_stack'), $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_rest.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \FOS\RestBundle\Serializer\SymfonySerializerAdapter A FOS\RestBundle\Serializer\SymfonySerializerAdapter instance
     */
    public function getFosRest_SerializerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fos_rest.serializer'] = new FOSRestBundleSerializerSymfonySerializerAdapter_000000007031784b00000000264ab5ee4e880008c4bad91b13f5820077384702(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFosRest_SerializerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \FOS\RestBundle\Serializer\SymfonySerializerAdapter($this->get('serializer'));
    }

    /**
     * Gets the 'fos_rest.view_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\View\ViewHandler A FOS\RestBundle\View\ViewHandler instance
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler($this->get('router'), $this->get('fos_rest.serializer'), $this->get('templating'), $this->get('request_stack'), array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setSerializeNullStrategy(false);

        return $instance;
    }

    /**
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener A FOS\UserBundle\EventListener\AuthenticationListener instance
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'api');
    }

    /**
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator'));
    }

    /**
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => array('confirmation' => array('test@test.com' => 'test@test.com'), 'resetting' => array('test@test.com' => 'test@test.com'))));
    }

    /**
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', array(0 => 'Profile', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), $this->get('security.user_checker.api'), $this->get('security.authentication.session_strategy'), $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \FOS\UserBundle\Doctrine\UserManager A FOS\UserBundle\Doctrine\UserManager instance
     */
    public function getFosUser_UserManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fos_user.user_manager'] = new FOSUserBundleDoctrineUserManager_0000000070317e4300000000264ab5ee4e880008c4bad91b13f5820077384702(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFosUser_UserManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \FOS\UserBundle\Doctrine\UserManager($this->get('fos_user.util.password_updater'), $this->get('fos_user.util.canonical_fields_updater'), $this->get('doctrine')->getManager(NULL), 'AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'), $this->get('debug.event_dispatcher'), $this->get('request_stack'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('debug.event_dispatcher'), $this->get('debug.controller_resolver'), $this->get('request_stack'), $this->get('debug.argument_resolver'));
    }

    /**
     * Gets the 'httplug.auto_discovery.auto_discovered_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Http\HttplugBundle\ClientFactory\DummyClient A Http\HttplugBundle\ClientFactory\DummyClient instance
     */
    protected function getHttplug_AutoDiscovery_AutoDiscoveredClientService()
    {
        return $this->services['httplug.auto_discovery.auto_discovered_client'] = \Http\HttplugBundle\ClientFactory\PluginClientFactory::createPluginClient(array(0 => $this->get('httplug.plugin.stopwatch.debug')), array(0 => 'Http\\Discovery\\HttpClientDiscovery', 1 => 'find'), array(), array());
    }

    /**
     * Gets the 'httplug.client.acme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Http\HttplugBundle\ClientFactory\DummyClient A Http\HttplugBundle\ClientFactory\DummyClient instance
     */
    protected function getHttplug_Client_AcmeService()
    {
        return $this->services['httplug.client.acme'] = \Http\HttplugBundle\ClientFactory\PluginClientFactory::createPluginClient(array(0 => new \Http\HttplugBundle\Collector\StackPlugin($this->get('httplug.collector.collector'), $this->get('httplug.collector.formatter'), 'acme'), 1 => $this->get('httplug.plugin.stopwatch.debug')), new \Http\HttplugBundle\ClientFactory\Guzzle6Factory(), array(), array());
    }

    /**
     * Gets the 'httplug.message_factory.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Http\Message\MessageFactory\GuzzleMessageFactory A Http\Message\MessageFactory\GuzzleMessageFactory instance
     */
    protected function getHttplug_MessageFactory_DefaultService()
    {
        return $this->services['httplug.message_factory.default'] = new \Http\Message\MessageFactory\GuzzleMessageFactory();
    }

    /**
     * Gets the 'httplug.strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy A Http\HttplugBundle\Discovery\ConfiguredClientsStrategy instance
     */
    protected function getHttplug_StrategyService()
    {
        return $this->services['httplug.strategy'] = new \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy($this->get('httplug.auto_discovery.auto_discovered_client'), NULL);
    }

    /**
     * Gets the 'httplug.stream_factory.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Http\Message\StreamFactory A Http\Message\StreamFactory instance
     */
    protected function getHttplug_StreamFactory_DefaultService()
    {
        return $this->services['httplug.stream_factory.default'] = \Http\Discovery\StreamFactoryDiscovery::find('Http\\Message\\StreamFactory');
    }

    /**
     * Gets the 'httplug.uri_factory.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Http\Message\UriFactory A Http\Message\UriFactory instance
     */
    protected function getHttplug_UriFactory_DefaultService()
    {
        return $this->services['httplug.uri_factory.default'] = \Http\Discovery\UriFactoryDiscovery::find('Http\\Message\\UriFactory');
    }

    /**
     * Gets the 'ivory.google_map.form.type.place_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType A Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType instance
     */
    protected function getIvory_GoogleMap_Form_Type_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.form.type.place_autocomplete'] = new \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType();
    }

    /**
     * Gets the 'ivory.google_map.geocoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Service\Geocoder\GeocoderService A Ivory\GoogleMap\Service\Geocoder\GeocoderService instance
     */
    protected function getIvory_GoogleMap_GeocoderService()
    {
        $this->services['ivory.google_map.geocoder'] = $instance = new \Ivory\GoogleMap\Service\Geocoder\GeocoderService($this->get('httplug.client.acme'), $this->get('httplug.message_factory.default'), $this->get('ivory.serializer'));

        $instance->setFormat('json');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\ApiHelper A Ivory\GoogleMap\Helper\ApiHelper instance
     */
    protected function getIvory_GoogleMap_Helper_ApiService()
    {
        return $this->services['ivory.google_map.helper.api'] = new \Ivory\GoogleMap\Helper\ApiHelper($this->get('ivory.google_map.helper.api.event_dispatcher'));
    }

    /**
     * Gets the 'ivory.google_map.helper.api.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getIvory_GoogleMap_Helper_Api_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.api.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.api_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\ApiJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.heatmap', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\HeatmapLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_box', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoBoxSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_clusterer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerClustererSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteJavascriptSubscriber');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector A Ivory\GoogleMap\Helper\Collector\Base\BoundCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector($this->get('ivory.google_map.helper.collector.overlay.ground_overlay'), $this->get('ivory.google_map.helper.collector.overlay.rectangle'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector A Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector($this->get('ivory.google_map.helper.collector.base.bound'), $this->get('ivory.google_map.helper.collector.overlay.circle'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.collector.overlay.polygon'), $this->get('ivory.google_map.helper.collector.overlay.polyline'), $this->get('ivory.google_map.helper.collector.layer.heatmap'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.base.point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\PointCollector A Ivory\GoogleMap\Helper\Collector\Base\PointCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.collector.base.point'] = new \Ivory\GoogleMap\Helper\Collector\Base\PointCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.base.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector A Ivory\GoogleMap\Helper\Collector\Base\SizeCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.collector.base.size'] = new \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector($this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.collector.overlay.icon'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.control.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector A Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.collector.control.custom'] = new \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector A Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector A Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\EventCollector A Ivory\GoogleMap\Helper\Collector\Event\EventCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector A Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.layer.geo_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector A Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.layer.heatmap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector A Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.layer.kml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector A Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.kml'] = new \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.circle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector A Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.circle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector A Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector A Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.ground_overlay' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector A Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.icon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector A Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.icon_sequence' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector A Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector($this->get('ivory.google_map.helper.collector.overlay.polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.info_box' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector A Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.info_window' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector A Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.info_window.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector A Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector A Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.marker_shape' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector A Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.polygon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector A Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector A Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.rectangle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector A Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.symbol' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector A Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector($this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.collector.overlay.icon_sequence'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector A Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector A Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector($this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector A Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector A Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector A Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector A Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.static.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector A Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.static.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector A Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.static.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.static.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector A Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.static.marker'] = new \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector($this->get('ivory.google_map.helper.renderer.static.overlay.marker.style'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.static.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector A Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Formatter\Formatter A Ivory\GoogleMap\Helper\Formatter\Formatter instance
     */
    protected function getIvory_GoogleMap_Helper_FormatterService()
    {
        return $this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true);
    }

    /**
     * Gets the 'ivory.google_map.helper.json_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\JsonBuilder\JsonBuilder A Ivory\JsonBuilder\JsonBuilder instance
     */
    protected function getIvory_GoogleMap_Helper_JsonBuilderService()
    {
        return $this->services['ivory.google_map.helper.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder();
    }

    /**
     * Gets the 'ivory.google_map.helper.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\MapHelper A Ivory\GoogleMap\Helper\MapHelper instance
     */
    protected function getIvory_GoogleMap_Helper_MapService()
    {
        return $this->services['ivory.google_map.helper.map'] = new \Ivory\GoogleMap\Helper\MapHelper($this->get('ivory.google_map.helper.map.event_dispatcher'));
    }

    /**
     * Gets the 'ivory.google_map.helper.map.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getIvory_GoogleMap_Helper_Map_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.map.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\BaseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\BoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.coordinate', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\CoordinateSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.point', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\PointSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.size', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\SizeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.control', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Control\\ControlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.control.custom', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Control\\CustomControlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\EventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.dom_event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\DomEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.dom_event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\DomEventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\SimpleEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\EventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\LayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.geo_json', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\GeoJsonLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.heatmap', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\HeatmapLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.kml', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\KmlLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapBoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_center', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapCenterSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_container', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapContainerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_html', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapHtmlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_init', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapInitSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_stylehseet', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapStylesheetSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\OverlaySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.circle', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\CircleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.extendable', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\ExtendableSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.ground_overlay', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\GroundOverlaySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.icon', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\IconSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.icon_sequence', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\IconSequenceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_box', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoBoxSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.close', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoWindowCloseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.open', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoWindowOpenSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.default', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\DefaultInfoWindowSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_clusterer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerClustererSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_shape', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerShapeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker.info_window.open', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerInfoWindowOpenSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.polygon', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\PolygonSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\PolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.rectangle', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\RectangleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.symbol', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\SymbolSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.utility.object_to_array', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Utility\\ObjectToArraySubscriber');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.map.static' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\StaticMapHelper A Ivory\GoogleMap\Helper\StaticMapHelper instance
     */
    protected function getIvory_GoogleMap_Helper_Map_StaticService()
    {
        return $this->services['ivory.google_map.helper.map.static'] = new \Ivory\GoogleMap\Helper\StaticMapHelper($this->get('ivory.google_map.helper.map.static.event_dispatcher'));
    }

    /**
     * Gets the 'ivory.google_map.helper.map.static.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getIvory_GoogleMap_Helper_Map_Static_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.map.static.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\StaticSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.center', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\CenterSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.extendable', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ExtendableSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.format', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\FormatSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.key', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\KeySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.marker', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\MarkerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\PolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.scale', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ScaleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.size', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\SizeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.type', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\TypeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.zoom', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ZoomSubscriber');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.place_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper A Ivory\GoogleMap\Helper\PlaceAutocompleteHelper instance
     */
    protected function getIvory_GoogleMap_Helper_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.helper.place_autocomplete'] = new \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper($this->get('ivory.google_map.helper.place_autocomplete.event_dispatcher'));
    }

    /**
     * Gets the 'ivory.google_map.helper.place_autocomplete.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getIvory_GoogleMap_Helper_PlaceAutocomplete_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.place_autocomplete.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_container', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteContainerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_html', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteHtmlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_init', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteInitSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteBaseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base.bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteBoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteCoordinateSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteDomEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteDomEventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteSimpleEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteEventOnceSubscriber');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\ApiRenderer A Ivory\GoogleMap\Helper\Renderer\ApiRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_ApiService()
    {
        return $this->services['ivory.google_map.helper.renderer.api'] = new \Ivory\GoogleMap\Helper\Renderer\ApiRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.api_init'), $this->get('ivory.google_map.helper.renderer.loader'), $this->get('ivory.google_map.helper.renderer.utility.requirement_loader'), $this->get('ivory.google_map.helper.renderer.utility.source'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.api_init' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer A Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_ApiInitService()
    {
        return $this->services['ivory.google_map.helper.renderer.api_init'] = new \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer A Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.bound'] = new \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer A Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.base.point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer A Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.base.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer A Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.size'] = new \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.custom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.fullscreen' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.fullscreen'] = new \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ManagerService()
    {
        $this->services['ivory.google_map.helper.renderer.control.manager'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer();

        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.fullscreen'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.map_type'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.rotate'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.scale'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.street_view'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.zoom'));

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.map_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.map_type_id'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.map_type_style'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.map_type_style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.position' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.position'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_RotateService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.rotate'] = new \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.scale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.scale_style'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.scale_style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.street_view' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.street_view'] = new \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.zoom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.zoom_style'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.zoom_style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer A Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer A Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer A Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer A Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.geometry.encoding' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer A Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService()
    {
        return $this->services['ivory.google_map.helper.renderer.geometry.encoding'] = new \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.html.javascript_tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer A Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.html.stylesheet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer A Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.html.stylesheet_tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer A Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'), $this->get('ivory.google_map.helper.renderer.html.stylesheet'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.html.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer A Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_TagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.layer.geo_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer A Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.layer.heatmap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer A Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.layer.kml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer A Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.kml'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer A Ivory\GoogleMap\Helper\Renderer\LoaderRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_LoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.loader'] = new \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), 'en');
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapRenderer A Ivory\GoogleMap\Helper\Renderer\MapRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapService()
    {
        return $this->services['ivory.google_map.helper.renderer.map'] = new \Ivory\GoogleMap\Helper\Renderer\MapRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.map_type_id'), $this->get('ivory.google_map.helper.renderer.control.manager'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer A Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_bound'] = new \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_center' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer A Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_center'] = new \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer A Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_container'] = new \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer A Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_html'] = new \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'), $this->get('ivory.google_map.helper.renderer.html.stylesheet'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_type_id' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer A Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapTypeIdService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_type_id'] = new \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.animation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.animation'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.circle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.circle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.geometry.encoding'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_ExtendableService()
    {
        $a = $this->get('ivory.google_map.helper.renderer.overlay.extendable.path');
        $b = $this->get('ivory.google_map.helper.renderer.overlay.extendable.position');
        $c = $this->get('ivory.google_map.helper.renderer.overlay.extendable.bounds');

        $this->services['ivory.google_map.helper.renderer.overlay.extendable'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer();

        $instance->setRenderer('Ivory\\GoogleMap\\Layer\\KmlLayer', $this->get('ivory.google_map.helper.renderer.overlay.extendable.default_viewport'));
        $instance->setRenderer('Ivory\\GoogleMap\\Layer\\HeatmapLayer', $this->get('ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'));
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\EncodedPolyline', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polyline', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polygon', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\InfoWindow', $b);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Marker', $b);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Circle', $c);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\GroundOverlay', $c);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Rectangle', $c);

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.bounds' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.default_viewport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.position' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.position'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.ground_overlay' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.icon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.icon_sequence' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.info_box' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.info_window.close' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.info_window.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.info_window.open' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.overlay.animation'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.marker_clusterer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.marker_shape' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.polygon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.rectangle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.symbol' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.overlay.symbol_path'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.symbol_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol_path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.place.autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer A Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.place.autocomplete_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer A Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.place.autocomplete_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer A Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.base.point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.marker.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.marker.location' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.marker.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer($this->get('ivory.google_map.helper.renderer.static.base.point'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.polyline.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.polyline.location' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.polyline.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer A Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.size'] = new \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.callback' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.callback'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.object_to_array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.requirement' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.requirement_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement_loader'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.source' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_SourceService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.source'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.api_javascript' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber A Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.api_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.api'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.bound'), $this->get('ivory.google_map.helper.renderer.base.bound'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.coordinate'), $this->get('ivory.google_map.helper.renderer.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base.point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.point'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.point'), $this->get('ivory.google_map.helper.renderer.base.point'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.size'), $this->get('ivory.google_map.helper.renderer.base.size'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.control' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber A Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_ControlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.control.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber A Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control.custom'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.control.custom'), $this->get('ivory.google_map.helper.renderer.control.custom'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.dom_event'), $this->get('ivory.google_map.helper.renderer.event.dom_event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.dom_event_once'), $this->get('ivory.google_map.helper.renderer.event.dom_event_once'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.event'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.event_once'), $this->get('ivory.google_map.helper.renderer.event.event_once'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.layer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_LayerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.layer.geo_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.geo_json'), $this->get('ivory.google_map.helper.renderer.layer.geo_json'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.layer.heatmap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.heatmap'), $this->get('ivory.google_map.helper.renderer.layer.heatmap'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.layer.kml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.kml'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.kml'), $this->get('ivory.google_map.helper.renderer.layer.kml'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map'] = new \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_bound'] = new \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_bound'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_center' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_center'] = new \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_center'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_container'] = new \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_container'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_html'] = new \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_html'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_init' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_init'] = new \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_javascript' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map'), $this->get('ivory.google_map.helper.renderer.utility.callback'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_stylehseet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_stylehseet'] = new \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.stylesheet_tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_OverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.circle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.circle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.circle'), $this->get('ivory.google_map.helper.renderer.overlay.circle'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.encoded_polyline'), $this->get('ivory.google_map.helper.renderer.overlay.encoded_polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.extendable'), $this->get('ivory.google_map.helper.renderer.overlay.extendable'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.ground_overlay' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.ground_overlay'), $this->get('ivory.google_map.helper.renderer.overlay.ground_overlay'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.icon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.icon'), $this->get('ivory.google_map.helper.renderer.overlay.icon'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.icon_sequence' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.icon_sequence'), $this->get('ivory.google_map.helper.renderer.overlay.icon_sequence'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.info_box' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_box'), $this->get('ivory.google_map.helper.renderer.overlay.info_box'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.info_window.close' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.close'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.info_window.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window.default'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.default'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.info_window.open' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.open'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.renderer.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.marker.info_window.open' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.open'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.marker_clusterer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.overlay.marker_clusterer'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.marker_shape' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker_shape'), $this->get('ivory.google_map.helper.renderer.overlay.marker_shape'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.polygon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.polygon'), $this->get('ivory.google_map.helper.renderer.overlay.polygon'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.polyline'), $this->get('ivory.google_map.helper.renderer.overlay.polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.rectangle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.rectangle'), $this->get('ivory.google_map.helper.renderer.overlay.rectangle'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.symbol' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.symbol'), $this->get('ivory.google_map.helper.renderer.overlay.symbol'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.base' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound'), $this->get('ivory.google_map.helper.renderer.base.bound'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.base.coordinate'), $this->get('ivory.google_map.helper.renderer.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event'), $this->get('ivory.google_map.helper.renderer.event.dom_event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'), $this->get('ivory.google_map.helper.renderer.event.dom_event_once'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event_once'), $this->get('ivory.google_map.helper.renderer.event.event_once'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete_container'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete_html'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete_init' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_init'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete_javascript' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete'), $this->get('ivory.google_map.helper.renderer.utility.callback'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_StaticService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.center' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_CenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.center'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber($this->get('ivory.google_map.helper.collector.static.encoded_polyline'), $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber($this->get('ivory.google_map.helper.collector.static.extendable'), $this->get('ivory.google_map.helper.renderer.static.overlay.extendable'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_FormatService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.format'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.key' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_KeyService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.key'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber($this->get('ivory.google_map.helper.collector.static.marker'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber($this->get('ivory.google_map.helper.collector.static.polyline'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.scale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.scale'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber($this->get('ivory.google_map.helper.renderer.static.size'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_TypeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.type'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.zoom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.zoom'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.utility.object_to_array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber A Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.utility.object_to_array'));
    }

    /**
     * Gets the 'ivory.google_map.serializer.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\DirectoryClassMetadataLoader A Ivory\Serializer\Mapping\Loader\DirectoryClassMetadataLoader instance
     */
    protected function getIvory_GoogleMap_Serializer_LoaderService()
    {
        return $this->services['ivory.google_map.serializer.loader'] = new \Ivory\Serializer\Mapping\Loader\DirectoryClassMetadataLoader(($this->targetDirs[3].'/app/../vendor/egeloen/google-map/src/Service/Serializer'));
    }

    /**
     * Gets the 'ivory.google_map.twig.extension.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\ApiExtension A Ivory\GoogleMapBundle\Twig\ApiExtension instance
     */
    protected function getIvory_GoogleMap_Twig_Extension_ApiService()
    {
        return $this->services['ivory.google_map.twig.extension.api'] = new \Ivory\GoogleMapBundle\Twig\ApiExtension($this->get('ivory.google_map.helper.api'));
    }

    /**
     * Gets the 'ivory.google_map.twig.extension.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\MapExtension A Ivory\GoogleMapBundle\Twig\MapExtension instance
     */
    protected function getIvory_GoogleMap_Twig_Extension_MapService()
    {
        return $this->services['ivory.google_map.twig.extension.map'] = new \Ivory\GoogleMapBundle\Twig\MapExtension($this->get('ivory.google_map.helper.map'));
    }

    /**
     * Gets the 'ivory.google_map.twig.extension.map.static' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\StaticMapExtension A Ivory\GoogleMapBundle\Twig\StaticMapExtension instance
     */
    protected function getIvory_GoogleMap_Twig_Extension_Map_StaticService()
    {
        return $this->services['ivory.google_map.twig.extension.map.static'] = new \Ivory\GoogleMapBundle\Twig\StaticMapExtension($this->get('ivory.google_map.helper.map.static'));
    }

    /**
     * Gets the 'ivory.google_map.twig.extension.place_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension A Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension instance
     */
    protected function getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.twig.extension.place_autocomplete'] = new \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension($this->get('ivory.google_map.helper.place_autocomplete'));
    }

    /**
     * Gets the 'ivory.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Serializer A Ivory\Serializer\Serializer instance
     */
    protected function getIvory_SerializerService()
    {
        return $this->services['ivory.serializer'] = new \Ivory\Serializer\Serializer($this->get('ivory.serializer.navigator.event'), $this->get('ivory.serializer.registry.visitor'), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the 'ivory.serializer.accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Accessor\ReflectionAccessor A Ivory\Serializer\Accessor\ReflectionAccessor instance
     */
    protected function getIvory_Serializer_AccessorService()
    {
        return $this->services['ivory.serializer.accessor'] = new \Ivory\Serializer\Accessor\ReflectionAccessor();
    }

    /**
     * Gets the 'ivory.serializer.event.dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher A Symfony\Component\EventDispatcher\EventDispatcher instance
     */
    protected function getIvory_Serializer_Event_DispatcherService()
    {
        return $this->services['ivory.serializer.event.dispatcher'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }

    /**
     * Gets the 'ivory.serializer.instantiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Instantiator\DoctrineInstantiator A Ivory\Serializer\Instantiator\DoctrineInstantiator instance
     */
    protected function getIvory_Serializer_InstantiatorService()
    {
        return $this->services['ivory.serializer.instantiator'] = new \Ivory\Serializer\Instantiator\DoctrineInstantiator();
    }

    /**
     * Gets the 'ivory.serializer.mapping.factory.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory A Ivory\Serializer\Mapping\Factory\ClassMetadataFactory instance
     */
    protected function getIvory_Serializer_Mapping_Factory_DefaultService()
    {
        return $this->services['ivory.serializer.mapping.factory.default'] = new \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory($this->get('ivory.serializer.mapping.loader'));
    }

    /**
     * Gets the 'ivory.serializer.mapping.factory.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory A Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory instance
     */
    protected function getIvory_Serializer_Mapping_Factory_EventService()
    {
        return $this->services['ivory.serializer.mapping.factory.event'] = new \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory($this->get('ivory.serializer.mapping.factory.default'), $this->get('ivory.serializer.event.dispatcher'));
    }

    /**
     * Gets the 'ivory.serializer.mapping.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader A Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader instance
     */
    protected function getIvory_Serializer_Mapping_LoaderService()
    {
        return $this->services['ivory.serializer.mapping.loader'] = new \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader(array(0 => $this->get('ivory.serializer.mapping.loader.reflection'), 1 => $this->get('ivory.serializer.mapping.loader.annotation'), 2 => $this->get('ivory.google_map.serializer.loader')), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the 'ivory.serializer.mapping.loader.annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader A Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader instance
     */
    protected function getIvory_Serializer_Mapping_Loader_AnnotationService()
    {
        return $this->services['ivory.serializer.mapping.loader.annotation'] = new \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader($this->get('annotation_reader'), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the 'ivory.serializer.mapping.loader.reflection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader A Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader instance
     */
    protected function getIvory_Serializer_Mapping_Loader_ReflectionService()
    {
        return $this->services['ivory.serializer.mapping.loader.reflection'] = new \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader(NULL, $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the 'ivory.serializer.mutator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mutator\ReflectionMutator A Ivory\Serializer\Mutator\ReflectionMutator instance
     */
    protected function getIvory_Serializer_MutatorService()
    {
        return $this->services['ivory.serializer.mutator'] = new \Ivory\Serializer\Mutator\ReflectionMutator();
    }

    /**
     * Gets the 'ivory.serializer.navigator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Navigator\Navigator A Ivory\Serializer\Navigator\Navigator instance
     */
    protected function getIvory_Serializer_Navigator_DefaultService()
    {
        return $this->services['ivory.serializer.navigator.default'] = new \Ivory\Serializer\Navigator\Navigator($this->get('ivory.serializer.registry.type'), $this->get('ivory.serializer.type.guesser'));
    }

    /**
     * Gets the 'ivory.serializer.navigator.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Navigator\EventNavigator A Ivory\Serializer\Navigator\EventNavigator instance
     */
    protected function getIvory_Serializer_Navigator_EventService()
    {
        return $this->services['ivory.serializer.navigator.event'] = new \Ivory\Serializer\Navigator\EventNavigator($this->get('ivory.serializer.navigator.default'), $this->get('ivory.serializer.event.dispatcher'));
    }

    /**
     * Gets the 'ivory.serializer.registry.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Registry\TypeRegistry A Ivory\Serializer\Registry\TypeRegistry instance
     */
    protected function getIvory_Serializer_Registry_TypeService()
    {
        $a = $this->get('ivory.serializer.type.array');
        $b = $this->get('ivory.serializer.type.boolean');
        $c = $this->get('ivory.serializer.type.closure');
        $d = $this->get('ivory.serializer.type.date_time');
        $e = $this->get('ivory.serializer.type.exception');
        $f = $this->get('ivory.serializer.type.float');
        $g = $this->get('ivory.serializer.type.form');
        $h = $this->get('ivory.serializer.type.form_error');
        $i = $this->get('ivory.serializer.type.integer');
        $j = $this->get('ivory.serializer.type.null');
        $k = $this->get('ivory.serializer.type.object');
        $l = $this->get('ivory.serializer.type.resource');
        $m = $this->get('ivory.serializer.type.std_class');
        $n = $this->get('ivory.serializer.type.string');

        $this->services['ivory.serializer.registry.type'] = $instance = new \Ivory\Serializer\Registry\TypeRegistry();

        $instance->registerType('array', 1, $a);
        $instance->registerType('bool', 1, $b);
        $instance->registerType('boolean', 1, $b);
        $instance->registerType('closure', 1, $c);
        $instance->registerType('DateTimeInterface', 1, $d);
        $instance->registerType('Exception', 1, $e);
        $instance->registerType('double', 1, $f);
        $instance->registerType('float', 1, $f);
        $instance->registerType('numeric', 1, $f);
        $instance->registerType('Symfony\\Component\\Form\\Form', 1, $g);
        $instance->registerType('Symfony\\Component\\Form\\FormError', 1, $h);
        $instance->registerType('int', 1, $i);
        $instance->registerType('integer', 1, $i);
        $instance->registerType('null', 1, $j);
        $instance->registerType('object', 1, $k);
        $instance->registerType('resource', 1, $l);
        $instance->registerType('stdClass', 1, $m);
        $instance->registerType('string', 1, $n);
        $instance->registerType('array', 2, $a);
        $instance->registerType('bool', 2, $b);
        $instance->registerType('boolean', 2, $b);
        $instance->registerType('closure', 2, $c);
        $instance->registerType('DateTimeInterface', 2, $d);
        $instance->registerType('Exception', 2, $e);
        $instance->registerType('double', 2, $f);
        $instance->registerType('float', 2, $f);
        $instance->registerType('numeric', 2, $f);
        $instance->registerType('Symfony\\Component\\Form\\Form', 2, $g);
        $instance->registerType('Symfony\\Component\\Form\\FormError', 2, $h);
        $instance->registerType('int', 2, $i);
        $instance->registerType('integer', 2, $i);
        $instance->registerType('null', 2, $j);
        $instance->registerType('object', 2, $k);
        $instance->registerType('resource', 2, $l);
        $instance->registerType('stdClass', 2, $m);
        $instance->registerType('string', 2, $n);

        return $instance;
    }

    /**
     * Gets the 'ivory.serializer.registry.visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Registry\VisitorRegistry A Ivory\Serializer\Registry\VisitorRegistry instance
     */
    protected function getIvory_Serializer_Registry_VisitorService()
    {
        $this->services['ivory.serializer.registry.visitor'] = $instance = new \Ivory\Serializer\Registry\VisitorRegistry();

        $instance->registerVisitor(1, 'csv', $this->get('ivory.serializer.visitor.csv.serialization'));
        $instance->registerVisitor(2, 'csv', $this->get('ivory.serializer.visitor.csv.deserialization'));
        $instance->registerVisitor(1, 'json', $this->get('ivory.serializer.visitor.json.serialization'));
        $instance->registerVisitor(2, 'json', $this->get('ivory.serializer.visitor.json.deserialization'));
        $instance->registerVisitor(1, 'xml', $this->get('ivory.serializer.visitor.xml.serialization'));
        $instance->registerVisitor(2, 'xml', $this->get('ivory.serializer.visitor.xml.deserialization'));
        $instance->registerVisitor(1, 'yaml', $this->get('ivory.serializer.visitor.yaml.serialization'));
        $instance->registerVisitor(2, 'yaml', $this->get('ivory.serializer.visitor.yaml.deserialization'));

        return $instance;
    }

    /**
     * Gets the 'ivory.serializer.type.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ArrayType A Ivory\Serializer\Type\ArrayType instance
     */
    protected function getIvory_Serializer_Type_ArrayService()
    {
        return $this->services['ivory.serializer.type.array'] = new \Ivory\Serializer\Type\ArrayType();
    }

    /**
     * Gets the 'ivory.serializer.type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\BooleanType A Ivory\Serializer\Type\BooleanType instance
     */
    protected function getIvory_Serializer_Type_BooleanService()
    {
        return $this->services['ivory.serializer.type.boolean'] = new \Ivory\Serializer\Type\BooleanType();
    }

    /**
     * Gets the 'ivory.serializer.type.closure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ClosureType A Ivory\Serializer\Type\ClosureType instance
     */
    protected function getIvory_Serializer_Type_ClosureService()
    {
        return $this->services['ivory.serializer.type.closure'] = new \Ivory\Serializer\Type\ClosureType();
    }

    /**
     * Gets the 'ivory.serializer.type.date_time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\DateTimeType A Ivory\Serializer\Type\DateTimeType instance
     */
    protected function getIvory_Serializer_Type_DateTimeService()
    {
        return $this->services['ivory.serializer.type.date_time'] = new \Ivory\Serializer\Type\DateTimeType('Y-m-d\\TH:i:sP', 'Europe/Helsinki');
    }

    /**
     * Gets the 'ivory.serializer.type.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ExceptionType A Ivory\Serializer\Type\ExceptionType instance
     */
    protected function getIvory_Serializer_Type_ExceptionService()
    {
        return $this->services['ivory.serializer.type.exception'] = new \Ivory\Serializer\Type\ExceptionType(true);
    }

    /**
     * Gets the 'ivory.serializer.type.float' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\FloatType A Ivory\Serializer\Type\FloatType instance
     */
    protected function getIvory_Serializer_Type_FloatService()
    {
        return $this->services['ivory.serializer.type.float'] = new \Ivory\Serializer\Type\FloatType();
    }

    /**
     * Gets the 'ivory.serializer.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\SerializerBundle\Type\FormType A Ivory\SerializerBundle\Type\FormType instance
     */
    protected function getIvory_Serializer_Type_FormService()
    {
        return $this->services['ivory.serializer.type.form'] = new \Ivory\SerializerBundle\Type\FormType();
    }

    /**
     * Gets the 'ivory.serializer.type.form_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\SerializerBundle\Type\FormErrorType A Ivory\SerializerBundle\Type\FormErrorType instance
     */
    protected function getIvory_Serializer_Type_FormErrorService()
    {
        return $this->services['ivory.serializer.type.form_error'] = new \Ivory\SerializerBundle\Type\FormErrorType($this->get('translator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'ivory.serializer.type.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\Guesser\TypeGuesser A Ivory\Serializer\Type\Guesser\TypeGuesser instance
     */
    protected function getIvory_Serializer_Type_GuesserService()
    {
        return $this->services['ivory.serializer.type.guesser'] = new \Ivory\Serializer\Type\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'ivory.serializer.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\IntegerType A Ivory\Serializer\Type\IntegerType instance
     */
    protected function getIvory_Serializer_Type_IntegerService()
    {
        return $this->services['ivory.serializer.type.integer'] = new \Ivory\Serializer\Type\IntegerType();
    }

    /**
     * Gets the 'ivory.serializer.type.lexer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\Parser\TypeLexer A Ivory\Serializer\Type\Parser\TypeLexer instance
     */
    protected function getIvory_Serializer_Type_LexerService()
    {
        return $this->services['ivory.serializer.type.lexer'] = new \Ivory\Serializer\Type\Parser\TypeLexer();
    }

    /**
     * Gets the 'ivory.serializer.type.null' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\NullType A Ivory\Serializer\Type\NullType instance
     */
    protected function getIvory_Serializer_Type_NullService()
    {
        return $this->services['ivory.serializer.type.null'] = new \Ivory\Serializer\Type\NullType();
    }

    /**
     * Gets the 'ivory.serializer.type.object' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ObjectType A Ivory\Serializer\Type\ObjectType instance
     */
    protected function getIvory_Serializer_Type_ObjectService()
    {
        return $this->services['ivory.serializer.type.object'] = new \Ivory\Serializer\Type\ObjectType($this->get('ivory.serializer.mapping.factory.default'));
    }

    /**
     * Gets the 'ivory.serializer.type.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\Parser\TypeParser A Ivory\Serializer\Type\Parser\TypeParser instance
     */
    protected function getIvory_Serializer_Type_ParserService()
    {
        return $this->services['ivory.serializer.type.parser'] = new \Ivory\Serializer\Type\Parser\TypeParser($this->get('ivory.serializer.type.lexer'));
    }

    /**
     * Gets the 'ivory.serializer.type.resource' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ResourceType A Ivory\Serializer\Type\ResourceType instance
     */
    protected function getIvory_Serializer_Type_ResourceService()
    {
        return $this->services['ivory.serializer.type.resource'] = new \Ivory\Serializer\Type\ResourceType();
    }

    /**
     * Gets the 'ivory.serializer.type.std_class' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\StdClassType A Ivory\Serializer\Type\StdClassType instance
     */
    protected function getIvory_Serializer_Type_StdClassService()
    {
        return $this->services['ivory.serializer.type.std_class'] = new \Ivory\Serializer\Type\StdClassType();
    }

    /**
     * Gets the 'ivory.serializer.type.string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\StringType A Ivory\Serializer\Type\StringType instance
     */
    protected function getIvory_Serializer_Type_StringService()
    {
        return $this->services['ivory.serializer.type.string'] = new \Ivory\Serializer\Type\StringType();
    }

    /**
     * Gets the 'ivory.serializer.visitor.csv.deserialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor A Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Csv_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.deserialization'] = new \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), ',', '"', '\\', '.');
    }

    /**
     * Gets the 'ivory.serializer.visitor.csv.serialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor A Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Csv_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.serialization'] = new \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor($this->get('ivory.serializer.accessor'), ',', '"', '\\', '.');
    }

    /**
     * Gets the 'ivory.serializer.visitor.json.deserialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor A Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Json_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.json.deserialization'] = new \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 512, 0);
    }

    /**
     * Gets the 'ivory.serializer.visitor.json.serialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor A Ivory\Serializer\Visitor\Json\JsonSerializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Json_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.json.serialization'] = new \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor($this->get('ivory.serializer.accessor'), 0);
    }

    /**
     * Gets the 'ivory.serializer.visitor.xml.deserialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor A Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Xml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.deserialization'] = new \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 'entry', 'key');
    }

    /**
     * Gets the 'ivory.serializer.visitor.xml.serialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor A Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Xml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.serialization'] = new \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor($this->get('ivory.serializer.accessor'), '1.0', 'UTF-8', true, 'result', 'entry', 'key');
    }

    /**
     * Gets the 'ivory.serializer.visitor.yaml.deserialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor A Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Yaml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.deserialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 0);
    }

    /**
     * Gets the 'ivory.serializer.visitor.yaml.serialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor A Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Yaml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.serialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor($this->get('ivory.serializer.accessor'), 2, 4, 0);
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuFactory A Knp\Menu\MenuFactory instance
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension($this->get('router')), 0);

        return $instance;
    }

    /**
     * Gets the 'knp_menu.listener.voters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener A Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener instance
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter($this->get('knp_menu.voter.router'));
        $instance->addVoter($this->get('sonata.admin.menu.matcher.voter.admin'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Matcher A Knp\Menu\Matcher\Matcher instance
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter($this->get('knp_menu.voter.router'));
        $instance->addVoter($this->get('sonata.admin.menu.matcher.voter.admin'));
        $instance->addVoter($this->get('sonata.admin.menu.matcher.voter.children'));
        $instance->addVoter($this->get('sonata.admin.menu.matcher.voter.active'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance
     */
    protected function getKnpMenu_MenuProviderService()
    {
        $a = $this->get('knp_menu.factory');

        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('sonata_admin_sidebar' => 'sonata.admin.sidebar_menu')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderServiceProvider($this, array()), 2 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $a), 3 => new \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider($a, $this->get('sonata.admin.pool'), $this->get('security.authorization_checker'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'KnpMenuBundle::menu.html.twig', $this->get('knp_menu.matcher'), array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'knp_menu.voter.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter A Knp\Menu\Matcher\Voter\RouteVoter instance
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.null_internal'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.doc_comment_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Util\DocCommentExtractor A Nelmio\ApiDocBundle\Util\DocCommentExtractor instance
     */
    protected function getNelmioApiDoc_DocCommentExtractorService()
    {
        return $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor();
    }

    /**
     * Gets the 'nelmio_api_doc.event_listener.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\EventListener\RequestListener A Nelmio\ApiDocBundle\EventListener\RequestListener instance
     */
    protected function getNelmioApiDoc_EventListener_RequestService()
    {
        return $this->services['nelmio_api_doc.event_listener.request'] = new \Nelmio\ApiDocBundle\EventListener\RequestListener($this->get('nelmio_api_doc.extractor.api_doc_extractor'), $this->get('nelmio_api_doc.formatter.html_formatter'), '_doc');
    }

    /**
     * Gets the 'nelmio_api_doc.extractor.api_doc_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor A Nelmio\ApiDocBundle\Extractor\ApiDocExtractor instance
     */
    protected function getNelmioApiDoc_Extractor_ApiDocExtractorService()
    {
        $a = $this->get('nelmio_api_doc.doc_comment_extractor');

        $this->services['nelmio_api_doc.extractor.api_doc_extractor'] = $instance = new \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor($this, $this->get('router'), $this->get('annotation_reader'), $a, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel')), array(0 => new \Nelmio\ApiDocBundle\Extractor\Handler\FosRestHandler(), 1 => new \Nelmio\ApiDocBundle\Extractor\Handler\JmsSecurityExtraHandler(), 2 => new \Nelmio\ApiDocBundle\Extractor\Handler\SensioFrameworkExtraHandler(), 3 => new \Nelmio\ApiDocBundle\Extractor\Handler\PhpDocHandler($a)), array());

        $instance->addParser($this->get('nelmio_api_doc.parser.json_serializable_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.collection_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_errors_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_type_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.validation_parser'));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.form.extension.description_form_type_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension A Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension instance
     */
    protected function getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService()
    {
        return $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.html_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\HtmlFormatter A Nelmio\ApiDocBundle\Formatter\HtmlFormatter instance
     */
    protected function getNelmioApiDoc_Formatter_HtmlFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.html_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\HtmlFormatter();

        $instance->setTemplatingEngine($this->get('templating'));
        $instance->setMotdTemplate('NelmioApiDocBundle::Components/motd.html.twig');
        $instance->setApiName('API documentation');
        $instance->setEnableSandbox(true);
        $instance->setEndpoint(NULL);
        $instance->setRequestFormatMethod('format_param');
        $instance->setRequestFormats(array('json' => 'application/json', 'xml' => 'application/xml'));
        $instance->setDefaultRequestFormat('json');
        $instance->setAcceptType(NULL);
        $instance->setBodyFormats(array(0 => 'form', 1 => 'json'));
        $instance->setDefaultBodyFormat('form');
        $instance->setAuthentication(NULL);
        $instance->setDefaultSectionsOpened(true);

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.markdown_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter A Nelmio\ApiDocBundle\Formatter\MarkdownFormatter instance
     */
    protected function getNelmioApiDoc_Formatter_MarkdownFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.markdown_formatter'] = new \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.simple_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\SimpleFormatter A Nelmio\ApiDocBundle\Formatter\SimpleFormatter instance
     */
    protected function getNelmioApiDoc_Formatter_SimpleFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.simple_formatter'] = new \Nelmio\ApiDocBundle\Formatter\SimpleFormatter();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.swagger_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter A Nelmio\ApiDocBundle\Formatter\SwaggerFormatter instance
     */
    protected function getNelmioApiDoc_Formatter_SwaggerFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.swagger_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter('dot_notation');

        $instance->setBasePath('/api');
        $instance->setApiVersion('0.1');
        $instance->setSwaggerVersion('1.2');
        $instance->setInfo(array('title' => 'Symfony2', 'description' => 'My awesome Symfony2 app!', 'TermsOfServiceUrl' => NULL, 'contact' => NULL, 'license' => NULL, 'licenseUrl' => NULL));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.parser.collection_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\CollectionParser A Nelmio\ApiDocBundle\Parser\CollectionParser instance
     */
    protected function getNelmioApiDoc_Parser_CollectionParserService()
    {
        return $this->services['nelmio_api_doc.parser.collection_parser'] = new \Nelmio\ApiDocBundle\Parser\CollectionParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.form_errors_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormErrorsParser A Nelmio\ApiDocBundle\Parser\FormErrorsParser instance
     */
    protected function getNelmioApiDoc_Parser_FormErrorsParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_errors_parser'] = new \Nelmio\ApiDocBundle\Parser\FormErrorsParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.form_type_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormTypeParser A Nelmio\ApiDocBundle\Parser\FormTypeParser instance
     */
    protected function getNelmioApiDoc_Parser_FormTypeParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_type_parser'] = new \Nelmio\ApiDocBundle\Parser\FormTypeParser($this->get('form.factory'), true);
    }

    /**
     * Gets the 'nelmio_api_doc.parser.json_serializable_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\JsonSerializableParser A Nelmio\ApiDocBundle\Parser\JsonSerializableParser instance
     */
    protected function getNelmioApiDoc_Parser_JsonSerializableParserService()
    {
        return $this->services['nelmio_api_doc.parser.json_serializable_parser'] = new \Nelmio\ApiDocBundle\Parser\JsonSerializableParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.validation_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\ValidationParser A Nelmio\ApiDocBundle\Parser\ValidationParser instance
     */
    protected function getNelmioApiDoc_Parser_ValidationParserService()
    {
        return $this->services['nelmio_api_doc.parser.validation_parser'] = new \Nelmio\ApiDocBundle\Parser\ValidationParser($this->get('validator'));
    }

    /**
     * Gets the 'nelmio_api_doc.twig.extension.extra_markdown' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension A Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension instance
     */
    protected function getNelmioApiDoc_Twig_Extension_ExtraMarkdownService()
    {
        return $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension();
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $c->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy'), $this->get('security.logout_url_generator'), $this->get('debug.security.access.decision_manager')));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($this->get('data_collector.dump'));
        $instance->add($this->get('httplug.collector.collector'));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector($this->get('sonata.block.templating.helper'), array(0 => 'sonata.block.service.container', 1 => 'sonata.page.block.container', 2 => 'sonata.dashboard.block.container', 3 => 'cmf.block.container', 4 => 'cmf.block.slideshow')));
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('controller_name_converter');
        $b = $this->get('file_locator');
        $c = $this->get('annotation_reader');

        $d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($c);

        $e = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();

        $f = new \Symfony\Component\Config\Loader\LoaderResolver();
        $f->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));
        $f->addLoader($d);
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($b, $e));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $b, $a, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($c, $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector'), false, array('json' => false, 'xml' => false, 'html' => true)), $c), 'json'));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($b, $e, false, array('json' => false, 'xml' => false, 'html' => true), 'json'));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($b, $e, false, array('json' => false, 'xml' => false, 'html' => true), 'json'));
        $f->addLoader($this->get('sonata.admin.route_loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, $f);
    }

    /**
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('debug.security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.oauth_token' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/token'), 'security.firewall.map.context.oauth_authorize' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/auth'), 'security.firewall.map.context.api' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_ApiService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('fos_oauth_server.server');

        return $this->services['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \FOS\OAuthServerBundle\Security\Firewall\OAuthListener($a, $this->get('security.authentication.manager'), $b), 2 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'api', new \FOS\OAuthServerBundle\Security\EntryPoint\OAuthEntryPoint($b), NULL, NULL, $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), true));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.authentication.trust_resolver');
        $e = $this->get('security.http_utils');
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');

        $h = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $e, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($e, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $h->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $i = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($e, array());
        $i->setOptions(array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $i->setProviderKey('main');

        $j = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $e, array(), $b);
        $j->setOptions(array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('fos_user.user_provider.username')), 'main', $b, $c, $d), 2 => $h, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $g, $this->get('security.authentication.session_strategy'), $e, 'main', $i, $j, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $b, $c, $this->get('security.csrf.token_manager')), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '58bc299fec26b8.74276895', $b, $g), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $d, $e, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $e, '/login', false), NULL, NULL, $b, false));
    }

    /**
     * Gets the 'security.firewall.map.context.oauth_authorize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_OauthAuthorizeService()
    {
        return $this->services['security.firewall.map.context.oauth_authorize'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.oauth_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_OauthTokenService()
    {
        return $this->services['security.firewall.map.context.oauth_token'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.user_checker.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserChecker_ApiService()
    {
        return $this->services['security.user_checker.api'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getSerializerService()
    {
        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \FOS\RestBundle\Serializer\Normalizer\FormErrorNormalizer($this->get('translator')), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 5 => $this->get('serializer.normalizer.object')), array(0 => $this->get('serializer.encoder.xml'), 1 => $this->get('serializer.encoder.json')));
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'/app/../var/sessions/dev'));
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'simple_bus.command_bus.command_name_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleBus\Message\Name\ClassBasedNameResolver A SimpleBus\Message\Name\ClassBasedNameResolver instance
     */
    protected function getSimpleBus_CommandBus_CommandNameResolverService()
    {
        return $this->services['simple_bus.command_bus.command_name_resolver'] = new \SimpleBus\Message\Name\ClassBasedNameResolver();
    }

    /**
     * Gets the 'simple_bus.event_bus.event_name_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleBus\Message\Name\ClassBasedNameResolver A SimpleBus\Message\Name\ClassBasedNameResolver instance
     */
    protected function getSimpleBus_EventBus_EventNameResolverService()
    {
        return $this->services['simple_bus.event_bus.event_name_resolver'] = new \SimpleBus\Message\Name\ClassBasedNameResolver();
    }

    /**
     * Gets the 'sonata.admin.audit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Model\AuditManager A Sonata\AdminBundle\Model\AuditManager instance
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }

    /**
     * Gets the 'sonata.admin.block.admin_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService A Sonata\AdminBundle\Block\AdminListBlockService instance
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.block.search_result' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService A Sonata\AdminBundle\Block\AdminSearchBlockService instance
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }

    /**
     * Gets the 'sonata.admin.block.stats' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminStatsBlockService A Sonata\AdminBundle\Block\AdminStatsBlockService instance
     */
    protected function getSonata_Admin_Block_StatsService()
    {
        return $this->services['sonata.admin.block.stats'] = new \Sonata\AdminBundle\Block\AdminStatsBlockService('sonata.admin.block.stats', $this->get('templating'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.breadcrumbs_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\BreadcrumbsBuilder A Sonata\AdminBundle\Admin\BreadcrumbsBuilder instance
     */
    protected function getSonata_Admin_BreadcrumbsBuilderService()
    {
        return $this->services['sonata.admin.breadcrumbs_builder'] = new \Sonata\AdminBundle\Admin\BreadcrumbsBuilder(array('child_admin_route' => 'edit'));
    }

    /**
     * Gets the 'sonata.admin.builder.filter.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Filter\FilterFactory A Sonata\AdminBundle\Filter\FilterFactory instance
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('Sonata\\DoctrineORMAdminBundle\\Filter\\BooleanFilter' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'Sonata\\DoctrineORMAdminBundle\\Filter\\CallbackFilter' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ChoiceFilter' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelFilter' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelAutocompleteFilter' => 'sonata.admin.orm.filter.type.model_autocomplete', 'doctrine_orm_model_autocomplete' => 'sonata.admin.orm.filter.type.model_autocomplete', 'Sonata\\DoctrineORMAdminBundle\\Filter\\StringFilter' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'Sonata\\DoctrineORMAdminBundle\\Filter\\NumberFilter' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateFilter' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateRangeFilter' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeFilter' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'Sonata\\DoctrineORMAdminBundle\\Filter\\TimeFilter' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeRangeFilter' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ClassFilter' => 'sonata.admin.orm.filter.type.class', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder A Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'), true);
    }

    /**
     * Gets the 'sonata.admin.builder.orm_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\FormContractor A Sonata\DoctrineORMAdminBundle\Builder\FormContractor instance
     */
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder A Sonata\DoctrineORMAdminBundle\Builder\ListBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_email.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:list_html.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder A Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'email' => 'SonataAdminBundle:CRUD:show_email.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:show_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:show_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:show_html.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.controller.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Controller\HelperController A Sonata\AdminBundle\Controller\HelperController instance
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'), $this->get('validator'));
    }

    /**
     * Gets the 'sonata.admin.doctrine_orm.form.type.choice_field_mask' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType A Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType instance
     */
    protected function getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService()
    {
        return $this->services['sonata.admin.doctrine_orm.form.type.choice_field_mask'] = new \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType();
    }

    /**
     * Gets the 'sonata.admin.event.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension A Sonata\AdminBundle\Event\AdminEventExtension instance
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.admin.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Export\Exporter A Sonata\AdminBundle\Export\Exporter instance
     */
    protected function getSonata_Admin_ExporterService()
    {
        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the 'sonata.admin.form.extension.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension A Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension instance
     */
    protected function getSonata_Admin_Form_Extension_ChoiceService()
    {
        return $this->services['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension();
    }

    /**
     * Gets the 'sonata.admin.form.extension.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension instance
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => '', 'textarea' => '', 'text' => '', 'choice' => '', 'integer' => '', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => ''), array('html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'javascripts' => array(0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 4 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/Admin.js', 18 => 'bundles/sonataadmin/treeview.js'), 'stylesheets' => array(0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css')));
    }

    /**
     * Gets the 'sonata.admin.form.extension.field.mopa' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension instance
     */
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\ChoiceType A Sonata\AdminBundle\Form\Type\Filter\ChoiceType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateType A Sonata\AdminBundle\Form\Type\Filter\DateType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.daterange' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateRangeType A Sonata\AdminBundle\Form\Type\Filter\DateRangeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DefaultType A Sonata\AdminBundle\Form\Type\Filter\DefaultType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\NumberType A Sonata\AdminBundle\Form\Type\Filter\NumberType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.type.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\AdminType A Sonata\AdminBundle\Form\Type\AdminType instance
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the 'sonata.admin.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\CollectionType A Sonata\AdminBundle\Form\Type\CollectionType instance
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelAutocompleteType A Sonata\AdminBundle\Form\Type\ModelAutocompleteType instance
     */
    protected function getSonata_Admin_Form_Type_ModelAutocompleteService()
    {
        return $this->services['sonata.admin.form.type.model_autocomplete'] = new \Sonata\AdminBundle\Form\Type\ModelAutocompleteType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelType A Sonata\AdminBundle\Form\Type\ModelType instance
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType($this->get('property_accessor'));
    }

    /**
     * Gets the 'sonata.admin.form.type.model_hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelHiddenType A Sonata\AdminBundle\Form\Type\ModelHiddenType instance
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelTypeList A Sonata\AdminBundle\Form\Type\ModelTypeList instance
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType A Sonata\AdminBundle\Form\Type\ModelReferenceType instance
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }

    /**
     * Gets the 'sonata.admin.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper A Sonata\AdminBundle\Admin\AdminHelper instance
     */
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.label.strategy.bc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy A Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.form_component' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy A Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy A Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.manager.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Model\ModelManager A Sonata\DoctrineORMAdminBundle\Model\ModelManager instance
     */
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminAclManipulator A Sonata\AdminBundle\Util\AdminAclManipulator instance
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.object.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator A Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator instance
     */
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }

    /**
     * Gets the 'sonata.admin.menu.matcher.voter.active' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter A Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter instance
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ActiveService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter();
    }

    /**
     * Gets the 'sonata.admin.menu.matcher.voter.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter A Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter instance
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_AdminService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter();
    }

    /**
     * Gets the 'sonata.admin.menu.matcher.voter.children' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter A Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter instance
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ChildrenService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.children'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter($this->get('knp_menu.matcher'));
    }

    /**
     * Gets the 'sonata.admin.menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Menu\MenuBuilder A Sonata\AdminBundle\Menu\MenuBuilder instance
     */
    protected function getSonata_Admin_MenuBuilderService()
    {
        return $this->services['sonata.admin.menu_builder'] = new \Sonata\AdminBundle\Menu\MenuBuilder($this->get('sonata.admin.pool'), $this->get('knp_menu.factory'), $this->get('knp_menu.menu_provider'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.admin.object.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator A Sonata\AdminBundle\Util\AdminObjectAclManipulator instance
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter A Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter A Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter A Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter A Sonata\DoctrineORMAdminBundle\Filter\ClassFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter A Sonata\DoctrineORMAdminBundle\Filter\DateFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter A Sonata\DoctrineORMAdminBundle\Filter\ModelFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.model_autocomplete' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter A Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter A Sonata\DoctrineORMAdminBundle\Filter\NumberFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter A Sonata\DoctrineORMAdminBundle\Filter\StringFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter A Sonata\DoctrineORMAdminBundle\Filter\TimeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the 'sonata.admin.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool A Sonata\AdminBundle\Admin\Pool instance
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Sonata Admin', 'bundles/sonataadmin/logo_title.png', array('html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'javascripts' => array(0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 4 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/Admin.js', 18 => 'bundles/sonataadmin/treeview.js'), 'stylesheets' => array(0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css')), $this->get('property_accessor'));

        $instance->setTemplates(array('user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'SonataAdminBundle:CRUD:list_outer_rows_tree.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'admin.admin_page.city_page', 1 => 'admin.admin_page.region_page', 2 => 'admin.admin_page.country_page'));
        $instance->setAdminGroups(array('Location' => array('label' => 'Location', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'items' => array(0 => array('admin' => 'admin.admin_page.city_page', 'label' => 'City', 'route' => '', 'route_params' => array(), 'route_absolute' => true), 1 => array('admin' => 'admin.admin_page.region_page', 'label' => 'Region', 'route' => '', 'route_params' => array(), 'route_absolute' => true), 2 => array('admin' => 'admin.admin_page.country_page', 'label' => 'Country', 'route' => '', 'route_params' => array(), 'route_absolute' => true)))));
        $instance->setAdminClasses(array('AppBundle\\Entity\\City' => array(0 => 'admin.admin_page.city_page'), 'AppBundle\\Entity\\Region' => array(0 => 'admin.admin_page.region_page'), 'AppBundle\\Entity\\Country' => array(0 => 'admin.admin_page.country_page')));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.route.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCache A Sonata\AdminBundle\Route\RoutesCache instance
     */
    protected function getSonata_Admin_Route_CacheService()
    {
        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache((__DIR__.'/sonata/admin'), true);
    }

    /**
     * Gets the 'sonata.admin.route.cache_warmup' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp A Sonata\AdminBundle\Route\RoutesCacheWarmUp instance
     */
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp($this->get('sonata.admin.route.cache'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.route.default_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator A Sonata\AdminBundle\Route\DefaultRouteGenerator instance
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('router'), $this->get('sonata.admin.route.cache'));
    }

    /**
     * Gets the 'sonata.admin.route.path_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\PathInfoBuilder A Sonata\AdminBundle\Route\PathInfoBuilder instance
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route.query_string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\QueryStringBuilder A Sonata\AdminBundle\Route\QueryStringBuilder instance
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\AdminPoolLoader A Sonata\AdminBundle\Route\AdminPoolLoader instance
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'admin.admin_page.city_page', 1 => 'admin.admin_page.region_page', 2 => 'admin.admin_page.country_page'), $this);
    }

    /**
     * Gets the 'sonata.admin.search.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Search\SearchHandler A Sonata\AdminBundle\Search\SearchHandler instance
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.security.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Security\Handler\RoleSecurityHandler A Sonata\AdminBundle\Security\Handler\RoleSecurityHandler instance
     */
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\RoleSecurityHandler($this->get('security.authorization_checker'), array(0 => 'ROLE_SUPER_ADMIN'));
    }

    /**
     * Gets the 'sonata.admin.sidebar_menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getSonata_Admin_SidebarMenuService()
    {
        return $this->services['sonata.admin.sidebar_menu'] = $this->get('sonata.admin.menu_builder')->createSidebarMenu();
    }

    /**
     * Gets the 'sonata.admin.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension A Sonata\AdminBundle\Twig\Extension\SonataAdminExtension instance
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('translator'));

        $instance->setXEditableTypeMapping(array('choice' => 'select', 'boolean' => 'select', 'text' => 'text', 'textarea' => 'textarea', 'html' => 'textarea', 'email' => 'email', 'string' => 'text', 'smallint' => 'text', 'bigint' => 'text', 'integer' => 'number', 'decimal' => 'number', 'currency' => 'number', 'percent' => 'number', 'url' => 'url', 'date' => 'date'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables A Sonata\AdminBundle\Twig\GlobalVariables instance
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator A Sonata\CoreBundle\Validator\InlineValidator instance
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'sonata.block.cache.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler A Sonata\BlockBundle\Cache\HttpCacheHandler instance
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.cache.handler.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\NoopHttpCacheHandler A Sonata\BlockBundle\Cache\NoopHttpCacheHandler instance
     */
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.context_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager A Sonata\BlockBundle\Block\BlockContextManager instance
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.exception.filter.debug_only' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter A Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter instance
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the 'sonata.block.exception.filter.ignore_block_exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter A Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter instance
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_all' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepAllFilter A Sonata\BlockBundle\Exception\Filter\KeepAllFilter instance
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_none' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter A Sonata\BlockBundle\Exception\Filter\KeepNoneFilter instance
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer A Sonata\BlockBundle\Exception\Renderer\InlineRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline_debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer A Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the 'sonata.block.exception.renderer.throw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer A Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the 'sonata.block.exception.strategy.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager A Sonata\BlockBundle\Exception\Strategy\StrategyManager instance
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('inline');

        return $instance;
    }

    /**
     * Gets the 'sonata.block.form.type.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType A Sonata\BlockBundle\Form\Type\ServiceListType instance
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'));
    }

    /**
     * Gets the 'sonata.block.form.type.container_template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType A Sonata\BlockBundle\Form\Type\ContainerTemplateType instance
     */
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        return $this->services['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(array('SonataBlockBundle:Block:block_container.html.twig' => 'SonataBlockBundle default template'));
    }

    /**
     * Gets the 'sonata.block.loader.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain A Sonata\BlockBundle\Block\BlockLoaderChain instance
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service')));
    }

    /**
     * Gets the 'sonata.block.loader.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader A Sonata\BlockBundle\Block\Loader\ServiceLoader instance
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list'));
    }

    /**
     * Gets the 'sonata.block.menu.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Menu\MenuRegistry A Sonata\BlockBundle\Menu\MenuRegistry instance
     */
    protected function getSonata_Block_Menu_RegistryService()
    {
        return $this->services['sonata.block.menu.registry'] = new \Sonata\BlockBundle\Menu\MenuRegistry(array());
    }

    /**
     * Gets the 'sonata.block.renderer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer A Sonata\BlockBundle\Block\BlockRenderer instance
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the 'sonata.block.service.container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\ContainerBlockService A Sonata\BlockBundle\Block\Service\ContainerBlockService instance
     */
    protected function getSonata_Block_Service_ContainerService()
    {
        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.empty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService A Sonata\BlockBundle\Block\Service\EmptyBlockService instance
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService A Sonata\BlockBundle\Block\Service\MenuBlockService instance
     */
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('sonata.block.menu.registry'));
    }

    /**
     * Gets the 'sonata.block.service.rss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService A Sonata\BlockBundle\Block\Service\RssBlockService instance
     */
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService A Sonata\BlockBundle\Block\Service\TemplateBlockService instance
     */
    protected function getSonata_Block_Service_TemplateService()
    {
        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService A Sonata\BlockBundle\Block\Service\TextBlockService instance
     */
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper A Sonata\BlockBundle\Templating\Helper\BlockHelper instance
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('debug.event_dispatcher'), NULL, $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables A Sonata\BlockBundle\Twig\GlobalVariables instance
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }

    /**
     * Gets the 'sonata.core.date.moment_format_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Date\MomentFormatConverter A Sonata\CoreBundle\Date\MomentFormatConverter instance
     */
    protected function getSonata_Core_Date_MomentFormatConverterService()
    {
        return $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter();
    }

    /**
     * Gets the 'sonata.core.flashmessage.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\FlashMessage\FlashManager A Sonata\CoreBundle\FlashMessage\FlashManager instance
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager($this->get('session'), $this->get('translator'), array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'danger' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'danger' => 'danger'));
    }

    /**
     * Gets the 'sonata.core.flashmessage.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension A Sonata\CoreBundle\Twig\Extension\FlashMessageExtension instance
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension($this->get('sonata.core.flashmessage.manager'));
    }

    /**
     * Gets the 'sonata.core.form.type.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ImmutableArrayType A Sonata\CoreBundle\Form\Type\ImmutableArrayType instance
     */
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        return $this->services['sonata.core.form.type.array'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the 'sonata.core.form.type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\BooleanType A Sonata\CoreBundle\Form\Type\BooleanType instance
     */
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the 'sonata.core.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\CollectionType A Sonata\CoreBundle\Form\Type\CollectionType instance
     */
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        return $this->services['sonata.core.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.core.form.type.color_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorSelectorType A Sonata\CoreBundle\Form\Type\ColorSelectorType instance
     */
    protected function getSonata_Core_Form_Type_ColorSelectorService()
    {
        return $this->services['sonata.core.form.type.color_selector'] = new \Sonata\CoreBundle\Form\Type\ColorSelectorType();
    }

    /**
     * Gets the 'sonata.core.form.type.date_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DatePickerType A Sonata\CoreBundle\Form\Type\DatePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType($this->get('sonata.core.date.moment_format_converter'), $this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangeType A Sonata\CoreBundle\Form\Type\DateRangeType instance
     */
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\CoreBundle\Form\Type\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangePickerType A Sonata\CoreBundle\Form\Type\DateRangePickerType instance
     */
    protected function getSonata_Core_Form_Type_DateRangePickerService()
    {
        return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimePickerType A Sonata\CoreBundle\Form\Type\DateTimePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType($this->get('sonata.core.date.moment_format_converter'), $this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangeType A Sonata\CoreBundle\Form\Type\DateTimeRangeType instance
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType A Sonata\CoreBundle\Form\Type\DateTimeRangePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.equal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\EqualType A Sonata\CoreBundle\Form\Type\EqualType instance
     */
    protected function getSonata_Core_Form_Type_EqualService()
    {
        return $this->services['sonata.core.form.type.equal'] = new \Sonata\CoreBundle\Form\Type\EqualType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.translatable_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\TranslatableChoiceType A Sonata\CoreBundle\Form\Type\TranslatableChoiceType instance
     */
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.model.adapter.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain A Sonata\CoreBundle\Model\Adapter\AdapterChain instance
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.slugify.cocur' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocur\Slugify\Slugify A Cocur\Slugify\Slugify instance
     *
     * @deprecated The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will soon be removed.
     */
    protected function getSonata_Core_Slugify_CocurService()
    {
        @trigger_error('The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.cocur'] = new \Cocur\Slugify\Slugify();
    }

    /**
     * Gets the 'sonata.core.slugify.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Component\NativeSlugify A Sonata\CoreBundle\Component\NativeSlugify instance
     *
     * @deprecated The "sonata.core.slugify.native" service is deprecated. You should stop using it, as it will soon be removed.
     */
    protected function getSonata_Core_Slugify_NativeService()
    {
        @trigger_error('The "sonata.core.slugify.native" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
    }

    /**
     * Gets the 'sonata.core.twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension A Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension instance
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension();
    }

    /**
     * Gets the 'sonata.core.twig.extension.wrapping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FormTypeExtension A Sonata\CoreBundle\Twig\Extension\FormTypeExtension instance
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard');
    }

    /**
     * Gets the 'sonata.core.twig.status_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension A Sonata\CoreBundle\Twig\Extension\StatusExtension instance
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();

        $instance->addStatusService($this->get('sonata.core.flashmessage.manager'));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.twig.template_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\TemplateExtension A Sonata\CoreBundle\Twig\Extension\TemplateExtension instance
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, $this->get('translator'), $this->get('sonata.core.model.adapter.chain'));
    }

    /**
     * Gets the 'sonata.core.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator A Sonata\CoreBundle\Validator\InlineValidator instance
     */
    protected function getSonata_Core_Validator_InlineService()
    {
        return $this->services['sonata.core.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('test@test.com');
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/translations/FOSOAuthServerBundle.fr.yml'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fr.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.fr.xliff'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fr.xliff')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt_BR.xliff')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/translations/FOSOAuthServerBundle.sl.yml'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sl.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sl.xliff')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.cs.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.cs.xliff')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hr.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hr.xliff')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.es.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.es.xliff')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lb.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lb.xliff')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ca.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ca.xliff')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ar.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ar.xliff')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sk.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sk.xliff')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt.xliff')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.no.xliff')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/translations/FOSOAuthServerBundle.de.yml'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.de.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.de.xliff'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.de.xliff')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.bg.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.bg.xliff')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ro.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ro.xliff')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hu.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.hu.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hu.xliff')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.uk.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.uk.xliff')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.zh_CN.xliff')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ru.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ru.xliff')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lt.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lt.xliff')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.nl.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.nl.xliff')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fa.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fa.xliff')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pl.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pl.xliff')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ja.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ja.xliff')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.eu.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.eu.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fi.xliff')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/translations/FOSOAuthServerBundle.en.yml'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.en.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.en.xliff'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.en.xliff')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.it.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.it.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.it.xliff')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml')), 'sv_SE' => array(0 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sv_SE.xliff')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('knp_menu.matcher');

        $d = new \Knp\Menu\Util\MenuManipulator();

        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('dev');
        $e->setDebug(true);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($b);
        }

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig', 1 => 'form_div_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'AppBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension($this->get('nelmio_api_doc.twig.extension.extra_markdown'));
        $instance->addExtension($this->get('sonata.core.flashmessage.twig.extension'));
        $instance->addExtension($this->get('sonata.core.twig.extension.wrapping'));
        $instance->addExtension($this->get('sonata.core.twig.extension.text'));
        $instance->addExtension($this->get('sonata.core.twig.status_extension'));
        $instance->addExtension($this->get('sonata.core.twig.template_extension'));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'), $d, $c), $c, $d));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.api'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.map'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.map.static'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.place_autocomplete'));
        $instance->addExtension(new \Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $e);
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        $instance->addGlobal('sonata_admin', $this->get('sonata.admin.twig.global'));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/FOSUserBundle/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/views'), 'FOSOAuthServer');
        $instance->addPath(($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), 'NelmioApiDoc');
        $instance->addPath(($this->targetDirs[3].'/src/ApiBundle/Resources/views'), 'Api');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views'), 'SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'/src/AdminBundle/Resources/views'), 'Admin');
        $instance->addPath(($this->targetDirs[3].'/vendor/egeloen/google-map-bundle/Resources/views'), 'IvoryGoogleMap');
        $instance->addPath(($this->targetDirs[3].'/vendor/php-http/httplug-bundle/Resources/views'), 'Httplug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('sdkj433sdDFdssdFsdsz5asdkfh87y3');
    }

    /**
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory($this->get('validator.validator_factory'));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.util.canonical_fields_updater'))));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'httplug.collector.collector' => array(0 => 'httplug', 1 => 'HttplugBundle::webprofiler.html.twig'), 'sonata.block.data_collector' => array(0 => 'block', 1 => 'SonataBlockBundle:Profiler:block.html.twig'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[3].'/app/../web'), true);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'debug.security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager A Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager instance
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');

        $this->services['debug.security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true));

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)));

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the 'fos_oauth_server.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getFosOauthServer_EntityManagerService()
    {
        return $this->services['fos_oauth_server.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\RestBundle\Request\ParamReader A FOS\RestBundle\Request\ParamReader instance
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_user.user_provider.username' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Security\UserProvider A FOS\UserBundle\Security\UserProvider instance
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.util.canonical_fields_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater A FOS\UserBundle\Util\CanonicalFieldsUpdater instance
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the 'fos_user.util.password_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater A FOS\UserBundle\Util\PasswordUpdater instance
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'httplug.collector.collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Http\HttplugBundle\Collector\Collector A Http\HttplugBundle\Collector\Collector instance
     */
    protected function getHttplug_Collector_CollectorService()
    {
        return $this->services['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector(array(0 => 'acme'));
    }

    /**
     * Gets the 'httplug.collector.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Http\HttplugBundle\Collector\Formatter A Http\HttplugBundle\Collector\Formatter instance
     */
    protected function getHttplug_Collector_FormatterService()
    {
        return $this->services['httplug.collector.formatter'] = new \Http\HttplugBundle\Collector\Formatter(new \Http\Message\Formatter\FullHttpMessageFormatter(0));
    }

    /**
     * Gets the 'httplug.plugin.stopwatch.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Http\HttplugBundle\Collector\ProfilePlugin A Http\HttplugBundle\Collector\ProfilePlugin instance
     */
    protected function getHttplug_Plugin_Stopwatch_DebugService()
    {
        return $this->services['httplug.plugin.stopwatch.debug'] = new \Http\HttplugBundle\Collector\ProfilePlugin(new \Http\Client\Common\Plugin\StopwatchPlugin($this->get('debug.stopwatch')), $this->get('httplug.collector.collector'), $this->get('httplug.collector.formatter'), 'httplug.plugin.stopwatch');
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener A Symfony\Component\Security\Http\Firewall\AccessListener instance
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.token_storage'), $this->get('debug.security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }

    /**
     * Gets the 'security.access_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\AccessMap A Symfony\Component\Security\Http\AccessMap instance
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api-doc'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_ADMIN'), NULL);

        return $instance;
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_provider.username');
        $b = $this->get('security.user_checker.api');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider($a, $this->get('fos_oauth_server.server'), $b), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $this->get('security.encoder_factory'), true), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('58bc299fec26b8.74276895')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.channel_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener A Symfony\Component\Security\Http\Firewall\ChannelListener instance
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.http_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils A Symfony\Component\Security\Http\HttpUtils instance
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the 'serializer.encoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Serializer\Encoder\JsonEncoder A Symfony\Component\Serializer\Encoder\JsonEncoder instance
     */
    protected function getSerializer_Encoder_JsonService()
    {
        return $this->services['serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder();
    }

    /**
     * Gets the 'serializer.encoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Serializer\Encoder\XmlEncoder A Symfony\Component\Serializer\Encoder\XmlEncoder instance
     */
    protected function getSerializer_Encoder_XmlService()
    {
        return $this->services['serializer.encoder.xml'] = new \Symfony\Component\Serializer\Encoder\XmlEncoder();
    }

    /**
     * Gets the 'serializer.normalizer.object' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ObjectNormalizer A Symfony\Component\Serializer\Normalizer\ObjectNormalizer instance
     */
    protected function getSerializer_Normalizer_ObjectService()
    {
        return $this->services['serializer.normalizer.object'] = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')))), NULL), new \Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter(), $this->get('property_accessor'), NULL);
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'sonata.block.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager A Sonata\BlockBundle\Block\BlockServiceManager instance
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array());
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array());
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', array());

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'validator.validator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory A Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory instance
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique', 'AppBundle\\Validator\\UniqueCityOfRegionValidator' => 'app.validator.constraint.unique_city_of_region', 'sonata.core.validator.inline' => 'sonata.core.validator.inline', 'Sonata\\CoreBundle\\Validator\\InlineValidator' => 'sonata.admin.validator.inline', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline'));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => ($this->targetDirs[3].'/app'),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'DMSFilterBundle' => 'DMS\\Bundle\\FilterBundle\\DMSFilterBundle',
                'SimpleBusCommandBusBundle' => 'SimpleBus\\SymfonyBridge\\SimpleBusCommandBusBundle',
                'SimpleBusEventBusBundle' => 'SimpleBus\\SymfonyBridge\\SimpleBusEventBusBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'ApiBundle' => 'ApiBundle\\ApiBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'AdminBundle' => 'AdminBundle\\AdminBundle',
                'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\IvoryGoogleMapBundle',
                'IvorySerializerBundle' => 'Ivory\\SerializerBundle\\IvorySerializerBundle',
                'HttplugBundle' => 'Http\\HttplugBundle\\HttplugBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'DMSFilterBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/dms/dms-filter-bundle/src/DMS/Bundle/FilterBundle'),
                    'namespace' => 'DMS\\Bundle\\FilterBundle',
                ),
                'SimpleBusCommandBusBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/simple-bus/symfony-bridge/src'),
                    'namespace' => 'SimpleBus\\SymfonyBridge',
                ),
                'SimpleBusEventBusBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/simple-bus/symfony-bridge/src'),
                    'namespace' => 'SimpleBus\\SymfonyBridge',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle'),
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'FOSOAuthServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle'),
                    'namespace' => 'FOS\\OAuthServerBundle',
                ),
                'NelmioApiDocBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle'),
                    'namespace' => 'Nelmio\\ApiDocBundle',
                ),
                'ApiBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/ApiBundle'),
                    'namespace' => 'ApiBundle',
                ),
                'SonataCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle'),
                    'namespace' => 'Sonata\\CoreBundle',
                ),
                'SonataBlockBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle'),
                    'namespace' => 'Sonata\\BlockBundle',
                ),
                'KnpMenuBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'SonataDoctrineORMAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ),
                'SonataAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle'),
                    'namespace' => 'Sonata\\AdminBundle',
                ),
                'AdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AdminBundle'),
                    'namespace' => 'AdminBundle',
                ),
                'IvoryGoogleMapBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/egeloen/google-map-bundle'),
                    'namespace' => 'Ivory\\GoogleMapBundle',
                ),
                'IvorySerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/egeloen/serializer-bundle'),
                    'namespace' => 'Ivory\\SerializerBundle',
                ),
                'HttplugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/php-http/httplug-bundle'),
                    'namespace' => 'Http\\HttplugBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'test',
            'database_user' => 'root',
            'database_password' => 123,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => 'test@test.com',
            'mailer_password' => NULL,
            'secret' => 'sdkj433sdDFdssdFsdsz5asdkfh87y3',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'sdkj433sdDFdssdFsdsz5asdkfh87y3',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => ($this->targetDirs[3].'/app/../var/sessions/dev'),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[3].'/app/config/routing_dev.yml'),
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig',
                1 => 'form_div_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => 'test@test.com',
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
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
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
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
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'dms.filter.mapping.loader.class' => 'DMS\\Filter\\Mapping\\Loader\\AnnotationLoader',
            'dms.filter.mapping.factory.class' => 'DMS\\Filter\\Mapping\\ClassMetadataFactory',
            'dms.filter.inner.filter.class' => 'DMS\\Filter\\Filter',
            'dms_filter.auto_filter_forms' => false,
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'AppBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[3].'/app/../web'),
            'assetic.write_to' => ($this->targetDirs[3].'/app/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/local/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'api',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'AppBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'test@test.com' => 'test@test.com',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'test@test.com' => 'test@test.com',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'doctrine_migrations.dir_name' => ($this->targetDirs[3].'/app/DoctrineMigrations'),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.organize_migrations' => false,
            'fos_oauth_server.server.class' => 'OAuth2\\OAuth2',
            'fos_oauth_server.security.authentication.provider.class' => 'FOS\\OAuthServerBundle\\Security\\Authentication\\Provider\\OAuthProvider',
            'fos_oauth_server.security.authentication.listener.class' => 'FOS\\OAuthServerBundle\\Security\\Firewall\\OAuthListener',
            'fos_oauth_server.security.entry_point.class' => 'FOS\\OAuthServerBundle\\Security\\EntryPoint\\OAuthEntryPoint',
            'fos_oauth_server.server.options' => array(

            ),
            'fos_oauth_server.model_manager_name' => NULL,
            'fos_oauth_server.model.client.class' => 'AppBundle\\Entity\\Client',
            'fos_oauth_server.model.access_token.class' => 'AppBundle\\Entity\\AccessToken',
            'fos_oauth_server.model.refresh_token.class' => 'AppBundle\\Entity\\RefreshToken',
            'fos_oauth_server.model.auth_code.class' => 'AppBundle\\Entity\\AuthCode',
            'fos_oauth_server.template.engine' => 'twig',
            'fos_oauth_server.authorize.form.type' => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType',
            'fos_oauth_server.authorize.form.name' => 'fos_oauth_server_authorize_form',
            'fos_oauth_server.authorize.form.validation_groups' => array(
                0 => 'Authorize',
                1 => 'Default',
            ),
            'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig',
            'nelmio_api_doc.exclude_sections' => array(

            ),
            'nelmio_api_doc.default_sections_opened' => true,
            'nelmio_api_doc.api_name' => 'API documentation',
            'nelmio_api_doc.sandbox.enabled' => true,
            'nelmio_api_doc.sandbox.endpoint' => NULL,
            'nelmio_api_doc.sandbox.accept_type' => NULL,
            'nelmio_api_doc.sandbox.body_format.formats' => array(
                0 => 'form',
                1 => 'json',
            ),
            'nelmio_api_doc.sandbox.body_format.default_format' => 'form',
            'nelmio_api_doc.sandbox.request_format.method' => 'format_param',
            'nelmio_api_doc.sandbox.request_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.formats' => array(
                'json' => 'application/json',
                'xml' => 'application/xml',
            ),
            'nelmio_api_doc.sandbox.entity_to_choice' => true,
            'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter',
            'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter',
            'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter',
            'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter',
            'nelmio_api_doc.formatter.swagger_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SwaggerFormatter',
            'nelmio_api_doc.sandbox.authentication' => NULL,
            'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor',
            'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension',
            'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension',
            'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor',
            'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler',
            'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler',
            'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler',
            'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler',
            'nelmio_api_doc.parser.collection_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\CollectionParser',
            'nelmio_api_doc.parser.form_errors_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormErrorsParser',
            'nelmio_api_doc.parser.json_serializable_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JsonSerializableParser',
            'nelmio_api_doc.request_listener.parameter' => '_doc',
            'nelmio_api_doc.event_listener.request.class' => 'Nelmio\\ApiDocBundle\\EventListener\\RequestListener',
            'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParser',
            'nelmio_api_doc.swagger.base_path' => '/api',
            'nelmio_api_doc.swagger.swagger_version' => '1.2',
            'nelmio_api_doc.swagger.api_version' => '0.1',
            'nelmio_api_doc.swagger.info' => array(
                'title' => 'Symfony2',
                'description' => 'My awesome Symfony2 app!',
                'TermsOfServiceUrl' => NULL,
                'contact' => NULL,
                'license' => NULL,
                'licenseUrl' => NULL,
            ),
            'nelmio_api_doc.swagger.model_naming_strategy' => 'dot_notation',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.core.form.mapping.type' => array(

            ),
            'sonata.core.form.mapping.extension' => array(

            ),
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'KnpMenuBundle::menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:list_email.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:list_html.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:show_email.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:show_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:show_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:show_html.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'sonata.admin.twig.extension.x_editable_type_mapping' => array(
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ),
            'sonata.admin.configuration.templates' => array(
                'user_block' => 'SonataAdminBundle:Core:user_block.html.twig',
                'add_block' => 'SonataAdminBundle:Core:add_block.html.twig',
                'layout' => 'SonataAdminBundle::standard_layout.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => 'SonataAdminBundle:CRUD:list_outer_rows_tree.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
                'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig',
                'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig',
                'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig',
                'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig',
                'button_create' => 'SonataAdminBundle:Button:create_button.html.twig',
                'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig',
                'button_history' => 'SonataAdminBundle:Button:history_button.html.twig',
                'button_list' => 'SonataAdminBundle:Button:list_button.html.twig',
                'button_show' => 'SonataAdminBundle:Button:show_button.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(

            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(

                    ),
                    'type' => 'sonata.admin.block.admin_list',
                    'roles' => array(

                    ),
                ),
            ),
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.breadcrumbs' => array(
                'child_admin_route' => 'edit',
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(
                'EDIT' => array(
                    0 => 'EDIT',
                ),
                'LIST' => array(
                    0 => 'LIST',
                ),
                'CREATE' => array(
                    0 => 'CREATE',
                ),
                'VIEW' => array(
                    0 => 'VIEW',
                ),
                'DELETE' => array(
                    0 => 'DELETE',
                ),
                'EXPORT' => array(
                    0 => 'EXPORT',
                ),
                'ALL' => array(
                    0 => 'ALL',
                ),
            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
                'uses' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.show.mosaic.button' => true,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'httplug.collector.collector' => array(
                    0 => 'httplug',
                    1 => 'HttplugBundle::webprofiler.html.twig',
                ),
                'sonata.block.data_collector' => array(
                    0 => 'block',
                    1 => 'SonataBlockBundle:Profiler:block.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
            'nelmio_api_doc.parser.form_type_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormTypeParser',
            'sonata.core.form.types' => array(
                0 => 'form.type.form',
                1 => 'form.type.choice',
                2 => 'form.type.entity',
                3 => 'fos_user.username_form_type',
                4 => 'fos_user.profile.form.type',
                5 => 'fos_user.registration.form.type',
                6 => 'fos_user.change_password.form.type',
                7 => 'fos_user.resetting.form.type',
                8 => 'fos_oauth_server.authorize.form.type',
                9 => 'sonata.core.form.type.array',
                10 => 'sonata.core.form.type.boolean',
                11 => 'sonata.core.form.type.collection',
                12 => 'sonata.core.form.type.translatable_choice',
                13 => 'sonata.core.form.type.date_range',
                14 => 'sonata.core.form.type.datetime_range',
                15 => 'sonata.core.form.type.date_picker',
                16 => 'sonata.core.form.type.datetime_picker',
                17 => 'sonata.core.form.type.date_range_picker',
                18 => 'sonata.core.form.type.datetime_range_picker',
                19 => 'sonata.core.form.type.equal',
                20 => 'sonata.core.form.type.color_selector',
                21 => 'sonata.block.form.type.block',
                22 => 'sonata.block.form.type.container_template',
                23 => 'sonata.admin.form.type.admin',
                24 => 'sonata.admin.form.type.model_choice',
                25 => 'sonata.admin.form.type.model_list',
                26 => 'sonata.admin.form.type.model_reference',
                27 => 'sonata.admin.form.type.model_hidden',
                28 => 'sonata.admin.form.type.model_autocomplete',
                29 => 'sonata.admin.form.type.collection',
                30 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                31 => 'sonata.admin.form.filter.type.number',
                32 => 'sonata.admin.form.filter.type.choice',
                33 => 'sonata.admin.form.filter.type.default',
                34 => 'sonata.admin.form.filter.type.date',
                35 => 'sonata.admin.form.filter.type.daterange',
                36 => 'sonata.admin.form.filter.type.datetime',
                37 => 'sonata.admin.form.filter.type.datetime_range',
                38 => 'ivory.google_map.form.type.place_autocomplete',
            ),
            'sonata.core.form.type_extensions' => array(
                0 => 'form.type_extension.form.http_foundation',
                1 => 'form.type_extension.form.validator',
                2 => 'form.type_extension.repeated.validator',
                3 => 'form.type_extension.submit.validator',
                4 => 'form.type_extension.upload.validator',
                5 => 'form.type_extension.csrf',
                6 => 'form.type_extension.form.data_collector',
                7 => 'dms.filter.type_extension',
                8 => 'nelmio_api_doc.form.extension.description_form_type_extension',
                9 => 'sonata.admin.form.extension.field',
                10 => 'sonata.admin.form.extension.field.mopa',
                11 => 'sonata.admin.form.extension.choice',
            ),
        );
    }
}

class DoctrineORMEntityManager_0000000070317dec00000000264ab5ee4e880008c4bad91b13f5820077384702 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder58bc29a0b0d6c748718184 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58bc29a0b0d7b384223338 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58bc29a0b0d49301707381 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getConnection', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataFactory()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getMetadataFactory', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getExpressionBuilder', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'beginTransaction', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->beginTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getCache', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'transactional', array('func' => $func), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'commit', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'rollback', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->rollback();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata($className)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getClassMetadata', array('className' => $className), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'createQuery', array('dql' => $dql), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'createNamedQuery', array('name' => $name), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'createQueryBuilder', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function flush($entity = null)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'flush', array('entity' => $entity), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->flush($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getPartialReference($entityName, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function clear($entityName = null)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'clear', array('entityName' => $entityName), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'close', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->close();
    }

    /**
     * {@inheritDoc}
     */
    public function persist($entity)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'persist', array('entity' => $entity), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($entity)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'remove', array('entity' => $entity), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->remove($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function refresh($entity)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'refresh', array('entity' => $entity), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->refresh($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function detach($entity)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'detach', array('entity' => $entity), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function merge($entity)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'merge', array('entity' => $entity), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function copy($entity, $deep = false)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->copy($entity, $deep);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository($entityName)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getRepository($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($entity)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'contains', array('entity' => $entity), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getEventManager', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getConfiguration', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'isOpen', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getUnitOfWork', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getUnitOfWork();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->newHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getProxyFactory', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'initializeObject', array('obj' => $obj), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'getFilters', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'isFiltersStateClean', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'hasFilters', array(), $this->initializer58bc29a0b0d7b384223338);

        return $this->valueHolder58bc29a0b0d6c748718184->hasFilters();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer58bc29a0b0d7b384223338 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, '__get', array('name' => $name), $this->initializer58bc29a0b0d7b384223338);

        if (isset(self::$publicProperties58bc29a0b0d49301707381[$name])) {
            return $this->valueHolder58bc29a0b0d6c748718184->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b0d6c748718184;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b0d6c748718184;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58bc29a0b0d7b384223338);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b0d6c748718184;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b0d6c748718184;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, '__isset', array('name' => $name), $this->initializer58bc29a0b0d7b384223338);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b0d6c748718184;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b0d6c748718184;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, '__unset', array('name' => $name), $this->initializer58bc29a0b0d7b384223338);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b0d6c748718184;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b0d6c748718184;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, '__clone', array(), $this->initializer58bc29a0b0d7b384223338);

        $this->valueHolder58bc29a0b0d6c748718184 = clone $this->valueHolder58bc29a0b0d6c748718184;
    }

    public function __sleep()
    {
        $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, '__sleep', array(), $this->initializer58bc29a0b0d7b384223338);

        return array('valueHolder58bc29a0b0d6c748718184');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer58bc29a0b0d7b384223338 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer58bc29a0b0d7b384223338;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer58bc29a0b0d7b384223338 && $this->initializer58bc29a0b0d7b384223338->__invoke($this->valueHolder58bc29a0b0d6c748718184, $this, 'initializeProxy', array(), $this->initializer58bc29a0b0d7b384223338);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder58bc29a0b0d6c748718184;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder58bc29a0b0d6c748718184;
    }


}

class FOSUserBundleDoctrineUserManager_0000000070317e4300000000264ab5ee4e880008c4bad91b13f5820077384702 extends \FOS\UserBundle\Doctrine\UserManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder58bc29a0b6c9e012643921 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58bc29a0b6cac326799496 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58bc29a0b6c82056988705 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function deleteUser(\FOS\UserBundle\Model\UserInterface $user)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'deleteUser', array('user' => $user), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->deleteUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getClass()
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'getClass', array(), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->getClass();
    }

    /**
     * {@inheritDoc}
     */
    public function findUserBy(array $criteria)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'findUserBy', array('criteria' => $criteria), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->findUserBy($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function findUsers()
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'findUsers', array(), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->findUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function reloadUser(\FOS\UserBundle\Model\UserInterface $user)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'reloadUser', array('user' => $user), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->reloadUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function updateUser(\FOS\UserBundle\Model\UserInterface $user, $andFlush = true)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'updateUser', array('user' => $user, 'andFlush' => $andFlush), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->updateUser($user, $andFlush);
    }

    /**
     * {@inheritDoc}
     */
    public function createUser()
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'createUser', array(), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->createUser();
    }

    /**
     * {@inheritDoc}
     */
    public function findUserByEmail($email)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'findUserByEmail', array('email' => $email), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->findUserByEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function findUserByUsername($username)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'findUserByUsername', array('username' => $username), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->findUserByUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function findUserByUsernameOrEmail($usernameOrEmail)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'findUserByUsernameOrEmail', array('usernameOrEmail' => $usernameOrEmail), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->findUserByUsernameOrEmail($usernameOrEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function findUserByConfirmationToken($token)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'findUserByConfirmationToken', array('token' => $token), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->findUserByConfirmationToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function updateCanonicalFields(\FOS\UserBundle\Model\UserInterface $user)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'updateCanonicalFields', array('user' => $user), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->updateCanonicalFields($user);
    }

    /**
     * {@inheritDoc}
     */
    public function updatePassword(\FOS\UserBundle\Model\UserInterface $user)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'updatePassword', array('user' => $user), $this->initializer58bc29a0b6cac326799496);

        return $this->valueHolder58bc29a0b6c9e012643921->updatePassword($user);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer58bc29a0b6cac326799496 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, '__get', array('name' => $name), $this->initializer58bc29a0b6cac326799496);

        if (isset(self::$publicProperties58bc29a0b6c82056988705[$name])) {
            return $this->valueHolder58bc29a0b6c9e012643921->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b6c9e012643921;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b6c9e012643921;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58bc29a0b6cac326799496);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b6c9e012643921;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b6c9e012643921;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, '__isset', array('name' => $name), $this->initializer58bc29a0b6cac326799496);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b6c9e012643921;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b6c9e012643921;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, '__unset', array('name' => $name), $this->initializer58bc29a0b6cac326799496);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b6c9e012643921;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b6c9e012643921;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, '__clone', array(), $this->initializer58bc29a0b6cac326799496);

        $this->valueHolder58bc29a0b6c9e012643921 = clone $this->valueHolder58bc29a0b6c9e012643921;
    }

    public function __sleep()
    {
        $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, '__sleep', array(), $this->initializer58bc29a0b6cac326799496);

        return array('valueHolder58bc29a0b6c9e012643921');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer58bc29a0b6cac326799496 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer58bc29a0b6cac326799496;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer58bc29a0b6cac326799496 && $this->initializer58bc29a0b6cac326799496->__invoke($this->valueHolder58bc29a0b6c9e012643921, $this, 'initializeProxy', array(), $this->initializer58bc29a0b6cac326799496);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder58bc29a0b6c9e012643921;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder58bc29a0b6c9e012643921;
    }


}

class FOSRestBundleSerializerSymfonySerializerAdapter_000000007031784b00000000264ab5ee4e880008c4bad91b13f5820077384702 extends \FOS\RestBundle\Serializer\SymfonySerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder58bc29a0b812f266335407 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58bc29a0b813d947579866 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58bc29a0b8115622310140 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function serialize($data, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializer58bc29a0b813d947579866);

        return $this->valueHolder58bc29a0b812f266335407->serialize($data, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function deserialize($data, $type, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializer58bc29a0b813d947579866);

        return $this->valueHolder58bc29a0b812f266335407->deserialize($data, $type, $format, $context);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer58bc29a0b813d947579866 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, '__get', array('name' => $name), $this->initializer58bc29a0b813d947579866);

        if (isset(self::$publicProperties58bc29a0b8115622310140[$name])) {
            return $this->valueHolder58bc29a0b812f266335407->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b812f266335407;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b812f266335407;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58bc29a0b813d947579866);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b812f266335407;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b812f266335407;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, '__isset', array('name' => $name), $this->initializer58bc29a0b813d947579866);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b812f266335407;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b812f266335407;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, '__unset', array('name' => $name), $this->initializer58bc29a0b813d947579866);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58bc29a0b812f266335407;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder58bc29a0b812f266335407;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, '__clone', array(), $this->initializer58bc29a0b813d947579866);

        $this->valueHolder58bc29a0b812f266335407 = clone $this->valueHolder58bc29a0b812f266335407;
    }

    public function __sleep()
    {
        $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, '__sleep', array(), $this->initializer58bc29a0b813d947579866);

        return array('valueHolder58bc29a0b812f266335407');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer58bc29a0b813d947579866 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer58bc29a0b813d947579866;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer58bc29a0b813d947579866 && $this->initializer58bc29a0b813d947579866->__invoke($this->valueHolder58bc29a0b812f266335407, $this, 'initializeProxy', array(), $this->initializer58bc29a0b813d947579866);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder58bc29a0b812f266335407;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder58bc29a0b812f266335407;
    }


}
