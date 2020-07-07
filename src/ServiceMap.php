<?php


namespace LiveStyled;


use LiveStyled\App\AppService;
use LiveStyled\Booking\BookingService;
use LiveStyled\Cohort\CohortService;
use LiveStyled\Competition\CompetitionService;
use LiveStyled\Currency\CurrencyService;
use LiveStyled\Device\DeviceService;
use LiveStyled\DevicePreference\DevicePreferenceService;
use LiveStyled\DeviceToken\DeviceTokenService;
use LiveStyled\Event\EventService;
use LiveStyled\EventActivity\EventActivityService;
use LiveStyled\EventCategory\EventCategoryService;
use LiveStyled\EventDate\EventDateService;
use LiveStyled\EventIntegration\EventIntegrationService;
use LiveStyled\EventStage\EventStageService;
use LiveStyled\EventTranslation\EventTranslationService;
use LiveStyled\EventUserAction\EventUserActionService;
use LiveStyled\Exception\ServiceNotFoundException;
use LiveStyled\Fixture\FixtureService;
use LiveStyled\Form\FormService;
use LiveStyled\FormField\FormFieldService;
use LiveStyled\FulfilmentPoint\FulfilmentPointService;
use LiveStyled\FulfilmentPointCategory\FulfilmentPointCategoryService;
use LiveStyled\Integration\IntegrationService;
use LiveStyled\LeagueTable\LeagueTableService;
use LiveStyled\LeagueTableGroup\LeagueTableGroupService;
use LiveStyled\LoyaltyGroup\LoyaltyGroupsService;
use LiveStyled\MagicFields\MagicFieldsService;
use LiveStyled\MerchantCustomer\MerchantCustomerService;
use LiveStyled\News\NewsService;
use LiveStyled\Order\OrderService;
use LiveStyled\Product\ProductService;
use LiveStyled\ProductCategory\ProductCategoryService;
use LiveStyled\ProductModifierItem\ProductModifierItemService;
use LiveStyled\ProductModifierList\ProductModifierListService;
use LiveStyled\ProductModifierListTranslation\ProductModifierListTranslationService;
use LiveStyled\ProductVariant\ProductVariantService;
use LiveStyled\ProductVariantStock\ProductVariantStockService;
use LiveStyled\PushApp\PushAppService;
use LiveStyled\PushBroadcast\PushBroadcastService;
use LiveStyled\PushConsent\PushConsentService;
use LiveStyled\Season\SeasonService;
use LiveStyled\SocialMedia\SocialMediaService;
use LiveStyled\SocialMediaTranslation\SocialMediaTranslationService;
use LiveStyled\SportVenue\SportVenueService;
use LiveStyled\Team\TeamService;
use LiveStyled\Ticket\TicketService;
use LiveStyled\TicketAuth\TicketAuthService;
use LiveStyled\TicketIntegration\TicketIntegration;
use LiveStyled\UsefulInfo\UsefulInfoService;
use LiveStyled\UsefulInfoTranslation\UsefulInfoTranslation;
use LiveStyled\User\UsersService;
use LiveStyled\UserEmail\UserEmailService;
use LiveStyled\UserInfo\UserInfoService;
use LiveStyled\Venue\VenueService;
use LiveStyled\Workflow\WorkflowService;
use LiveStyled\WorkflowAction\WorkflowActionService;
use LiveStyled\WorkflowTrigger\WorkflowTriggerService;

class ServiceMap
{
    const APP = 'app';
    const BOOKING = 'booking';
    const COHORT = 'cohort';
    const COMPETITION = 'competition';
    const CURRENCY = 'currency';
    const DEVICE = 'device';
    const DEVICE_PREFERENCE = 'device_preference';
    const DEVICE_TOKEN = 'device_token';
    const EVENT = 'event';
    const EVENT_ACTIVITY = 'event_activity';
    const EVENT_CATEGORY = 'event_category';
    const EVENT_DATE = 'event_date';
    const EVENT_INTEGRATION = 'event_integration';
    const EVENT_STAGE = 'event_stage';
    const EVENT_TRANSLATION = 'event_translation';
    const EVENT_USER_ACTION = 'event_user_action';
    const FIXTURE = 'fixture';
    const FORM = 'form';
    const FORM_FIELD = 'form_field';
    const FULFILMENT_POINT = 'fulfilment_point';
    const FULFILMENT_POINT_CATEGORY = 'fulfilment_point_category';
    const INTEGRATION = 'integration';
    const LEAGUE_TABLE = 'league_table';
    const LEAGUE_TABLE_GROUP = 'league_table_group';
    const LOYALTY_GROUP = 'loyalty_group';
    const MAGIC_FIELD = 'magic_field';
    const MERCHANT_CUSTOMER = 'merchant_customer';
    const NEWS = 'news';
    const ORDER = 'order';
    const PRODUCT = 'product';
    const PRODUCT_CATEGORY = 'product_category';
    const PRODUCT_MODIFIER_ITEM = 'product_modifier_item';
    const PRODUCT_MODIFIER_LIST = 'product_modifier_list';
    const PRODUCT_MODIFIER_LIST_TRANSLATION = 'product_modifier_list_translation';
    const PRODUCT_VARIANT = 'product_variant';
    const PRODUCT_VARIANT_STOCK = 'product_variant_stock';
    const PUSH_APP = 'push_app';
    const PUSH_BROADCAST = 'push_broadcast';
    const PUSH_CONSENT = 'push_consent';
    const SEASON = 'season';
    const SOCIAL_MEDIA = 'social_media';
    const SOCIAL_MEDIA_TRANSLATION = 'social_media_translation';
    const SPORT_VENUE = 'sport_venue';
    const TEAM = 'team';
    const TICKET = 'ticket';
    const TICKET_AUTH = 'ticket_auth';
    const TICKET_INTEGRATION = 'ticket_integration';
    const USEFUL_INFO = 'useful_info';
    const USEFUL_INFO_TRANSLATION = 'useful_info_translation';
    const USER = 'user';
    const USER_EMAIL = 'user_email';
    const USER_INFO = 'user_info';
    const VENUE = 'venue';
    const WORKFLOW = 'workflow';
    const WORKFLOW_ACTION = 'workflow_action';
    const WORKFLOW_TRIGGER = 'workflow_trigger';

    const SERVICE_MAP = [
        self::APP => AppService::class,
        self::BOOKING => BookingService::class,
        self::COHORT => CohortService::class,
        self::COMPETITION => CompetitionService::class,
        self::CURRENCY => CurrencyService::class,
        self::DEVICE => DeviceService::class,
        self::DEVICE_PREFERENCE => DevicePreferenceService::class,
        self::DEVICE_TOKEN => DeviceTokenService::class,
        self::EVENT => EventService::class,
        self::EVENT_ACTIVITY => EventActivityService::class,
        self::EVENT_CATEGORY => EventCategoryService::class,
        self::EVENT_DATE => EventDateService::class,
        self::EVENT_INTEGRATION => EventIntegrationService::class,
        self::EVENT_STAGE => EventStageService::class,
        self::EVENT_TRANSLATION => EventTranslationService::class,
        self::EVENT_USER_ACTION => EventUserActionService::class,
        self::FIXTURE => FixtureService::class,
        self::FORM => FormService::class,
        self::FORM_FIELD => FormFieldService::class,
        self::FULFILMENT_POINT => FulfilmentPointService::class,
        self::FULFILMENT_POINT_CATEGORY => FulfilmentPointCategoryService::class,
        self::INTEGRATION => IntegrationService::class,
        self::LEAGUE_TABLE => LeagueTableService::class,
        self::LEAGUE_TABLE_GROUP => LeagueTableGroupService::class,
        self::LOYALTY_GROUP => LoyaltyGroupsService::class,
        self::MAGIC_FIELD => MagicFieldsService::class,
        self::MERCHANT_CUSTOMER => MerchantCustomerService::class,
        self::NEWS => NewsService::class,
        self::ORDER => OrderService::class,
        self::PRODUCT => ProductService::class,
        self::PRODUCT_CATEGORY => ProductCategoryService::class,
        self::PRODUCT_MODIFIER_ITEM => ProductModifierItemService::class,
        self::PRODUCT_MODIFIER_LIST => ProductModifierListService::class,
        self::PRODUCT_MODIFIER_LIST_TRANSLATION => ProductModifierListTranslationService::class,
        self::PRODUCT_VARIANT => ProductVariantService::class,
        self::PRODUCT_VARIANT_STOCK => ProductVariantStockService::class,
        self::PUSH_APP => PushAppService::class,
        self::PUSH_BROADCAST => PushBroadcastService::class,
        self::PUSH_CONSENT => PushConsentService::class,
        self::SEASON => SeasonService::class,
        self::SOCIAL_MEDIA => SocialMediaService::class,
        self::SOCIAL_MEDIA_TRANSLATION => SocialMediaTranslationService::class,
        self::SPORT_VENUE => SportVenueService::class,
        self::TEAM => TeamService::class,
        self::TICKET => TicketService::class,
        self::TICKET_AUTH => TicketAuthService::class,
        self::TICKET_INTEGRATION => TicketIntegration::class,
        self::USEFUL_INFO => UsefulInfoService::class,
        self::USEFUL_INFO_TRANSLATION => UsefulInfoTranslation::class,
        self::USER => UsersService::class,
        self::USER_EMAIL => UserEmailService::class,
        self::USER_INFO => UserInfoService::class,
        self::VENUE => VenueService::class,
        self::WORKFLOW => WorkflowService::class,
        self::WORKFLOW_ACTION => WorkflowActionService::class,
        self::WORKFLOW_TRIGGER => WorkflowTriggerService::class,
    ];

    /**
     * @param string $service
     * @return string
     * @throws ServiceNotFoundException
     */
    public function resolve(string $service): string
    {
        if (!array_key_exists($service, self::SERVICE_MAP)) {
            throw new ServiceNotFoundException("No such service {$service}");
        }

        return self::SERVICE_MAP[$service];
    }
}
